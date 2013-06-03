<?php

	//NIEUWS CLASS

class Overzicht {

	private $m_sId;
	private $m_sVertrekUur;
	private $m_sVertraging;
	private $m_sTrajectVan;
	private $m_sTrajectNaar;
	private $m_sStation;
	private $m_sCommentaar;
	private $m_sZoek;
	
	public function __set($p_sProperty, $p_vValue) {
		switch($p_sProperty) {
			case "Id" :
				$this -> m_sId = $p_vValue;
				break;
			case "VertrekUur" :
				$this -> m_sVertrekUur = $p_vValue;
				break;
			case "Vertraging" :
				$this -> m_sVertraging= $p_vValue;
				break;
			case "TrajectVan" :
				$this -> m_sTrajectVan= $p_vValue;
				break;
			case "TrajectNaar" :
				$this -> m_sTrajectNaar= $p_vValue;
				break;
			case "Station" :
				$this -> m_sStation= $p_vValue;
				break;
			case "Commentaar" :
				$this -> m_sCommentaar= $p_vValue;
				break;
			case "Zoek" :
				$this -> m_sZoek= $p_vValue;
				break;
		}
	}

	public function __get($p_sProperty) {
		$vResult = null;
		switch($p_sProperty) {
			case "Id" :
				$vResult = $this -> m_sId;
				break;
			case "VertrekUur" :
				$vResult = $this -> m_sVertrekUur;
				break;
			case "Vertraging" :
				$vResult = $this -> m_sVertraging;
				break;
			case "TrajectVan" :
				$vResult = $this -> m_sTrajectVan;
				break;
			case "TrajectNaar" :
				$vResult = $this -> m_sTrajectNaar;
				break;
			case "Station" :
				$vResult = $this -> m_sStation;
				break;
			case "Commentaar" :
				$vResult = $this -> m_sCommentaar;
				break;
			case "Zoek" :
				$vResult = $this -> m_sZoek;
				break;
		}
	}
	
		
	
	public function getOverzicht()
	{
		include ('connection.php');
		$sSql = "SELECT * FROM tbl_Overzicht ORDER BY id DESC";
		$res = $conn -> query($sSql);
		return ($res);
	}


	public function getZoek()
	{
		include ('connection.php');
		$sZoek = $conn -> real_escape_string($this -> m_sZoek);
		$sSql = "SELECT * FROM tbl_Overzicht WHERE Station LIKE '%"."$sZoek"."%' ORDER BY id DESC";
		$res = $conn -> query($sSql);
		return ($res);
	}
	
	public function printDetail()
	{
		include ('connection.php');
		$sSql = "SELECT * FROM tbl_Overzicht WHERE id = '".$this->m_sId."'";
		$res = $conn -> query($sSql);
		return ($res);
	}
	
	public function getOverzicht_voegtoe()
	{
		
		include ('connection.php');
		//INSERT INTO table_name (column1, column2, column3,...) VALUES (value1, value2, value3,...)

			
			$sSql = 'INSERT INTO tbl_Overzicht (VertrekUur, Vertraging, TrajectVan, TrajectNaar, Station, Commentaar) VALUES ( 
		"' . $conn -> real_escape_string($this -> m_sVertrekUur) . '",
		"' . $conn -> real_escape_string($this -> m_sVertraging) . '",
		"' . $conn -> real_escape_string($this -> m_sTrajectVan) . '",
		"' . $conn -> real_escape_string($this -> m_sTrajectNaar) . '", 
		"' . $conn -> real_escape_string($this -> m_sStation) . '", 
		"' . $conn -> real_escape_string($this -> m_sCommentaar) . '");';	
		$res = $conn -> query($sSql);
		return ($res);
						
	}
	

	
		}


?>