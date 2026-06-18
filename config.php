<?php
// Configurações do banco de dados
$servername = "localhost";   // servidor
$username   = "root";        // usuário do banco
$password   = "";            // senha do banco (se tiver, coloque aqui)
$dbname     = "cadastro";   // nome do banco que você criou

// Criar conexão
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar conexão
if ($conn->connect_error) {
    die("Falha na conexão: " . $conn->connect_error);
}
?>
