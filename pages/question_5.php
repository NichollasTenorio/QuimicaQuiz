<?php
    session_start();
    $pag = 5;

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

        <div class="question-number">5</div>

        <div class="quiz-image">
            <img src="../assets/images/questao_5.png" alt="Imagem do quiz">
        </div>

        <div class="question">
            João encontrou uma substância com pH 14 no laboratório. Ele colocou a mão dentro para descobrir se era água. O que ele encontrou?
        </div>
        <form action="../core/action.php" method="post">
            <div class="answers">
                <div class="row">
                    <input type="hidden" name="question_id" value="<?= $pag ?>">
                    <div class="col-6">
                        <button type="submit" class="answer-button">Água chei de ódio</button>
                    </div>
                    <div class="col-6">
                        <button type="submit" class="answer-button">Ácido batizado</button>
                    </div>
                    <div class="col-6">
                        <button type="submit" class="answer-button" name="correct">Uma base forte</button>
                    </div>
                    <div class="col-6">
                        <button type="submit" class="answer-button">Cadê minha mão?</button>
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
