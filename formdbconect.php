<?php  
/*
//for get connection with data base
$connecttosql = new mysqli("localhost","root","aspire@123","project");
//check the its connect or not
if ($connecttosql->connect_error) {
    die("Connection failed: " .$connecttosql->connect_error);
} 
else{
    echo "connected <br>";
}
print_r($_POST["imageone"]);
exit;
$file=$_FILES["imageone"];$result = $connecttosql->
//print_r($file['tmp_name'];
if(isset($_POST["insert"])){
$fileone=addslashes(file_get_contents($_FILES["imageone"]["tem_name"]));
$filetwo=addslashes(file_get_contents($_FILES["imagetwo"]["tem_name"]));

exit;
$insertion=$connecttosql->query("INSERT INTO newsfeeddb (ActiveEventNUmber,ProfilePic,UserName,EventDiscription,EventProucher) 
VALUES ('03','$fileone','balaji','first input discription','$filetwo')");
if($insertion==true){
    echo 'insert sucessfully';
}
}

//query("INSERT INTO datas (id,name,age) VALUES ('".$_POST["id"]."','".$_POST["name"]."','".$_POST["age"]."')");

if(isset($_FILES['fileToUpload'])){
    $file=$_FILES['fileToUpload'];
    echo "hi".$_FILES['fileToUpload']['name'];

    //file prperties 'name' 'temp_name' 'error' 'size'
    $file_name=$file['name'];
    $file_tmp=$file['tmp_name'];
    print_r($file_name);echo "<br>";

    $file_ext=strtolower(end(explode('.',$file_name)));
    print_r($file_ext);echo "<br>";

    $file_name_new= uniqid('',true).'.'.$file_ext;
    print_r($file_name_new); echo "<br>";
    $file_destination='/var/www/html/task.com/uploadedfile/';
    if(@move_uploaded_file($file_tmp,$file_destination)){
echo $file_destination;
    }

}
 


$target_path = "/var/www/html/task.com/uploted files/";  
$target_path = $target_path.basename( $_FILES['fileToUpload']['name']);   
  
if(move_uploaded_file($_FILES['fileToUpload']['tmp_name'], $target_path)) {  
    echo "File uploaded successfully!";  
} else{  
    echo "Sorry, file not uploaded, please try again!";  
} 

*/

//for get connection with data base
$connecttosql = new mysqli("localhost","root","aspire@123","project");
//check the its connect or not
if ($connecttosql->connect_error) {
    die("Connection failed: " .$connecttosql->connect_error);
} 
else{
    echo "connected <br>";
}
//get data form and store in query
$result = $connecttosql->query("INSERT INTO datas (id,name,age) VALUES ('".$_POST["id"]."','".$_POST["name"]."','".$_POST["age"]."')");
if($result==true){
    echo'insert sucessfullt';
}
else{
    echo'something is wrong';
}


//view the data base
$result = $connecttosql->query("SELECT id,name,age FROM datas");

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<br> id: ".$row["id"]. " - Name: ".$row["name"]. " - age" . $row["age"] . "<br>";
    }
} else {
    echo "0 results";
}
?>