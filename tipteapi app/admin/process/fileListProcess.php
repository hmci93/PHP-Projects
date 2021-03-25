<!DOCTYPE html>
<html lang="en">
<head>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" crossorigin="anonymous"></script>
    <script>
        $(document).ready(function(){
            $.get('http://api.tipteapi.com/api_getFile.php',{
                data: 'all',
                api_key: 'b5d9ef0c4bbcc84e809cb0a6a7ddc6e104cc307e098b72cd0ab93dd9f353e6bd'
            }, function(response){
                $("#resData").val($.trim(response));
                $("#sendFileList").submit();
            });
        });
    </script>
</head>
<body>
    <?php
        if (isset($_GET['msg']) && !empty($_GET['msg'])) {
            ?>
            <form id="sendFileList" action="http://api.tipteapi.com/admin/ui/fileAssetList.php" method="post">
                <textarea id="resData" name="resData" value="" style="visibility: hidden"></textarea>
                <input type="hidden" name="msg" value="<?php echo trim($_GET['msg']); ?>">
            </form>
            <?php
        }
        else {
            ?>
            <form id="sendFileList" action="http://api.tipteapi.com/admin/ui/fileAssetList.php" method="post">
                <textarea id="resData" name="resData" value="" style="visibility: hidden"></textarea>
            </form>
            <?php
        }
    ?>
</body>
</html>
