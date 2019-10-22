<?php 
include_once 'bean.php';
include_once 'beanuserdetails.php';
include_once 'util.php';
 class DAO{  
  //insert data in data base
 public function insertData(){
  
  $beanUserDetails=new BeanUserDetails();
  $util=new Util();
  $connection= $util->startConnection();
echo 
    $beanUserDetails->getName(),
    $beanUserDetails->getDateOfBirth(),
    $beanUserDetails->getGender(),
    $beanUserDetails->getGame(),
    $beanUserDetails->getPlace(),
    $beanUserDetails->getMailId(),
    $beanUserDetails->getMobileNumber(),
    $beanUserDetails->getPassword(),
    $beanUserDetails->getReenteredPassword();


$sqlquery="insert into userdetails (name,dateofbirth,game,place,mailid,mobilenumber,gender,password)values (
 $beanUserDetails->getName(),
 $beanUserDetails->getDateOfBirth(),
 $beanUserDetails->getGender(),
 $beanUserDetails->getGame(),
 $beanUserDetails->getPlace(),
 $beanUserDetails->getMailId(),
 $beanUserDetails->getMobileNumber(),
 $beanUserDetails->getPassword(),)";
 if($connection->query($sqlquery)){
   echo "Data Insert Successfully!!!";
}
else{
   echo"<br>errror ....";
}
  }

  //insert remove data in data base
  function removeData(){

  }
  
  //update a exit data
  function updateTable(){

  }
}
?>