/*
 * JQuery functions for slideout feedback form
 * 
 * Sets up a sliding form on click of a feedback button
 * On submit button will send the data to a php script
 * 
 * By http://www.paulund.co.uk
 */
(function ($j) {

  feedback_button = {

    onReady: function () {      
      this.feedback_button_click();
      this.send_feedback();
    },
    
    feedback_button_click: function(){
    	$("#feedback_button").click(function(){
    		$('.form').slideToggle();   		
    	});
    },
    
    send_feedback: function(){
    	$('#submit_form').click(function(){
    		if($('#feedback_text').val() != ""){
    			
    			$('.status').text("");
    			
    			$.ajax({  
    				type: "POST",  
      			  	url: "./process_email.php",  
      			  	data: 'feedback=' + $('#feedback_text').val(),  
	      			success: function(result,status) { 
	      				//email sent successfully displays a success message
	      				if(result == 'Message Sent'){
	      					$('.status').text("Feedback Sent");
	      				} else {
	      					$('.status').text("Feedback Failed to Send");
	      				}
	      			},
	      			error: function(result,status){
	      				$('.status').text("Feedback Failed to Send");
	      			}  
      			});
    		}
    	});
    },
    
    
  };

  $j().ready(function () {
	  feedback_button.onReady();
  });

})(jQuery);	
