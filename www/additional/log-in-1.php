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
        <script type="text/javascript" src="js/tearoom.js"></script>
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
        <link rel="stylesheet" href="css/index.css" />
        <link rel="stylesheet" href="css/jquery.mobile-1.4.5.css" />
        <link href="css/themes/1/teame-theme-1.min.css" rel="stylesheet" />
        <link href="css/themes/1/jquery.mobile.icons.min.css" rel="stylesheet" />
        <link href="../../lib/jqm/1.4.5/jquery.mobile.structure-1.4.5.min.css" rel="stylesheet" />
        <link href="css/application.css" rel="stylesheet" />

    </head>

    <body onload="onBodyLoad()">
        <!-- HOME PAGE -->
        <div data-role="page" id="home">
            <div data-role="header">
                <h1>TeaMe</h1>
            </div>
            <!-- MAIN BODY -->
            <div role="main" class="ui-content">
            <h3>Log In</h3>
            

            <!-- PHP -->
            <form name="form" action="login.php" method="post">
                <label for="txt-email">Email Address</label>
                <input type="text" name="uname" id="uname" value=""> 
                <label for="txt-password">Password</label>
                <input type="password" name="pass" id="pass" value="">
            </form>

            <fieldset data-role="controlgroup">
                <input type="checkbox" name="chck-rememberme" id="chck-rememberme" checked="">
                <label for="chck-rememberme">Remember me</label>
            </fieldset>
            <a href="#dlg-invalid-credentials" data-rel="popup" data-transition="pop" data-position-to="window" id="btn-submit" class="ui-btn ui-btn-b ui-corner-all mc-top-margin-1-5">Submit</a>
            <p class="mc-top-margin-1-5"><a href="begin-password-reset.html">Can't access your account?</a></p>
            <div data-role="popup" id="dlg-invalid-credentials" data-dismissible="false" style="max-width:400px;">
                <div role="main" class="ui-content">
                    <h3 class="mc-text-danger">Login Failed</h3>
                    <p>Did you enter the right credentials?</p>
                    <div class="mc-text-center"><a href="#" data-rel="back" class="ui-btn ui-corner-all ui-shadow ui-btn-b mc-top-margin-1-5">OK</a></div>
                </div>
            </div>
        </div><!--/content-->
        </div>     
    </body>
</html>
