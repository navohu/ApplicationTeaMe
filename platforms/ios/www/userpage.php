<!-- <?php //include 'top-navigation.php' ?> -->
<?php

   require('config.php');
   require('db.php');
   session_start();

   $uname = $_SESSION["uuid"];

   $sql = "SELECT * FROM Users WHERE uname = '$uname'";
   $result = mysql_query($sql);
   $row = mysql_fetch_assoc($result);
// if (mysqli_num_rows($result) > 0) {
    // output data of each row

   // $pass = md5($pass);
    // while() {
    //     echo "First Name: <b>" . $row["fname"] . "</b><br /> Last Name: <b>" . $row["lname"] . "</b><br /> Username: <b>" . $row["uname"] . "</b><br /> Email address: <b>" . $row["email"] . "</b><br /> Mood: <b>" . $row["user_feeling"] . "</b><br /> Location: <b>" . $row["user_location"] . "</b><br /> Status: <b>" . $row["user_status"] . "</b><br /> <br />";
    // }

    // Password: <b>" . $row["pass"] . "</b><br />

?>
<!DOCTYPE html>
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
        <script>
            $(document).bind('mobileinit',function(){
                $.mobile.changePage.defaults.changeHash = false;
                $.mobile.hashListeningEnabled = false;
                $.mobile.pushStateEnabled = false;
            });
        </script>
        <script src="http://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.js"></script>
        
        <!-- Include jQuery Mobile stylesheets -->
        <link rel="stylesheet" href="css/themes/Ninni.css" />
        <link rel="stylesheet" href="css/index.css" />
        <link rel="stylesheet" href="css/themes/jquery.mobile.icons.min.css" />
        
        <link rel="stylesheet" href="http://code.jquery.com/mobile/1.4.5/jquery.mobile.structure-1.4.5.min.css" /> 

    </head>
    <body>
        <div data-role="page" id="userpage">
            <div data-role="header">
                <h1>User page</h1>
            </div>
            <div data-role="header">
              <div data-role="navbar">
                  <ul>
                    <li><a href="all-users.php" data-icon="search" data-ajax="false">View all users</a></li>
<!--      <form class="navbar-form navbar-left" role="search" method="post" autocomplete="off" action="search-people.php">
                    <div class="form-group">
                     <input type="text" class="search form-control" id="searchbox" placeholder="Search for People" name="search-form"/><br />
                     <div id="display"></div>
                    </div> 
     </form> -->
                    <li><a href="edit-profile.php" data-icon="edit" data-ajax="false">Edit Profile</a></li>
                    <li><a href="teams.php" data-icon="search" data-ajax="false">Choose a Team</a></li>
                    <li><a href="index.html" data-icon="back" data-ajax="false">Logout</a></li>
                  </ul>
              </div>
            </div>
            <div data-role="content">
              <h1 id="userpageheading" style="text-align:center"><?php echo $row["fname"] . " " . $row["lname"]?></h1>
              <div class="ui-grid-a" id="userTable" style="padding:0.5em">
                <div class="ui-block-a">
                  <p class="utable">Username</p>
                  <p class="utable">Email</p>
                  <p class="utable">User feeling</p>
                  <p class="utable">User location</p>
                  <p class="utable">User status</p>
                </div>
                <div class="ui-block-b">
                  <p class="utable"><?php echo $row["uname"]?></p>
                  <p class="utable"><?php echo $row["email"]?></p>
                  <p class="utable"><?php echo $row["user_feeling"]?></p>
                  <p class="utable"><?php echo $row["user_location"]?></p>
                  <p class="utable"><?php echo $row["user_status"]?></p>
                </div>
              </div>
            </div>
            <div data-role="footer">
                <div data-role="navbar">
                    <ul>
                      <li><a href="newsfeed.php" data-icon="home" data-ajax="false">Home</a></li>
                      <li><a href="tearoom.php" data-icon="comment" data-ajax="false">TeaRoom</a></li>
                      <li><a href="message.php" data-icon="check" data-ajax="false">Messaging</a></li>
                      <li><a href="userpage.php" data-icon="check" data-ajax="false">User Page</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </body>
</html>