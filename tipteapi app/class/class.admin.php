<?php
    include_once("class.server.php");

    class admin {
        //VARIABLE DECLARATION
        var $id;
        var $username;
        var $pass;
        var $block_status;
        var $reserved1;
        var $reserved2;
        var $reserved3;
        var $database;

        //CONSTRUCTOR CREATION
        function __construct() { $this->database = new Database(); }

        //GETTER METHOD CREATION
        function getid() { return $this->id; }
        function getusername() { return $this->username; }
        function getpass() { return $this->pass; }
        function getblock_status() { return $this->block_status; }
        function getreserved1() { return $this->reserved1; }
        function getreserved2() { return $this->reserved2; }
        function getreserved3() { return $this->reserved3; }

        //SETTER METHOD CREATION..!
        function setid($id_v){ $this->id=$id_v;}
        function setusername($username_v){ $this->username=$username_v;}
        function setpass($pass_v){ $this->pass=$pass_v;}
        function setblock_status($block_status_v){ $this->block_status=$block_status_v;}
        function setreserved1($reserved1_v){ $this->reserved1=$reserved1_v;}
        function setreserved2($reserved2_v){ $this->reserved2=$reserved2_v;}
        function setreserved3($reserved3_v){ $this->reserved3=$reserved3_v;}

        function insert(){
            $sql="INSERT INTO `admin`(`username`,`pass`,`block_status`,reserved1,reserved2,reserved3) VALUES ('$this->username','$this->pass','$this->block_status','$this->reserved1','$this->reserved2','$this->reserved3')";
            $result=$this->database->query($sql);
            if ($this->database->affected_rows<>-1) {
                $ar = array('message' => 'Registered Successfully');
                echo json_encode($ar);
            }
            if ($this->database->rows==-1) {
                $ar = array('message' => 'Sorry.....Registration Failed');
                echo json_encode($ar);
            }
        }

        function checkUser($username, $password) {
            $user='';
            $sql="SELECT * FROM `admin` WHERE `username` = '".$username."' AND `pass` = '".$password."' AND `block_status` = 0";
            $result=$this->database->query($sql);
            $result=$this->database->result;
            if ($this->database->rows > 0) {
                while ($row = mysqli_fetch_assoc($result)) {
                    $user = trim($row['username']);
                }
                return json_encode(array('username' => $user));
            }
            else {
                return json_encode(array('username' => 'Unauthorized'));
            }
        }

        
    }
    
?>