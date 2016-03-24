<?php //include("feelings.html");?>

<?php
require('config.php');

session_start();
if (isset($_POST['submit']))
{

 // $user_feeling = mysql_escape_string($_POST['smiley']);
 $user_feeling = mysql_escape_string($_POST['user_feeling']);
 $uname = $_SESSION["uuid"];
 $sql = "UPDATE Users SET user_feeling='$user_feeling' WHERE uname = '$uname'";

 echo $sql ;

//  if($uname == $_SESSION["uuid"])
// {
 mysql_query($sql) or die(mysql_error());
   header("Location: http://localhost/Teame_data/ApplicationTeaMe/www/userpage.html");
   exit();
// }
}
?>