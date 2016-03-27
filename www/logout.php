<?php

session_start();
require 'db.php';
session_destroy();
header("Location: http://localhost/Teame_data/ApplicationTeaMe/www/login.php");
exit();

?>