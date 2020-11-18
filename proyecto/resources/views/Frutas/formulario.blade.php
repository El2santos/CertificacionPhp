@section('form')

<div class="form-group">
    <label>Fruta</label>
    <input type="text" class="form-control" name="nombre"   placeholder="Ingrese el Nombre de la fruta" 
value="{{isset($buscarFruta->nombre)?$buscarFruta->nombre:''}}" required>
</div>
@stop
