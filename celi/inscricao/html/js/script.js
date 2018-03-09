$(function(){
	$(".main-form").on("submit", function(){
		var vldnome = validarnome();
		var vlddoc = validardocumento();
		var vldtel = validartelefone();
		var vldemail = validaremail();
		var vldsituacao = validarsituacao();
		if(!vldnome||!vlddoc||!vldtel||!vldemail||!vldsituacao){
			return false;
		}
		else{
			return true;
		}
	});
});

function validarnome(){
	var nome=formulario.name.value ;
	nome= nome.trim();
	var i=0;
	if (nome == ""){
		return false;
	}
	for (i=0; i<nome.length; i++) {
		var c = nome.charCodeAt(i);
		if((c<65 || c>90 && c<97 || c>122) && c!=240){
			return false;
		}
	}
	return true;	
}

function validardocumento (){
	var documento = formulario.document.value;
	if(documento == ""){
		return false;
	}
	return true;
}

function validartelefone (){
	var telefone = formulario.phone.value;
	if(telefone == ""){
		return false;
	}
	for (i=0; i<telefone.length; i++) {
		var c = telefone.charAt(i);
		if(isNaN(c)){
			return false;
		}
	}
	return true;
}

function validaremail(){
	var email = formulario.email.value;
	var usuario= email.substring(0, email.indexOf("@"));
	var dominio= email.substring(email.indexOf("@")+1, email.length);
	if(email == ""){
		return false;
	}
	if ((usuario.length<1) ||
	    (dominio.length < 3) || 
	    (usuario.search("@")!=-1) || 
	    (dominio.search("@")!=-1) ||
	    (usuario.search(" ")!=-1) || 
	    (dominio.search(" ")!=-1) ||
	    (dominio.search(".")==-1) ||      
	    (dominio.indexOf(".")<1 ) ||
	    (dominio.lastIndexOf(".")==dominio.length-1)) {
			return false;			
	}
	return true;
}

function validarsituacao(){
	var situacao = document.getElementsByName('radio');
	var marcado=0;
    for (var i = 0; i < situacao.length; i++){
        if ( situacao[i].checked ) {
            marcado=marcado+1;
        }
    }
    if(marcado!=1){
    	return false;
    }
    return true;
}