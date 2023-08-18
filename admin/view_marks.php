<?php 
$id=false;

if(isset($_GET['id'])){

    $id=$_GET['id'];
   
}


include('../database/connection.php');
$table='quizz_marks';

$sql = "SELECT * FROM `$table`  WHERE id=$id";

$res = mysqli_query($connection, $sql);
$output = [];

while ($outputt = mysqli_fetch_assoc($res)) {

    $output[] = $outputt;

} ?>

<?php foreach($output as $key=>$value){ ?>

  <?php  echo 'your wrong answers are'.$value['wrong_questions']; ?><br>
  <?php echo 'your right  answers are'.$value['right_questions']; ?><br>
  <?php  echo 'your total  marks are'.$value['total_marks'];?><br>


 <?php }?>