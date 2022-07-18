<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Dispositivo;

class DispositivoController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dispositivos = Dispositivo::join('bodegas', 'bodegas.BDG_ID', '=', 'dispositivos.BDG_ID')
            ->join('modelos', 'modelos.MDL_ID', '=', 'dispositivos.MDL_ID')
            ->join('marcas', 'marcas.MRC_ID', '=', 'modelos.MRC_ID')
            ->get();
        return $dispositivos;
    }
    
    //- Listar los dispositivos existentes en una bodega
    
    public function dispositivosBodega($id_bodega)
    {
        $dispositivos = Dispositivo::join('bodegas', 'bodegas.BDG_ID', '=', 'dispositivos.BDG_ID')
            ->join('modelos', 'modelos.MDL_ID', '=', 'dispositivos.MDL_ID')
            ->join('marcas', 'marcas.MRC_ID', '=', 'modelos.MRC_ID')
            ->where('bodegas.BDG_ID', $id_bodega)
            ->get();
        return $dispositivos;
    }

    // Listar dispositivos de un modelo o marca (id, nombre, modelo, marca)

    public function dispositivosModelo($id_modelo)
    {
        $dispositivos = Dispositivo::select('dispositivos.DSP_ID', 'dispositivos.DSP_NOMBRE','modelos.MDL_NOMBRE', 'marcas.MRC_NOMBRE')
        ->join('bodegas', 'bodegas.BDG_ID', '=', 'dispositivos.BDG_ID')
            ->join('modelos', 'modelos.MDL_ID', '=', 'dispositivos.MDL_ID')
            ->join('marcas', 'marcas.MRC_ID', '=', 'modelos.MRC_ID')
            ->where('modelos.MDL_ID', $id_modelo)
            ->get();
        return $dispositivos;
    }
    
    // Listar dispositivos de un modelo o marca (id, nombre, modelo, marca)

    public function dispositivosMarca($id_marca)
    {
        $dispositivos = Dispositivo::select('dispositivos.DSP_ID', 'dispositivos.DSP_NOMBRE', 'marcas.MRC_NOMBRE')
            ->join('modelos', 'modelos.MDL_ID', '=', 'dispositivos.MDL_ID')
            ->join('marcas', 'marcas.MRC_ID', '=', 'modelos.MRC_ID')
            ->where('marcas.MRC_ID', $id_marca)
            ->get();
        return $dispositivos;
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
        //
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
        //
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
    }
}
