@include('template')
@yield('header')
@yield('nav')

<div class="container">
    <div class="jumbotron">
        <h1 class="display-4">Editar Compras</h1>
        
        
    </div>
<form action="{{url('/compras/'.$buscarCompras->id)}}"  method="post">
    <br>
    @csrf
    @method('PATCH')
    @include('compras.formulario')
    @yield('form')
    
    <br>
    <div class="row justify-content-between">
    <div class="col-s3"><a href="{{url('/compras')}}"  class="btn btn-block bg-danger">Cancelar</a></div>
    <div class="col-s3"><input type="submit"  class="btn btn-block btn-success"  value="Guardar"></div>
    </div>
    </div>
    


</form>


@yield('footer')