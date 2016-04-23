<?php include("createATeam_2.html");?>
hello

<?php

   require('config.php');
   require('db.php');
   session_start();



   if (isset($_POST['submit']))
   {

     $uname = $_SESSION["uuid"];

     $team_name = mysql_escape_string($_POST['team_name']);

     $result = mysql_query("SELECT id FROM Users WHERE uname='$uname'");
     $value = mysql_fetch_object($result);
     $user_id = $value->id;

     mysql_query("INSERT INTO `Teams` (`team_name`, `team_admin`) VALUES ('$team_name', '$uname')") or die(mysql_error());

     $result_team_id = mysql_query("SELECT team_id FROM Teams WHERE team_name='$team_name'");
     $value_team_id = mysql_fetch_object($result_team_id);
     $team_id = $value_team_id->team_id;

     // echo 'this is the team id'. $team_id . "\n";


     mysql_query("INSERT INTO `Users_per_Team` (`user_id`, `team_id`) VALUES ('$user_id', '$team_id')") or die(mysql_error());
     $_SESSION["teamuuid"] = $team_id;

     header("Location: http://localhost/Teame_data/ApplicationTeaMe/www/createATeam_2.html");
     exit();

   }

?>