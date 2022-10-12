<x-app-layout>
    <div class="header_tienda">
        <div class="header_data">
            <h1>Solo <span>belleza</span></h1>
            <p>
                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the
                industry's standard dummy text ever since the 1500s
            </p>
            <a href="#about" class="ver_mas">ver mas</a>
        </div>
    </div>

    <!-- <main id="contenido_tienda">
        <div class="categorias_principales">

            <div class="categoria">
                <img src="{{ asset('img/mascarrillas.png') }}" alt="">
                <div>
                    <h3>Faciales</h3>
                    <h2>Mascarillas</h2>
                    <a href="">COMPRAR</a>
                </div>
            </div>

            <div class="categoria bg">
                <img src="{{ asset('img/mascarrillas.png') }}" alt="">
                <div>
                    <h3>Faciales</h3>
                    <h2>Cremas</h2>
                    <a href="">COMPRAR</a>
                </div>
            </div>

            <div class="categoria bg2">
                <img src="{{ asset('img/mascarrillas.png') }}" alt="">
                <div>
                    <h3>Faciales</h3>
                    <h2>Parches</h2>
                    <a href="">COMPRAR</a>
                </div>
            </div>
            
        </div>
    </main> -->

    <!-- seccion de categorias --------->

    <section class="category">
        <div class="box_container">
            @foreach ($categorias as $categoria)
            <a href="" class="box">
                <img src="/img/categorias/{{ $categoria->image }}">
                <h3>{{ $categoria->name }}</h3>
            </a>
            @endforeach
        </div>
    </section>

    <!-- about ----------->

    <section class="about" id="about">
        <div class="img">
            <img src="{{ asset('img/chica2_header.jpg') }}">
        </div>
        <div class="content">
            <div class="box">
                <h3>About Us... </h3>
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quod in cum at, sed facere provident alias!
                    Aperiam hic numquam, accusamus dignissimos in quidem fuga?</p>
                <a href="" class="read_more_btn">read more</a>
            </div>
        </div>
    </section>

    <!-- Productos destacados -->

    <section id="tienda" class="tienda">
        <div class="tienda_heading">
            <h2>Productos <span>Destacados</span></h2>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Provident sunt</p>
        </div>

        <div class="swiper products_slider">
            <div class="swiper-wrapper">

                <!-- card ---------------->
                <a href="https://www.youtube.com/" class="swiper-slide slide">
                    <span class="descuento">20%</span>
                    <div class="img">
                        <img src="{{ asset('img/images/product-1.jpg') }}">
                    </div>
                    <div class="content">
                        <p>beauty fasdljk fa</p>
                        <div class="price">$49.99 <span>$79.99</span></div>
                    </div>
                </a>

                <!-- card ---------------->
                <div class="swiper-slide slide">
                    <span class="descuento">20%</span>
                    <div class="img">
                        <img src="{{ asset('img/images/product-2.jpg') }}">
                    </div>
                    <div class="content">
                        <p>beauty products</p>
                        <div class="price">$49.99 <span>$79.99</span></div>
                        <a href="">ver</a>
                    </div>
                </div>

                <!-- card ---------------->
                <div class="swiper-slide slide">
                    <span class="descuento">20%</span>
                    <div class="img">
                        <img src="{{ asset('img/images/product-3.jpg') }}">
                    </div>
                    <div class="content">
                        <p>beauty products</p>
                        <div class="price">$49.99 <span>$79.99</span></div>
                        <a href="">ver</a>
                    </div>
                </div>

                <!-- card ---------------->
                <div class="swiper-slide slide">
                    <span class="descuento">20%</span>
                    <div class="img">
                        <img src="{{ asset('img/images/product-4.jpg') }}">
                    </div>
                    <div class="content">
                        <p>beauty products</p>
                        <div class="price">$49.99 <span>$79.99</span></div>
                        <a href="">ver</a>
                    </div>
                </div>

                <!-- card ---------------->
                <div class="swiper-slide slide">
                    <span class="descuento">20%</span>
                    <div class="img">
                        <img src="{{ asset('img/images/product-5.jpg') }}">
                    </div>
                    <div class="content">
                        <p>beauty products</p>
                        <div class="price">$49.99 <span>$79.99</span></div>
                        <a href="">ver</a>
                    </div>
                </div>

                <!-- card ---------------->
                <div class="swiper-slide slide">
                    <span class="descuento">20%</span>
                    <div class="img">
                        <img src="{{ asset('img/images/product-6.jpg') }}">
                    </div>
                    <div class="content">
                        <p>beauty products</p>
                        <div class="price">$49.99 <span>$79.99</span></div>
                        <a href="">ver</a>
                    </div>
                </div>

                <!-- card ---------------->
                <div class="swiper-slide slide">
                    <span class="descuento">20%</span>
                    <div class="img">
                        <img src="{{ asset('img/images/product-7.jpg') }}">
                    </div>
                    <div class="content">
                        <p>beauty products</p>
                        <div class="price">$49.99 <span>$79.99</span></div>
                        <a href="">ver</a>
                    </div>
                </div>

                <!-- card ---------------->
                <div class="swiper-slide slide">
                    <span class="descuento">20%</span>
                    <div class="img">
                        <img src="{{ asset('img/images/product-8.jpg') }}">
                    </div>
                    <div class="content">
                        <p>beauty products</p>
                        <div class="price">$49.99 <span>$79.99</span></div>
                        <a href="">ver</a>
                    </div>
                </div>

            </div>

            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
        </div>
    </section>

    <!-- galleria -------->

    <section class="gallery" id="gallery">
        <div class="tienda_heading galleria_h">
            <h2>Nuestra <span>Galeria</span></h2>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Provident sunt</p>
        </div>

        <div class="lightbox">
            @foreach ($fotos as $foto)
            <a href="/img/gallery/{{ $foto->image }}">
                <img src="/img/gallery/{{ $foto->image }}">
            </a>
            @endforeach
        </div>
    </section>


</x-app-layout>


<style>
    .tienda_heading p {
        width: 100%;
        text-align: center;
    }

    .galleria_h {
        margin: 20px 0;
        margin-bottom: 40px !important;
    }

    .gallery {
        background: rgb(245, 245, 245);
        width: 90%;
        margin: auto;
        margin-top: 40px !important;
        margin-bottom: 40px !important;
    }

    .gallery .lightbox {
        display: grid;
        grid-template-columns: 1fr 1fr 1fr;
        grid-gap: 15px;
    }

    @media(max-width: 1100px) {
        .gallery .lightbox {
            grid-template-columns: 1fr 1fr;
        }
    }

    @media(max-width: 650px) {
        .gallery .lightbox {
            grid-template-columns: 1fr;
        }
    }

    .gallery .lightbox a {
        height: 280px;
        /* width: 410px; */
        overflow: hidden;
        border: 10px solid #fff;
        box-shadow: 0 .5rem 1rem rgba(0, 0, 0, .1);
    }

    .gallery .lightbox a img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        transition: 0.3s;
    }

    .gallery .lightbox a:hover img {
        transform: scale(1.1)
    }
</style>
