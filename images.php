<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

<?php 

session_start();
if(isset($_SESSION['role'])){
if($_SESSION['role']==1){
    header('http://localhost/quizz/admin/login.php');}

}
  
$id=null;
if(isset($_SESSION['id'])){

$id= $_SESSION['id'];

}


include('./database/connection.php');

 $table = 'app_users';

 $sql = "SELECT * FROM `$table` WHERE `id`='$id' ";
 
 $res = mysqli_query($connection, $sql);
 $output = false;
 
 while ($outputt = mysqli_fetch_assoc($res)) {
 
     $output = $outputt;
 
 }

 if(isset($output['image']) && !empty($output['image'])){
    $images_arr = unserialize($output['image']);
    
 }

 ?>
 
  <div class="container">

    <div class="row">
<?php foreach($images_arr as $key=>$val ){ ?>
    <div class="col-md-4">
      <div class="thumbnail">
        <a href="<?php echo 'http://localhost/quizz/uploads/' . $val; ?>" target="_blank">
          <img src="<?php echo 'http://localhost/quizz/uploads/' . $val; ?>" alt="Nature" style="width:100%">
          <div class="caption">
            <p><?php echo $output['first_name'] ?></p>
          </div>
        </a>
      </div>
    </div>
     <?php }?>   
    </div>

  </div>
