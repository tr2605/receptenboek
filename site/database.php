<?php
// Database configuratie
$host  = "mariadb";
$dbuser = "root";
$dbpass = "password";
$dbname = "receptenboek";

// Maak een  database connectie
$conn = mysqli_connect($host, $dbuser, $dbpass, $dbname);
// Controleer de verbinding
