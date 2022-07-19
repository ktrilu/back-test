<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Marca;

class MarcaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    
    // Listar las marcas (id, nombre)
    public function index()
    {
        $marcas = Marca::select('marcas.MRC_ID', 'marcas.MRC_NOMBRE')
                    -> get();

        return $marcas;
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $marca = new Marca();
        $marca->MRC_NOMBRE = $request->MRC_NOMBRE;
        $marca->save();
    }

}
