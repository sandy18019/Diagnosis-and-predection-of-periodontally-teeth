<?php

REQUIRE_ONCE ("DBconnect.php");
class users{
    public $userID;
    public $fname;
    public $lname;
    public $email;
    public $password;
    public $UserType;
    public $page;
    
    public function Adduser(){
      $db = dbconnect::getInstance();
      $mysqli = $db->getConnection();
      $query = "INSERT INTO users (`id`,`fname`,`lname`,`email`,`pass`,`page`)
      VALUES (null,'$this->fname','$this->lname','$this->email','$this->password','user_home.php')";
      $result= $mysqli->query($query);
      return $result;
    }

    public function updateUser(){
        $db = dbconnect::getInstance();
        $mysqli = $db->getConnection();
        $query = "INSERT INTO users (`id`,`fname`,`lname`,`email`,`pass`,`page`)
        VALUES (null,'$this->fname','$this->lname','$this->email','$this->password','user_home.php')";
        $result= $mysqli->query($query);
        return $result;
      }

    public function AddDentist(){
        $db = dbconnect::getInstance();
        $mysqli = $db->getConnection();
        $query = "INSERT INTO dentists (`id`,`fname`,`lname`,`email`,`password`)
        VALUES (null,'$this->fname','$this->lname','$this->email','$this->password')";
        $result= $mysqli->query($query);
        return $result;
      }

    public function login(){
        $db = dbconnect::getInstance();
        $mysqli = $db->getConnection();
        $query = "SELECT * from users where email = '$this->email' and pass='$this->password'";
        $result= $mysqli->query($query);
        return $result;
    }

    public function allusers(){
        $db = dbconnect::getInstance();
        $mysqli = $db->getConnection();
        $query = "SELECT * from users";
        $result= $mysqli->query($query);
        return $result;
    }

    public function allpatients(){
        $db = dbconnect::getInstance();
        $mysqli = $db->getConnection();
        $query = "SELECT * from users WHERE ut_id=2";
        $result= $mysqli->query($query);
        return $result;
    }

    public function alldoctors(){
        $db = dbconnect::getInstance();
        $mysqli = $db->getConnection();
        $query = "SELECT * from dentists";
        $result= $mysqli->query($query);
        return $result;
    }

    public function allpatient(){
        $db = dbconnect::getInstance();
        $mysqli = $db->getConnection();
        $query = "SELECT * from patient";
        $result= $mysqli->query($query);
        return $result;
    }

    public function updateprofile(){
        $db = dbconnect::getInstance();
        $mysqli = $db->getConnection();
        $query = "UPDATE users SET fname = '$this->fname',lname='$this->lname',pass='$this->password',email='$this->email' WHERE id = '$this->id'";
        $result= $mysqli->query($query);
        return $result;
    }

    public function UploadPicture(){
        $db = dbconnect::getInstance();
        $mysqli = $db->getConnection();
        $query = "INSERT INTO image (`ImageId`,`ImagePath`,`PatientId`,`ImageDate`)
        VALUES (null,'$this->fname','$this->lname','$this->email','$this->password')";
        $result= $mysqli->query($query);
        return $result;
      }




    

}



?>
