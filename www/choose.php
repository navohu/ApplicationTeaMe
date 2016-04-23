<?php

   require('config.php');
   session_start();

   $uname = $_SESSION["uuid"];

   $result_all_teams = mysql_query("SELECT t.team_name FROM Teams t, Users u, Users_per_Team ut WHERE t.team_id=ut.team_id AND ut.user_id=u.id AND u.uname='$uname'");

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
        <link rel="stylesheet" href="css/themes/jquery.mobile.icons.min.css" />
        
        <link rel="stylesheet" href="http://code.jquery.com/mobile/1.4.5/jquery.mobile.structure-1.4.5.min.css" /> 

    </head>
    <body>
        <div data-role="page" id="userpage">
            <div data-role="header" id="header" class="header"><h1>Choose a Team</h1></div>
            <div class="container" id="content">
            <div class="topleftcorner"><a href="userpage.php" class="directing-buttons ui-btn ui-icon-arrow-l ui-btn-icon-left"></a></div>
            <div class="toprightcorner"><a href="createATeam_2.html" class="directing-buttons ui-btn ui-icon-plus ui-btn-icon-left"></a></div>
            

             <form name="form" action="choose-team-2.php" method="post">

                <div class="ui-body ui-body-d ui-corner-all">

<?php
                  while($row_team2 = mysql_fetch_array($result_all_teams)) {  ?>

                  <div><input class="teams" type="submit" value="<?php
                        echo $row_team2['team_name'];?>" name="team_name"> 

                   </div>

   <?php   }
       ?> 

                </div>
             </form>

         </div>

     </div>
    <div data-role="footer" id="footer">
    </div>



    </body>
</html>