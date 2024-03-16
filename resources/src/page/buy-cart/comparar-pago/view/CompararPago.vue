<template>
  <button class="btn btn-warning mx-4 mt-2" type="button" v-on:click="aprobar">
    Aprobar
  </button>
  <div class="container my-2 mx-2">
    <AdminTableSelected
      :headers="headers"
      :data="pagos"
      :itemsSelected="itemsSelected"
      :accion1="custom_btnVer"
      ref="compararPagoRef"
    >
    </AdminTableSelected>
  </div>

  <AlertComponent variant="danger" :msg="msg" :visible="visible">
    <ul class="list-group">
      <li class="checkout-product" v-for="(pedido, index) in orderitems" :key="index">
        <div class="row align-items-center">
          <h5>{{ pedido.name }}</h5>
          <div class="col-sm-3 col-md-2">
            <span class="checkout-product-img">
              <a href=""
                ><img
                  class="card-img-top image"
                  :src="pedido.detalle_producto.main_image"
              /></a>
            </span>
          </div>
          <div class="col-sm-9 col-md-4">
            <div class="checkout-product-details">
              <p class="card-text m">Pedido efectuado el: {{ pedido.fecha_creacion }}</p>
              <p class="card-text m">Número de pedido: {{ pedido.id }}</p>
              <p class="card-text m">{{ pedido.description }}</p>
            </div>
          </div>
          <div class="col-sm-12 col-md-6">
            <div class="row align-items-center mt-2">
              <div class="col-8 col-sm-7 col-md-6">
                {{ pedido.quantity }}
              </div>
              <div class="col-4 col-sm-5 col-md-6">
                <div class="price">
                  <p class="card-text">Total: {{ pedido.total }}</p>
                </div>
              </div>
            </div>
          </div>
          <div class="col-sm-12">
            <ul>
              <li
                v-for="(detail, index) in pedido.detalle_producto.product_details"
                :key="index"
              >
                <p>{{ detail }}</p>
              </li>
            </ul>
          </div>
        </div>
      </li>
    </ul>
  </AlertComponent>
</template>
<script src="./CompararPago.ts"></script>
<style>
table.dataTable tbody tr.selected td {
  background-color: lightblue;
}
</style>
