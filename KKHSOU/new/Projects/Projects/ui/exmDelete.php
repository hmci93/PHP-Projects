
<?php $exm_obj=new exm;

$exm_obj->select($_GET['p']);?>

<form action="" method="POST"><div class="panel-body">
                            <div class="row">
                                <div class="col-lg-12">

<div class='form-group'><label>crsCode</label>
<input type="text" name="crsCode" id="crsCode" value="<?php echo $exm_obj->crsCode?>" class="form-control" readonly></div>
<div class='form-group'><label>q1</label>
<input type="text" name="q1" id="q1" value="<?php echo $exm_obj->q1?>" class="form-control" readonly></div>
<div class='form-group'><label>q2</label>
<input type="text" name="q2" id="q2" value="<?php echo $exm_obj->q2?>" class="form-control" readonly></div>
<div class='form-group'><label>crsName</label>
<input type="text" name="crsName" id="crsName" value="<?php echo $exm_obj->crsName?>" class="form-control" readonly></div>
<div class='form-group'><label>crsSrtName</label>
<input type="text" name="crsSrtName" id="crsSrtName" value="<?php echo $exm_obj->crsSrtName?>" class="form-control" readonly></div>
<div class='form-group'><label>crsLngName</label>
<input type="text" name="crsLngName" id="crsLngName" value="<?php echo $exm_obj->crsLngName?>" class="form-control" readonly></div>
<div class='form-group'><label>n4</label>
<input type="text" name="n4" id="n4" value="<?php echo $exm_obj->n4?>" class="form-control" readonly></div>
<div class='form-group'><label>q3</label>
<input type="text" name="q3" id="q3" value="<?php echo $exm_obj->q3?>" class="form-control" readonly></div>
<div class='form-group'><label>q4</label>
<input type="text" name="q4" id="q4" value="<?php echo $exm_obj->q4?>" class="form-control" readonly></div>
<div class='form-group'><label>q5</label>
<input type="text" name="q5" id="q5" value="<?php echo $exm_obj->q5?>" class="form-control" readonly></div>
<div class='form-group'><label>q6</label>
<input type="text" name="q6" id="q6" value="<?php echo $exm_obj->q6?>" class="form-control" readonly></div>
<div class='form-group'><label>q7</label>
<input type="text" name="q7" id="q7" value="<?php echo $exm_obj->q7?>" class="form-control" readonly></div>
<div class='form-group'><label>q8</label>
<input type="text" name="q8" id="q8" value="<?php echo $exm_obj->q8?>" class="form-control" readonly></div>
<div class='form-group'><label>year</label>
<input type="text" name="year" id="year" value="<?php echo $exm_obj->year?>" class="form-control" readonly></div>
<div class='form-group'><label>session</label>
<input type="text" name="session" id="session" value="<?php echo $exm_obj->session?>" class="form-control" readonly></div>
<div class='form-group'><label>exm_id</label>
<input type="text" name="exm_id" id="exm_id" value="<?php echo $exm_obj->exm_id?>" class="form-control" readonly></div>
<input type="submit" id="submit" name="submit" value="Save"></form></div</div></div>

<?php
if(isset($_POST["submit"])){

 include 'class.exm.php';

$exm_obj=new exm;

$exm_obj->crsCode=$_POST['crsCode'];
$exm_obj->q1=$_POST['q1'];
$exm_obj->q2=$_POST['q2'];
$exm_obj->crsName=$_POST['crsName'];
$exm_obj->crsSrtName=$_POST['crsSrtName'];
$exm_obj->crsLngName=$_POST['crsLngName'];
$exm_obj->n4=$_POST['n4'];
$exm_obj->q3=$_POST['q3'];
$exm_obj->q4=$_POST['q4'];
$exm_obj->q5=$_POST['q5'];
$exm_obj->q6=$_POST['q6'];
$exm_obj->q7=$_POST['q7'];
$exm_obj->q8=$_POST['q8'];
$exm_obj->year=$_POST['year'];
$exm_obj->session=$_POST['session'];
$exm_obj->exm_id=$_POST['exm_id'];
 $exm_obj->delete($_POST[exm_id]);
echo 'Data successfully Deleted';}?>