<!DOCTYPE html>
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

        <!-- Emoticons -->
        <script type="text/javascript" src="jquery-1.8.0.min.js"></script>
        <script type="text/javascript" src="emoticons.js"></script>
        
        <!-- Include jQuery Mobile stylesheets -->
        <link rel="stylesheet" href="css/themes/Ninni.css" />
        <link rel="stylesheet" href="css/themes/jquery.mobile.icons.min.css" />
        
        <link rel="stylesheet" href="http://code.jquery.com/mobile/1.4.5/jquery.mobile.structure-1.4.5.min.css" /> 
        <link href="emoticons.css" rel="stylesheet" type="text/css"/>

    </head>
    <body onload="onBodyLoad()">
        <!-- HOME PAGE -->
        <div data-role="page" id="home">
            <div data-role="header">
                <h1>TeaMe</h1>
            </div>
            <div data-role="main" class="ui-content">
                <p>Messaging</p>
            </div>
            <div data-role="footer" >
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
