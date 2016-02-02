/*Creating a PubNub Chat forum for 1:1 messaging*/
function displayCallback(m,e,c,d,f){
	console.log(JSON.stringify(m, null, 4));
}

var channelgroup = "work";

pubnub.channel_group_add_channel(){
	callback: displayCallback,
	error: displayCallback,
	channel_group: channelgroup,
	channel: "Ian, Maria, Sara"
}

pubnub.subscribe{
	channel_group: channelgroup,
	callback: displayCallback,
	error: displayCallback
}

function chat(){
	var mychannel = PUBNUB({
                publish_key: 'pub-c-1d031e2d-de94-4a51-a7af-34e61c1083be',
                subscribe_key: 'sec-c-NGRmNmFjOTQtYWYxYy00Yzg0LTg5NzAtMDc4MTBhY2M5ZTY4'
            });
	var chat = PUBNUB.$('box'), input = PUBNUB.$('input'), channel = 'chat';
	var date = new Date();
	var now = date.now();


	mychannel.subscribe({
		channel: 'my_channel',
	    message: function(m){console.log(m)},
	    connect: pubnub.publish({
               channel: 'my_channel',        
               message: 'Hello from the PubNub Javascript SDK'
            }),
	    error: function (error) {
	      // Handle error here
	      console.log(JSON.stringify(error));
	    }
	});

	// mychannel.subscribe({
	//     channel  : channel,
	//     callback : function(text)
	//     	{ 
	//     		box.innerHTML = (''+text).replace( /[<>]/g, '' ) + '<br>' + box.innerHTML 
	//     	}
	// });

	
	// pubnub.publish({
	//     channel: 'my_channel',        
	//     message: 'Hello from the PubNub Javascript SDK!',
	//     callback : function(m){console.log(m + now.getHours() + now.getMinutes())}
	// });
}


var EnterKey = 13;

$.fn.isBound = function(type, fn) {
    var data = this.data('events')[type];

    if (data === undefined || data.length === 0) {
        return false;
    }

    return (-1 !== $.inArray(fn, data));
};

$(document).ready(function() {
		function runBind() {
        $('.destroy').on('click', function(e) {
          $currentListItem = $(this).closest('li');

          $currentListItem.remove();
        });

        $('.toggle').on('click', function(e) {
          var $currentListItemLabel = $(this).closest('li').find('label');
		  /*
		   * Do this or add css and remove JS dynamic css.
		   */
		  if ( $currentListItemLabel.attr('data') == 'done' ) {
			  $currentListItemLabel.attr('data', '');
		      $currentListItemLabel.css('text-decoration', 'none');
		  }
		  else {
			  $currentListItemLabel.attr('data', 'done');
        $currentListItemLabel.css('text-decoration', 'line-through');
		  }
			});
		}
	
	$todoList = $('#todo-list');
	$('#new-todo').keypress(function(e) {
    if (e.which === EnterKey) {
			$('.destroy').off('click');
			$('.toggle').off('click');
			var todos = $todoList.html();
      todos += ""+
				"<li>" +
          "<div class='view'>" +
            "<input class='toggle' type='checkbox'>" +
            "<label data=''>" + " " + $('#new-todo').val() + "</label>" +
            "<a class='destroy'></a>" +
          "</div>" +
        "</li>";
   	  
	  $(this).val('');
		$todoList.html(todos);
		runBind();
		$('#main').show();
    
    chat();
  }}); // end if
});


