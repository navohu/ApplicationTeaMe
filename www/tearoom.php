<?php
session_start();
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
        <script type="text/javascript" src="js/tearoom.js"></script>
        <script>
            $(document).bind('mobileinit',function(){
                $.mobile.changePage.defaults.changeHash = false;
                $.mobile.hashListeningEnabled = false;
                $.mobile.pushStateEnabled = false;
            });
        </script>
        <script src="http://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.js"></script>
        <script src="http://cdn.pubnub.com/pubnub.min.js"></script>
        
        <!-- Include jQuery Mobile stylesheets -->
        <link rel="stylesheet" href="css/themes/Ninni.css" />
        <link rel="stylesheet" href="css/themes/jquery.mobile.icons.min.css" />
        
        <link rel="stylesheet" href="http://code.jquery.com/mobile/1.4.5/jquery.mobile.structure-1.4.5.min.css" /> 

    </head>
    <body>
        <!-- MESSAGE PAGE -->
        <div data-role="page" id="message">
        <!-- HEADER -->
            <div data-role="header">
                <h1>TeaRoom</h1>
            </div>
            <!-- MAIN BODY -->
            <div data-role="main" id="tearoom" class="ui-content">
                <a href="#myPopup" id="onlineNow" data-rel="popup"  data-position-to="window" class="ui-btn ui-btn-inline  ui-icon-user ui-btn-icon-left" data-iconpos="top"></a>
                <div data-role="popup" id="myPopup">
                    <ul data-role="listview" data-inset="true" id="userList" class="table-bordered userList ui-btn ui-btn-inline  ui-icon-user ui-btn-icon-left" >
                    </ul>
                </div>
                <div id="teaRoomHistory" class="table-bordered chatHistory"></div>
                <div id="timeLine"></div>

                <script type="text/javascript">
                    function join(){
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
                        // var dt = new Date();
                        // var time = dt.getHours() + ":" + dt.getMinutes() +  ":  ";
                        console.log(username);
                       
                        pubnub =PUBNUB.init({
                            publish_key : publish_key,
                            subscribe_key : subscribe_key,
                            uuid : username
                        });

                        pubnub.subscribe({
                            channel : channel,
                            callback : function(message) { 
                                $('#teaRoomHistory')[0].innerHTML = message + '<br/>' + $('#teaRoomHistory')[0].innerHTML; 
                            },
                            presence : function(state) { 
                                if (state.action == 'join') {
                                    if ($('#userList').text().indexOf(state.uuid) == -1) {
                                        $('#userList')[0].innerHTML = state.uuid + '<br/>' + $('#userList')[0].innerHTML;
                                    }
                                } else if (state.action == 'leave' || state.action == 'timeout' || state.action) { 
                                    var index = $('#userList')[0].innerHTML.indexOf(state.uuid);
                                    if ( index !== -1) {
                                        $('#userList')[0].innerHTML = 
                                            $('#userList')[0].innerHTML.substring(0,index) + 
                                            $('#userList')[0].innerHTML.substring(index+state.uuid.length+4);
                                    }
                                }
                                
                            }
                        });
                        pubnub.bind('click', pubnub.$('sendButton'), function(e) { 
                            pubnub.publish({
                                channel : channel, 
                                message : pubnub.get_uuid() + ' : '  + $('textarea#messageInput').val()
                            });
                            $('#messageInput').val('');
                        });

                        /*Publish message when clicking enter and also resets the textbox*/
                        $("#message").keydown(function(event){
                            if(event.keyCode == 13){
                                $("#sendButton").click();
                                $('textarea#messageInput').val(''); 
                            }
                        });
                    })();
                </script>

                <script type="text/javascript">
                    function leave() { 
                        pubnub.unsubscribe({
                            channel : channel,
                            callback : function() {
                                window.location = 'message.html';
                            }
                        });
                    }
                    // $(window).unload(leave());
                </script>
            </div>
            <!-- FOOTER -->
            <div data-role="footer">
            <div class="ui-grid-b" id="messageInputDiv">
                <!-- <div class="ui-block-a" id="break-leave"><button id="leaveButton" class="btn btn-danger leaveButton" onclick="leave()">Leave</button></div> -->
                <div class="ui-block-b" id="break-message"><textarea name="textarea" id="messageInput" placeholder="Enter your message here" class="message" contenteditable="true"></textarea></div>
                <div class="ui-block-b" id="break-send"><a id="sendButton" class="ui-btn btn-primary sendButton ui-icon-carat-r ui-btn-icon-left"></a></div>
            </div>
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
        <!-- Include the PubNub Library -->
        <script src="https://cdn.pubnub.com/pubnub-dev.js"></script>
    </body>
</html>
