<?php
echo "Testando conexao <br /> <br />";
$servername = "192.168.15.80";
$username = "phpuser";
$password = "pass";

// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
    die("Conex�o falhou: " . $conn->connect_error);
}
echo "Conectado com sucesso";
?>
