@extends('layout/plantilla')

@section('tituloPagina', 'Menu')

@section('contenido')

</br></br></br>
<h5>Agregar Venta</h5>
</br>
<a href="{{ route("personas.create") }}" class="btn btn-primary">Venta</a>
</br></br>
<h5>Listado Clientes</h5>
</br>
<a href="{{ route("personas.show") }}" class="btn btn-primary">Listado</a>
</br></br>
<h5>Listado Ventas</h5>
</br>
<a href="{{ route("ventas.show") }}" class="btn btn-primary">Listado</a>

{{--<div class="card" style="width: auto;">
<div class="table table-responsive">
   
    <table class="table table-sm table-bordered">
       <thead>
        <th>Nombre</th>
        <th>Direccion</th>
        <th>Telefono</th>
    </thead>
       
       <tbody>
       @foreach ($datos as $item)
        <tr>
        <td>{{ $item->nombre }}</td>
        <td>{{ $item->direccion }}</td>
        <td>{{ $item->telefono }}</td>
        </tr>   
        @endforeach
       </tbody>
   </table>   
   </br>
   <p>
   <a href="{{ route("personas.show") }}" class="btn btn-primary">Listado</a>
   </p>
</div>
</div>--}}

</br></br></br>
{{--<div class="card" style="width: 18rem;">
  <img src="..." class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Producto 1</h5>
    <p class="card-text"> content.</p>
  </div>
  <ul class="list-group list-group-flush">
    <li class="list-group-item">An item</li>
    <li class="list-group-item">A second item</li>
    <li class="list-group-item">A third item</li>
  </ul>
  <div class="card-body">
    <a href="#" class="card-link">Card link</a>
    <a href="#" class="card-link">Another link</a>
  </div>
</div>--}}
{{--<div class="row">
    <h1>Hello world</h1>
    {{ print_r($datos); }}
    <a href=" {{ route('personas.create') }}">Agregar</a>
   
</div>--}}

@endsection