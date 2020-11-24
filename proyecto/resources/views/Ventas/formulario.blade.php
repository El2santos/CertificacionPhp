@section('form')

<div class="form-group">
    <label>Fecha</label>
    <input type="date" class="form-control" name="fecha"   placeholder="Ingrese la fecha" 
value="{{isset($buscarVentas->fecha)?$buscarVentas->fecha:''}}" required>
</div>
<div class="form-group">
    <label>Cliente</label>
    <select name="cliente" id="clientes" class="form-control">
        <option value="" selected disabled>Seleccione un Cliente</option>
        @foreach($datacliente as $clientes)
        @if(isset($buscarVenta))
        @if($clientes->id==$buscarVenta->clientes)
        <option value="{{$clientes->id}}" selected>{{$clientes->nombre}}</option>
        @else
        <option value="{{$clientes->id}}">{{$clientes->nombre}}</option>
        @endif
        @else
        <option value="{{$clientes->id}}">{{$clientes->nombre}}</option>
        @endif
        @endforeach

    </select>

</div>
<div class="form-group">
    <label>fruta</label>
    <select name="fruta" id="fruta" class="form-control">
        <option value="" selected disabled>Seleccione una fruta</option>
        @foreach($datafruta as $fruta)
        @if(isset($buscarVenta))
        @if($datafruta->id==$buscarVenta->fruta)
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
    <input type="text" class="form-control" name="cantidad" id="valor1" oninput="calcular()"  placeholder="Ingrese la Cantidad  en libras" 
value="{{isset($buscarVentas->cantidad)?$buscarVentas->cantiadad:''}}" required>
</div>
<div class="form-group">
    <label>Precio de Venta</label>
    <input type="text" class="form-control" name="costo" id="valor2" oninput="calcular()"  placeholder="Ingrese el precio de venta por libra" 
value="{{isset($buscarVentas->costo)?$buscarVentas->costo:''}}" required>
</div>
<div class="form-group">
    <label>total</label>
    <input type="text" class="form-control" name="total" id="total"    
value="{{isset($buscarVentas->total)?$buscarVentas->total:''}}" required>
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
