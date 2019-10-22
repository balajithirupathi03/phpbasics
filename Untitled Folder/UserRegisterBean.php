<?php
class BeanUserDetails{
 private $name;
 private $dateofbirth;
 private $gender;
 private $game;
 private $place;
 private $mailid;
 private $mobilenumber;
 private $password;
 private $reenteredpassword;



    //for set User Registration Form Name
    public function setName($name){
    $this->name=$name;
   }
    //for set User Registration Form  Date of birth
    public function setDateOfBirth($dateofbirth){
    $this->dateofbirth=$dateofbirth;
   }
    //for set User Registration Form Gender
    public function setGender( $gender){
    $this->gender=$gender;
   }
   
     //for set User Registration Form Game
     public function setGame( $game){
        $this->game=$game;
       }

   //for set User Registration Form place
    public function setPlace($place){
    $this->place=$place;
   }
   
   //for set User Registration Form Mail Id
    public function setMailId($mailid){
    $this->mailid=$mailid;
   }
    //for set User Registration Form Mobile Number
    public function setMobileNumber($mobilenumber){
    $this->mobilenumber=$mobilenumber;
   }
    //for set User Registration Form Password
    public function setPassword($password){
    $this->password=$password;
   }
    //for set User Registration Form Re entered password
    public function setReenteredPassword($reenteredpassword){
    $this->reenteredpassword=$reenteredpassword;
   }


//for get User Registration Form Name
 public function getName(){
 return $this->name;
}
 //for get User Registration Form  Date of birth
 public function getDateOfBirth(){
 return $this->dateofbirth;
}
 //for get User Registration Form Gender
 public function getGender(){
 return $this->gender;
}

//for get User Registration Form Game
public function getGame(){
    return $this->game;
   }

//for get User Registration Form place
 public function getPlace(){
 return $this->place;
}

//for get User Registration Form Mail Id
 public function getMailId(){
 return $this->mailid;
}
 //for get User Registration Form Mobile Number
 public function getMobileNumber(){
 return $this->mobilenumber;
}
 //for get User Registration Form Password
 public function getPassword(){
 return $this->password;
}
 //for get User Registration Form Re entered password
 public function getReenteredPassword(){
 return $this->reenteredpassword;
}

}
?>