<?php 

include_once 'util.php';
$util= new Util();
$connection=$util->startConnection();
// run query
$query =$connection->query("SELECT * FROM newsfeeddb");
//$storecolumn[];
//$storerow[];
foreach($query as $row) {
    foreach($row as $column){
        echo $column."<br>";
        $columns[] = $column;
    }
    $dataarray[] = $columns;
}
print_r($dataarray);exit;
foreach($dataarray as $row)
{
foreach($row as $column){
    echo $column;echo "<br>";
    //array_pop($storecolumn);
}
//echo $storerow;
}
// $profilepic='profile pic phph';
// $name='name php';
// $eventtitle='title php';
// $eventdiscriptio= 'evennt discription';

// $profilepic=
// $name='name php';
// $eventtitle='title php';
// $eventdiscriptio= 'evennt discription';
?>


/**
* Function to get
*
* @param string $string
*
* @result boolean $result
**/
public function test($string)
{

}