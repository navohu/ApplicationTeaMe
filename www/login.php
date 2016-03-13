<?php
require('config.php');

if(isset($_POST['submit']))
{
 $uname = mysql_escape_string($_POST['uname']);
 $pass = mysql_escape_string($_POST['pass']);
 $pass = md5($pass);

 $check = mysql_query("SELECT * FROM `users` WHERE `uname` = '$uname' AND `pass` = '$pass'");
 if(mysql_num_rows($check) >= 1){
  echo "You are now logged in!";
  exit();
 }
 else{

  echo "Wrong username or password";
 }
}
else{

 $form = <<<EOT
 <body onload="onBodyLoad()">
        <!-- HOME PAGE -->
        <div data-role="page" id="home">
            <div data-role="header">
                <h1>TeaMe</h1>
            </div>
            <!-- MAIN BODY -->
           <!--  <div role="main" class="ui-content">
            <h3>Log In</h3>
            <label for="txt-email">Email Address</label>
            <input type="text" name="txt-email" id="txt-email" value="">
            <label for="txt-password">Password</label>
            <input type="password" name="txt-password" id="txt-password" value="">
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
        </div><!/content -->
        </div>     
    </body>

EOT;

echo $form;
}
?>



EOT;

echo $form;
}
?>

