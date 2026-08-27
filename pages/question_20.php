<?php
    session_start();
    $pag = 20;

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

        <div class="question-number">20</div>

        <div class="quiz-image">
            <img src="../assets/images/questao_20.png" alt="Imagem do quiz">
        </div>

        <div class="question">
            A laranja e o limão estavam discutindo quem era mais azedo. O que causa essa acidez?
        </div>
        <form action="../core/action.php" method="post">
            <div class="answers">
                <div class="row">
                    <input type="hidden" name="question_id" value="<?= $pag ?>">
                    <div class="col-6">
                        <button type="submit" class="answer-button">Sal</button>
                    </div>
                    <div class="col-6">
                        <button type="submit" class="answer-button"> Proteínas</button>
                    </div>
                    <div class="col-6">
                        <button type="submit" class="answer-button" name="correct">Ácidos orgânicos</button>
                    </div>
                    <div class="col-6">
                        <button type="submit" class="answer-button">Ferro</button>
                    </div>
                </div>
            </div>
        </form>
    </div>

    <footer class="quiz-footer">
        Todos os direitos reservados &copy; 2026
    </footer>
</main>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
