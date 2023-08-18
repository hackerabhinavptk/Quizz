<?php 

$server='localhost';
$username='root';
$password = '';
$database = 'app_quizz';

$connection = mysqli_connect($server,$username,$password,$database);

if(!$connection){
    die('Connection to database is failed due to error '.mysqli_connect_error());
}



?>