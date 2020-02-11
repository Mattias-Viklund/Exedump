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
<li><a href="./guides/armours.txt">Armours.txt</a></li>
<li><a href="./guides/bn-faq.txt">Bn-faq.txt</a></li>
<li><a href="./guides/bn-guilds.txt">Bn-guilds.txt</a></li>
<li><a href="./guides/charms.txt">Charms.txt</a></li>
<li><a href="./guides/guilds.txt">Guilds.txt</a></li>
<li><a href="./guides/herblore.txt">Herblore.txt</a></li>
<li><a href="./guides/levelling-healer.txt">Levelling-healer.txt</a></li>
<li><a href="./guides/lockpick.txt">Lockpick.txt</a></li>
<li><a href="./guides/miscinfo.txt">Miscinfo.txt</a></li>
<li><a href="./guides/objects.txt">Objects.txt</a></li>
<li><a href="./guides/objects2.txt">Objects2.txt</a></li>
<li><a href="./guides/oldkeys.txt">Oldkeys.txt</a></li>
<li><a href="./guides/quests.txt">Quests.txt</a></li>
<li><a href="./guides/reroll.txt">Reroll.txt</a></li>
<li><a href="./guides/shield.txt">Shield.txt</a></li>
<li><a href="./guides/staff.txt">Staff.txt</a></li>
<li><a href="./guides/strategy.txt">Strategy.txt</a></li>
<li><a href="./guides/traveller-quest.txt">Traveller-quest.txt</a></li>
<li><a href="./guides/weapons.txt">Weapons.txt</a></li>
<li><a href="./guides/weapons2.txt">Weapons2.txt</a></li>
<br>
<h4>Processors (Python Files):</h4>
<li><a href="./processors/herbs.txt">Herbs.txt</a></li>
<li><a href="./processors/keys.txt">Keys.txt</a></li>
<li><a href="./processors/mobs.txt">Mobs.txt</a></li>
<li><a href="./processors/oldkeys.txt">Oldkeys.txt</a></li>
<br>
<h4>Tintin (.tin files):</h4>
<li><a href="./tintin/aliases.txt">Aliases.tin</a></li>
<li><a href="./tintin/clock.txt">Clock.tin</a></li>
<li><a href="./tintin/convenience.txt">Convenience.tin</a></li>
<li><a href="./tintin/data-herbs.txt">Data-herbs.tin</a></li>
<li><a href="./tintin/data-keys.txt">Data-keys.tin</a></li>
<li><a href="./tintin/data-mobs.txt">Data-mobs.tin</a></li>
<li><a href="./tintin/data-herbs.txt">Data-herbs.tin</a></li>
<li><a href="./tintin/highlights.txt">Highlights.tin</a></li>
<li><a href="./tintin/keymap.txt">Keymap.tin</a></li>
<li><a href="./tintin/main.txt">Main.tin</a></li>
<li><a href="./tintin/months.txt">Months.tin</a></li>
<li><a href="./tintin/notify.txt">Notify.tin</a></li>
<li><a href="./tintin/prompt.txt">Prompt.tin</a></li>
<li><a href="./tintin/rip.txt">Rip.tin</a></li>
<li><a href="./tintin/spells.txt">Spells.tin</a></li>
<li><a href="./tintin/time.txt">Time.tin</a></li>
<li><a href="./tintin/xp.txt">Xp.tin</a></li>
<br>
<h4>Unused (.tin files):</h4>
<li><a href="./unused/bn.txt">Bn.tin</a></li>
<li><a href="./unused/hobbit.txt">Hobbit.tin</a></li>
<li><a href="./unused/mage.txt">Mage.tin</a></li>
<li><a href="./unused/not-used.txt">Not-used.tin</a></li>
<li><a href="./unused/stab.txt">Stab.tin</a></li>
<li><a href="./unused/troll.txt">Troll.tin</a></li>
<li><a href="./unused/warrior.txt">Warrior.tin</a></li>
<li><a href="./unused/windowbar.txt">Windowbar.tin</a></li>
</ul>
</div>
</div>
</div>
</body>
</html>
