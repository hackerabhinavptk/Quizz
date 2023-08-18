<?php

//print_r($_FILES);


$val = $_FILES;
$file_name = [];

$len = count($val['image']['name']);

for ($i = 0; $i < $len; $i++) {

    $temp = $val['image']['tmp_name'][$i];

    $name = $val['image']['name'][$i];

    $image_info = pathinfo($name);

    $extension = $image_info['extension'];

    $filename = $image_info['filename'];

    $upload_directory = '../uploads';

    $new_path = $upload_directory . '/' . $filename . '.' . $extension;
    $is_upload = move_uploaded_file($temp, $new_path);

    $file_name[] = $filename . '.' . $extension;
}

$images = serialize($file_name);



$image = '';

$first_name = $_POST['first_name'];
$last_name = $_POST['last_name'];
$phone = $_POST['phone'];
$email = $_POST['email'];
$password = base64_encode($_POST['password']);

$image = $images;

$table = 'app_users';


$sql = "INSERT into `$table` (`first_name`,`last_name`,`phone`,`email`,`password`,`image`) VALUES ('$first_name','$last_name','$phone','$email','$password','$image')";

$result = mysqli_query($connection, $sql);
echo $result;
if ($result) {
    $_SESSION['message'] = 'Registered sucessfully';
    header('location:http://localhost/quizz/user/signup.php');

    exit;

}
?>