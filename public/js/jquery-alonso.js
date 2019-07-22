$(document).ready(function(){
  $('select').formSelect();
  $('input[name=numeroparcela]').change(function(){
    $('#descparcela').html('');
    if($('input[name=valor]').val() != '' && !isNaN($('input[name=valor]').val()) && $('input[name=numeroparcela]').val() > 0) {
      var parcela = $('input[name=numeroparcela]').val();
      var valorparcela = parseFloat(($('input[name=valor]').val() / parcela).toFixed(2));
      for(i=0; i < parcela; i++) {
        $('<div class="row"><div class="input-field col s4"><input id="parcela'+i+'" name="parcela'+i+'" type="number" readonly class="validate" value="'+valorparcela+'"></div><div class="input-field col s4"><input id="dataparcela'+i+'" name="dataparcela'+i+'" type="date" class="validate" required><label for="dataparcela'+i+'">Data da parcela R$</label></div></div>').appendTo($('#descparcela'));
      }
    }
  });
  $('#statusproposta').click(function(){
    var star = $('#statusproposta').text();
    var att = $('#statusproposta').attr( "class" );
    var choice;
    if(star == "aberto") {
      choice = '<div class="input-field col s12"><select id="statusnovo" name="statusnovo" style="display:block"><option value="" disabled>Selecione o status</option><option value="aberto" selected>Aberto</option><option value="fechado">Fechado</option></select></div>';
    } else {
      choice = '<div class="input-field col s12"><select id="statusnovo" name="statusnovo" style="display:block"><option value="" disabled>Selecione o status</option><option value="aberto">Aberto</option><option value="fechado" selected>Fechado</option></select></div>';
    }
    $('#statusproposta').replaceWith((choice));

  });
  //location.href = '{{route('proposta.edicao', attr)}}';

});
