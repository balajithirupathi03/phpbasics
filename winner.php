<?php
$dblink= new mysqli('localhost','root','aspire@123','project');
if($dblink->connect_error){
    die("connection failed :".$dblink->connect_error);
}
else{
    echo "Its connected <br> ";
}
//Its for check insert and and error insertion example
//$excecute=$dblink->query("INSERT INTO datas (id, name, age) value ()");
//$excecute=$dblink->query("INSERT INTO datas (id, name, age) value (03,'sagar',000)");


//$excecute =$dblink->prepare("INSERT INTO datas (id,name,age) VALUES ($id,$name,$age)");//its not work
//$stmt->bind_param("isi", $id, $name, $age);//its only excecute


/*
$excecute =$dblink->prepare("INSERT INTO datas (id,name,age) VALUES (:id,:name,:age)");
$excecute->bind_param(':id',$id);
$excecute->bind_param(':name',$name);
$excecute->bind_param(':age',$age);
$id = 10;
$name = "shiv";
$age = 10;
$excecute->execute();
*/


$stmt->bindValue(':id', $id);
$stmt->bindValue(':name', $name);
$stmt->bindValue(':age', $age);
$id = 07;
$name = "karthi";
$age = 16;
$stmt->execute();


printf("%d Row inserted.\n", $excecute->affected_rows);



if($excecute===true){
    echo 'insert perfectly';
}
else{
    echo "somthing is wrong<br>";
}
$dblink->close();
?>