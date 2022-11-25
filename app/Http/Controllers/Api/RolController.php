<?php

namespace App\Http\Controllers\Api;

use App\Models\Rol;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class RolController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
         $rol=Rol::all();
        // return Rol::all();
        return response()->json(['rol'=>$rol],200);
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
        $input=$request->all();
        Rol::create($input);

        return ('el rol se dio de alta con exito ');
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
        $rol = Rol::find($id);

        return Response()->json($rol,200);
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
        $rol = Rol::findOrFail($id);
        $input=$request->all();
        $rol->update($input);

        return ('el rol se actualizo con exito');
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
        $rol = Rol::findOrFail($id);

        $rol->delete();

        return ('el rol se elimino de manera correcta');
    }
}
