<?php
session_start();
include "connect.php";
//include "captcha.php";
if(isset($_SESSION['user']))
{
	header("location:insert.php");
	exit();
}
if(isset($_POST["login"]))
{
 	if(empty($_SESSION['captcha_code'] ) || strcasecmp($_SESSION['captcha_code'], $_POST['captcha']) != 0)
 	{  
        $msg="<span style='color:red'>The Validation code does not match!</span>";// Captcha verification is incorrect.     
	}
	else
	{
		if(isset($_POST["username"]) && ($_POST["password"]) && ($_POST["captcha"]))
		{
			$username=$_POST["username"];
			$password=$_POST["password"];
			$username=mysqli_real_escape_string($con,$username);
			$pass=mysqli_real_escape_string($con,$password);

			$extract=mysqli_query($con,"SELECT * from role where username='$username'");
			if(mysqli_num_rows($extract)>0)
			{
				while($row=mysqli_fetch_assoc($extract))
				{
					$dbpass=$row['password'];
				}
				if(MD5($pass)==$dbpass)
				{
					$_SESSION['user']=$username;
					header("location:insert.php");
				}
				else
				{
					$msg1="<span style='color:red'>Incorrect Password!</span>";
				}
			}
			else
			{
				$msg2="<span style='color:red'>Incorrect username!</span>";
			}
		}	
	}
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<meta http-equiv="Content-Style-Type" content="text/css">
<head>
<title>Login</title>
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
 <script type='text/javascript'>
    function refreshCaptcha()
    {
        var img = document.images['captchaimg'];
        img.src = img.src.substring(0,img.src.lastIndexOf("?"))+"?rand="+Math.random()*1000;
    }
  </script>  

</head>
<body style="background-image:url(icon/back4.jpg);background-size:cover;background-repeat:no-repeat;"> 
<br />         
<center>
<!-------------------------------------HOME PAGE---------------------------------->
<div style="position:relative;border:2px;border-top-style:solid;border-bottom-style:solid; width:900px; min-height:98%; border-color: #069; border-radius:0px; box-shadow:3px 3px 10px #999999; background-color:#FFF;">
<!------------------------------------LOGO------------------------------->
<div align="left" style="position:relative; height:128px;top:2px;">
<table style="border-collapse:separate; width:65%;">
<tr>
<td align="left">
<img style="position:relative;left:40px;" src="icon/logo.jpg" height="125px;" width="auto" />

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
<center>
<div class="container" style="width:360px;" >
  <div class="panel panel-success">
  <div class="panel panel-heading">PLEASE LOGIN</div>
    <div class="panel-body" style="box-shadow:3px 3px 3px #CCCCCC;">
    <center>
<form name="keyboard" method="post" action="login.php" enctype="multipart/form-data" >
<table style="position:relative; border-collapse:separate; width:300px; height:250px;">
<tr>
<td>
<div class = "input-group">
     <span class = "input-group-addon">Username</span>
     <input type="text" class="form-control" id="username" name="username" autocomplete="off" placeholder="Username" required>
  </div>
</td>
</tr>
<?php if(isset($msg2)){?>
<tr>
<td align="center" valign="top"><?php echo $msg2;?></td>
</tr>
<?php } ?>
<tr>
<td align="right">
<div class = "input-group">
     <span class = "input-group-addon">Password</span>
     <input type="password" class="form-control" id="password" name="password" placeholder="Password" required>
  </div>
</td>
</tr>
<?php if(isset($msg1)){?>
<tr>
<td align="center" valign="top"><?php echo $msg1;?></td>
</tr>
<?php } ?>
<tr>
<td align="center"><img src="captcha.php?rand=<?php echo rand();?>" id='captchaimg'><br>
     <label for='message'>Enter the code above here :</label> 
<input type="text" class="form-control" id="captcha" name="captcha" autocomplete="off" required>
 Can't read the image? click <a href='javascript: refreshCaptcha();'>here</a> to refresh.
</td>
</tr>
<?php if(isset($msg)){?>
<tr>
<td align="center" valign="top"><?php echo $msg;?></td>
</tr>
<?php } ?>
<td align="center">
<button type="submit" name="login" id="login" class="btn btn-primary" style="width:300px;">Login</button>
</td>
</tr>
</table>
</form>
</center>
</div>
</div>
</div>
</center>
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

