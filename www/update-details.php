<?php

require('config.php');
session_start();

if(isset($_POST)){


   // $fname = mysql_escape_string($_POST['fname']);
   // $lname = mysql_escape_string($_POST['lname']);
   // $uname = mysql_escape_string($_POST['uname']);
   // $email = mysql_escape_string($_POST['email']);
   // $pass = mysql_escape_string($_POST['pass']);
   // $user_feeling = mysql_escape_string($_POST['user_feeling']);

        // $fname=$_REQUEST['fname'];
        // $lname=$_REQUEST['lname'];
        // $uname=$_REQUEST['uname'];
        // $email=$_REQUEST['email'];
        // $pass=$_REQUEST['pass'];
        $user_feeling=$_REQUEST['user_feeling'];
        $user_location=$_REQUEST['user_location'];
        $user_status=$_REQUEST['user_status'];
        $user_shortbio=$_REQUEST['user_shortbio'];     
        $user_dob=$_REQUEST['user_dob'];
        $user_gender=$_REQUEST['user_gender'];
        $user_country=$_REQUEST['user_country'];

        $uname = $_SESSION["uuid"];

        // fname='$fname', lname='$lname', uname='$uname', email='$email', pass='$pass',

        $sql = "UPDATE Users SET user_feeling='$user_feeling', user_location='$user_location', user_status='$user_status', user_shortbio='$user_shortbio',user_dob='$user_dob',user_gender='$user_gender',user_country='$user_country' WHERE uname = '$uname'";

        //echo $sql;

        mysql_query($sql) or die(mysql_error());

            header("Location: http://localhost/Teame_data/ApplicationTeaMe/www//edit-profile.php");
            exit();
        }

?>