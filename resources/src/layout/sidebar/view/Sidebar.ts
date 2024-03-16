import { listados_api } from "../../../shared/AxiosRepository";

export default {
    data() {
        return {
            usuario: null,
            client:{
                nombres:'',
                apellidos:'',
                address_line1:'',
                address_line2:'',
                zip_code:'',
                city:'',
                state:'',
                country:'',
                phone_number:'',
                instructions:'',
            },
        };
    },
    setup() {

    },
    methods: {},
    async mounted() {
        const userLocalStorage = localStorage.getItem("user");
        const user = userLocalStorage ? JSON.parse(userLocalStorage) : {};
        this.usuario = user;
        let client = await listados_api('perfil-usuario');
        this.accion= client != null ? 'EDITAR':'NUEVO'
        this.client = client.model;
    },
};
