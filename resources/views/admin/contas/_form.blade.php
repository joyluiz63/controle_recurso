
<div class="input-field">
    <input type="text" name="descrrecurso" value="{{ isset($registro->descrrecurso) ? $registro->descrrecurso : ''}}">
    <label>Informar se é proveniente de Emenda, Portaria, etc</label>
</div>

<div class="input-field">
    <input type="text" name="numprocesso" value="{{ isset($registro->numprocesso) ? $registro->numprocesso : ''}}">
    <label>Informar o numero do processo, Portaria, etc</label>
</div>

<div class="input-field">
  <input type="text" name="destino" value="{{ isset($registro->destino) ? $registro->destino : ''}}">
  <label>Destino: Informar para que e, para onde</label>
</div>

<div class="row">
  <label>Selecione a Origem</label>
  <select class="browser-default" name="origem">
    <option value="" disabled selected>Selecione</option>
    <option value="Federal">Federal</option>
    <option value="Estadual">Estadual</option>
    <option value="Muncipal">Muncipal</option>
    <option value="Outros">Outros</option>
  </select>
</div>


<div class="row">
  <label>Objeto</label>  
  <select class="browser-default" name="objeto">
    <option value="" disabled selected>Selecione</option>
    <option value="Custeio">Custeio</option>
    <option value="Material Permanente">Material Permanente</option>
    <option value="Obras">Obras</option>
  </select>
</div>

{{-- <div class="input-field">
    <input type="text" name="valor" value="{{ isset($registro->valor) ? $registro->valor : ''}}">
    <label>Valor</label>
</div> --}}
