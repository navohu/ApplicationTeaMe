<?php
require('config.php');

if(isset($_POST['submit']))
{
 $uname = mysql_escape_string($_POST['uname']);
 $pass = mysql_escape_string($_POST['pass']);
 $pass = md5($pass);

 $check = mysql_query("SELECT * FROM `users` WHERE `uname` = '$uname' AND `pass` = '$pass'");
 if(mysql_num_rows($check) >= 1){
  echo "You are now logged in!";
  exit();
 }
 else{

  echo "Wrong username or password";
 }
}
?>

