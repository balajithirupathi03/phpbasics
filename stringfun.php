<?php

$str1 = "balj ef sdfve vevr";
$test = ["exam" => 2];
if(empty($test)) {
    echo "not value set";
} else {
    echo "some value is there<br>";
}

$a=5;
$b="5";
var_dump($a == $b);echo "<br/>";  
var_dump($a === $b); echo "<br/>";  



echo(addcslashes("Hello World!","roe")); echo "<br/>";  
echo($str1);echo "<br/>";  
echo (substr("abcdef", -3, 3));echo "<br/>";
$number = 10;  
printf("%f",$number);  echo "<br/>";
print($number);  echo "<br/>";
echo substr_compare("abcde", "bc", 1, 2);echo "<br/>";
$post=0;
if (isset($post)) {//it check the variable is declare? and the value is present?
    echo "vlue is set";
  } else {
    echo "not present";
  }echo "<br/>";

  if (empty($post)) {
    echo "not presnt";
  } else {
    echo "value is present";
  }echo "<br/>";

  $null=null;
  if (is_null($null)) {
    echo "its a null";
  } else {
    echo "its not a null";
  }echo "<br/>";
  
$word="balajikumar";
echo $word[0];echo "<br/>";

echo "The line number is " . __LINE__ . "<br><br>";
echo __FILE__ . "<br><br>"; 
echo __DIR__ . "<br><br>"; 
echo dirname(__FILE__) . "<br><br>";  
  
  
function cash(){  
echo 'the function name is '. __FUNCTION__ . "<br><br>";
}  
cash();






?>