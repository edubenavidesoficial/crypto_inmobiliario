<template>
<EasyDataTable
      :headers="headers"
      :items="data"
      show-index
    >
      <template #item-operation="item" v-if="accion1 !== undefined" >
        <div class="operation-wrapper">
            <button class="btn btn-primary" @click="handleAcccion1(item)">
              <i :class="accion1.icon"></i> {{ accion1.nombre }}
            </button>
            <button
              v-if="accion2 !== undefined"
              class="btn btn-primary"
              @click="handleAcccion2(item)"
            >
              <i :class="accion2.icon"></i> {{ accion2.nombre }}
            </button>
            <button
              v-if="accion3 !== undefined"
              class="btn btn-primary"
              @click="handleAcccion3(item)"
            >
              <i :class="accion3.icon"></i> {{ accion3.nombre }}
            </button>
            <button
              v-if="accion4 !== undefined"
              class="btn btn-primary"
              @click="handleAcccion4(item)"
            >
              <i :class="accion4.icon"></i> {{ accion4.nombre }}
            </button>
        </div>
      </template>
    </EasyDataTable>
</template>
<script src="./AdminTable.ts"></script>
