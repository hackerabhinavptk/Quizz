<?php
session_start();
$success = false;
if (isset($_SESSION['message'])) {

    $success = $_SESSION['message'];
    unset($_SESSION['message']);
}


?>


<html>

<head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>

<body>

<?php if ($success != false) {

?>
<div class="alert alert-success">
    <strong>
        <?php echo $success ?>
    </strong>
</div>

<?php } ?>

    <form action="./server.php" method="POST" enctype="multipart/form-data">
        <div class="mb-3">
            <label class="form-label">Firstname</label>
            <input type="text" name='first_name' placeholder="enter your first name" class="form-control">

        </div>

        <div class="mb-3">
            <label class="form-label">Lastname</label>
            <input type="text" name='last_name' placeholder="enter your last name" class="form-control">

        </div>

        <div class="mb-3">
            <label class="form-label">Phone</label>
            <input type="number" name='phone' placeholder="enter your phone" class="form-control">

        </div>

        <div class="mb-3">
            <label class="form-label">Email</label>
            <input type="email" name='email' placeholder="enter your email" class="form-control">

        </div>

        <div class="mb-3">
            <label class="form-label">Password</label>
            <input type="text" name='password' placeholder="enter your password" class="form-control">

        </div>


         <div class="mb-3">
            <label class="form-label">Image</label>
            <input type="file"  name='image[]' class="form-control" multiple>

        </div> 


        <input type="hidden" name="action" value="user_add"/>

        
        
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</body>

</html>