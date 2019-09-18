<!Doctype html>
<html>
<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
<body>
<?php
session_start();
include "connect.php";
if(isset($_SESSION['id']))
{
$id=$_SESSION["id"];
$extract=mysqli_query($con,"select * from word where word_id=$id");
$row=mysqli_fetch_assoc($extract);
$image=$row['image'];
$sound=$row['sound'];
unlink($image);
unlink($sound);
mysqli_query($con,"delete from word where word_id=$id");
$write=mysqli_query($con,"delete from synonym where word_id=$id");
if($write)
{
  echo '<script type="text/javascript">alert("Deleted successfully!!");
        window.location.href="edit.php";</script>';
}
}
else
{
	header("location:insert.php");
}
?>
</body>
</html>
