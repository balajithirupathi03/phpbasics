
<?php 
class calculator 
{ 
    public function plus($a,$b){ 
       return $a+$b;
    } 
      
} 
$obj = new calculator(); 
$result=$obj->plus(1,2);
echo $result;

class a{
function classafunctin(){
  echo "claas a function called";}
}
class b extends a{
    function classbfunction(){
        echo "class b function called";}
}
$aobject=new a();
$bobject=new b();
echo "<br>"+$bobject->classbfunction();
?> 
