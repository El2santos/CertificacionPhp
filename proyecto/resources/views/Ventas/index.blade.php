@include('template')
@yield('header')
@yield('nav')

<div class="container">
    <div class="jumbotron">
        <h1 class="display-4">Listado de Ventas</h1>
        <hr class="my-4">
        <a href="{{url('/ventas/create')}}" class="btn btn-success">Nuevo</a>
    </div>


<table  class="table table-hover">
    <thead>
        <tr>
        <th scope="col">id</th>
        <th scope="col">Fecha</th>
        <th scope="col">Cliente</th>
        <th scope="col">Fruta</th>
        <th scope="col">Cantidad</th>
        <th scope="col">Precio de venta</th>
        <th scope="col">Total</th>
        <th scope="col">Camion</th>
        <th scope="col">Acciones</th>
    </tr>
    </thead>
    <tbody>
        @foreach ($ventas as $venta)
        <tr>
    <td>{{$venta->id}}</td>
    <td>{{$venta->fecha}}</td>
    <td>{{$venta->cliente}}</td>
    <td>{{$venta->fruta}}</td>
    <td>{{$venta->cantidad}}</td>
    <td>{{$venta->precioventa}}</td>
    <td>{{$venta->total}}</td>
    <td>{{$venta->camion}}</td>
    <td>
        <div class="row">
    <a href="{{url('/ventas/'.$venta->id.'/edit')}}"  class="btn btn-info">Editar</a>| |
    <form method="POST" action="{{url('/ventas/'.$venta ->id)}}">
    @csrf
    @method('DELETE')
    <button type="submit" onclick="return confirm('Borrar Venta?');" class="btn btn-danger">Borrar</button>
    </form>
</div>
    </td>
    <td>

    </td>
</tr>
@endforeach
    </tbody>
</table>
</div>

@yield('footer')