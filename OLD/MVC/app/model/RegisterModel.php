<?php 
require_once("Model.php");
class Register extends Model
{
    public $Email;
    public $Password;
    public $Fname;
    public $Lname;
    public $PhoneNo;
    public $Gender;


    function __construct($Email="", $Password="",$Fname="",$Lname="",$PhoneNo="",$Gender="")
    {
        $this->db = $this->connect();

        $this->Email = $Email;
        $this->Password = $Password;
        $this->Fname = $Fname;
        $this->Lname = $Lname;
        $this->PhoneNo=$PhoneNo;
        $this->Gender=$Gender;
    }
}
 
?>
