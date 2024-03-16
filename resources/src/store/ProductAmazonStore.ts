import Vuex from 'vuex';

interface State {
  products: any[]; // Define el tipo del arreglo de productos
  product: any
  mensaje:string
}

const store = new Vuex.Store<State>({
  state: {
    products: [],
    mensaje:'prueba',
    product:null
  },
  mutations: {
    setProducts(state,products:[] ){
        state.products = products;
    },

  },
  actions: {
    setProductsAction(contex, products:[]){
        contex.commit('setProducts',products)
    },

  },
  getters: {
    getProducts(state){
        return state.products;
    }
  },
});

export default store;


