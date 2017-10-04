function validate(type){
	
	//alert(type);
	
	var business_name = document.forms[0].elements['business_name'].value;
		
	if(business_name == ""){
		alert("Escriba el nombre del negocio");
		return false;								
	}
	//if (/\[|\]|\(|\)|\{|\}|\\|\/|\$|\^|\+|\&|\"|\'|\;|\:|\*|\!|\?|\#|\%|\=|\||\,|\>|\<|\./i.test(business_name)) {
	if (/\[|\]|\{|\}|\\|\^|\+|\"|\'|\;|\:|\=|\||\,|\>|\</i.test(business_name)) {
	    alert("El nombre del negocio contiente caracteres no validos");
	    return false;
	}
	
	
	var business_logo = document.forms[0].elements['business_logo'].value;
	
	if(business_logo != ""){
	
		if (/\[|\]|\(|\)|\{|\}|\\|\/|\$|\^|\+|\&|\"|\'|\;|\:|\*|\!|\?|\#|\%|\=|\||\,|\>|\<|@/i.test(business_logo)) {
		    alert("El logo del negocio contiente caracteres no validos");
		    return false;
		}	
		if (/\s/i.test(business_logo)) {
		    alert("Hay espacios en blanco en el logo, antes, en medio o al final");
		    return false;
		}
		if (!(/\.png/i.test(business_logo))) {
		    alert("La imagen del logo es de un formato invalido. El formato valido es PNG");
		    return false;
		}
		
	}
	
	var content_title = document.forms[0].elements['content_title'].value;
	
	//if (/\[|\]|\(|\)|\{|\}|\\|\/|\$|\^|\+|\&|\"|\'|\;|\:|\*|\#|\%|\=|\||\,|\>|\</i.test(content_title)) {
	if (/\[|\]|\{|\}|\\|\^|\+|\"|\'|\;|\:|\=|\||\,|\>|\</i.test(content_title)) {
	    alert("Titulo del Contenido contiente caracteres no validos");
	    return false;
	}
	
	
	var feature_one = document.forms[0].elements['feature_one'].value;
	
	if (/\[|\]|\(|\)|\{|\}|\\|\/|\$|\^|\+|\&|\"|\'|\;|\:|\*|\#|\%|\=|\||\,|\>|\</i.test(feature_one)) {
	    alert("La caracteristica 1 contiente caracteres no validos");
	    return false;
	}
	
	
	var feature_two = document.forms[0].elements['feature_two'].value;
	
	if (/\[|\]|\(|\)|\{|\}|\\|\/|\$|\^|\+|\&|\"|\'|\;|\:|\*|\#|\%|\=|\||\,|\>|\</i.test(feature_two)) {
	    alert("La caracteristica 2 contiente caracteres no validos");
	    return false;
	}
	
	
	var feature_three = document.forms[0].elements['feature_three'].value;
	
	if (/\[|\]|\(|\)|\{|\}|\\|\/|\$|\^|\+|\&|\"|\'|\;|\:|\*|\#|\%|\=|\||\,|\>|\</i.test(feature_three)) {
	    alert("La caracteristica 3 contiente caracteres no validos");
	    return false;
	}
	
	if(type == "Simple"  || type == "Basico"){
	
		var coupon_image = document.forms[0].elements['coupon_image'].value;
		
		if(coupon_image != ""){
		
			if (/\[|\]|\(|\)|\{|\}|\\|\/|\$|\^|\+|\&|\"|\'|\;|\:|\*|\!|\?|\#|\%|\=|\||\,|\>|\<|@/i.test(coupon_image)) {
			    alert("El cupon contiente caracteres no validos");
			    return false;
			}	
			if (/\s/i.test(coupon_image)) {
			    alert("Hay espacios en blanco en el cupon, antes, en medio o al final");
			    return false;
			}
			if (!(/\.png/i.test(coupon_image))) {
			    alert("La imagen del cupon es de un formato invalido. El formato valido es PNG");
			    return false;
			}
			
		}
		
	}	
	
	if(type == "Simple"){
		
		var precoupon_image = document.forms[0].elements['precoupon_image'].value;
		
		if(precoupon_image != ""){
		
			if (/\[|\]|\(|\)|\{|\}|\\|\/|\$|\^|\+|\&|\"|\'|\;|\:|\*|\!|\?|\#|\%|\=|\||\,|\>|\<|@/i.test(precoupon_image)) {
			    alert("El pre-cupon contiente caracteres no validos");
			    return false;
			}	
			if (/\s/i.test(precoupon_image)) {
			    alert("Hay espacios en blanco en el pre-cupon, antes, en medio o al final");
			    return false;
			}
			if (!(/\.png/i.test(precoupon_image))) {
			    alert("La imagen del pre-cupon es de un formato invalido. El formato valido es PNG");
			    return false;
			}
			
		}
						
	}
	
	var business_legend = document.forms[0].elements['business_legend'].value;	
		
	//if (/\[|\]|\(|\)|\{|\}|\\|\/|\$|\^|\+|\&|\"|\'|\;|\:|\*|\!|\?|\#|\%|\=|\||\,|\>|\</i.test(business_legend)) {
	if (/\[|\]|\{|\}|\\|\^|\+|\"|\'|\;|\:|\=|\||\,|\>|\</i.test(business_legend)) {
	    alert("La leyenda del negocio contiente caracteres no validos");
	    return false;
	}
	
	
	var background_color = document.forms[0].elements['background_color'].value;	
		
	if (/\[|\]|\(|\)|\{|\}|\\|\/|\$|\^|\+|\&|\"|\'|\;|\:|\*|\!|\?|\#|\%|\=|\||\,|\>|\<|\.|\-|@/i.test(background_color)) {
	    alert("El color de fondo contiente caracteres no validos");
	    return false;
	}
	if (/\s/i.test(background_color)) {
	    alert("Hay espacios en blanco en el color de fondo, antes, en medio o al final");
	    return false;
	}
	
	
	var content_color = document.forms[0].elements['content_color'].value;	
		
	if (/\[|\]|\(|\)|\{|\}|\\|\/|\$|\^|\+|\&|\"|\'|\;|\:|\*|\!|\?|\#|\%|\=|\||\,|\>|\<|\.|\-|@/i.test(content_color)) {
	    alert("El color de contenido contiente caracteres no validos");
	    return false;
	}
	if (/\s/i.test(content_color)) {
	    alert("Hay espacios en blanco en el color de contenido, antes, en medio o al final");
	    return false;
	}
	
	
	var text_content_color = document.forms[0].elements['text_content_color'].value;	
		
	if (/\[|\]|\(|\)|\{|\}|\\|\/|\$|\^|\+|\&|\"|\'|\;|\:|\*|\!|\?|\#|\%|\=|\||\,|\>|\<|\.|\-|@/i.test(text_content_color)) {
	    alert("El color de texto de contenido contiente caracteres no validos");
	    return false;
	}
	if (/\s/i.test(text_content_color)) {
	    alert("Hay espacios en blanco en el color de texto de contenido, antes, en medio o al final");
	    return false;
	}
	
	
	var text_address_color = document.forms[0].elements['text_address_color'].value;	
		
	if (/\[|\]|\(|\)|\{|\}|\\|\/|\$|\^|\+|\&|\"|\'|\;|\:|\*|\!|\?|\#|\%|\=|\||\,|\>|\<|\.|\-|@/i.test(text_address_color)) {
	    alert("El color de texto de la direccion contiente caracteres no validos");
	    return false;
	}
	if (/\s/i.test(text_address_color)) {
	    alert("Hay espacios en blanco en el color de texto de la direccion, antes, en medio o al final");
	    return false;
	}
	
	
	if(type == "Medio"){
		
		var form_title = document.forms[0].elements['form_title'].value;	
		
		//if (/\[|\]|\(|\)|\{|\}|\\|\/|\$|\^|\+|\&|\"|\'|\;|\:|\*|\!|\?|\#|\%|\=|\||\,|\>|\</i.test(business_legend)) {
		if (/\[|\]|\{|\}|\\|\^|\+|\"|\'|\;|\:|\=|\||\,|\>|\</i.test(form_title)) {
		    alert("La leyenda del negocio contiente caracteres no validos");
		    return false;
		}
		
		var form_color = document.forms[0].elements['form_color'].value;	
		
		if (/\[|\]|\(|\)|\{|\}|\\|\/|\$|\^|\+|\&|\"|\'|\;|\:|\*|\!|\?|\#|\%|\=|\||\,|\>|\<|\.|\-|@/i.test(form_color)) {
		    alert("El color de forma contiente caracteres no validos");
		    return false;
		}
		if (/\s/i.test(form_color)) {
		    alert("Hay espacios en blanco en el color de forma, antes, en medio o al final");
		    return false;
		}
		
		
		var form_button_color = document.forms[0].elements['form_button_color'].value;	
			
		if (/\[|\]|\(|\)|\{|\}|\\|\/|\$|\^|\+|\&|\"|\'|\;|\:|\*|\!|\?|\#|\%|\=|\||\,|\>|\<|\.|\-|@/i.test(form_button_color)) {
		    alert("El color de boton de forma contiente caracteres no validos");
		    return false;
		}
		if (/\s/i.test(form_button_color)) {
		    alert("Hay espacios en blanco en el color de boton de forma, antes, en medio o al final");
		    return false;
		}
		
		
	}

	
	var data_base = document.forms[0].elements['data_base'].value;
		
	if(data_base == ""){
		alert("Escriba el nombre de la base de datos");
		return false;								
	}
	if (/\[|\]|\(|\)|\{|\}|\\|\/|\$|\^|\+|\&|\"|\'|\;|\:|\*|\!|\?|\#|\%|\=|\||\,|\>|\<|\.|\-|@/i.test(data_base)) {
	    alert("La base de datos contiene caracteres no validos");
	    return false;
	}	
	if (/\s/i.test(data_base)) {
	    alert("Hay espacios en blanco en la base de datos, antes, en medio o al final");
	    return false;
	}
	
	
	if(type == "Simple"){
	
		var coupon_prefix = document.forms[0].elements['coupon_prefix'].value;
			
		if(coupon_prefix == ""){
				alert("Escriba el prefijo del cupon");
				return false;								
		}
		
		coupon_prefix = Number(coupon_prefix);
		
		if(isNaN(coupon_prefix)){
			alert("El prefijo solo debe contener numeros");
		    return false;
			
		}	
		
		var coupons_total = document.forms[0].elements['coupons_total'].value;
		
		if(coupons_total == ""){
				alert("Escriba el numero de cupones");
				return false;								
		}
		
		coupons_total = Number(coupons_total);
		
		if(isNaN(coupons_total)){
			alert("Los cupones totales solo debe contener numeros");
		    return false;
			
		}
	
	}
	
	return true;


}

function deleteConfirm(){

	var answer = confirm("Esta seguro de borrar este registro");
	
	if(answer == true){
		return true;
		
	}
	
	if(answer == false){
		return false;
		
	}
	
	
}

/*
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

function csv_generate(){
	
	if(xmlHttp){
		
		try{
			alert("Hello");
			xmlHttp.open("GET", "csv.php", true);
			//xmlHttp.onreadystatechange = handleServerResponse;
			xmlHttp.send(null);
			
		} catch(e){
			
			alert(e.toString());
			
		}
		
	}
	
}
*/

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

//$(document).ready(function(){
$(function() {	
	$('#rating-file-download').click(function(){
	 //alert("hello");
	 var rating_table = $("#rating-table").val();
	 var business_name = $("#rating-business").val();
	    $.ajax({
	            //url: '<?php echo base_url().'download/download_csv';?>',
	            url: 'http://manage.desarrollandotumarca.com/download/download_csv/' + rating_table + '/' + business_name,
	            type:'POST',
	            dataType: 'json',
	            success: function(){
	                    
	                   // alert("Hello");
	               },
	          });
	 
	}); 
});
