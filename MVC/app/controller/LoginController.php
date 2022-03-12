<?php 
require_once("Controller.php");
class LoginController extends Controller
{
    public function login()
    {
        if (empty($data['password']) || empty($data['Email']))
        {
            echo'<script>
            alert("PLease Enter the empty fields");
            </script>';
        } 
        else 
        {
            $Email=$_REQUEST["Email"];
            $Password=password_hash("rasmuslerdorf", PASSWORD_DEFAULT);
            $Password=hash('ripemd160', $_REQUEST["Password"]);
            $sql = "SELECT * FROM users where Email='$Email' and password='$Password'";
            $dbh = new Dbh();
            $result = $dbh->query($sql);
            if ($result->num_rows == 1) {
                $row = $dbh->fetchRow();
                $_SESSION["ID"]=$row["ID"];
                $_SESSION["TypeID"]=$row["TypeID"];
                $_SESSION["Email"]=$row["Email"];
            } 
            else 
            {
                echo'<div class="msg">';
                echo' <div class="alert alert-warning" role="alert" style="";>
                Incorrect Username or Password !
                </div>';
                echo'<div>';
            }
        }
    }
    function uploadAvatar()
    {
        // Auth::handleLogin() makes sure that only logged in users can use this action/method and see that page
        Auth::handleLogin();
        $login_model = $this->loadModel('Login');
        $this->view->avatar_file_path = $login_model->getUserAvatarFilePath();
        $this->view->render('login/uploadavatar');
    }

    /**
     *
     */
    function uploadAvatar_action()
    {
        $login_model = $this->loadModel('Login');
        $login_model->createAvatar();
        $this->view->render('login/uploadavatar');
    }
}
?>