<div class="row">
  <div class="input-field col s4">
    <select id="idcliente" name="idcliente">
      <option value="" disabled selected>Selecione o cliente</option>
      @foreach($cliente as $listaclientes)
      <option value="{{ $listaclientes['id'] }}" {{ isset($dado->idcliente) == $listaclientes['id'] ? 'selected' : '' }}>{{ $listaclientes['nomefantasia'] }}</option>
      @endforeach
    </select>
    <label>Cliente</label>
  </div>
  <div class="input-field col s8">
    <input id="endereco" name="endereco" type="text" class="validate" value="{{ isset($dado->endereco) ? $dado->endereco : '' }}" required>
    <label for="endereco">Endereço</label>
  </div>
</div>
<div class="row">
  <div class="input-field col s4">
    <input id="valor" name="valor" type="number" class="validate" value="{{ isset($dado->valor) ? $dado->valor : '' }}" required min="1">
    <label for="valor">Valor Total R$</label>
  </div>
  <div class="input-field col s4">
    <input id="sinal" name="sinal" type="number" class="validate" value="{{ isset($dado->sinal) ? $dado->sinal : '' }}" required min="1">
    <label for="sinal">Sinal R$</label>
  </div>
  <div class="input-field col s4">
    <input id=numeroparcela"" name="numeroparcela" type="number" class="validate" value="{{ isset($dado->numeroparcela) ? $dado->numeroparcela : 0 }}" required min="1">
    <label for="numeroparcela">Número de Parcela</label>
  </div>
</div>
<div class="row">
  <h4>Parcelas</h4>
  <div class="" id="descparcela">
    @php $a = 0 @endphp
    @foreach($parcelas as $listaparcelas)
      <div class="row">
        <div class="input-field col s4">
          <input id="parcela{{$a}}" name="parcela{{$a}}" type="number" class="validate" readonly value="{{$listaparcelas['valor']}}">
        </div>
        <div class="input-field col s4">
          <input id="dataparcela{{$a}}" name="dataparcela{{$a}}" type="date" class="validate" required value="{{$listaparcelas['data']}}">
          <label for="dataparcela{{$a}}">Data da parcela R$</label>
        </div>
      </div>
      @php $a++ @endphp
    @endforeach
  </div>
</div>
<div class="row">
  <div class="file-field input-field">
    <div class="btn blue">
      <span>Documento:</span>
      <input type="file" id="documento" name="documento" accept="application/pdf,application/msword">
    </div>
    <div class="file-path-wrapper">
      <input class="file-path validate" type="text">
    </div>
  </div>
</div>
<div class="row">
  <div class="input-field col s12">
    <select id="status" name="status">
      <option value="" disabled>Selecione o status</option>
      <option value="aberto" {{ isset($dado->status) == 'aberto' ? 'selected' : '' }}>Aberto</option>
      <option value="fechado" {{ isset($dado->status) == 'aberto' ? 'selected' : '' }}>Fechado</option>
    </select>
    <label>Status</label>
  </div>
</div>
