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
    <div class="container">
      <div class="row">
        <div class="col-12">
          <div class="section__title d-flex align-items-center gap-3 mb_30 flex-wrap">
            <h3 id="best_deals_title" class="m-0 flex-fill">Mejores Ofertas</h3>
            <a href="#" class="title_link d-flex align-items-center lh-1">
              <span class="title_text">Ver Todo</span>
              <span class="title_icon">
                <i class="fas fa-chevron-right"></i>
              </span>
            </a>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-6">
          <div>
            <div id="desktop-grid-1">
              <!--CardsClient-->
              <div
                class="a-cardui _fluid-quad-image-label-v2_style_fluidQuadImageLabel__3b-Iv"
                data-a-card-type="basic"
                id="CardInstanceUHUhp29vtdMYWm4YARlZoQ"
                data-card-metrics-id="fluid-quad-image-label-v2_desktop-gateway-atf_0"
              >
                <div class="a-cardui-header">
                  <h2 class="a-color-base headline m2 truncate-2line">
                    Accesorios Gaming
                  </h2>
                </div>
                <div
                  class="_fluid-quad-image-label-v2_style_fluidQuadImageLabelBody__3tld0"
                >
                  <div
                    class="a-section a-spacing-small _fluid-quad-image-label-v2_style_gridRowOne__1t0zL"
                  >
                    <div
                      class="a-section a-spacing-none _fluid-quad-image-label-v2_style_quadrantContainer__3TMqG"
                    >
                      <a
                        aria-label="Headsets"
                        class="a-link-normal _fluid-quad-image-label-v2_style_centerImage__30wh- aok-block image-window"
                        href="#"
                        @click="enlace('Audifonos gamer')"
                      >
                        <div
                          class="a-section a-spacing-none _fluid-quad-image-label-v2_style_fluidImageContainer__2SOMr"
                        >
                          <img
                            alt="Headsets"
                            src="https://images-na.ssl-images-amazon.com/images/G/01/AmazonExports/Fuji/2021/June/Fuji_Quad_Headset_1x._SY116_CB667159060_.jpg"
                            class="_fluid-quad-image-label-v2_style_fluidLandscapeImage__2euAK _fluid-quad-image-label-v2_style_fluidImage__gTBjA"
                            data-a-hires="https://images-na.ssl-images-amazon.com/images/G/01/AmazonExports/Fuji/2021/June/Fuji_Quad_Headset_2x._SY232_CB667159060_.jpg"
                          />
                        </div>
                        <div
                          class="a-section a-spacing-none _fluid-quad-image-label-v2_style_imageLabel__3ANSV aok-inline-block aok-align-center"
                        >
                          <span class="a-size-small a-color-base truncate-2line"
                            >Headsets</span
                          >
                        </div>
                      </a>
                    </div>
                    <div
                      class="a-section a-spacing-none _fluid-quad-image-label-v2_style_quadrantContainer__3TMqG _fluid-quad-image-label-v2_style_rightQuadrant__PI01n"
                    >
                      <a
                        aria-label="Keyboards"
                        class="a-link-normal _fluid-quad-image-label-v2_style_centerImage__30wh- aok-block image-window"
                        href="#"
                        @click="enlace('teclado gamer')"
                      >
                        <div
                          class="a-section a-spacing-none _fluid-quad-image-label-v2_style_fluidImageContainer__2SOMr"
                        >
                          <img
                            alt="Keyboards"
                            src="https://images-na.ssl-images-amazon.com/images/G/01/AmazonExports/Fuji/2021/June/Fuji_Quad_Keyboard_1x._SY116_CB667159063_.jpg"
                            class="_fluid-quad-image-label-v2_style_fluidLandscapeImage__2euAK _fluid-quad-image-label-v2_style_fluidImage__gTBjA"
                            data-a-hires="https://images-na.ssl-images-amazon.com/images/G/01/AmazonExports/Fuji/2021/June/Fuji_Quad_Keyboard_2x._SY232_CB667159063_.jpg"
                          />
                        </div>
                        <div
                          class="a-section a-spacing-none _fluid-quad-image-label-v2_style_imageLabel__3ANSV aok-inline-block aok-align-center"
                        >
                          <span class="a-size-small a-color-base truncate-2line"
                            >Keyboards</span
                          >
                        </div>
                      </a>
                    </div>
                  </div>
                  <div
                    class="a-section _fluid-quad-image-label-v2_style_gridRowTwo__15woW"
                  >
                    <div
                      class="a-section a-spacing-none _fluid-quad-image-label-v2_style_quadrantContainer__3TMqG"
                    >
                      <a
                        aria-label="Computer mice"
                        class="a-link-normal _fluid-quad-image-label-v2_style_centerImage__30wh- aok-block image-window"
                        href="#"
                        @click="enlace('maouse gamer')"
                      >
                        <div
                          class="a-section a-spacing-none _fluid-quad-image-label-v2_style_fluidImageContainer__2SOMr"
                        >
                          <img
                            alt="Computer mice"
                            src="https://images-na.ssl-images-amazon.com/images/G/01/AmazonExports/Fuji/2021/June/Fuji_Quad_Mouse_1x._SY116_CB667159063_.jpg"
                            class="_fluid-quad-image-label-v2_style_fluidLandscapeImage__2euAK _fluid-quad-image-label-v2_style_fluidImage__gTBjA"
                            data-a-hires="https://images-na.ssl-images-amazon.com/images/G/01/AmazonExports/Fuji/2021/June/Fuji_Quad_Mouse_2x._SY232_CB667159063_.jpg"
                          />
                        </div>
                        <div
                          class="a-section a-spacing-none _fluid-quad-image-label-v2_style_imageLabel__3ANSV aok-inline-block aok-align-center"
                        >
                          <span class="a-size-small a-color-base truncate-2line"
                            >Computer mice</span
                          >
                        </div>
                      </a>
                    </div>
                    <div
                      class="a-section a-spacing-none _fluid-quad-image-label-v2_style_quadrantContainer__3TMqG _fluid-quad-image-label-v2_style_rightQuadrant__PI01n"
                    >
                      <a
                        aria-label="Chairs"
                        class="a-link-normal _fluid-quad-image-label-v2_style_centerImage__30wh- aok-block image-window"
                        href="#"
                        @click="enlace('silla gamer')"
                      >
                        <div
                          class="a-section a-spacing-none _fluid-quad-image-label-v2_style_fluidImageContainer__2SOMr"
                        >
                          <img
                            alt="Chairs"
                            src="https://images-na.ssl-images-amazon.com/images/G/01/AmazonExports/Fuji/2021/June/Fuji_Quad_Chair_1x._SY116_CB667159060_.jpg"
                            class="_fluid-quad-image-label-v2_style_fluidLandscapeImage__2euAK _fluid-quad-image-label-v2_style_fluidImage__gTBjA"
                            data-a-hires="https://images-na.ssl-images-amazon.com/images/G/01/AmazonExports/Fuji/2021/June/Fuji_Quad_Chair_2x._SY232_CB667159060_.jpg"
                          />
                        </div>
                        <div
                          class="a-section a-spacing-none _fluid-quad-image-label-v2_style_imageLabel__3ANSV aok-inline-block aok-align-center"
                        >
                          <span class="a-size-small a-color-base truncate-2line"
                            >Chairs</span
                          >
                        </div>
                      </a>
                    </div>
                  </div>
                </div>
                <div class="a-cardui-footer">
                  <a class="normal truncate-1line" href="">Ver más</a>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-6">
          <div id="desktop-grid-2">
            <!--CardsClient-->
            <div
              class="a-cardui _fluid-fat-image-link-v2_style_fluidFatImageLink__1nw4J"
              data-a-card-type="basic"
              id="CardInstancegbiVEfLv2KfJJ_3pigBgcg"
              data-card-metrics-id="fluid-fat-image-link-v2_desktop-gateway-atf_1"
            >
              <div class="a-cardui-header">
                <h2 class="a-color-base headline m2 truncate-2line">
                  Juguetes menores de S/25
                </h2>
              </div>
              <a
                class="a-link-normal _fluid-fat-image-link-v2_style_mergedLinks__10JqZ"
                href="#"
                @click="enlace(' Juguetes menores de S/25')"
              >
                <div class="_fluid-fat-image-link-v2_style_fluidFatImageLinkBody__1LsOX">
                  <div
                    class="a-section a-spacing-none _fluid-fat-image-link-v2_style_fluidImageContainer__2SOMr"
                  >
                    <img
                      alt="Toys under"
                      src="https://images-na.ssl-images-amazon.com/images/G/01/AmazonExports/Events/2023/EBF23/Fuji_Desktop_Single_image_EBF_1x_v3._SY304_CB573698005_.jpg"
                      class="_fluid-fat-image-link-v2_style_fluidLandscapeImage__2euAK _fluid-fat-image-link-v2_style_fluidImage__gTBjA"
                      data-a-hires="https://images-na.ssl-images-amazon.com/images/G/01/AmazonExports/Events/2023/EBF23/Fuji_Desktop_Single_image_EBF_2x_v3._SY608_CB573698005_.jpg"
                    />
                  </div>
                </div>
                <div class="a-cardui-footer">
                  <span
                    class="a-truncate"
                    data-a-word-break="normal"
                    data-a-max-rows="1"
                    data-a-overflow-marker="&amp;hellip;"
                    style="line-height: 1.3em !important; max-height: 1.3em"
                    data-a-recalculate="false"
                    data-a-updated="true"
                    ><span
                      class="normal a-truncate-cut"
                      aria-hidden="true"
                      style="height: auto"
                      >Compra ahora</span
                    ></span
                  >
                </div>
              </a>
            </div>
          </div>
        </div>
      </div>
      <br />
      <div class="row">
        <div class="col-6">
          <div>
            <div id="desktop-grid-3">
              <!--CardsClient-->
              <div
                class="a-cardui _fluid-fat-image-link-v2_style_fluidFatImageLink__1nw4J"
                data-a-card-type="basic"
                id="CardInstance9pZv0oRxMJKabQLZsbDhKQ"
                data-card-metrics-id="fluid-fat-image-link-v2_desktop-gateway-atf_2"
              >
                <div class="a-cardui-header">
                  <h2 class="a-color-base headline m2 truncate-2line">Ofertas en PC</h2>
                </div>
                <a
                  class="a-link-normal _fluid-fat-image-link-v2_style_mergedLinks__10JqZ"
                  href="#"
                  @click="enlace('ofertas de pc')"
                >
                  <div
                    class="_fluid-fat-image-link-v2_style_fluidFatImageLinkBody__1LsOX"
                  >
                    <div
                      class="a-section a-spacing-none _fluid-fat-image-link-v2_style_fluidImageContainer__2SOMr"
                    >
                      <img
                        alt="Ofertas en PC"
                        src="https://images-na.ssl-images-amazon.com/images/G/01/AmazonExports/Events/2023/EBF23/Fuji_Desktop_Single_image_EBF_1x_v1._SY304_CB573698005_.jpg"
                        class="_fluid-fat-image-link-v2_style_fluidLandscapeImage__2euAK _fluid-fat-image-link-v2_style_fluidImage__gTBjA"
                        data-a-hires="https://images-na.ssl-images-amazon.com/images/G/01/AmazonExports/Events/2023/EBF23/Fuji_Desktop_Single_image_EBF_2x_v1._SY608_CB573698005_.jpg"
                      />
                    </div>
                  </div>
                  <div class="a-cardui-footer">
                    <span
                      class="a-truncate"
                      data-a-word-break="normal"
                      data-a-max-rows="1"
                      data-a-overflow-marker="&amp;hellip;"
                      style="line-height: 1.3em !important; max-height: 1.3em"
                      data-a-recalculate="false"
                      data-a-updated="true"
                      ><span
                        class="normal a-truncate-cut"
                        aria-hidden="true"
                        style="height: auto"
                        >Compra ahora</span
                      ></span
                    >
                  </div>
                </a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-6">
          <div>
            <div id="desktop-grid-4">
              <!--CardsClient-->
              <div
                class="a-cardui _fluid-quad-image-label-v2_style_fluidQuadImageLabel__3b-Iv"
                data-a-card-type="basic"
                id="CardInstanceQHKFJLBKwfYDsIMQh2l_Gg"
                data-card-metrics-id="fluid-quad-image-label-v2_desktop-gateway-atf_3"
              >
                <div class="a-cardui-header">
                  <h2 class="a-color-base headline m2 truncate-2line">
                    Refresca tu espacio
                  </h2>
                </div>
                <div
                  class="_fluid-quad-image-label-v2_style_fluidQuadImageLabelBody__3tld0"
                >
                  <div
                    class="a-section a-spacing-small _fluid-quad-image-label-v2_style_gridRowOne__1t0zL"
                  >
                    <div
                      class="a-section a-spacing-none _fluid-quad-image-label-v2_style_quadrantContainer__3TMqG"
                    >
                      <a
                        aria-label="Dining"
                        class="a-link-normal _fluid-quad-image-label-v2_style_centerImage__30wh- aok-block image-window"
                        href="#"
                        @click="enlace('comida')"
                      >
                        <div
                          class="a-section a-spacing-none _fluid-quad-image-label-v2_style_fluidImageContainer__2SOMr"
                        >
                          <img
                            alt="Dining"
                            src="https://images-na.ssl-images-amazon.com/images/G/01/launchpad/2023/Gateway/January/DesktopQuadCat_186x116_LP-HP_B08MYX5Q2W_01.23._SY116_CB619238939_.jpg"
                            class="_fluid-quad-image-label-v2_style_fluidLandscapeImage__2euAK _fluid-quad-image-label-v2_style_fluidImage__gTBjA"
                            data-a-hires="https://images-na.ssl-images-amazon.com/images/G/01/launchpad/2023/Gateway/January/DesktopQuadCat_372x232_LP-HP_B08MYX5Q2W_01.23._SY232_CB619238939_.jpg"
                          />
                        </div>
                        <div
                          class="a-section a-spacing-none _fluid-quad-image-label-v2_style_imageLabel__3ANSV aok-inline-block aok-align-center"
                        >
                          <span class="a-size-small a-color-base truncate-2line"
                            >Dining</span
                          >
                        </div>
                      </a>
                    </div>
                    <div
                      class="a-section a-spacing-none _fluid-quad-image-label-v2_style_quadrantContainer__3TMqG _fluid-quad-image-label-v2_style_rightQuadrant__PI01n"
                    >
                      <a
                        aria-label="Home"
                        class="a-link-normal _fluid-quad-image-label-v2_style_centerImage__30wh- aok-block image-window"
                        href="#"
                        @click="enlace('hogar')"
                      >
                        <div
                          class="a-section a-spacing-none _fluid-quad-image-label-v2_style_fluidImageContainer__2SOMr"
                        >
                          <img
                            alt="Home"
                            src="https://images-na.ssl-images-amazon.com/images/G/01/launchpad/2023/Gateway/January/DesktopQuadCat_186x116_home_B08RCCP3HV_01.23._SY116_CB619238939_.jpg"
                            class="_fluid-quad-image-label-v2_style_fluidLandscapeImage__2euAK _fluid-quad-image-label-v2_style_fluidImage__gTBjA"
                            data-a-hires="https://images-na.ssl-images-amazon.com/images/G/01/launchpad/2023/Gateway/January/DesktopQuadCat_372x232_home_B08RCCP3HV_01.23._SY232_CB619238939_.jpg"
                          />
                        </div>
                        <div
                          class="a-section a-spacing-none _fluid-quad-image-label-v2_style_imageLabel__3ANSV aok-inline-block aok-align-center"
                        >
                          <span class="a-size-small a-color-base truncate-2line"
                            >Home</span
                          >
                        </div>
                      </a>
                    </div>
                  </div>
                  <div
                    class="a-section _fluid-quad-image-label-v2_style_gridRowTwo__15woW"
                  >
                    <div
                      class="a-section a-spacing-none _fluid-quad-image-label-v2_style_quadrantContainer__3TMqG"
                    >
                      <a
                        aria-label="Kitchen"
                        class="a-link-normal _fluid-quad-image-label-v2_style_centerImage__30wh- aok-block image-window"
                        href="#"
                        @click="enlace('cocina')"
                      >
                        <div
                          class="a-section a-spacing-none _fluid-quad-image-label-v2_style_fluidImageContainer__2SOMr"
                        >
                          <img
                            alt="Kitchen"
                            src="https://images-na.ssl-images-amazon.com/images/G/01/launchpad/2023/Gateway/January/DesktopQuadCat_186x116_kitchen_B0126LMDFK_01.23._SY116_CB619238939_.jpg"
                            class="_fluid-quad-image-label-v2_style_fluidLandscapeImage__2euAK _fluid-quad-image-label-v2_style_fluidImage__gTBjA"
                            data-a-hires="https://images-na.ssl-images-amazon.com/images/G/01/launchpad/2023/Gateway/January/DesktopQuadCat_372x232_kitchen_B0126LMDFK_01.23._SY232_CB619238939_.jpg"
                          />
                        </div>
                        <div
                          class="a-section a-spacing-none _fluid-quad-image-label-v2_style_imageLabel__3ANSV aok-inline-block aok-align-center"
                        >
                          <span class="a-size-small a-color-base truncate-2line"
                            >Kitchen</span
                          >
                        </div>
                      </a>
                    </div>
                    <div
                      class="a-section a-spacing-none _fluid-quad-image-label-v2_style_quadrantContainer__3TMqG _fluid-quad-image-label-v2_style_rightQuadrant__PI01n"
                    >
                      <a
                        aria-label="Health and Beauty"
                        class="a-link-normal _fluid-quad-image-label-v2_style_centerImage__30wh- aok-block image-window"
                        href="#"
                        @click="enlace('salud y belleza')"
                      >
                        <div
                          class="a-section a-spacing-none _fluid-quad-image-label-v2_style_fluidImageContainer__2SOMr"
                        >
                          <img
                            alt="Health and Beauty"
                            src="https://images-na.ssl-images-amazon.com/images/G/01/launchpad/2023/Gateway/January/DesktopQuadCat_186x116_health-beauty_B07662GN57_01.23._SY116_CB619238939_.jpg"
                            class="_fluid-quad-image-label-v2_style_fluidLandscapeImage__2euAK _fluid-quad-image-label-v2_style_fluidImage__gTBjA"
                            data-a-hires="https://images-na.ssl-images-amazon.com/images/G/01/launchpad/2023/Gateway/January/DesktopQuadCat_372x232_health-beauty_B07662GN57_01.23._SY232_CB619238939_.jpg"
                          />
                        </div>
                        <div
                          class="a-section a-spacing-none _fluid-quad-image-label-v2_style_imageLabel__3ANSV aok-inline-block aok-align-center"
                        >
                          <span class="a-size-small a-color-base truncate-2line"
                            >Health and Beauty</span
                          >
                        </div>
                      </a>
                    </div>
                  </div>
                </div>
                <div class="a-cardui-footer">
                  <a class="normal truncate-1line" href="">Ver más</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <br />
      <div class="row">
        <div class="col-6">
          <div>
            <div id="desktop-grid-5">
              <!--CardsClient-->
              <div
                class="a-cardui _fluid-quad-image-label-v2_style_fluidQuadImageLabel__3b-Iv"
                data-a-card-type="basic"
                id="CardInstance0CKMac8VA1XTEevDckmCjw"
                data-card-metrics-id="fluid-quad-image-label-v2_desktop-gateway-atf_4"
              >
                <div class="a-cardui-header">
                  <h2 class="a-color-base headline m2 truncate-2line">
                    Ofertas de tiendas en Moda
                  </h2>
                </div>
                <div
                  class="_fluid-quad-image-label-v2_style_fluidQuadImageLabelBody__3tld0"
                >
                  <div
                    class="a-section a-spacing-small _fluid-quad-image-label-v2_style_gridRowOne__1t0zL"
                  >
                    <div
                      class="a-section a-spacing-none _fluid-quad-image-label-v2_style_quadrantContainer__3TMqG"
                    >
                      <a
                        aria-label="Jeans under"
                        class="a-link-normal _fluid-quad-image-label-v2_style_centerImage__30wh- aok-block image-window"
                        href="#"
                        @click="enlace('jeans menos de 14 S/')"
                      >
                        <div
                          class="a-section a-spacing-none _fluid-quad-image-label-v2_style_fluidImageContainer__2SOMr"
                        >
                          <img
                            alt="Jeans under"
                            src="https://images-na.ssl-images-amazon.com/images/G/01/AMAZON_FASHION/2022/SITE_FLIPS/SPR_22/GW/DQC/DQC_APR_TBYB_W_BOTTOMS_1x._SY116_CB624172947_.jpg"
                            class="_fluid-quad-image-label-v2_style_fluidLandscapeImage__2euAK _fluid-quad-image-label-v2_style_fluidImage__gTBjA"
                            data-a-hires="https://images-na.ssl-images-amazon.com/images/G/01/AMAZON_FASHION/2022/SITE_FLIPS/SPR_22/GW/DQC/DQC_APR_TBYB_W_BOTTOMS_2x._SY232_CB624172947_.jpg"
                          />
                        </div>
                        <div
                          class="a-section a-spacing-none _fluid-quad-image-label-v2_style_imageLabel__3ANSV aok-inline-block aok-align-center"
                        >
                          <span class="a-size-small a-color-base truncate-2line"
                            >Jeans under S/50</span
                          >
                        </div>
                      </a>
                    </div>
                    <div
                      class="a-section a-spacing-none _fluid-quad-image-label-v2_style_quadrantContainer__3TMqG _fluid-quad-image-label-v2_style_rightQuadrant__PI01n"
                    >
                      <a
                        aria-label="Tops under"
                        class="a-link-normal _fluid-quad-image-label-v2_style_centerImage__30wh- aok-block image-window"
                        href="#"
                        @click="enlace('jeans menos de 7 S/')"
                      >
                        <div
                          class="a-section a-spacing-none _fluid-quad-image-label-v2_style_fluidImageContainer__2SOMr"
                        >
                          <img
                            alt="Tops under"
                            src="https://images-na.ssl-images-amazon.com/images/G/01/AMAZON_FASHION/2022/SITE_FLIPS/SPR_22/GW/DQC/DQC_APR_TBYB_W_TOPS_1x._SY116_CB623353881_.jpg"
                            class="_fluid-quad-image-label-v2_style_fluidLandscapeImage__2euAK _fluid-quad-image-label-v2_style_fluidImage__gTBjA"
                            data-a-hires="https://images-na.ssl-images-amazon.com/images/G/01/AMAZON_FASHION/2022/SITE_FLIPS/SPR_22/GW/DQC/DQC_APR_TBYB_W_TOPS_2x._SY232_CB623353881_.jpg"
                          />
                        </div>
                        <div
                          class="a-section a-spacing-none _fluid-quad-image-label-v2_style_imageLabel__3ANSV aok-inline-block aok-align-center"
                        >
                          <span class="a-size-small a-color-base truncate-2line"
                            >Tops under S/25</span
                          >
                        </div>
                      </a>
                    </div>
                  </div>
                  <div
                    class="a-section _fluid-quad-image-label-v2_style_gridRowTwo__15woW"
                  >
                    <div
                      class="a-section a-spacing-none _fluid-quad-image-label-v2_style_quadrantContainer__3TMqG"
                    >
                      <a
                        aria-label="Dresses under"
                        class="a-link-normal _fluid-quad-image-label-v2_style_centerImage__30wh- aok-block image-window"
                        href="#"
                        @click="enlace('vestidos menos de 7.82 S/')"

                      >
                        <div
                          class="a-section a-spacing-none _fluid-quad-image-label-v2_style_fluidImageContainer__2SOMr"
                        >
                          <img
                            alt="Dresses under"
                            src="https://images-na.ssl-images-amazon.com/images/G/01/AMAZON_FASHION/2022/SITE_FLIPS/SPR_22/GW/DQC/DQC_APR_TBYB_W_DRESSES_1x._SY116_CB623353881_.jpg"
                            class="_fluid-quad-image-label-v2_style_fluidLandscapeImage__2euAK _fluid-quad-image-label-v2_style_fluidImage__gTBjA"
                            data-a-hires="https://images-na.ssl-images-amazon.com/images/G/01/AMAZON_FASHION/2022/SITE_FLIPS/SPR_22/GW/DQC/DQC_APR_TBYB_W_DRESSES_2x._SY232_CB623353881_.jpg"
                          />
                        </div>
                        <div
                          class="a-section a-spacing-none _fluid-quad-image-label-v2_style_imageLabel__3ANSV aok-inline-block aok-align-center"
                        >
                          <span class="a-size-small a-color-base truncate-2line"
                            >Dresses under S/30</span
                          >
                        </div>
                      </a>
                    </div>
                    <div
                      class="a-section a-spacing-none _fluid-quad-image-label-v2_style_quadrantContainer__3TMqG _fluid-quad-image-label-v2_style_rightQuadrant__PI01n"
                    >
                      <a
                        aria-label="Shoes under"
                        class="a-link-normal _fluid-quad-image-label-v2_style_centerImage__30wh- aok-block image-window"
                        href="#"
                        @click="enlace('zapatos menos de 13.04 S/')"

                      >
                        <div
                          class="a-section a-spacing-none _fluid-quad-image-label-v2_style_fluidImageContainer__2SOMr"
                        >
                          <img
                            alt="Shoes under"
                            src="https://images-na.ssl-images-amazon.com/images/G/01/AMAZON_FASHION/2022/SITE_FLIPS/SPR_22/GW/DQC/DQC_APR_TBYB_W_SHOES_1x._SY116_CB624172947_.jpg"
                            class="_fluid-quad-image-label-v2_style_fluidLandscapeImage__2euAK _fluid-quad-image-label-v2_style_fluidImage__gTBjA"
                            data-a-hires="https://images-na.ssl-images-amazon.com/images/G/01/AMAZON_FASHION/2022/SITE_FLIPS/SPR_22/GW/DQC/DQC_APR_TBYB_W_SHOES_2x._SY232_CB624172947_.jpg"
                          />
                        </div>
                        <div
                          class="a-section a-spacing-none _fluid-quad-image-label-v2_style_imageLabel__3ANSV aok-inline-block aok-align-center"
                        >
                          <span class="a-size-small a-color-base truncate-2line"
                            >Shoes under S/50</span
                          >
                        </div>
                      </a>
                    </div>
                  </div>
                </div>
                <div class="a-cardui-footer">
                  <a class="normal truncate-1line" href="">Ver ofertas</a>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-6">
          <div>
            <div id="desktop-grid-6">
              <!--CardsClient-->
              <div
                class="a-cardui _fluid-fat-image-link-v2_style_fluidFatImageLink__1nw4J"
                data-a-card-type="basic"
                id="CardInstancen5npfg6w9Hl4-sTZBdwN_g"
                data-card-metrics-id="fluid-fat-image-link-v2_desktop-gateway-atf_5"
              >
                <div class="a-cardui-header">
                  <h2 class="a-color-base headline m2 truncate-2line">Comprar regalos</h2>
                </div>
                <a
                  class="a-link-normal _fluid-fat-image-link-v2_style_mergedLinks__10JqZ"
                  href="#"
                  @click="enlace('regalos')"

                >
                  <div
                    class="_fluid-fat-image-link-v2_style_fluidFatImageLinkBody__1LsOX"
                  >
                    <div
                      class="a-section a-spacing-none _fluid-fat-image-link-v2_style_fluidImageContainer__2SOMr"
                    >
                      <img
                        alt="Comprar regalos "
                        src="https://images-na.ssl-images-amazon.com/images/G/01/AmazonExports/Events/2023/GiftGuides/Fuji_Holiday_Gift_guide_Desktop_Card_1x_379x304_EN._SY304_CB576347904_.jpg"
                        class="_fluid-fat-image-link-v2_style_fluidLandscapeImage__2euAK _fluid-fat-image-link-v2_style_fluidImage__gTBjA"
                        data-a-hires="https://images-na.ssl-images-amazon.com/images/G/01/AmazonExports/Events/2023/GiftGuides/Fuji_Holiday_Gift_guide_Desktop_Card_2x_758x608_EN._SY608_CB576347904_.jpg"
                      />
                    </div>
                  </div>
                  <div class="a-cardui-footer">
                    <span
                      class="a-truncate"
                      data-a-word-break="normal"
                      data-a-max-rows="1"
                      data-a-overflow-marker="&amp;hellip;"
                      style="line-height: 1.3em !important; max-height: 1.3em"
                      data-a-recalculate="false"
                      data-a-updated="true"
                      ><span
                        class="normal a-truncate-cut"
                        aria-hidden="true"
                        style="height: auto"
                        >Ver más</span
                      ></span
                    >
                  </div>
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
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
                <a @click="irCategoria(category.name)">
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
            <h4 class="mb-0">MÁS PRODUCTOS QUE TE PUEDEN ENCANTAR</h4>
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
                <img
                  class="card-img-top"
                  :src="product.image"
                  :alt="product.title"
                  @click="irProducto(product)"
                />
                <div class="card-body-product">
                  <div class="card-text-product">
                    <div class="product-name">{{ product.title }}</div>
                    <div class="product-price">
                      S/{{ formatear_precio_total(product.price, 2)
                      }}<span class="cat"
                        ><del>
                          {{ formatear_precio_total(product.price * 1.1, 2) }}</del
                        ></span
                      >
                    </div>
                    <div class="product-review">
                      Compras: {{ product.num_reviews }}
                      <a @click="irProducto(product)" class="normal-cart"
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
    <!-- amaz_recomanded::end -->
    <div id="top_brands" class="amaz_brand">
      <div class="container">
        <div class="row">
          <div class="col-12">
            <div class="section__title d-flex align-items-center gap-3 mb_30">
              <h3 id="top_brands_title" class="m-0 flex-fill">Mejores marcas</h3>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-12">
            <div class="amazBrand_boxes"></div>
          </div>
        </div>
      </div>
    </div>
    <!-- amaz_brand::start  -->

    <!-- amaz_brand::end  -->

    <!-- Popular Searches::start  -->

    <div id="popular_search" class="amaz_popular_search section_spacing">
      <div class="container">
        <div class="row">
          <div class="col-12">
            <div class="section__title d-flex align-items-center gap-3 mb_30">
              <h3 class="m-0 flex-fill">Búsquedas populares</h3>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-122">
            <strong class="p-00">liquidación de ropa </strong>
            <strong class="p-00">ropa para invierno hombres</strong>
            <strong class="p-00">abrigo de hombre</strong>
            <strong class="p-00">sudaderas hombre</strong>
            <strong class="p-00">sudaderas con capucha</strong><br /><br />
            <strong class="p-00">venta de liquidación</strong>
            <strong class="p-00">vestidos de mujer</strong>
            <strong class="p-00">sudaderas de hombre</strong>
          </div>
        </div>
      </div>
      <br />
    </div>
  </div>
  <!-- Popular Searches::end  -->

  <div id="about_section" class="amaz_section section_spacing4">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <div class="section__title d-flex align-items-center gap-3 mb_20">
            <h3 class="m-0 flex-fill">Pulentaa</h3>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-12">
          <div class="amaz_mazing_text">
            Somos una empresa líder en la industria que valora la honestidad, la
            integridad y la eficiencia. Construir productos de calidad y cuidar a nuestros
            usuarios es lo que nos ha destacado desde el principio. Nuestros productos son
            impresionantes, funcionales, listos para usar y están bien documentados.
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="modal">
    <a class="promotion_bar_wrapper d-flex align-items-center position-relative">
      <span class="d-flex menu-normal">Oferta del día!</span>
      <span
        class="close_promobar gj-cursor-pointer d-inline-flex align-items-center justify-content-center"
      >
        <div
          class="close-promobar gj-cursor-pointer d-inline-flex align-items-center justify-content-center"
        >
          <i id="closeIcon" class="ti-close"></i>
        </div>
      </span>
    </a>
    <img src="img/banner_oferta_dia.jpg" class="im-modal" />
    <p>Aprovecha nuestras ofertas ahora!</p>
  </div>
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
