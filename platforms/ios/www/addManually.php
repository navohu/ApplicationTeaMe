<?php

require('createATeam.html');
require('config.php');
// session_start();

if(isset($_POST)){


	 //$uname = $_SESSION["uuid"];
	 $uname = mysql_escape_string($_POST['uname']);
	 $team_id = $_SESSION["teamuuid"];


	 $result = mysql_query("SELECT id FROM Users WHERE uname='$uname'");
     $value = mysql_fetch_object($result);
     $user_id = $value->id;


     $result_team_id = mysql_query("SELECT team_id FROM Teams WHERE team_id='$team_id'");
     $value_team_id = mysql_fetch_object($result_team_id);
     $team_id = $value_team_id->team_id;


	 mysql_query("INSERT INTO `Users_per_Team` (`user_id`, `team_id`) VALUES ('$user_id', '$team_id')") or die(mysql_error());

	 // WHERE user_id = u.user_id (Users = u)


            header("Location: http://localhost/Teame_data/ApplicationTeaMe/www//createATeam.html");
            exit();
        }

?>