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
  $this->host ="localhost";
  


       $this->user="kkhsousc";                   //          <<---------
       $this->password ="Kkhsou6@ghy";           //          <<---------                                        //          <<---------
 
 $this->database ="kkhsousc";
 $this->rows = 0;

 } // Method : end
 
 function OpenLink()
 { // Method : begin
  $this->link = @mysql_connect($this->host,$this->user,$this->password) or die (print "Class Database: Error while connecting to DB (link)");
 } // Method : end
 
 function SelectDB()
 { // Method : begin
 
 @mysql_select_db($this->database,$this->link) or die (print "Class Database: Error while selecting DB");
  
 } // Method : end
 
 function CloseDB()
 { // Method : begin
 mysql_close();
 } // Method : end
 
 function Query($query)
 { // Method : begin
 $this->OpenLink();
 $this->SelectDB();
 $this->query = $query;
 //echo "<br>SQL   ".$query."<br>";
 $this->result = mysql_query($query,$this->link) or die (print "Class Database: Error while executing Query".mysql_error());
 
// $rows=mysql_affected_rows();

if(preg_match('/SELECT/',$query))
{
 $this->rows = mysql_num_rows($this->result);
}
 
 $this->CloseDB();
 } // Method : end	
  
 } // Class : end
 
?>
