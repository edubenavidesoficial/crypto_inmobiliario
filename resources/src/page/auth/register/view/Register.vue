<template>
  <div class="login-2 login-background">
    <div class="login-background-inner">
      <div class="cube"></div>
      <div class="cube"></div>
      <div class="cube"></div>
      <div class="cube"></div>
      <div class="cube"></div>
    </div>
    <div class="login-2-inner">
      <div class="container">
        <div class="row login-box">
          <div class="col-lg-6 align-self-center pad-0 form-info">
            <div class="form-section clearfix">
              <div class="logo-2 logo">
                <a href="login">
                  <img src="assets/img/logos/logo-2.png" alt="logo" />
                </a>
              </div>
              <h3>Crea una cuenta.</h3>
              <div class="btn-section clearfix">
                <a href="login" class="link-btn active btn-1 default-bg">Login</a>
                <a href="register" class="link-btn btn-2 active-bg">Registro</a>
              </div>
              <div class="clearfix"></div>
              <form >

                <div class="row mb-3">
                  <div class="col-md-6">
                    <input
                      id="name"
                      type="text"
                      placeholder="Nombre"
                      class="form-control"
                      name="name"
                      required
                      autocomplete="name"
                      autofocus
                      v-model="user.name"
                    />


                  </div>
                </div>

                <div class="row mb-3">
                  <div class="col-md-12">
                    <input
                      id="email"
                      type="email"
                      placeholder="Email"
                      class="form-control"
                      name="email"
                      required
                      autocomplete="email"
                      v-model="user.email"
                    />


                  </div>
                </div>

                <div class="row mb-3">
                  <div class="col-md-12">
                    <input
                      id="password"
                      type="password"
                      placeholder="Contraseña"
                      class="form-control"
                      name="password"
                      required
                      v-model="user.password"
                      autocomplete="new-password"
                    />


                  </div>
                </div>

                <div class="row mb-3">
                  <div class="col-md-12">
                    <input
                      id="password-confirm"
                      type="password"
                      placeholder="Repite la Contraseña"
                      class="form-control"
                      name="password_confirmation"
                      required
                      autocomplete="new-password"
                      v-model="user.password_confirmation"
                    />
                  </div>
                </div>

                <div class="row mb-0">
                  <div class="col-md-12">
                    <button type="button"  class="btn btn-lg btn-info btn-theme"  @click="registro">
                     Registro
                    </button>
                  </div>
                </div>
              </form>
            </div>
          </div>
          <div class="col-lg-6 align-self-center pad-0 bg-img">
            <div class="info clearfix">
              <div class="box">
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                <div class="content">
                  <div class="logo-2">
                    <a href="login">
                      <img src="uploads/settings/65284ca307ab2.png" alt="logo" />
                    </a>
                  </div>
                  <h3>Pulentaa</h3>
                  <div class="social-list">
                    <a href="#" class="facebook-bg">
                      <i class="fa fa-facebook"></i>
                    </a>
                    <a href="#" class="twitter-bg">
                      <i class="fa fa-twitter"></i>
                    </a>
                    <a href="#" class="google-bg">
                      <i class="fa fa-google"></i>
                    </a>
                    <a href="#" class="linkedin-bg">
                      <i class="fa fa-linkedin"></i>
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>
<script src="./Register.ts" />
