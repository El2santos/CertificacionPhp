@include('template')
@yield('header')
@yield('nav')

<div class="container">
    <div class="jumbotron">
        <h1 class="display-4">Listado de Camiones</h1>
        <hr class="my-4">
        <a href="{{url('/camiones/create')}}" class="btn btn-success">Nuevo</a>
    </div>
    
      


<table  class="table table-hover">
    <thead>
        <tr>
        <th scope="col">id</th>
        <th scope="col">Marca</th>
        <th scope="col">Placa</th>
        <th scope="col">Acciones</th>
        
    </tr>
    </thead>
    <tbody>
        @foreach ($camiones as $camion)
        <tr>
    <td>{{$camion->id}}</td>
    <td>{{$camion->marca}}</td>
    <td>{{$camion->placas}}</td>
    
    <td>
        <div class="row">
    <a href="{{url('/camiones/'.$camion->id.'/edit')}}"  class="btn btn-info">Editar</a>| |
    <form method="POST" action="{{url('/camiones/'.$camion->id)}}">
    @csrf
    @method('DELETE')
    <button type="submit" onclick="return confirm('Borrar Camion?');" class="btn btn-danger">Borrar</button>
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