import * as bootstrap from "bootstrap";
import { buscar_amazon, listados_api } from "../../../shared/AxiosRepository";
import ProductAmazonStore from "../../../store/ProductAmazonStore";
import Loading from "vue-loading-overlay";
import "vue-loading-overlay/dist/css/index.css";
import { buscarProducto } from "../../../shared/Utils";
export default {
    components: {
        Loading,
    },
    data() {
        return {
            results: [],
            busqueda: "",
            isLoading: true,
            fullPage: true,
            result_busqueda: ProductAmazonStore.getters.getProducts,
            show: true,
            currentModal: null,
            cantidad_items: 0,
            listItems: [
                {
                    title: "Entrega garantizada",
                    description: "Fácil reembolso",
                },
                {
                    title: "Devoluciones gratis",
                    description: "En un plazo de 90 días",
                },
            ],
            activeIndex: 0,
        };
    },
    setup() {
        async function verPedido() {
            try {
                const result = await listados_api("contar-items");
                this.cantidad_items = result.cantidad_item;
            } catch (error) {
                this.error = error;
            } finally {
                this.isLoading = false;
            }
        }
        return { verPedido };
    },
    methods: {
        async onInput(event) {
            try {
                this.isLoading = true;
                buscarProducto(this.busqueda);
                this.isLoading = false;
                this.busqueda = "";
            } catch (error) {
                console.error("Error al realizar la búsqueda:", error);
            }
        },
        async enlace(criterio_busqueda: string) {
            this.isLoading = true;
            buscarProducto(criterio_busqueda);
        },

        changeActiveIndex() {
            this.activeIndex = (this.activeIndex + 1) % this.listItems.length;
        },
        openModal(modalId) {
            this.currentModal = modalId;
        },
        closeModal() {
            this.currentModal = null;
        },
    },
    mounted() {
        setInterval(this.changeActiveIndex, 2000);
        // Código que se ejecuta después de que el componente ha sido montado
        document.addEventListener("DOMContentLoaded", () => {
            // Obtener el elemento de cierre del banner
            const closePromoBar = document.getElementById("promotion_close");

            // Agregar un evento de clic al elemento de cierre
            if (closePromoBar) {
                closePromoBar.addEventListener("click", () => {
                    // Ocultar el banner al hacer clic en el botón de cierre
                    const promotionBar =
                        document.querySelector(".promotion_bar");
                    if (promotionBar) {
                        promotionBar.classList.add("hidden");
                    }
                });
            }
        });
        this.verPedido();
    },
};
