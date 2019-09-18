<?php
include "connect.php";
session_start();
if(!isset($_SESSION['user']))
{
	header("location:login.php");
	exit();
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<meta http-equiv="Content-Style-Type" content="text/css">
<head>
<title>Change password</title>
<!-- load jquery ui css-->
<link href="script/jquery-ui.min.css" rel="stylesheet" type="text/css" />
<!-- load jquery library -->
<script src="script/jquery-1.11.3.min.js"></script>
<!-- load jquery ui js file -->
<script src="script/jquery-ui.min.js"></script>
<link rel="stylesheet" type="text/css" href="keyboard1_css/keyboard.css">
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<script src="javascript/jquery.min.js"></script>
<link href="css/bootstrap.min.css" rel="stylesheet">
<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<link rel="stylesheet" href="http://code.jquery.com/ui/1.10.3/themes/smoothness/jquery-ui.css" />
<script src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>
<link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
<script src="//code.jquery.com/jquery-1.10.2.js"></script>
<script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
  <style>
  ul 
  {
	  position:relative;
      list-style-type: none;
	  background-color: #F7F7F7;
      margin: 0;
      padding: 0;
      overflow: hidden;
}
li
{
    float: left;
}

li a {
	text-decoration:none;
    display: block;
    text-align: center;
    padding: 10px 12px;
    text-decoration: none;
}

li a:hover
    {
	text-decoration:none;
    background-color: #CCC;
	}
li a:active {
	text-decoration:none;
    background-color: #CCC;
	
}
  </style>
</head>
<body onload="document.keyboard.word.focus()" style="background-image:url(icon/back4.jpg);background-size:cover;background-repeat:no-repeat;" >
<!-------------------------------------HOME PAGE---------------------------------->
<center>
<div style="position:relative;border:2px;border-top-style:solid;border-bottom-style:solid; width:1050px; min-height:98%; border-color: #069; border-radius:0px; box-shadow:3px 3px 10px #999999; background-color:#FFF;">
<!------------------------------------LOGO------------------------------->
<div align="left"  style="position:relative; height:128px;top:2px;">
<table style="border-collapse:separate; width:65%;">
<tr>
<td align="left">
<img style="position:relative;left:40px;" src="icon/logo.jpg" height="125px;" width="auto"/>
</td>
<td align="right">
</td>
<td align="center">
<img style="position:relative;left:40px;" src="icon/logo1.jpg" height="110px;" width="auto" />
</td>
</tr>
</table>
</div>
<div style="position:relative;background-color: #069;height:1px; width:95%;">
</div>
<br />
<!----------------------------LOGO CLOSED------------------------------->
<!-------------------------------NAV BAR--------------------------->
<div style="position:relative;">
<center>
<div style="position:relative;background-color: #069;height:5px;">
	</div>
	<div>
	<center>
		<ul>          
			<li><a href="insert.php"><span class="glyphicon glyphicon-home"></span></a></li>
			<li><a href="edit.php"><b>EDIT</b></a></li>
			<li><a href="admin.php"><b>ADMIN</b></a></li>
			<li><a href="changepass.php"><b>CHANGE PASSWORD</b></a></li>
            <li style="position:absolute;right:10px;"><a href="logout.php"><span class="glyphicon glyphicon-log-out"></span><b>LOGOUT</b></a></li>
		</ul>
	</center>
	</div>
	<div style="position:relative;background-color: #069;height:5px;">
	</div>
</center>
</div>
<br />
<!-----------------------------NAV BAR CLOSED--------------------------------------->
<!------------------------------FORM------------------------------------------>
<div style="position:relative;margin:auto; border:thin;border-style:solid; border-radius:4px;border-color:#66C; width:500px;height:300px;opacity:.9;">
	<div style="position:relative;background-color:#69C; height:60px; width:100%; text-align:center;padding:15px; margin:auto;">
		<label style="text-align:center;color: white;">CHANGE PASSWORD</label>
	</div>
    <center>
    <br>
	<div style="border:thin;width:95%; background-color:white;padding:5px;border-radius:4px;">
    	<form class="form-horizontal" role="form" action="changepass.php" method="post">
  		<table style="position:relative; border-collapse:separate; height:150px;">
        <tr>
		<td>
		<div class="input-group">
     		<span class="input-group-addon">New Username</span>
      				<input type="text" class="form-control" name="user" placeholder="Enter username" required="required">
 		</div>
        </td>
        </tr>
        <tr>
		<td>
		<div class="input-group">
     		<span class="input-group-addon">New Password</span>
      				<input type="password" class="form-control" name="pass" id="pass" required>
 		</div>
        </td>
        </tr>
        <tr>
		<td>
     		<button type="submit" name="change" class="btn btn-primary" style="width:300px;" >CHANGE</button>
    	</td>
        </tr>
        </table>
    	</form>
 		</div>
        </center>
    	</div>
        <br />
        <?php
     if(isset($_POST['change']) && ($_POST['user']) && ($_POST['pass']))
	 {
		$name=$_POST['user'];
		$name=mysqli_real_escape_string($con,$name);
mysqli_set_charset($con,"utf8");
		$pass=$_POST['pass'];
		$pass=mysqli_real_escape_string($con,$pass);
		mysqli_set_charset($con,"utf8");
		$contact=mysqli_query($con,"update role set username='$name',password=MD5('$pass') where id=1");
		if($contact)
		{
			echo '<center><div class="alert alert-success" style="position:relative; top:10px; width:400px;">
			<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
    		<strong>CHANGED SUCCESSFULLY!</strong>
    		</div></center>';
		}
		else
		{
			echo '<center><div class="alert alert-warning" style="position:relative; top:10px; width:400px;">
			<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
    		<strong>DATA COULD NOT BE CHANGED!</strong>
    		</div></center>';
		}
	}
?>
<!------------------------------FORM CLOSED------------------------------------------>
<!----------------FOOTER--------------------->
<div style="position:realtive; bottom:0px;width:95%;height:100px;">
<div style="position:relative;background-color: #069;height:1px;">
</div>
<center>
<div style="position:relative;top:30px;">
	<font style="font: 'Asomiya_Rohini'; font-family:Asomiya_Rohini;font-size: 15px;">
<p><font color="#003399"><a href="http://www.astec.gov.in" target="_blank">অসম বিজ্ঞান প্ৰযুক্তিবিদ্যা আৰু পৰিৱেশ পৰিষদৰ সহযোগত</a>,<a href="http://www.jecassam.ac.in" target="_blank"> যোৰহাট অভিযান্ত্ৰিক মহাবিদ্যালয়ৰ </a><a href="http://www.jecmca.org" target="_blank">কম্পিউটাৰ প্ৰয়োগ বিভাগৰ দ্বাৰা বিকশিত</a>,<br />&copy;ASTEC(২০১৬-১৭)</font></p>
</font>
</div>
</center>
</div>
<!-----------------------------FOOTER CLOSED--------------------------------->
</div>
</center>
<!-----------------------------HOME CLOSED--------------------------------->
<br />
</body>
</html>
