<?php include "../function.php" ?>
<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href=<?php echo base_url("/assets/img/apple-icon.png") ?> />
    <link rel="icon" type="image/png" href=<?php echo base_url("/assets/img/favicon.ico")  ?> />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>
        Light Bootstrap Dashboard - Free Bootstrap 4 Admin Dashboard by Creative Tim
    </title>
    <meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no" name="viewport" />
    <!--     Fonts and icons     -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" />
    <!-- CSS Files -->
    <link href=<?php echo base_url("/assets/css/bootstrap.min.css") ?> rel="stylesheet" />
    <link href=<?php echo base_url("/assets/css/light-bootstrap-dashboard.css?v=2.0.0 ") ?> rel="stylesheet" />
    <!-- CSS Just for demo purpose, don't include it in your project -->
    <link href=<?php echo base_url("/assets/css/demo.css") ?> rel="stylesheet" />

    <link href=<?php echo base_url("/assets/DataTables-1.10.20/media/css/jquery.dataTables.css") ?> rel="stylesheet" />
    <script src=<?php echo base_url("/js/jquery-3.5.0.min.js") ?>></script>

</head>

<body>

    <body>
        <div class="wrapper">
            <div class="sidebar" data-image=<?php echo base_url("/assets/img/sidebar-5.jpg") ?>>
                <div class="sidebar-wrapper">
                    <div class="logo">
                        <a href="http://www.creative-tim.com" class="simple-text">
                            Creative Tim
                        </a>
                    </div>
                    <ul class="nav">
                        <li class="nav-item active">
                            <a class="nav-link" href="dashboard.html">
                                <i class="nc-icon nc-chart-pie-35"></i>
                                <p>Dashboard</p>
                            </a>
                        </li>
                        <li>
                            <a class="nav-link" href="./user.html">
                                <i class="nc-icon nc-circle-09"></i>
                                <p>User Profile</p>
                            </a>
                        </li>
                        <li>
                            <a class="nav-link" href="./table.html">
                                <i class="nc-icon nc-notes"></i>
                                <p>Table List</p>
                            </a>
                        </li>
                        <li>
                            <a class="nav-link" href="./typography.html">
                                <i class="nc-icon nc-paper-2"></i>
                                <p>Typography</p>
                            </a>
                        </li>
                        <li>
                            <a class="nav-link" href="./icons.html">
                                <i class="nc-icon nc-atom"></i>
                                <p>Icons</p>
                            </a>
                        </li>
                        <li>
                            <a class="nav-link" href="./maps.html">
                                <i class="nc-icon nc-pin-3"></i>
                                <p>Maps</p>
                            </a>
                        </li>
                        <li>
                            <a class="nav-link" href="./notifications.html">
                                <i class="nc-icon nc-bell-55"></i>
                                <p>Notifications</p>
                            </a>
                        </li>
                        <li class="nav-item active active-pro">
                            <a class="nav-link active" href="upgrade.html">
                                <i class="nc-icon nc-alien-33"></i>
                                <p>Upgrade to PRO</p>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="main-panel">
                <!-- Navbar -->
                <nav class="navbar navbar-expand-lg" color-on-scroll="500">
                    <div class="container-fluid">
                        <a class="navbar-brand" href="#pablo"> Check Out </a>
                        <button href="" class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-bar burger-lines"></span>
                            <span class="navbar-toggler-bar burger-lines"></span>
                            <span class="navbar-toggler-bar burger-lines"></span>
                        </button>
                        <div class="collapse navbar-collapse justify-content-end" id="navigation">
                            <ul class="nav navbar-nav mr-auto">
                                <li class="nav-item">
                                    <a href="#" class="nav-link" data-toggle="dropdown">
                                        <i class="nc-icon nc-palette"></i>
                                        <span class="d-lg-none">Dashboard</span>
                                    </a>
                                </li>
                                <li class="dropdown nav-item">
                                    <a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown">
                                        <i class="nc-icon nc-planet"></i>
                                        <span class="notification">5</span>
                                        <span class="d-lg-none">Notification</span>
                                    </a>
                                    <ul class="dropdown-menu">
                                        <a class="dropdown-item" href="#">Notification 1</a>
                                        <a class="dropdown-item" href="#">Notification 2</a>
                                        <a class="dropdown-item" href="#">Notification 3</a>
                                        <a class="dropdown-item" href="#">Notification 4</a>
                                        <a class="dropdown-item" href="#">Another notification</a>
                                    </ul>
                                </li>
                                <li class="nav-item">
                                    <a href="#" class="nav-link">
                                        <i class="nc-icon nc-zoom-split"></i>
                                        <span class="d-lg-block">&nbsp;Search</span>
                                    </a>
                                </li>
                            </ul>
                            <ul class="navbar-nav ml-auto">
                                <li class="nav-item">
                                    <a class="nav-link" href="#pablo">
                                        <span class="no-icon">Account</span>
                                    </a>
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="http://example.com" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <span class="no-icon">Dropdown</span>
                                    </a>
                                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                        <a class="dropdown-item" href="#">Action</a>
                                        <a class="dropdown-item" href="#">Another action</a>
                                        <a class="dropdown-item" href="#">Something</a>
                                        <a class="dropdown-item" href="#">Something else here</a>
                                        <div class="divider"></div>
                                        <a class="dropdown-item" href="#">Separated link</a>
                                    </div>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#pablo">
                                        <span class="no-icon">Log out</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </nav>
                <!-- End Navbar -->


                <div class="content">
                    <div class="card">
                        <div class="card-head">
                            <div class="row">
                                <div class="col-md-10">
                                    <h3 class="mt-4 fixposition"> Payments </h3>
                                </div>
                            </div>
                            <hr>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-8">
                                    <div class="row">
                                        <div class="col-md-1 mr-2">
                                            <label class="">Show</label>
                                        </div>
                                        <div class="col-md-1.5 pr-2">
                                            <select class="custom-select" id=" ">
                                                <option selected>10</option>
                                                <option value="1">11</option>
                                                <option value="2">12</option>
                                                <option value="3">13</option>
                                            </select>
                                        </div>
                                        <div class="col-md-2 pl-0 ml-2">
                                            <label class="mr-sm-2">ertries</label>
                                        </div>
                                        <div class="col-md-1 mr-2">
                                            <label class="mr-sm-2">Search</label>
                                        </div>
                                        <div class="col-md-4">
                                            <input type="search" class="form-control">
                                        </div>
                                    </div>

                                    <div class="row ml-2">
                                        <table class="table" id="display">
                                            <thead class="thead-dark">
                                                <tr>
                                                    <th scope="col"></th>
                                                    <th scope="col">Date</th>
                                                    <th scope="col">Item</th>
                                                    <th scope="col">Price</th>
                                                    <th scope="col">Payment</th>
                                                </tr>
                                            </thead>
                                            <input type="text" name="ginfo_id" id="ginfo_id" style="display:none;">

                                            <tbody id="detail">

                                            </tbody>
                                        </table>
                                    </div>


                                    <form id="insert_db" method="post">

                                        <div class="row justify-content-center mt-3">
                                            <div class="btn-group" role="group" aria-label="Basic example">
                                                <button type="button" class="btn btn-secondary">Previous</button>
                                                <button type="button" class="btn btn-primary">1</button>
                                                <button type="button" class="btn btn-secondary">Next</button>
                                            </div>
                                        </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="row">
                                        <div class="col-md-3">
                                            <label class="mr-sm-2">Item</label>
                                        </div>
                                        <div class="col-md-8">
                                            <input type="text" class="form-control" id="pl_description" name="pl_description">
                                        </div>
                                    </div>
                                    <div class="row mt-3">
                                        <div class="col-md-3">
                                            <label class="mr-sm-2">Price</label>
                                        </div>
                                        <div class="col-md-8">
                                            <input type="text" class="form-control" id="pl_price" name="pl_price">
                                        </div>
                                    </div>
                                    <div class="row mt-3">
                                        <div class="col-md-3">
                                            <label class="mr-sm-2">Payments</label>
                                        </div>
                                        <div class="col-md-5">
                                            <select class="custom-select form-control" id="pl_status" name="pl_status">
                                                <option selected>--------</option>
                                                <option value="1">paid</option>
                                                <option value="2">free</option>
                                                <option value="3">bill to room</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="row justify-content-center mt-3">
                                        <button id="save_payment" type="submit" class="btn btn-primary ">Save</button>
                                        <!-- Button trigger modal -->
                                        <!-- Modal -->
                                        <!-- ALERT ARE YOU SURE? -->
                                        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="exampleModalLabel">ADD SUB EXPENSE INFORMATION
                                                        </h5>
                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                        </button>
                                                    </div>
                                                    <div class="modal-body">
                                                        ARE YOU SURE WANT TO CHANGES ?
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                        <button type="button" class="btn btn-primary" data-dismiss="modal" id="btn_yes_add_checkout">Save
                                                            changes</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- ALERT BOX SUCCESS -->
                                        <div id="modal_alert" class="modal fade bd-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
                                            <div class="modal-dialog modal-sm">
                                                <div class="modal-content alert alert-success">
                                                    SAVE SUCCESSFULLY
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>

        <footer class="footer">
            <div class="container-fluid">
                <nav>
                    <ul class="footer-menu">
                        <li>
                            <a href="#">Home</a>
                        </li>
                        <li>
                            <a href="#">Company</a>
                        </li>
                        <li>
                            <a href="#">Portfolio</a>
                        </li>
                        <li>
                            <a href="#">Blog</a>
                        </li>
                    </ul>
                    <p class="copyright text-center">
                        ©
                        <script>
                            document.write(new Date().getFullYear());
                        </script>
                        <a href="http://www.creative-tim.com">Creative Tim</a>, made with love for a better web
                    </p>
                </nav>
            </div>
        </footer>
        </div>
    </body>

    <style>
        .fixposition {
            margin-left: 15px;
        }
    </style>
    <!--   Core JS Files   -->
    <script src=<?php echo base_url("/assets/js/core/popper.min.js") ?> type="text/javascript"></script>
    <script src=<?php echo base_url("/assets/js/core/bootstrap.min.js") ?> type="text/javascript"></script>
    <!--  Plugin for Switches, full documentation here: http://www.jque.re/plugins/version3/bootstrap.switch/ -->
    <script src=<?php echo base_url("/assets/js/plugins/bootstrap-switch.js") ?>></script>
    <!--  Google Maps Plugin    -->
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
    <!--  Chartist Plugin  -->
    <script src=<?php echo base_url("/assets/js/plugins/chartist.min.js") ?>></script>
    <!--  Notifications Plugin    -->
    <script src=<?php echo base_url("/assets/js/plugins/bootstrap-notify.js") ?>></script>
    <!-- Control Center for Light Bootstrap Dashboard: scripts for the example pages etc -->
    <script src=<?php echo base_url("/assets/js/light-bootstrap-dashboard.js?v=2.0.0 ") ?> type="text/javascript"></script>
    <!-- Light Bootstrap Dashboard DEMO methods, don't include it in your project! -->
    <script src=<?php echo base_url("/assets/js/demo.js") ?>></script>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src=<?php echo base_url("/assets/DataTables-1.10.20/media/js/jquery.dataTables.min.js") ?>></script>
    <script src=<?php echo base_url("/application/add_subexpense.js") ?>></script>


</html>