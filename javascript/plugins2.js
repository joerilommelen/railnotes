
$(document).ready(function(){
				
			
	$("#form-aanmelden").submit(function(){
					
				var myData = $('#form-aanmelden').serialize();
			
				$.ajax({
				    type: "POST",
			
				    //URL of the php file that will process the login
				    url: "meldaan.php",
				    
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
			        window.location.replace("overzicht.php");
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
	
