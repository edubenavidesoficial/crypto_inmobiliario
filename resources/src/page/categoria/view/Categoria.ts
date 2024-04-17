import * as bootstrap from 'bootstrap'
import { buscar_amazon, listados_api } from '../../../shared/AxiosRepository';
import { formatear_precio_total } from '../../../shared/Utils';

export default{
    data() {
        return {
            categoria:localStorage.getItem("categoria_id"),
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
          await listados_api('proyectos-public',{categories_id:self.categoria})
            .then((data) => {
                self.products = data.results;
            });
    },

};
