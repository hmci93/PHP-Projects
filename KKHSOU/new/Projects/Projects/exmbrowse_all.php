<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

   <?php include "Menus/header_css.php"?>

</head>

<body>

    <div id="wrapper">

       <?php include "Menus/sideMenu.php" ?>
        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Browse List</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">

    
<table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                                <thead>
                                    <tr>
0<th>crsCode</th><th>q1</th><th>q2</th><th>crsName</th><th>crsSrtName</th><th>crsLngName</th><th>n4</th><th>q3</th><th>q4</th><th>q5</th><th>q6</th><th>q7</th><th>q8</th><th>year</th><th>session</th><th>exm_id</th></tr></thead>
<?php include("database/class.database.php")?><?php include("class/class.exm.php");?>
<tbody>
                                    <?php $exm_obj=new exm;
                                     $exm_obj->browse_all();     
                                    ?>
                                    
                                </tbody>
                         </table>
    
    
<!-- /.panel -->
                 </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

      <?php include "Menus/footer.php"?>

</body>

</html>