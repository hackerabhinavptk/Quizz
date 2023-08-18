<?php
 

//  print_r($_SESSION);
//  die;
include('./data.php');

$total_questions = count($array);

// echo "<pre>";
// print_r($_SESSION);
// echo "</pre>";

$single_question = [];
$id = 0;

if (isset($_GET['id']) && !empty($_GET['id'])) {
    $id = $_GET['id'];

}
if ($id > 0) {
    $single_question = $array[$id];

} else {
    $single_question = $array[0];
}

$previous_question_id = $id - 1;
$selected_option = '';
if (isset($_SESSION['data']) && isset($_SESSION['data'][$id])) {
    $selected_option = $_SESSION['data'][$id];
} 

//echo $selected_option;

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <title>Bootstrap Example</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>


    <div class="container">
   
        <p class="text-center">Welcome To Abhinav's World  </p>  
<a href="http://localhost/quizz/images.php" > GET IMAGES</a>

        <?php

        if (count($single_question) == 0) { ?>
            <div class="card">
                <div class="card-header text-center" style="background:#007bff;color:#fff">
                    <?php echo 'no question available' ?>
                </div>
            </div>

        <?php } else { ?>
            <form action='http://localhost/quizz/server.php' method="POST">
                <div class="card">


                    <div class="card-header text-center" style="background:#007bff;color:#fff">
                        <?php echo $single_question['question'] ?>
                    </div>
                    <div class="card-body">

                        <div> <input type='radio' name='option' value='<?php echo $single_question['option1'] ?>' 
                        
                        <?php if($selected_option == $single_question['option1']){  ?>checked<?php } ?>  />

                            <?php echo $single_question['option1'] ?>

                        </div>

                        <div><input type='radio' name='option' value=<?php echo $single_question['option2'] ?>

                        
                        <?php if($selected_option == $single_question['option2']){  ?>checked<?php }?>/>

                            <?php echo $single_question['option2'] ?>

                        </div>

                        <div><input type='radio' name='option' value=<?php echo $single_question['option3'] ?> 

                        <?php if($selected_option == $single_question['option3']){  ?>checked<?php }?>/>

                            <?php echo $single_question['option3'] ?>

                        </div>
                        <div> <input type='radio' name='option' value=<?php echo $single_question['option4'] ?>

                        <?php if($selected_option == $single_question['option4']){  ?>checked<?php }?>/>

                            <?php echo $single_question['option4'] ?>

                        </div>
                        <input type='hidden' name='question_id' value='<?php echo $id; ?>' />



                    </div>

                    <div class="card-footer text-left">
                        <?php if ($id > 0 && $id <= ($total_questions - 1)) { ?>

                            <a href="http://localhost/quizz/quiz.php?id=<?php echo $previous_question_id ?>"
                                class="btn btn-primary">Previous</a>
                        <?php } ?>


                        <button class="btn btn-primary">Next</button>


                    </div>


                </div>
            </form>

          
        </div>


    <?php } ?>

</body>

</html>