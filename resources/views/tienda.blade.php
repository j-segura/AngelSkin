<x-app-layout>
    <div class="header_tienda">
        <div class="header_data">
            <h1>Solo <span>belleza</span></h1>
            <p>
                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s
            </p>
            <a href="#contenido_tienda" class="ver_mas">ver mas</a>
        </div>
    </div>
    <main id="contenido_tienda">
        <div class="categorias_principales">

            <div class="categoria">
                <img src="{{asset('img/mascarrillas.png')}}" alt="">
                <div>
                    <h3>Faciales</h3>
                    <h2>Mascarillas</h2>
                    <a href="">COMPRAR</a>
                </div>
            </div>

            <div class="categoria bg">
                <img src="{{asset('img/mascarrillas.png')}}" alt="">
                <div>
                    <h3>Faciales</h3>
                    <h2>Cremas</h2>
                    <a href="">COMPRAR</a>
                </div>
            </div>

            <div class="categoria bg2">
                <img src="{{asset('img/mascarrillas.png')}}" alt="">
                <div>
                    <h3>Faciales</h3>
                    <h2>Parches</h2>
                    <a href="">COMPRAR</a>
                </div>
            </div>
            
        </div>
    </main>
</x-app-layout>
