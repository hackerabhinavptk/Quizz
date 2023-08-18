<?php

session_start();
$question_id = null;

$question = $_REQUEST['question'];
$option1 = $_REQUEST['option1'];
$option2 = $_REQUEST['option2'];
$option3 = $_REQUEST['option3'];
$option4 = $_REQUEST['option4'];
$rightanswer = $_REQUEST['rightanswer'];

if (isset($_POST['question_id'])) {
    $question_id = $_POST['question_id'];
}

$table = 'app_questions';
$sql = "UPDATE `$table` SET `question` = '$question' , `option1`='$option1',`option2`='$option2',`option3`='$option3',`option4`='$option4',`rightanswer`='$rightanswer' WHERE id=$question_id ";


     $res = mysqli_query($connection,$sql);
if ($res){

    $_SESSION['message']='Field edited Successfully';

    header('location:http://localhost/quizz/admin/edit_question.php?id='.$question_id);
}else{
    echo 'there is some error';
}

    ?>