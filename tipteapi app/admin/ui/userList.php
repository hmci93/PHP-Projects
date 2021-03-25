<?php session_start(); ?>
<?php
    if (isset($_POST['resData'])) {
        $data = json_decode($_POST['resData'], true);
        $api_key = 'b5d9ef0c4bbcc84e809cb0a6a7ddc6e104cc307e098b72cd0ab93dd9f353e6bd';
        ?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>User List - TipTeapai</title>
        <link href="../css/styles.css" rel="stylesheet" />
        <link href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css" rel="stylesheet" crossorigin="anonymous" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/js/all.min.js" crossorigin="anonymous"></script>
        <script src="https://code.jquery.com/jquery-3.5.1.min.js" crossorigin="anonymous"></script>
    </head>
    <body class="sb-nav-fixed">
        <?php include 'navbar.php'; ?>
        <div id="layoutSidenav">
            <?php include 'sidenav.php'; ?>
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid">
                        <h1 class="mt-4">Users</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item"><a href="dashboard.php">Dashboard</a></li>
                            <li class="breadcrumb-item active">Users</li>
                        </ol>
                        <?php
                            if (isset($_POST['msg']) && !empty($_POST['msg'])) {
                                if (trim($_POST['msg']) == 'us') {
                                    ?>
                                        <div id="successAlert" class="alert alert-success alert-dismissible fade show" role="alert">
                                            <h4 class="text-center">User Successfully Updated.....</h4>
                                            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                        </div>
                                    <?php
                                }
                                else if (trim($_POST['msg']) == 'uf') {
                                   ?>
                                        <div id="failAlert" class="alert alert-danger alert-dismissible fade show" role="alert">
                                            <h4 class="text-center">Sorry....User Updating Failed</h4>
                                            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                        </div>
                                   <?php
                                }
                            }
                        ?>
                        

                        <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-table mr-1"></i>
                                List of Users
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                        <thead>
                                            <tr>
                                                <th>Sl. No.</th>
                                                <th>Username</th>
                                                <th>Following Users</th>
                                                <th>Followed By Users</th>
                                                <th>Profile Image</th>
                                                <th>No. of Videos</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tfoot>
                                            <tr>
                                                <th>Sl. No.</th>
                                                <th>Username</th>
                                                <th>Following Users</th>
                                                <th>Followed By Users</th>
                                                <th>Profile Image</th>
                                                <th>No. of Videos</th>
                                                <th>Action</th>
                                            </tr>
                                        </tfoot>
                                        <tbody>
                                            <?php
                                            if (array_key_exists("message", $data)) {
                                                
                                            }
                                            else {
                                                $slCount = 1;
                                                foreach ($data as $k) {
                                                    ?>
                                                    <tr>
                                                        <td><?php echo $slCount; ?></td>
                                                        <td><?php echo $k['username']; ?></td>
                                                        <td><?php echo $k['user_following']; ?></td>
                                                        <td><?php echo $k['user_followed_by']; ?></td>
                                                        <td><?php echo $k['prof_img_path']; ?></td>
                                                        <td><?php echo $k['videoCount']; ?></td>
                                                        <td>
                                                            <?php
                                                                if ($k['block_status'] == 0) {
                                                                    ?>
                                                                        <form action="../../api_blockUser.php" method="post" onsubmit="return confirm('Are you sure you want to BLOCK this user ?');">
                                                                            <input type="hidden" name="userId" value="<?php echo $k['up_id']; ?>">
                                                                            <input type="hidden" name="blockValue" value="1">
                                                                            <input type="hidden" name="api_key" value="<?php echo $api_key; ?>">
                                                                            <input type="submit" class="btn btn-danger btn-block" value="Block User">
                                                                        </form>
                                                                    <?php
                                                                }
                                                                else if ($k['block_status'] == 1) {
                                                                    ?>
                                                                        <form action="../../api_blockUser.php" method="post" onsubmit="return confirm('Are you sure you want to UNBLOCK this user ?');">
                                                                            <input type="hidden" name="userId" value="<?php echo $k['up_id']; ?>">
                                                                            <input type="hidden" name="blockValue" value="0.1">
                                                                            <input type="hidden" name="api_key" value="<?php echo $api_key; ?>">
                                                                            <input type="submit" class="btn btn-success btn-block" value="Unblock User">
                                                                        </form>
                                                                    <?php
                                                                }
                                                            ?>
                                                        </td>
                                                    </tr>
                                                    
                                                    <?php
                                                    $slCount = $slCount + 1;
                                                }
                                            }
                                            ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </main>
                <?php include 'footer.php'; ?>
            </div>
        </div>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="../js/scripts.js"></script>
        <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js" crossorigin="anonymous"></script>
        <script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js" crossorigin="anonymous"></script>
        <script src="../assets/demo/datatables-demo.js"></script>
        <?php
    }
?>
    </body>
</html>