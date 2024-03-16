<?php

namespace App\Http\Controllers\BuyCart;

use App\Http\Controllers\Controller;
use App\Http\Requests\BuyCart\ProyectoRequest;
use App\Models\BuyCart\Proyecto;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Validation\ValidationException;

class ProyectoController extends Controller
{
    public function index(Request $request)
    {
        if($request->home){
            $results = Proyecto::with('subCategorias')->inRandomOrder()->limit(14)->get();
            return response()->json(compact('results'));
        }
        $results = Proyecto::with('subCategorias')->get();
        return response()->json(compact('results'));
    }
    public function store(ProyectoRequest $request)
    {
        try {
            DB::beginTransaction();
            $datos = $request->validated();
            $clinete = Proyecto::create($datos);
            $mensaje = 'Se ha creado Proyecto Exitosamente';
            DB::commit();
            return response()->json(compact('mensaje'));
        } catch (Exception $e) {
            DB::rollBack();
            return response()->json(['mensaje' => 'Ha ocurrido un error al insertar el registro' . $e->getMessage() . ' ' . $e->getLine()], 422);
        }
    }
    public function update(ProyectoRequest $request, Proyecto $proyecto)
    {
        $datos = $request->validated();
        $proyecto->update($datos);
        $modelo = $proyecto; //new Ctaego($proyecto->refresh());
        $mensaje = 'SE actualizo categoria con exito';
        return response()->json(compact('mensaje', 'modelo'));
    }
    public function destroy(Proyecto $proyecto)
    {
        try {
            DB::beginTransaction();
            $proyecto->delete();
            $mensaje = 'Se elimino categoria con exito';
            DB::commit();
            return response()->json(compact('mensaje'));
        } catch (Exception $e) {
            DB::rollBack();
            throw ValidationException::withMessages([
                'Error al insertar registro' => [$e->getMessage()],
            ]);
            return response()->json(['mensaje' => 'Ha ocurrido un error al insertar el registro de antecedente  familiar' . $e->getMessage() . ' ' . $e->getLine()], 422);
        }
    }
}
