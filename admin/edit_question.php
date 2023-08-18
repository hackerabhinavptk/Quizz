<?php

if(!isset($_SESSION['role'])){

  header('location:http://localhost/quizz/admin/login.php');

}

session_start();
$success=false;
if(isset($_SESSION['message'])){

$success=$_SESSION['message'];
unset($_SESSION['message']);

}

include('../database/connection.php');

$id=$_REQUEST['id'];

if(!isset($id)){

    header('location:http://localhost/quizz/admin/list.php');
    exit;
}
$table = 'app_questions';
$sql = "SELECT * FROM `$table` WHERE id = $id" ;

// echo $sql;
// die;

$res = mysqli_query($connection,$sql);
$data = [];

while ($output = mysqli_fetch_assoc($res)) {

    $data[] = $output;

} ?>

<!-- // echo '<pre>';
// print_r($data);
// echo '</pre>'; -->


<?php  foreach ($data as $key=>$value){ ?>


    <html>

<head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>

<body>

<?php

if ($success != false) {

    ?>
    <div class="alert alert-success">
<strong><?php echo $success ?></strong> 
</div>
    
<?php } ?>

<form action="./server.php" method="POST">
        <div class="mb-3">
            <label class="form-label">Question</label>
            <input type="text" name='question' value='<?php echo $value['question'] ?>'
             placeholder="enter your Question" class="form-control">

        </div>

        <div class="mb-3">
            <label class="form-label">Option1</label>
            <input type="text" name='option1' value='<?php echo $value['option1'] ?>' placeholder="enter your option 1" class="form-control">

        </div>

        <div class="mb-3">
            <label class="form-label">Option2</label>
            <input type="text" name='option2' value='<?php echo $value['option2'] ?>' placeholder="enter your option 2" class="form-control">

        </div>

        <div class="mb-3">
            <label class="form-label">Option3</label>
            <input type="text" name='option3' value='<?php echo $value['option3'] ?>' placeholder="enter your option 3" class="form-control">

        </div>

        <div class="mb-3">
            <label class="form-label">Option4</label>
            <input type="text" name='option4' value='<?php echo $value['option4'] ?>' placeholder="enter your option 4" class="form-control">

        </div>

        <div class="mb-3">
            <label class="form-label">Right Answer</label>
            <input type="text" value='<?php echo $value['rightanswer'] ?>' name='rightanswer' class="form-control">

        </div>
        <input type="hidden" name="action" value="update_question"/>
        <input type="hidden" name="question_id" value="<?php echo $value['id'] ?>"/>
    
        <button type="submit" class="btn btn-primary">Submit</button>
    </form> 

</body>
</html>
   
<?php } ?>