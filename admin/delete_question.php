<?php 
session_start();

include('../database/connection.php');

$id=$_REQUEST['id'];
$table = 'app_questions';
$sql = "DELETE  FROM `$table` WHERE id = $id" ;
// echo $sql;
// die;
$res = mysqli_query($connection,$sql);
if($res){
    $_SESSION['msg']='Data of  id '.$id .'has been deleted succesfully';
header('location:http://localhost/quizz/admin/list.php');
exit;
}

?>