@include('template')
@yield('header')
@yield('nav')

<div class="container">
    <div class="jumbotron">
        <h1 class="display-4">Editar proveedores</h1>
        
        
    </div>
<form action="{{url('/proveedores/'.$buscarProveedor->id)}}"  method="post">
    <br>
    @csrf
    @method('PATCH')
    @include('proveedores.formulario')
    @yield('form')
    
    <br>
    <div class="row justify-content-between">
    <div class="col-s3"><a href="{{url('/proveedores')}}"  class="btn btn-block bg-danger">Cancelar</a></div>
    <div class="col-s3"><input type="submit"  class="btn btn-block btn-success"  value="Guardar"></div>
    </div>
    </div>
    


</form>


@yield('footer')