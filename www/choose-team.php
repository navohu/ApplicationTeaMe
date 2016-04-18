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
            <div data-role="header"><h1>Choose a Team</h1></div>
            <div class="container">
            <div class="col-md-12"><h1 class="text-center">All teams you are in:</h1></div>
            <div class="topleftcorner"><a href="login.html" class="directing-buttons ui-btn ui-icon-arrow-l ui-btn-icon-left"></a></div>
            <div class="toprightcorner"><li><a href="login.html" class="directing-buttons ui-btn ui-icon-back ui-btn-icon-left" data-icon="back" data-ajax="false">Logout</a></li></div>

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

             <form name="form" action="choose-team-1.php" method="post">

                <div class="ui-body ui-body-d ui-corner-all">

<?php
                  while($row_team2 = mysql_fetch_array($result_all_teams)) {  ?>

                  <div class="ui-block-a"><input class="teams" type="button" value="<?php
                        echo $row_team2['team_name'];?>" name="team_name"> 

                   </div>

   <?php   }
       ?> 

                </div>
             </form>

         </div>

     </div>




    </body>
</html>