<?php
include "connect.php";
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<meta http-equiv="Content-Style-Type" content="text/css">
<head>
<title>Contact</title>
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

<meta name="viewport" content="width=device-width, user-scalable=no" />
  <link rel="manifest" href="manifest.json" />

  <script>
 function phonenumber()  
 {
  var num=document.getElementById("phone").value;  
  var phoneno = /^\d{10,12}$/;  
  if(num.match(phoneno))  
  {  
      return true;  
  }  
  else  
  {  
      alert("Invalid phone number");  
      return false;  
  }  
 }  
</script>
<script>
        function isNumber(event) 
        {
        var key = window.event ? event.keyCode : event.which;
        if (event.keyCode == 8 || event.keyCode == 39 || event.keyCode == 37 || event.keyCode==9)
          {
          return true;
          }
        else if ( key < 48 || key > 57 ) 
         {
         return false;
         }
        else return true;
       }
	</script>
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
			<li><a href="index.php"><span class="glyphicon glyphicon-home"></span></a></li>
			<li><a href="about.php"><b>বিষয়ে</b></a></li>
			<li><a href="contact.php"><b>যোগাযোগ কৰক</b></a></li>
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
<div style="position:relative;margin:auto; border:thin;border-style:solid; border-radius:4px;border-color:#66C; width:500px;height:430px;opacity:.9;">
	<div style="position:relative;background-color:#69C; height:60px; width:100%; text-align:center;padding:15px; margin:auto;">
		<label style="text-align:center;color: white;">আপোনাৰ পৰামৰ্শ আমালৈ লিখক</label>
	</div>
    <center>
    <br>
	<div style="border:thin;width:95%; background-color:white;padding:5px;border-radius:4px;">
    	<form class="form-horizontal" onsubmit="return phonenumber()" role="form" action="contact.php" method="post">
  		<table style="position:relative; border-collapse:separate; width:300px; height:300px;">
        <tr>
		<td>
		<div class="input-group">
     		<span class="input-group-addon">নাম</span>
      				<input type="text" class="form-control" name="name" id="name" pattern="^[a-zA-Z ]*$" title="নামত সংখ্যা থাকিব নোৱাৰে" placeholder="অপোনাৰ নাম লিখক" required="required">
 		</div>
        </td>
        </tr>
        <tr>
		<td>
		<div class="input-group">
     		<span class="input-group-addon">ই-ঠিকনা</span>
      				<input type="email" class="form-control" name="email" id="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" placeholder="আপোনাৰ ইমেইল লিখক" title="আপোনাৰ ইমেইলটো বৈধ নহয়"  required>
 		</div>
        </td>
        </tr>		
        <tr>
		<td>
      		<textarea style="width:300px;" rows="4" class="form-control" name="query" placeholder="আপোনাৰ পৰামৰ্শ লিখক" required="required"></textarea>
        </td>
        </tr>
  		<tr>
		<td>
     		<button type="submit" name="register" class="btn btn-primary" style="width:300px;" >জমা কৰক</button>
    	</td>
        </tr>
        </table>
    	</form>
 		</div>
        </center>
    	</div>
        <br />
        <?php
     if(isset($_POST['register']) && ($_POST['name']) && ($_POST['email']) && ($_POST['query']))
	 {
		$name=$_POST['name'];
		$name=mysqli_real_escape_string($con,$name);
mysqli_set_charset($con,"utf8");
		$email=$_POST['email'];
		$query=$_POST['query'];
		$query=mysqli_real_escape_string($con,$query);
mysqli_set_charset($con,"utf8");
		$mail=mail('sachipat@assamesedictionary.in',$name,$query,'From: '.$email);
		if($mail)
		{
			echo '<center><div class="alert alert-success" style="position:absolute; left:0px; right:0px; bottom:200px; top:10px; margin:auto; width:400px; height:50px;">
			<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
    			<strong>MAIL SENT SUCCESSFULLY!</strong>
    			</div></center>';
		}
		else
		{
			echo '<center><div class="alert alert-warning" style="position:absolute; left:0px; right:0px; bottom:200px; top:10px; margin:auto; width:400px; height:50px;">
			<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
    			<strong>MAIL COULD NOT BE SENT!</strong>
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
<p><font color="#003399" size="-1"><a href="http://www.astec.gov.in" target="_blank">অসম বিজ্ঞান প্ৰযুক্তিবিদ্যা আৰু পৰিৱেশ পৰিষদৰ সহযোগত</a>,<a href="http://www.jecassam.ac.in" target="_blank"> যোৰহাট অভিযান্ত্ৰিক মহাবিদ্যালয়ৰ </a><a href="http://www.jecmca.org" target="_blank">কম্পিউটাৰ প্ৰয়োগ বিভাগৰ দ্বাৰা বিকশিত</a>,<br />&copy;ASTEC(২০১৬-১৭)</font></p>
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
