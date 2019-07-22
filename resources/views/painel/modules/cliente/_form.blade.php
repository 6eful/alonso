<div class="row">
  <div class="input-field col s6">
    <input placeholder="Razão Social..." id="razaosocial" name="razaosocial" type="text" class="validate" value="{{ isset($dado->razaosocial) ? $dado->razaosocial : '' }}" required>
    <label for="razaosocial">Razão Social</label>
  </div>
  <div class="input-field col s6">
    <input id="nomefantasia" name="nomefantasia" type="text" class="validate" value="{{ isset($dado->nomefantasia) ? $dado->nomefantasia : '' }}" required>
    <label for="nomefantasia">Nome Fantasia</label>
  </div>
</div>
<div class="row">
  <div class="input-field col s6">
    <input placeholder="CNPJ..." id="cnpj" name="cnpj" type="text" class="validate" value="{{ isset($dado->cnpj) ? $dado->cnpj : '' }}" required>
    <label for="cnpj">CNPJ</label>
  </div>
  <div class="input-field col s6">
    <input id="endereco" name="endereco" type="text" class="validate" value="{{ isset($dado->endereco) ? $dado->endereco : '' }}" required>
    <label for="endereco">Endereço</label>
  </div>
</div>
<div class="row">
  <div class="input-field col s4">
    <input placeholder="Email..." id="email" name="email" type="email" class="validate" value="{{ isset($dado->email) ? $dado->email : '' }}" required>
    <label for="email">Email</label>
  </div>
  <div class="input-field col s4">
    <input id="telefone" name="telefone" type="text" class="validate" value="{{ isset($dado->telefone) ? $dado->telefone : '' }}" required>
    <label for="telefone">Telefone</label>
  </div>
  <div class="input-field col s4">
    <input id="celular" name="celular" type="text" class="validate" value="{{ isset($dado->celular) ? $dado->celular : '' }}" required>
    <label for="celular">Celular</label>
  </div>
</div>
<div class="row">
  <div class="input-field col s4">
    <input placeholder="CPF..." id="cpf" name="cpf" type="text" class="validate" value="{{ isset($dado->cpf) ? $dado->cpf : '' }}" required>
    <label for="cpf">CPF</label>
  </div>
  <div class="input-field col s4">
    <input id="nomeResponsavel" name="nomeResponsavel" type="text" class="validate" value="{{ isset($dado->nomeResponsavel) ? $dado->nomeResponsavel : '' }}" required>
    <label for="nomeResponsavel">Nome Responsavel</label>
  </div>
</div>
