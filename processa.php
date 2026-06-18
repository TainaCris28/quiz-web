<?php
// Inclui a configuração de conexão
include("config.php");

// Recebe o nome do jogador
$nome = $_POST['nome'];
$pontos = 0;

// Corrige as respostas
if (isset($_POST['q1']) && $_POST['q1'] == "Brasilia") $pontos++;
if (isset($_POST['q2']) && $_POST['q2'] == "12") $pontos++;
if (isset($_POST['q3']) && $_POST['q3'] == "Machado") $pontos++;
if (isset($_POST['q4']) && $_POST['q4'] == "Marte") $pontos++;
if (isset($_POST['q5']) && $_POST['q5'] == "HTML") $pontos++;

// Salva no ranking
$sql = "INSERT INTO ranking (nome, pontos) VALUES ('$nome', '$pontos')";
$conn->query($sql);
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Resultado do Quiz</title>
    <link rel="stylesheet" href="style/style.css">
</head>
<body>
    <header>
        <h1>Resultado</h1>
        <nav>
            <a href="index.php">Voltar ao Quiz</a> |
            <a href="ranking.php">Ver Ranking</a>
        </nav>
    </header>

    <main>
        <h2>Obrigado por jogar, <?php echo htmlspecialchars($nome); ?>!</h2>
        <p>Sua pontuação: <strong><?php echo $pontos; ?> de 5</strong></p>
    </main>

    <footer>
        <p>&copy; 2026 - Projeto de Programação Web</p>
    </footer>

    <script src="js/script.js"></script>
</body>
</html>
<?php
$conn->close();
?>
