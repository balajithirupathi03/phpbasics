<?php  
 require("try.html");
        $name=$_POST["name"];
        echo "Welcome, $name";
        setcookie("message","cookie is work");
?>
<html>  
<body>  
<?php  
  
    echo "Cookie Value: " . $_COOKIE["message"];  
?>
<?php
$fileName = "/home/aspire1593/Desktop/JS/Evenet.html";
$fp = fopen($fileName,"r");

$contents = fread($fp, filesize($filename));

echo "<pre>$contents</pre>";
if( $fp == false )
{
  echo ( "Error in opening file" );
  exit();
}
?>
 
</body>  
</html>  