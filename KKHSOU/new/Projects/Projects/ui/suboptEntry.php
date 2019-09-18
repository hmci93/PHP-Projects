<form action="" method="POST"> <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-12">
 
<div class='form-group'><label>crsCode</label>
<input type="text" name="crsCode" id="crsCode" placeholder="crsCode" value="" class="form-control"></div>
<div class='form-group'><label>pMcode</label>
<input type="text" name="pMcode" id="pMcode" placeholder="pMcode" value="" class="form-control"></div>
<div class='form-group'><label>subType</label>
<input type="text" name="subType" id="subType" placeholder="subType" value="" class="form-control"></div>
<div class='form-group'><label>n2</label>
<input type="text" name="n2" id="n2" placeholder="n2" value="" class="form-control"></div>
<div class='form-group'><label>n3</label>
<input type="text" name="n3" id="n3" placeholder="n3" value="" class="form-control"></div>
<div class='form-group'><label>so_id</label>
<input type="text" name="so_id" id="so_id" placeholder="so_id" value="" class="form-control"></div>
<input type="submit" id="submit" name="submit" value="Save"></div></div></div></form>

<?php
if(isset($_POST["submit"])){
$subopt_obj=new subopt;

$subopt_obj->crsCode=$_POST['crsCode'];
$subopt_obj->pMcode=$_POST['pMcode'];
$subopt_obj->subType=$_POST['subType'];
$subopt_obj->n2=$_POST['n2'];
$subopt_obj->n3=$_POST['n3'];
$subopt_obj->so_id=$_POST['so_id'];
 $subopt_obj->insert();
echo 'Data successfully Entered';}?>