<html lang="en">
<?php
REQUIRE_ONCE "../model/users.php";
REQUIRE_ONCE "../view/view.php";


?>
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="../admin.css">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.22/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.2.6/css/responsive.bootstrap4.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Patients</title>
</head>

<body>

    <header class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0 shadow">
        <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3" href="#">PerioDect</a>


    </header>    
    <div class="container-fluid">
        <div class="row">
            <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-dark sidebar collapse ">
                <div class="position-sticky pt-3">
                    <ul class="nav flex-column">
                        <li class="nav-item  mb-2">
                            <a class="nav-link  text-white" href="doctorPatientlist.php">
                                <i class="fas fa-users"></i>
                                Patients
                            </a>
                        </li>
                        <li class="nav-item  mb-2">
                            <a class="nav-link  text-white" href="picturetesting.php">
                              <i class="fas fa-file"></i>
                                Check-up
                            </a>
                        </li>
                        <li class="nav-item  mb-2">
                            <a class="nav-link text-white" href="severity_check.php">
                             <i class="fa fa-edit"></i>
                              Measurments
                            </a>
                        </li>
                    </ul>
                    <div class="border-top border-light p-3 mb-4 mt-5">

                        <div class="text-center">
                            <a href="../logout.php" class="btn btn-outline-danger">Log Out</a>
                        </div>

                    </div>
                </div>
            </nav>
            <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4 bg-light">
                <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                    <h1>Patient List</h1>   
                </div>
                <div class="container">
                    <div class="row justify-content-md-center">
                        <div class="col-md-11">
<!-- <<<<<<< Updated upstream
                            <div class="card">
                                <div class="card-header bg-dark">
                                   ---
                                </div>
                                <div class="card-body"> -->
                            <!-- <div class="card">
                                <div class="card-header bg-primary">
                                    Patients list
                                </div> -->
                                <!-- <div class="card-body">
>>>>>>> Stashed changes
                                    <table id="example" class="table  responsive nowrap  table-responsive-sm" style="width:100%">
                                        <thead>
                                            <tr>
                                                <th>Name</th>
                                                <th>Phone number</th>
                                                <th>Number of visits</th>
                                                <th>Report</th>
                                                <th>Status</th>
                                            </tr>
                                        </thead>
                                    </table>
                                </div> -->
                                <?php
        $view= new view;
        $user =new users;
        $result=$user->doctorspatients();
        $view->viewpatientsOfDoctor($result);

                ?>
                            </div>
                            <div class="text-center">
                                <tfoot>
                                    <a class="btn btn-dark" href="addPatient.php" role="button">add a new patient</a>
                                </tfoot>
                            </div>
                        </div>
                    </div>
                </div>
            </main>
        </div>
    </div>
</body>