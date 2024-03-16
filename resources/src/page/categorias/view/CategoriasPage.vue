<template>
  <div id="best_deals" class="amaz_section section_spacing">
    <loading v-model:active="isLoading" :can-cancel="true" :is-full-page="fullPage" />
    <div class="amaz_recomanded_area">
      <div class="container">
        <div id="more_categorias" class="amaz_recomanded_box mb_60">
          <div class="row row-categoria">
            <div
              class="col"
              v-for="(categoria, index) in categorias"
              :key="index"
              style="padding: 8px"
            >
              <div
                class="categoria-img"
                style="width: 11rem"
                @click="irCategoria(categoria)"
              >
                <img class="card-img-top" :src="categoria.image" :alt="categoria.name" />
                <div class="card-body-categoria">
                  <div class="card-text-categoria">
                    <div class="categoria-name">{{ categoria.name }}</div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-12 text-center">
          <input type="hidden" id="login_check" value=" 0 " />
        </div>
      </div>
    </div>
  </div>
</template>
<script src="./CategoriasPage"></script>
