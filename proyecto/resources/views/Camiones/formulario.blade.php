@section('form')

<div class="form-group">
    <label>Marca</label>
    <input type="text" class="form-control" name="marca"   placeholder="Ingrese la marca del camion" autocomplete="off"
value="{{isset($buscarCamion->marca)?$buscarCamion->marca:''}}" required>
</div>
<div class="form-group">
    <label>Placa</label>
    <input type="text" class="form-control" name="placas"   placeholder="Ingrese la Placa"  autocomplete="off"
value="{{isset($buscarCamion->placas)?$buscarCamion->placas:''}}" required>
</div>
@stop
