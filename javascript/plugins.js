// Avoid `console` errors in browsers that lack a console.
(function() {
    var method;
    var noop = function () {};
    var methods = [
        'assert', 'clear', 'count', 'debug', 'dir', 'dirxml', 'error',
        'exception', 'group', 'groupCollapsed', 'groupEnd', 'info', 'log',
        'markTimeline', 'profile', 'profileEnd', 'table', 'time', 'timeEnd',
        'timeStamp', 'trace', 'warn'
    ];
    var length = methods.length;
    var console = (window.console = window.console || {});

    while (length--) {
        method = methods[length];

        // Only stub undefined methods.
        if (!console[method]) {
            console[method] = noop;
        }
    }
}());

// Place any jQuery/helper plugins in here.


			$(document).ready(function(){
				
				
				$("#registreren").click(function() {
				
				  	   location.href = 'registreren.php'+$(this).serialize();
				
				});
				
				$("#aanmelden").click(function() {
				
				  	   location.href = 'aanmelden.php'+$(this).serialize();
				
				});
				
				
				$("#form-registreer").submit(function(){
					
				var myData = $('#form-registreer').serialize();
			
				$.ajax({
				    type: "POST",
			
				    //URL of the php file that will process the login
				    url: "registreer.php",
				    
				    dataType: 'json',
			
				    //Pass the data through
				    data: myData,
			
				    //Handle the response
				    success: function (data) {
			
			        switch(data.case){
			       
					case 1: 
					$(".feedback").html(data.message).fadeIn('slow');
					
			        break;
			       
					case 2:      
			        $(".feedback").html(data.message).fadeIn('slow');
			        break;
			        
			        case 3: 
			        $(".feedback").html(data.message).fadeIn('slow');
			        break;
			        
			        case 4: 
			        $(".feedback").html(data.message).fadeIn('slow');
			        break;
			        
			        default:
			        /* If none of the above */
			
			        }
			}			 
				})	
			
				//Stop the submit button from submitting the form 
				return false;   
			    });    
			
										
			
			
			
			
			
			
			});
	
