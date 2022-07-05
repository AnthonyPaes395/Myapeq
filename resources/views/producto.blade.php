@extends('principal')

@section('cabeceras-ul')
<ul class="nav nav-pills">
  <li class="nav-item">
    <a class="nav-link" href="inicio">Inicio</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="nosotros">Nosotros</a>
  </li>
  <li class="nav-item">
    <a class="nav-link active" href="producto">Productos</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="contacto">Contacto</a>
  </li>
</ul>
@stop

@section('contenido')

<!-- <div>Productos</div> -->
  <table class="table">
    <thead>
      <tr>
        <th>Código</th>
        <th>Nombre</th>
        <th>Estado</th>
        <!-- <th>Acción</th> -->
      </tr>
    </thead>
    <tbody>
      @foreach($catalogo as $cat)
      <tr>
        <th>{{$cat->codigo}}</th>
        <th>{{$cat->nombre}}</th>
        <th>{{$cat->estado=='1'?'Activo':'Inactivo'}}</th>
        <!-- <th><button>{{$cat->estado=='1'?'Inactivar':'Activar'}}</button></th> -->
      </tr>
      @endforeach
    </tbody>
  </table>
<!--?php echo"<pre>";
print_r($catalogo);
echo "</pre>";
?-->

@stop