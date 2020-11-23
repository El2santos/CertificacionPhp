@section('form')

<div class="form-group">
    <label>Fecha</label>
    <input type="date" class="form-control" name="fecha"   placeholder="Ingrese la fecha" 
value="{{isset($buscarCompras->fecha)?$buscarCompras->fecha:''}}" required>
</div>
<div class="form-group">
    <label>Proveedor</label>
    <select name="proveedor" id="proveedores" class="form-control">
        <option value="" selected disabled>Seleccione un proveedor</option>
        @foreach($data as $proveedores)
        @if(isset($buscarCompra))
        @if($proveedores->id==$buscarCompra->proveedores)
        <option value="{{$proveedores->id}}" selected>{{$proveedores->nombre}}</option>
        @else
        <option value="{{$proveedores->id}}">{{$proveedores->nombre}}</option>
        @endif
        @else
        <option value="{{$proveedores->id}}">{{$proveedores->nombre}}</option>
        @endif
        @endforeach

    </select>

</div>
<div class="form-group">
    <label>fruta</label>
    <select name="fruta" id="fruta" class="form-control">
        <option value="" selected disabled>Seleccione una fruta</option>
        @foreach($dataf as $fruta)
        @if(isset($buscarProveedores))
        @if($fruta->id==$buscarProveedores->fruta)
        <option value="{{$fruta->id}}" selected>{{$fruta->nombre}}</option>
        @else
        <option value="{{$fruta->id}}">{{$fruta->nombre}}</option>
        @endif
        @else
        <option value="{{$fruta->id}}">{{$fruta->nombre}}</option>
        @endif
        @endforeach

    </select>
</div>
<div class="form-group">
    <label>Cantidad</label>
    <input type="number" class="form-control" name="cantidad" id="valor1" oninput="calcular()"  placeholder="Ingrese la Cantidad la cual siempre sera en libras" 
value="{{isset($buscarCompras->cantidad)?$buscarCompras->cantiadad:''}}" required>
</div>



<div class="form-group">
    <label>Costo</label>
    <input type="number" class="form-control" name="costo" id="valor2" oninput="calcular()"  placeholder="Ingrese el costo por libra" 
value="{{isset($buscarCompras->costo)?$buscarCompras->costo:''}}" required>
</div>
<div class="form-group">
    <label>total</label>
    <input type="number" class="form-control" name="total" id="total"    
value="{{isset($buscarCompras->total)?$buscarCompras->total:''}}" required>
</div>

<script>
function calcular(){
    try{
        var a = parseFloat(document.getElementById("valor1").value) || 0,
        b = parseFloat(document.getElementById("valor2").value) || 0;

        document.getElementById("total").value= a * b;
    }
    catch (e) {}
}
</script>
@stop
