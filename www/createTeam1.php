<?php include("createATeam.html");?>

<?php

   require('config.php');
   require('db.php');
   session_start();

   // $uname = $_SESSION["uuid"];


   if (isset($_POST['submit']))
   {

     $uname = $_SESSION["uuid"];

     $team_name = mysql_escape_string($_POST['team_name']);

 //     $sql = "INSERT INTO `Teams` (`team_id`, `team_name`, `team_admin`) VALUES (NULL, '$team_name', '$uname')";
 // echo $sql ;
 // mysql_query($sql) or die(mysql_error());
 //   header("Location: http://localhost/Teame_data/ApplicationTeaMe/www/teams.php");
 //   exit();

     mysql_query("INSERT INTO `Teams` (`team_id`, `team_name`, `team_admin`) VALUES (NULL, '$team_name', '$uname')") or die(mysql_error());
     header("Location: http://localhost/Teame_data/ApplicationTeaMe/www/teams.html");
     exit();

   }

?>