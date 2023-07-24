<?php  

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "commerce_live";
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Échec de connexion  : " . $conn->connect_error);
}

?>