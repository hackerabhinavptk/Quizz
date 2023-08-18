<?php
session_start();

include('./database/connection.php');
$table = 'app_questions';


$sql = "SELECT * FROM `$table`";
$result = mysqli_query($connection, $sql);

$array=[];


while ($outputt = mysqli_fetch_assoc($result)) {


    $array[] = $outputt;

} 
// echo '<pre>';
// print_r($array);
// echo '<?pre>';
//   $array = 
//      
//          'question' => 'which country is biggest in size',
//          'option1' => 'India',
//          'option2' => 'Russia',
//          'option3' => 'China',
//          'option4' => 'Canada',
//          'right answer' => 'Russia'
//      ],
//      [
//          'question' => 'which country is biggest in population',
//          'option1' => 'India',
//          'option2' => 'Russia',
//          'option3' => 'China',
//          'option4' => 'Canada',
//          'right answer' => 'China'
//      ]
//      
//          'question' => 'which country has highest coastline',
//          'option1' => 'America',
//          'option2' => 'Russia',
//          'option3' => 'Australia',
//          'option4' => 'Canada',
//          'right answer' => 'Canada'
//      ]
//      [
//          'question' => 'which is the capital of india',
//          'option1' => 'Delhi',
//          'option2' => 'hydrabaad',
//          'option3' => 'Kolkata',
//          'option4' => 'Punjab',
//          'right answer' => 'Delhi'
//      ],
//      
//          'question' => 'which is the capital of America',
//          'option1' => 'Delhi',
//          'option2' => 'Moscow',
//          'option3' => 'Beiging',
//          'option4' => 'Washington',
//          'right answer' => 'Washington',
//      
// ]; 
?>