@section('form')

<div class="form-group">
    <label>Nombre</label>
    <input type="text" class="form-control" name="nombre"   placeholder="Ingrese el Nombre" 
value="{{isset($buscarProveedor->nombre)?$buscarProveedor->nombre:''}}" required>
</div>
<div class="form-group">
    <label>Dpi</label>
    <input type="text" class="form-control" name="dpi"   placeholder="Ingrese el Dpi" 
value="{{isset($buscarProveedor->dpi)?$buscarProveedor->dpi:''}}" required>
</div>
<div class="form-group">
    <label>Direccion</label>
    <input type="text" class="form-control" name="direccion"   placeholder="Ingrese la Direccion" 
value="{{isset($buscarProveedor->direccion)?$buscarProveedor->direccion:''}}" required>
</div>
<div class="form-group">
    <label>Telefono</label>
    <input type="text" class="form-control" name="telefono"   placeholder="Ingrese el Numero de telefono" 
value="{{isset($buscarProveedor->telefono)?$buscarProveedor->telefono:''}}" required>
</div>
<div class="form-group">
    <label>Correo</label>
    <input type="text" class="form-control" name="correo"   placeholder="Ingrese el Correo" 
value="{{isset($buscarProveedor->correo)?$buscarProveedor->correo:''}}" required>
</div>


@stop
