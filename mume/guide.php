<?php
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
<title>Class Guide</title>
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
<h3 class="m-shade">Beginners Guide</h3>
<hr>
<p>Written by Me!</a></p>
</div>
<div class="col-sm-10 m-content">
<div class="txt_content">
<p>This guide is from my own experience, and now keep in mind that I have not been playing MUME a lot, and I am still a beginner.</p>
<p>But I'll fill this up with stuff I wish I knew when I started out playing.</p>
<hr>
<p>Starting off, there are a few things I would do before I'd even start to play.
Definitely check out the <a href="https://mume.org/session.php">Sample Session</a> on the mume.org website.
After that, read the <a href="https://mume.org/Import/help/basics.html">Basic Commands</a> needed to survive.</p>
<p>So now you're in the early levels and short on money and gear.<br>
There are a lot of ways to make money in MUME, but one of the easiest at really low levels is simply to ask for it.<br>
Most people will be very happy to part with a few gold to help out a new player.</p>
<p>Another fun way to make money is to sell Boats and Canoes in the shire.<br>
No, no hear me out, it's genuinely quite simple.<br>
You just go to these two locations in the Shire and take the boats there.
</p>
<img src="shire_boats.png" width="400px"/>
<p>You can sell these for quite a fair price at the Shop just a few areas away from there.<br>
In fact, this is how I made a lot of my wealth in the beginning.
<img src="shire_sell_boats.png" width="400px"/>
<br>
<p>Another good way to make money just enough for rent is to Butcher everything you kill and cook the meat.
Pelts and fur from some animals will pay rent for weeks, and the meat will sell for a couple coppers each.
</p>
<p>Dead bandits, ruffians and brigands will be carrying quite a bit of wealth on them as well, mostly their shield and weapons,
but their clothes will also bring in a fine buck.
</p>
<br>
<p>When you start getting up to a higher level there you will have to venture farther out from the safe areas to get your experience.
For the later levels I'd definitely recommend consulting guides for your class for help with skills and stats.
But it's going to come down to a lot of grinding either way.
</p>
<p>You want to make sure your weapons are up to snuff, check out some of the item guides on the mume wiki.
</p>
</div>
</div>
</div>
</div>
</body>
</html>
