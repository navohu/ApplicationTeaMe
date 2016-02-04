<?php
require('config.php');

if (isset($_POST['submit']))
{
 
   $teamName = mysql_escape_string($_POST['teamName']);


   mysql_query("INSERT INTO `Teams1` (`id`, `teamName`) VALUES (NULL, '$teamName')");
   echo "You created a new team!";
}
else{
$form = <<<EOT
<form action="createATeam.php" method="POST">
Team Name: <input type="text" name="teamName" /><br />
<input type="submit" value="Submit" name="submit" />
</form>

EOT;

echo $form;
}

?>