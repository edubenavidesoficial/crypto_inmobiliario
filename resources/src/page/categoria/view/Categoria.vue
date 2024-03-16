<template>
  <div id="best_deals" class="amaz_section section_spacing">
    <div class="amaz_recomanded_area">
      <div class="container text-center">
        <div class="row align-items-start">
          <div class="col-3">
  <card>
    <div style="max-width: 100%; height: auto;">
      <img src="images/icons/banner.jpg" style="max-width: 100%; height: auto;" alt="Banner Image">
    </div>
  </card>
  <div class="negro">
    <center>
      <br>
      <h5 class="letra">Filtros</h5>
    </center>
      <form id="filterForm">
        <div class="form-group">
          <label for="priceFilter">Precio:</label>
          <select class="form-control-cat" id="priceFilter">
            <option value="all">Todos</option>
            <option value="low">Bajo</option>
            <option value="medium">Medio</option>
            <option value="high">Alto</option>
          </select>
        </div>
        <div class="form-group">
          <label for="sizeFilter">Tamaño:</label>
          <select class="form-control-cat" id="sizeFilter">
            <option value="all">Todos</option>
            <option value="small">Pequeño</option>
            <option value="medium">Mediano</option>
            <option value="large">Grande</option>
          </select>
        </div>
        <br>
        <div class="form-check">
          <input type="checkbox" class="form-check-input" id="bestSellerFilter">
          <label class="form-check-label label-desktop" for="bestSellerFilter">Más Vendidos</label>
        </div>
        <div class="form-check">
          <input type="checkbox" class="form-check-input" id="offersFilter">
          <label class="form-check-label label-desktop" for="offersFilter">Ofertas</label>
        </div>
        <div class="form-check">
          <input type="checkbox" class="form-check-input" id="bestSellerFilter">
          <label class="form-check-label label-desktop" for="bestSellerFilter">Amazon</label>
        </div>
        <div class="form-check">
          <input type="checkbox" class="form-check-input" id="bestSellerFilter">
          <label class="form-check-label label-desktop" for="bestSellerFilter">Oferta</label>
        </div>
        <button type="button" class="btn btn-cat mt-3 btn-block-sm" onclick="applyFilters()">Aplicar Filtros</button>
      </form>
    </div>

  </div>

            <div class="col">
              <div id="more_products" class="amaz_recomanded_box mb_60">
          <div class="row row-product">
            <div class="col" v-for="(product, index) in products" :key="index" style="padding: 8px" >
              <div class="product-img" style="width: 12rem"  v-on:click ="irProducto(product)">
                <img class="card-img-top" :src="product.image" :alt="product.title" />
                <div class="card-body-product">
                  <div class="card-text-product">
                    <div class="product-name">{{ product.title }}</div>
                    <div class="product-price">
                      S/{{ formatear_precio_total(product.price, 2) }} <span class="cat"><del> {{ formatear_precio_total(product.price * 1.1, 2) }}</del></span>
                    </div>
                    <div class="product-review">Compras: {{ product.num_reviews }}</div>
                    <br>
                    <a @click="irProducto(product)"  class="normal-cart"><img src="images/icons/cart.png" width="19px" /></a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
            </div>
        </div>
        <div style="text-align: center">
          <a href="" class="normal-bajar">Ver más</a>
        </div>
    </div>
    </div>
  </div>
</template>
<script src="./Categoria.ts"></script>

<style scoped>
.negro {
  background: black;
  box-shadow: 0px 4px 8px rgb(0 0 0 / 43%);
  border-radius: 0 0 13px 13px;
}

.letra{
  text-align: center !important;
  font-size: 10pt !important;
    padding-top: 4px;
    color: #ffffff;
    background: #ff8c09;
    border-radius: 23px;
    width: 73px;
    height: 22px;
}

.btn-cat{
  font-size: 12pt !important;
    padding-top: 4px;
    color: #000000;
    background: #ffffff;
    border-radius: 25px;
    height: 30px;
}

.form-control-cat {
    display: block;
    width: 80%;
    padding: 0.125rem 0.85rem;
    line-height: 1.5;
    color: #212529;
    background-color: #fff;
    background-clip: padding-box;
    border: 1px solid #ec7c2c;
    appearance: revert-layer;
    border-radius: 23px;
}

.form-group{
  padding: 5px;
    padding-left: 20%;
}

label {
    display: flex !important;
}
.form-check {
    padding-left: 3.6em !important;
}
.form-check-input[type=checkbox] {
    border-radius: 23px !important;
}
/* (dispositivos móviles) */
@media only screen and (max-width: 767px) {
  .product-img {
    margin-bottom: 10px;
    margin-bottom: 10px;
    box-shadow: 0px 4px 8px rgb(0 0 0 / 43%);
    border-radius: 13px;
    width: 7rem !important;
}
.label-desktop {
        display: none !important;
    }
    .btn-cat {
      border-radius: 7px !important;
    height: 100% !important;
}
}

</style>
