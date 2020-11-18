<?php

namespace App\Http\Controllers;

use App\proveedores;
use Illuminate\Http\Request;

class ProveedoresController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        
        $datos['proveedores']=\DB::select('select proveedores.id, proveedores.nombre, dpi, direccion, telefono, correo, 
        frutas.nombre as fruta from proveedores inner join frutas on proveedores.fruta=frutas.id');
        return view('Proveedores.index' ,$datos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $data['data']=\DB::table('frutas')->get();
        return view('proveedores.agregar',$data);
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
        $datosProveedores=request()->except('_token');
        proveedores::insert($datosProveedores);
        return redirect('proveedores');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\proveedores  $proveedores
     * @return \Illuminate\Http\Response
     */
    public function show(proveedores $proveedores)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\proveedores  $proveedores
     * @return \Illuminate\Http\Response
     */
    public function edit( $id)
    {
        //
        $data['data']=\DB::table('frutas')->get();
        $buscarProveedor=proveedores::findOrfail($id);
        return view('proveedores.editar',compact('buscarProveedor'),$data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\proveedores  $proveedores
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $datosProveedores=request()->except(['_token','_method']);
        proveedores::where('id','=',$id)->update($datosProveedores);
        return redirect('proveedores');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\proveedores  $proveedores
     * @return \Illuminate\Http\Response
     */
    public function destroy(proveedores $proveedores)
    {
        //
        proveedores::destroy($id);
        return redirect('proveedores');
    }
}
