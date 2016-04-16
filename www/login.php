<?php include("login.html");?>
<?php
session_start();
require('config.php');
if(isset($_POST['submit']))
{
 $uname = mysql_escape_string($_POST['uname']);
 $pass = mysql_escape_string($_POST['pass']);
 $pass = md5($pass);

 $check = mysql_query("SELECT * FROM `Users` WHERE `uname` = '$uname' AND `pass` = '$pass'");
 if(mysql_num_rows($check) >= 1){
 	$_SESSION["uuid"] = $uname;
  	header("Location: http://localhost/Teame_data/ApplicationTeaMe/www/feelings.php");
  	exit();
 }
 else{
  echo "<a href='#$dlg-invalid-credentials'>Click</a>";
  echo "<a name='Comments'>Comments</a>";
 }
}
?>