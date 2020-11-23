<?php

namespace App\Http\Controllers;

use App\compras;
use Illuminate\Http\Request;

class ComprasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $datos['compras']=\DB::table('compras')->get();
        return view('Compras.index' ,$datos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $data['data']=\DB::table('proveedores')->get();
        $dataf['dataf']=\DB::table('frutas')->get();
        $dato3['dato3']=\DB::table('unidademedidas')->get();
        return view('compras.agregar',$data, $dataf, $dato3);
        
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
        $datosCompras=request()->except('_token');
        compras::insert($datosCompras);
        return redirect('compras');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\compras  $compras
     * @return \Illuminate\Http\Response
     */
    public function show(compras $compras)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\compras  $compras
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $buscarCompras=compras::findOrfail($id);
        return view('compras.editar',compact('buscarCompras'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\compras  $compras
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $datosCompras=request()->except(['_token','_method']);
        compras::where('id','=',$id)->update($datosCompras);
        return redirect('compras');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\compras  $compras
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        compras::destroy($id);
        return redirect('compras');
    }
}
