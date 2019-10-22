<?php 
class Bean{
    private $hostname="localhost";
    private $username="root";
    private $password="aspire@123";
    private $databasename="project";
    private $newsfeeddb="newsfeeddb";

    //for get database hostname
    public function getHostName(){
        return $this->hostname;
    }

    //for get database username
    public function getUserName(){
        return $this->username;
    }

    //for get database password
    public function getPassword(){
        return $this->password;
    }
    
    public function getDataBaseName(){
        return $this->databasename;
    }
    

    public function getNewsfeeddbname(){
        return $this->newsfeeddb;
    }
}

?> 