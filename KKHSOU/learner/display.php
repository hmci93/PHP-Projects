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


  </head>
  <body>
     <div class="container">
       <?php
       if (isset($_GET['data'])) {
         include_once("class/class.RegList.php");
         $d= array();
         $tb_handle = new RegList();
         $data = $tb_handle->my_simple_crypt($_GET['data'],'Z@8591');
         $d = json_decode($data);
         echo $data."<br>";
         // echo $d['reg_no'];
         // print_r($d);
       ?>
       <div class="row col-lg-12">
        <div class="col-lg-6">

        </div>

        <div class="col-lg-6">
          <script type="text/javascript">
            var d = "<php echo $data; ?>";
            var data = JSON.parse(d);
            alert(d);
            document.getElementByClass('abc').innerHTML = data.reg_no;
          </script>
          <div class="row">
            <label>Student Registration Number</label>
            <input id="reg_no" type="text" name="" value="">
          </div>
          <div class="abc">

          </div>
        </div>
       </div>
       <?php } ?>
     </div>
  </body>
</html>
