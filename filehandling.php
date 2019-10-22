
<!DOCTYPE html>
<html>
<body>

<?php
$file = fopen("testingfile.txt",'r');
fwrite($file, 'hello '); 
echo fgets($file);
fwrite($file, ' this is additional text ');  
fwrite($file, 'appending data');  
echo fgets($file);

fclose($file);
?>
<?php    
$filename = "testingfile.txt";    
$fp = fopen($filename, "r");//open file in read mode    
  
$contents = fread($fp, filesize($filename));//read file    
  
echo "<pre>$contents</pre>";//printing data of file  
fclose($fp);//close file    
?>    

</body>
</html>
