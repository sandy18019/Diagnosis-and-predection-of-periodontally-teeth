<?php
use FTP\Connection;
// Include the database configuration file  
// require_once 'DBconnect.php';
session_start();
class view{

public function signup()
{
    $str="";
    $str='              <div class="col-md-7 col-lg-6 ml-auto">
    <!-- Registeration Form -->
    <form id="register-form" method="POST" action="controller/usercontroller.php?action=signup">
        <div class="text-left w-100 mb-4 ml-3">
            <p class="text-green h3 font-weight-bold text-uppercase">Create an Account</p>
        </div>
        <div class="container">
            <div class="form-row">
                <div class="form-group col-md-6">
                    <input type="text" name="name" class="form-control" placeholder="First Name" required>
                </div>
                <div class="form-group col-md-6">
                    <input type="text" name="lname" class="form-control" placeholder="Last Name" required>
                </div>
            </div>
        </div>
        <div class="form-group col-lg-12 mb-3">
            <input type="email" class="form-control" name="email" placeholder="Email address" required>
        </div>
        <div class="form-group col-lg-12 mb-3">
            <input type="password" class="form-control" name="password" placeholder="Password" required>
        </div>
        <div class="form-group col-lg-12 mb-3">
            <input type="password" class="form-control" name="confirmPassword" placeholder="Confirm Password" required>
        </div>
        <div class="form-group col-lg-12 mx-auto mb-0">
            <input type="submit" name="register" class="btn btn-dark btn-block py-2 font-weight-bold" value="Create your account" >
        </div>
        <div class="form-group col-lg-12 mx-auto d-flex align-items-center my-4">
            <div class="border-bottom w-100 ml-5"></div>
            <span class="px-2 small text-muted font-weight-bold text-muted">OR</span>
            <div class="border-bottom w-100 mr-5"></div>
        </div>
        <!-- Already Registered -->
        <div class="text-center w-100">
            <p class="text-muted font-weight-bold">Already Registered? <a href="login.php" id="login" class="text-primary ml-2">Login</a></p>
        </div>
    </form>
</div>';
    echo $str;
}

public function login()
{
    $str='';
    $str=' <div class="col-md-7 col-lg-6 ml-auto">

    <form id="login-form" method="POST" action="controller/usercontroller.php?action=login">
            <div class="text-left w-100 mb-4 ml-3">
              <p class="text-green h3 font-weight-bold text-uppercase">Login Form</p>
            </div>

            <div class="form-group col-lg-12 mb-3">
                <input type="email" class="form-control" name="email" placeholder="Email adress" required>
            </div>
            <div class="form-group col-lg-12 mb-3">
                <input type="password" class="form-control" name="password"  placeholder="password" required>
            </div>
            <div class="form-group col-lg-12 mx-auto mb-3">
                <input type="submit" id="login_now" name="login" class="btn btn-dark btn-block py-2 font-weight-bold" value="Log In">
                
            </div>
            
            <div class="text-center w-100">
                <p class="text-muted font-weight-bold"><a href="forgotPassword.php" class="text-primary ml-2">Forgot Password?</a></p>
            </div>
            <div class="form-group col-lg-12 mx-auto d-flex align-items-center my-4">
                <div class="border-bottom w-100 ml-5"></div>
                <span class="px-2 small text-muted font-weight-bold text-muted">OR</span>
                <div class="border-bottom w-100 mr-5"></div>
            </div>
            <!-- Already Registered -->
            <div class="text-center w-100">
                <p class="text-muted font-weight-bold">Do not have an account? <a href="signUp.php" id="register" class="text-primary ml-2">Register</a></p>
            </div>
        </form>
    </div>';

    echo $str;
}

public function adminhome($users)
{
    $str='';
    $str='                <div class="container">
    <div class="row justify-content-md-center">
        <div class="col-md-11">
            <div class="card">
                <div class="card-body">
                    <table id="example" class="table  responsive nowrap  table-responsive-sm" style="width:100%">
                        <thead>
                            <tr>
                                <th>Patient Name</th>
                                <th>Service</th>
                                <th>Time</th>
                                <th>Date</th>
                                <th>Day</th>
                            </tr>
                        </thead>
                        <tbody>';
            while($row=mysqli_fetch_assoc($users))
            {
                          $str.=' <tr>
                             <td>'.$row['fname'].'</td>
                             <td>'.$row['lname'].'</td>
                             <td>'.$row['email'].'</td>
                             <td>'.$row['page'].'</td>
                           </tr>';
            }
                        $str.='</tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>';
echo $str;
}

public function viewcustomers($users)
{
    $str='';
    $str='                <div class="container">
    <div class="row justify-content-md-center">
        <div class="col-md-11">
            <div class="card">
                <div class="card-header bg-primary">
                 ALL PATIENTS
                </div>
                <div class="card-body">
                    <table id="example" class="table  responsive nowrap  table-responsive-sm" style="width:100%">
                        <thead>
                        <tr>
                        <th>Name</th>
                        <th>Email</th>
                        <th>number of visits</th>
                    </tr>
                        </thead>
                        <tbody>';
            while($row=mysqli_fetch_assoc($users))
            {
                          $str.=' <tr>
                             <td>'.$row['fname'].' '.$row['lname'].'</td>
                             <td>'.$row['email'].'</td>
                             <td>'.$row['numberVisits'].'</td>
                           </tr>';
            }
                        $str.='</tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>';
echo $str;
}

public function viewdentists($users)
{
    $str='';
    $str='                <div class="container">
    <div class="row justify-content-md-center">
        <div class="col-md-11">
            <div class="card">
                <div class="card-header bg-dark">
                 ---
                </div>
                <div class="card-body">
                    <table id="example" class="table  responsive nowrap  table-responsive-sm" style="width:100%">
                        <thead>
                            <tr>
                            <th>Name</th>
                            <th>Email</th>


                            </tr>
                        </thead>
                        <tbody>';
            while($row=mysqli_fetch_assoc($users))
            {
                          $str.=' <tr>
                             <td>'.$row['fname'].' '.$row['lname'].'</td>
                             <td>'.$row['email'].'</td>
                           </tr>';
            }
                        $str.='</tbody>
                    </table>
                </div>
                <tfoot>
                  <a class="btn btn-dark" href="addDentist.php" role="button">add dentist</a>
                    
                </tfoot>
            </div>
        </div>
    </div>
</div>';
echo $str;
}

public function viewpatients($users)
{
    $str='';
    $str='                <div class="container">
    <div class="row justify-content-md-center">
        <div class="col-md-11">
            <div class="card">
                <div class="card-body">
                    <table id="example" class="table  responsive nowrap  table-responsive-sm" style="width:100%">
                        <thead>
                            <tr>
                            <th>Name</th>
                            <th>phone Number</th>
                            <th>number of visits</th>
                            <th>dentist</th>
                            </tr>
                        </thead>
                        <tbody>';
            while($row=mysqli_fetch_assoc($users))
            {
                          $str.=' <tr>
                             <td>'.$row['patientfname'].' '.$row['patientlname'].'</td>
                             <td>'.$row['phonenumber'].'</td>
                             <td>'.$row['numberVisits'].'</td>
                             <td>'.$row['dentistfname'].' '.$row['dentistlname'].'</td>
                            
                           </tr>';
            }
                        $str.='</tbody>
                    </table>
                </div>
                
            </div>
        </div>
    </div>
</div>';
echo $str;
}

public function viewpatientsOfDoctor($users)
{
    $str='';
    $str='                <div class="container">
    <div class="row justify-content-md-center">
        <div class="col-md-11">
            <div class="card">
                <div class="card-header bg-dark">
                 Patient List
                </div>
                <div class="card-body">
                    <table id="example" class="table  responsive nowrap  table-responsive-sm" style="width:100%">
                        <thead>
                            <tr>
                            <th>Name</th>
                            <th>phone Number</th>
                            <th>number of visits</th>
                            </tr>
                        </thead>
                        <tbody>';
            while($row=mysqli_fetch_assoc($users))
            {
                          $str.=' <tr>
                             <td>'.$row['patientfname'].' '.$row['patientlname'].'</td>
                             <td>'.$row['phonenumber'].'</td>
                             <td>'.$row['numberVisits'].'</td>
                            
                           </tr>';
            }
                        $str.='</tbody>
                    </table>
                </div>
               
            </div>
        </div>
    </div>
</div>';
echo $str;
}

public function edit()
{
    $str='  <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4 bg-light">
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1> Edit Your Account </h1>
    </div>
                 <div class="col-md-10 col-lg-10 ml-auto">
    <!-- Registeration Form -->
    <form id="register-form" method="POST" action="controller/usercontroller.php?action=signup">
        
        
            
        <div class="form-group col-lg-7 mb-2">
            <input type="text" name="name" class="form-control" placeholder="First Name" required>
        </div>
        <div class="form-group col-lg-7 mb-2">
            <input type="text" name="lname" class="form-control" placeholder="Last Name" required>
        </div>
            
        
        <div class="form-group col-lg-7 mb-2">
            <input type="email" class="form-control" name="email" placeholder="Email address" required>
        </div>
        <div class="form-group col-lg-7 mb-2">
            <input type="password" class="form-control" name="password" placeholder="Password" required>
        </div>
        <div class="form-group col-lg-7 mb-2">
            <input type="password" class="form-control" name="confirmPassword" placeholder="Confirm Password" required>
        </div>
        <div class="form-group col-lg-7  mb-2">
            <input type="submit" name="register" class="btn btn-dark btn-block py-2 font-weight-bold" value="Confirm" >
        </div>
       
    
    </form>
</div>';
    echo $str;
}

public function addDentists()
{
    $str='  <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4 bg-light">
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1> Add Dentist </h1>
    </div>
                 <div class="col-md-10 col-lg-10 ml-auto">
    <!-- Registeration Form -->
    <form id="register-form" method="POST" action="../controller/usercontroller.php?action=add">
        <div class="form-group col-lg-7 mb-2">
            <input type="text" name="name" class="form-control" placeholder="First Name" required>
        </div>
        <div class="form-group col-lg-7 mb-2">
            <input type="text" name="lname" class="form-control" placeholder="Last Name" required>
        </div>
        <div class="form-group col-lg-7 mb-2">
            <input type="email" class="form-control" name="email" placeholder="Email address" required>
        </div>
        <div class="form-group col-lg-7 mb-2">
            <input type="password" class="form-control" name="password" placeholder="Password" required>
        </div>
        <div class="form-group col-lg-7 mb-2">
            <input type="password" class="form-control" name="confirmPassword" placeholder="Confirm Password" required>
        </div>
        <div class="form-group col-lg-7  mb-2">
            <input type="submit" name="register" class="btn btn-dark btn-block py-2 font-weight-bold" value="Confirm" >
        </div>
       
    
    </form>
</div>';
    echo $str;
}

}?>