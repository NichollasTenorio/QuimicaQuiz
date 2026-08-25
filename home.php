<?php
session_start();

if($_SERVER['REQUEST_METHOD'] == "POST"){
    if(!isset($_SESSION['actual_question'])){
        $_SESSION['actual_question'] = 1;
    }

    $actual_question = $_SESSION['actual_question'];

    header("Location: pages/question_$actual_question.php");
    exit;
}

?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Química Quiz - Preview</title>

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
        <p class="home-subtitle">Teste seus conhecimentos de química</p>
        
        <form action="" method="post">
            <button type="submit"class="play-button">Jogar</button>
        </form>
    </div>
</main>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>

