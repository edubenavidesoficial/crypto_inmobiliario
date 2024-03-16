<!-- BotonAccion.vue -->
<template>
    <button @click="handleClick" class="btn-accion">{{ label }}</button>
  </template>

  <script>
  export default {
    props: {
      label: String,
      onClick: Function,
    },
    methods: {
      handleClick() {
        if (this.onClick) {
          this.onClick();
        }
      },
    },
  };
  </script>

  <style scoped>
  /* Estilos opcionales para tu botón */
  .btn-accion {
    margin: 5px;
    padding: 8px 12px;
    cursor: pointer;
    background-color: #007bff;
    color: #fff;
    border: none;
    border-radius: 4px;
  }
  </style>
