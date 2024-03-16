<template>
  <ul class="navbar-nav ms-auto" v-if="usuario === null">
    <!-- Authentication Links -->
      <li class="nav-item">
        <a class="nav-link" href="/login">Iniciar sesion</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/register">/ Registro</a>
      </li>
  </ul>
  <ul v-if="usuario !== null">
  <div class="collapse navbar-collapse" id="navbarNavDarkDropdown">
    <ul class="navbar-nav">
      <li class="nav-item dropdown">
        <a
          class="nav-link dropdown-toggle"
          href="#"
          id="navbarDarkDropdownMenuLink"
          role="button"
          data-bs-toggle="dropdown"
          aria-expanded="false"
        >
          {{ client != null ? `Hola, ${client.nombres} ${client.apellidos}` : '' }}
        </a>
        <ul class="dropdown-menu" aria-labelledby="navbarDarkDropdownMenuLink">
          <li><a class="dropdown-item" href="/detalle-pedido">Mis Pedidos</a></li>
          <li><a class="dropdown-item" href="#">Mis Monedas</a></li>
          <li><a class="dropdown-item" href="#">Pago</a></li>
          <li><a class="dropdown-item" href="#">Lista de deseos</a></li>
          <li><a class="dropdown-item" href="#">Mis Cupones</a></li>
          <li><hr class="dropdown-divider" /></li>
          <li><a class="dropdown-item" href="#">Cerrar Sesion</a></li>
        </ul>
      </li>
    </ul>
  </div>
</ul>
</template>
<script src="./RightSideNav.ts"></script>
