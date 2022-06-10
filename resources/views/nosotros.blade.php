@extends('principal')

@section('cabeceras-ul')
<ul class="nav nav-pills">
  <li class="nav-item">
    <a class="nav-link" href="inicio">Inicio</a>
  </li>
  <li class="nav-item">
    <a class="nav-link active" href="nosotros">Nosotros</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="producto">Productos</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="contacto">Contacto</a>
  </li>
</ul>
@stop

@section('contenido')

<div>Nosotros</div>

<ul>
  <li>Misión</li>
  <li>Visión</li>
  <li>Valores</li>
</ul>

@stop