<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/3.2.1/css/font-awesome.css">
    <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"> -->
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.css">

    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
    <!-- <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script> -->
    <!-- <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script> -->
    <script type="text/javascript" src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.js"></script>

    <script type="text/javascript">
    $(document).ready( function () {
      $('#displayTable').DataTable();
    });
    </script>

    <style>
            /*
        * Base structure
        */

        /* Move down content because we have a fixed navbar that is 50px tall */
        body {
        padding-top: 50px;
        }


        /*
        * Global add-ons
        */

        .sub-header {
        padding-bottom: 10px;
        border-bottom: 1px solid #eee;
        }

        /*
        * Top navigation
        * Hide default border to remove 1px line.
        */
        .navbar-fixed-top {
        border: 0;
        }

        /*
        * Sidebar
        */

        /* Hide for mobile, show later */
        .sidebar {
        display: none;
        }
        @media (min-width: 768px) {
        .sidebar {
          position: fixed;
          top: 51px;
          bottom: 0;
          left: 0;
          z-index: 1000;
          display: block;
          padding: 20px;
          overflow-x: hidden;
          overflow-y: auto; /* Scrollable contents if viewport is shorter than content. */
          background-color: #f5f5f5;
          border-right: 1px solid #eee;
        }
        }

        /* Sidebar navigation */
        .nav-sidebar {
        margin-right: -21px; /* 20px padding + 1px border */
        margin-bottom: 20px;
        margin-left: -20px;
        }
        .nav-sidebar > li > a {
        padding-right: 20px;
        padding-left: 20px;
        }
        .nav-sidebar > .active > a,
        .nav-sidebar > .active > a:hover,
        .nav-sidebar > .active > a:focus {
        color: #fff;
        background-color: #428bca;
        }


        /*
        * Main content
        */

        .main {
        padding: 20px;
        /* border: 1px solid black; */
        }
        @media (min-width: 768px) {
        .main {
          padding-right: 40px;
          padding-left: 40px;
        }
        }
        .main .page-header {
        margin-top: 0;
        }

        .thr {
          font-size: 22px;
        }


    </style>
  </head>
  <body>
    <?php
      include_once '../class/class.display.php';
      $tb_handle = new display();
    ?>

    <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">Project name</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav navbar-right">
            <li><a href="#">Dashboard</a></li>
            <li><a href="#">Settings</a></li>
            <li><a href="#">Profile</a></li>
            <li><a href="#">Help</a></li>
          </ul>
          <form class="navbar-form navbar-right">
            <input type="text" class="form-control" placeholder="Search...">
          </form>
        </div>
      </div>
    </nav>

    <div class="container">
      <div class="col-sm-3 col-md-2 sidebar">
        <ul class="nav nav-sidebar">
          <li class="active"><a href="#">Dashboard <span class="sr-only">(current)</span></a></li>
        </ul>
      </div>

      <div class="col-sm-11 col-sm-offset-1 col-md-10 col-md-offset-2 main">
        <h2 class="page-header">Welcome <strong style=" color: #55aaff; font-size: 25px; padding-top: 1.5px;"><?php $tb_handle->extrUserName($_SESSION['empl_id']); ?></strong></h2>
      </div>
      <div class="col-md-10 col-md-offset-2 justify-content-center">
        <a href="displayFormat.php">Back to Dashboard</a>
      </div>

      <div class="col-sm-11 col-sm-offset-1 col-md-10 col-md-offset-2">
        <?php
          if (isset($_GET['c_slno']) && $_GET['c_title']) {
            ?>
            <h2><center><?php echo $_GET['c_title']; ?></center></h2><br>
            <h3><center><?php $tb_handle->viewCrite($_GET['c_slno'],$_SESSION['empl_id']); ?></center></h3>
            <?php
          }
        ?>
      </div>

    </div>
    </div>
  </body>
</html>
