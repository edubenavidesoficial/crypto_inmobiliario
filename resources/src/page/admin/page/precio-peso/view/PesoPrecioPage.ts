import {
    editar,
    eliminar,
    guardar,
    listados_api,
} from "../../../../../shared/AxiosRepository";

import "datatables.net-responsive-bs5";
import { ref, computed } from "vue";
import AlertComponent from "../../../../../component/alert/AlertComponent.vue";
import AdminTable from "../../../../../component/admin-table/AdminTable.vue";
import ButtonSubmit from "../../../../../component/button-submit/ButtonSubmit.vue";
import { ButtonCustom } from "../../../../../component/modelComponent/ButtonCustom";
import { PrecioPeso } from "../model/PrecioPeso";

export default {
    components: { AlertComponent, AdminTable, ButtonSubmit },
    data() {
        return {
            precioPesos: [],
            isLoading: true,
            error: null,
            headers: [
                { text: "PESO (KG)", value: "peso" },
                { text: "USD", value: "precio" },
                { text: "Operation", value: "operation" },
            ],
        };
    },
    setup() {
        let precioPeso: PrecioPeso = {
            id: 0,
            peso: 0.00,
            precio: 0.00,
        };
        const msg = ref("prueba");
        const precioPesoRef = ref();
        const visible = ref(false);
        const cancelar =(data) =>{
           limpiar()
           visible.value = false;
        }
        function nuevo() {
            visible.value = false;
            setTimeout(() => {
                limpiar()
                visible.value = true;
            }, 500);
        }
        function limpiar(){
            precioPeso.peso=0.00
            precioPeso.precio=0.00
            precioPeso.id=0
        }

        const custom_btnEditar: ButtonCustom = {
            nombre: "Editar",
            icon: "bi bi-pencil-fill",
            accion: () => {
                visible.value = false;
                setTimeout(() => {
                    precioPeso.id = precioPesoRef.value?.item.id;
                    precioPeso.peso = precioPesoRef.value?.item.peso;
                    precioPeso.precio = precioPesoRef.value?.item.precio;
                    visible.value = true;
                }, 500);
            },
        };
        const custom_btnEliminar: ButtonCustom = {
            nombre: "Eliminar",
            icon: "bi bi-trash-fill",
            accion: async () => {
                visible.value = false;
                precioPeso.id = precioPesoRef.value?.item.id;
                await eliminar("precioPeso/" + precioPeso.id).then(
                    (result_order) => {
                        this.$swal.fire({
                            title: "PrecioPeso",
                            text: "PrecioPeso eliminada exitosamente",
                            icon: "success",
                        });
                    }
                );
                // Ejecuta la función `this.visible = true;` después de 1 segundo
                setTimeout(() => {
                    visible.value = true;
                }, 500);
            },
        };
        async function guardar_PrecioPeso() {
            if (precioPeso!.id > 0) {
                await editar("precioPeso/" + precioPeso.id, precioPeso).then(
                    (result) => {
                        this.$swal.fire({
                            title: "PrecioPeso",
                            text: result?.mensaje,
                            icon: "success",
                        });
                    }
                );
            } else {
                await guardar("precioPeso", precioPeso).then((result) => {
                    this.$swal.fire({
                        title: "PrecioPeso",
                        text: result?.mensaje,
                        icon: "success",
                    });
                });
            }
        }
        return {
            msg,
            visible,
            precioPesoRef,
            precioPeso,
            nuevo,
            custom_btnEditar,
            custom_btnEliminar,
            guardar_PrecioPeso,
            cancelar,

        };
    },
    async mounted() {
        try {
            const precioPeso = await listados_api("precio-peso");
            this.precioPesos = precioPeso.results;
            this.isLoading = false;
        } catch (error) {
            this.error = error;
        }
    },

    methods: {
        async refrescar(){
            const precioPeso = await listados_api("precio-peso");
            this.precioPeso = precioPeso.results;
        }
    },
};
