<template>
  <button class="btn btn-warning mx-4 mt-2" type="button" v-on:click="nuevo">
    Nuevo
  </button>
  <div class="container my-2 mx-2">
    <AdminTable
      :headers="headers"
      :data="categorias"
      ref="categoriaRef"
      :accion1="custom_btnEditar"
      :accion2="custom_btnEliminar"
    >
    </AdminTable>
    <AlertComponent variant="danger" title="Categoria" :msg="msg" :visible="visible">
      <div class="container my-2">
        <div class="row g-3">
          <div class="col-md-12">
            <label for="name" class="form-label">Nombre:</label>
            <input
              type="text"
              class="form-control"
              id="name"
              name="name"
              required
              v-model="categoria.name"
            />
          </div>
        </div>
        <div class="row g-3">
          <div class="col-md-12">
            <label for="description" class="form-label">Descripcion:</label>
            <input
              type="text"
              class="form-control"
              id="description"
              name="description"
              required
              v-model="categoria.description"
            />
          </div>
        </div>
        <div class="row g-3">
          <div class="col-md-6">
            <label for="iimagen" class="form-label">Imagen</label>
            <input class="form-control" type="file" @change="imagenHange" />

            <img
              :src="categoria.id >0 ? categoria.image : image"
              class="img-fluid"
              alt="Responsive image"
            />
          </div>
        </div>
      </div>
       <ButtonSubmit :model="categoria" ruta="categorias" :visible="visible" @cancelar="cancelar" @refrescar="refrescar"></ButtonSubmit>
    </AlertComponent>
  </div>
</template>
<script src="./CategoriaAdmin.ts"></script>
