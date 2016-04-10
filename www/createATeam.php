<!-- <?php //include 'top-navigation.php' ?> -->

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
            <div data-role="header">
                <h1>Teams</h1>
            </div>

            <div class="container">
    <!-- <div class="row clearfix"> -->
        <div class="col-md-12">
            <!-- <h1 class="text-center">Welcome to TeaMe</h1> -->
            <h1 class="text-center">Create a new Team:</h1>
            <form>
              <div class="ui-body ui-body-d ui-corner-all">
                  <p>Users...</p>
                  <div data-role="controlgroup" id="my-controlgroup"><!-- items will be injected here --></div>
              </div>
            </form>
              <div class="ui-field-contain">
                  <label type="radio" name="radio-widget" id="checkbox" for="append" value="#username-input" class="ui-hidden-accessible">Action</label>
                  <input id="username-input"></input>
                  <button id="append" data-mini="true" data-inline="true">Append</button>
              </div>
        </div>
        


<div class="topcorner"><a href="teams.html" class="directing-buttons ui-btn ui-icon-arrow-l ui-btn-icon-left"></a></div>

<style type="text/css">
 .topcorner{
   position:absolute;
   top:0;
   left:0;
  }
</style>


            <form name="form" action="createTeam1.php" method="post">
                      <label for="txt-first-name">Type Team Name</label>
                      <input type="text" name="team_name" >
                      <input type="submit" name="submit" value="Create">

            </form>
        </div>
    </body>
</html>