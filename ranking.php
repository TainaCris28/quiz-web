<?php
// Inclui a configuração de conexão
include("config.php");

// Busca os 10 melhores jogadores
$result = $conn->query("SELECT nome, pontos FROM ranking ORDER BY pontos DESC LIMIT 10");
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Ranking dos Jogadores</title>
    <link rel="stylesheet" href="style/style.css">
</head>
<body>
    <header>
        <h1>Ranking dos Jogadores</h1>
        <nav>
            <a href="index.php">Voltar ao Quiz</a> |
            <a href="cadastro.php">Cadastrar Usuário</a>
        </nav>
    </header>

    <main>
        <table>
            <tr>
                <th>Posição</th>
                <th>Nome</th>
                <th>Pontos</th>
            </tr>
            <?php
            $posicao = 1;
            while ($row = $result->fetch_assoc()) {
                echo "<tr>";
                echo "<td>".$posicao."</td>";
                echo "<td>".$row['nome']."</td>";
                echo "<td>".$row['pontos']."</td>";
                echo "</tr>";
                $posicao++;
            }
            ?>
        </table>
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
