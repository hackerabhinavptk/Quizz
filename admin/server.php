<?php
session_start();
include('../database/connection.php');
$action = false;
$login=false;


if(isset($_POST['action'])){
    $action = $_POST['action'];
}
if($action){
    include('./'.$action.'.php');
}







?>