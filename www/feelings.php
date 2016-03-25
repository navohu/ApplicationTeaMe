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
                <div class="ui-grid-b">
                    <div class="ui-block-a"><input class="emoji" type="image" value="cool" name="cool" src="img/1.png"></div>
                    <div class="ui-block-b"><input class="emoji" type="image" value="in love" name="in love" src="img/2.png"></div>
                    <div class="ui-block-c"><input class="emoji" type="image" value="satisfied" name="satisfied" src="img/3.png"></div>
                    <div class="ui-block-a"><input class="emoji" type="image" value="overwhelmed" name="overwhelmed" src="img/4.png"></div>
                    <div class="ui-block-b"><input class="emoji" type="image" value="sleepy" name="sleepy" src="img/5.png"></div>
                    <div class="ui-block-c"><input class="emoji" type="image" value="worked out" name="worked out" src="img/6.png"></div>
                    <div class="ui-block-a"><input class="emoji" type="image" value="happy" name="happy" src="img/7.png"></div>
                    <div class="ui-block-b"><input class="emoji" type="image" value="sad" name="sad" src="img/8.png"></div>
                    <div class="ui-block-c"><input class="emoji" type="image" value="angry" name="angry" src="img/9.png"></div>
                </div>
            </div>
            <div data-role="footer">
            <div data-role="navbar">
                <ul>
                  <li><a href="newsfeed.html" data-icon="home" data-ajax="false">Home</a></li>
                  <li><a href="tearoom.php" data-icon="comment" data-ajax="false">TeaRoom</a></li>
                  <li><a href="message.html" data-icon="check" data-ajax="false">Messaging</a></li>
                  <li><a href="feelings.html" data-icon="search" data-ajax="false">Feeling</a></li>
                  <li><a href="userpage.html" data-icon="check" data-ajax="false">User Page</a></li>
                </ul>
            </div>
          </div>
        </div>
    </body>
</html>