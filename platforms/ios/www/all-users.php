<?php

    require('config.php');
    require ('db.php');
    session_start();

    $uname=$_SESSION['uuid'];


    $sql = "SELECT * FROM Users WHERE uname='$uname'";
    $result = mysql_query($sql);
    while($row = mysql_fetch_assoc($result)) {

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


<!--                 <form class="navbar-form navbar-left" role="search" method="post" autocomplete="off" action="search-result.php">
                    <div class="form-group">
                        <input type="text" class="search form-control" id="searchbox" placeholder="Search for People" name="search-form"/><br />
                        <div id="display"></div>
				    </div> 
				</form> -->


    <body>
        <div data-role="page" id="userpage">
            <div data-role="header">
                <h1>All users</h1>
            </div>
            <div data-role="header">
              <div data-role="navbar">
                  <ul>
                    <li><a href="edit-profile.php" data-icon="edit" data-ajax="false">Edit Profile</a></li>
                    <li><a href="teams.php" data-icon="search" data-ajax="false">Choose a Team</a></li>
                    <li><a href="index.html" data-icon="back" data-ajax="false">Logout</a></li>
                  </ul>
              </div>
            </div>
            <div data-role="content">
              <h1 id="userpageheading" style="text-align:center"><?php echo $row["fname"] . " " . $row["lname"]?></h1>


<?php
    }
?>

<!--  <div class="container">
                                                      <div class="row clearfix">
                                                          <div class="col-md-12 column">
                                                              <div class="row clearfix"> -->
<?php

    $sql2 = "SELECT * FROM Users WHERE uname != '$uname' order by id desc";
    $result2 = mysql_query($sql2) or die(mysqli_error($database));
    while($row2 = mysql_fetch_assoc($result2)){ 
?>
                                                          <!--         <div class="col-md-4 column"> -->
                                                                    <div class="panel-group" id="panel-<?php echo $row2['id']; ?>">
                                                                        <div class="panel panel-default">
                                                                            <div id="panel-element-<?php echo $row2['id']; ?>" class="panel-collapse collapse in">
                                                                                <div class="panel-body">
                                                                                    <div class="col-md-6 column">
                                                                                        <!-- <img src="userfiles/avatars/ <?php //echo $row2['user_avatar'];?>" name="aboutme" class="img-responsive">  -->                                 
                                                                                    </div>
                                                                                    <div class="col-md-6 column">
                                                                                        <h2><span><a href="profile.php?uname=<?php echo $row2['uname'];?>"><?php echo $row2['fname'];?> <?php echo $row2['lname'];?></a></span></h2>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                <!--   </div> -->
 <?php } ?>                                                         
                                                              </div>
                                                          </div>
                                                      </div>

    <div class="topcorner"><a href="userpage.php" class="directing-buttons ui-btn ui-icon-arrow-l ui-btn-icon-left"></a></div>

    <style type="text/css">
     .topcorner{
     position:absolute;
     top:0;
     left:0;
     }
    </style>

</div>
</body>