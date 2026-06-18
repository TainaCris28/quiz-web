<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "cadastro";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Falha na conexão: " . $conn->connect_error);
}

$id = $_POST['id']; // ID do usuário
$nome = $_POST['nome'];
$email = $_POST['email'];

// Atualiza nome e email
$sql = "UPDATE usuarios SET nome='$nome', email='$email' WHERE id=$id";

if ($conn->query($sql) === TRUE) {
    echo "Usuário atualizado com sucesso!";
} else {
    echo "Erro: " . $conn->error;
}

$conn->close();
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Atualizar Usuário</title>
    <style src="style/style.css"></style>
</head>
<body>
    <h2>Atualizar Usuário</h2>
    <form action="atualizar_usuario.php" method="POST">
        <label>ID do Usuário:</label>
        <input type="number" name="id" required><br><br>

        <label>Novo Nome:</label>
        <input type="text" name="nome" required><br><br>

        <label>Novo Email:</label>
        <input type="email" name="email" required><br><br>

        <button type="submit">Atualizar</button>
    </form>
    <script src="js/animacao.js"></script>
</body>
</html>