
<?php
require('config.php');

?>

            <div data-role="header">
                <ul>
                  <li><a href="createATeam.html" data-icon="edit" data-ajax="false">Go to "Create A Team" page</a></li>
                </ul>
            </div>

     <form name="form" action="addManually.php" method="post">
           <div class="">                      
                    <label for="">Enter User Name:</label>
                     <input type="text" name="uname" >
            </div>

            <input type="submit" name="submit" value="Done">

     </form>