<x-app-layout>
    <div class="show_articulo">
        <div class="img_articulo_show">
            <img src="/img/articulos/{{ $articulo->image }}">
        </div>
        <div class="show_data">
            <h1>{{ $articulo->name }}</h1>
            <div class="tags">
                <a href="{{ route('articulos.categoria', $articulo->categoria) }}">{{ $articulo->categoria->name }}</a>
                <a href="{{ route('articulos.marca', $articulo->marca) }}">{{ $articulo->marca->name }}</a>
            </div>
            <p class="show_description">{{ $articulo->descripcion }}</p>
            <p class="precio">Precio: <span>${{ $articulo->precio }}</span></p>
            <a href="" class="btn_pedido">Hacer pedido</a>
        </div>
    </div>
</x-app-layout>

<style>
    .precio {
        margin: 17px 0;
    }

    .precio span {
        color: #e84393;
        font-size: 1.3rem;
        font-weight: 400;
    }

    .btn_pedido {
        padding: 4px 10px;
        border: 2px solid #2a2a2a;
        width: 180px !important;
        text-align: center;
        border-radius: 50px;
        margin: 15px 0;
        font-weight: 500;
    }

    .show_articulo {
        width: 100% !important;
        display: grid;
        grid-template-columns: 2fr 3fr;
        min-height: 70vh;
        padding: 0 30px;
        margin: 0px !important;
        height: auto;
    }

    .img_articulo_show {
        height: 100%;
        display: flex;
        justify-content: center;
        align-items: center; 
    }

    .img_articulo_show img {
        width: 400px;
        height: 450px;
        object-fit: cover;
    }

    .show_data {
        display: flex;
        flex-direction: column;
        justify-content: center;
    }

    .show_data h1 {
        text-transform: capitalize;
        font-size: 3rem;
        margin-bottom: 15px;
    }

    .tags a {
        background: #f39aff7c;
        padding: 2px 15px;
        border-radius: 50px;
        font-size: 0.9rem;
        text-decoration: none;
        color: black;
        transition: 0.2s;
        margin-right: 6px;
    }

    .tags a:hover {
        background: #262626fb;
        color: #fff !important;
    }

    .tags {
        margin-bottom: 1.3rem;
    }

    .show_description {
        color: rgb(110, 110, 110);
    }

    @media (max-width: 830px) {
        .show_articulo {
            grid-template-columns: 1fr;
        }
    }
</style>
