<template>
  <ul class="navbar-nav ms-auto" v-if="usuario === null">
    <!-- Authentication Links -->
    <li class="nav-item">
      <!-- <a class="nav-link" href="/login">Iniciar sesion</a>-->
      <div>
    <p class="nav-link" v-if="!metaMaskInstalled">MetaMask no está instalado</p>
    <button class="nav-link" v-else @click="connectToMetaMask">Conectar MetaMask</button>
  </div>
    </li>
    
    <li class="nav-item">
      <a class="nav-link" href="/register">/ Registro</a>
    </li>
  </ul>
  <ul v-if="usuario !== null">
    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
      <li class="nav-item dropdown">
        <a
          class="nav-link"
          id="navbarDropdownMenuLink"
          data-toggle="dropdown"
          aria-haspopup="true"
          aria-expanded="false"
        >
          {{ client != null ? `Hola, ${client.nombres} ${client.apellidos}` : "" }}
        </a>
        <ul class="dropdown-menu" aria-labelledby="navbarDarkDropdownMenuLink">
          <li><a class="dropdown-item" href="/detalle-pedido">Mis Pedidos</a></li>
          <li><a class="dropdown-item" href="#">Pago</a></li>
          <li><a class="dropdown-item" href="#">Lista de deseos</a></li>
          <li><a class="dropdown-item" href="#">Mis Cupones</a></li>
          <li><hr class="dropdown-divider" /></li>
          <li><a class="dropdown-item" @click="logout">Cerrar Sesion</a></li>
        </ul>
      </li>
    </ul>
  </ul>
</template>
<script src="./RightSideNavHome.ts"></script>