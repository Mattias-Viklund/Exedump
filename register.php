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
require_once "config.php";
$err = $username = $password = $confirm_password = "";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
if (empty(trim($_POST["username"]))) {
$err = "Please enter a username.";
} else {
$sql = "SELECT id FROM users WHERE username = ?";
if ($stmt = mysqli_prepare($link, $sql)) {
mysqli_stmt_bind_param($stmt, "s", $param_username);
$param_username = trim($_POST["username"]);
if (mysqli_stmt_execute($stmt)) {
mysqli_stmt_store_result($stmt);
if (mysqli_stmt_num_rows($stmt) == 1) {
$err = "This username is already taken.";
} else {
$username = trim($_POST["username"]);
}
} else {
echo "Something went wrong. Please try again later.";
}
}
mysqli_stmt_close($stmt);
}
if (empty(trim($_POST["password"]))) {
$err = "Please enter a password.";
} elseif (strlen(trim($_POST["password"])) < 6) {
$err = "Password must have atleast 6 characters.";
} else {
$password = trim($_POST["password"]);
}
if (empty(trim($_POST["confirm_password"]))) {
$err = "Please confirm password.";
} else {
$confirm_password = trim($_POST["confirm_password"]);
if (empty($password_err) && ($password != $confirm_password)) {
$err = "Password did not match.";
}
}
if (empty($err)) {
$sql = "INSERT INTO users (username, password) VALUES (?, ?)";
if ($stmt = mysqli_prepare($link, $sql)) {
mysqli_stmt_bind_param($stmt, "ss", $param_username, $param_password);
$param_username = $username;
$param_password = password_hash($password, PASSWORD_DEFAULT);
if (mysqli_stmt_execute($stmt)) {
header("location: login.php");
} else {
echo "Something went wrong. Please try again later.";
}
}
mysqli_stmt_close($stmt);
}
mysqli_close($link);
}
?>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
<link rel="stylesheet" type="text/css" href="blog.css">
<title>Sign Up</title>
</head>
<body>
<a href="index.php"><img class="title-img" src="/img/title.png" width="512px"/></a>
<nav class="navbar navbar-expand-md m-dark">
<a class="navbar-brand m-shade" href="index.php">EXEDUMP</a>
<button class="navbar-toggler m-light" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
<span class="navbar-toggler-icon"></span>
</button>
<div class="collapse navbar-collapse" id="collapsibleNavbar">
<ul class="navbar-nav">
<li class="nav-item"><a class="nav-link" href="/blog/index.php">BLOG</a></li>
<li class="nav-item"><a class="nav-link" href="/mume/index.php">MUME</a></li>
<li class="nav-item"><a class="nav-link" href="/blog/downloads.php">DOWNLOADS</a></li>
<li class="nav-item"><a class="nav-link" href="/tarkov/index.php">TARKOV</a></li>
<li class="nav-item"><a class="nav-link" href="account.php">ACCOUNT</a></li>
</ul>
</div>
</nav><br>
<div class="container-fluid">
<div class="row">
<div class="col sidebar">
<h3 class="m-shade">Create an account</h3>
<p>Glad you want to sign up,<br>I mean, there's nothing you can do on here<br>But it makes me happy either way.</p>
<p>Make sure you don't actually place one of your real passwords in here in case I get hacked.</p>
</div>
<div class="col-sm-10 m-content">
<h2>Sign Up</h2>
<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
<div>
<p><?php echo $err; ?></p>
</div>
<div>
<label>Username</label>
<input type="text" name="username" class="form-control" value="<?php echo $username; ?>">
</div>
<div>
<label>Password</label>
<input type="password" name="password" class="form-control" value="<?php echo $password; ?>">
</div>
<div>
<label>Confirm Password</label>
<input type="password" name="confirm_password" class="form-control" value="<?php echo $confirm_password; ?>">
</div>
<div class="form-group">
<input type="submit" class="btn btn-primary" value="Submit">
<input type="reset" class="btn btn-default" value="Reset">
</div>
<p>Already have an account? <a href="login.php">Login here</a>.</p>
</form>
</div>
</div>
</div>
</body>
</html>
