<?php 
require_once("Controller.php");
class RegisterController extends Controller
{
    public function signup($email, $password, $type, $Fname, $Lname, $PhoneNo)
    {
      
        $password = md5($password);        
        $sql = "INSERT INTO users (TypeID,Email,Password,Fname,Lname,PhoneNo) VALUES ($type,'$email','$password','$Fname','$Lname','$PhoneNo')";
        $dbh = new Dbh();
        $result = $dbh->query($sql);
        echo'<script>
        window.location.href="LoginView.php";
        </script>';
//         $sql = "SELECT * FROM users WHERE email='$email'";
//         $res = mysqli_query($dbh, $sql);
 
//         if(mysqli_num_rows($res) > 0){
//             $email_error = "Sorry... email already taken";  
//         }else{
//         $query = mysqli_query($connect, "INSERT INTO `developers`(`email`) VALUES('$email')");
//          echo 'Saved!';
//   }
        
    }
}
?>