<?php
    session_start();
    if($_SERVER['REQUEST_METHOD'] == 'POST'){

        $actual_question = $_SESSION['actual_question'];

        if(!isset($_POST['question_id']) || (int)$_POST['question_id'] != $actual_question){
            if(!isset($_POST['correct'])){
                session_destroy();
                header('Location: ../failpage.php');
                exit;
            }

            header("Location: ../pages/question_$actual_question.php");
            exit;
        }

        if($actual_question > 20){
            header('Location: ../finish.php');
            exit;
        }

        if(isset($_POST['correct'])){
            $_SESSION['actual_question']++;
            $next_question = $_SESSION['actual_question'];
            header("Location: ../pages/question_$next_question.php");
            exit;
        } else {
            session_destroy();
            header("Location: ../failpage.php");
            exit;
        }
    }

?>