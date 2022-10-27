<?php

namespace App\Http\Controllers;

use App\Models\Rol;
use App\Http\Controllers\jsonPlaceholder;
use Illuminate\Http\Request;

class RolController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Rol=Rol::all();
        // return Rol::all();
        return response()->json([$Rol]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $rol = Rol::create([
            'nombre' => $request->get('nombre')
        ]);

        return $rol;
    }

    /**
     * Display the specified resource.
     *muestra el registro un registro unicamente(find) es buscar
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
       $rol = Rol::find($id);

       return $rol;
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
        $rol = Rol::find($id);

        $rol->update([
            'nombre' => $request->get('nombre')
        ]);

        return $rol;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Rol::destroy([1,2,3]);
        // $rol = Rol::find($id);
        // $rol->delete();
        return 'Eliminado';

    }
}
