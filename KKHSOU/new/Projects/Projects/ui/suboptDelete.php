
<?php $subopt_obj=new subopt;

$subopt_obj->select($_GET['p']);?>

<form action="" method="POST"><div class="panel-body">
                            <div class="row">
                                <div class="col-lg-12">

<div class='form-group'><label>crsCode</label>
<input type="text" name="crsCode" id="crsCode" value="<?php echo $subopt_obj->crsCode?>" class="form-control" readonly></div>
<div class='form-group'><label>pMcode</label>
<input type="text" name="pMcode" id="pMcode" value="<?php echo $subopt_obj->pMcode?>" class="form-control" readonly></div>
<div class='form-group'><label>subType</label>
<input type="text" name="subType" id="subType" value="<?php echo $subopt_obj->subType?>" class="form-control" readonly></div>
<div class='form-group'><label>n2</label>
<input type="text" name="n2" id="n2" value="<?php echo $subopt_obj->n2?>" class="form-control" readonly></div>
<div class='form-group'><label>n3</label>
<input type="text" name="n3" id="n3" value="<?php echo $subopt_obj->n3?>" class="form-control" readonly></div>
<div class='form-group'><label>so_id</label>
<input type="text" name="so_id" id="so_id" value="<?php echo $subopt_obj->so_id?>" class="form-control" readonly></div>
<input type="submit" id="submit" name="submit" value="Save"></form></div</div></div>

<?php
if(isset($_POST["submit"])){

 include 'class.subopt.php';

$subopt_obj=new subopt;

$subopt_obj->crsCode=$_POST['crsCode'];
$subopt_obj->pMcode=$_POST['pMcode'];
$subopt_obj->subType=$_POST['subType'];
$subopt_obj->n2=$_POST['n2'];
$subopt_obj->n3=$_POST['n3'];
$subopt_obj->so_id=$_POST['so_id'];
 $subopt_obj->delete($_POST[so_id]);
echo 'Data successfully Deleted';}?>