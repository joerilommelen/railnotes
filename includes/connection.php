<?php
//variabelen voor database connectie
$localhost = "localhost";
$user = "lauresr83_joeri";
$password = "123456";
$database = "lauresr83_RN";

//database connectie maken
$conn = new mysqli($localhost, $user, $password,$database);

//database geen connectie
if ($conn->connect_error) {
    throw new Exception("Geen Databankconnectie");
}

?>