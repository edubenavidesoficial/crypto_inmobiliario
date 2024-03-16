<template>
  <div class="container">
    <loading v-model:active="isLoading"
                 :can-cancel="true"
                 :is-full-page="fullPage"/>
    <div class="row">
      <div class="col-md-3">
        <!-- Sidebar  -->
        <sidebar-layout></sidebar-layout>
      </div>
      <div class="col-md-9">
        <div class="container">
          <ul class="nav nav-tabs" id="myTabs">
            <li class="nav-item nav-li">
              <a
                class="nav-link active"
                id="tabFinalizado"
                data-toggle="tab"
                href="#pedidoFinalizado"
                v-on:click="verPedido('PENDIENTE')"
                ><img src="images/icons/q1.png" width="50px" />En Proceso</a
              >
            </li>
            <li class="nav-item nav-li">
              <a
                class="nav-link"
                id="tabProceso"
                data-toggle="tab"
                href="#pedidoProceso"
                v-on:click="verPedido('ENVIADO')"
                ><img src="images/icons/q2.png" width="50px" />Enviado</a
              >
            </li>
            <li class="nav-item nav-li">
              <a
                class="nav-link"
                id="tabBorrado"
                data-toggle="tab"
                href="#pedidoBorrado"
                v-on:click="verPedido('COMPLETADO')"
                ><img src="images/icons/q3.png" width="50px" />Completado</a
              >
            </li>
          </ul>

          <div class="tab-content mt-2">
            <div class="tab-pane fade show active" id="pedidoFinalizado">
              <h4>En Proceso</h4>
              <div class="container" v-if="!isLoading">
                <div class="row">
                  <div class="col-lg-12">
                    <div class="iq-card">
                      <div
                        class="iq-card-header d-flex justify-content-between iq-border-bottom mb-0"
                      >
                        <div class="iq-header-title">
                          <h4 class="card-title">Carrito de la compra</h4>
                        </div>
                      </div>
                      <div class="iq-card-body">
                        <ul class="list-inline p-0 m-0">
                          <li
                            class="checkout-product"
                            v-for="(pedido, index) in pedidos"
                            :key="index"
                          >
                            <div class="row align-items-center">
                              <div class="col-sm-2">
                                <span class="checkout-product-img">
                                  <a href=""
                                    ><img
                                      class="card-img-top image"
                                      :src="pedido.detalle_producto.main_image"
                                  /></a>
                                </span>
                              </div>
                              <div class="col-sm-4">
                                <div class="checkout-product-details">
                                  <p class="card-text m">
                                    Pedido efectuado el: {{ pedido.fecha_creacion }}
                                  </p>
                                  <p class="card-text m">
                                    Número de pedido: {{ pedido.id }}
                                  </p>
                                  <p class="card-text m">{{ pedido.name }}</p>
                                </div>
                              </div>
                              <div class="col-sm-6">
                                <div class="row">
                                  <div class="col-sm-10">
                                    <div class="row align-items-center mt-2">
                                      <div class="col-sm-7 col-md-6">
                                        <button
                                          type="button"
                                          class="fa fa-minus qty-btn"
                                          id="btn-minus"
                                        ></button>
                                        <input
                                          type="text"
                                          id="quantity"
                                          :value="pedido.quantity"
                                        />
                                        <button
                                          type="button"
                                          class="fa fa-plus qty-btn"
                                          id="btn-plus"
                                        ></button>
                                      </div>
                                      <div class="col-sm-5 col-md-6">
                                        <div class="price">
                                          <p class="card-text">
                                            Total: {{ pedido.total }}
                                          </p>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="col-sm-12">
                                    <ul>
                                      <li
                                        v-for="(detail, index) in pedido.detalle_producto
                                          .product_details"
                                        :key="index"
                                      >
                                        <p >{{ detail }}</p>
                                      </li>
                                    </ul>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </li>
                        </ul>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="tab-pane fade" id="pedidoProceso" v-if="!isLoading">
              <h4>Enviado</h4>
              <div class="container">
                <div class="row">
                  <div class="col-md-4" v-for="(pedido, index) in pedidos" :key="index">
                    <div class="card">
                      <img
                        class="card-img-top"
                        :src="pedido.detalle_producto.main_image"
                        alt="Card image cap"
                      />
                      <div class="card-body">
                        <p class="card-text">
                          Pedido efectuado el: {{ pedido.fecha_creacion }}
                        </p>
                        <p class="card-text">Número de pedido: {{ pedido.id }}</p>
                        <p class="card-text">{{ pedido.name }}</p>
                        <p class="card-text">Total: S/{{ pedido.total }}</p>
                        <p class="card-text">
                            <ul>
                                <li
                                        v-for="(detail, index) in pedido.detalle_producto
                                          .product_details"
                                        :key="index"
                                      >
                                        <p >{{ detail }}</p>
                                      </li>
                                    </ul>

                        </p>
                        </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="tab-pane fade" id="pedidoBorrado" v-if="!isLoading">
              <h4>Completado</h4>
              <div class="container">
                <div class="row">
                  <div class="col-md-4" v-for="(pedido, index) in pedidos" :key="index">
                    <div class="card">
                      <img
                        class="card-img-top"
                        :src="pedido.detalle_producto.main_image"
                        alt="Card image cap"
                      />
                      <div class="card-body">
                        <p class="card-text">
                          Pedido efectuado el: {{ pedido.fecha_creacion }}
                        </p>
                        <p class="card-text">Número de pedido: {{ pedido.id }}</p>
                        <p class="card-text">{{ pedido.name }}</p>
                        <p class="card-text">Total: S/{{ pedido.total }}</p>
                        <p class="card-text">
                            <ul>
                                      <li
                                        v-for="(detail, index) in pedido.detalle_producto
                                          .product_details"
                                        :key="index"
                                      >
                                        <p >{{ detail }}</p>
                                      </li>
                                    </ul>
                        </p>
                      </div>
                    </div>
                  </div>
                  <!-- Puedes agregar más columnas según la cantidad de tarjetas que desees mostrar -->
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>
<script src="./DetallePedido.ts"></script>
<style>
.perfil {
  border-radius: 23px;
  background-color: rgb(232 232 232);
  color: #ff8c09 !important;
  padding: 2px;
  font-size: 0.9rem;
}

.span-6 {
  border-radius: 23px;
  background-color: rgb(24, 24, 24);
  color: #ffffff !important;
  padding: 2px;
  padding-left: 12px;
  padding-right: 12px;
  font-size: 0.6rem;
}

.m {
  font-size: 0.6rem;
}

.image {
  height: 90px !important;
}
</style>
