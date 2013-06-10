<?php 

// database connectie

include('includes/connection.php');


	$Gebruikersnaam = $_POST['gebruikersnaam-login'];
	$Wachtwoord = $_POST['wachtwoord-login'];
	
		
	if(empty($_POST['gebruikersnaam-login']) || empty($_POST['wachtwoord-login'])){
			
		$data2 = array(
			'message'=> "Gelieve beide velden in te vullen",
			'success' => "false", 
			'case'=> 1,);		
	}
	
	else {
		
		$sqler = "SELECT * FROM tbl_Users WHERE Gebruikersnaam='$Gebruikersnaam' AND Wachtwoord='$Wachtwoord';";
		$resul = $conn -> query($sqler);
		
    	
    	if($resul -> num_rows == 0){
    		    	
	    	$data2 = array(
			'message'=> "Gebruikersnaam of wachtwoord zijn onjuist",
			'success' => "false", 
			'case'=> 2,);
    	
    	} 
    	
    		else {
    		
	    		$data2 = array(
				'message'=> "U bent ingelogd",
				'success' => "true", 
				'case'=> 3,);

		
	
			setcookie( "ingelogd", $Wachtwoord, time()+3600*24);			

    		}
    		
    		
    		}
    		
    		
    			echo json_encode($data2);
    			
    		

?>
