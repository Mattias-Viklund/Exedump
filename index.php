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
<link rel="stylesheet" type="text/css" href="blog.css">
<title>Welcome Home.</title>
<style>
.row {
height: 100%;
}
</style>
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
<h3 class="m-shade">Welcome Home</h3>
<hr>
<p>Welcome to Exedump, my hobby project.</p>
<br>
<p>I usually don't do much other than school and play games.</p>
<p>But on the offchance I actually do something.<br>It's likely you can find it at my <a href="https://github.com/mattias-viklund">Github</a>.</p>
<p>But if you're looking for something way deeper but also truly meaningless, head over to the <a href="blog/index.php">Blog</a> section, and take a peek.</p>
</div>
<div class="col-sm-10 m-content">
</div>
</div>
</div>
</body>
</html>
