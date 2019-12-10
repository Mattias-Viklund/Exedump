<?php
header('Set-Cookie: cross-site-cookie=name; SameSite=None; Secure');
// Initialize the session
session_start();
$is_user = $is_admin = false;
if (isset($_SESSION["acctype"])) {
$is_user = true;
$is_admin = (($_SESSION["acctype"] == 0) ? true : false);
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
<title>Delete Post</title>
</head>
<body>
<a href="../../index.php"><img class="title-img" src="/img/title.png" width="512px" /></a>
<nav class="navbar navbar-expand-md m-dark">
<a class="navbar-brand m-shade" href="../../index.php">EXEDUMP</a>
<button class="navbar-toggler m-light" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
<span class="navbar-toggler-icon"></span>
</button>
<div class="collapse navbar-collapse" id="collapsibleNavbar">
<ul class="navbar-nav">
<li class="nav-item"><a class="nav-link" href="/blog/index.php">BLOG</a></li>
<li class="nav-item"><a class="nav-link" href="/blog/downloads.php">DOWNLOADS</a></li>
<li class="nav-item"><a class="nav-link" href="../../account.php">ACCOUNT</a></li>
</ul>
</div>
</nav><br>
<div class="container-fluid">
<div class="row">
<div class="col sidebar">
<h3 class="m-shade">Delete</h3>
<p>Delete posts.</p>
</div>
<div class="col-sm-10 m-content">
<?php
if (!$is_admin)
{
echo "<p>You're not an admin. Go away, shoo.</p>";
die();
}
if ($_SERVER["REQUEST_METHOD"] == "POST") {
if (isset($_POST["id"])) {
require_once("../../config.php");
require_once("../articles.php");
delete_article($link, $_POST["id"]);
} else {
header("location: ../index.php");
}
} else {
if (isset($_GET["id"])) {
echo '<script>';
echo 'function goToRoot(){ ';
$root = (!empty($_SERVER['HTTPS']) ? 'https' : 'http') . '://' . $_SERVER['HTTP_HOST'] . '/';
echo 'window.location.href="' . $root . '"; ';
echo '}</script>';
} else {
header("location: ../index.php");
}
}
?>
<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST">
<label>Are you sure you want to delete this file?</label>
<br>
<label>ID:</label>
<input type="number" name="id" value="<?= $_GET["id"] ?>" readonly />
<br>
<input type="submit" value="Yes" style="display: inline;" />
</form>
<button onclick="goToRoot()">NO</button>
</div>
</div>
</div>
</body>
</html>
