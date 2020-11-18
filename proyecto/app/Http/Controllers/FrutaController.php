<?php

namespace App\Http\Controllers;

use App\fruta;
use Illuminate\Http\Request;

class FrutaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $datos['frutas']=\DB::table('frutas')->get();
        return view('Frutas.index' ,$datos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('frutas.agregar');
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
        $datosFruta=request()->except('_token');
        fruta::insert($datosFruta);
        return redirect('frutas');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\fruta  $fruta
     * @return \Illuminate\Http\Response
     */
    public function show(fruta $fruta)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\fruta  $fruta
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $buscarFruta=Fruta::findOrfail($id);
        return view('Frutas.editar',compact('buscarFruta'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\fruta  $fruta
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $datosFruta=request()->except(['_token','_method']);
        Fruta::where('id','=',$id)->update($datosFruta);
        return redirect('frutas');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\fruta  $fruta
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        fruta::destroy($id);
        return redirect('frutas');
    }
}
