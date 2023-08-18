<?php

$success=false;


if($_SESSION['loggedin']==false  ){
    
    header('location:http://localhost/quizz/admin/login.php');
    exit;
}


if($_SESSION['role']!=1 ){
    header('location:http://localhost/quizz/admin/login.php');
    exit;
}



if(isset($_SESSION['msg'])){

    $success=$_SESSION['msg'];
    unset($_SESSION['msg']);

}

include('../database/connection.php');
$table = 'app_questions';

$sql = "SELECT * FROM `$table`";


$res = mysqli_query($connection, $sql);
$output = [];

while ($outputt = mysqli_fetch_assoc($res)) {

    $output[] = $outputt;

}


?>

<html lang="en">

<head>
    <title>Bootstrap Example</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>

<body>

<?php

if ($success != false) {

    ?>
    <div class="alert alert-success">
<strong><?php echo $success ?></strong> 
</div>
    
<?php } ?>
    <div class="container">

        <table class="table table-bordered">

        <thead>
                    <tr>
                        <th>Question</th>
                        <th>Option1</th>
                        <th>Option2</th>
                        <th>Option3</th>
                        <th>Option4</th>
                        <th>Action</th>

                    </tr>
                </thead>
            <?php foreach ($output as $key => $value) { ?>
               
                <tbody>
                    <tr>
                        <td>
                            <?php

                            print_r($value['question']);
                            ?>
                        </td>
                        
                        <td>
                            <?php

                            print_r($value['option1']);
                            ?>
                        </td>

                        <td>
                            <?php

                            print_r($value['option2']);
                            ?>
                        </td>

                        <td>
                            <?php

                            print_r($value['option3']);
                            ?>
                        </td>

                        <td>
                            <?php

                            print_r($value['option4']);
                            ?>
                        </td>

                        <td>
                            
                       
                          <a class="btn btn-primary" href="http://localhost/quizz/admin/delete_question.php?id=<?php echo $value['id']; ?>"  role="button">Delete</a><br></br>
                          <a class="btn btn-primary" href="http://localhost/quizz/admin/edit_question.php?id=<?php echo $value['id']; ?>"  role="button" >Edit</a>

                        </td>

                    </tr>



                <?php } ?>

            </tbody>
        </table>
    </div>

</body>

</html>