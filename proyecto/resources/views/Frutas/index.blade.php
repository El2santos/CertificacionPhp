@include('template')
@yield('header')
@yield('nav')

<div class="container">
    <div class="jumbotron">
        <h1 class="display-4">Listado de frutas</h1>
        <hr class="my-4">
        <a href="{{url('/frutas/create')}}" class="btn btn-success">Nuevo</a>
    </div>
    
      


<table  class="table table-hover">
    <thead>
        <tr>
        <th scope="col">id</th>
        <th scope="col">Fruta</th>
        <th scope="col">Acciones</th>
        
    </tr>
    </thead>
    <tbody>
        @foreach ($frutas as $fruta)
        <tr>
    <td>{{$fruta->id}}</td>
    <td>{{$fruta->nombre}}</td>
    
    <td>
        <div class="row">
    <a href="{{url('/frutas/'.$fruta->id.'/edit')}}"  class="btn btn-info">Editar</a>| |
    <form method="POST" action="{{url('/frutas/'.$fruta->id)}}">
    @csrf
    @method('DELETE')
    <button type="submit" onclick="return confirm('Borrar Fruta?');" class="btn btn-danger">Borrar</button>
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