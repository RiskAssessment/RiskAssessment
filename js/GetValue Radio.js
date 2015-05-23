function RadioHab() =26 {
    
    var i = 0;
    for( i = 1; i <= RadioHab; i++){
	document.getElementById('questionario'+i);
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
}

