var iWebkit;if(!iWebkit){iWebkit=window.onload=function(){function fullscreen(){var a=document.getElementsByTagName("a");for(var i=0;i<a.length;i++){if(a[i].className.match("noeffect")){}else{a[i].onclick=function(){window.location=this.getAttribute("href");return false}}}}function hideURLbar(){window.scrollTo(0,0.9)}iWebkit.init=function(){fullscreen();hideURLbar()};iWebkit.init()}}

//fix for links to open inside the app instead of safari when the app is added to the homescreen.
	var a=document.getElementsByTagName("a");
	for(var i=0;i<a.length;i++) {
		a[i].onclick=function()
		{
			window.location=this.getAttribute("href");
			return false;
		}
	}