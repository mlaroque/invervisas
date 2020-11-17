var contact_form_elem = document.getElementById("contact-form");

contact_form_elem.addEventListener('submit', submitForm);

function submitForm(e){

	var formInputs = contact_form_elem.querySelectorAll("input[type=text],input[type=email],input[type=hidden],select");
	var checkboxInputs = document.querySelectorAll("input[type=checkbox]:checked")
	var httpRequest = new XMLHttpRequest();
    var formData = new FormData();

	for( var i=0; i < formInputs.length; i++ ){
        formData.append(formInputs[i].name, formInputs[i].value);
    }
    for( var i=0; i < checkboxInputs.length; i++ ){
        formData.append(checkboxInputs[i].name, checkboxInputs[i].value);
    }

	var gResponse = document.querySelector('[name="g-recaptcha-response"]').value;

	httpRequest.onreadystatechange = function() { // Call a function when the state changes.
    	if (this.readyState === XMLHttpRequest.DONE && this.status === 200) {
        	if(httpRequest.responseText == "success"){
        		/*var html = '<div class="container"><div class="row"><div class="col-12"><h1>Gracias por confiar en Invervisas</h1></div></div></div>';
				html += '<div class="container"><div class="row"><div class="col-12"><p>&nbsp;</p><p>&nbsp;</p>';
				html +=  '<p style="text-align: center;">La informaciòn que solicitaste llegará en breve a la dirección de correo electrónica que proporcionaste. Si no la encuentras en tu bandeja de entrada principal, por favor revisa tu carpeta de spam.</p>';
				html +=  '<p style="text-align: center;">En Invervisas te ofrecemos <strong>asesoría especializada</strong> para ayudarte a elegir el tipo de inversión que más te conviene y a facilitar los trámites para la obtención de tu <strong>Visa de</strong> <strong>inversión.</strong></p>';
				html +=  '<p>&nbsp;</p><p>&nbsp;</p><p style="text-align: center;"><a href="https://invervisas.com/">Volver a la página principal&gt;&gt;&gt;</a></p></div></div></div>';
 			contact_form_elem.innerHTML = html;*/
 				window.location.href = "https://invervisas.com/gracias-por-confiar-en-invervisas/";
			}else{
				alert(httpRequest.responseText);
				alert("Un error sucedió y no pudimos recibir tu contacto. Inténtalo más tarde.");
			}
    	}
	}
	if(gResponse && gResponse !== ""){
		httpRequest.open('POST', window.location.protocol + "//" + window.location.hostname + "/wp-content/themes/LCtheme2020/ws/save-contact.php");
    	httpRequest.send(formData);
	}

	e.preventDefault();
	return false;
}