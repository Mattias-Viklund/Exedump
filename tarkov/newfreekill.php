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
require_once("../config.php");
$maxNameLength = 20;
// define variables and set to empty values
$myname = $othername = "";
$myNameErr = $otherNameErr = "";
$added = false;
if ($_SERVER["REQUEST_METHOD"] == "POST") {
$myname = strtolower(test_input($_POST["myname"]));
$othername = test_input($_POST["othername"]);
if (empty($_POST["myname"])) {
$myNameErr = "Your username is required";
} else if (strlen($maxNameLength) > $maxNameLength) {
$otherNameErr = "Your username cannot be longer than 20.";
}
if (empty($_POST["othername"])) {
$otherNameErr = "Recipient username required";
} else if (strlen($maxNameLength) > $maxNameLength) {
$otherNameErr = "Recipient username cannot be longer than 20.";
}
if (!empty($myNameErr) && !empty($otherNameErr))
return;
$sql = "INSERT INTO `freekills` (myname, othername) VALUES (?, ?)";
$stmt = mysqli_prepare($link, $sql);
if ($stmt) {
mysqli_stmt_bind_param($stmt, "ss", $param_myname, $param_othername);
$param_myname = $myname;
$param_othername = $othername;
if (mysqli_stmt_execute($stmt)) {
$added = true;
} else {
echo "Something went wrong. Please try again later. insert into";
}
mysqli_stmt_close($stmt);
}
mysqli_close($link);
}
function test_input($data)
{
$data = trim($data);
$data = stripslashes($data);
$data = htmlspecialchars($data);
return $data;
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
<p>Create a new Free-Kill pass.
Really useful when you pissed off a close friend.
<br>
<br>
<br>
<br>
Damn I spent too much time on this.
</p>
</div>
<div class="col-sm-10 m-content">
<p>Create new Free-Kill pass.</p>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
<?php echo "<p>" . $myNameErr . "</p>"; ?>
Your Username: <input type="text" name="myname" value=<?php echo $myname; ?>><br>
<?php echo "<p>" . $otherNameErr . "</p>"; ?>
Recipient Username: <input id="othername" type="text" name="othername"><br>
<input type="submit" value="Submit">
</form>
<script>
document.getElementById("othername").focus();
</script>
<?php
if ($added) {
echo '<h4>Successfully added Free-Kill pass.</h4>';
}
?>
</div>
</div>
</div>
</body>
</html>
