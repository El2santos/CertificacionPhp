@include('template')
@yield('header')
@yield('nav')

<div class="container">
    <div class="jumbotron">
        <h1 class="display-4">Listado de Compras</h1>
        <hr class="my-4">
        <a href="{{url('/compras/create')}}" class="btn btn-success">Nuevo</a>
    </div>


<table  class="table table-hover">
    <thead>
        <tr>
        <th scope="col">id</th>
        <th scope="col">Fecha</th>
        <th scope="col">Proveedor</th>
        <th scope="col">Fruta</th>
        <th scope="col">Cantidad</th>
        <th scope="col">Unidad</th>
        <th scope="col">Costo</th>
        <th scope="col">Total</th>
        <th scope="col">Acciones</th>
    </tr>
    </thead>
    <tbody>
        @foreach ($compras as $compra)
        <tr>
    <td>{{$compra->id}}</td>
    <td>{{$compra->fecha}}</td>
    <td>{{$compra->proveedor}}</td>
    <td>{{$compra->fruta}}</td>
    <td>{{$compra->cantidad}}</td>
    <td>{{$compra->unidad}}</td>
    <td>{{$compra->costo}}</td>
    <td>{{$compra->total}}</td>
    <td>
        <div class="row">
    <a href="{{url('/compras/'.$compra->id.'/edit')}}"  class="btn btn-info">Editar</a>| |
    <form method="POST" action="{{url('/compras/'.$compra->id)}}">
    @csrf
    @method('DELETE')
    <button type="submit" onclick="return confirm('Borrar Compra?');" class="btn btn-danger">Borrar</button>
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