<template>
  <!-- Modal -->
  <div v-if="OpenClose" class="row">
    <div class="container my-2 mx-6">
      <button type="button" class="btn btn-primary mx-2" @click="guardar_model">
        Guardar
      </button>
      <button type="button" class="btn btn-danger" @click="cancelar">Cancelar</button>
    </div>
  </div>
</template>
<script src="./ButtonSubmit.ts"></script>
