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
<?php
// Include config files
require_once "session.php";
require_once "config.php";
// Define variables and initialize with empty values
$new_password = $confirm_password = "";
$new_password_err = $confirm_password_err = "";
// Processing form data when form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
// Validate new password
if (empty(trim($_POST["new_password"]))) {
$new_password_err = "Please enter the new password.";
} elseif (strlen(trim($_POST["new_password"])) < 6) {
$new_password_err = "Password must have atleast 6 characters.";
} else {
$new_password = trim($_POST["new_password"]);
}
// Validate confirm password
if (empty(trim($_POST["confirm_password"]))) {
$confirm_password_err = "Please confirm the password.";
} else {
$confirm_password = trim($_POST["confirm_password"]);
if (empty($new_password_err) && ($new_password != $confirm_password)) {
$confirm_password_err = "Password did not match.";
}
}
// Check input errors before updating the database
if (empty($new_password_err) && empty($confirm_password_err)) {
// Prepare an update statement
$sql = "UPDATE users SET password = ? WHERE id = ?";
if ($stmt = mysqli_prepare($link, $sql)) {
// Bind variables to the prepared statement as parameters
mysqli_stmt_bind_param($stmt, "si", $param_password, $param_id);
// Set parameters
$param_password = password_hash($new_password, PASSWORD_DEFAULT);
$param_id = $_SESSION["id"];
// Attempt to execute the prepared statement
if (mysqli_stmt_execute($stmt)) {
// Password updated successfully. Destroy the session, and redirect to login page
session_destroy();
header("location: login.php");
exit();
} else {
echo "Oops! Something went wrong. Please try again later.";
}
}
// Close statement
mysqli_stmt_close($stmt);
}
// Close connection
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
<title>Reset Password</title>
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
<h3 class="m-shade">Reset your password</h3>
<p>You got tired of your password?<br>Reset it.</p>
</div>
<div class="col-sm-10 m-content">
<h2>Reset Password</h2>
<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
<div class="form-group <?php echo (!empty($new_password_err)) ? 'has-error' : ''; ?>">
<label>New Password</label>
<input type="password" name="new_password" class="form-control" value="<?php echo $new_password; ?>">
<span class="help-block"><?php echo $new_password_err; ?></span>
</div>
<div class="form-group <?php echo (!empty($confirm_password_err)) ? 'has-error' : ''; ?>">
<label>Confirm Password</label>
<input type="password" name="confirm_password" class="form-control">
<span class="help-block"><?php echo $confirm_password_err; ?></span>
</div>
<div class="form-group">
<input type="submit" class="btn btn-primary" value="Submit">
<a class="btn btn-link" href="welcome.php">Cancel</a>
</div>
</form>
</div>
</div>
</div>
</body>
</html>
