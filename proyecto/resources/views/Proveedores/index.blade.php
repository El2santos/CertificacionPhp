@include('template')
@yield('header')
@yield('nav')

<div class="container">
    <div class="jumbotron">
        <h1 class="display-4">Listado de Proveedores</h1>
        <hr class="my-4">
        <a href="{{url('/proveedores/create')}}" class="btn btn-success">Nuevo</a>
    </div>


<table  class="table table-hover">
    <thead>
        <tr>
        <th scope="col">id</th>
        <th scope="col">Nombre</th>
        <th scope="col">Dpi</th>
        <th scope="col">Direccion</th>
        <th scope="col">Telefono</th>
        <th scope="col">Correo</th>
        <th scope="col">fruta</th>
        <th scope="col">acciones</th>
    </tr>
    </thead>
    <tbody>
        @foreach ($proveedores as $proveedor)
        <tr>
    <td>{{$proveedor->id}}</td>
    <td>{{$proveedor->nombre}}</td>
    <td>{{$proveedor->dpi}}</td>
    <td>{{$proveedor->direccion}}</td>
    <td>{{$proveedor->telefono}}</td>
    <td>{{$proveedor->correo}}</td>
    <td>{{$proveedor->fruta}}</td>
    <td>
        <div class="row">
    <a href="{{url('/proveedores/'.$proveedor->id.'/edit')}}"  class="btn btn-info">Editar</a>| |
    <form method="POST" action="{{url('/proveedores/'.$proveedor->id)}}">
    @csrf
    @method('DELETE')
    <button type="submit" onclick="return confirm('Borrar proveedor?');" class="btn btn-danger">Borrar</button>
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