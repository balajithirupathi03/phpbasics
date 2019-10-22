<?php
class A{
    private $name;
    public $a;
    public function __set($property,$value){
        echo 'hi';
        $this->$property=$value;
    }
    
    public function __get($property){
        echo '-------';
        echo $this->$property;
    }
}
class B extends A{
    
}
$b =new A();
$b->name='balaji';
echo $b->name;
?>
