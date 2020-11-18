@include('template')
@yield('header')
@yield('nav')

<div class="container">
    <div class="jumbotron">
        <h1 class="display-4">Listado de Empleados</h1>
        <hr class="my-4">
        <a href="{{url('/empleados/create')}}" class="btn btn-success">Nuevo</a>
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
    </tr>
    </thead>
    <tbody>
        @foreach ($empleados as $empleado)
        <tr>
    <td>{{$empleado->id}}</td>
    <td>{{$empleado->nombre}}</td>
    <td>{{$empleado->dpi}}</td>
    <td>{{$empleado->direccion}}</td>
    <td>{{$empleado->telefono}}</td>
    <td>{{$empleado->correo}}</td>
    <td>
    <a href="{{url('/empleados/'.$empleado->id.'/edit')}}"  class="btn btn-info">Editar</a>||
    <form method="POST" action="{{url('/empleados/'.$empleado->id)}}">
    @csrf
    @method('DELETE')
    <button type="submit" onclick="return confirm('Borrar Empleado?');" class="btn btn-danger">Borrar</button>
    </form>
    </td>
    <td>

    </td>
</tr>
@endforeach
    </tbody>
</table>

@yield('footer')