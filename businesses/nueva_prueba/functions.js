// Function for menu toggle
var flag = 0;
var flag2 = 0;

var screenWidth = 0;
var screenHeight = 0;

	

// Functions for window size monitoring
var oldWindowSize = 0;
var oldHeightSize = 0;
var actualsize = 0;
var dimensionsDifference = 0;
			
			$(document).ready(function(){
				
				
				
				windowSizing();
				setInterval("windowSizing()", 200);
							
			});
			
			function windowSizing(){
				
				windowwidth = window.outerWidth;
				bodywidth = $("body").width();
				sizediff = windowwidth - bodywidth;
				
				
				actualsize = $("html").width();
											
				//windowSizeHeight = $("html").outerHeight();
				//windowSizeHeight = screen.height;
				windowSizeHeight = $(window).height();
				
				//if((oldWindowSize != actualsize) || (oldHeightSize != windowSizeHeight)){
				if(oldWindowSize != actualsize){
					
					monitoringWindowWidth();
					
					
				}
				
				oldWindowSize = actualsize;
				oldHeightSize = windowSizeHeight;
			
			}
			
			function monitoringWindowWidth(){
				
					
				if( /Windows|CrOS|Mac OS|Android/i.test(navigator.userAgent))  {
				
				
					
				}
				
				if( /iPad|iPhone/i.test(navigator.userAgent))  {
				
					
					
				}
				
				
				/*	
				if( ((actualsize > 500) && (/Windows|CrOS|Mac OS/i.test(navigator.userAgent))) ||
					((actualsize > 500) && (/Linux/i.test(navigator.userAgent)) && !(/Android/i.test(navigator.userAgent)) ) ||
					((/Android/i.test(navigator.userAgent)) && !(/Mobile/i.test(navigator.userAgent)) ) ||
					(/iPad/i.test(navigator.userAgent))
					){
						tabletVersion();
					}
								
				
				
				if( ((actualsize <= 500) && (/Windows|CrOS|Mac OS/i.test(navigator.userAgent))) ||
					((actualsize <= 500) && (/Linux/i.test(navigator.userAgent)) && !(/Android/i.test(navigator.userAgent)) ) ||
					((/Android/i.test(navigator.userAgent)) && (/Mobile/i.test(navigator.userAgent)) ) ||
					(/iPhone/i.test(navigator.userAgent))
					){
						mobileVersion();
					}
				*/
				
				if(device == "normal")
					{
						//tabletVersion();
						
						if( ((actualsize > 500) && (/Windows|CrOS|Mac OS/i.test(navigator.userAgent))) ||
							((actualsize > 500) && (/Linux/i.test(navigator.userAgent)) && !(/Android/i.test(navigator.userAgent)) )
							
							){
								tabletVersion();
								
						} else if( ((actualsize <= 500) && (/Windows|CrOS|Mac OS/i.test(navigator.userAgent))) ||
							((actualsize <= 500) && (/Linux/i.test(navigator.userAgent)) && !(/Android/i.test(navigator.userAgent)) )
							){
								mobileVersion();
							
							} else {
								
								tabletVersion();
								
							}
							
														
					}
								
				
				
				if(device == "mobile")
					{
						mobileVersion();
					}
				
				
				//var x = "User-agent header sent: " + navigator.userAgent;
				
				
				//$(".monitor").html(actualsize+"px<br/>"+windowSizeHeight+"px");
				//$(".monitor").html(x);
			
			}
			
			function tabletVersion(){
				
				
				$('.description').insertBefore('.coupon');
				$('.description').insertBefore('.form');
			
				$('.coupon, .form').css({
					"width": "48%",
					
					
				});
				
				$('.description').css({
					"width": "43%",
					"padding-left": "5%",
					"padding-right": "0",
					//"border": "1px solid red",
					
				});
				
				$('.contact-information').css({
					"width": "55%",
					"margin-bottom": "0",
					//"border": "1px solid red",
					
				});
				
				$('.map').css({
					"width": "40%",
					//"border": "1px solid red",
					
				});
				
				$('.map iframe').css({
					"width": "80%",
					//"border": "1px solid red",
					
				});
				
				$('.coupon-title').css({
					"font-size": "300%",
					//"border": "1px solid red",
					
				});
				
				$('.business-form').css({
					"width": "50%",
					"padding-left": "5%",
					"padding-right": "5%",
					"padding-top": "5%",
					
					
				});

				/*$('.form, .coupon').css({
					"display": "block",
					
					
				});
				$('.form-mobile, .coupon-mobile').css({
					"display": "none",
					
					
				});*/

				
				$('.coupon-contents form').css({
					"position": "absolute",
					
					
				});
				/*$('.coupon-contents p').css({
					"position": "absolute",
					"left": "2%",
					
					
				});*/
				
				
				
			}
			
			function mobileVersion(){
				
				$('.coupon').insertBefore('.description');
				$('.form').insertBefore('.description');
				
				/*$('.form-mobile, .coupon-mobile').css({
					"width": "100%",
					
					
				});*/

				$('.form, .coupon').css({
					"width": "100%",
					
					
				});
				
				$('.description').css({
					"width": "90%",
					"padding-left": "5%",
					"padding-right": "5%",
					
					
				});
				
				$('.contact-information').css({
					"width": "100%",
					"margin-bottom": "40px",
					
					
				});
				
				$('.map').css({
					"width": "100%",
					
					
				});
				
				$('.map iframe').css({
					"width": "100%",
					
					
				});
				
				$('.coupon-title').css({
					"font-size": "200%",
					
					
				});
				
				$('.business-form').css({
					"width": "95%",
					"padding-left": "2%",
					"padding-right": "2%",
					"padding-top": "2%",
					
					
				});

				/*$('.form, .coupon').css({
					"display": "none",
					
					
				});*/
				/*$('.form-mobile, .coupon-mobile').css({
					"display": "block",
					
					
				});*/

				
				$('.coupon-contents form').css({
					"position": "relative",
					
					
				});
				/*$('.coupon-contents p').css({
					"position": "relative",
					"left": "0%",
					
					
				});*/
		
				
				
			}
			

			function validate() {
				    	
				    	var name = document.forms['business-form'].elements['nombre'].value;
				    	var phone = document.forms['business-form'].elements['telefono'].value;
				    	var email = document.forms['business-form'].elements['correo'].value;
				    	var email2 = document.forms['business-form'].elements['correo2'].value;
				    	
				    	
				    	if (/\s/i.test(email)) {
						    alert("Hay espacios en blanco en su correo electronico, antes, en medio o al final");
						    return false;
						}
						if (!(/@/i.test(email))) {
						    alert("Su correo no es valido");
						    return false;
						}	
						if (!(/\./i.test(email))) {
						    alert("Su correo no es valido");
						    return false;
						}
						if (/\s/i.test(email2)) {
						    alert("Hay espacios en blanco en su correo electronico, antes, en medio o al final");
						    return false;
						}
						if (!(/@/i.test(email2))) {
						    alert("Su correo no es valido");
						    return false;
						}	
						if (!(/\./i.test(email2))) {
						    alert("Su correo no es valido");
						    return false;
						}	
						if (/\[|\]|\(|\)|\{|\}|\\|\/|\$|\^|\+|\&|\"|\'|\;|\:|\*|\!|\?|\#|\%|\=|\||\,|\>|\</i.test(email)) {
						    alert("Su correo no es valido");
						    return false;
						}
						if (/\[|\]|\(|\)|\{|\}|\\|\/|\$|\^|\+|\&|\"|\'|\;|\:|\*|\!|\?|\#|\%|\=|\||\,|\>|\</i.test(email2)) {
						    alert("Su correo no es valido");
						    return false;
						}
						if (/\[|\]|\(|\)|\{|\}|\\|\/|\$|\^|\+|\&|\"|\'|\;|\:|\*|\!|\?|\#|\%|\=|\||\,|\>|\<|\./i.test(name)) {
						    alert("Su nombre contiente caracteres no validos");
						    return false;
						}
						
						if ( email.indexOf("@@") != -1 ) {
							alert("Su correo no es valido");
						    return false;
						}
						
						if ( email.indexOf("..") != -1 ) {
							alert("Su correo no es valido");
						    return false;
						}
						
						if ( email.indexOf(".@") != -1 ) {
							alert("Su correo no es valido");
						    return false;
						}
						
						if ( email.indexOf("@.") != -1 ) {
							alert("Su correo no es valido");
						    return false;
						}
						
						
						if ( email2.indexOf("@@") != -1 ) {
							alert("Su correo no es valido");
						    return false;
						}
						
						if ( email2.indexOf("..") != -1 ) {
							alert("Su correo no es valido");
						    return false;
						}
						
						if ( email2.indexOf(".@") != -1 ) {
							alert("Su correo no es valido");
						    return false;
						}
						
						if ( email2.indexOf("@.") != -1 ) {
							alert("Su correo no es valido");
						    return false;
						}
				    	
				    	if (email != email2){
							
							alert("Favor de corregir el correo");
							return false;
							
						}
		
						
							if(name == ""){
								alert("Escriba su nombre");
								return false;
								
							}
							if(phone == ""){
								alert("Escriba su telefono");
								return false;
								
							}
							if(email == ""){
								alert("Escriba su email");
								return false;
								
							}	
							
							return true;

				}


			function validate2() {
				    	
				    	var name = document.forms['business-form-mobile'].elements['nombre'].value;
				    	var phone = document.forms['business-form-mobile'].elements['telefono'].value;
				    	var email = document.forms['business-form-mobile'].elements['correo'].value;
		
						
						if (/\s/i.test(email)) {
						    alert("Hay espacios en blanco en su correo electronico, antes, en medio o al final");
						    return false;
						}
						if (!(/@/i.test(email))) {
						    alert("Su correo no es valido");
						    return false;
						}	
						if (!(/\./i.test(email))) {
						    alert("Su correo no es valido");
						    return false;
						}	
						if (/\[|\]|\(|\)|\{|\}|\\|\/|\$|\^|\+|\&|\"|\'|\;|\:|\*|\!|\?|\#|\%|\=|\||\,|\>|\</i.test(email)) {
						    alert("Su correo no es valido");
						    return false;
						}
						if (/\[|\]|\(|\)|\{|\}|\\|\/|\$|\^|\+|\&|\"|\'|\;|\:|\*|\!|\?|\#|\%|\=|\||\,|\>|\<|\./i.test(name)) {
						    alert("Su nombre contiente caracteres no validos");
						    return false;
						}
						
						if ( email.indexOf("@@") != -1 ) {
							alert("Su correo no es valido");
						    return false;
						}
						
						if ( email.indexOf("..") != -1 ) {
							alert("Su correo no es valido");
						    return false;
						}
						
						if ( email.indexOf(".@") != -1 ) {
							alert("Su correo no es valido");
						    return false;
						}
						
						if ( email.indexOf("@.") != -1 ) {
							alert("Su correo no es valido");
						    return false;
						}
						
						
						
							if(name == ""){
								alert("Escriba su nombre");
								return false;
								
							}
							if(phone == ""){
								alert("Escriba su telefono");
								return false;
								
							}
							if(email == ""){
								alert("Escriba su email");
								return false;
								
							}	
							
							return true;

				}

				function printCoupon(){				    	
				    	var x = document.forms[0].elements['nombre'].value;
						var y = document.forms[0].elements['email'].value;
						var z = document.forms[0].elements['email2'].value;
						
						if (/\s/i.test(y)) {
						    alert("Hay espacios en blanco en su correo electronico, antes, en medio o al final");
						    return false;
						}
						if (!(/@/i.test(y))) {
						    alert("Su correo no es valido");
						    return false;
						}	
						if (!(/\./i.test(y))) {
						    alert("Su correo no es valido");
						    return false;
						}	
						if (/\[|\]|\(|\)|\{|\}|\\|\/|\$|\^|\+|\&|\"|\'|\;|\:|\*|\!|\?|\#|\%|\=|\||\,|\>|\</i.test(y)) {
						    alert("Su correo no es valido");
						    return false;
						}
						
						if (/\s/i.test(z)) {
						    alert("Hay espacios en blanco en su correo electronico, antes, en medio o al final");
						    return false;
						}
						if (!(/@/i.test(z))) {
						    alert("Su correo no es valido");
						    return false;
						}	
						if (!(/\./i.test(z))) {
						    alert("Su correo no es valido");
						    return false;
						}	
						if (/\[|\]|\(|\)|\{|\}|\\|\/|\$|\^|\+|\&|\"|\'|\;|\:|\*|\!|\?|\#|\%|\=|\||\,|\>|\</i.test(z)) {
						    alert("Su correo no es valido");
						    return false;
						}
						
						
						if (/\[|\]|\(|\)|\{|\}|\\|\/|\$|\^|\+|\&|\"|\'|\;|\:|\*|\!|\?|\#|\%|\=|\||\,|\>|\<|\./i.test(x)) {
						    alert("Su nombre contiente caracteres no validos");
						    return false;
						}
						
						if ( y.indexOf("@@") != -1 ) {
							alert("Su correo no es valido");
						    return false;
						}
						
						if ( y.indexOf("..") != -1 ) {
							alert("Su correo no es valido");
						    return false;
						}
						
						if ( y.indexOf(".@") != -1 ) {
							alert("Su correo no es valido");
						    return false;
						}
						
						if ( y.indexOf("@.") != -1 ) {
							alert("Su correo no es valido");
						    return false;
						}
						
						if ( z.indexOf("@@") != -1 ) {
							alert("Su correo no es valido");
						    return false;
						}
						
						if ( z.indexOf("..") != -1 ) {
							alert("Su correo no es valido");
						    return false;
						}
						
						if ( z.indexOf(".@") != -1 ) {
							alert("Su correo no es valido");
						    return false;
						}
						
						if ( z.indexOf("@.") != -1 ) {
							alert("Su correo no es valido");
						    return false;
						}
						
						if (y != z){
							
							alert("Favor de corregir el correo");
							return false;
							
						}
						
						
						if(flag == 0){
							if(x == ""){
								alert("Escriba su nombre");
								return false;								
							} 

							if(y == ""){
								alert("Escriba su correo electronico");
								return false;
							}
							
							if(z == ""){
								alert("Escriba su correo electronico");
								return false;
							}
	
							if((x != "") && (y != "") && (z != "")) {
								flag = 1;
								return true;
							}
				      } else {				      	
				      	alert("Ya imprimio su cupon");
				      	//window.location.href='https://soundcloud.com/click-mx/mas-alla-del-marketing-parte-2';
				      	//alert(flag);
				      	return false;				      	
				      }
				    }				    
				    function monitor(){
				    	if(flag == 1){				    		
				    		window.location.href='https://soundcloud.com/click-mx/mas-alla-del-marketing-parte-2';
				    	}				    	
				    }				    
				    //setInterval(monitor, 5000);	
				    
				    
				    
var xmlHttp = createXmlHttpRequestObject();

function createXmlHttpRequestObject(){
	
	var xmlHttp;
	
	if(window.XMLHttpRequest){
		
		xmlHttp = new XMLHttpRequest();
		
	} else {
		
		xmlHttp = new ActiveXObject("Microsoft.XMLHTTP");
		
	}
	
	return xmlHttp;
	
	
}

function process(clickScore, idRate, idDevice, userPosition){
	
	if(xmlHttp){
		
		try{
			
			xmlHttp.open("GET", "process.php?clickScore=" + clickScore + "&idRate=" + idRate + "&idDevice=" + idDevice+ "&userPosition=" + userPosition, true);
			//xmlHttp.onreadystatechange = handleServerResponse;
			xmlHttp.send(null);
			
		} catch(e){
			
			alert(e.toString());
			
		}
		
	}
	
}

function handleServerResponse(){
	
	theD = document.getElementById('theD');
	
	if(xmlHttp.readyState == 4 && xmlHttp.status == 200){
		
		
				//text = xmlHttp.responseText;
				//theD.innerHTML = '<a href = "coupon.php?device=<?php echo $device; ?>"><img class = "imgCoupon" src = "<?php echo $row['coupon_image']; ?>"></a>';
				//theD.innerHTML += document.cookie;
				//theD.innerHTML += '<div class="divClass" data-webRating="0" data-webRatingN="5" data-webRatingArg='{"type":"book","uid":12}'></div>';
				//theD.innerHTML = '<div></div>';
				//theD.innerHTML = '<a href = "coupon.php?device=normal&id='+id+'"><img class = "imgCoupon" src = ""></a>';
				
			
		
	}
	
}

var clickFlag = 0;
	
idR = 0;
idDevice = "null";
		
function test(idRate, device){
	
	idR = idRate;
	idDevice = device;
	//alert(idDevice);
	 //alert(idRate);
}

$(document).ready(function(){

	$('.star').css({
		"background-image": "url('off.png')",
		//"background-color": "grey",
		
	});

                  
});

rateFlag = 0;
userPosition = "page";

$(function() {	
	$('.star').click(function(){
	//alert("hello");
		if(rateFlag == 0){
			var position = $('.star').index(this);
			//alert(position);
			  
			for(i = position; i >= 0; i--){
				$('.star:eq('+ i +')').css({
					//"background-color": "white",
					"background-image": "url('on.png')",
			 	});
			}
			rateFlag = 1;
			clickFlag = 1;
			clickScore = position + 1;
			process(clickScore, idR, idDevice, userPosition);
		}	
		
	});
	
	
		$('.star').hover(
			function() {		
				if(rateFlag == 0){
					var position = $('.star').index(this);	
					for(i = position; i >= 0; i--){
						$('.star:eq('+ i +')').css({
							//"background-color": "white",
							"background-image": "url('on.png')",
						});
					}
				}
			}, function() {
				if(rateFlag == 0){
					$('.star').css({
						//"background-color": "grey",
						"background-image": "url('off.png')",
					});
				}
			}
		);
	
	
});
