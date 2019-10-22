<?php
$con = new mysqli("localhost","root","aspire@123","project");
$sql="Select Title,ProfilePic from newsfeeddb";
$result=$con->query($sql);
if($result->num_rows>0){echo "enter";
while($row=$result->fetch_assoc()){
    //echo "<imag width='300px' height='300px' src='data:image;base64,{$row["ProfilePic"]}' alt='img';<br><br>";
    echo $row["Title"];
    echo '<img src="data:image/gif;base64,' . $row["ProfilePic"] . '" />';
    //echo base64_decode();
}}
else{
    echo "no image is there";
}
?>

