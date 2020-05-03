@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif


<div class="input-field">
  <input type="text" name="name" value="{{ isset($registro->name) ? $registro->name : ''}}">
  <label>Nome</label>
</div>

<div class="input-field">
  <input type="text" name="email" value="{{ isset($registro->email) ? $registro->email : ''}}">
  <label>E-mail</label>
</div>

<div class="row">
  <div class="input-field">
    <input id="password" type="password" name="password" class="validate"
    value="{{ isset($registro->email) ? $registro->email : ''}}">
    <label for="password">Password</label>
  </div>
</div>

