<?php
  include_once("class.database.php");
  session_start();

  class login
  {
    //VARIABLE DECLARATION
  	 var $username;
  	 var $password;
     var $empl_id;

     //CONSTRUCTOR CREATED
  	function login() {
      $this->database = new Database();
    }

    function verifyUser($username, $password) {
      $sql = "SELECT * FROM users WHERE username = '$username' AND password = '$password'";
      $result =$this->database->query($sql);
      $result =$this->database->result;
      $row=mysqli_fetch_object($result);
      $rempl_id = $row->empl_id;
        if ($username = $row->username && $password = $row->password && $username != 'admin') {
          $_SESSION['empl_id'] = $rempl_id;
          echo "<script>alert('Logged In Successfully');location.href='../ui/displayFormat.php'</script>";
        }
        else if ($username = $row->username && $password = $row->password) {
          $_SESSION['empl_id'] = $rempl_id;
          echo "<script>alert('Logged In Successfully');location.href='../ui/adminDisplayFormat.php'</script>";
        }
        else {
          echo "Worng Username or Password";
        }
      }
    }


?>
