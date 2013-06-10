<?php

include_once("includes/classes/overzicht.class.php");

$key = $_GET['id'];
$oFeed = new Overzicht();
$oFeed -> Id = $key;
$vAllFeed = $oFeed -> printDetail();

if(($vAllFeed->num_rows)=='0'){
	header('Location: http://www.antwerpen.fm');
};



$Feed = $vAllFeed -> fetch_assoc();

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
	
	<header>
		<div class="header">
		
		<a href="javascript:javascript:history.go(-1)"><div class="arrow-left-detail"></div></a><h1></h1>
		
		</div>
		
	</header>
		<div class="content">
		<?php 
		    					echo '<article>';
		    					
			    				echo '<div class="item">';
			    				
			    				echo '<div class="tijd">';
			    				
			    				echo '<p id="uur"> ' . $Feed['VertrekUur'] . '</p>';
			    				
			    				echo '<p id="vertraging"> + ' . $Feed['Vertraging'] . '</p>';
			    				
			    				echo '</div>';
			    				
			    				echo '<div class="vannaar">';
			    				
			    				echo '<p id="traject">' . $Feed['TrajectVan'] . ' - ' . $Feed['TrajectNaar'] .'</p>';
			    				
			    				echo '<div class="flag">';
			    				
			    				echo '<p id="tag">Station ' . $Feed['Station'] . '</p>';
			    				
			    				echo '</div>';
			    				
			    				echo '</div>';
			    				
			    				echo '<div style="clear:both;"></div>';
			    				
			    				echo '</div>';
			    				
			    				echo '<h3>Commentaar</h3>';
			    				
			    				echo '<p id="tag2">' . $Feed['Commentaar'] . '</p>';
			    				
			    				echo '</article>';

	    			?>
	    			<div style="clear:both;"></div>
		
		</div>		
		<footer>
		<div class="footer">
		<a href="overzicht.php"><img src="images/overzicht_active.png" alt="overzicht_active"></a>
		<a href="zoeken.php"><img src="images/zoeken.png" alt="zoeken"></a>
		<a href="instellingen.php"><img src="images/instellingen.png" alt="instellingen"></a>
		</div>
		</footer>
	</div>
	</body>
</html>
