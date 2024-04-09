import { guardar, listados_api } from "../../../shared/AxiosRepository";
import Web3 from 'web3';  

export default {
    data() {
        return {
            usuario: null,
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
            },
            metaMaskInstalled: false,
        };
    },
    setup() {},
    async mounted() {
        const userLocalStorage = localStorage.getItem("user");
        const user = userLocalStorage ? JSON.parse(userLocalStorage) : null;
        this.usuario = user;
        let client = await listados_api("perfil-usuario");
        this.client = client.model;
    },
    methods: {
        async logout() {
            const userLocalStorage = localStorage.getItem("user");
            const user = userLocalStorage ? JSON.parse(userLocalStorage) : null;
            this.usuario = user;
            await guardar("logout", this.usuario);
            localStorage.removeItem("user");
            location.href = "/";
            document.body.classList.add("transition");
        },
        async connectToMetaMask() {
            if (window.BinanceChain) { // Verificar si Binance Chain está disponible en lugar de Ethereum
                const web3 = new Web3(window.BinanceChain);
                try {
                    const accounts = await window.BinanceChain.request({ method: 'eth_requestAccounts' });
                    console.log('Conexión a MetaMask exitosa');
                    console.log('Dirección del usuario:', accounts[0]);
                } catch (error) {
                    console.error('El usuario rechazó la conexión a MetaMask');
                }
            } else {
                console.error('MetaMask no está instalado o no se ha conectado a Binance Smart Chain');
            }
        },
    },
    created() {
        this.metaMaskInstalled = typeof window.BinanceChain !== 'undefined'; // Verificar si Binance Chain está disponible
    },
};
