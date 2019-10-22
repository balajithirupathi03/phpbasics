<?php


print_r(array_splice($arraysring,0,2));echo "<br>";//rermove the particular part in array and return it
print_r($arraysring); echo "<br>";                 //Splice affect the actual array 
print_r(array_slice($arraynumber,0,2));echo "<br>";//it also remove tha particular apart in array and return it
print_r($arraynumber); echo "<br>";                //slice affect the actual array
print_r(array_push($arraysring,'balaji'));echo "<br>";  //add a elemnt in the array
print_r($arraysring); echo "<br>";                 //affect the original array
print_r(array_pop($arraysring));echo "<br>";       //remove the element
print_r($arraysring); echo "<br>";echo "hi";       //
print_r(array_map("justfun()",$arraynumber));echo "<br>";//appaly some concepts through the all the array
print_r($arraynumber); echo "<br>";                 //

function justfun($i){
}


print_r(array_change_key_case($arrayassociate,CASE_UPPER));   echo "<br>";
print_r(array_chunk($arraysring, 3, true)); echo "<br>";//split the array into two arrays
  echo "<h1> hi</h1><br/>";



$list = array  
  (  
  array("s.no"=>1,"name"=>"balaji","salary"=>400000),  
  array("s.no"=>2,"name"=>"kumar","salary"=>500000),  
  array("s.no"=>3,"name"=>"sagar","salary"=>300000)  
  );  
  
  $first_names = array_column($list,"salary", "name");//create a array with one value is set key of of another value
  print_r($first_names);
  echo "<br/>";
  $a = array_combine($arraynumber, $arraymixed);//add a two array

  print_r($a);echo "<br/>"; 
  $mergee = array_merge($arraynumber, $arraysring);//arrays 1 append to array two . 
  print_r($mergee);echo "....<br/>"; 


  $compine = array_combine($arraynumber, $arraysring);
  print_r($compine);

  print_r(array_count_values($arraysring));echo "<br/>"; //count the value set value as key

  function cube($n)
{
    return ($n * $n * $n);
}


  function cube($n)
{
    return ($n * $n * $n);
}

$map = [1, 2, 3, 4, 5];
$mapp = array_map('cube', $map);
print_r($mapp);echo "<br/>";

$merge = array_merge($arrayassociate, $arraynumber);
print_r($mapp);echo "<br/>";

$array4="ji";
$array4obj=(object)$array4;
print_r($array4obj);echo "<br/>";
$stdobj=new stdClass();
print_r($stdobj);echo "<br/>";

$stdobj2="i am a string value";
$conert=(object)$stdobj2;
print_r($conert);

$arr = array(1,5,1,4,6,5);
echo json_encode($arr);
?>