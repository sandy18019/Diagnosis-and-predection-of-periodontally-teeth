<?php 
require_once("Model.php");
class Login extends Model
{
    
    public $Email;
    public $password;

    function __construct($Email="", $password="")
    {
        $this->db = $this->connect();

        $this->Email = $Email;
        $this->Password = $password;
        $this->login($Email, $password);
    }

    function login($Email,$password)
    {
        $sql="SELECT * FROM users WHERE Email= '$Email' and Password = '$password'" ;
        $result = $this->db->query($sql);
		if ($result->num_rows == 1)
        {
            $row = $this->db->fetchRow();
            $this->Email = $row["Email"];
            $this->Password = $row["Password"];
    
    }
}

function get_username()
    {
        return $this->Email;
    }
function get_password()
    {
        return $this->Password;
    }
    

}
?>
