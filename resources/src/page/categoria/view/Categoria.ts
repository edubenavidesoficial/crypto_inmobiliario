import * as bootstrap from 'bootstrap'
import { buscar_amazon } from '../../../shared/AxiosRepository';
import { formatear_precio_total } from '../../../shared/Utils';

export default{
    data() {
        return {
            categoria:localStorage.getItem("categoria_name"),
            products: [],
        };
    },
    setup() {
        function irProducto(producto){
            localStorage.removeItem('product_id');
            localStorage.setItem('product_id', producto.product_id);
            location.href = "/detalle";
            document.body.classList.add("transition");
        }
        return { formatear_precio_total,irProducto };
    },
    async mounted() {
        const self = this;
          await buscar_amazon(self.categoria)
            .then((response) => response.json())
            .then((data) => {
                self.products = data.results;
            });
    },

};
