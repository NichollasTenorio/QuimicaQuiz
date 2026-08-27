<?php
    session_start();
    $pag = 13;

    if(!isset($_SESSION['actual_question'])){
        header('Location: ../home.php');
        exit;
    }

    if($_SESSION['actual_question'] != $pag){
        header("Location: question_{$_SESSION['actual_question']}.php");
        exit;
    }
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quimica quiz</title>

    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
        rel="stylesheet"
    >
    <link rel="stylesheet" href="../assets/css/style.css">
</head>
<body>

<main class="quiz-page">
    <div class="quiz-container">
       <form action="../core/action.php" method="post">
            <div class="question-number">
                <button type="submit" class="top-button">13</button>
            </div>
        <div class="quiz-image">
            <img src="../assets/images/questao_13.png" alt="Imagem do quiz">
        </div>

        <div class="question">
            Qual o resultado da mistura de bicarbonato de sódio com vinagre?
        </div>
        <form action="../core/action.php" method="post">
            <div class="answers">
                <div class="row">
                    <input type="hidden" name="question_id" value="<?= $pag ?>">
                    <div class="col-6">
                        <button type="submit" class="answer-button">Água</button>
                    </div>
                    <div class="col-6">
                        <button type="submit" class="answer-button">Gás Carbônico</button>
                    </div>
                    <div class="col-6">
                        <button type="submit" class="answer-button">Acetato de Sódio</button>
                    </div>
                    <div class="col-6">
                        <button type="submit" class="answer-button">Ácido Carbônico</button>
                    </div>
                </div>
            </div>
        
    </div>

    <footer class="quiz-footer">
        <button type="submit" name="correct" class="footer-button">Todos</button> os direitos reservados &copy; 2026
    </footer>
        </form>
</main>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
