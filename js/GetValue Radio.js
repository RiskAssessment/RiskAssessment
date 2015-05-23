function RadioHab() =2 {
    
    var i = 0;
    var msg="Alternativa não marcada";
	var Radio=null;
    
    for( i = 1; i <= RadioHab; i++){
	document.getElementById('questionario'+i);

	Radio= form.question;
	for(var i=0;i<Radio.length;i++) {
		if(Radio[i].checked) {
			msg = "Selecionado: " + Radio[i].value; 
            
		}
	}
	alert(msg);
    }
}

