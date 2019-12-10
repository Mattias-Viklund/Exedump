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
$err = $username = $password = "";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
if (empty(trim($_POST["username"]))) {
$err = "Please enter username.";
} else {
$username = trim($_POST["username"]);
}
if (empty(trim($_POST["password"]))) {
$err = "Please enter your password.";
} else {
$password = trim($_POST["password"]);
}
if (empty($err)) {
$sql = "SELECT id, username, password, acctype FROM users WHERE username = ?";
if ($stmt = mysqli_prepare($link, $sql)) {
mysqli_stmt_bind_param($stmt, "s", $param_username);
$param_username = $username;
if (mysqli_stmt_execute($stmt)) {
mysqli_stmt_store_result($stmt);
if (mysqli_stmt_num_rows($stmt) == 1) {
mysqli_stmt_bind_result($stmt, $id, $username, $hashed_password, $acctype);
if (mysqli_stmt_fetch($stmt)) {
if (password_verify($password, $hashed_password)) {
session_start();
$_SESSION["loggedin"] = true;
$_SESSION["id"] = $id;
$_SESSION["username"] = $username;
$_SESSION["acctype"] = $acctype;
header("location: index.php");
} else {
$err = "The password you entered was not valid.";
}
}
} else {
$err = "No account found with that username.";
}
} else {
echo "Oops! Something went wrong. Please try again later.";
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
<title>Login</title>
</head>
<body>
<a href="index.php"><img class="title-img" src="/img/title.png" width="512px" /></a>
<nav class="navbar navbar-expand-md m-dark">
<a class="navbar-brand m-shade" href="index.php">EXEDUMP</a>
<button class="navbar-toggler m-light" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
<span class="navbar-toggler-icon"></span>
</button>
<div class="collapse navbar-collapse" id="collapsibleNavbar">
<ul class="navbar-nav">
<li class="nav-item"><a class="nav-link" href="/blog/index.php">BLOG</a></li>
<li class="nav-item"><a class="nav-link" href="/blog/downloads.php">DOWNLOADS</a></li>
<li class="nav-item"><a class="nav-link" href="account.php">ACCOUNT</a></li>
</ul>
</div>
</nav><br>
<div class="container-fluid">
<div class="row">
<div class="col sidebar">
<h3 class="m-shade">Sign in</h3>
<hr>
<p>Welcome to Exedump stranger. &lt;3</p>
</div>
<div class="col-sm-10 m-content">
<div class="wrapper">
<h2>Login</h2>
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
<input type="password" name="password" class="form-control">
</div>
<div class="form-group">
<input type="submit" class="btn btn-primary" value="Login">
</div>
<p>Don't have an account? <a href="register.php">Sign up now</a>.</p>
</form>
</div>
</div>
</div>
</div>
</body>
</html>
