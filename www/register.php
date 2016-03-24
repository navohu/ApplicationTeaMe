<?php include("register.html");?>
<?php
require('config.php');

if (isset($_POST['submit']))
{
 $email1 = $_POST['email1'];
 $email2 = $_POST['email2'];
 $pass1 = $_POST['pass1'];
 $pass2 = $_POST['pass2'];

 if($email1 == $email2 && $pass1 == $pass2)
 {
   
   $fname = mysql_escape_string($_POST['fname']);
   $lname = mysql_escape_string($_POST['lname']);
   $uname = mysql_escape_string($_POST['uname']);
   $email1 = mysql_escape_string($_POST['email1']);
   $email2 = mysql_escape_string($_POST['email2']);
   $pass1 = mysql_escape_string($_POST['pass1']);
   $pass2 = mysql_escape_string($_POST['pass2']);

   $pass1 = md5($pass1);
   //Check if username is taken
   $check = mysql_query("SELECT * FROM Users WHERE uname = '$uname'")or die(mysql_error());
   if (mysql_num_rows($check)>=1) echo "Username already taken";
   //Put everyting in DB
   else{
   mysql_query("INSERT INTO `Users` (`id`, `fname`, `lname`, `uname`, `email`, `pass`) VALUES (NULL, '$fname', '$lname', '$uname', '$email1', '$pass1')") or die(mysql_error());
   header("Location: http://localhost/Teame_data/ApplicationTeaMe/www/log-in.html");
   exit();
   }
 }
 else{
  echo "Sorry, your email's or your passwords do not match. <br />";
 }
}
?>