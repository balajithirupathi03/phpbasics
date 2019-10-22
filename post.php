<?php
$i = 10;
$j = 10;
print("$i+$j");
echo "<br>";
print($i+$j);
echo "<br>";
print_r("$i+$j");
echo "<br>";
print_r($i+$j);
echo "<br>";
echo ($i+$j);
echo "<br>";
//proof for print have a return value
//$printcheck=echo($i);
$printcheck=print($i);
if($printcheck){
    print ('hi');
}
else{
    print('else execute');
}
echo "<br>";

$arr=array(bala,5,ji,kumar,r);

print_r($arr); 
echo "<br>";
var_dump($arr);
const constelement=10;
echo constelement;
echo "<br>";

//const constelement=5;
echo constelement;


echo "<br>";
$i=5;
echo $i;      echo "<br>";
$i=10;
echo $i;      echo "<br>";
$teritory = $i>$j ?  'hi': 'hello';

echo "<br>";
function add(){
$var1 = 10;
$var2 = 22;}


function Sum()
{
    //global $var1, $var2;

    $GLOBALS[var2] = $GLOBALS[var1] + $GLOBALS[var2];
} 

Sum();
echo "golbal output".$var2;
echo phpversion();

class start{
    
    function fun(){
        echo'the function is called';
    }
}
    
    $object1=new start;
    $object1->fun();
    print_r($object1);
    var_dump($object1);
?>
