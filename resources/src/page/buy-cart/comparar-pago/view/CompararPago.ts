import { guardar, listados_api } from "../../../../shared/AxiosRepository";

import "datatables.net-responsive-bs5";
import { ref } from "vue";
import AlertComponent from "../../../../component/alert/AlertComponent.vue";
import AdminTableSelected from "../../../../component/admin-table-selected/AdminTableSelected.vue";
import { ButtonCustom } from "../../../../component/modelComponent/ButtonCustom";

export default {
    components: { AlertComponent, AdminTableSelected },
    data() {
        return {
            pagos: [],
            isLoading: true,
            error: null,
            orders: [],
            itemsSelected: [],
            headers: [
                { text: "SUBTOTAL", value: "subtotal" },
                { text: "ENVIO", value: "shipment" },
                { text: "DESCUENTO", value: "discount" },
                { text: "PORCENTAJE IMPUESTO", value: "tax_percentage" },
                { text: "IMPUESTO", value: "tax" },
                { text: "TOTAL", value: "total", sortable: true },
                { text: "COMPROBANTE", value: "voucher", width: 200 },
                { text: "ESTADO", value: "status" },
                { text: "Operation", value: "operation" },
            ],
        };
    },
    setup() {
        const msg = ref("prueba");
        let orderitems = ref([]);
        const compararPagoRef = ref();
        const visible = ref(false);
        // Declara pagos como una referencia reactiva
        const custom_btnVer: ButtonCustom = {
            nombre: "Ver",
            icon: "bi bi-eye-fill",
            accion: () =>{
                visible.value = false;
                orderitems.value = compararPagoRef.value?.item.order.order_item;
                // Ejecuta la función `this.visible = true;` después de 1 segundo
                setTimeout(() => {
                    visible.value = true;
                }, 500);
            },
        };
        return { msg, orderitems,  visible, compararPagoRef,custom_btnVer };
    },
    async mounted() {
        try {
            const pagos = await listados_api("order-payment", {
                status: "PENDIENTE",
            });
            this.pagos = pagos.results.map((pedido) => ({
                ...pedido,
                selected: false,
            })); // Añade la propiedad 'selected'
            this.isLoading = false;
        } catch (error) {
            this.error = error;
        }
    },
    methods: {
        async aprobar() {
            this.itemsSelected.forEach((element) => {
                this.orders.push(element.id);
            });
            await guardar("approve-payment", this.orders).then(
                (result_order) => {
                    this.$swal.fire({
                        title: "Pedido",
                        text: "Pedido aprobado exitosamente",
                        icon: "success",
                    });
                }
            );
        },
    },
};
