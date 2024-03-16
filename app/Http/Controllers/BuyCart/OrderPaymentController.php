<?php

namespace App\Http\Controllers\BuyCart;

use App\Http\Controllers\Controller;
use App\Http\Requests\BuyCart\OrderPaymentRequest;
use App\Http\Resources\BuyCart\OrderPaymentResource;
use App\Models\BuyCart\OrderPayment;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class OrderPaymentController extends Controller
{
    public function index(Request $request)
    {
        $results = [];
        $user = Auth::user();
        $cliente_id = $user->cliente->id;
        $results = OrderPayment::with('order')->whereHas('order', function ($query) use ($request, $cliente_id) {
            $query->where('status', $request->status);
            $query->where('customer_id', $cliente_id);
        })->get();
        $results = OrderPaymentResource::collection($results);
        return response()->json(compact('results'));
    }
    public function store(OrderPaymentRequest $request)
    {
        try {
            DB::beginTransaction();
            $datos = $request->validated();
            $OrderPayment = OrderPayment::create($datos);
            $model = $OrderPayment;
            $OrderPayment_id = $OrderPayment->id;
            $mensaje = 'Se ha creado OrderPayment Exitosamente';
            DB::commit();
            return response()->json(compact('mensaje', 'model'));
        } catch (Exception $e) {
            DB::rollBack();
            return response()->json(['mensaje' => 'Ha ocurrido un error al insertar el registro' . $e->getMessage() . ' ' . $e->getLine()], 422);
        }
    }
    public function update(OrderPaymentRequest $request, OrderPayment $OrderPayment)
    {
        try {
            DB::beginTransaction();
            $datos = $request->validated();
            $OrderPayment->update($datos);
            $mensaje = 'Se ha modificado OrderPayment Exitosamente';
            DB::commit();
            return response()->json(compact('mensaje'));
        } catch (Exception $e) {
            DB::rollBack();
            return response()->json(['mensaje' => 'Ha ocurrido un error al insertar el registro' . $e->getMessage() . ' ' . $e->getLine()], 422);
        }
    }
    public function destroy(OrderPaymentRequest $request, OrderPayment $OrderPayment)
    {
        $OrderPayment->delete();
        return response()->json(compact('OrderPayment'));
    }
    public function approvePayment(Request $request)
    {
        // Obtener los objetos OrderPayment
        $orderPayments = OrderPayment::where('id',$request)->where('status','PENDIENTE')->get();
        // Cambiar el estado a pagado
        foreach ($orderPayments as $key => $order) {
            $order->update(['status' => 'PAGADO']);
        }
        return response()->json(['mensaje' => 'Se ha aprobado Ordenes de pago'], 200);

    }
}
