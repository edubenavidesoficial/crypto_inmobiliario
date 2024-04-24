<template>
    <div class="main-container col2-right-layout">
        <loading
            v-model:active="isLoading"
            :can-cancel="true"
            :is-full-page="fullPage"
        />

        <div class="container">
            <div class="row align-items-start">
                <div class="col">
                    <br />
                    <div>
                        <div class="product-image-container">
                            <div class="product-image">
                                <ul
                                    id="product-images-slider"
                                    v-if="product != null"
                                >
                                    <li
                                        v-for="(image, index) in product.images"
                                        :key="index"
                                    >
                                        <a
                                            href=""
                                            class="cloud-zoom-gallery"
                                            title=""
                                        >
                                            <img
                                                class="img-peque"
                                                :src="image"
                                                alt=""
                                            />
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <div class="product-image">
                                <div id="wrap">
                                    <a
                                        class="cloud-zoom"
                                        id="zoom1"
                                        href=""
                                        style="
                                            position: relative;
                                            display: block;
                                        "
                                    >
                                        <img
                                            id="main-image"
                                            class="img-grande"
                                            :src="
                                                product !== null
                                                    ? product.imagen
                                                    : ''
                                            "
                                            style="display: block"
                                        />
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="product-data-container">
                        <div class="information-container">
                            <h1
                                id="product-brand"
                                class="cat"
                                style="
                                    font-size: 14px;
                                    font-weight: bold;
                                    margin-bottom: 0px;
                                "
                            >
                                Producto
                            </h1>
                            <div class="card">
                                <p id="product-name" class="titulo">
                                    {{ product !== null ? product.nombre : "" }}
                                </p>
                                <!-- Otros detalles del producto aquí -->
                            </div>
                            <p class="price-line-list_price">
                                Precio:
                                <span class="currency_price">
                                    ${{
                                        product !== null ? product.precio : 0.0
                                    }}</span
                                >
                                Antes:
                                <span class="dollar_price"
                                    ><del>
                                        {{
                                            product !== null ?
                                            (product.precio * 1.1 ).toFixed(2)
                                                : 0.0
                                        }}</del
                                    ></span
                                >
                            </p>
                            <div style="padding: 0 10px 10px 0"></div>

                            <div class="product-information">
                                <div class="container" v-if="product !== null">
                                    <h1>Detalle Precio</h1>
                                </div>
                                <p class="detail-vendor_name">
                                    Cantidad:
                                    <select
                                        v-model="orden.product.quantity"
                                        @change="onSelectedValueChange"
                                    >
                                        <option>1</option>
                                        <option>2</option>
                                        <option>3</option>
                                    </select>
                                </p>
                                <button
                                    type="button"
                                    class="poduct-normal"
                                    style="width: 330px"
                                    title="Agregar al carrito"
                                    v-on:click="realizar_pedido"
                                >
                                    Agregar al carrito
                                </button>
                                <br />
                                <br />
                                <br />
                                <div
                                    class="limited-list list-detail detail-short_desc"
                                >
                                    <h3>Detalles del producto</h3>
                                    <div class="see-more-blur blur-short_desc">
                                        {{
                                            product !== null
                                                ? product.descripcion
                                                : ""
                                        }}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="span12">
                    <div class="main">
                        <div class="row">
                            <section>
                                <div id="faq-title" class="">
                                    <h2>Más información para tu compra</h2>
                                </div>
                                <div id="accordion">
                                    <!-- Pregunta 1 -->
                                    <div class="card-det">
                                        <div
                                            class="card-header"
                                            id="headingOne"
                                        >
                                            <h2 class="mb-0">
                                                <button
                                                    class="btn btn-link"
                                                    data-toggle="collapse"
                                                    data-target="#collapseOne"
                                                    aria-expanded="true"
                                                    aria-controls="collapseOne"
                                                >
                                                    ¿(Producto)... tiene
                                                    devolución?
                                                </button>
                                            </h2>
                                        </div>

                                        <div
                                            id="collapseOne"
                                            class="collapse show"
                                            aria-labelledby="headingOne"
                                            data-parent="#accordion"
                                        >
                                            <div class="card-body">
                                                Si, usted puede devolver el
                                                producto a nuestras oficinas de
                                                Miami (USA). Para ello se debe
                                                solicitar la devolución en su
                                                cuenta de Tiendamia dentro de
                                                los primeros 7 días de haber
                                                recibido el paquete. Los costos
                                                de devolución corren por cuenta
                                                del cliente. Más información en
                                                <a target="_blank" href="#"
                                                    >Políticas de devolución</a
                                                >
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Pregunta 2 -->
                                    <div class="card-det">
                                        <div
                                            class="card-header"
                                            id="headingTwo"
                                        >
                                            <h2 class="mb-0">
                                                <button
                                                    class="btn btn-link collapsed"
                                                    data-toggle="collapse"
                                                    data-target="#collapseTwo"
                                                    aria-expanded="false"
                                                    aria-controls="collapseTwo"
                                                >
                                                    ¿A qué tienda pertenece este
                                                    producto?
                                                </button>
                                            </h2>
                                        </div>
                                        <div
                                            id="collapseTwo"
                                            class="collapse"
                                            aria-labelledby="headingTwo"
                                            data-parent="#accordion"
                                        >
                                            <div class="card-body">
                                                (Producto) pertenece al catálogo
                                                de Vendedor verificado
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Pregunta 3 -->
                                    <div class="card-det">
                                        <div
                                            class="card-header"
                                            id="headingThree"
                                        >
                                            <h2 class="mb-0">
                                                <button
                                                    class="btn btn-link collapsed"
                                                    data-toggle="collapse"
                                                    data-target="#collapseThree"
                                                    aria-expanded="false"
                                                    aria-controls="collapseThree"
                                                >
                                                    ¿Cuánto demora el envío de
                                                    SSD portátil SanDisk
                                                    Extre...?
                                                </button>
                                            </h2>
                                        </div>
                                        <div
                                            id="collapseThree"
                                            class="collapse"
                                            aria-labelledby="headingThree"
                                            data-parent="#accordion"
                                        >
                                            <div class="card-body">
                                                Los tiempos de envío pueden
                                                variar según el producto. Recibí
                                                (Producto) en tu casa en un
                                                tiempo de entre 2 y 6 días.
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Pregunta 4 -->
                                    <div class="card-det">
                                        <div
                                            class="card-header"
                                            id="headingFour"
                                        >
                                            <h2 class="mb-0">
                                                <button
                                                    class="btn btn-link collapsed"
                                                    data-toggle="collapse"
                                                    data-target="#collapseFour"
                                                    aria-expanded="false"
                                                    aria-controls="collapseFour"
                                                >
                                                    ¿Este producto tiene
                                                    garantía de entrega?
                                                </button>
                                            </h2>
                                        </div>
                                        <div
                                            id="collapseFour"
                                            class="collapse"
                                            aria-labelledby="headingFour"
                                            data-parent="#accordion"
                                        >
                                            <div class="card-body">
                                                Sí. Todas las órdenes tienen
                                                garantía de entrega. Esto quiere
                                                decir que están aseguradas para
                                                llegar a destino. Tendrás
                                                trazabilidad durante todo el
                                                envío y posibilidad de
                                                contactarnos.
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </section>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>
<script src="./Detalle.ts"></script>
<style scoped>
select {
    width: 100%;
    padding: 8px;
    margin-top: 5px;
    border: 1px solid #ccc;
    border-radius: 23px;
    box-sizing: border-box;
}

.titulo {
    font-size: 16px !important;
}

.span-1 {
    background-color: #0a0a0a;
    padding: 5px;
    border-radius: 23px;
    font-size: 12px;
    color: #eda85d;
    width: fit-content;
}

.span-2 {
    background-color: #60da7a;
    padding: 5px;
    border-radius: 23px;
    font-size: 12px;
    color: #0c0c0c;
    width: fit-content;
}

.span-3 {
    background-color: #eda85d;
    padding: 5px;
    border-radius: 23px;
    font-size: 12px;
    color: #0a0a0a;
    width: fit-content;
}

.span-4 {
    background-color: #ffffff;
    border: #0a0a0a;
    padding: 5px;
    border-radius: 23px;
    font-size: 16px;
    color: #000000;
    width: 30px;
}

.card-det {
    min-width: 0;
    word-wrap: break-word;
    background-color: #4b4a4a00;
    border-radius: 23px !important;
}

.card-header:first-child {
    border-radius: 23px;
    box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1);
}

.card {
    min-width: 0;
    word-wrap: break-word;
    background-color: #fff;
    border: 1px solid rgba(188, 188, 188, 0.125) !important;
    border-radius: 10px !important;
}

.product-image-container {
    display: flex !important;
}

.product-images-slider {
    border: 1px solid #d57a18 !important;
}

.img-peque {
    width: 60px;
    height: 80px;
}

.img-grande {
    width: 100%;
}

.cloud-zoom,
.cloud-zoom-gallery {
    display: block;
    border: 2px solid #ff8c09;
    border-radius: 5px;
}

.currency_price {
    font-weight: bold;
    font-size: 32px;
}

/* (dispositivos móviles) */
@media only screen and (max-width: 767px) {
    .col {
        flex: auto;
    }
}
</style>
