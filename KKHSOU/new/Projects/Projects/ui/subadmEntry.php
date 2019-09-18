<form action="" method="POST"> <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-12">
 
<div class='form-group'><label>a11</label>
<input type="text" name="a11" id="a11" placeholder="a11" value="" class="form-control"></div>
<div class='form-group'><label>crsCode</label>
<input type="text" name="crsCode" id="crsCode" placeholder="crsCode" value="" class="form-control"></div>
<div class='form-group'><label>pMcode</label>
<input type="text" name="pMcode" id="pMcode" placeholder="pMcode" value="" class="form-control"></div>
<div class='form-group'><label>b11</label>
<input type="text" name="b11" id="b11" placeholder="b11" value="" class="form-control"></div>
<div class='form-group'><label>c11</label>
<input type="text" name="c11" id="c11" placeholder="c11" value="" class="form-control"></div>
<div class='form-group'><label>subCode</label>
<input type="text" name="subCode" id="subCode" placeholder="subCode" value="" class="form-control"></div>
<div class='form-group'><label>subLngNmae</label>
<input type="text" name="subLngNmae" id="subLngNmae" placeholder="subLngNmae" value="" class="form-control"></div>
<div class='form-group'><label>subSrtName</label>
<input type="text" name="subSrtName" id="subSrtName" placeholder="subSrtName" value="" class="form-control"></div>
<div class='form-group'><label>d11</label>
<input type="text" name="d11" id="d11" placeholder="d11" value="" class="form-control"></div>
<div class='form-group'><label>pM</label>
<input type="text" name="pM" id="pM" placeholder="pM" value="" class="form-control"></div>
<div class='form-group'><label>Mpaper1</label>
<input type="text" name="Mpaper1" id="Mpaper1" placeholder="Mpaper1" value="" class="form-control"></div>
<div class='form-group'><label>Mpaper2</label>
<input type="text" name="Mpaper2" id="Mpaper2" placeholder="Mpaper2" value="" class="form-control"></div>
<div class='form-group'><label>e11</label>
<input type="text" name="e11" id="e11" placeholder="e11" value="" class="form-control"></div>
<div class='form-group'><label>f11</label>
<input type="text" name="f11" id="f11" placeholder="f11" value="" class="form-control"></div>
<div class='form-group'><label>blk3</label>
<input type="text" name="blk3" id="blk3" placeholder="blk3" value="" class="form-control"></div>
<div class='form-group'><label>blk4</label>
<input type="text" name="blk4" id="blk4" placeholder="blk4" value="" class="form-control"></div>
<div class='form-group'><label>g11</label>
<input type="text" name="g11" id="g11" placeholder="g11" value="" class="form-control"></div>
<div class='form-group'><label>h11</label>
<input type="text" name="h11" id="h11" placeholder="h11" value="" class="form-control"></div>
<div class='form-group'><label>sa_id</label>
<input type="text" name="sa_id" id="sa_id" placeholder="sa_id" value="" class="form-control"></div>
<input type="submit" id="submit" name="submit" value="Save"></div></div></div></form>

<?php
if(isset($_POST["submit"])){
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
 $subadm_obj->insert();
echo 'Data successfully Entered';}?>