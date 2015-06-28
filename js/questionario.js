$(document).ready(function (){
    var idCliente = getValue("id");
    if(idCliente=="")
    {

    	location.href="index.html";
    }else{

    	$('#idCliente').val(idCliente);
    }


});

$(document).on('submit','form',function (e) {
	var id=$('#idCliente').val();
    var risco=getRisco();
   $.ajax({
         type: 'POST',
         url: 'RiscoCliente.php',
         dataType: "Json",
         data:{

         	clienteId:id,
         	riscoCliente:risco
         },
        success:function(data){
              alert(data.mensagem);
        }
    });

   /*  $.post("RiscoCliente.php", {clienteId: id, riscoCliente: risco},
        function(data){
       alert(data.mensagem);
        
         }
         , "json");*/
    e.preventDefault();


});
function getValue(name) {
    name = name.replace(/[\[]/, "\\[").replace(/[\]]/, "\\]");
    var regex = new RegExp("[\\?&]" + name + "=([^&#]*)"),
        results = regex.exec(location.search);
    return results === null ? "" : decodeURIComponent(results[1].replace(/\+/g, " "));
}

function getRisco() {

    var soma =0;
    var name=null;
    for (i=1;i<=25;i++){
        name = "question"+i;
        var valorResposta =$('input:radio[name='+name+']:checked','#questionario1').val();
        
      soma= parseInt(valorResposta)+soma;
    }
    return soma;

}

