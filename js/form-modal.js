var contact_form_elem_modal = document.getElementById("form_solicita_info");

contact_form_elem_modal.addEventListener('submit', submitForm);

function submitForm(e){

    e.preventDefault();

    let viaContactoChecks = contact_form_elem_modal.querySelectorAll(".modal_via_contacto input[type='checkbox']:checked");
    let tipoConsultaChecks = contact_form_elem_modal.querySelectorAll(".modal_tipo_info input[type='checkbox']:checked");

    if (tipoConsultaChecks.length == 0) {

        alert("Por favor, selecciona qué tipo de información buscas.");

        return false;
    }

    if (viaContactoChecks.length == 0) {

        alert("Por favor, selecciona un medio de contacto preferido.");

        return false;
    }

    var formInputs = contact_form_elem_modal.querySelectorAll("input[type=text],input[type=email],input[type=hidden],select");
    var checkboxInputs = document.querySelectorAll("input[type=checkbox]:checked")
    var httpRequest = new XMLHttpRequest();
    var formData = new FormData();

    for( var i=0; i < formInputs.length; i++ ){
        formData.append(formInputs[i].name, formInputs[i].value);
    }
    for( var i=0; i < checkboxInputs.length; i++ ){
        formData.append(checkboxInputs[i].name, checkboxInputs[i].value);
    }

    var gResponse = true; // document.querySelector('[name="g-recaptcha-response"]').value;

    httpRequest.onreadystatechange = function() {

        if (this.readyState === XMLHttpRequest.DONE && this.status === 200) {

            if (httpRequest.responseText == "success") {

                window.location.href = "https://estudiar-en.com/gracias-por-confiar-en-estudiar-en/";
            }

            else {

                alert(httpRequest.responseText);
                alert("Un error sucedió y no pudimos recibir tu contacto. Inténtalo más tarde.");
            }
        }
    }

    if (gResponse && gResponse !== "") {

        httpRequest.open('POST', window.location.protocol + "//" + window.location.hostname + "/wp-content/themes/LCtheme2020/ws/save-contact.php");
        httpRequest.send(formData);
    }

    return false;
}

function overlay() {
    el = document.getElementById("overlay");
    el.style.visibility = (el.style.visibility == "visible") ? "hidden" : "visible";
}
