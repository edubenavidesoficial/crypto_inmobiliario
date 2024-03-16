import { editar, guardar, listados_api } from "../../../shared/AxiosRepository";

export default {
    data() {
        return {
            client: {
                nombres: "",
                apellidos: "",
                address_line1: "",
                address_line2: "",
                zip_code: "",
                city: "",
                state: "",
                country: "",
                phone_number: "",
                instructions: "",
                identificacion_frontal: "",
                identificacion_posterior: "",
            },
            accion: "NUEVO",
            identificacion_frontal:"",
            identificacion_posterior: "",
        };
    },
    setup() {
               return { };
    },
    async mounted() {
        let client = await listados_api("perfil-usuario");
        this.accion = client != null ? "EDITAR" : "NUEVO";
        this.client = client.model;
        this.client.identificacion_frontal=client.model.identificacion_frontal;
        this.client.identificacion_posterior=client.model.identificacion_posterior;
    },
    methods: {
        identificacionFrontalhange(event) {
            const file = event.target.files[0];

            if (file) {
                const reader = new FileReader();
                reader.readAsDataURL(file);

                reader.onload = () => {
                    const base64Data = reader.result;
                    this.client.identificacion_frontal = base64Data;
                    this.identificacion_frontal = base64Data;
                 };
            }
        },
        identificacionPosteriorhange(event) {
            const file = event.target.files[0];
            if (file) {
                const fileReader = new FileReader();
                fileReader.readAsDataURL(event.target.files[0]);
                fileReader.onload = () => {
                    const base64Data = fileReader.result;
                    this.client.identificacion_posterior = base64Data;
                    this.identificacion_posterior = base64Data;
                };
            }
        },
        async  guardarContacto() {
            const identificacion_frontal = localStorage.getItem(
                "identificacion_frontal"
            );
            const identificacion_posterior = localStorage.getItem(
                "identificacion_posterior"
            );
            await guardar("cliente", this.client);
        },
        async  editarContacto() {
            const url = "cliente/" + this.client.id;
            await editar(url, this.client);
        }
    },
};
