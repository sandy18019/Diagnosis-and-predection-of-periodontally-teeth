
<!doctype html>
<html lang="en">
<?php
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
    <title>Add Dentist</title>
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
                            <a class="nav-link  text-white" href="adminPatientList.php">
                                <i class="fas fa-users"></i>
                                Patients
                            </a>
                        </li>
                        <li class="nav-item  mb-2">
                            <a class="nav-link  text-white" href="dentists.php">
                                <i class="fas fa-stethoscope"></i>
                                Dentists
                            </a>
                        </li>
                        <li class="nav-item  mb-2">
                            <a class="nav-link  text-white" href="adminReports.php">
                              <i class="fas fa-file"></i>
                                Reports
                            </a>
                        </li>
                        <li class="nav-item  mb-2">
                            <a class="nav-link text-white" href="editaccount.php">
                             <i class="fa fa-edit"></i>
                              Edit Account
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
            <?php
                $view= new view;
                $view->addDentists();
            ?>
        </div>
    </div>
    
</body>
                      

