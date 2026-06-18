<?php
// Inclui a configuração de conexão
include("config.php");
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Quiz Rápido</title>
    <link rel="stylesheet" href="style/style.css">
</head>
<body>
    <header>
        <h1>Bem-vindo ao Quiz!</h1>
        <nav>
            <a href="cadastro.php">Cadastrar Usuário</a> |
            <a href="ranking.php">Ver Ranking</a>
        </nav>
    </header>

    <main>
        <h2>Responda as perguntas abaixo</h2>
        <form action="processa.php" method="POST">
            <label>Digite seu nome:</label>
            <input type="text" name="nome" required><br><br>

            <fieldset>
                <legend>1) Qual a capital do Brasil?</legend>
                <label><input type="radio" name="q1" value="Rio"> Rio de Janeiro</label><br>
                <label><input type="radio" name="q1" value="Brasilia"> Brasília</label><br>
                <label><input type="radio" name="q1" value="São Paulo"> São Paulo</label>
            </fieldset><br>

            <fieldset>
                <legend>2) Quanto é 5 + 7?</legend>
                <label><input type="radio" name="q2" value="10"> 10</label><br>
                <label><input type="radio" name="q2" value="12"> 12</label><br>
                <label><input type="radio" name="q2" value="15"> 15</label>
            </fieldset><br>

            <fieldset>
                <legend>3) Quem escreveu "Dom Casmurro"?</legend>
                <label><input type="radio" name="q3" value="Machado"> Machado de Assis</label><br>
                <label><input type="radio" name="q3" value="Clarice"> Clarice Lispector</label><br>
                <label><input type="radio" name="q3" value="Drummond"> Carlos Drummond</label>
            </fieldset><br>

            <fieldset>
                <legend>4) Qual planeta é conhecido como Planeta Vermelho?</legend>
                <label><input type="radio" name="q4" value="Marte"> Marte</label><br>
                <label><input type="radio" name="q4" value="Jupiter"> Júpiter</label><br>
                <label><input type="radio" name="q4" value="Saturno"> Saturno</label>
            </fieldset><br>

            <fieldset>
                <legend>5) Qual linguagem é usada para estruturar páginas web?</legend>
                <label><input type="radio" name="q5" value="HTML"> HTML</label><br>
                <label><input type="radio" name="q5" value="CSS"> CSS</label><br>
                <label><input type="radio" name="q5" value="PHP"> PHP</label>
            </fieldset><br>

            <button type="submit">Enviar Respostas</button>
        </form>
    </main>

    <footer>
        <p>&copy; 2026 - Projeto de Programação Web</p>
    </footer>

    <script src="js/animacao.js"></script>
</body>
</html>
