$(function(){
	$(".main-form-checkbox").click(function(){
		if($(this).is(':checked')){
			var vagasInt = $(this).parent(".main-form-box-col1").next(".main-form-box-col2").find(".main-form-inputVagasInt");
			var vagasExt = $(this).parent(".main-form-box-col1").next(".main-form-box-col2").next(".main-form-box-col3").find(".main-form-inputVagasExt");
			vagasInt.prop("disabled", false);
			vagasExt.prop("disabled", false);
		}
		else{
			var vagasInt = $(this).parent(".main-form-box-col1").next(".main-form-box-col2").find(".main-form-inputVagasInt");
			var vagasExt = $(this).parent(".main-form-box-col1").next(".main-form-box-col2").next(".main-form-box-col3").find(".main-form-inputVagasExt");
			vagasInt.prop("disabled", true);
			vagasExt.prop("disabled", true);
		}
	});
});