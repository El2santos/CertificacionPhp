@section('form')

<div class="form-group">
    <label>Marca</label>
    <input type="text" class="form-control" name="marca"   placeholder="Ingrese la marca del camion" 
value="{{isset($buscarCamion->marca)?$buscarCamion->marca:''}}" required>
</div>
<div class="form-group">
    <label>Placa</label>
    <input type="text" class="form-control" name="placa"   placeholder="Ingrese la Placa" 
value="{{isset($buscarCamion->placa)?$buscarCamion->placa:''}}" required>
</div>
@stop
