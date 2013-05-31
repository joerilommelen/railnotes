<?php 

class Gebruiker {

	private $m_sGebruikersnaam;
	private $m_sEmail;
	private $m_sVolledigenaam;
	private $m_sWachtwoord;
	


	public function __set($p_sProperty, $p_vValue) {
		switch($p_sProperty) {
			case "Gebruikersnaam" :
				$this -> m_sGebruikersnaam = $p_vValue;
				break;
				
			case "Email" :
				$this -> m_sEmail = $p_vValue;
				break;
				
			case "Volledigenaam" :
				$this -> m_sVolledigenaam = $p_vValue;
				break;
				
			case "Wachtwoord" :
				$this -> m_sWachtwoord = $p_vValue;
				break;
				
			

		}
	}

	public function __get($p_sProperty) {
		
		switch($p_sProperty) {
			case "Gebruikersnaam" :
				return ($this -> m_sGebruikersnaam);
				break;
				
			case "Email" :
				return ($this -> m_sEmail);
				break;
				
			case "Volledigenaam" :
				return ($this -> m_sVolledigenaam);
				break;
				
			case "Wachtwoord" :
				return ($this -> m_sWachtwoord);
				break;
				
					}
		
		}
		
	public function Savegebruiker() {
	
		include('includes/connection.php');
						
			
						$sql = "INSERT INTO tbl_Users (Gebruikersnaam, Email, Volledigenaam, Wachtwoord)
								VALUES (
								
								'" . $conn -> real_escape_string($this -> m_sGebruikersnaam) . "', 
								'" . $conn -> real_escape_string($this -> m_sEmail) . "',
								'" . $conn -> real_escape_string($this -> m_sVolledigenaam) . "',
								'" . $conn -> real_escape_string($this -> m_sWachtwoord) . "'
								
								);";
				
						if (!$conn -> query($sql)) {
							throw new Exception("Fout bij registartie");
						}	
	}
	
	}
	
	
	
	
	
 ?>	
