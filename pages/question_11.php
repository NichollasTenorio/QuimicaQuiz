<?php
    session_start();

$_SESSION['actual_question'] = 11;

$pag = 11;
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

        <div class="question-number">11</div>

        <div class="quiz-image">
            <img src="../assets/images/questao_11.png" alt="Imagem do quiz">
        </div>

        <div class="question">
            Você estava em casa cheio de fome, você viu uma solução de verde bromocresol e vinagre, quando você as misturou para fazer salada, que cor ficou?
        </div>
        <form action="../core/action.php" method="post">
            <div class="answers">
                <div class="row">
                    <input type="hidden" name="question_id" value="<?= $pag ?>">
                    <div class="col-6">
                        <button type="submit" class="answer-button answer-green"></button>
                    </div>
                    <div class="col-6">
                        <button type="submit" class="answer-button answer-blue"></button>
                    </div>
                    <div class="col-6">
                        <button type="submit" class="answer-button answer-yellow" name="correct"></button>
                    </div>
                    <div class="col-6">
                        <button type="submit" class="answer-button answer-samuel"></button>
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
