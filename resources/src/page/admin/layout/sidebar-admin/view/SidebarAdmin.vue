<template>
  <div class="iq-sidebar"></div>
  <nav class="navbar navbar-expand-lg navbar-light">
    <div class="container">
      <button
        class="navbar-toggler"
        type="button"
        data-toggle="collapse"
        data-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent"
        aria-expanded="false"
        aria-label="Toggle navigation"
      >
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav flex-column">
          <br />
          <card class="perfil">
            <img src="images/icons/user.png" width="25px" />
          </card>
          <li class="nav-item nav-li" v-for="(item_menu, index) in menu" :key="index">
            <a class="nav-link" :href="item_menu.link">
              <i :class="item_menu.icon"></i>
              <span>{{ item_menu.title }}</span>
            </a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
</template>
<script src="./SidebarAdmin.ts"></script>
<style>
.custom-navbar {
  display: flex;
  flex-direction: column;
}
.iq-sidebar {
  position: fixed;
  top: 10px;
  width: 300px;
  height: 100%;
  background: var(--iq-light-card);
  transition: all 0.3s ease-in-out;
  transition: all 0.3s ease-in-out;
  -moz-transition: all 0.3s ease-in-out;
  -ms-transition: all 0.3s ease-in-out;
  -o-transition: all 0.3s ease-in-out;
  -webkit-transition: all 0.3s ease-in-out;
  -webkit-box-shadow: 0px 0px 20px 0px rgba(44, 101, 144, 0.1);
  -moz-box-shadow: 0px 0px 20px 0px rgba(44, 101, 144, 0.1);
  box-shadow: 0px 0px 20px 0px rgba(44, 101, 144, 0.1);
}

.iq-sidebar .iq-sidebar-logo {
  float: none;
  width: 100%;
}

/* (dispositivos móviles) */
@media only screen and (max-width: 767px) {
  .iq-sidebar {
    width: 100%;
  }
}

.nav-li {
  padding: 6px;
  border-bottom: 2px solid rgba(0, 0, 0, 0.1);
}
.nav-link i {
  margin-right: 10px; /* Adjust the value as needed */
}
.nav-link span {
  margin-left: 10px; /* Adjust the value as needed */
}
</style>
