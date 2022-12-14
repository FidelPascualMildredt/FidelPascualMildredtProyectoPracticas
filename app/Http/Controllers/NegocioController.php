<?php

namespace App\Http\Controllers;

use App\Models\Categoria;
use App\Models\Negocio;
use Illuminate\Http\Request;

class NegocioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // return Negocio::all();
        // $Negocio=Negocio::all(); este es el de jasonn
        // return Negocio::all();
        // return response()->json([$Negocio]); y este
        $negocios = Negocio::all();
        return view('negocios.index',compact('negocios'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categorias = Categoria::where('tipo_cat','negocio')->get();
        return view('negocios.add', compact('categorias'));


        // return view('negocios.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
    //    return $request;
        $negocio = Negocio::create([
            'nombre' => $request->get('nombre'),
            'direccion' => $request->get('direccion'),
            'correo' => $request->get('correo'),
            'telefono' => $request->get('telefono'),
            'calificacion' => $request->get('calificacion'),
            'categorias_id' => 2
        ]);

        // return $negocio;
        return back()->with('succes','La categoría se a creado correctamente');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // $negocio = Negocio::find($id);
        // return $negocio;
        $negocio = Negocio::find($id);
        // $negocio = Negocio::paginate(5);
        return view('negocios.show', compact('negocio'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $negocio = Negocio::find($id);
        return view('negocios.edit', compact('negocio'));

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
        $negocio = Negocio::find($id);

        $negocio->update([
            'nombre' => $request->get('nombre'),
            'direccion' => $request->get('direccion'),
            'correo' => $request->get('correo'),
            'telefono' => $request->get('telefono'),
            'calificacion' => $request->get('calificacion'),
            'categorias_id' => 2
        ]);
        return $negocio;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // Negocio::destroy([1]);
        // $negocio= Negocio::find($id);
        // $negocio->delete();
        // return 'Eliminado';
        $negocio = Negocio::findOrFail($id);
        $negocio->delete();
        return ('el grupo se elimino de manera correcta');
    }
}
