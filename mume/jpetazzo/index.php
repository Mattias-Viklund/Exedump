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
<title></title>
</head>
<body>
<a href="../../index.php"><img class="title-img" src="/img/title.png" width="512px" /></a>
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
<li class="nav-item"><a class="nav-link" href="../../account.php">ACCOUNT</a></li>
</ul>
</div>
</nav><br>
<div class="container-fluid">
<div class="row">
<div class="col sidebar">
<h3 class="m-shade">Jpetazzo</h3>
<hr>
<p>Jpetazzo Guide Index</p>
</div>
<div class="col-sm-10 m-content">
<h5>These guides are taken directly from <a href="https://github.com/jpetazzo/mume">Jpetazzo's Github</a>.</h5>
<ul>
<h4>Data:</h4>
<li><a href="./data/chars.txt">Chars.txt</a></li>
<li><a href="./data/herbs.txt">Herbs.yml</a></li>
<li><a href="./data/keys.txt">Keys.yml</a></li>
<li><a href="./data/lines.txt">Lines.txt</a></li>
<li><a href="./data/mobs.txt">Mobs.yml</a></li>
<li><a href="./data/objects.txt">Objects.yml</a></li>
<br>
<h4>Guides:</h4>
<li><a href="./guides/Armours.txt">Armours.txt</a></li>
<li><a href="./guides/Bn-faq.txt">Bn-faq.txt</a></li>
<li><a href="./guides/Bn-guilds.txt">Bn-guilds.txt</a></li>
<li><a href="./guides/Charms.txt">Charms.txt</a></li>
<li><a href="./guides/Guilds.txt">Guilds.txt</a></li>
<li><a href="./guides/Herblore.txt">Herblore.txt</a></li>
<li><a href="./guides/Levelling-healer.txt">Levelling-healer.txt</a></li>
<li><a href="./guides/Lockpick.txt">Lockpick.txt</a></li>
<li><a href="./guides/Miscinfo.txt">Miscinfo.txt</a></li>
<li><a href="./guides/Objects.txt">Objects.txt</a></li>
<li><a href="./guides/Objects2.txt">Objects2.txt</a></li>
<li><a href="./guides/Oldkeys.txt">Oldkeys.txt</a></li>
<li><a href="./guides/Quests.txt">Quests.txt</a></li>
<li><a href="./guides/Reroll.txt">Reroll.txt</a></li>
<li><a href="./guides/Shield.txt">Shield.txt</a></li>
<li><a href="./guides/Staff.txt">Staff.txt</a></li>
<li><a href="./guides/Strategy.txt">Strategy.txt</a></li>
<li><a href="./guides/Traveller-quest.txt">Traveller-quest.txt</a></li>
<li><a href="./guides/Weapons.txt">Weapons.txt</a></li>
<li><a href="./guides/Weapons2.txt">Weapons2.txt</a></li>
<br>
<h4>Processors (Python Files):</h4>
<li><a href="./processors/Herbs.txt">Herbs.txt</a></li>
<li><a href="./processors/Keys.txt">Keys.txt</a></li>
<li><a href="./processors/Mobs.txt">Mobs.txt</a></li>
<li><a href="./processors/Oldkeys.txt">Oldkeys.txt</a></li>
<br>
<h4>Tintin (.tin files):</h4>
<li><a href="./tintin/Aliases.txt">Aliases.tin</a></li>
<li><a href="./tintin/Clock.txt">Clock.tin</a></li>
<li><a href="./tintin/Convenience.txt">Convenience.tin</a></li>
<li><a href="./tintin/Data-herbs.txt">Data-herbs.tin</a></li>
<li><a href="./tintin/Data-keys.txt">Data-keys.tin</a></li>
<li><a href="./tintin/Data-mobs.txt">Data-mobs.tin</a></li>
<li><a href="./tintin/Data-herbs.txt">Data-herbs.tin</a></li>
<li><a href="./tintin/Highlights.txt">Highlights.tin</a></li>
<li><a href="./tintin/Keymap.txt">Keymap.tin</a></li>
<li><a href="./tintin/Main.txt">Main.tin</a></li>
<li><a href="./tintin/Months.txt">Months.tin</a></li>
<li><a href="./tintin/Notify.txt">Notify.tin</a></li>
<li><a href="./tintin/Prompt.txt">Prompt.tin</a></li>
<li><a href="./tintin/Rip.txt">Rip.tin</a></li>
<li><a href="./tintin/Spells.txt">Spells.tin</a></li>
<li><a href="./tintin/Time.txt">Time.tin</a></li>
<li><a href="./tintin/Xp.txt">Xp.tin</a></li>
<br>
<h4>Unused (.tin files):</h4>
<li><a href="./unused/Bn.txt">Bn.tin</a></li>
<li><a href="./unused/Hobbit.txt">Hobbit.tin</a></li>
<li><a href="./unused/Mage.txt">Mage.tin</a></li>
<li><a href="./unused/Not-used.txt">Not-used.tin</a></li>
<li><a href="./unused/Stab.txt">Stab.tin</a></li>
<li><a href="./unused/Troll.txt">Troll.tin</a></li>
<li><a href="./unused/Warrior.txt">Warrior.tin</a></li>
<li><a href="./unused/Windowbar.txt">Windowbar.tin</a></li>
</ul>
</div>
</div>
</div>
</body>
</html>
