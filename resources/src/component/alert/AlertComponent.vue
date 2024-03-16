<template>
<div >
<!-- Modal -->
<div v-if="OpenClose" class="modal fade show"
 tabindex="-1" aria-labelledby="exampleModalLabel" aria-modal="true" role="dialog"
 style="display:block">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
{{ title }}
        <button type="button" @click="OpenCloseFun()" class="btn-close" ></button>
      </div>
      <div class="modal-body">
       <slot></slot>
      </div>
      <div class="modal-footer">
        <button type="button"  @click="OpenCloseFun()" :class="'btn btn-'+variant" >Cerrar</button>
      </div>
    </div>
  </div>
</div>
</div>
</template>
<script src="./AlertComponent.ts"></script>
