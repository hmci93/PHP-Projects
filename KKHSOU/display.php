<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>

    <!-- <script>
      var xmlhttp = new XMLHttpRequest();

      xmlhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
          myObj = JSON.parse(this.responseText);
          document.getElementById("demo").innerHTML = myObj.stu_name;
        }
      };
      xmlhttp.open("GET", "http://kkhsou.in/web_new/Himanga/learner/ui-process/retriveLearnerInforProcess.php", true);
      xmlhttp.send();
</script> -->
  <style type="text/css">
    #stu_details input {
      border: none;
    }
  </style>

  </head>
  <body>
     <div class="container">
      <br>
       <?php
       if (isset($_GET['data'])) {
         include_once("class/class.RegList.php");
         $d= array();
         $tb_handle = new RegList();
         $data = $tb_handle->my_simple_crypt($_GET['data'],'Z@8591');
         // $d = json_decode($data);
         // echo $data."<br>";
         // echo $d['reg_no'];
         // print_r($d);
       ?>
       <script type="text/javascript">
            $(document).ready(function() {
                var d = '<?php echo $data ?>';
                var data = JSON.parse(d);
                var image_name = data.stu_profile_image;
                var v = image_name.length;
                var year = image_name.substring(0,2);
                var f_name = image_name.substring(0,v-3);
                var img_url = 'http://kkhsou.ac.in/DocsUpload/20'+year+'_RegAppForm/'+f_name+'/'+image_name+'.jpg';
                // var img_url = 'http://www.digitalkkhsou.in/admit/learner_img/ckp.php?q='+data.stu_profile_image+'_p.jpg';
                document.getElementById('stu_image').src = img_url;
                document.getElementById('img_lnk').href = img_url;
                document.getElementById('reg_no').value = data.reg_no;
                document.getElementById('stu_name').value = data.stu_name;
                document.getElementById('study_centre_code').value = data.study_centre_code;
            });
            
            
            
          </script>
       <div class="row col-lg-12" style="border: 0px solid #dadada; font-size: 20px;">
        <div class="col-lg-3">
          <a id="img_lnk" href=""><img id="stu_image" src="" alt="" width="500" height="650"></a>
        </div>
        <div class="col-lg-1"></div>
                <div class="col-lg-2"></div>
        <div id="stu_details" class="col-lg-6">

          <div class="row">
            <div class="form-group">
              <label>Registration Number: </label>
              <input id="reg_no" type="text" name="reg_no" value="" readonly>
            </div>
          

         
            <div class="form-group">
              <label>Learner's Name: </label>
              <input id="stu_name" type="text" name="stu_name" value="" readonly>
            </div>
  

         
            <div class="form-group">
              <label>Study Centre Code: </label>
              <input id="study_centre_code" type="text" name="study_centre_code" value="" readonly>
            </div>
          </div>
          <div class="row"><a href="ui/retriveLearnerInfor.php" class="btn btn-primary btn-md btn-block">BACK</a></div>
          </div>
           
                  
        
       </div>
       <?php } ?>
     </div>
  </body>
</html>
