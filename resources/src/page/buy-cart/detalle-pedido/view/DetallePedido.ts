import {  listados_api } from "../../../../shared/AxiosRepository";
import Loading from 'vue-loading-overlay';
import 'vue-loading-overlay/dist/css/index.css';
export default {
    components: {
        Loading
    },
    data() {
        return {
            pedidos: [],
            isLoading: true,
            fullPage: true,
            error: null,
        };
    },
    setup() {
         async function verPedido(tipo){
            try {
                this.isLoading = true;
                const pedidos = await listados_api("order-item",{status:tipo});
                this.pedidos = pedidos.results;
              } catch (error) {
                this.error = error;
              } finally {
                this.isLoading = false;
              }
         }
        return { verPedido };
    },
    async mounted() {
        try {
          const pedidos = await listados_api("order-item",{status:'PENDIENTE'});
          this.pedidos = pedidos.results;
        } catch (error) {
          this.error = error;

        } finally {
          this.isLoading = false;
        }
      },
};
