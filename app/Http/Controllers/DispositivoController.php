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
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {   
        $dispositivo = new Dispositivo();
        $dispositivo->DSP_NOMBRE = $request->DSP_NOMBRE;
        $dispositivo->BDG_ID = $request->BDG_ID;
        $dispositivo->MDL_ID = $request->MDL_ID; 
        $dispositivo->save();  
    }

    
}
