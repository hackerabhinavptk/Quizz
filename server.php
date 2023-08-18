<?php
session_start();


include('data.php');
$question_id = $_REQUEST['question_id'];
$ans = $_REQUEST['option'];

$_SESSION['data'][$question_id] = $ans;

$new_question_id = $question_id + 1;
if (!isset($array[$new_question_id])) {

    header('location:http://localhost/quizz/result.php');
    exit;
} else {
    header('location:http://localhost/quizz/quiz.php?id=' . $new_question_id);

    exit;
}

?>