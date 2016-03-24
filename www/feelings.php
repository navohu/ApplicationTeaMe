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
        <link rel="stylesheet" type="text/css" href="css/themes/jquery.mobile.icons.min.css">
        <link rel="stylesheet" type="text/css" href="css/themes/TeaMe.min.css">
        <link rel="stylesheet" href="css/jquery.mobile-1.4.5.css" />

    </head>
    <!-- <body onload="onBodyLoad()"> -->
        <!-- FEELING PAGE -->
        <div data-role="page" id="feeling">
            <div data-role="header">
                <h1>TeaMe</h1>
            </div>
            <div data-role="main" class="ui-content">
                <p>FEELING</p>
            </div>

             <script type="text/javascript">
                    function join(){
                        debugger;
                        var uuid = '<?php echo $_SESSION["uuid"]?>';
                        console.log(uuid);
                        // window.location = 'tearoom.html?uuid=' + uuid;
                    }
                    $("#userName").keydown(function(event){
                        if(event.keyCode == 13){
                            $("#joinChannel").click();
                        }
                    });
                </script>

                <script type="text/javascript">
                    $(document).ready(join());
                    (function() { 
                        var publish_key = 'pub-c-39594782-c4b0-4fb3-80fe-74e262353bf6';
                        var subscribe_key = 'sub-c-7ae61028-e9dd-11e3-92e7-02ee2ddab7fe';
                        channel = 'myChat';
                        var username = '<?php echo $_SESSION["uuid"]?>';
                        console.log(username);
                       
                        pubnub =PUBNUB.init({
                            publish_key : publish_key,
                            subscribe_key : subscribe_key,
                            uuid : username
                        });
</script>

            <div role="main" class="ui-content">
        <h3>How do you feel today, <?php echo $_SESSION["uuid"]?> ?</h3>

        <form name="form" action="feelings1.php" method="post">

          <label for="txt-user-feeling">Enter your mood:</label>
          <input type="text" name="user_feeling" >
          <input type="submit" name="submit" value="Submit">
 </form>


            <div data-role="footer">
            <div data-role="navbar">
                <ul>
                  <li><a href="newsfeed.html" data-icon="home" data-ajax="false">Home</a></li>
                  <li><a href="tearoomInit.html" data-icon="comment" data-ajax="false">TeaRoom</a></li>
                  <li><a href="message.html" data-icon="check" data-ajax="false">Messaging</a></li>
                  <li><a href="feelings.php" data-icon="search" data-ajax="false">Feeling</a></li>
                  <li><a href="userpage.html" data-icon="check" data-ajax="false">User Page</a></li>
                </ul>
            </div>
          </div>
        </div>
    </body>
</html>