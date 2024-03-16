/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

import './bootstrap';
import { createApp } from 'vue';
import Home from '../src/page/home/view/Home.vue';
import Contactos from '../src/page/contactos/view/Contactos.vue';
import Detalle from '../src/page/detalle/view/Detalle.vue';
import Categoria from '../src/page/categoria/view/Categoria.vue';
import CategoriasPage from '../src/page/categorias/view/CategoriasPage.vue';
import QuinesSomos from '../src/page/quienes-somos/view/QuienesSomos.vue';
import ProductosBusqueda from '../src/page/productos-busqueda/ProductosBusqueda.vue';
import DetallePedido from '../src/page/buy-cart/detalle-pedido/view/DetallePedido.vue';
import CompararPago from '../src/page/buy-cart/comparar-pago/view/CompararPago.vue';
import CategoriaAdmin from '../src/page/admin/page/categoria/view/CategoriaAdmin.vue';
import GarantiaRetornoPage from '../src/page/admin/page/garantiaRetorno/view/GarantiaRetornoPage.vue';
import ManejoAduanaPage from '../src/page/admin/page/manejoAduana/view/ManejoAduanaPage.vue';
import PrecioPesoPage from '../src/page/admin/page/precio-peso/view/PesoPrecioPage.vue';

import Cart from '../src/page/buy-cart/cart/view/Cart.vue';
import Perfil from '../src/page/perfil/view/Perfil.vue';
import MenuHeader from '../src/layout/menu-header/view/MenuHeader.vue';
import Sidebar from '../src/layout/sidebar/view/Sidebar.vue';
import RightSideNavHome from '../src/layout/sidebar/view/RightSideNavHome.vue';

import RightSideNav from '../src/page/auth/layout/RightSideNav.vue';
import Login from '../src/page/auth/login/view/Login.vue';
import Register from '../src/page/auth/register/view/Register.vue';

import SidebarAdmin from '../src/page/admin/layout/sidebar-admin/view/SidebarAdmin.vue';

import VueGoogleTranslate from 'vue-google-translate'
import VueSweetalert2 from 'vue-sweetalert2';
import 'sweetalert2/dist/sweetalert2.min.css';
import Vue3EasyDataTable from 'vue3-easy-data-table';
import 'vue3-easy-data-table/dist/style.css';
import "bootstrap-icons/font/bootstrap-icons.css"
/**
 * Next, we will create a fresh Vue application instance. You may then begin
 * registering components with the application instance so they are ready
 * to use in your application's views. An example is included for you.
 */

const app = createApp({});

app.component('home-page', Home);
app.component('contactos-page', Contactos);
app.component('detalle-page', Detalle);
app.component('categoria-page', Categoria);
app.component('categorias-page', CategoriasPage);
app.component('quienes-somos-page', QuinesSomos);
app.component('sidebar-layout', Sidebar);
app.component('right-side-nav-layout', RightSideNav);
app.component('right-side-nav-home-layout', RightSideNavHome);


app.component('menu-header-layout', MenuHeader);
app.component('productos-busqueda-page', ProductosBusqueda);
app.component('detalle-pedido-page', DetallePedido);
app.component('cart-page', Cart);
app.component('comprobar-pago-page', CompararPago);
//admin
app.component('categoria-admin-page', CategoriaAdmin);
app.component('garantia-retorno-page', GarantiaRetornoPage);
app.component('manejo-aduana-page', ManejoAduanaPage);
app.component('precio-peso-page', PrecioPesoPage);


app.component('perfil-page', Perfil);
app.component('login-page', Login);
app.component('register-page', Register);


//admin
app.component('sidebar-admin-page', SidebarAdmin);



app.use(VueSweetalert2);
app.use(VueGoogleTranslate, {
    apiKey: 'AIzaSyB5WWQYKsNTHU06UR499CIXNVS7-iWyID0',
  })

app.component('EasyDataTable', Vue3EasyDataTable);


app.mount('#app');
