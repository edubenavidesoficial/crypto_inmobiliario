<?php

namespace App\Http\Controllers;

use App\Http\Requests\RequestCliente;
use App\Http\Resources\ClienteResource;
use App\Models\Cliente;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class ClienteController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:sanctum')->except(['index']);
    }
    public function index()
    {
        $results = Cliente::all();
        return response()->json(compact('results'));
    }
    public function store(RequestCliente $request)
    {
        try {
            DB::beginTransaction();
            $datos = $request->validated();
            $clinete = Cliente::create($datos);
            $mensaje = 'Se ha creado Cliente Exitosamente';
            DB::commit();
            return response()->json(compact('mensaje'));
        } catch (Exception $e) {
            DB::rollBack();
            return response()->json(['mensaje' => 'Ha ocurrido un error al insertar el registro' . $e->getMessage() . ' ' . $e->getLine()], 422);
        }
    }
    public function update(RequestCliente $request, Cliente $cliente)
    {
        try {
            DB::beginTransaction();
            $datos = $request->validated();
            $cliente->update($datos);
            $mensaje = 'Se ha modificado Cliente Exitosamente';
            DB::commit();
            return response()->json(compact('mensaje'));
        } catch (Exception $e) {
            DB::rollBack();
            return response()->json(['mensaje' => 'Ha ocurrido un error al insertar el registro' . $e->getMessage() . ' ' . $e->getLine()], 422);
        }
    }
    public function perfil_usuario(){
        $user_id =Auth::user()->id;
        $cliente = Cliente::where('user_id',$user_id)->first();
        $model = new ClienteResource($cliente);
        return response()->json(compact('model'));
    }
}
