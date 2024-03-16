import { editar, guardar } from "../../shared/AxiosRepository";

export default {
    name: "ButtonSubmit",
    emits: [ 'cancelar','refrescar'], // Declare the 'objetosLimpios' event
    props: {
        visible: Boolean,
        model: Object,
        ruta: String,
    },
    setup(props, { emit }) { // Access 'emit' directly in setup

        function cancelar() {
            emit('cancelar'); // Use 'emit' from context
        }

        async function guardar_model() {
            if (props.model.id > 0) {
                await editar(props.ruta + "/" + props.model.id, props.model).then(
                    (result) => {
                        this.$swal.fire({
                            title: "Categoria",
                            text: "Categoria guardada exitosamente",
                            icon: "success",
                        });
                    }
                );
                                emit('cancelar'); // Use 'emit' from context
                                emit('refrescar'); // Use 'emit' from context


            } else {
                await guardar(this.ruta, this.model).then((result) => {
                    this.$swal.fire({
                        title: "Categoria",
                        text: "Categoria guardada exitosamente",
                        icon: "success",
                    });
                });
                emit('cancelar'); // Use 'emit' from context
                emit('refrescar'); // Use 'emit' from context

            }
        }
        return { cancelar,guardar_model };
    },
    data() {
        return {
            OpenClose: this.visible, // Use visible for consistency
        };
    },
    methods: {
        OpenCloseFun() {
            this.OpenClose = false;
        },
    },
    watch: {
        visible(newVal, oldVal) {
            this.OpenClose = newVal;
        },
    },
};
