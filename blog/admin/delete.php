<?php
// Initialize the session
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
<link rel="stylesheet" type="text/css" href="blog.css">
</head>
<body>
<div id="navbar">
<a href="index.php">Home</a>
<a href="index.php">Blog</a>
<a href="account.php">Account</a>
<a href="logout.php" style="float: right;">Sign Out</a>
<a href="admin.php" style="float: right;">Admin</a>
</div>
<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="get">
<label>Are you sure you want to delete this file?</label>
<br>
<label>ID:</label>
<input type="number" name="id" readonly>
<input type="submit" value="Yes">
<button onclick="GoBack();">NO</button>
</form>
<script>
function GoBack(){
<?php
$root = (!empty($_SERVER['HTTPS']) ? 'https' : 'http') . '://' . $_SERVER['HTTP_HOST'] . '/';
echo 'window.location.href = "'.$root.'";'
?>
}
</script>
</body>
</html>
