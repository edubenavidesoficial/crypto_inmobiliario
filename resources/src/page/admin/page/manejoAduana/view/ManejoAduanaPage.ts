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
import { ManejoAduana } from "../model/ManejoAduana";

export default {
    components: { AlertComponent, AdminTable, ButtonSubmit },
    data() {
        return {
            manejoAduanas: [],
            isLoading: true,
            error: null,
            headers: [
                { text: "MINIMO", value: "valor_minimo" },
                { text: "MAXIMO", value: "valor_maximo" },
                { text: "USD", value: "precio" },
                { text: "Operation", value: "operation" },
            ],
        };
    },
    setup() {
        let manejoAduana: ManejoAduana = {
            id: 0,
            precio:0.0,
            valor_minimo: 0.00,
            valor_maximo: 0.00,
        };
        const msg = ref("prueba");
        const manejoAduanasRef = ref();
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
            manejoAduana.valor_minimo=0.00
            manejoAduana.valor_maximo=0.00
            manejoAduana.precio=0.00
            manejoAduana.id=0
        }

        const custom_btnEditar: ButtonCustom = {
            nombre: "Editar",
            icon: "bi bi-pencil-fill",
            accion: () => {
                visible.value = false;
                setTimeout(() => {
                    manejoAduana.id = manejoAduanasRef.value?.item.id;
                    manejoAduana.valor_minimo = manejoAduanasRef.value?.item.valor_minimo;
                    manejoAduana.valor_maximo = manejoAduanasRef.value?.item.valor_maximo;
                    manejoAduana.precio = manejoAduanasRef.value?.item.precio;
                    visible.value = true;
                }, 500);
            },
        };
        const custom_btnEliminar: ButtonCustom = {
            nombre: "Eliminar",
            icon: "bi bi-trash-fill",
            accion: async () => {
                visible.value = false;
                manejoAduana.id = manejoAduanasRef.value?.item.id;
                await eliminar("manejoAduanas/" + manejoAduana.id).then(
                    (result_order) => {
                        this.$swal.fire({
                            title: "ManejoAduana",
                            text: "ManejoAduana eliminada exitosamente",
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
        async function guardar_ManejoAduana() {
            if (manejoAduana!.id > 0) {
                await editar("manejoAduanas/" + manejoAduana.id, manejoAduana).then(
                    (result) => {
                        this.$swal.fire({
                            title: "ManejoAduana",
                            text: result?.mensaje,
                            icon: "success",
                        });
                    }
                );
            } else {
                await guardar("manejoAduanas", manejoAduana).then((result) => {
                    this.$swal.fire({
                        title: "ManejoAduana",
                        text: result?.mensaje,
                        icon: "success",
                    });
                });
            }
        }
        return {
            msg,
            visible,
            manejoAduanasRef,
            manejoAduana,
            nuevo,
            custom_btnEditar,
            custom_btnEliminar,
            guardar_ManejoAduana,
            cancelar,

        };
    },
    async mounted() {
        try {
            const manejoAduanas = await listados_api("manejo-aduana");
            this.manejoAduanas = manejoAduanas.results;
            this.isLoading = false;
        } catch (error) {
            this.error = error;
        }
    },

    methods: {
        async refrescar(){
            const manejoAduanas = await listados_api("manejo-aduana");
            this.manejoAduanas = manejoAduanas.results;
        }
    },
};
