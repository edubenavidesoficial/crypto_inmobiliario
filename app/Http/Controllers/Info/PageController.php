<?php

namespace App\Http\Controllers\Info;

use App\Http\Controllers\Controller;
use App\Http\Requests\Info\PageRequest;
use App\Http\Resources\Info\PageResource;
use App\Models\Info\Page;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PageController extends Controller
{
    public function index(Request $request)
    {
        $results = [];
        $results = Page::get();
        $results = PageResource::collection($results);
        return response()->json(compact('results'));
    }
    public function store(PageRequest $request)
    {
        try {
            DB::beginTransaction();
            $datos = $request->validated();
            $Page = Page::create($datos);
            $model = $Page;
            $Page_id= $Page->id;
            $mensaje = 'Se ha creado Page Exitosamente';
            DB::commit();
            return response()->json(compact('mensaje','model'));
        } catch (Exception $e) {
            DB::rollBack();
            return response()->json(['mensaje' => 'Ha ocurrido un error al insertar el registro' . $e->getMessage() . ' ' . $e->getLine()], 422);
        }
    }
    public function update(PageRequest $request, Page $Page)
    {
        try {
            DB::beginTransaction();
            $datos = $request->validated();
            $Page->update($datos);
            $mensaje = 'Se ha modificado Page Exitosamente';
            DB::commit();
            return response()->json(compact('mensaje'));
        } catch (Exception $e) {
            DB::rollBack();
            return response()->json(['mensaje' => 'Ha ocurrido un error al insertar el registro' . $e->getMessage() . ' ' . $e->getLine()], 422);
        }
    }
    public function destroy(PageRequest $request, Page $Page)
    {
        $Page->delete();
        return response()->json(compact('Page'));
    }
}
