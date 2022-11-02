<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Appcontroller;
use App\Models\Ventas;
use Illuminate\Http\Request;

class VentasController extends Controller
{
    public function index()
    {
        //
    }

   
    public function create()
    {
        //
    }

    
    public function store(Request $request)
    {
        //return view('agregar');
        //print_r($_POST);
        $venta = new Ventas();
        $venta->idproducto = $request->post('idproducto');
        $venta->idcliente = $request->post('idcliente');
        $venta->total = $request->post('total');
        $venta->fecha = $request->post('fecha');
        $venta->comentario = $request->post('comentario');
        $venta->save();

        return redirect()->route("ventas.show")->with("success", "Venta registrada");
    
    }

    public function show(Ventas $ventas)
    {
        $datos = Ventas ::all();
        return view('listaventas', compact('datos'));
    }

    
    public function edit(Ventas $ventas)
    {
        //
    }

    
    public function update(Request $request, Ventas $ventas)
    {
        //
    }

    public function destroy(Ventas $ventas)
    {
        //
    }
}
