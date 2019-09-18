<form action="" method="POST"> <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-12">

<div class='form-group'><label>crsName</label>
<input type="text" name="crsName" id="crsName" placeholder="crsName" value="" class="form-control"></div>
<div class='form-group'><label>a1</label>
<input type="text" name="a1" id="a1" placeholder="a1" value="" class="form-control"></div>
<div class='form-group'><label>b1</label>
<input type="text" name="b1" id="b1" placeholder="b1" value="" class="form-control"></div>
<div class='form-group'><label>blk10</label>
<input type="text" name="blk10" id="blk10" placeholder="blk10" value="" class="form-control"></div>
<div class='form-group'><label>selectedSub</label>
<!-- <input type="text" name="selectedSub" id="selectedSub" placeholder="selectedSub" value="" class="form-control"> -->
</div>
<div class='form-group'><label>Enroll</label>
<input type="text" name="Enroll" id="Enroll" placeholder="Enroll" value="" class="form-control"></div>
<div class='form-group'><label>Name</label>
<input type="text" name="Name" id="Name" placeholder="Name" value="" class="form-control"></div>
<div class='form-group'><label>cntrCode</label>
<input type="text" name="cntrCode" id="cntrCode" placeholder="cntrCode" value="" class="form-control"></div>
<div class='form-group'><label>cntrName</label>
<input type="text" name="cntrName" id="cntrName" placeholder="cntrName" value="" class="form-control"></div>
<div class='form-group'><label>o_id</label>
<input type="text" name="o_id" id="o_id" placeholder="o_id" value="" class="form-control"></div>
<input type="submit" id="submit" name="submit" value="Save"></div></div></div></form>

<?php
if(isset($_POST["submit"])){
$output_obj=new output;

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
$output_obj->insert();
echo 'Data successfully Entered';}?>
