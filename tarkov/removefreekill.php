<?php
// Initialize the session
session_start();
$is_user = $is_admin = false;
if (isset($_SESSION["acctype"])) {
$is_user = true;
$is_admin = (($_SESSION["acctype"] == 0) ? true : false);
}
?>
<?php
require_once("../../config.php");
$deleted = false;
if ($_SERVER["REQUEST_METHOD"] == "POST") {
$id = test_input($_POST["id"]);
}
function get_freekills($link, $id)
{
$sql = "DELETE FROM `freekills` WHERE id=" . $id;
$stmt = mysqli_prepare($link, $sql);
echo $sql;
if ($stmt) {
if (mysqli_stmt_execute($stmt)) {
$deleted = true;
} else {
echo "Something went wrong. Please try again later.";
}
}
}
?>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
<link rel="stylesheet" type="text/css" href="../../blog.css">
<title>Tarkov Kill Pass</title>
</head>
<body>
<a href="../../index.php"><img class="title-img" src="/img/title.png" width="512px"/></a>
<nav class="navbar navbar-expand-md m-dark">
<a class="navbar-brand m-shade" href="../../index.php">EXEDUMP</a>
<button class="navbar-toggler m-light" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
<span class="navbar-toggler-icon"></span>
</button>
<div class="collapse navbar-collapse" id="collapsibleNavbar">
<ul class="navbar-nav">
<li class="nav-item"><a class="nav-link" href="/blog/index.php">BLOG</a></li>
<li class="nav-item"><a class="nav-link" href="/mume/index.php">MUME</a></li>
<li class="nav-item"><a class="nav-link" href="/blog/downloads.php">DOWNLOADS</a></li>
<li class="nav-item"><a class="nav-link" href="/tarkov/index.php">TARKOV</a></li>
<li class="nav-item"><a class="nav-link" href="../../account.php">ACCOUNT</a></li>
</ul>
</div>
</nav><br>
<div class="container-fluid">
<div class="row">
<div class="col sidebar">
<h3 class="m-shade">Kill Pass</h3>
</div>
<div class="col-sm-10 m-content">
<p>Get your Free Kill passes.</p>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
<?php echo $myNameErr; ?>
Your Username: <input type="text" name="myname"><br>
</form>
<?php
if ($deleted) {
echo "<h5>Deleted Free-Kill pass.</h5>";
}
?>
</div>
</div>
</div>
</body>
</html>
