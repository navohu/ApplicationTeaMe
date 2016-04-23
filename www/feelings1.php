<?php //include("feelings.html");?>

<?php
require('config.php');

session_start();
// ['submit']
if (isset($_POST))
{

 // $user_feeling = mysql_escape_string($_POST['smiley']);
	// if('name="cool"'){
	// 	$user_feeling = mysql_escape_string($_POST['cool']);
	// }

 // $user_feeling = mysql_escape_string($_POST['user_feeling']);

 $user_feeling = mysql_escape_string($_POST['user_feeling']);
 
 $uname = $_SESSION["uuid"];
 $sql = "UPDATE Users SET user_feeling='$user_feeling' WHERE uname = '$uname'";

 echo $sql ;

 mysql_query($sql) or die(mysql_error());
   header("Location: http://localhost/Teame_data/ApplicationTeaMe/www/message.php");
   exit();

}
?>