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
	
	<header>
		<div class="header">
		
		<a href="note.php"><div class="note"></div></a><h1></h1>
		
		</div>
		
	</header>
		<div class="content">
		<form id="zoekForm" class="zoekvak" action="" method="get" onsubmit="return submitZoekForm('zoekForm','searchfield',3,'De zoekterm moet minimum 3 characters bevatten')">
					<input type="text" name="zoek" id="zoek" class="hdr_search_field" placeholder="Zoek op jouw station" value="" onfocus="if (this.value=='Zoek op jouw station') this.value='';">
					<!-- <input type="submit" name="submit" align="absmiddle" alt="Zend" value="" class="hdr_search_button"></button> -->
		</form>
		
		<div class="clearfix"></div>
					
					
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
								
								echo "<h4>Jouw station '" . ($_GET['zoek']) . "' leverde geen vertragingen op! </h4>";
								
								echo '</div>';	
								
								
    					} else {
    					
    					 	
    					 	while ($Feed = mysqli_fetch_assoc($vAllZoek)) {
    					 	
    					 		echo '<article>';
								
								echo '<a href="detail.php?id=' . $Feed['id'] . '">';

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
								
								echo '</a>';
								
								echo '</article>';

		    			
		    			}
    					
    					
    					};
    					    					
    	    					};
    			
    		};
    		
    	
    		
    		
				?>

		
		
		</div>		
	
		<footer>
		<div class="footer">
		<a href="overzicht.php"><img src="images/overzicht.png" alt="overzicht_active"></a>
		<a href="zoeken.php"><img src="images/zoeken_active.png" alt="zoeken"></a>
		<a href="instellingen.php"><img src="images/instellingen.png" alt="instellingen"></a>
		</div>
		</footer>
	</div>
	</body>
</html>
