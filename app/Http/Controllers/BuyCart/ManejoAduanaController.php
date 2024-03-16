<?php

namespace App\Http\Controllers\BuyCart;

use App\Http\Controllers\Controller;
use App\Http\Requests\BuyCart\ManejoAduanaRequest;
use App\Http\Resources\BuyCart\ManejoAduanaResource;
use App\Models\BuyCart\ManejoAduana;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ManejoAduanaController extends Controller
{
    public function index()
    {
        $results = ManejoAduana::all();
        $result = ManejoAduanaResource::collection($results);
        return response()->json(compact('results'));
    }
    public function store(ManejoAduanaRequest $request)
    {
        try {
            DB::beginTransaction();
            $datos = $request->validated();
            $manejo_aduana = ManejoAduana::create($datos);
            $model = $manejo_aduana;
            $mensaje = 'Se ha creado ManejoAduana Exitosamente';
            DB::commit();
            return response()->json(compact('mensaje','model'));
        } catch (Exception $e) {
            DB::rollBack();
            return response()->json(['mensaje' => 'Ha ocurrido un error al insertar el registro' . $e->getMessage() . ' ' . $e->getLine()], 422);
        }
    }
    public function update(ManejoAduanaRequest $request, ManejoAduana $manejo_aduana)
    {
        try {
            DB::beginTransaction();
            $datos = $request->validated();
            $manejo_aduana->update($datos);
            $mensaje = 'Se ha modificado ManejoAduana Exitosamente';
            DB::commit();
            return response()->json(compact('mensaje'));
        } catch (Exception $e) {
            DB::rollBack();
            return response()->json(['mensaje' => 'Ha ocurrido un error al insertar el registro' . $e->getMessage() . ' ' . $e->getLine()], 422);
        }
    }
    public function destroy(ManejoAduana $manejo_aduana)
    {
        $manejo_aduana->delete();
        return response()->json(compact('ManejoAduana'));
    }
}
