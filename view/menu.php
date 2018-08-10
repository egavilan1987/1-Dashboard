<!DOCTYPE html>
<html>
<head>
  <title>Menu</title>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <!-- Bootstrap core CSS-->
  <link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!-- Custom fonts for this template-->
  <link href="../vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
  <!-- datatable plugins-->
  <link rel="stylesheet" type="text/css" href="../vendor/datatable/bootstrap.css">
  <link rel="stylesheet" type="text/css" href="../vendor/datatable/dataTables.bootstrap4.min.css">
  <!-- Custom styles for this template-->
  <link href="../css/sb-admin.css" rel="stylesheet">
  <link href="../css/sb-admin.css" rel="stylesheet">
  <!-- Alertify-->
  <link rel="stylesheet" type="text/css" href="../vendor/alertifyjs/css/alertify.css">
  <link rel="stylesheet" type="text/css" href="../vendor/alertifyjs/css/themes/default.css">
  <!-- Tab Icon-->
  <link rel="icon" href="../files/EGD.JPG">
</head>
<body>
<body class="fixed-nav sticky-footer bg-dark" id="page-top">
  <!-- Navigation-->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="mainNav">
    <a class="navbar-brand" href="index.php">EGDashboard</a>
    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarResponsive">
      <ul class="navbar-nav navbar-sidenav" id="exampleAccordion">
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Dashboard">
          <a class="nav-link" href="index.php">
            <i class="fa fa-fw fa-dashboard"></i>
            <span class="nav-link-text">Dashboard</span>
          </a>
        </li>
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Menu Levels">
          <a class="nav-link" href="users.php">
            <i class="fa fa-fw fa-users"></i>
            <span class="nav-link-text">Users</span>
          </a>
        </li>
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Menu Levels">
          <a class="nav-link" href="addUsers.php">
            <i class="fa fa-user-plus"></i>
            <span class="nav-link-text">Add New Users</span>
          </a>
        </li>
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Tables">
          <a class="nav-link" href="departments.php">
            <i class="fa fa-building-o"></i>
            <span class="nav-link-text">Departments</span>
          </a>
        </li>
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Tables">
          <a class="nav-link" href="#">
            <i class="fa fa-gear"></i>
            <span class="nav-link-text">Settings</span>
          </a>
        </li>
      </ul>
      <ul class="navbar-nav sidenav-toggler">
        <li class="nav-item">
          <a class="nav-link text-center" id="sidenavToggler">
            <i class="fa fa-fw fa-angle-left"></i>
          </a>
        </li>
      </ul>
      <ul class="navbar-nav ml-auto">       
        <!-- /.dropdown -->
        <li class="nav-item dropdown"   >
          <a class="nav-link dropdown-toggle mr-lg-2 " id="messagesDropdown" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" >
            <i class="fa fa-user fa-fw"></i>
            <span class="d-lg-none">Messages
              <span class="badge badge-pill badge-primary">12 New</span>
            </span>
          </a>
          <div class="dropdown-menu dropdown-menu-right text-right" aria-labelledby="messagesDropdown">
            <a class="dropdown-item" href="index.php">User Profile<i class="fa fa-user fa-fw"></i></a>
            <a class="dropdown-item" href="index.php">Settings<i class="fa fa-gear fa-fw"></i></a>            
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="index.php">Logout<i class="fa fa-sign-out fa-fw"></i></a>
          </div>
        </li>
      </ul>
    </div>
  </nav>
  <!--End of the Navigation Var-->
    <!-- /.content-wrapper-->
    <footer class="sticky-footer">
      <div class="container">
        <div class="text-center">
          <small>Copyright © EGDashboard 2018</small>
        </div>
      </div>
    </footer>
    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
      <i class="fa fa-angle-up"></i>
    </a>
    <!-- Logout Modal-->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </div>
          <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
          <div class="modal-footer">
            <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
            <a class="btn btn-primary" href="login.html">Logout</a>
          </div>
        </div>
      </div>
  </div>
    <!-- Bootstrap core JavaScript-->
    <script src="../vendor/jquery/jquery.min.js"></script>
    <script src="../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- Core plugin JavaScript-->
    <script src="../vendor/jquery-easing/jquery.easing.min.js"></script>
    <!-- Page level plugin JavaScript-->
    <script src="../vendor/chart.js/Chart.min.js"></script>
    <!-- Custom scripts for all pages-->
    <script src="../js/sb-admin.min.js"></script>
    <!-- Custom scripts for this page-->
    <script src="../js/sb-admin-datatables.min.js"></script>
    <script src="../js/sb-admin-charts.min.js"></script>
    <script src="../js/functions.js"></script>
    <!-- Alertify-->
    <script src="../vendor/alertifyjs/alertify.js"></script>
    <!-- Datatable plugins-->
    <script src="../vendor/datatable/jquery.dataTables.min.js"></script>
    <script src="../vendor/datatable/dataTables.bootstrap4.min.js"></script>
  </div>
</body>
</html>

<!--Javascrip code below -->        

