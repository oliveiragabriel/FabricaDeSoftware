$(function(){
	$(".main-form").on("submit", function(){
		var vldNome = validarNome();
		var vldCpf = validarCpf();
		var vldCpfEmissor = validarCpfEmissor();
		var vldRg = validarRg();
		var vldRgEmissor= validarRGEmissor();
		var vldTel1 = validarTelefone1();
		var vldTel2 = validarTelefone2();
		var vldEmail = validarEmail();
		var vldCidade = validarCidade();
		var vldBairro = validarBairro();
		var vldLogradouro =validarLogradouro();
		var vldComplemento = validarComplemento();
		var vldSituacao = validarSituacao();
		var vldCurso = validarCurso();
		if(!vldNome|| !vldCpf|| !vldCpfEmissor|| !vldRg|| !vldRgEmissor||  !vldTel1 || !vldTel2 ||!vldEmail|| !vldCidade || !vldCidade || !vldCidade || !vldBairro || !vldLogradouro || !vldComplemento || !vldCurso || !vldSituacao ){
			return false;
		}
		else{
			return true;
		}
	});
});

function validarNome(){
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
};

function validarRg (){
	var Rg = formulario.document1.value;
	if(Rg == ""){
		return false;
	}
	else{
		function Rg(document1){
		    v=v.replace(/\D/g,""); //Substituí o que não é dígito por "", /g é [Global][1]
		    v=v.replace(/(\d{1,2})(\d{3})(\d{3})(\d{1})$/,"$1.$2.$3-$4"); 
		    // \d{1,2} = Separa 1 grupo de 1 ou 2 carac. (\d{3}) = Separa 1 grupo de 3 carac. (\d{1}) = Separa o grupo de 1 carac.
		    // "$1.$2.$3-$4" = recupera os grupos e adiciona "." após cada.

		        return true;
		    }
	}
	return true;
};

function validarRGEmissor(){
	var RGEmissor = formulario.RGEmissor.value ;
	RGEmissor= RGEmissor.trim();
	var i=0;
	if (RGEmissor == ""){
		return false;
	}
	else{
		for (i=0; i<RGEmissor.length; i++) {
			var c = RGEmissor.charCodeAt(i);
			if((c<65 || c>90 && c<97 || c<128 && c>154 || c<160 && c>165 || c<181 && c>183 || c<198 && c>199 || c<224 || c<226 && c>229 || c<233 && c>235 || c>122) && c!=240){
				return false;
			}
		
		}
	}
	return true;
};

function validarCpfEmissor(){
	var CpfEmissor = formulario.CpfEmissor.value ;
	CpfEmissor= CpfEmissor.trim();
	var i=0;
	if (CpfEmissor == ""){
		return false;
	}
	for (i=0; i<CpfEmissor.length; i++) {
		var c = CpfEmissor.charCodeAt(i);
		if((c<65 || c>90 && c<97 || c<128 && c>154 || c<160 && c>165 || c<181 && c>183 || c<198 && c>199 || c<224 || c<226 && c>229 || c<233 && c>235 || c>122) && c!=240){
			return false;
		}
	}
	return true;
};

function validarTelefone1 (){
	var telefone1 = formulario.phone1.value;
	if(telefone1 == ""){
		return false;
	}
	for (i=0; i<telefone1.length; i++) {
		var c = telefone1.charAt(i);
		if(isNaN(c)){
			return false;
		}
	}
	return true;
};

function validarTelefone2 (){
	var telefone2 = formulario.phone2.value;
	if(telefone2 == ""){
		return false;
	}
	for (i=0; i<telefone2.length; i++) {
		var c = telefone2.charAt(i);
		if(isNaN(c)){
			return false;
		}
	}
	return true;
};

function validarEmail(){
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
};

function validarUf(){
	var Uf =  ($('.main-form-Uf').val()).trim();
	if( Uf ==""){ 
		return false;
		}
	else{
		var arrayUf = jQuery.makeArray( Uf );
		var contaArray = arayUf.length;
			if(contaArray>1){
				return false;
			}
			else{
				return true;
			}
		}	
};	

function validarCidade(){
	var cidade = formulario.cidade.value ;
	cidade= cidade.trim();
	var i=0;
	if (cidade == ""){
		return false;
	}
	for (i=0; i<cidade.length; i++) {
		var c = cidade.charCodeAt(i);
		if((c<65 || c>90 && c<97 || c<128 && c>154 || c<160 && c>165 || c<181 && c>183 || c<198 && c>199 || c<224 || c<226 && c>229 || c<233 && c>235 || c>122) && c!=240){
			return false;
		}
	}
	return true;
};

function validarBairro(){
	var bairro = formulario.bairro.value ;
	bairro = bairro.trim();
	var i=0;
	
	if (bairro == ""){
		return false;
	}
	for (i=0; i<bairro.length; i++) {
		var c = bairro.charCodeAt(i);
		if((c<65 || c>90 && c<97 || c<128 && c>154 || c<160 && c>165 || c<181 && c>183 || c<198 && c>199 || c<224 || c<226 && c>229 || c<233 && c>235 || c>122) && c!=240){
			return false;
		}
	}
	return true;
	};

function validarLogradouro(){
	var logradouro = formulario.logradouro.value ;
	logradouro = logradouro.trim();
	var i=0;
	
	if (logradouro == ""){
		return false;
	}
	for (i=0; i<logradouro.length; i++) {
		var c = logradouro.charCodeAt(i);
		if(( c>48 && c<57 || c<65 || c>90 && c<97 || c<128 && c>154 || c<160 && c>165 || c<181 && c>183 || c<198 && c>199 || c<224 || c<226 && c>229 || c<233 && c>235 || c>122) && c!=240){
			return false;
		}
	}
};
	
	function validarComplemento(){
		var complemento = formulario.complemento.value ;
		complemento = complemento.trim();
		var i=0;
		
		if (complemento == ""){
			return false;
		}
		for (i=0; i<complemento.length; i++) {
			var c = complemento.charCodeAt(i);
			if(( c>48 && c<57 || c<65 || c>90 && c<97 || c<128 && c>154 || c<160 && c>165 || c<181 && c>183 || c<198 && c>199 || c<224 || c<226 && c>229 || c<233 && c>235 || c>122) && c!=240){
				return false;
			}
			else{
				return true;
			}
		}
	};

function validarSituacao(){
	var situacaoInterno = ($('.inputButtonInterno').val()).trim();
	var situacaoExterno = ($('.inputButtonExterno').val()).trim();
	
	if((situacaoInterno != "" && situacaoExterno == "") || (situacaoInterno == "" && situacaoExterno != "")){
		return true;
	}
	else{
		return false;
	}
};

function validarCurso(){
	var Curso =  ($('.main-form-selectCurso').val()).trim();
	if( curso ==""){ 
		return false;
		}
	else{
		var arrayCurso = jQuery.makeArray( Curso );
		var contaArray = arayCurso.length;
			if(contaArray>1){
				return false;
			}
			else{
				return true;
			}
		}	
};	