@extends('layout/plantilla')

@section('tituloPagina', 'Listado')

@section('contenido')
</br></br></br>
<h5>Listado</h5>
<div class="card" style="width: auto;">
<div class="table table-responsive">
   
    <table class="table table-sm table-bordered">
       <thead>
       <th>No Cliente</th>
        <th>Nombre</th>
        <th>Direccion</th>
        <th>Telefono</th>
    </thead>
       
       <tbody>
       @foreach ($datos as $item)
        <tr>
        <td>{{ $item->id }}</td>
        <td>{{ $item->nombre }}</td>
        <td>{{ $item->direccion }}</td>
        <td>{{ $item->telefono }}</td>
        </tr>   
        @endforeach
       </tbody>
   </table>   
   </br>
   <p>
</br>
   <a href="{{ route("personas.index") }}" class="btn btn-primary">Inicio</a>
   </p>
</div>
</div>

</br></br></br>
@endsection