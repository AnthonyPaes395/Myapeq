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
    <a class="nav-link" href="producto">Productos</a>
  </li>
  <li class="nav-item">
    <a class="nav-link active" href="contacto">Contacto</a>
  </li>
</ul>
@stop

@section('contenido')

<!-- <div>Productos</div> -->
  <table class="table">
    <thead>
      <tr>
        <th>id</th>
        <th>Nombre</th>
        <th>apellido</th>
        <!-- <th>Acción</th> -->
      </tr>
    </thead>
    <tbody>
      @foreach($usuario as $usu)
      <tr>
        <th>{{$usu->id}}</th>
        <th>{{$usu->nombre}}</th>
        <th>{{$usu->apellido}}</th>
        
      </tr>
      @endforeach
    </tbody>
  </table>
  <a href="https://wa.me/964867583/?text=tu%20texto%20personalizado" target="_blank">
    <img src="wssp.png" width="50" height="50">
 </a>

@stop