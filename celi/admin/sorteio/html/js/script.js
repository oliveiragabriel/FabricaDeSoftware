$(function(){
  $('.editalInput').change(function() {
    var idEdital = $(this).val();
    var pedido = $.ajax({
      url: "../../sorteio/control/pdaosorteio.php",
      type: "GET",
      data: "idedital="+idEdital,
      dataType: "html"
    });
    pedido.done(function(resposta){
      // $(".teste").html(resposta);
      console.log(resposta);
      // var element = '<option value="'+resposta[0][0]+'"></option>';
    });
    pedido.fail(function(jqXHR, textStatus) {
      alert("Falha no Pedido: " + textStatus);
    });
    pedido.always(function() {
      alert("completou");
    });
  });
});
