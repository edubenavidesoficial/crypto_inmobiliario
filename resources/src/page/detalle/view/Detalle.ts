import * as bootstrap from "bootstrap";
import {
    detalle_producto,
    guardar,
    listados_api,
} from "../../../shared/AxiosRepository";
import {
    formatear_precio_total,
    formatear_precio_dolar,
    formatear_precio,
} from "../../../shared/Utils";
import Loading from "vue-loading-overlay";
import "vue-loading-overlay/dist/css/index.css";
export default {
    components: {
        Loading,
    },
    data() {
        return {
            product_id: localStorage.getItem("product_id"),
            product: null,
            isLoading: true,
            fullPage: true,
            orden: {
                customer_id: 1,
                status: "PENDIENTE",
                max_price: 0,
                is_gift: false,
                gift_message: "",
                payment_method: "CONTRAOFERTA",
                retailer_credentials: "",
                webhooks: "",
                client_notes: "",
                product: {
                    name: "",
                    description: "",
                    image: "",
                    transporte: 0.0,
                    garantia_retorno: 0.0,
                    seguro: 0.0,
                    manejo_aduana: 0.0,
                    cif: 0.0,
                    impuesto_aduana: 0.0,
                    cargos_totales_importacion: 0.0,
                    total: 0.0,
                    total_soles: 0.0,
                    precio_total: 0.0,
                    precio_importacion: 0.0,
                    price: 0.0,
                    quantity: 0,
                    subtotal: 0,
                    costo_envio: 0.0,
                    code: "",
                },
            },
        };
    },
    setup() {
        function realizar_pedido() {
            const item = localStorage.getItem("order_id");
            if (item === undefined || item === null) {
                localStorage.removeItem("order_id");
                guardar_pedido(this.orden, this.product, this.$swal);
            } else {
                guardar_producto(this.orden, this.product, item, this.$swal);
            }
        }
        async function guardar_pedido(orden, product, notificacion) {
            orden.product.name = product !== null ? product.title : "";
            orden.product.description =
                product !== null ? product.product_description : "";
            orden.product.price = product !== null ? product.price : 0.0;
            orden.product.code = product !== null ? product.asin : "";
            orden.product.transporte = product.transporte;
            orden.product.garantia_retorno = product.garantia_retorno;
            orden.product.seguro = product.seguro;
            orden.product.manejo_aduana = product.manejo_aduana;
            orden.product.cif = product.cif;
            orden.product.impuesto_aduana = product.impuesto_aduana;
            orden.product.cargos_totales_importacion =
                product.cargos_totales_importacion;
            orden.product.total = product.precio_total;
            orden.product.precio_total = product.precio_total;
            orden.product.subtotal = product.price * orden.product.quantity;
            orden.product.costo_envio = product.total_soles;
            orden.product.precio_importacion = product.precio_importacion;
            await guardar("order", orden).then((result_order) => {
                notificacion
                    .fire({
                        title: "¿Desea segir añadiendo Productos?",
                        text: "Carrito de compras",
                        icon: "warning",
                        showCancelButton: true,
                        confirmButtonColor: "#3085d6",
                        cancelButtonColor: "#d33",
                        confirmButtonText: "SI",
                        cancelButtonText: "NO",
                    })
                    .then((result) => {
                        if (result.isDismissed) {
                            localStorage.removeItem("order_id");
                        }
                        if (result.isConfirmed) {
                            localStorage.setItem("order_id", "");
                            localStorage.setItem(
                                "order_id",
                                result_order.model.id
                            );
                        }
                    });
            });
        }
        async function guardar_producto(
            orden,
            product,
            order_id,
            notificacion
        ) {
            orden.product.order_id = order_id;
            orden.product.name = product !== null ? product.title : "";
            orden.product.description =
                product !== null ? product.product_description : "";
            orden.product.price = product !== null ? product.price : 0.0;
            orden.product.code = product !== null ? product.asin : "";
            orden.product.transporte = product.transporte;
            orden.product.garantia_retorno = product.garantia_retorno;
            orden.product.seguro = product.seguro;
            orden.product.manejo_aduana = product.manejo_aduana;
            orden.product.cif = product.cif;
            orden.product.impuesto_aduana = product.impuesto_aduana;
            orden.product.cargos_totales_importacion =
                product.cargos_totales_importacion;
            orden.product.total = product.precio_total;
            orden.product.precio_total = product.precio_total;
            orden.product.costo_envio = product.total_soles;
            orden.product.subtotal = product.price * orden.product.quantity;
            orden.product.precio_importacion = product.precio_importacion;
            await guardar("order-item", orden.product).then((result_order) => {
                notificacion
                    .fire({
                        title: "¿Desea segir añadiendo Productos?",
                        text: "Carrito de compras",
                        icon: "warning",
                        showCancelButton: true,
                        confirmButtonColor: "#3085d6",
                        cancelButtonColor: "#d33",
                        confirmButtonText: "SI",
                        cancelButtonText: "NO",
                    })
                    .then((result) => {
                        if (result.isDismissed) {
                            localStorage.removeItem("order_id");
                        }
                    });
            });
        }
        async function onSelectedValueChange() {
            this.isLoading = true;
            await listados_api('proyectos-public',{id: this.product_id})
                .then(async (response) => {
                    const data = response.results[0];
                    this.product = data;
                    this.isLoading = false;
                });

            this.product.precio =
                parseFloat(
                    formatear_precio_total(this.product.precio, 2).toString()
                ) * this.orden.product.quantity;
        }
        return {
            formatear_precio_total,
            formatear_precio_dolar,
            realizar_pedido,
            onSelectedValueChange,
        };
    },
    async mounted() {
        const self = this;
        await listados_api('proyectos-public',{id: self.product_id})
            .then((response) => {
                const data = response.results[0];
                self.product = data;
                self.isLoading = false;
            });
    },
};
