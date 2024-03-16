<template>
    <button class="btn btn-warning mx-4 mt-2" type="button" v-on:click="nuevo">
      Nuevo
    </button>
    <div class="container my-2 mx-2">
      <AdminTable
        :headers="headers"
        :data="manejoAduanas"
        ref="manejoAduanaRef"
        :accion1="custom_btnEditar"
        :accion2="custom_btnEliminar"
      >
      </AdminTable>
      <AlertComponent variant="danger" title="manejoAduana" :msg="msg" :visible="visible">
        <div class="container my-2">
          <div class="row g-3">
            <div class="col-md-12">
              <label for="precio" class="form-label">Precio Minimo:</label>
              <input
                type="text"
                class="form-control"
                id="valor_minimo"
                name="valor_minimo"
                required
                v-model="manejoAduana.valor_minimo"
              />
            </div>
          </div>
          <div class="row g-3">
            <div class="col-md-12">
              <label for="precio" class="form-label">Precio Maximo:</label>
              <input
                type="text"
                class="form-control"
                id="valor_maximo"
                name="valor_maximo"
                required
                v-model="manejoAduana.valor_maximo"
              />
            </div>
          </div>
          <div class="row g-3">
            <div class="col-md-12">
              <label for="precio" class="form-label">Precio de garantia:</label>
              <input
                type="text"
                class="form-control"
                id="precio"
                name="precio"
                required
                v-model="manejoAduana.precio"
              />
            </div>
          </div>

        </div>
         <ButtonSubmit :model="manejoAduana" ruta="manejo-aduana" :visible="visible" @cancelar="cancelar" @refrescar="refrescar"></ButtonSubmit>
      </AlertComponent>
    </div>
  </template>
  <script src="./ManejoAduanaPage.ts"></script>
