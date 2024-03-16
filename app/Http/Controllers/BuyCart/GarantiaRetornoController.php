<?php

namespace App\Http\Controllers\BuyCart;

use App\Http\Controllers\Controller;
use App\Http\Requests\BuyCart\GarantiaRetornoRequest;
use App\Http\Resources\BuyCart\GarantiaRetornoResource;
use App\Models\BuyCart\GarantiaRetorno;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class GarantiaRetornoController extends Controller
{
    public function index()
    {
        $results = GarantiaRetorno::all();
        $result = GarantiaRetornoResource::collection($results);
        return response()->json(compact('results'));
    }
    public function store(GarantiaRetornoRequest $request)
    {
        try {
            DB::beginTransaction();
            $datos = $request->validated();
            $precio_peso = GarantiaRetorno::create($datos);
            $model = $precio_peso;
            $mensaje = 'Se ha creado GarantiaRetorno Exitosamente';
            DB::commit();
            return response()->json(compact('mensaje','model'));
        } catch (Exception $e) {
            DB::rollBack();
            return response()->json(['mensaje' => 'Ha ocurrido un error al insertar el registro' . $e->getMessage() . ' ' . $e->getLine()], 422);
        }
    }
    public function update(GarantiaRetornoRequest $request, GarantiaRetorno $precio_peso)
    {
        try {
            DB::beginTransaction();
            $datos = $request->validated();
            $precio_peso->update($datos);
            $mensaje = 'Se ha modificado GarantiaRetorno Exitosamente';
            DB::commit();
            return response()->json(compact('mensaje'));
        } catch (Exception $e) {
            DB::rollBack();
            return response()->json(['mensaje' => 'Ha ocurrido un error al insertar el registro' . $e->getMessage() . ' ' . $e->getLine()], 422);
        }
    }
    public function destroy(GarantiaRetorno $precio_peso)
    {
        $precio_peso->delete();
        return response()->json(compact('GarantiaRetorno'));
    }
}
