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

	// var gResponse = document.querySelector('[name="g-recaptcha-response"]').value;

	httpRequest.onreadystatechange = function() { // Call a function when the state changes.
    	if (this.readyState === XMLHttpRequest.DONE && this.status === 200) {
        	if(httpRequest.responseText == "success"){
        		
 				window.location.href = "https://invervisas.com/gracias-por-confiar-en-invervisas/";
			}else{
				alert(httpRequest.responseText);
				alert("Un error sucedió y no pudimos recibir tu contacto. Inténtalo más tarde.");
			}
    	}
	}
	/* if(gResponse && gResponse !== ""){
		httpRequest.open('POST', window.location.protocol + "//" + window.location.hostname + "/wp-content/themes/LCtheme2020/ws/save-contact.php");
    	httpRequest.send(formData);
	} */

	httpRequest.open('POST', window.location.protocol + "//" + window.location.hostname + "/wp-content/themes/LCtheme2020/ws/save-contact.php");
	httpRequest.send(formData);

	e.preventDefault();
	return false;
}