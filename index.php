<!--gdsgdgsgsd-->
<?php
require('dbconnect.php');//link to the data base .php file
//setup variable to hold sql statment

if($_SERVER['REQUEST_METHOD']=='POST'|| $SESSION['login']===1){
    //mysql_escape_string terminates the content of the form box, protecting it from MYSQL injection
$uname = mysql_escape_string($_POST['namebox']);
$password = mysql_escape_string($_POST['passwordbox']);
 
$sql=mysql_query("SELECT * FROM users WHERE username='$uname'AND password='$password'");
$numberrows = mysql_num_rows($sql);
//if login succesful will display sweets
$_SESSION['login']=1;
if ($numberrows>0) {
    //login has been succesfull so display the sweets
    //this has been a difficult day
    $sweets = "SELECT * FROM sweets";
    $result = mysql_query($sweets);
    
    while($row=mysql_fetch_assoc($result)){
        echo $row["name"];
    }
}
else {
  echo'<p>Login failed.</p>';
  
  }
  echo'
<form method="POST" action="index.php">
    Username <input type="text" name="namebox"><br/>
    Password <input type="text" name="passwordbox"><br/>
    <input type="submit" name="submit" value="Log in">
</form>';
}
//close if statment after pressing submit form button
?>
