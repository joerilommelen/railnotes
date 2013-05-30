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
				
				$("#gaterug").click(function() {
				
				  	   location.href = 'index.php'+$(this).serialize();
				
				});
			
			
			
			
			
			
			
			});
	
