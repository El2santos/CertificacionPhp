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
        $datosf['compras']=\DB::select('select compras.id, compras.fecha, proveedores.nombre as proveedor, cantidad, costo, total, 
        frutas.nombre as fruta from compras inner join frutas on compras.fruta=frutas.id inner join proveedores
         on proveedores.id=compras.proveedor');
        
        return view('Compras.index' ,$datosf);
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
        return view('compras.agregar',$data, $dataf);
        
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
