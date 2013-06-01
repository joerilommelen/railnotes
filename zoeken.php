<?php



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
	</head>
	<body>
	<div class="container">
		<div class="header">
		
		
		</div>
		<div class="content">
		<form id="zoekForm" class="hdr_srch right" action="" method="get" onsubmit="return submitZoekForm('zoekForm','searchfield',3,'De zoekterm moet minimum 3 characters bevatten')">
					<input type="text" name="zoek" id="zoek" class="hdr_search_field" value="Zoek op jouw station" onfocus="if (this.value=='Zoek op jouw station') this.value='';">
					<!-- <input type="submit" name="submit" align="absmiddle" alt="Zend" value="" class="hdr_search_button"></button> -->
					</form>
					
					
					<?php
					
		if (!empty($_GET['zoek'])) {
    			    			
	    			if (strlen($_GET['zoek']) < 3) {
	    				echo "<p>Jouw zoekwoord moet minstens uit drie karakters bestaan.</p>";
	    			} else {
  
		    			include_once ('includes/classes/overzicht.class.php');
    		
	    				$oZoek = new Overzicht();
	    				$oZoek -> Zoek = ($_GET['zoek']);
	    				$vAllZoek = $oZoek -> getZoek();
    					
    					if(($vAllZoek->num_rows)=='0') {
    					
							echo '<div class="item">';
    					echo "<p>Jouw zoekwoord '" . ($_GET['zoek']) . "' leverde geen resultaten op! </p>";
    						echo '</div>';	
    					} else {
    					
    					echo "<p>Jouw zoekwoord '" . ($_GET['zoek']) . "' leverde volgende resultaten op: </p>";
    					while ($Feed = mysqli_fetch_assoc($vAllZoek)) {

							echo '<div class="item">';
			    				echo '<a href="detail.php?id=' . $Feed['id'] . '">';
			    				echo '<p>' . $Feed['VertrekUur'] . '</p>';
			    				echo '<p>' . $Feed['Vertraging'] . '</p>';
			    				echo '<p>' . $Feed['TrajectVan'] . ' - ' . $Feed['TrajectNaar'] .'</p>';
			    				echo '<p>' . $Feed['Station'] . '</p>';
			    				echo '</a>';
			    			echo '</div>';


		    			
		    			}
    					
    					
    					};
    					    					
    	    					};
    			
    		} else {
    		
    			echo "<h4>Je moet een zoekwoord ingeven. </h4>";
    			
    		};
    		
    	
    		
    		
				?>

		
		
		</div>		
	
		
		<div class="footer">
		<a href="index.php"><img src="images/overzicht.png" alt="overzicht_active"></a>
		<a href="zoeken.php"><img src="images/zoeken_active.png" alt="zoeken"></a>
		<a href="instellingen.php"><img src="images/instellingen.png" alt="instellingen"></a>
		</div>
	</div>
	</body>
</html>
