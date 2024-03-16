<template>
  <div class="container">
    <loading v-model:active="isLoading"
                 :can-cancel="true"
                 :is-full-page="fullPage"/>
    <div class="row">
      <div class="col-md-8 cifrado">
        <p>Todos los datos están cifrados</p>
      </div>
    </div>
    <div class="row">
      <div class="col-md-12">
        <h2>Resumen del pedido</h2>
      </div>
    </div>
    <div class="row">
      <div class="col-md-6">
        <h3>Artículos</h3>
        <ul class="list-group">
          <li class="checkout-product" v-for="(pedido, index) in pedidos" :key="index">
            <div class="row align-items-center">
              <div class="col-sm-3 col-md-2">
                <span class="checkout-product-img">
                  <a href=""><img class="card-img-top image" :src="pedido.detalle_producto.main_image" /></a>
                </span>
              </div>
              <div class="col-sm-9 col-md-4">
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
              <div class="col-sm-12 col-md-6">
                <div class="row align-items-center mt-2">
                  <div class="col-8 col-sm-7 col-md-6">
                    <button type="button" class="fa fa-minus qty-btn" id="btn-minus" @click="decrement_item(pedido)"></button>
                    <div id="quantity">
                   {{pedido.quantity}}
                    </div>
                    <button type="button" class="fa fa-plus qty-btn" id="btn-plus" @click="add_item(pedido)"></button>
                  </div>
                  <div class="col-4 col-sm-5 col-md-6">
                    <div class="price">
                      <p class="card-text">
                        Total: {{ pedido.total }}
                      </p>
                    </div>
                    <div class="price">
                      <p class="card-text">
                        <button type="button" class="btn btn-danger" @click="quitar(pedido.id)">-</button>
                      </p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-sm-12">
                <ul>
                  <li v-for="(detail, index) in pedido.detalle_producto.product_details" :key="index">
                    <p>{{ detail }}</p>
                  </li>
                </ul>
              </div>
            </div>
          </li>
        </ul>
      </div>

      <div class="card-total col-md-6">
        <h3 class="perfil">Total estimado</h3>
        <div class="row">
          <div class="col-md-6">
            <strong>Subtotal</strong>
          </div>
          <div class="col-md-6">
            <strong>S/{{ subtotales }}</strong>
          </div>
        </div>
        <div class="row">
          <div class="col-md-6">
            <strong>Impuestos</strong>
          </div>
          <div class="col-md-6">
            <strong>S/0.00</strong>
          </div>
        </div>
        <div class="row">
          <div class="col-md-6">
            <strong>Envío</strong>
          </div>
          <div class="col-md-6">
            <strong>S/{{ totalCostoEnvio }}</strong>
          </div>
        </div>
        <div class="row">
          <div class="col-md-6">
            <strong>Total</strong>
          </div>
          <div class="col-md-6">
            <strong>S/{{ totalAcreditar }}</strong>
          </div>
        </div>
      </div>
    </div>
    <br>
    <div class="row">
      <div class="col-md-12">
        <button class="normal-bajar" v-on:click="pagar_pedido">Hacer pedido</button>
      </div>
    </div>
  </div>
</template>
<script src="./Cart.ts"></script>
<style>
.cifrado {
  border-radius: 23px;
  background-color: rgb(232 232 232);
  color: #ff8c09 !important;
  padding: 2px;
  font-size: 0.9rem;
  width: 23%;
}

/* Estilos para los botones y el input */
.col-sm-7 {
  display: flex;
  align-items: center;
}

.qty-btn {
  background-color: #007bff;
  color: #fff;
  border: none;
  padding: 5px 10px;
  cursor: pointer;
}

#quantity {
  width: 40px;
  text-align: center;
  margin: 0 10px;
}
.card-total {
  width: 36%;
    padding: 20px;
    margin-bottom: 20px;
    background-color: #fff;
    border-radius: 23px;
    overflow: hidden;
}
</style>
