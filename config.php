<?php
$host = 'localhost';
$dbname = 'calendrier_avent';
$username = 'root';
$password = 'h9xt2ya1';

$conn = new mysqli($host, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Erreur de connexion: " . $conn->connect_error);
}
?>
