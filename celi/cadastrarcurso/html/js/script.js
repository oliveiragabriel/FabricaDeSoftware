$(function(){
	$(".main-content-form-content").submit(function(){
		var nomecurso = $(".main-content-form-content-input").val();
		var validacaocurso = validarnomecurso(nomecurso);
		alert(validacaocurso);
		if(validacaocurso == 1){
			return true;
		}
		else{
			return false;
		}
	})
});

function validarnomecurso(curso){
	nomecurso = trim(curso);
	var arraycurso = curso.split('');
	// $.each(arraycurso, function(index, el) {
	// 	console.log(index+" = "+el);
	// });
	alert("teste");
	return 1;
}