<?php
$host = "localhost";
$user = "root";
$pass = "";
$db = "Mundo_dos_Focinhos";

$conn = new mysqli($host, $user, $pass, $db);
if ($conn->connect_error) {
    die("Conexão falhou: " . $conn->connect_error);
}
?>
