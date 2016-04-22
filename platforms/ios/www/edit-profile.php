<?php

require('config.php');
session_start();

$uname = $_SESSION["uuid"];

   $sql = "SELECT * FROM Users WHERE uname = '$uname'";
   $result = mysql_query($sql);

   $row = mysql_fetch_array($result);

?>
<html>
    <head>
        <!-- Meta tags -->
        <meta charset="utf-8" />
        <meta name="format-detection" content="telephone=no" />
        <meta name="msapplication-tap-highlight" content="no" />
        <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1, maximum-scale=1, minimum-scale=1" />

        <!-- JS File -->
        <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
        <script type="text/javascript" src="js/index.js"></script>
        <script type="text/javascript" src="js/tearoom.js"></script>
        <script>
            $(document).bind('mobileinit',function(){
                $.mobile.changePage.defaults.changeHash = false;
                $.mobile.hashListeningEnabled = false;
                $.mobile.pushStateEnabled = false;
            });
        </script>
        <script src="http://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.js"></script>
        <script src="http://cdn.pubnub.com/pubnub.min.js"></script>
        
        <!-- Include jQuery Mobile stylesheets -->
        <link rel="stylesheet" href="css/themes/Ninni.css" />
        <link rel="stylesheet" href="css/themes/jquery.mobile.icons.min.css" />
        
        <link rel="stylesheet" href="http://code.jquery.com/mobile/1.4.5/jquery.mobile.structure-1.4.5.min.css" /> 

    </head>

    <body>
        <div data-role="page">
        <div data-role="header"><h1>Update profile</h1></div>
        <div class="topleftcorner"><a href="userpage.php" class="directing-buttons ui-btn ui-icon-arrow-l ui-btn-icon-left"></a></div>

        <form name="form" action="update-details.php" method="post">
            <!-- Tab panes -->
                <div class="">                      
                    <label for="">First Name</label>
                    <input type="text" class="form-control" placeholder="<?php echo $row['fname'];?>" name="user_fname" value="<?php echo $row['fname'];?>">
                </div>
                <div class="">  
                    <label for="">Last Name</label>
                    <input type="text" class="form-control" placeholder="<?php echo $row['lname'];?>" name="user_lname" value="<?php echo $row['lname'];?>">
                </div>

                <div class="">
                    <label for="">Username</label>
                    <input type="text" class="form-control" placeholder="<?php echo $row['uname'];?>" name="user_username" value="<?php echo $row['uname'];?>">
                </div>

                <div class="">
                    <label for="">Password</label>
                    <input type="password" class="form-control" placeholder="<?php echo $row['pass'];?>" name="user_password" value="<?php echo $row['pass'];?>">
                </div>
                <div class="">
                    <label for="">Email</label> 
                    <input type="text" class="form-control" placeholder="<?php echo $row['email'];?>" name="user_email" value="<?php echo $row['email'];?>">
                </div>  

            	<div class="">
                    <label for="">Feeling</label>
                    <input type="text" class="form-control" placeholder="<?php echo $row['user_feeling'];?>" name="user_feeling" value="<?php echo $row['user_feeling'];?>" id="feeling">    
                </div>

                <div class="">
                    <label for="">Location</label>
                    <input type="text" class="form-control" placeholder="<?php echo $row['user_location'];?>" name="user_location" value="<?php echo $row['user_location'];?>" id="location">    
                </div>

                <div class="">
                    <label for="">Status</label>
                    <input type="text" class="form-control" placeholder="<?php echo $row['user_status'];?>" name="user_status" value="<?php echo $row['user_status'];?>" id="status">    
                </div>
  
                <br>
            <input type="submit" name="submit" value="Submit">
        </form>
        </div>
    </body>
</html>