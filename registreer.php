<?php 

include('includes/connection.php');



	$Gebruikersnaam = isset($_POST['gebruikersnaam']);
	$Email = isset($_POST['email']);
	$Volledigenaam = isset($_POST['volledigenaam']);
	$Paswoord = isset($_POST['wachtwoord']);
		
	if(empty( $_POST['gebruikersnaam']) && empty($_POST['email']) && empty($_POST['volledigenaam']) && empty($_POST['wachtwoord'])){
			
		$data = array(
			'message'=> "Gelieve alle velden in te vullen",
			'success' => "false", 
			'case'=> 4,);		
	}
	else {
		
		$sql = "SELECT * FROM tbl_Users WHERE Gebruikersnaam='$Gebruikersnaam'";
		$res = $conn -> query($sql);
	
		$sql2 = "SELECT * FROM tbl_Users WHERE Email='$Email'";
		$res2 = $conn -> query($sql2);

    	
    	if($res -> num_rows >= 1){
    		    	
	    	$data = array(
			'message'=> "Gebruikersnaam is al in gebruik",
			'success' => "false", 
			'case'=> 1,);
    	} 
    	
    		else if ($res2 -> num_rows >= 1) {
    		
	    		$data = array(
				'message'=> "Dit E-mailadres wordt reeds gebruikt",
				'success' => "false", 
				'case'=> 2,);
	    		
    		}
    		
    		else {
    		
    			$data = array(
				'message'=> "Account succesvol aangemaakt",
				'success' => "true", 
				'case'=> 3,);
				
				include_once('includes/classes/gebruiker.class.php');
	    		
	    		$gebruiker = new Gebruiker;

				$gebruiker -> Gebruikersnaam = $Gebruikersnaam;
				$gebruiker -> Email = $Email;
				$gebruiker -> Volledigenaam = $Volledigenaam;
				$gebruiker -> Wachtwoord = $Paswoord;
		
				$gebruiker -> Savegebruiker();	
	    		
    		}
    		
    		}
    		
    		
    			echo json_encode($data);
    			
    		

?>
