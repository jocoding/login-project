<?php
//code to setup connection to the database

$conn = mysql_connect("localhost","jocod","");
mysql_select_db("c9");
session_start();

if (false===$conn){//forces to false or true
    die("Connection failed");
}
    else {
     //   echo 'Database connected';
    
}
?>
