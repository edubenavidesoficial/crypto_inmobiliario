import "vue3-carousel/dist/carousel.css";
import { Carousel, Slide, Pagination, Navigation } from "vue3-carousel";
import axios from "axios";
import {
    listados,
    buscar_amazon,
    listados_amazon,
} from "../../../shared/AxiosRepository.ts";
import {
    buscarProducto,
    formatear_precio_total,
} from "../../../shared/Utils.ts";
import Loading from "vue-loading-overlay";
import "vue-loading-overlay/dist/css/index.css";
export default {
    components: {
        Carousel,
        Slide,
        Pagination,
        Navigation,
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
        const carouselSlider = [
            {
                url: "",
                alt: "Slider Principal",
                title: "Slider Principal",
            },
            {
                url: "",
                alt: "Slider Segundo",
                title: "Slider Segundo",
            },
        ];

        return { carouselSlider, formatear_precio_total };
    },
    async mounted() {
        const self = this;
        self.isLoading = true;
        self.categorias = await listados("categorias-public", { home: true });
        // Calcula el ancho de las categorías después de cargarlas
        const totalCategories = self.categorias.length;
        self.categoryWidth = `${Math.floor(100 / (totalCategories / 2))}%`;
        self.products = await listados("proyectos-public");
        // Ejecutar el código cuando el componente ha sido montado
        this.$nextTick(() => {
            const modal = document.querySelector(".modal") as HTMLElement;
            const closeIcon = document.getElementById("closeIcon");

            if (modal && closeIcon) {
                modal.style.display = "block";

                closeIcon.addEventListener("click", () => {
                    modal.style.display = "none";
                });

                // Desaparecer el modal después de 2 segundos
                setTimeout(() => {
                    modal.style.display = "none";
                }, 7000);
            }
        });
    },
    methods: {
        async busqueda(valor_buscado: string) {
            const self = this;
            self.isLoading = true;
            await buscar_amazon(valor_buscado)
                .then((response) => response.json())
                .then((data) => {
                    self.products = data.results;
                    self.isLoading = false;
                });
        },
        irCategoria(categoria_name: string) {
            localStorage.removeItem("categoria_name");
            localStorage.setItem("categoria_name", categoria_name);
            location.href = "/categoria";
            document.body.classList.add("transition");
        },
        irProducto(producto) {
            localStorage.removeItem("product_id");
            localStorage.setItem("product_id", producto.product_id);
            location.href = "/detalle";
            document.body.classList.add("transition");
        },
        async enlace(criterio_busqueda: string) {
            this.isLoading = true;
            buscarProducto(criterio_busqueda);
        },
    },
};
