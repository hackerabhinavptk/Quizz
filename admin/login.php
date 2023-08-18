<?php
session_start();

$error=false;
$success=false;
$loggedin=false;

if(isset($_SESSION['loggedin'])){

  $loggedin=true;
}


if($loggedin==true){
    
  header('location:http://localhost/quizz/admin/home.php');
  exit;
}


if (isset($_SESSION['error'])) {

  $error = $_SESSION['error'];
  unset($_SESSION['error']);
}

if (isset($_SESSION['msg'])) {

  $success = $_SESSION['msg'];
  unset($_SESSION['msg']);
} 


?>

<html>
<head>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<head>

<body>
<?php

if ($success != false) {

    ?>
    <div class="alert alert-success">
<strong><?php echo $success ?></strong> 
</div>
    
<?php } ?>

<?php

if ($error != false) {
  
    if(is_array($error)){
        foreach($error as $key=>$value){  ?>

            <div class="alert alert-danger">
            <strong><?php echo $value ?></strong> 
          </div>
           
            
      <?php  }

    } else { ?>
         <div class="alert alert-danger">
            <strong><?php echo $error ?></strong> 
          </div>
           
    <?php }
   }

?>


<form  method="POST" action="./server.php">
  <div class="mb-3">
    <label class="form-label">Email</label>
    <input type="email" name='email' placeholder="enter your email" class="form-control" >
    
  </div>

  <div class="mb-3">
    <label class="form-label">Password</label>
    <input type="text" name='password' placeholder="enter your password" class="form-control" >
    
  </div>
  <input type="hidden" name="action" value="do_login"/>

  <button type="submit" class="btn btn-primary">Submit</button>
</form>
<body>

<html>