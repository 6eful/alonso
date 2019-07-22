<div class="row">
  <div class="input-field col s6">
    <input placeholder="Nome..." id="name" name="name" type="text" class="validate" value="{{ isset($dado->name) ? $dado->name : '' }}" required>
    <label for="name">Nome</label>
  </div>
  <div class="input-field col s6">
    <input id="email" name="email" type="email" class="validate" value="{{ isset($dado->email) ? $dado->email : '' }}" required>
    <label for="email">Email</label>
  </div>
</div>
<div class="row">
  <div class="input-field col s12">
    <input id="password" name="password" type="password" class="validate" value="{{ isset($dado->password) ? $dado->password : ''}}" {{ isset($dado->password) ? '' : 'required' }}>
    <label for="password">Senha</label>
  </div>
</div>
