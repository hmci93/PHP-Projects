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
0<th>a11</th><th>crsCode</th><th>pMcode</th><th>b11</th><th>c11</th><th>subCode</th><th>subLngNmae</th><th>subSrtName</th><th>d11</th><th>pM</th><th>Mpaper1</th><th>Mpaper2</th><th>e11</th><th>f11</th><th>blk3</th><th>blk4</th><th>g11</th><th>h11</th><th>sa_id</th></tr></thead>
<?php include("database/class.database.php")?><?php include("class/class.subadm.php");?>
<tbody>
                                    <?php $subadm_obj=new subadm;
                                     $subadm_obj->browse_all();     
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