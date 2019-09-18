
<?php $output_obj=new output;

$output_obj->select($_GET['p']);?>

<form action="" method="POST"><div class="panel-body">
                            <div class="row">
                                <div class="col-lg-12">

<div class='form-group'><label>crsName</label>
<input type="text" name="crsName" id="crsName" value="<?php echo $output_obj->crsName?>" class="form-control"></div>
<div class='form-group'><label>a1</label>
<input type="text" name="a1" id="a1" value="<?php echo $output_obj->a1?>" class="form-control"></div>
<div class='form-group'><label>b1</label>
<input type="text" name="b1" id="b1" value="<?php echo $output_obj->b1?>" class="form-control"></div>
<div class='form-group'><label>blk10</label>
<input type="text" name="blk10" id="blk10" value="<?php echo $output_obj->blk10?>" class="form-control"></div>
<div class='form-group'><label>selectedSub</label>
<input type="text" name="selectedSub" id="selectedSub" value="<?php echo $output_obj->selectedSub?>" class="form-control"></div>
<div class='form-group'><label>Enroll</label>
<input type="text" name="Enroll" id="Enroll" value="<?php echo $output_obj->Enroll?>" class="form-control"></div>
<div class='form-group'><label>Name</label>
<input type="text" name="Name" id="Name" value="<?php echo $output_obj->Name?>" class="form-control"></div>
<div class='form-group'><label>cntrCode</label>
<input type="text" name="cntrCode" id="cntrCode" value="<?php echo $output_obj->cntrCode?>" class="form-control"></div>
<div class='form-group'><label>cntrName</label>
<input type="text" name="cntrName" id="cntrName" value="<?php echo $output_obj->cntrName?>" class="form-control"></div>
<div class='form-group'><label>o_id</label>
<input type="text" name="o_id" id="o_id" value="<?php echo $output_obj->o_id?>" class="form-control"></div>
<input type="submit" id="submit" name="submit" value="Save"></form></div</div></div>

<?php
if(isset($_POST["submit"])){
$output_obj->crsName=$_POST['crsName'];
$output_obj->a1=$_POST['a1'];
$output_obj->b1=$_POST['b1'];
$output_obj->blk10=$_POST['blk10'];
$output_obj->selectedSub=$_POST['selectedSub'];
$output_obj->Enroll=$_POST['Enroll'];
$output_obj->Name=$_POST['Name'];
$output_obj->cntrCode=$_POST['cntrCode'];
$output_obj->cntrName=$_POST['cntrName'];
$output_obj->o_id=$_POST['o_id'];
 $output_obj->update($_POST[o_id]);
echo 'Data successfully Edited';}?>