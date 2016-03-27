<?php

require('config.php');
session_start();

$uname = $_SESSION["uuid"];

   $sql = "SELECT * FROM Users WHERE uname = '$uname'";
   $result = mysql_query($sql);

   $row = mysql_fetch_array($result);

?>

            <div data-role="header">
                <ul>
                  <li><a href="userpage.php" data-icon="edit" data-ajax="false">View Updated Profile</a></li>
                </ul>
            </div>


<form name="form" action="update-details.php" method="post">

    <ul class="tabs">
      <li class="active"><a href="#general" data-toggle="tab">General</a></li>
      <li><a href="#personal" data-toggle="tab">Personal</a></li>
    </ul>
    <!-- Tab panes -->

                <div class="">                      
                    <label for="">First Name</label>
                    <input type="text" class="form-control" placeholder="<?php echo $row['fname'];?>" name="user_fname" value="<?php echo $row['fname'];?>">
                </div>
                <div class="">  
                    <label for="">Last Name</label>
                    <input type="text" class="form-control" placeholder="<?php echo $row['lname'];?>" name="user_lname" value="<?php echo $row['lname'];?>">
                </div>

                <div class="">
                    <label for="">Username</label>
                    <input type="text" class="form-control" placeholder="<?php echo $row['uname'];?>" name="user_username" value="<?php echo $row['uname'];?>">
                </div>

                <div class="">
                    <label for="">Password</label>
                    <input type="password" class="form-control" placeholder="<?php echo $row['pass'];?>" name="user_password" value="<?php echo $row['pass'];?>">
                </div>
                <div class="">
                    <label for="">Email</label> 
                    <input type="text" class="form-control" placeholder="<?php echo $row['email'];?>" name="user_email" value="<?php echo $row['email'];?>">
                </div>  

            	<div class="">
                    <label for="">Feeling</label>
                    <input type="text" class="form-control" placeholder="<?php echo $row['user_feeling'];?>" name="user_feeling" value="<?php echo $row['user_feeling'];?>" id="feeling">    
                </div>

                <div class="">
                    <label for="">Location</label>
                    <input type="text" class="form-control" placeholder="<?php echo $row['user_location'];?>" name="user_location" value="<?php echo $row['user_location'];?>" id="location">    
                </div>

                <div class="">
                    <label for="">Status</label>
                    <input type="text" class="form-control" placeholder="<?php echo $row['user_status'];?>" name="user_status" value="<?php echo $row['user_status'];?>" id="status">    
                </div>


                <div class="">
                    <label for="">Short Bio</label>
                    <textarea class="form-control" placeholder="<?php echo $row['user_shortbio'];?>" rows="10" placeholder="<?php echo $row['user_shortbio'];?>" name="user_shortbio" value="<?php echo $row['user_shortbio'];?>"><?php echo $row['user_shortbio'];?></textarea>
                </div>
                <div class="">
                    <label for="">Birthday</label>   
                    <input type="date" class="form-control" placeholder="<?php echo $row['user_dob'];?>" name="user_dob" value="<?php echo $row['user_dob'];?>">      
                </div>

                <label for="">Gender</label>              
                <div class="">
                    <div class="">
                        <label>
                            <input type="radio" name="user_gender" id="radioButton1" value="Male">Male</label>
                    </div>              
                    <div class="">
                        <label>
                            <input type="radio" name="user_gender" id="radioButton2" value="Female">Female</label>
                    </div>
                </div>
                <div class="">
                    <label for="">Country</label>
                    <input type="text" class="form-control" placeholder="<?php echo $row['user_country'];?>" name="user_country" value="<?php echo $row['user_country'];?>" id="country">    
                </div>    
    <br>

    <input type="submit" name="submit" value="Submit">

</form>