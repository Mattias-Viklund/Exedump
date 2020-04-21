<!DOCTYPE html>
<html lang="en">

<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST["file_"])) {
// Get parameters
$file = urldecode($_REQUEST["file_"]); // Decode URL-encoded string

if (file_exists($file)) {
echo "Downloading file...";
header('Content-Description: File Transfer');
header('Content-Type: application/octet-stream');
header('Content-Disposition: attachment; filename="' . basename($file) . '"');
header('Expires: 0');
header('Cache-Control: must-revalidate');
header('Pragma: public');
header('Content-Length: ' . filesize($file));
flush(); // Flush system output buffer
readfile($file);
die();
} else {
http_response_code(404);
die();
}
}
?>

<head>
<meta charset="UTF-8">
<title>Download</title>
<style type="text/css">
.img-box {
display: inline-block;
text-align: center;
margin: 0 15px;
}
</style>
</head>

<body>
<form action="list.php" method="post">
<p>Enter credentials to download.</p>

<label>Username</label><br />
<input type="text" name="username" value="">
<br>
<label>Password</label><br />
<input type="password" name="password" value="">
<br><br>
<input type="submit" value="Submit">
</form>
</body>

</html>
