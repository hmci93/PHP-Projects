<?php
    // $conn = mysqli_connect("localhost","teapi","i4nJ]Za#]S;7","tepai_api");
    $conn = '';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="admin/css/styles.css" rel="stylesheet" />
    <link href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css" rel="stylesheet" crossorigin="anonymous" />
</head>
<body>
    <div class="container">
    <div class="table-responsive">
    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <thead>
            <tr>
                <th>v_id</th>
                <th>File Path</th>
                <th>Thumb Path</th>
                <th>Action</th>
            </tr>
        </thead>
        <tfoot>
            <tr>
                <th>v_id</th>
                <th>File Path</th>
                <th>Thumb Path</th>
                <th>Action</th>
            </tr>
        </tfoot>
        <tbody>
            <?php
                $sql="SELECT `id` AS `v_id`, `assetVideo`, `reserved2` FROM `video` WHERE `reserved2` = ''";
                $res = mysqli_query($conn,$sql);
                if (mysqli_num_rows($res) > 0) {
                    while ($row = mysqli_fetch_assoc($res)) {
                        ?>
                        <tr>
                            <td><?php echo trim($row['v_id']); ?></td>
                            <td class="v_url"><?php echo trim($row['assetVideo']); ?></td>
                            <td><?php echo $row['reserved2']; ?></td>
                            <td>
                                <?php
                                    // if($row['reserved2'] == '' || empty($row['reserved2'])) {
                                        ?>
                                        <button class="btn btn-success btn-block" onclick="gt('<?php echo trim($row["v_id"]); ?>', '<?php echo trim($row["assetVideo"]); ?>');">Generate Thumb</button>
                                        <?php
                                    // }
                                ?>
                            </td>
                        </tr>
                        <?php
                    }
                }
            ?>
        </tbody>
    </table>
        </div>
    </div>
    <div>
        <video id="main-video"><source id="vsource"></video>
        <canvas id="video-canvas" width="200" height="200"></canvas><br><a href="#" id="test">Generate</a>
    </div>
    <div>
        <form id="form1">
            <input type="text" name="vId" id="vId" value="" readonly required>
            <input type="text" name="v_path" id="v_path" value="" readonly required>
            <input type="text" name="assetThumb" id="assetThumb" value="" readonly required>
        </form>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
    <script src="admin/js/scripts.js"></script>
    <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js" crossorigin="anonymous"></script>
    <script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js" crossorigin="anonymous"></script>
    <script>
        $(document).ready(function() {
            $('#dataTable').DataTable();
        });
    </script>
    <script>
        var _VIDEO = document.querySelector("#main-video");
        var _CANVAS = document.querySelector("#video-canvas");
        var _CTX = _CANVAS.getContext("2d");

        function gt(vId, v_url) {
            // var _VIDEO = document.querySelector("#main-video");
            // var _CANVAS = document.querySelector("#video-canvas");
            // var _CTX = _CANVAS.getContext("2d");
            $("#vsource").attr('src', v_url);
            _VIDEO.load();
            _VIDEO.addEventListener("loadedmetadata", function() {
                _VIDEO.currentTime = 0;
                // _CANVAS.width = _VIDEO.videoWidth;
                // _CANVAS.height = _VIDEO.videoHeight;
                // _CANVAS.width = 200;
                // _CANVAS.height = 200;
            });
            $("#vId").attr('value', vId);
            $("#v_path").attr('value', v_url);
        }
        // document.querySelector(".demo").addEventListener("click", function() {
            // alert(document.querySelector(".v_url").innerHTML);
            // document.querySelector("#vsource").setAttribute('src', document.querySelector(".v_url").innerHTML);
            // _VIDEO.load();
            // _VIDEO.addEventListener("loadedmetadata", function() {
            //     _VIDEO.currentTime = 0;
            //     _CANVAS.width = _VIDEO.videoWidth;
            //     _CANVAS.height = _VIDEO.videoHeight;
            // });
        // });
        document.querySelector("#test").addEventListener("click", function() {
            // _CTX.drawImage(_VIDEO, 0, 0, _VIDEO.videoWidth, _VIDEO.videoHeight);
            _CTX.drawImage(_VIDEO, 0, 0, _CANVAS.width, _CANVAS.height);
            document.getElementById("assetThumb").setAttribute('value', _CANVAS.toDataURL());
            // if (document.getElementById("assetThumb").value != '') {
                dataSend();   
            // }
        });
        
        function dataSend() {
            // $.post('https://api.teapai.in/thumb_generator_submit_process.php', {
            $.post('thumb_generator_submit_process.php', {
                vId: document.getElementById("vId").value,
                v_path: document.getElementById("v_path").value,
                assetThumb: document.getElementById("assetThumb").value
            }, function(res) {
                alert(res);
                // window.location.replace("https://api.teapai.in/thumb_generator_demo.php");
                window.location.replace("thumb_generator_demo.php");
            });
        }
    </script>
</body>
</html>