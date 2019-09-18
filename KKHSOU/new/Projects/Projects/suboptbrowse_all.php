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
0<th>crsCode</th><th>pMcode</th><th>subType</th><th>n2</th><th>n3</th><th>so_id</th></tr></thead>
<?php include("database/class.database.php")?><?php include("class/class.subopt.php");?>
<tbody>
                                    <?php $subopt_obj=new subopt;
                                     $subopt_obj->browse_all();     
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