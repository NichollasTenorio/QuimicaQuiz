<?php
    session_start();
    $pag = 3;

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

        <div class="question-number">3</div>

        <div class="quiz-image">
            <img src="../assets/images/questao_3.png" alt="Imagem do quiz">
        </div>

        <div class="question">
            Qual dessas substâncias é ácida?
        </div>
        <form action="../core/action.php" method="post">
            <div class="answers">
                <div class="row">
                    <input type="hidden" name="question_id" value="<?= $pag ?>">
                    <div class="col-6">
                        <button type="submit" class="answer-button">HCl</button>
                    </div>
                    <div class="col-6">
                        <button type="submit" class="answer-button">H₂SO₄</button>
                    </div>
                    <div class="col-6">
                        <button type="submit" class="answer-button">HNO₃</button>
                    </div>
                    <div class="col-6">
                        <button type="submit" class="answer-button">H₃PO₄</button>
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
