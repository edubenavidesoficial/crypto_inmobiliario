<template>
    <!-- Login 2 start -->
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
                    <div class="form-section align-self-center">
                        <div class="logo-2 logo">
                            <a href="login">
                                <img src="" alt="logo">
                            </a>
                        </div>
                        <h3>Iniciar sesión en su cuenta.</h3>
                        <div class="btn-section clearfix">
                            <a href="login" class="link-btn active btn-1 active-bg">Login</a>
                            <a href="register" class="link-btn btn-2 default-bg">Registro</a>
                        </div>
                        <div class="clearfix"></div>
                        <form >
                        <div class="row mb-3">
                             <div class="col-md-12">
                                <input id="email" type="email" class="form-control" name="email"  placeholder="Dirección de correo electrónico" v-model="user.email" autofocus required>
                            </div>
                        </div>

                        <div class="row mb-3">
                             <div class="col-md-12">
                                <input id="password" v-model="user.password" type="password" class="form-control" placeholder="Clave" name="password" required >
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-group">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember">

                                    <label class="form-check-label" for="remember">
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="form-group clearfix">
                                <button type="button" class="btn btn-lg btn-info btn-theme" @click="login">
                                    Login
                                </button>

                                <a class="btn btn-link" href="">
                                        ¿Olvidaste tu contraseña?
                                    </a>
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
                                    <img src="" alt="logo">
                                    </a>
                                </div>
                                <h3>Bienvenido a Realty Lux</h3>
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
<!-- Login 2 end -->
</template>
<script src="./Login.ts"></script>
