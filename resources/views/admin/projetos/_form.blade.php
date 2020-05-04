
<div class="input-field">
    <input type="text" name="codigo" value="{{ isset($registro->codigo) ? $registro->codigo : ''}}">
    <label>Informar o código do Projeto/Atividade</label>
</div>

<div class="input-field">
    <input type="text" name="vinculo" value="{{ isset($registro->vinculo) ? $registro->vinculo : ''}}">
    <label>Informar código do recurso vinculado</label>
</div>

<div class="input-field">
  <input type="text" name="validade" value="{{ isset($registro->validade) ? $registro->validade : ''}}">
  <label>Informar o ano de validade do PPA</label>
</div>

