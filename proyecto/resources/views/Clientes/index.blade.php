@include('template')
@yield('header')
@yield('nav')

<div class="container">
    <div class="jumbotron">
        <h1 class="display-4">Listado de Clientes</h1>
        <hr class="my-4">
        <a href="{{url('/clientes/create')}}" class="btn btn-success">Nuevo</a>
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
        <th scope="col">Estado</th>
    </tr>
    </thead>
    <tbody>
        @foreach ($clientes as $cliente)
        <tr>
    <td>{{$cliente->id}}</td>
    <td>{{$cliente->nombre}}</td>
    <td>{{$cliente->dpi}}</td>
    <td>{{$cliente->direccion}}</td>
    <td>{{$cliente->telefono}}</td>
    <td>{{$cliente->correo}}</td>
    <td>
        <div class="row">
    <a href="{{url('/clientes/'.$cliente->id.'/edit')}}"  class="btn btn-info">Editar</a>||
    <form method="POST" action="{{url('/clientes/'.$cliente->id)}}">
    @csrf
    @method('DELETE')
    <button type="submit" onclick="return confirm('Borrar Cliente?');" class="btn btn-danger">Borrar</button>
    </form>
</div>
    </td>
    <td>

    </td>
</tr>
@endforeach
    </tbody>
</table>

@yield('footer')