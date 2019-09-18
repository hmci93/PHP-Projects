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
 
 function Database()
 {
  //$obj=new admin_function();
  //$this->host =$obj->ser;
  $this->host ="localhost";                  //          <<---------
  $this->password ="";         
   $this->user ="root";
   $this->database="tst1";
   /*$this->password =$obj->pass;           //          <<---------
  $this->user =$obj->user;                   //          <<---------
  $this->database =$obj->dbname;  */         //          <<---------
  $this->rows = 0;
 } // Method : end
 
 function OpenLink()
 { // Method : begin
  $this->link = @mysqli_connect($this->host,$this->user,$this->password) or die (print "Class Database: Error while connecting to DB (link)");
 } // Method : end
 
 function SelectDB()
 { // Method : begin
 
 @mysqli_select_db($this->link,$this->database) or die (print "Class Database: Error while selecting DB");
  
 } // Method : end
 
 function CloseDB()
 { // Method : begin
 mysqli_close($this->database);
 } // Method : end
 
 function Query($query)
 { // Method : begin
 $this->OpenLink();
 $this->SelectDB();
 $this->query = $query;
 //echo "<br>SQL   ".$query."<br>";
  $this->result = mysqli_query($this->link,$this->query) or die (print "Class Database: Error while executing Query".mysql_error());

// $rows=mysql_affected_rows();

if(preg_match("/SELECT/",$query))
{
 $this->rows = mysqli_num_rows($this->result);
}
 
 $this->CloseDB();
 } // Method : end	
  
 } // Class : end
 
?>