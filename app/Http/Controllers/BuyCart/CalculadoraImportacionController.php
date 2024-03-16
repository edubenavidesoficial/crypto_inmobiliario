<?php

namespace App\Http\Controllers\BuyCart;

use App\Http\Controllers\Controller;
use App\Http\Requests\BuyCart\CalculadoraImportacionRequest;
use App\Http\Resources\BuyCart\CalculadoraImportacionResource;
use App\Models\BuyCart\CalculadoraImportacion;
use Exception;
use Illuminate\Support\Facades\DB;

class CalculadoraImportacionController extends Controller
{
    public function index()
    {
        $results = CalculadoraImportacion::all();
        $result = CalculadoraImportacionResource::collection($results);
        return response()->json(compact('results'));
    }
    public function store(CalculadoraImportacionRequest $request)
    {
        try {
            DB::beginTransaction();
            $datos = $request->validated();
            $calculadora_importacion = CalculadoraImportacion::create($datos);
            $model = $calculadora_importacion;
            $mensaje = 'Se ha creado CalculadoraImportacion Exitosamente';
            DB::commit();
            return response()->json(compact('mensaje','model'));
        } catch (Exception $e) {
            DB::rollBack();
            return response()->json(['mensaje' => 'Ha ocurrido un error al insertar el registro' . $e->getMessage() . ' ' . $e->getLine()], 422);
        }
    }
    public function update(CalculadoraImportacionRequest $request, CalculadoraImportacion $calculadora_importacion)
    {
        try {
            DB::beginTransaction();
            $datos = $request->validated();
            $calculadora_importacion->update($datos);
            $mensaje = 'Se ha modificado CalculadoraImportacion Exitosamente';
            DB::commit();
            return response()->json(compact('mensaje'));
        } catch (Exception $e) {
            DB::rollBack();
            return response()->json(['mensaje' => 'Ha ocurrido un error al insertar el registro' . $e->getMessage() . ' ' . $e->getLine()], 422);
        }
    }
    public function destroy(CalculadoraImportacion $calculadora_importacion)
    {
        $calculadora_importacion->delete();
        return response()->json(compact('CalculadoraImportacion'));
    }
}
