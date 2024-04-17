<template>
  <loading v-model:active="isLoading" :can-cancel="true" :is-full-page="fullPage" />
  <!-- home_banner::start  -->
  <Carousel :autoplay="2000" :wrap-around="true">
    <Slide v-for="(slide, index) in carouselSlider" :key="index">
      <div class="carousel__item">
        <img
          :src="slide.url"
          :alt="slide.alt"
          :title="slide.title"
          class="carousel__image"
        />
      </div>
    </Slide>

    <template #addons>
      <Pagination />
    </template>
  </Carousel>
  <div id="best_deals" class="amaz_section section_spacing">

    <br />
    <!-- amaz_section::start  -->
    <div id="feature_categories" class="amaz_section">
      <div class="container">
        <div class="row">
          <div class="col-12">
            <div class="section__title d-flex align-items-center gap-3 mb_30 flex-wrap">
              <h3 id="feature_categories_title" class="m-0 flex-fill">Categorías</h3>

              <a href="#" class="title_link d-flex align-items-center lh-1">
                <span class="title_text">Ver Todo</span>
                <span class="title_icon">
                  <i class="fas fa-chevron-right"></i>
                </span>
              </a>
            </div>
          </div>
        </div>
        <div class="row"></div>
      </div>
    </div>
    <Carousel :wrap-around="true">
      <Slide v-for="index in carouselSlider" :key="index">
        <div class="carousel__item">
          <div id="filter_category_1" class="amaz_section">
            <div class="containerm" id="category-container">
              <div
                v-for="(category, index) in categorias"
                :key="index"
                :style="{ width: categoryWidth }"
                class="min"
              >
                <a @click="irCategoria(category.id)">
                  <div class="card_pulenta">
                    <img :src="category.image" :alt="category.name" />
                    <span class="cat">Desde S/00</span>
                    <div class="category-name">{{ category.name }}</div>
                  </div>
                </a>
              </div>
            </div>
          </div>
        </div>
      </Slide>
    </Carousel>

    <div class="amaz_section section_spacing3">
      <div class="container">
        <div class="row">
          <div class="col-12">
            <ul
              class="nav amzcart_tabs d-flex align-items-center justify-content-center flex-wrap"
              id="myTab"
              role="tablist"
            >
              <li class="nav-item" role="presentation" id="top_rating">
                <button
                  class="nav-link active"
                  id="home-tab"
                  data-bs-toggle="tab"
                  data-bs-target="#home"
                  type="button"
                  role="tab"
                  aria-controls="home"
                  aria-selected="true"
                >
                  <span id="top_rating_title">Mejores calificados</span>
                </button>
              </li>
              <li class="nav-item" role="presentation" id="people_choices">
                <button
                  class="nav-link"
                  id="profile-tab"
                  data-bs-toggle="tab"
                  data-bs-target="#profile"
                  type="button"
                  role="tab"
                  aria-controls="profile"
                  aria-selected="false"
                >
                  <span id="people_choice_title">Recomiendan</span>
                </button>
              </li>
              <li class="nav-item" role="presentation" id="top_picks">
                <button
                  class="nav-link"
                  id="contact-tab"
                  data-bs-toggle="tab"
                  data-bs-target="#contact"
                  type="button"
                  role="tab"
                  aria-controls="contact"
                  aria-selected="false"
                >
                  <span id="top_picks_title">Mejores opciones</span>
                </button>
              </li>
            </ul>
          </div>
          <div class="col-xl-12">
            <div class="tab-content" id="myTabContent">
              <div
                class="tab-pane fade show active"
                id="home"
                role="tabpanel"
                aria-labelledby="home-tab"
              >
                <!-- conttent  -->
                <div
                  class="amaz_fieature_active fieature_crousel_area owl-carousel"
                ></div>
                <!-- conttent  -->
              </div>
              <div
                class="tab-pane fade hide"
                id="profile"
                role="tabpanel"
                aria-labelledby="profile-tab"
              >
                <!-- conttent  -->
                <div
                  class="amaz_fieature_active fieature_crousel_area owl-carousel"
                ></div>
                <!-- conttent  -->
              </div>
              <div
                class="tab-pane fade hide"
                id="contact"
                role="tabpanel"
                aria-labelledby="contact-tab"
              >
                <!-- conttent  -->
                <div
                  class="amaz_fieature_active fieature_crousel_area owl-carousel"
                ></div>
                <!-- conttent  -->
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- amaz_recomanded::start  -->

    <div class="amaz_recomanded_area">
      <div class="container">
        <div id="more_products" class="amaz_recomanded_box mb_60">
          <div class="amaz_recomanded_box_head">
            <h4 class="mb-0">MÁS INMUEBLES QUE TE PUEDEN ENCANTAR</h4>
          </div>
          <div class="container-a">
            <div class="row-a">
              <ul
                class="splide__list"
                id="splide03-list"
                role="presentation"
                style="transform: translateX(0px)"
              >
                <div class="col-a" v-for="(category, index) in categorias" :key="index">
                  <li
                    class="splide__slide is-visible is-active"
                    id="splide03-slide01"
                    role="group"
                    aria-roledescription="slide"
                    aria-label="1 of 31"
                  >
                    <button
                      type="button"
                      class="poduct-normal"
                      v-on:click="busqueda(category.name)"
                    >
                      {{ category.name }}
                    </button>
                  </li>
                </div>
              </ul>
            </div>
          </div>
          <br />
          <div class="row row-product">
            <div
              class="col"
              v-for="(product, index) in products"
              :key="index"
              style="padding: 8px"
            >
              <div class="product-img">
               <!--<img
                  class="card-img-top"
                  :src="product.imagen"
                  :alt="product.nombre"
                  @click="irProducto(product)"
                />-->
                <img
                  class="card-img-top"
                  :src="product.imagen"
                  :alt="product.nombre"
                />
                <div class="card-body-product">
                  <div class="card-text-product">
                    <div class="product-name">{{ product.nombre }}</div>
                    <div class="product-price">
                      ${{ product.precio}}<span class="cat"
                        ></span
                      >
                    </div>
                    <div class="product-review">
                     <!-- <a @click="irProducto(product)" class="normal-cart"
                        ><img
                          src="images/icons/cart.png"
                          style="vertical-align: text-top"
                          width="19px"
                        />
                      </a>-->
                      <a  class="normal-cart"
                        ><img
                          src="images/icons/cart.png"
                          style="vertical-align: text-top"
                          width="19px"
                        />
                      </a>
                    </div>
                    <span class="star">&#9733;</span>
                    <span class="star">&#9733;</span>
                    <span class="star">&#9734;</span>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-12 text-center">
          <input type="hidden" id="login_check" value=" 0 " />
        </div>
        <div style="text-align: center">
          <a href="" class="normal-bajar"> Ver más</a>
        </div>
      </div>
    </div>

    <!-- amaz_brand::start  -->

    <!-- amaz_brand::end  -->


  </div>
  <!-- Popular Searches::end  -->


</template>
<script src="./Home.ts"></script>
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

._fluid-quad-image-label-v2_style_fluidImageContainer__2SOMr
  ._fluid-quad-image-label-v2_style_fluidImage__gTBjA {
  margin: auto;
  position: absolute;
}

._fluid-quad-image-label-v2_style_fluidImageContainer__2SOMr
  ._fluid-quad-image-label-v2_style_fluidImage__gTBjA._fluid-quad-image-label-v2_style_fluidLandscapeImage__2euAK {
  height: 100%;
  left: -9999px;
  max-width: none;
  right: -9999px;
}

._fluid-quad-image-label-v2_style_fluidImageContainer__2SOMr
  ._fluid-quad-image-label-v2_style_fluidImage__gTBjA._fluid-quad-image-label-v2_style_fluidPortraitImage__2SAYm {
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

._fluid-fat-image-link-v2_style_fluidImageContainer__2SOMr
  ._fluid-fat-image-link-v2_style_fluidImage__gTBjA {
  margin: auto;
  position: absolute;
}

._fluid-fat-image-link-v2_style_fluidImageContainer__2SOMr
  ._fluid-fat-image-link-v2_style_fluidImage__gTBjA._fluid-fat-image-link-v2_style_fluidLandscapeImage__2euAK {
  height: 100%;
  left: -9999px;
  max-width: none;
  right: -9999px;
}

._fluid-fat-image-link-v2_style_fluidImageContainer__2SOMr
  ._fluid-fat-image-link-v2_style_fluidImage__gTBjA._fluid-fat-image-link-v2_style_fluidPortraitImage__2SAYm {
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

.cat {
  border-radius: 23px;
  background-color: rgb(232 232 232);
  color: #ff8c09 !important;
  padding: 2px;
  font-size: 0.6rem;
}
</style>
<style scoped>
.carousel__image {
  width: 100%;
  height: 480px;
  object-fit: cover;
}

.p-00 {
  padding: 8px;
  border-radius: 23px;
  color: #000000;
  border: 1px solid #000000;
}

/* (dispositivos móviles) */
@media only screen and (max-width: 767px) {
  .carousel__image {
    height: 300px;
  }

  .col-122 {
    position: relative;
    display: flex;
    flex-wrap: wrap;
  }
}

/* Estilos para el modal */
.modal {
  position: absolute;
  background: linear-gradient(to bottom, #b0b0b095, #d6d6d64a);
  padding: 20px;
  border-radius: 8px;
  box-shadow: 0 0 10px rgba(0, 0, 0, 0.3);
  width: 50%;
  height: 65%;
  left: 50%;
  top: 50%;
  transform: translate(-50%, -50%);
}
.im-modal {
  width: 100%; /* Ajusta según sea necesario */
}
@media (max-width: 768px) {
  .modal {
    max-height: 25%;
  }
}
</style>
