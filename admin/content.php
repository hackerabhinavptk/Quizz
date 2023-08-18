<?php 

$page=false;




if(isset($_GET['page'])){

    $page=$_GET['page'];
}
if($page=='question'){

    include('./question.php');
}

if($page=='list'){

    include('./list.php');
}
if($page=='user_list'){

    include('./user_list.php');
}

if($page=='view_marks'){

    include('./view_marks.php');
}

elseif($page==''){


    include('./home_page.php');
}

?>
   
