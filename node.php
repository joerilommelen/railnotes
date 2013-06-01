<?php


if (isset($_POST['voegtoe'])) {

		include_once("includes/classes/overzicht.class.php");

		$feedvoegtoe = new Overzicht;
		$feedvoegtoe -> VertrekUur = mb_convert_encoding ( $_POST['vertrekuur'], 'ISO-8859-15','utf-8' );
		$feedvoegtoe -> Vertraging = mb_convert_encoding ( $_POST['vertraging'], 'ISO-8859-15','utf-8' );
		$feedvoegtoe -> TrajectVan = mb_convert_encoding ( $_POST['trajectvan'], 'ISO-8859-15','utf-8' );
		$feedvoegtoe -> TrajectNaar = mb_convert_encoding ( $_POST['trajectnaar'], 'ISO-8859-15','utf-8' );
		$feedvoegtoe -> Station = mb_convert_encoding ( $_POST['station'], 'ISO-8859-15','utf-8' );
		$feedvoegtoe -> Commentaar = mb_convert_encoding ( $_POST['commentaar'], 'ISO-8859-15','utf-8' );
		$feedvoegtoe -> getOverzicht_voegtoe();
		header('Location: overzicht.php');
		
		

}

?><!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Railnotes</title>
		<link rel="stylesheet" href="css/reset.css" type="text/css" media="screen" charset="utf-8">
		<link rel="stylesheet" href="css/style.css" type="text/css" media="screen" charset="utf-8">
		<link rel="stylesheet" href="css/screen.css" type="text/css" media="screen" charset="utf-8">
		<link href="images/apple-touch-icon-precomposed.png" rel="apple-touch-icon-precomposed" />
		<link href="images/apple-touch-icon-72x72-precomposed.png" rel="apple-touch-icon-precomposed" sizes="72x72" />
		<link href="images/apple-touch-icon-114x114-precomposed.png" rel="apple-touch-icon-precomposed" sizes="114x114" />
		<link href="images/apple-touch-icon-144x144-precomposed.png" rel="apple-touch-icon-precomposed" sizes="144x144" />
		<meta content="text/html; charset=iso-8859-1" http-equiv="Content-Type" />
		<meta name="viewport" content="user-scalable=0, initial-scale=0.5">
		<meta name="apple-mobile-web-app-capable" content="yes">
		<meta name="apple-mobile-web-app-status-bar-style" content="black">
		<script src="javascript/functions.js" type="text/javascript"></script>
		<!-- iPhone LAUNCHSCREEN-->
		<link href="images/apple-launch-480h.png" sizes="320x480" media="(device-height: 480px)" rel="apple-touch-startup-image">
		<!-- iPhone (Retina) LAUNCHSCREEN-->
		<link href="images/apple-launch-480h2X.png" sizes="640x920" media="(device-height: 480px) and (-webkit-device-pixel-ratio: 2)" rel="apple-touch-startup-image">
		<!-- iPhone 5+ LAUNCHSCREEN-->
		<link href="images/apple-launch-568h.png" sizes="640x1136" media="(device-height: 568px)" rel="apple-touch-startup-image">
	</head>
	<body>
	<div class="container">
		<div class="header">
		
		
		</div>
		<div class="content">
		
		<form action="" name="myForm" method="post" accept-charset="utf-8">
				
				<label for="vertrekuur"><h1>Vertrek Uur</h1></label>
				<input id="vertrekuur" type="text" size="97" name="vertrekuur" class="required"  value="" maxlength="80">
				
				<label for="vertraging"><h1>Vertraging</h1></label>
				<input id="vertraging" type="text" size="97" name="vertraging" class="required"  value="" maxlength="80">
				
				<label for="trajectvan"><h1>Van</h1></label>
				<input id="trajectvan" type="text" size="97" name="trajectvan" class="required"  value="" maxlength="80">
				
				<label for="trajectnaar"><h1>Naar</h1></label>
				<input id="trajectnaar" type="text" size="97" name="trajectnaar" class="required"  value="" maxlength="80">
				
				<label for="station"><h1>Jouw Station</h1></label>
				<input id="station" type="text" size="97" name="station" class="required"  value="" maxlength="80">
								
				<label for="commentaar"><h1>Commentaar</h1></label>
				<textarea name="commentaar" id="commentaar" rows="5" cols="70" placeholder=""></textarea>
												
				<input type="submit" class="knop" value="Voeg toe" name="voegtoe">
		
				</form>

		
		</div>		
		
	</div>
	</body>
</html>
