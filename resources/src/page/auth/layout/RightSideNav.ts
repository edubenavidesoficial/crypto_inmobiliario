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
    async mounted() {
        const userLocalStorage = localStorage.getItem("user");
        const user = userLocalStorage ? JSON.parse(userLocalStorage) : null;
        this.usuario = user;
        let client = await listados_api('perfil-usuario');
        this.client = client.model;
    },
};
