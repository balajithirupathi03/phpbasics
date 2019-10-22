<?php

///---Encapsulation Apstraction---

trait triatpart{
    function hello(){
        echo 'triat part';
    }
}
class b{
function hello(){
   echo "parent class";
}
}
class c extends b{
   use triatpart;   
}

$obj=new c();
$obj->hello();
exit ;








///---Polymorphism---


///---Ovlerloading---
class Starting{
    public function add(){
 $sum=0;
foreach(func_get_args() as $arg){
    $sum=$sum+$arg;
}
echo $sum;
//var_dump( func_get_args());
}
}

$obj = new Starting();
$obj->add(1,2);
$obj->add(1,2,3);




///---overriding---
class Aaa{
    function show($a,$b){
        echo 'Aaa';
    }
    }
    class Bbb extends Aaa{
        var $test='i am test';
        function show($a,$b){
            
            echo $this->test;// example for this
            //echo $test;     its show waring
        }
    }
    $object=new Bbb();
    $object->show(1,2);





///---Inheritance---
class X{
function hello(){
    echo ":-)";
}
}
class y extends x
{

}
$objj=new y();
$objj->hello();







 //---class object Example----
class ParentClass{
public $name;
public $age;

function printName($name){
echo $name;
}
}
$objParentClass =new ParentClass();
$objParentClass->printName('balaji');





 //---Inheritance Example ---- 
class FClass {
   var $age=5;
	protected function FCageFun() {
	return $this->age;
	}
}
class SClass extends FClass {
    var $age=52;
	public function SCageFun() {
	return $this->age."\n";
	}
}
class TClass extends SClass {
    var $age=85;
	public function TCageFun() {
	return  $this->age."\n";
	   }
        public function show() {
        echo "Class FClass age" .$this->FCageFun();
        echo "Class SClass age".$this-> SCageFun();
        echo "Class TClass age" . $this->TCageFun();
        }
}
$obj = new TClass();
$obj->show();
?>