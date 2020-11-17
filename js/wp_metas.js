let visa_ciud_si_no_select = document.getElementById("residencia_inv_ciud_visa");
let visa_temp_si_no_select = document.getElementById("residencia_inv_temp_visa");
let visa_perm_si_no_select = document.getElementById("residencia_inv_perm_visa");

function visa_ciud_si_no() {
	let residencia_inv_ciud_si = document.getElementById("residencia_inv_ciud_si");
	if(visa_ciud_si_no_select.value == "Si"){
		residencia_inv_ciud_si.style.display = "";
	}else{
		residencia_inv_ciud_si.style.display = "none";
	}
}

function visa_temp_si_no() {
	let residencia_inv_temp_si = document.getElementById("residencia_inv_temp_si");
	if(visa_temp_si_no_select.value == "Si"){
		residencia_inv_temp_si.style.display = "";
	}else{
		residencia_inv_temp_si.style.display = "none";
	}
}

function visa_perm_si_no() {
	let residencia_inv_perm_si = document.getElementById("residencia_inv_perm_si");
	if(visa_perm_si_no_select.value == "Si"){
		residencia_inv_perm_si.style.display = "";
	}else{
		residencia_inv_perm_si.style.display = "none";
	}
}

visa_ciud_si_no();
visa_temp_si_no();
visa_perm_si_no();

visa_ciud_si_no_select.addEventListener('change', visa_ciud_si_no);
visa_temp_si_no_select.addEventListener('change', visa_temp_si_no);
visa_perm_si_no_select.addEventListener('change', visa_perm_si_no);