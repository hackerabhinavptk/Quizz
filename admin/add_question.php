<?php
$question=$_POST['question'];

$option1=$_POST['option1'];

$option2=$_POST['option2'];
$option3=$_POST['option3'];
$option4=$_POST['option4'];
$rightanswer=$_POST['rightanswer'];

$table = 'app_questions';

$sql = "INSERT into `$table` (`question`,`option1`,`option2`,`option3`,`option4`,`rightanswer`) VALUES ('$question','$option1','$option2','$option3','$option4','$rightanswer')";
$result = mysqli_query($connection, $sql);
echo $result;
if ($result) {
    $_SESSION['msg'] = 'Registered sucessfully';
header('location:http://localhost/quizz/admin/admin.php');
exit;

} 
?>