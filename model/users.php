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
        if ($mysqli->query($query) === TRUE) {
            $last_id = $mysqli->insert_id;
            $_SESSION['dentistid'] = $last_id;
            echo "New record created successfully. Last inserted ID is: " . $last_id;
          } else {
            echo "Error: " . $query . "<br>" . $mysqli->error;
          }
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
    
        $query = "SELECT patient.fname as patientfname, patient.lname as patientlname ,patient.numberVisits, patient.phonenumber , patient.dentistID, dentists.fname as dentistfname , dentists.lname as dentistlname from patient join dentists where patient.dentistID = dentists.id";
        $result= $mysqli->query($query);
        return $result;
    }

    public function doctorspatients(){
        $db = dbconnect::getInstance();
        $mysqli = $db->getConnection();
        $doctorid = $_SESSION['id'];
        $query = "SELECT patient.fname as patientfname, patient.lname as patientlname ,patient.numberVisits, patient.phonenumber , patient.dentistID, dentists.fname as dentistfname , dentists.lname as dentistlname from patient join dentists where patient.dentistID = dentists.id and dentists.id = $doctorid";
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
