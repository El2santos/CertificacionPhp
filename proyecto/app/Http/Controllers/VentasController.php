<?php

namespace App\Http\Controllers;

use App\ventas;
use Illuminate\Http\Request;

class VentasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $datos['ventas']=\DB::select('select ventas.id, ventas.fecha, clientes.nombre as cliente, cantidad, precioventa, total, camion, 
        frutas.nombre as fruta from ventas inner join frutas on ventas.fruta=frutas.id inner join clientes on
        clientes.id=ventas.cliente');
        return view('Ventas.index' ,$datos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $datacliente['datacliente']=\DB::table('clientes')->get();
        $datafruta['datafruta']=\DB::table('frutas')->get();
        return view('ventas.agregar',$datacliente, $datafruta);
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
        $datosVentas=request()->except('_token');
        ventas::insert($datosVentas);
        return redirect('ventas');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\ventas  $ventas
     * @return \Illuminate\Http\Response
     */
    public function show(ventas $ventas)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\ventas  $ventas
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $buscarVentas=ventas::findOrfail($id);
        return view('ventas.editar',compact('buscarVentas'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\ventas  $ventas
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $datosVentas=request()->except(['_token','_method']);
        ventas::where('id','=',$id)->update($datosVentas);
        return redirect('ventas');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\ventas  $ventas
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        ventas::destroy($id);
        return redirect('ventas');
    }
}
