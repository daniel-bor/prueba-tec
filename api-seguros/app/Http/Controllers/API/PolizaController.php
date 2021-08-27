<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Requests\ActualizarPolizaRequest;
use App\Http\Requests\GuardarPolizaRequest;
use App\Http\Resources\PolizaResource;
use App\Models\Poliza;
use Illuminate\Http\Request;

class PolizaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return PolizaResource::collection(Poliza::select('polizas.id', 'clientes.nombre', 'clientes.apellido', 'productos.codigo', 'polizas.estado')->join('clientes', 'polizas.cliente_id', '=', 'clientes.id')->join('productos', 'polizas.producto_id', '=', 'productos.id')->get());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(GuardarPolizaRequest $request)
    {
        Poliza::create($request->all());
        return response()->json([
            'res' => true,
            'msg' => 'Poliza Guardada Correctamente'
        ], 200);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Poliza $poliza)
    {
        return response()->json([
            'res' => true,
            'poliza' => $poliza
        ], 200);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ActualizarPolizaRequest $request, Poliza $poliza)
    {
        $poliza->update($request->all());
        return response()->json([
            'res' => true,
            'msg' => 'Poliza Actualizada Correctamente'
        ], 200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Poliza $poliza)
    {
        $poliza->delete();
        return response()->json([
            'res' => true,
            'msg' => 'Poliza Eliminada Correctamente'
        ]);
    }
}
