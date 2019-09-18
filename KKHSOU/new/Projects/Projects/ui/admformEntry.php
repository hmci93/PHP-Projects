<form action="" method="POST"> <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-12">
 
<div class='form-group'><label>a1</label>
<input type="text" name="a1" id="a1" placeholder="a1" value="" class="form-control"></div>
<div class='form-group'><label>b1</label>
<input type="text" name="b1" id="b1" placeholder="b1" value="" class="form-control"></div>
<div class='form-group'><label>blk1</label>
<input type="text" name="blk1" id="blk1" placeholder="blk1" value="" class="form-control"></div>
<div class='form-group'><label>blk2</label>
<input type="text" name="blk2" id="blk2" placeholder="blk2" value="" class="form-control"></div>
<div class='form-group'><label>n1</label>
<input type="text" name="n1" id="n1" placeholder="n1" value="" class="form-control"></div>
<div class='form-group'><label>crsName</label>
<input type="text" name="crsName" id="crsName" placeholder="crsName" value="" class="form-control"></div>
<div class='form-group'><label>cntrCode</label>
<input type="text" name="cntrCode" id="cntrCode" placeholder="cntrCode" value="" class="form-control"></div>
<div class='form-group'><label>cntrName</label>
<input type="text" name="cntrName" id="cntrName" placeholder="cntrName" value="" class="form-control"></div>
<div class='form-group'><label>enrol</label>
<input type="text" name="enrol" id="enrol" placeholder="enrol" value="" class="form-control"></div>
<div class='form-group'><label>name</label>
<input type="text" name="name" id="name" placeholder="name" value="" class="form-control"></div>
<div class='form-group'><label>catSrtName</label>
<input type="text" name="catSrtName" id="catSrtName" placeholder="catSrtName" value="" class="form-control"></div>
<div class='form-group'><label>catLngName</label>
<input type="text" name="catLngName" id="catLngName" placeholder="catLngName" value="" class="form-control"></div>
<div class='form-group'><label>comp</label>
<input type="text" name="comp" id="comp" placeholder="comp" value="" class="form-control"></div>
<div class='form-group'><label>sub1</label>
<input type="text" name="sub1" id="sub1" placeholder="sub1" value="" class="form-control"></div>
<div class='form-group'><label>sub2</label>
<input type="text" name="sub2" id="sub2" placeholder="sub2" value="" class="form-control"></div>
<div class='form-group'><label>sub3</label>
<input type="text" name="sub3" id="sub3" placeholder="sub3" value="" class="form-control"></div>
<div class='form-group'><label>sub4</label>
<input type="text" name="sub4" id="sub4" placeholder="sub4" value="" class="form-control"></div>
<div class='form-group'><label>sub5</label>
<input type="text" name="sub5" id="sub5" placeholder="sub5" value="" class="form-control"></div>
<div class='form-group'><label>sub6</label>
<input type="text" name="sub6" id="sub6" placeholder="sub6" value="" class="form-control"></div>
<div class='form-group'><label>sessNo</label>
<input type="text" name="sessNo" id="sessNo" placeholder="sessNo" value="" class="form-control"></div>
<div class='form-group'><label>crsCode</label>
<input type="text" name="crsCode" id="crsCode" placeholder="crsCode" value="" class="form-control"></div>
<div class='form-group'><label>pMcode</label>
<input type="text" name="pMcode" id="pMcode" placeholder="pMcode" value="" class="form-control"></div>
<div class='form-group'><label>adf_id</label>
<input type="text" name="adf_id" id="adf_id" placeholder="adf_id" value="" class="form-control"></div>
<input type="submit" id="submit" name="submit" value="Save"></div></div></div></form>

<?php
if(isset($_POST["submit"])){
$admform_obj=new admform;

$admform_obj->a1=$_POST['a1'];
$admform_obj->b1=$_POST['b1'];
$admform_obj->blk1=$_POST['blk1'];
$admform_obj->blk2=$_POST['blk2'];
$admform_obj->n1=$_POST['n1'];
$admform_obj->crsName=$_POST['crsName'];
$admform_obj->cntrCode=$_POST['cntrCode'];
$admform_obj->cntrName=$_POST['cntrName'];
$admform_obj->enrol=$_POST['enrol'];
$admform_obj->name=$_POST['name'];
$admform_obj->catSrtName=$_POST['catSrtName'];
$admform_obj->catLngName=$_POST['catLngName'];
$admform_obj->comp=$_POST['comp'];
$admform_obj->sub1=$_POST['sub1'];
$admform_obj->sub2=$_POST['sub2'];
$admform_obj->sub3=$_POST['sub3'];
$admform_obj->sub4=$_POST['sub4'];
$admform_obj->sub5=$_POST['sub5'];
$admform_obj->sub6=$_POST['sub6'];
$admform_obj->sessNo=$_POST['sessNo'];
$admform_obj->crsCode=$_POST['crsCode'];
$admform_obj->pMcode=$_POST['pMcode'];
$admform_obj->adf_id=$_POST['adf_id'];
 $admform_obj->insert();
echo 'Data successfully Entered';}?>