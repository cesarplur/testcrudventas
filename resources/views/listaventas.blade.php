@extends('layout/plantilla')

@section('tituloPagina', 'Listado Ventas')

@section('contenido')
</br></br></br>
<h5>Listado Ventas</h5>
<div class="card" style="width: auto;">
<div class="table table-responsive">
   
    <table class="table table-sm table-bordered">
       <thead>
        <th>Cod Producto</th>
        <th>Cliente</th>
        <th>Total</th>
        <th>Fecha</th>
        <th>Comentario</th>
    </thead>
       
       <tbody>
       @foreach ($datos as $item)
        <tr>
        <td>{{ $item->idproducto }}</td>
        <td>{{ $item->idcliente }}</td>
        <td>{{ $item->total }}</td>
        <td>{{ $item->fecha }}</td>
        <td>{{ $item->comentario }}</td>
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