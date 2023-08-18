<?php
include('data.php');

if (!isset($_SESSION['data'])) {
    header('location:http://localhost/quizz/quiz.php');
    exit;
}

$val = 0;
$right = 0;
$wrong = 0;

foreach ($_SESSION['data'] as $key => $value) {

    if ($value == $array[$key]['rightanswer']) {

        $val = $val + 1;
        $right = $right + 1;
    } else {

        $wrong = $wrong + 1;
    }

}

$table='quizz_marks';

$sql="INSERT into `$table` (`total_marks`,`wrong_questions`,`right_questions`) VALUES ('$val','$wrong','$right') ";
$result = mysqli_query($connection, $sql);
if($result){
    unset($_SESSION['data']);
    
}

?>

<div class="alert alert-success">
    <h4 class="alert-heading">Well done! your score in the quizz is.
        <?php echo $val ?>
    </h4>

</div>

<div class="alert alert-warning">
    <strong>your wrong answers in the quizz is.
        <?php echo $wrong ?>
    </strong>
</div>

<div class="alert alert-info">
    <strong>your right answers in the quizz is.
        <?php echo $right ?>
    </strong>
</div>
<?php
?>