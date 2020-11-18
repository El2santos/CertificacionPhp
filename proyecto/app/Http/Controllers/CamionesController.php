<?php

namespace App\Http\Controllers;

use App\camiones;
use Illuminate\Http\Request;

class CamionesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $datos['camiones']=\DB::table('camiones')->get();
        return view('Camiones.index' ,$datos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('camiones.agregar');
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
        $datosCamion=request()->except('_token');
        camiones::insert($datosCamion);
        return redirect('camiones');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\camiones  $camiones
     * @return \Illuminate\Http\Response
     */
    public function show(camiones $camiones)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\camiones  $camiones
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $buscarCamion=camiones::findOrfail($id);
        return view('camiones.editar',compact('buscarCamion'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\camiones  $camiones
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $datosCamion=request()->except(['_token','_method']);
        camiones::where('id','=',$id)->update($datosCamion);
        return redirect('camiones');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\camiones  $camiones
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        camiones::destroy($id);
        return redirect('camiones');
    }
}
