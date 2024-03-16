<template>
  <div class="container">
    <div class="row">
      <div class="col-md-3">
        <!-- Sidebar  -->
        <sidebar-layout></sidebar-layout>
      </div>
      <div class="col-md-9">
        <div class="container">
          <h1 class="text-center mb-4">Perfil</h1>
          <form>
            <div class="row g-3">
              <div class="col-md-6">
                <label for="nombres" class="form-label">Nombres:</label>
                <input
                  type="text"
                  class="form-control"
                  id="nombres"
                  name="nombres"
                  required
                  v-model="client.nombres"
                />
              </div>
              <div class="col-md-6">
                <label for="apellidos" class="form-label">Apellidos:</label>
                <input
                  type="text"
                  class="form-control"
                  id="apellidos"
                  name="apellidos"
                  required
                  v-model="client.apellidos"
                />
              </div>
            </div>

            <div class="row g-3">
              <div class="col-md-12">
                <label for="address_line1" class="form-label">Dirección 1:</label>
                <input
                  type="text"
                  class="form-control"
                  id="address_line1"
                  name="address_line1"
                  required
                  v-model="client.address_line1"
                />
              </div>
            </div>

            <div class="row g-3">
              <div class="col-md-12">
                <label for="address_line2" class="form-label">Dirección 2:</label>
                <input
                  type="text"
                  class="form-control"
                  id="address_line2"
                  name="address_line2"
                  v-model="client.address_line2"
                />
              </div>
            </div>

            <div class="row g-3">
              <div class="col-md-4">
                <label for="zip_code" class="form-label">Código Postal:</label>
                <input
                  type="text"
                  class="form-control"
                  id="zip_code"
                  name="zip_code"
                  required
                  v-model="client.zip_code"
                />
              </div>
              <div class="col-md-4">
                <label for="city" class="form-label">Ciudad:</label>
                <input
                  type="text"
                  class="form-control"
                  id="city"
                  name="city"
                  required
                  v-model="client.city"
                />
              </div>
              <div class="col-md-4">
                <label for="state" class="form-label">Estado:</label>
                <input
                  type="text"
                  class="form-control"
                  id="state"
                  name="state"
                  required
                  v-model="client.state"
                />
              </div>
            </div>
            <div class="row g-3">
              <div class="col-md-6">
                <label for="country" class="form-label">País:</label>
                <input
                  type="text"
                  class="form-control"
                  id="country"
                  name="country"
                  v-model="client.country"
                  required
                />
              </div>
              <div class="col-md-6">
                <label for="phone_number" class="form-label">Teléfono:</label>
                <input
                  type="text"
                  class="form-control"
                  id="phone_number"
                  name="phone_number"
                  v-model="client.phone_number"
                  required
                />
              </div>
            </div>
            <div class="row g-3">
              <div class="col-md-6">
                <label for="identificacion_frontal" class="form-label"
                  >Identificacion frontal</label
                >
                <input
                  class="form-control"
                  type="file"
                  @change="identificacionFrontalhange"
                />
                <img :src="client !== null? client.identificacion_frontal:identificacion_frontal " class="img-fluid" alt="Responsive image">

              </div>
              <div class="col-md-6">
                <label for="identificacion_posterior" class="form-label"
                  >Identificacion Posterior</label
                >
                <input
                  class="form-control"
                  type="file"
                  @change="identificacionPosteriorhange"
                />
                <img :src="client !== null?client.identificacion_posterior:identificacion_posterior " class="img-fluid" alt="Responsive image">


              </div>
            </div>
            <div class="mb-3">
              <label for="instructions" class="form-label">Instrucciones:</label>
              <textarea
                class="form-control"
                id="instructions"
                name="instructions"
                v-model="client.instructions"
                rows="3"
              ></textarea>
            </div>

            <button
              type="button"
              class="btn normal-bajar"
              v-if="accion === 'NUEVO'"
              @click="guardarContacto"
            >
              CREAR DATOS EN PERFIL
            </button>
            <button
              type="button"
              class="btn normal-bajar"
              v-if="accion === 'EDITAR'"
              @click="editarContacto"
            >
              GUARDAR
            </button>
          </form>
        </div>
      </div>
    </div>
  </div>
</template>
<script src="./Perfil.ts"></script>
<style>
.custom-navbar {
  display: flex;
  flex-direction: column;
}

.perfil {
  border-radius: 23px;
  background-color: rgb(232 232 232);
  color: #ff8c09 !important;
  padding: 2px;
  font-size: 0.9rem;
}

.span-6 {
  border-radius: 23px;
  background-color: rgb(24, 24, 24);
  color: #ffffff !important;
  padding: 2px;
  padding-left: 12px;
  padding-right: 12px;
  font-size: 0.6rem;
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
</style>
