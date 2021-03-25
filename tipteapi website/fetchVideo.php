<!DOCTYPE html>
<html lang="en">
<head>
    <!-- <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title> -->
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" crossorigin="anonymous"></script>
    <script>
        $(document).ready(function(){
            var data = '<?php if(isset($_GET['category']) && !empty($_GET['category'])){ echo trim($_GET['category']); } ?>';
            // alert(data);
            $.get('http://api.teapai.in/api_getVideo.php', {
                cat: data,
                api_key: 'b5d9ef0c4bbcc84e809cb0a6a7ddc6e104cc307e098b72cd0ab93dd9f353e6bd'
            }, function(response) {
                // alert(response);
                $("#resData").val($.trim(response));
                $("#sendVideoData").submit();
            });
        });
    </script>
</head>
<body>
    <form id="sendVideoData" action="http://www.tipteapi.com/playVideo.php" method="post">
        <textarea name="resData" id="resData" value="" style="visibility: hidden" required></textarea>
    </form>
</body>
</html>