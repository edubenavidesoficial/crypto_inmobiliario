<template>
  <div id="best_deals" class="amaz_section section_spacing">
    <loading v-model:active="isLoading"
                 :can-cancel="true"
                 :is-full-page="fullPage"/>
    <div class="amaz_recomanded_area">
      <div class="container">
        <div id="more_products" class="amaz_recomanded_box mb_60">
          <div class="row row-product">
            <div class="col" v-for="(product, index) in products" :key="index" style="padding: 8px;">
              <div class="product-img" style="width: 11rem" @click="irProducto(product)">
                <img class="card-img-top" :src="product.image" :alt="product.title" />
                <div class="card-body-product">
                  <div class="card-text-product">
                    <div class="product-name">{{ product.title }}</div>
                    <div class="product-price"> S/{{ formatear_precio_total(product.price,2) }}</div>
                    <div class="product-review">Compras: {{ product.num_reviews }}</div>
                    <a @click="irProducto(product)" class="normal-cart"><img src="images/icons/cart.png" width="19px"> Comprar</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-12 text-center">
          <input type="hidden" id="login_check" value=" 0 " />
        </div>
        <div style="text-align: center;">
          <a href="" class="normal-bajar">Ver más</a>
        </div>
      </div>
    </div>
  </div>
</template>
<script src="./ProductosBusqueda.ts"></script>
<style>
._fluid-quad-image-label-v2_style_fluidQuadImageLabel__3b-Iv {
  -webkit-box-orient: vertical;
  -webkit-box-direction: normal;
  background: #fff;
  border-radius: 23px;
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -ms-flex-direction: column;
  flex-direction: column;
}

._fluid-quad-image-label-v2_style_fluidQuadImageLabelBody__3tld0 {
  -webkit-box-flex: 1;
  -ms-flex-positive: 1;
  flex-grow: 1;
  height: 275px;
  margin-bottom: 44px;
  padding: 0 20px;
}

._fluid-quad-image-label-v2_style_gridRowOne__1t0zL {
  margin-bottom: 6px;
}

._fluid-quad-image-label-v2_style_gridRowOne__1t0zL,
._fluid-quad-image-label-v2_style_gridRowTwo__15woW {
  height: 50%;
  overflow: hidden;
}

._fluid-quad-image-label-v2_style_quadrantContainer__3TMqG {
  display: inline-block;
  height: 100%;
  margin: 0;
  padding: 0 0 36px;
  position: relative;
  width: 47.5%;
}

._fluid-quad-image-label-v2_style_rightQuadrant__PI01n {
  float: right;
}

._fluid-quad-image-label-v2_style_centerImage__30wh- {
  height: 100%;
  width: 100%;
}

._fluid-quad-image-label-v2_style_imageLabel__3ANSV {
  height: 36px;
}

._fluid-quad-image-label-v2_style_fluidImageContainer__2SOMr {
  height: 100%;
  overflow: hidden;
  position: relative;
  width: 100%;
}

._fluid-quad-image-label-v2_style_fluidImageContainer__2SOMr ._fluid-quad-image-label-v2_style_fluidImage__gTBjA {
  margin: auto;
  position: absolute;
}

._fluid-quad-image-label-v2_style_fluidImageContainer__2SOMr ._fluid-quad-image-label-v2_style_fluidImage__gTBjA._fluid-quad-image-label-v2_style_fluidLandscapeImage__2euAK {
  height: 100%;
  left: -9999px;
  max-width: none;
  right: -9999px;
}

._fluid-quad-image-label-v2_style_fluidImageContainer__2SOMr ._fluid-quad-image-label-v2_style_fluidImage__gTBjA._fluid-quad-image-label-v2_style_fluidPortraitImage__2SAYm {
  bottom: -9999px;
  max-height: none;
  top: -9999px;
  width: 100%;
}

._fluid-fat-image-link-v2_style_fluidFatImageLink__1nw4J {
  -webkit-box-orient: vertical;
  -webkit-box-direction: normal;
  background: antiquewhite;
  border-radius: 23px;
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -ms-flex-direction: column;
  flex-direction: column;
}

._fluid-fat-image-link-v2_style_fluidFatImageLinkBody__1LsOX {
  -webkit-box-flex: 1;
  -ms-flex-positive: 1;
  flex-grow: 1;
  height: 275px;
  margin-bottom: 44px;
  padding: 0 20px;
}

._fluid-fat-image-link-v2_style_mergedLinks__10JqZ {
  -webkit-box-orient: inherit;
  -webkit-box-direction: inherit;
  display: inherit;
  -ms-flex-direction: inherit;
  flex-direction: inherit;
  height: 100%;
}

._fluid-fat-image-link-v2_style_fluidImageContainer__2SOMr {
  height: 100%;
  overflow: hidden;
  position: relative;
  width: 100%;
}

._fluid-fat-image-link-v2_style_fluidImageContainer__2SOMr ._fluid-fat-image-link-v2_style_fluidImage__gTBjA {
  margin: auto;
  position: absolute;
}

._fluid-fat-image-link-v2_style_fluidImageContainer__2SOMr ._fluid-fat-image-link-v2_style_fluidImage__gTBjA._fluid-fat-image-link-v2_style_fluidLandscapeImage__2euAK {
  height: 100%;
  left: -9999px;
  max-width: none;
  right: -9999px;
}

._fluid-fat-image-link-v2_style_fluidImageContainer__2SOMr ._fluid-fat-image-link-v2_style_fluidImage__gTBjA._fluid-fat-image-link-v2_style_fluidPortraitImage__2SAYm {
  bottom: -9999px;
  max-height: none;
  top: -9999px;
  width: 100%;
}

._fluid-fat-image-link-v2_style_centerImage__30wh- {
  height: 100%;
  width: 100%;
}

._fluid-fat-image-link-v2_style_imageLabel__3ANSV {
  height: 36px;
}
</style>
<style scoped>
.carousel__image {
  width: 100%;
  height: 480px;

  object-fit: cover;
}

/* (dispositivos móviles) */
@media only screen and (max-width: 767px) {
  .carousel__image {
    height: 300px;
  }
}
</style>
