<div class="input-field">
    <input type="text" name="descrrecurso" value="{{ isset($registro->descrrecurso) ? $registro->descrrecurso : ''}}">
    <label>Título</label>
</div>

<div class="input-field">
    <input type="text" name="numprocesso" value="{{ isset($registro->numprocesso) ? $registro->numprocesso : ''}}">
    <label>Descrição</label>
</div>

<div class="input-field col s12">
  <select>
    <option value="" disabled selected>Selecione</option>
    <option value="1">Federal</option>
    <option value="2">Estadual</option>
    <option value="3">Muncipal</option>
    <option value="4">Outros</option>
  </select>
  <label>Origem</label>
</div>

<div class="input-field col s12">
  <select>
    <option value="" disabled selected>Selecione</option>
    <option value="1">Custeio</option>
    <option value="2">Material Permanente</option>
    <option value="3">Obras</option>
  </select>
  <label>Objeto</label>
</div>

<div class="input-field">
    <input type="text" name="destino" value="{{ isset($registro->destino) ? $registro->destino : ''}}">
    <label>Valor</label>
</div>

