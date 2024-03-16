<?php

namespace App\Http\Controllers\BuyCart;

use App\Http\Controllers\Controller;
use App\Http\Requests\BuyCart\OrderRequest;
use App\Models\BuyCart\Order;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class OrderController extends Controller
{
    public function store(OrderRequest $request)
    {
        try {
            DB::beginTransaction();
            $datos = $request->validated();
            $order = Order::create($datos);
            $model = $order;
            $order_id= $order->id;
            OrderItemController::añadir_carrito($order_id,$request->product);
            $mensaje = 'Se ha creado Order Exitosamente';
            DB::commit();
            return response()->json(compact('mensaje','model'));
        } catch (Exception $e) {
            DB::rollBack();
            return response()->json(['mensaje' => 'Ha ocurrido un error al insertar el registro' . $e->getMessage() . ' ' . $e->getLine()], 422);
        }
    }
    public function update(OrderRequest $request, Order $order)
    {
        try {
            DB::beginTransaction();
            $datos = $request->validated();
            $order->update($datos);
            $mensaje = 'Se ha modificado Order Exitosamente';
            DB::commit();
            return response()->json(compact('mensaje'));
        } catch (Exception $e) {
            DB::rollBack();
            return response()->json(['mensaje' => 'Ha ocurrido un error al insertar el registro' . $e->getMessage() . ' ' . $e->getLine()], 422);
        }
    }
    public function destroy(Order $order)
    {
        $order->delete();
        return response()->json(compact('order'));
    }
}
