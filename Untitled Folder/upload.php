
<!DOCTYPE html>
</html>

<HTML>
<HEAD>

</HEAD>
<BODY>
    <form enctype="multipart/form-data" method="post" >

    profilepic :<input name="profilepic" type="file"> 
    procherpic :<input name="procherpic" type="file"> 
    <input type="submit" name="submit" value="save">
    </form>
    </div>
</BODY>
</HTML>
<?php
$con = new mysqli("localhost","root","aspire@123","project");



if($_SERVER['REQUEST_METHOD']=='POST'){
if(($_FILES['profilepic']['tmp_name'])==false ||($_FILES['procherpic']['tmp_name'])==false){
echo "please select image";
}
else{
    $profilepic=$_FILES['profilepic']['tmp_name'];
    $procherpic=$_FILES['procherpic']['tmp_name'];
  
    $profilepic=file_get_contents($profilepic);
    $profilepic=base64_encode($profilepic);
    
    $procherpic=file_get_contents($procherpic);
    $procherpic=base64_encode($procherpic);
    echo "insertion started";
    $sql=" update newsfeeddb set ProfilePic='$profilepic',EventProucher='$procherpic'  where ActiveEventNUmber=1;"    ;
    if($con->query($sql)){
        echo "image stored";
    }
    else{
        echo"<br>errror";
    }
}

}
else{
    echo 'something wrong';
}
$sql="Select * from newsfeeddb";
$result=$con->query($sql);
if($result->num_rows>0){
while($row=$result->fetch_assoc()){
    echo '<img src="data:image/gif;base64,' . $row["ProfilePic"] . '" />';
    echo '<img src="data:image/gif;base64,' . $row["EventProucher"] . '" />';
}}
else{
    echo "no image is there";

}
?>