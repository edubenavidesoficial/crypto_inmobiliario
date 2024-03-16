<template>
    <button class="btn btn-warning mx-4 mt-2" type="button" v-on:click="nuevo">
      Nuevo
    </button>
    <div class="container my-2 mx-2">
      <AdminTable
        :headers="headers"
        :data="precioPesos"
        ref="precioPesosRef"
        :accion1="custom_btnEditar"
        :accion2="custom_btnEliminar"
      >
      </AdminTable>
      <AlertComponent variant="danger" title="precioPesos" :msg="msg" :visible="visible">
        <div class="container my-2">
          <div class="row g-3">
            <div class="col-md-12">
              <label for="precio" class="form-label">Precio:</label>
              <input
                type="text"
                class="form-control"
                id="precio"
                name="precio"
                required
                v-model="precioPesos.precio"
              />
            </div>
          </div>
          <div class="row g-3">
            <div class="col-md-12">
              <label for="peso" class="form-label">Peso:</label>
              <input
                type="text"
                class="form-control"
                id="peso"
                name="peso"
                required
                v-model="precioPesos.peso"
              />
            </div>
          </div>
        </div>
         <ButtonSubmit :model="precioPesos" ruta="precio-peso" :visible="visible" @cancelar="cancelar" @refrescar="refrescar"></ButtonSubmit>
      </AlertComponent>
    </div>
  </template>
  <script src="./PesoPrecioPage.ts"></script>
