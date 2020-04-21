<!DOCTYPE html>
<html lang="en">

<?php

$file = "";
if ($_SERVER['REQUEST_METHOD'] === 'GET') {
if (isset($_GET[""])) { }
}

// Parse with sections
$ini_array = parse_ini_file("accounts.ini", true);

$signedin = false;
$username = $password = "";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
if (isset($_POST["username"]) && isset($_POST["password"])) {
$username = strtolower($_POST["username"]);
$password = strtolower($_POST["password"]);

if ($password === strtolower($ini_array[$username]["password"]))
$signedin = true;
} else
$signedin = false;
}

if ($signedin == false) {
die("User does not exist, try a bit harder please.");
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
<form action="download.php" method="post">
<label>Download Files:</label>
<br>
<?php
if ($handle = opendir('./'.$username)) {
while (false !== ($entry = readdir($handle))) {
if ($entry != "." && $entry != "..") {
echo '<input type="submit" name="file_" value="./'.$username.'/'.$entry.'"><br>';
}
}
closedir($handle);
}
?>
</form>
</body>

</html>
