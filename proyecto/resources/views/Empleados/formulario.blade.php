@section('form')

<div class="form-group">
    <label>Nombre</label>
    <input type="text" class="form-control" name="nombre"   placeholder="Ingrese el Nombre" autocomplete="off"
value="{{isset($buscarEmpleado->nombre)?$buscarEmpleado->nombre:''}}" required>
</div>
<div class="form-group">
    <label>Dpi</label>
    <input type="text" class="form-control" name="dpi"   placeholder="Ingrese el Dpi" autocomplete="off"
value="{{isset($buscarEmpleado->dpi)?$buscarEmpleado->dpi:''}}" required>
</div>
<div class="form-group">
    <label>Direccion</label>
    <input type="text" class="form-control" name="direccion"   placeholder="Ingrese la Direccion" autocomplete="off"
value="{{isset($buscarEmpleado->direccion)?$buscarEmpleado->direccion:''}}" required>
</div>
<div class="form-group">
    <label>Telefono</label>
    <input type="text" class="form-control" name="telefono"   placeholder="Ingrese el Numero de telefono" autocomplete="off"
value="{{isset($buscarEmpleado->telefono)?$buscarEmpleado->telefono:''}}" required>
</div>
<div class="form-group">
    <label>Correo</label>
    <input type="text" class="form-control" name="correo"   placeholder="Ingrese el Correo" autocomplete="off"
value="{{isset($buscarEmpleado->correo)?$buscarEmpleado->correo:''}}" required>
</div>

@stop
