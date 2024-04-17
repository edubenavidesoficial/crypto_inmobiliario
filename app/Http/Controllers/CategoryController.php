<?php

namespace App\Http\Controllers;

use App\Http\Requests\admin\CategoryRequest;
use App\Models\Category;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Illuminate\Validation\ValidationException;

class CategoryController extends Controller
{
    public function index(Request $request)
    {
        if($request->home){
            $results = Category::with('subCategorias')->inRandomOrder()->limit(14)->get();
            return response()->json(compact('results'));
        }
        $results = Category::with('subCategorias')->filter()->get();
        return response()->json(compact('results'));
    }
    public function store(CategoryRequest $request)
    {
        try {
            DB::beginTransaction();
            $datos = $request->validated();
            $clinete = Category::create($datos);
            $mensaje = 'Se ha creado Category Exitosamente';
            DB::commit();
            return response()->json(compact('mensaje'));
        } catch (Exception $e) {
            DB::rollBack();
            return response()->json(['mensaje' => 'Ha ocurrido un error al insertar el registro' . $e->getMessage() . ' ' . $e->getLine()], 422);
        }
    }
    public function update(CategoryRequest $request, Category $categoria)
    {
        $datos = $request->validated();
        $categoria->update($datos);
        $modelo = $categoria; //new Ctaego($categoria->refresh());
        $mensaje = 'SE actualizo categoria con exito';
        return response()->json(compact('mensaje', 'modelo'));
    }
    public function destroy(Category $categoria)
    {
        try {
            DB::beginTransaction();
            $categoria->delete();
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
