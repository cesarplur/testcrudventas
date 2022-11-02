<?php

namespace App\Http\Controllers;

use App\Models\Personas;
use Illuminate\Http\Request;

class PersonasController extends Controller
{
    
    public function index()
    {
        //pagina de inicio
         $datos = Personas ::all();
         return view('welcome', compact('datos'));
    }

    
    public function create()
    {
        //formulario para agrgar datos
        return view('agregar');
    }

    public function store(Request $request)
    {
        //return view('agregar');
        //print_r($_POST);
       /* $venta = new Ventas();
        $venta->idproducto = $request->post('idproducto');
        $venta->idcliente = $request->post('idcliente');
        $venta->total = $request->post('total');
        $venta->fecha = $request->post('fecha');
        $venta->comentario = $request->post('comentario');
        $venta->save();

        return redirect()->route("personas.index")->with("success", "Venta registrada");
    */
    }

   
    public function show(Personas $personas)
    {
        //Mostrar datos
        //return view('lista');
        $datos = Personas ::all();
        return view('lista', compact('datos'));
    }

    
    public function edit(Personas $personas)
    {
        //obtener datos y mostrar
        return view('actualizar');
    }

    public function update(Request $request, Personas $personas)
    {
        //actaualiza datos en BD
    }

   
    public function destroy(Personas $personas)
    {
        //Elimina registro
    }
}
