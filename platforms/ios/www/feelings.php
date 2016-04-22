<!DOCTYPE html>
<?php session_start(); ?>
<html>
    <head>
        <!-- Meta tags -->
        <meta charset="utf-8" />
        <meta name="format-detection" content="telephone=no" />
        <meta name="msapplication-tap-highlight" content="no" />
        <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1, maximum-scale=1, minimum-scale=1, target-densitydpi=device-dpi" />

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
    <!-- <body onload="onBodyLoad()"> -->
        <!-- FEELING PAGE -->
        <div data-role="page" id="feeling">
            <div data-role="header">
                <h1>TeaMe</h1>
            </div>
            <div role="main" class="ui-content">
                <h3 id="feel-today-header">How do you feel today, <?php echo $_SESSION["uuid"]?> ?</h3>
                
                <form name="form" action="feelings1.php" method="post">
                <div class="ui-grid-b">
                    <div class="ui-block-a"><input class="emoji" type="image" value="cool" name="user_feeling" src="img/1.png"></div>
                    <div class="ui-block-b"><input class="emoji" type="image" value="in love" name="user_feeling" src="img/2.png"></div>
                    <div class="ui-block-c"><input class="emoji" type="image" value="satisfied" name="user_feeling" src="img/3.png"></div>
                    <div class="ui-block-a"><input class="emoji" type="image" value="overwhelmed" name="user_feeling" src="img/4.png"></div>
                    <div class="ui-block-b"><input class="emoji" type="image" value="sleepy" name="user_feeling" src="img/5.png"></div>
                    <div class="ui-block-c"><input class="emoji" type="image" value="worked out" name="user_feeling" src="img/6.png"></div>
                    <div class="ui-block-a"><input class="emoji" type="image" value="happy" name="user_feeling" src="img/7.png"></div>
                    <div class="ui-block-b"><input class="emoji" type="image" value="sad" name="user_feeling" src="img/8.png"></div>
                    <div class="ui-block-c"><input class="emoji" type="image" value="angry" name="user_feeling" src="img/9.png"></div>
                    
                </form>
                </div>

<!--                <form name="form" action="feelings1.php" method="post">
                    <div class="ui-block-b"><input class="emoji" type="image" value="in love" name="user_feeling" src="img/2.png"></div>
                    <div class="ui-block-a"><input type="submit" name="cool" value="Cool"></div>
               </form> -->

<!--             </div>
            <div data-role="footer">
            <div data-role="navbar">
                <ul>
                  <li><a href="newsfeed.html" data-icon="home" data-ajax="false">Home</a></li>
                  <li><a href="tearoom.php" data-icon="comment" data-ajax="false">TeaRoom</a></li>
                  <li><a href="message.html" data-icon="check" data-ajax="false">Messaging</a></li>
                  <li><a href="feelings.php" data-icon="search" data-ajax="false">Feeling</a></li>
                  <li><a href="userpage.php" data-icon="check" data-ajax="false">User Page</a></li>
                </ul>
            </div>
          </div>
        </div> -->
    </body>
</html>