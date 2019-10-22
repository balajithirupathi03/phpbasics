
//------------------interface-------------------------
<?php
interface inter
{
    function aa();
    // {
    //     echo 'hi';
    // }
}

class b implements inter{
    function aa(){
        echo 'hi';
    }
}

$obj=new b();
$obj->aa();
?>
//-----------------abstract class--------------------------------
<?php
// Your code here!
// abstract class a{
//     function sum(){
//         echo 'hi';
//     }
//   //abstract function add();
// }
// class b extends a{
//     function add(){
//         echo 'hi';
//     }
// }

// $obj=new b();
// $obj->add();
?>