<?php
include_once 'beanuserdetails.php';
include_once 'dao.php';
 
if($_SERVER['REQUEST_METHOD']=='POST')
{echo "hi";
    $beanUserDetails=new BeanUserDetails();
    $dao=new DAO();
    $beanUserDetails->setName($_POST['name']);
    $beanUserDetails->setDateOfBirth($_POST['dateofbirth']);
    $beanUserDetails->setGender($_POST['gender']);
    $beanUserDetails->setGame($_POST['game']);
    $beanUserDetails->setPlace($_POST['place']);
    $beanUserDetails->setMailId($_POST['mailid']);
    $beanUserDetails->setMobileNumber($_POST['mobilenumber']);
    $beanUserDetails->setPassword($_POST['password']);
    $beanUserDetails->setReenteredPassword($_POST['reenteredpassword']);
    $dao->insertData();
//    $beanUserDetails=new BeanUserDetails();

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
}

?>