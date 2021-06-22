var form_descarga = document.getElementById("form_descarga");

form_descarga.addEventListener('submit', submitForm);

function submitForm(e){

    e.preventDefault();

    
    var httpRequest = new XMLHttpRequest();
    httpRequest.open('POST', window.location.protocol + "//" + window.location.hostname + "/wp-content/themes/LCtheme2020/ws/send_email.php");

    var formData = new FormData(document.getElementById(e.target.id));
    
    httpRequest.onreadystatechange = function() {

        if (this.readyState === XMLHttpRequest.DONE && this.status === 200) {

            if (httpRequest.responseText == "success") {
                e.target.innerHTML = '<label><b>Gracias, revisa tu correo para descargar el documento.</b></label>';
                console.log('enviado');
            }

            else {

                alert(httpRequest.responseText);
                alert("Un error sucedió y no pudimos recibir tu contacto. Inténtalo más tarde.");
            }
        }
    }

    httpRequest.send(formData);

    return false;
}

function overlay(id = null) {
    if (id != null) {
        var el = document.getElementById("lc_modal_" + id);
        el.style.visibility = (el.style.visibility == "visible") ? "hidden" : "visible";
    } else {
        var el = document.getElementById("lc_modal");
        el.style.visibility = (el.style.visibility == "visible") ? "hidden" : "visible";
    }
}
