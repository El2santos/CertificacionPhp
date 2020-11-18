@section('form')

<div class="form-group">
    <label>Nombre</label>
    <input type="text" class="form-control" name="nombre"   placeholder="Ingrese el Nombre" autocomplete="off"
value="{{isset($buscarCliente->nombre)?$buscarCliente->nombre:''}}" required>
</div>
<div class="form-group">
    <label>Dpi</label>
    <input type="text" class="form-control" name="dpi"   placeholder="Ingrese el Dpi" autocomplete="off"
value="{{isset($buscarCliente->dpi)?$buscarCliente->dpi:''}}" required>
</div>
<div class="form-group">
    <label>Direccion</label>
    <input type="text" class="form-control" name="direccion"   placeholder="Ingrese la Direccion" autocomplete="off"
value="{{isset($buscarCliente->direccion)?$buscarCliente->direccion:''}}" required>
</div>
<div class="form-group">
    <label>Telefono</label>
    <input type="text" class="form-control" name="telefono"   placeholder="Ingrese el Numero de telefono" autocomplete="off"
value="{{isset($buscarCliente->telefono)?$buscarCliente->telefono:''}}" required>
</div>
<div class="form-group">
    <label>Correo</label>
    <input type="text" class="form-control" name="correo"   placeholder="Ingrese el Correo" autocomplete="off"
value="{{isset($buscarCliente->correo)?$buscarCliente->correo:''}}" required>
</div>

@stop
