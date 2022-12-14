<?php

namespace App\Http\Controllers\Api;

use App\Models\Negocio;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class NegocioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $negocio = Negocio::all();

        return Response()->json(['negocios'=>$negocio],200);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $negocio = Negocio::create([
            'nombre' => $request->get('nombre'),
            'direccion' => $request->get('direccion'),
            'correo' => $request->get('correo'),
            'telefono' => $request->get('telefono'),
            'calificacion' => $request->get('calificacion'),
            'categorias_id' => 2
        ]);

        return $negocio;
        // return back()->with('succes','La categoría se a creado correctamente');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $negocio = Negocio::find($id);

        return Response()->json($negocio,200);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $negocio = Negocio::find($id);

        $negocio->update([
            'nombre' => $request->get('nombre'),
            'direccion' => $request->get('direccion'),
            'correo' => $request->get('correo'),
            'telefono' => $request->get('telefono'),
            'calificacion' => $request->get('calificacion'),
            'categorias_id' => 2
        ]);
        return ('el negocio se actualizo con exito');
        // return $negocio;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $negocio = Negocio::findOrFail($id);

        $negocio->delete();

        return ('el negocio se elimino de manera correcta');
    }
}
