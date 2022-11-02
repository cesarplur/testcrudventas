@extends('layout/plantilla')

@section("tituloPagina", "Agregar Venta")
@section('contenido')
</br></br></br>
<div class="card">
  <div class="card-header">
    Agregar Venta
  </div>
  <div class="card-body">
    <p class="card-text">
    <form action="{{ route('ventas.store') }}" method="POST">
        @csrf
        <label for="">Codigo de Producto</label>
        <input type="text" name="idproducto" class="form-control" required>
        <label for="">Numero de Cliente</label>
        <input type="text" name="idcliente" class="form-control" required>
        <label for="">Total</label>
        <input type="number" name="total" class="form-control" step="0.01" required>
        <label for="">Fecha</label>
        <input type="date" name="fecha" class="form-control" value="<?php echo date("Y-m-d");?>" required>
        <label for="">Comentarios</label>
        <input type="text" name="comentario" class="form-control" >
        <br>
        <div class="btn-toolbar">
        <button class="btn btn-primary" style="margin-right: 15px">Agregar venta</button>
        <a href="{{ route("personas.index") }}" class="btn btn-info">Inicio</a>
        </div>
    </form>
    </p>
  </div>
  
</div>

@endsection