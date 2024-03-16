<?php

namespace App\Http\Controllers\BuyCart;

use App\Http\Controllers\Controller;
use App\Http\Requests\BuyCart\OrderItemRequest;
use App\Http\Resources\BuyCart\OrderItemResource;
use App\Models\BuyCart\GarantiaRetorno;
use App\Models\BuyCart\ManejoAduana;
use App\Models\BuyCart\OrderItem;
use App\Models\BuyCart\PrecioPeso;
use App\Models\Cliente;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Src\App\BuyCartService;

class OrderItemController extends Controller
{
    /**
     * La función de índice recupera artículos de pedido con un estado específico y los devuelve como
     * una respuesta JSON.
     *
     * @param Request request El parámetro  es una instancia de la clase Request, que representa
     * una solicitud HTTP realizada al servidor. Contiene información sobre la solicitud, como el método
     * de solicitud, encabezados y datos de entrada. En este caso, se utiliza para recuperar el valor
     * del parámetro 'estado' del
     *
     * @return una respuesta JSON que contiene los resultados de la consulta. Los resultados se obtienen
     * del modelo OrderItem, con la condición de que el estado del pedido asociado coincida con el valor
     * del parámetro "status" en la solicitud. Luego, los resultados se transforman utilizando
     * OrderItemResource y se devuelven como una respuesta JSON.
     */
    public function index(Request $request)
    {
        $results = [];
        $user = Auth::user();
        $cliente_id = $user->cliente->id;
        $results = OrderItem::with('order')->whereHas('order', function ($query) use ($request, $cliente_id) {
            $query->where('status', $request->status);
            $query->where('customer_id', $cliente_id);
        })->get();
        $results = OrderItemResource::collection($results);
        return response()->json(compact('results'));
    }

    /**
     * La función almacena un OrderItem en la base de datos y devuelve una respuesta JSON que indica
     * éxito o fracaso.
     *
     * @param OrderItemRequest request El parámetro  es una instancia de la clase
     * OrderItemRequest. Se utiliza para validar y recuperar los datos enviados en la solicitud.
     *
     * @return una respuesta JSON. Si el bloque de prueba tiene éxito, devolverá una respuesta JSON con
     * el mensaje "Se ha creado OrderItem Exitosamente". Si se detecta una excepción en el bloque
     * catch, devolverá una respuesta JSON con un mensaje de error que indica que ocurrió un error al
     * insertar el registro.
     */
    public function store(OrderItemRequest $request)
    {
        try {
            DB::beginTransaction();
            $datos = $request->validated();
            $order_item = OrderItem::create($datos);
            $mensaje = 'Se ha creado OrderItem Exitosamente';
            DB::commit();
            return response()->json(compact('mensaje'));
        } catch (Exception $e) {
            DB::rollBack();
            return response()->json(['mensaje' => 'Ha ocurrido un error al insertar el registro' . $e->getMessage() . ' ' . $e->getLine()], 422);
        }
    }
    /**
     * La función actualiza un registro OrderItem en la base de datos y devuelve una respuesta JSON con
     * un mensaje de éxito o un mensaje de error si se produce una excepción.
     *
     * @param OrderItemRequest request El parámetro  es una instancia de la clase
     * OrderItemRequest, que se utiliza para validar y recuperar los datos de la solicitud HTTP.
     * @param OrderItem order_item El parámetro  es una instancia del modelo OrderItem.
     * Representa el artículo de pedido específico que debe actualizarse en la base de datos.
     *
     * @return una respuesta JSON. Si la actualización es exitosa, devolverá un objeto JSON con una
     * clave de "mensaje" que contiene el mensaje "Se ha modificado OrderItem Exitosamente". Si ocurre
     * un error durante la actualización, devolverá un objeto JSON con una clave "mensaje" que contiene
     * el mensaje de error "Ha ocurrido un error al insertar el registro" junto con el error
     */
    public function update(OrderItemRequest $request, OrderItem $order_item)
    {
        try {
            DB::beginTransaction();
            $datos = $request->validated();
            $order_item->update($datos);
            $mensaje = 'Se ha modificado OrderItem Exitosamente';
            DB::commit();
            return response()->json(compact('mensaje'));
        } catch (Exception $e) {
            DB::rollBack();
            return response()->json(['mensaje' => 'Ha ocurrido un error al insertar el registro' . $e->getMessage() . ' ' . $e->getLine()], 422);
        }
    }
    /**
     * La función destruye un artículo de pedido y devuelve una respuesta JSON.
     *
     * @param OrderItemRequest request El parámetro  es una instancia de la clase
     * OrderItemRequest. Se utiliza para validar y manejar los datos de la solicitud entrante.
     * @param OrderItem order_item El parámetro  es una instancia del modelo OrderItem.
     * Representa el artículo de pedido específico que debe eliminarse.
     *
     * @return una respuesta JSON con la variable 'OrderItem' compactada.
     */
    public function destroy(OrderItem $order_item)
    {
        $order_item->delete();
        return response()->json(compact('order_item'));
    }
    /**
     * La función "añadir_carrito" agrega un producto a un carrito de compras y devuelve una respuesta
     * JSON indicando éxito o fracaso.
     *
     * @param order_id El parámetro order_id es el ID del pedido al que se agregará el producto.
     * @param product El parámetro "producto" es una matriz que contiene los detalles del producto que
     * se agrega al carrito. Por lo general, incluye información como el ID del producto, el nombre, el
     * precio, la cantidad y cualquier otro detalle relevante.
     *
     * @return una respuesta JSON con el mensaje "Se ha creado OrderItem Exitosamente" si la creación
     * del OrderItem es exitosa. Si hay un error, devuelve una respuesta JSON con un mensaje de error.
     */
    public static function añadir_carrito($order_id, $product)
    {
        try {
            $product['order_id'] = $order_id;
            $datos = $product;
            DB::beginTransaction();
            $order_item = OrderItem::create($datos);
            $mensaje = 'Se ha creado OrderItem Exitosamente';
            DB::commit();
            return response()->json(compact('mensaje'));
        } catch (Exception $e) {
            DB::rollBack();
            return response()->json(['mensaje' => 'Ha ocurrido un error al insertar el registro' . $e->getMessage() . ' ' . $e->getLine()], 422);
        }
    }
    public function contar_items()
    {
        $user = Auth::user();
        $cliente_id = $user->cliente->id;
        $cantidad_carrito = OrderItem::with('order')->whereHas('order', function ($query) use ($cliente_id) {
            $query->where('status', 'PENDIENTE');
            $query->where('customer_id', $cliente_id);
        })->count();
        return response()->json(['cantidad_item' => $cantidad_carrito], 200);
    }
    public function calcularImportacion(Request $request)
    {
        $libras = $request->peso;
        $kilos = $libras * 0.453592;
        $peso = number_format($kilos, 2);
        $precio = $request->precio;
        $precio_peso = PrecioPeso::where('peso', '>=', $peso)->first();
        $transporte = $precio_peso?->precio;
        $garantia_retorno_bd = GarantiaRetorno::where('valor_minimo', '<=', $precio)->where('valor_maximo', '>=', $precio)->first();
        $garantia_retorno = $garantia_retorno_bd?->precio_garantia;
        $porcentaje_seguro = 0.0075;
        $seguro = number_format(($precio * $porcentaje_seguro), 2);
        $manejo_aduana_db = ManejoAduana::where('valor_minimo', '<=', $precio)->where('valor_maximo', '>=', $precio)->first();
        $manejo_aduana = $manejo_aduana_db?->precio;
        $cif = $precio > 200 ? ($precio + $transporte + $seguro) : 0;
        $impuesto_aduana = $cif * 0.25;
        $cargos_totales_importacion = $transporte + $garantia_retorno + $manejo_aduana + $impuesto_aduana;
        $total = $precio + $cargos_totales_importacion;
        $total_soles = $total * 3.8;
        $calculo_importacion = BuyCartService::calcularImportacion($total_soles);
        $precio_importacion = $calculo_importacion['subtotal'];
        $precio_total = $calculo_importacion['total'];
        return response()->json([compact('transporte', 'garantia_retorno', 'seguro', 'manejo_aduana', 'cif', 'impuesto_aduana', 'cargos_totales_importacion', 'total', 'total_soles', 'precio_importacion','precio_total')], 200);
    }
}
