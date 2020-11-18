@include('template')
@yield('header')
@yield('nav')

<div class="container">
    <div class="jumbotron">
        <h1 class="display-4">Agregar nuevo Empleado</h1>
        
        
    </div>
<form action="{{url('/empleados')}}"  method="post">
    <br>
    @csrf
    @include('empleados.formulario')
    @yield('form')
    
    <br>
    <div class="row justify-content-between">
    <div class="col-s3"><a href="{{url('/empleados')}}"  class="btn btn-block bg-danger">Cancelar</a></div>
    <div class="col-s3"><input type="submit"  class="btn btn-block btn-success"  value="Guardar"></div>
    </div>
    </div>
    


</form>


@yield('footer')