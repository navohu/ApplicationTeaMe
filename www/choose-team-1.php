<?php include("choose-team.php");?>

<?php

   require('config.php');
   session_start();

   if (isset($_POST))
{

     $team_name = mysql_escape_string($_POST['team_name']);

     $uname = $_SESSION["uuid"];

     $result_team_id = mysql_query("SELECT team_id FROM Teams WHERE team_name='$team_name'");
     $value_team_id = mysql_fetch_object($result_team_id);
     $team_id = $value_team_id->team_id;

     $team_id = $_SESSION["teamuuid"];

   // echo 'team_id';

   header("Location: http://localhost/Teame_data/ApplicationTeaMe/www/feelings.php");
   exit();

}

?>