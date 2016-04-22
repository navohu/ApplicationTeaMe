<!-- <?php //include 'top-navigation.php' ?> -->
<?php

   require('config.php');
   session_start();

   $uname = $_SESSION["uuid"];
   // // $team_id = $_SESSION["team_id"];


   // $result = mysql_query("SELECT t.* FROM Users u, Teams t, Users_per_Team ut 
   // WHERE u.uname='$uname' AND 
   // u.id = 'ut.user_id' AND 
   // t.team_id = 'ut.team_id'");

  //echo 'team id is:' . $team_id;

   $result = mysql_query("SELECT team_name FROM Teams WHERE team_admin='$uname'");


   // $result_all_teams = mysql_query("SELECT t.team_name FROM Teams t join Users_per_Team ut on t.team_name=ut.team_id");
   // $value_team = mysql_fetch_object($result_all_teams);
   // $team_id = $value_team->team_id;

//    $result_all_teams = mysql_query("SELECT t.team_name FROM Teams t, Users u join Users_per_Team ut on t.team_id = ut.team_id WHERE u.uname=$uname AND
// u.id = ut.user_id");

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
            <div data-role="header"><h1>Teams</h1></div>
            <div class="container">
            <div class="col-md-12"><h1 class="text-center">All teams you are in:</h1></div>
            <div class="toprightcorner"><a href="createATeam.html" class="directing-buttons ui-btn ui-icon-plus ui-btn-icon-left"></a></div>
            <div class="topleftcorner"><a href="userpage.php" class="directing-buttons ui-btn ui-icon-arrow-l ui-btn-icon-left"></a></div>

            <!-- <form> -->
              <!-- <div class="ui-body ui-body-d ui-corner-all"> -->
                  <!-- <p>Users...</p> -->
                 <!--  <div data-role="controlgroup" id="my-controlgroup"> --><!-- items will be injected here</div> -->
              <!-- </div> -->
            <!-- </form> -->
              <!-- <div class="ui-field-contain"> -->
                  <!-- <label type="radio" name="radio-widget" id="checkbox" for="append" value="#username-input" class="ui-hidden-accessible">Action</label> -->
                  <!-- <input id="username-input"></input> -->
                  <!-- <button id="append" data-mini="true" data-inline="true">Append</button> -->
              <!-- </div> -->


<!--             <form action="#" method="get">
                <div class="ui-field-contain">
                    <fieldset data-role="controlgroup" data-type="horizontal" data-mini="true">
                        <input type="radio" name="radio-widget" id="checkbox" value="checkbox">
                        <label for="checkbox">Checkbox</label>
                    </fieldset>
                </div>
                <div class="ui-field-contain">
                    <fieldset data-role="controlgroup" data-type="horizontal" data-mini="true">
                        <input type="radio" name="radio-orientation" id="isVertical" value="isVertical" checked="checked">
                        <label for="isVertical">Vertical</label>
                    </fieldset>
                </div>
            </form> -->

             <form>
                <div class="ui-body ui-body-d ui-corner-all">
                    <p>Teams you are admin of: </p>
                    <p class="teamAdmin">
                      <?php
                         while($row_team = mysql_fetch_array($result)) { 
                        echo $row_team['team_name'] . "<br>" ;
                     }
                     ?>
                   </p>

                   <p>All teams you are in: </p>
                    <p class="allTeams">
                      <?php
                         while($row_team2 = mysql_fetch_array($result_all_teams)) { 
                        echo $row_team2['team_name'] . "<br>" ;
                     }
                     ?>
                   </p>
                </div>
             </form>

         </div>

     </div>




    </body>
</html>