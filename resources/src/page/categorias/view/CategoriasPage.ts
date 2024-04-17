import { listados } from "../../../shared/AxiosRepository.ts";
import Loading from "vue-loading-overlay";
import "vue-loading-overlay/dist/css/index.css";
export default {
    components: {
        Loading,
    },
    data() {
        return {
            categorias: [],
            categoryWidth: "48%", // Valor inicial, puedes ajustarlo
            productos: [],
            products: [],
            n: [],
            isLoading: true,
            fullPage: true,
        };
    },
    setup() {
        function irCategoria(categoria_id) {
            localStorage.removeItem("categoria_id");
            localStorage.setItem("categoria_id", categoria_id);
            location.href = "/categoria";
            document.body.classList.add("transition");
        }
        return {irCategoria};
    },
    async mounted() {
        const self = this;
        self.isLoading = true;
        self.categorias = await listados("categorias-public");
        self.isLoading = false;
    },
    methods: {
    },
};
