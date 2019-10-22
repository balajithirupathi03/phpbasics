<?php

//for get connection with data base
$connecttosql = new mysqli("localhost","root","aspire@123","project");
//check the its connect or not
if ($connecttosql->connect_error) {
    die("Connection failed: " .$connecttosql->connect_error);
} 
else{
    echo "connected <br>";
}
echo
$name=$_POST['name'],
$title=$_POST['title'],
$discription=$_POST['discription'];

$suceessmessage=$connecttosql->query("INSERT INTO newsfeeddb (userName,title,eventdiscription) VALUES ('$name','$title','$discription'");
if($suceessmessage==true){
    echo 'insert successfully';
}
echo 'hi';
?>