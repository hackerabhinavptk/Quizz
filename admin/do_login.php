<?php

$error = [];
$table = 'app_users';

$required_fields = ['email', 'password'];

foreach ($required_fields as $key => $value) {

    if (!isset($_REQUEST[$value]) || empty($_REQUEST[$value])) {

        $error[] = $value . ' ' . 'is required';
    }
}

if (!$error) {
    $email = $_POST['email'];
    $password = base64_encode($_POST['password']);

    $sql = "SELECT * FROM `$table` WHERE `email` =  '$email' AND `password` = '$password' AND `user_role`=1";

    $res = mysqli_query($connection, $sql);
    $row_count = mysqli_num_rows($res);

    if ($row_count > 0) {
        $_SESSION['loggedin'] = true;
        $_SESSION['msg'] = 'Registered sucessfully';
        while ($output = mysqli_fetch_assoc($res)) {
           

            if ($output['id']) {


                $_SESSION['id'] = $output['id'];
                $_SESSION['role'] = $output['user_role'];

            }
        }
        header('location:http://localhost/quizz/admin/home.php');
        exit;

    } else {
        header('location:http://localhost/quizz/admin/login.php');
        exit;
    }


   

} else {

    $_SESSION['error'] = $error;


    header('location:http://localhost/quizz/admin/login.php');
    exit;

}


?>