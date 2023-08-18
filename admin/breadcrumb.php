
<?php
$page=false;



if(isset($_GET['page'])){
$page=$_GET['page'];

}

?>

<?php if($page=='question'){ ?>



    <nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    
    <li class="breadcrumb-item" aria-current="page">Home</li>
    <li class="breadcrumb-item active" aria-current="page">Question</li>
  </ol>
</nav>


 <?php } ?>

 <?php if($page=='list'){ ?>



<nav aria-label="breadcrumb">
<ol class="breadcrumb">

<li class="breadcrumb-item" aria-current="page">Home</li>
<li class="breadcrumb-item active" aria-current="page">List</li>
</ol>
</nav>


<?php } ?>

<?php if($page=='user_list'){ ?>



<nav aria-label="breadcrumb">
<ol class="breadcrumb">

<li class="breadcrumb-item" aria-current="page">Home</li>
<li class="breadcrumb-item active" aria-current="page">User list</li>
</ol>
</nav>


<?php } else {?>
    <nav aria-label="breadcrumb">
<ol class="breadcrumb">

<li class="breadcrumb-item active" aria-current="page">Home</li>

</ol>
</nav>

<?php } ?>

