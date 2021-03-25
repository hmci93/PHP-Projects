<?php
 class Database
 { // Class : begin

 var $host;  		//Hostname, Server
 var $password; 	//Passwort MySQL
 var $user; 		//User MySQL
 var $database; 	//Datenbankname MySQL
 var $link;
 var $query;
 var $result;
 var $rows;
 var $affected_rows;

 function __construct()
 {
  $this->host ="localhost";                  //     MySQL:3308     <<---------
  $this->password ="i4nJ]Za#]S;7";           //          <<---------
  $this->user ="teapi";                   //          <<---------
  $this->database ="tepai_api";           //          <<---------
  $this->rows = 0;
 } // Method : end

 function OpenLink()
 { // Method : begin
 // $con = mysqli_connect("localhost","my_user","my_password","my_db");
  $this->link = mysqli_connect($this->host,$this->user,$this->password,$this->database) or die (print "Error Code: 101");
 } // Method : end

 function SelectDB()
 { // Method : begin
	 @mysql_select_db($this->link,$this->database) or die (print "Error Code: 102");

 } // Method : end

 function CloseDB()
 { // Method : begin
	 //mysql_close();
	 mysqli_close($this->link);
 } // Method : end

 function Query($query)
 { // Method : begin
 $this->OpenLink();
// $this->SelectDB();
 $this->query = $query;
 //mysqli_query
 $this->result = mysqli_query($this->link,$query) or die (print "Error Code: 103".mysqli_error($this->link));



if(preg_match('/SELECT/',$query))
{
 $this->rows = mysqli_num_rows($this->result);
}

if(preg_match('/INSERT|DELETE|UPDATE/',$query))
{
 $this->affected_rows = mysqli_affected_rows($this->link);
}

 $this->CloseDB();
 } // Method : end

 } // Class : end

?>
