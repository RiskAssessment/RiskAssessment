function RadioHab() {

	var form = document.questionario;
    var msg="Alternativa não marcada";
	var Radio=null;

	Radio= form.question;
	for(var i=0;i<Radio.length;i++) {
		if(Radio[i].checked) {
			msg = "Selecionado: " + Radio[i].value;
		}
	}
	alert(msg);
}