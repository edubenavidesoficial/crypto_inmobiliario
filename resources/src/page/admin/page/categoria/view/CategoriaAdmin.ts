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
import { Categoria } from "../model/Categoria";

export default {
    components: { AlertComponent, AdminTable, ButtonSubmit },
    data() {
        return {
            categorias: [],
            isLoading: true,
            error: null,
            headers: [
                { text: "NOMBRE", value: "name" },
                { text: "IMAGEN", value: "image" },
                { text: "DESCRIPCIÓN", value: "description" },
                { text: "Operation", value: "operation" },
            ],
        };
    },
    setup() {
        let categoria: Categoria = {
            id: 0,
            name: "",
            image: "ddd",
            description: "",
        };
        const msg = ref("prueba");
        const categoriaRef = ref();
        const visible = ref(false);
        const image = ref();
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
            categoria.name=""
            categoria.description=""
            categoria.image=""
            categoria.id=0
            image.value=null
        }
        function imagenHange(event) {
            const file = event.target.files[0];
            if (file) {
                const reader = new FileReader();
                reader.readAsDataURL(file);

                reader.onload = () => {
                    const base64Data = reader.result;
                    // Assign base64Data directly to categoria.image
                    categoria.image = base64Data;
                    image.value = base64Data;
                    // If you need to update an input element's value, do it here:
                    // imageInputElement.value = base64Data;
                };
            }
        }
        const custom_btnEditar: ButtonCustom = {
            nombre: "Editar",
            icon: "bi bi-pencil-fill",
            accion: () => {
                visible.value = false;
                setTimeout(() => {
                    categoria.id = categoriaRef.value?.item.id;
                    categoria.name = categoriaRef.value?.item.name;
                    categoria.image = categoriaRef.value?.item.image;
                    categoria.description =
                        categoriaRef.value?.item.description;
                    visible.value = true;
                }, 500);
            },
        };
        const custom_btnEliminar: ButtonCustom = {
            nombre: "Eliminar",
            icon: "bi bi-trash-fill",
            accion: async () => {
                visible.value = false;
                categoria.id = categoriaRef.value?.item.id;
                await eliminar("categorias/" + categoria.id).then(
                    (result_order) => {
                        this.$swal.fire({
                            title: "Categoria",
                            text: "Categoria eliminada exitosamente",
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
        async function guardar_categoria() {
            if (categoria!.id > 0) {
                await editar("categorias/" + categoria.id, categoria).then(
                    (result) => {
                        this.$swal.fire({
                            title: "Categoria",
                            text: result?.mensaje,
                            icon: "success",
                        });
                    }
                );
            } else {
                await guardar("categorias", categoria).then((result) => {
                    this.$swal.fire({
                        title: "Categoria",
                        text: result?.mensaje,
                        icon: "success",
                    });
                });
            }
        }
        return {
            msg,
            visible,
            categoriaRef,
            categoria,
            nuevo,
            image,
            imagenHange,
            custom_btnEditar,
            custom_btnEliminar,
            guardar_categoria,
            cancelar,

        };
    },
    async mounted() {
        try {
            const categorias = await listados_api("categorias");
            this.categorias = categorias.results;
            this.isLoading = false;
        } catch (error) {
            this.error = error;
        }
    },

    methods: {
        async refrescar(){
            const categorias = await listados_api("categorias");
            this.categorias = categorias.results;
        }
    },
};
