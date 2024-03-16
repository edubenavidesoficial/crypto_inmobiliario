<?php

namespace App\Http\Controllers\BuyCart;

use App\Http\Controllers\Controller;
use App\Http\Requests\BuyCart\PrecioPesoRequest;
use App\Http\Resources\BuyCart\PrecioPesoResource;
use App\Models\BuyCart\PrecioPeso;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PrecioPesoController extends Controller
{
    public function index()
    {
        $results = PrecioPeso::all();
        $result = PrecioPesoResource::collection($results);
        return response()->json(compact('results'));
    }
    public function store(PrecioPesoRequest $request)
    {
        try {
            DB::beginTransaction();
            $datos = $request->validated();
            $precio_peso = PrecioPeso::create($datos);
            $model = $precio_peso;
            $mensaje = 'Se ha creado PrecioPeso Exitosamente';
            DB::commit();
            return response()->json(compact('mensaje','model'));
        } catch (Exception $e) {
            DB::rollBack();
            return response()->json(['mensaje' => 'Ha ocurrido un error al insertar el registro' . $e->getMessage() . ' ' . $e->getLine()], 422);
        }
    }
    public function update(PrecioPesoRequest $request, PrecioPeso $precio_peso)
    {
        try {
            DB::beginTransaction();
            $datos = $request->validated();
            $precio_peso->update($datos);
            $mensaje = 'Se ha modificado PrecioPeso Exitosamente';
            DB::commit();
            return response()->json(compact('mensaje'));
        } catch (Exception $e) {
            DB::rollBack();
            return response()->json(['mensaje' => 'Ha ocurrido un error al insertar el registro' . $e->getMessage() . ' ' . $e->getLine()], 422);
        }
    }
    public function destroy(PrecioPeso $precio_peso)
    {
        $precio_peso->delete();
        return response()->json(compact('PrecioPeso'));
    }
}
