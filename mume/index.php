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
<link rel="stylesheet" type="text/css" href="../blog.css">
<title>Exedump MUME</title>
<style>
.main p{
margin-top: 0px;
margin-bottom: 5px;
}
</style>
</head>
<body>
<a href="../index.php"><img class="title-img" src="/img/title.png" width="512px" /></a>
<nav class="navbar navbar-expand-md m-dark">
<a class="navbar-brand m-shade" href="../index.php">EXEDUMP</a>
<button class="navbar-toggler m-light" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
<span class="navbar-toggler-icon"></span>
</button>
<div class="collapse navbar-collapse" id="collapsibleNavbar">
<ul class="navbar-nav">
<li class="nav-item"><a class="nav-link" href="/blog/index.php">BLOG</a></li>
<li class="nav-item"><a class="nav-link" href="/mume/index.php">MUME</a></li>
<li class="nav-item"><a class="nav-link" href="/blog/downloads.php">DOWNLOADS</a></li>
<li class="nav-item"><a class="nav-link" href="../account.php">ACCOUNT</a></li>
</ul>
</div>
</nav><br>
<div class="container-fluid">
<div class="row">
<div class="col sidebar">
<h3 class="m-shade">Multi Users in Middle Earth</h3>
<hr>
<a href="https://mume.org/wiki/index.php/File:Main_Gandalf.png"><img src="/img/Gandalf.png" width="128px"/></a>
<p>Recently I started playing <a href="">MUME</a> again.
It's a really fantastic MUD (Multi User Dungeon).
Gives you everything you could ever want from a text based game.</p>
<p>Unfortunately it's lost some popularity from it's prime.
So I thought I'd capture some of my experiences in one place, and that's right here.</p>
<p>I'll try and upload logs and some of the finds I make in this terrific game here.</p>
<p>There are so many dead resources regarding mume gameplay, and I hope that I can archive some important guides and such here.
Because it really deserves it.</p>
</div>
<div class="col-sm-10 m-content">
<div class="main">
<p>So starting off, for new players it's probably very important to get a mapper.</p>
<p>It will make your life so much easier, and if you're on the lookout for one,
I'll recommend you <a href="https://github.com/MUME/MMapper">MMapper</a>, made and maintained by <a href="https://mume.schimmelmann.us/">Jahara</a>(hopefully that link will never die) himself.</p>
<hr>
<h5>Guides.</h5>
<p>Informations on these guides should always be checked on by asking someone ingame, since they are almost 10 years old at the time of writing this.</p>
<ul>
<li><a href="./forum_guides/guide_warriors.php">Warriors Guide</a> (By <a href="https://mume.org/forum/memberlist.php?mode=viewprofile&u=441&sid=61cf45d5db21ecf0c78770200de6d3e4">Andróg</a>)</li>
<li><a href="./forum_guides/guide_cleric.php">Cleric Guide</a> (By <a href="https://mume.org/forum/memberlist.php?mode=viewprofile&u=441&sid=61cf45d5db21ecf0c78770200de6d3e4">Andróg</a>)</li>
<li><a href="./forum_guides/guide_scout.php">Scout Guide</a> (By <a href="https://mume.org/forum/memberlist.php?mode=viewprofile&u=441&sid=61cf45d5db21ecf0c78770200de6d3e4">Andróg</a>)</li>
<li><a href="./jpetazzo/index.php">Misc Guides</a> (By <a href="https://github.com/jpetazzo">jpetazzo</a>)</li>
</ul>
</div>
<hr>
<h5>Archived Websites.</h5>
<p>Clicking the Archived Links will bring you to my own copy of these. Last updated February 11th 2020.</p>
<ul>
<li><a href="./mume.org/wiki/index.php/newbie.html">MUME.ORG Wiki </a><a href="mume.org/wiki">(Live Version)</a></li>
<li><a href="./tabris23.tripod.com/index.html">Tripod's Mume Website </a><a href="tabris23.tripod.com/">(Live Version)</a></li>
<li><a href="./mume.yllemo.com/doku.php.html">Yllemo's Mume Website </a><a href="http://mume.yllemo.com/doku.php?id=what_is_mume">(Live Version)</a></li>
<p>^This resource needs you to be logged in to read a lot. Unfortunate, but nothing I could do about it. Visit live page for all that info.</p>
<br>
<p>Thank you all amazing people for these resources.</p>
<p>Mail me <a href="mailto:devmew@exedump.com">devmew@exedump.com</a> if you want to add something, I stare at this email all day every day.</p>
</ul>
<hr>
<h5>Some really good online resources.</h5>
<ul>
<li><a href="http://elvenrunes.com">Elvenrunes (Main hub for MUME)</a></li>
</ul>
</div>
</div>
</div>
</div>
</body>
</html>
