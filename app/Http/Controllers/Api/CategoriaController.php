<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Categoria;
use Illuminate\Http\Request;

class CategoriaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $categoria = Categoria::all();

        return Response()->json(['categoria'=>$categoria],200);
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
        $categoria= new Categoria;
        $categoria -> nombre = $request->input('nombre');
        $categoria -> cantidad = $request->input('cantidad');
        $categoria -> tipo_cat = $request->input('tipo');
        return ('Categoria agregada con exito');
        // return $categoria;
        // $categoria->save();
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
        $categoria = Categoria::find($id);

        return Response()->json($categoria,200);
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
        $categoria = Categoria::findOrFail($id);
        $categoria->update([
            'nombre' => $request->get('nombre'),
            'tipo_cat' => $request->get('tipo')
           ]);

        return ('el grupo se actualizo con exito');
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
        $categoria = Categoria::findOrFail($id);
        $categoria->delete();
        return ('el grupo se elimino de manera correcta');
    }
}
