<?php


$servername="localhost";
$username="root";
$password="";
$database="coffeeshop";
$conn = mysqli_connect($servername,$username,$password,$database);

if (!$conn) {
    // Affiche l'erreur si la connexion échoue
    echo "Erreur de connexion : " . mysqli_connect_errno() . " - " . mysqli_connect_error();
    exit();
}
?>
