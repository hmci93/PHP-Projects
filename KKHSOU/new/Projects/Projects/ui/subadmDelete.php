
<?php $subadm_obj=new subadm;

$subadm_obj->select($_GET['p']);?>

<form action="" method="POST"><div class="panel-body">
                            <div class="row">
                                <div class="col-lg-12">

<div class='form-group'><label>a11</label>
<input type="text" name="a11" id="a11" value="<?php echo $subadm_obj->a11?>" class="form-control" readonly></div>
<div class='form-group'><label>crsCode</label>
<input type="text" name="crsCode" id="crsCode" value="<?php echo $subadm_obj->crsCode?>" class="form-control" readonly></div>
<div class='form-group'><label>pMcode</label>
<input type="text" name="pMcode" id="pMcode" value="<?php echo $subadm_obj->pMcode?>" class="form-control" readonly></div>
<div class='form-group'><label>b11</label>
<input type="text" name="b11" id="b11" value="<?php echo $subadm_obj->b11?>" class="form-control" readonly></div>
<div class='form-group'><label>c11</label>
<input type="text" name="c11" id="c11" value="<?php echo $subadm_obj->c11?>" class="form-control" readonly></div>
<div class='form-group'><label>subCode</label>
<input type="text" name="subCode" id="subCode" value="<?php echo $subadm_obj->subCode?>" class="form-control" readonly></div>
<div class='form-group'><label>subLngNmae</label>
<input type="text" name="subLngNmae" id="subLngNmae" value="<?php echo $subadm_obj->subLngNmae?>" class="form-control" readonly></div>
<div class='form-group'><label>subSrtName</label>
<input type="text" name="subSrtName" id="subSrtName" value="<?php echo $subadm_obj->subSrtName?>" class="form-control" readonly></div>
<div class='form-group'><label>d11</label>
<input type="text" name="d11" id="d11" value="<?php echo $subadm_obj->d11?>" class="form-control" readonly></div>
<div class='form-group'><label>pM</label>
<input type="text" name="pM" id="pM" value="<?php echo $subadm_obj->pM?>" class="form-control" readonly></div>
<div class='form-group'><label>Mpaper1</label>
<input type="text" name="Mpaper1" id="Mpaper1" value="<?php echo $subadm_obj->Mpaper1?>" class="form-control" readonly></div>
<div class='form-group'><label>Mpaper2</label>
<input type="text" name="Mpaper2" id="Mpaper2" value="<?php echo $subadm_obj->Mpaper2?>" class="form-control" readonly></div>
<div class='form-group'><label>e11</label>
<input type="text" name="e11" id="e11" value="<?php echo $subadm_obj->e11?>" class="form-control" readonly></div>
<div class='form-group'><label>f11</label>
<input type="text" name="f11" id="f11" value="<?php echo $subadm_obj->f11?>" class="form-control" readonly></div>
<div class='form-group'><label>blk3</label>
<input type="text" name="blk3" id="blk3" value="<?php echo $subadm_obj->blk3?>" class="form-control" readonly></div>
<div class='form-group'><label>blk4</label>
<input type="text" name="blk4" id="blk4" value="<?php echo $subadm_obj->blk4?>" class="form-control" readonly></div>
<div class='form-group'><label>g11</label>
<input type="text" name="g11" id="g11" value="<?php echo $subadm_obj->g11?>" class="form-control" readonly></div>
<div class='form-group'><label>h11</label>
<input type="text" name="h11" id="h11" value="<?php echo $subadm_obj->h11?>" class="form-control" readonly></div>
<div class='form-group'><label>sa_id</label>
<input type="text" name="sa_id" id="sa_id" value="<?php echo $subadm_obj->sa_id?>" class="form-control" readonly></div>
<input type="submit" id="submit" name="submit" value="Save"></form></div</div></div>

<?php
if(isset($_POST["submit"])){

 include 'class.subadm.php';

$subadm_obj=new subadm;

$subadm_obj->a11=$_POST['a11'];
$subadm_obj->crsCode=$_POST['crsCode'];
$subadm_obj->pMcode=$_POST['pMcode'];
$subadm_obj->b11=$_POST['b11'];
$subadm_obj->c11=$_POST['c11'];
$subadm_obj->subCode=$_POST['subCode'];
$subadm_obj->subLngNmae=$_POST['subLngNmae'];
$subadm_obj->subSrtName=$_POST['subSrtName'];
$subadm_obj->d11=$_POST['d11'];
$subadm_obj->pM=$_POST['pM'];
$subadm_obj->Mpaper1=$_POST['Mpaper1'];
$subadm_obj->Mpaper2=$_POST['Mpaper2'];
$subadm_obj->e11=$_POST['e11'];
$subadm_obj->f11=$_POST['f11'];
$subadm_obj->blk3=$_POST['blk3'];
$subadm_obj->blk4=$_POST['blk4'];
$subadm_obj->g11=$_POST['g11'];
$subadm_obj->h11=$_POST['h11'];
$subadm_obj->sa_id=$_POST['sa_id'];
 $subadm_obj->delete($_POST[sa_id]);
echo 'Data successfully Deleted';}?>