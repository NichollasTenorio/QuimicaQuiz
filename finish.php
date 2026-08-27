<?php
    session_start();
    session_destroy();
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fail - Preview</title>

    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
        rel="stylesheet"
    >
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/home.css">
</head>
<body>

<main class="home-page">
    <div class="home-content">
        <h1 class="home-title">Química <span class="highlight">Quiz</span></h1>
        <p class="home-subtitle">Você ganhou, completou todo o nosso quiz!</p>
        
        <form action="" method="post">
            <button type="submit"class="play-button">Tentar de Novo</button>
        </form>
    </div>
</main>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>

<?php

if($_SERVER['REQUEST_METHOD'] == "POST")
    header("Location: home.php");
?>