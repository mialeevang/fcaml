<!DOCTYPE html>
<html lang="en-US">
<head>
<title>fresno & clovis - apartment map list</title>
<meta name="robots" content="noindex">
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width">
<meta name="theme-color" content="#000">
<?php include("css.php"); ?>
</head>

<body>

<div id="loading-div" style="position:fixed;z-index:100;top:0;width:100%;height:100%;background-color:#000;font-weight:bold;font-size:14pt;color:#fff;text-align:center;">
<div style="padding-top: 10%;">loading...</div>
</div>

<div id="header">
	<div id="t-search">
		<input type="text" placeholder="filter by address number or name of apartment">
	</div>
	
	<div id="light-on" class="light-switch">O</div>
	<div id="light-off" class="light-switch" style="display: none;">&#216;</div>
</div><!-- #header -->

<div id="close-fixed" class="display-none"></div>
<div id="mapp-fixed" class="display-none"></div>

<div id="mapped">

<div class="site-note" style="text-align:center;">
	<div style="font-size:14pt;">
		<b>Fresno, CA</b> and <b>Clovis, CA</b>
	</div>
	<div style="font-size:11pt; margin-top: 10px;">
		apartment map list
	</div>
</div>

<ul class="site-note">
	<li>open source:</li>
	<li><b>https://github.com/mialeevang/fcaml/</b></li>
	
	<li class="site-note-section"><b>Important!</b></li>
	
	<li>Clicking on any unit # will open google map.</li>
	<li><b>Read entrance information!</b> Google map navigation can be a troll sometimes.</li>
	<li><b>Units</b> are usually <b>mapped to buildings</b>. The building should have the unit you are looking for.</li>
	<li><b>Double check address # and unit #</b>.</li>

	<li class="site-note-section">Help Contribute:</li>
	
	<li>Do you have pictures of apartment maps for mapping? If yes, please send them to my email at: <b>mialee.v@outlook.com</b>.</li>
	<li>Maps of apartments are usually near entrances. If not, feel free to ask for one from the leasing office.</li>
	<li>Make sure everything is readable in the picture of the apartment map that you want to send to me.</li>

	<li class="site-note-section">Share!</li>
	<li>If you find this apartment map list helpful in anyway, please share it with those who do gig delivery work in Fresno, CA and Clovis, CA.</li>
	<li>copy and share link:</li>
	<li><b>https://mialeevang.github.io/fcaml/</b></li>
	
	<li class="site-note-section">Take Care!</li>
	<li>I do this mostly whenever I'm free, so updates on the apartment map list may take awhile.</li>
	<li>Feel free to also send feedbacks, suggestions, comments, etc to my email.</li>
</ul>

<div id="num-apt-mapped" class="site-note" style="text-align: center;">
	<span style="font-size:10pt;"><b>
		<?php
		date_default_timezone_set('America/Los_Angeles');

		$currentDate = date('Y, M jS');

		echo $currentDate;
		?>
	</b></span>
</div>

<div class="mapp-filter display-none">
	<input type="text" placeholder="filter by unit # or building #">
</div>