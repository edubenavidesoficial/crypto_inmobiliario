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
import { GarantiaRetorno } from "../model/GarantiaRetorno";

export default {
    components: { AlertComponent, AdminTable, ButtonSubmit },
    data() {
        return {
            garantiaRetornos: [],
            isLoading: true,
            error: null,
            headers: [
                { text: "MINIMO", value: "valor_minimo" },
                { text: "MAXIMO", value: "valor_maximo" },
                { text: "USD", value: "precio_garantia" },
                { text: "Operation", value: "operation" },
            ],
        };
    },
    setup() {
        let garantiaRetorno: GarantiaRetorno = {
            id: 0,
            precio_garantia:0.0,
            valor_minimo: 0.00,
            valor_maximo: 0.00,
        };
        const msg = ref("prueba");
        const garantiaRetornosRef = ref();
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
            garantiaRetorno.valor_minimo=0.00
            garantiaRetorno.valor_maximo=0.00
            garantiaRetorno.precio_garantia=0.00
            garantiaRetorno.id=0
        }

        const custom_btnEditar: ButtonCustom = {
            nombre: "Editar",
            icon: "bi bi-pencil-fill",
            accion: () => {
                visible.value = false;
                setTimeout(() => {
                    garantiaRetorno.id = garantiaRetornosRef.value?.item.id;
                    garantiaRetorno.valor_minimo = garantiaRetornosRef.value?.item.valor_minimo;
                    garantiaRetorno.valor_maximo = garantiaRetornosRef.value?.item.valor_maximo;
                    garantiaRetorno.precio_garantia = garantiaRetornosRef.value?.item.precio_garantia;
                    visible.value = true;
                }, 500);
            },
        };
        const custom_btnEliminar: ButtonCustom = {
            nombre: "Eliminar",
            icon: "bi bi-trash-fill",
            accion: async () => {
                visible.value = false;
                garantiaRetorno.id = garantiaRetornosRef.value?.item.id;
                await eliminar("garantiaRetornos/" + garantiaRetorno.id).then(
                    (result_order) => {
                        this.$swal.fire({
                            title: "GarantiaRetorno",
                            text: "GarantiaRetorno eliminada exitosamente",
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
        async function guardar_GarantiaRetorno() {
            if (garantiaRetorno!.id > 0) {
                await editar("garantiaRetornos/" + garantiaRetorno.id, garantiaRetorno).then(
                    (result) => {
                        this.$swal.fire({
                            title: "GarantiaRetorno",
                            text: result?.mensaje,
                            icon: "success",
                        });
                    }
                );
            } else {
                await guardar("garantiaRetornos", garantiaRetorno).then((result) => {
                    this.$swal.fire({
                        title: "GarantiaRetorno",
                        text: result?.mensaje,
                        icon: "success",
                    });
                });
            }
        }
        return {
            msg,
            visible,
            garantiaRetornosRef,
            garantiaRetorno,
            nuevo,
            custom_btnEditar,
            custom_btnEliminar,
            guardar_GarantiaRetorno,
            cancelar,

        };
    },
    async mounted() {
        try {
            console.log('montar garantia');

            const garantiaRetornos = await listados_api("garantia-retorno");
            this.garantiaRetornos = garantiaRetornos.results;
            this.isLoading = false;
        } catch (error) {
            console.log('montar garantia', error);
            this.error = error;
        }
    },

    methods: {
        async refrescar(){
            const garantiaRetornos = await listados_api("garantiaRetornos");
            this.garantiaRetornos = garantiaRetornos.results;
        }
    },
};
