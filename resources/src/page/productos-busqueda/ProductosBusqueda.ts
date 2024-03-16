import "vue3-carousel/dist/carousel.css";
import { Carousel, Slide, Pagination, Navigation } from "vue3-carousel";
import ProductAmazonStore from "../../store/ProductAmazonStore";
import { formatear_precio_total } from "../../shared/Utils";
import Loading from 'vue-loading-overlay';
import 'vue-loading-overlay/dist/css/index.css';

export default {
    components: {
        Loading
    },
    data() {
        return {
            isLoading: true,
            fullPage: true,
            products: []
        };
    },
    setup() {
        return { formatear_precio_total };
    },
    async mounted() {
        const localStorageProducts= localStorage.getItem("products");
        const products = Array.from(JSON.parse(localStorageProducts != null ?localStorageProducts:'' ));
        this.products = products;
        this.isLoading = false;
    },
    methods: {
        irProducto(producto){
            localStorage.removeItem('product_id');
            localStorage.setItem('product_id', producto.product_id);
            location.href = "/detalle";
            document.body.classList.add("transition");
        }
    },
};
