import { computed } from "vue";
import {
    detalle_producto,
    editar,
    eliminar,
    guardar,
    listados_api,
} from "../../../../shared/AxiosRepository";
import {
    formatear_precio_dolar,
    formatear_precio_total,
} from "../../../../shared/Utils";

export default {
    data() {
        return {
            pedidos: [],
            isLoading: true,
            fullPage: true,
            error: null,
            totalAcreditar: 0,
            subtotales: 0,
            totalImpuestos: 0,
            totalCostoEnvio: 0,
            pay_pedido: {
                order_id: 0,
                subtotal: 0.0,
                shipment: 0.0,
                discount: 0.0,
                tax: 0.0,
                tax_percentage: 0,
                total: 0.0,
                voucher: "",
                status: "PENDIENTE",
            },
        };
    },
    setup() {
        return {};
    },
    async mounted() {
        try {
            const pedidos = await listados_api("order-item", {
                status: "PENDIENTE",
            }).then((result) => {
                this.pedidos = result.results;
                this.subtotales = this.subtotal_carrito();
                this.totalAcreditar = this.total_carrito();
                this.totalImpuestos = this.total_impuestos();
                this.totalCostoEnvio = this.total_costo_envio();
            });
        } catch (error) {
            this.error = error;
        }
    },
    methods: {
        total_carrito() {
            const suma = this.pedidos.reduce(
                (acumulador, elemento) =>
                    acumulador + parseFloat(elemento.total),
                0
            );
            this.isLoading = false;
            return suma;
        },
        total_impuestos() {
            const suma = this.pedidos.reduce(
                (acumulador, elemento) =>
                    acumulador +
                    parseFloat(elemento.impuesto_aduana),
                0
            );
            this.isLoading = false;
            return suma;
        },
        subtotal_carrito() {
            const suma = this.pedidos.reduce(
                (acumulador, elemento) =>
                    acumulador +
                    parseFloat(elemento.subtotal),
                0
            );
            this.isLoading = false;
            return suma;
        },
        total_costo_envio() {
            const suma = this.pedidos.reduce(
                (acumulador, elemento) =>
                    acumulador +
                    parseFloat(elemento.costo_envio),
                0
            );
            this.isLoading = false;
            return suma;
        },
        async pagar_pedido() {
            const item = localStorage.getItem("order_id");
            this.pay_pedido.order_id = item;
            this.pay_pedido.total = this.total_carrito();
            await guardar("order-payment", this.pay_pedido).then(
                (result_order) => {
                    this.$swal.fire({
                        title: "Pedido",
                        text: "Su pedido ha sido Pagado, espere a que sea aprobado",
                        icon: "success",
                    });
                }
            );
        },
        async add_item(pedido) {
            pedido.quantity = pedido.quantity + 1;
            pedido.subtotal = pedido.price * pedido.quantity;
            pedido.total = (pedido.price * pedido.quantity).toFixed(2)
            this.calcular_precio(pedido);
        },
        async decrement_item(pedido) {
            pedido.quantity = pedido.quantity - 1;
            if(pedido.quantity ==0){
                pedido.quantity = 1
            }
            pedido.subtotal = pedido.price * pedido.quantity;
            pedido.total = (pedido.price * pedido.quantity).toFixed(2)
            this.calcular_precio(pedido);
        },
        async quitar(id) {
            await eliminar("order-item/" + id);
            const pedidos = await listados_api("order-item", {
                status: "PENDIENTE",
            }).then((result) => {
                this.pedidos = result.results;
                this.totalAcreditar = this.total_carrito();
            });
        },
        async calcular_precio(pedido) {
            this.isLoading = true;
            const precio = pedido.subtotal / 3.8;
            const peso =
                pedido.detalle_producto.package_dimensions !== undefined
                    ? pedido.detalle_producto.package_dimensions.weight.amount*pedido.quantity
                    : 0;

            await listados_api("calcular-importacion", {
                peso: peso,
                precio: precio,
            }).then(async (response) => {
                const data = response[0];
                pedido.transporte = data.transporte*3.8
                pedido.garantia_retorno = data.garantia_retorno*3.8
                pedido.seguro = data.seguro*3.8
                pedido.manejo_aduana = data.manejo_aduana*3.8
                pedido.cif = data.cif*3.8
                pedido.impuesto_aduana = data.impuesto_aduana*3.8
                pedido.cargos_totales_importacion = data.cargos_totales_importacion*3.8
                pedido.total = data.precio_total
                pedido.precio_importacion = data.precio_importacion*3.8
                pedido.precio_total = data.precio_total
                await editar("order-item/" + pedido.id, pedido).then((result) => {
                    this.subtotales = this.subtotal_carrito();
                    this.totalAcreditar = this.total_carrito();
                    this.totalImpuestos = this.total_impuestos();
                    this.totalCostoEnvio = this.total_costo_envio();
                });
            });
        },
    },
};
