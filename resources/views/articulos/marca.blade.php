<x-app-layout>
    <div>
        <div class="tienda_heading">
            <h2>{{ $marca->name }}</h2>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Provident sunt</p>
        </div>

        <div class="all_products">
            <!-- card ---------------->
            @foreach ($articulos as $articulo)
            <div class="producto">
                <a href="https://www.youtube.com/">
                    <div class="img_product">
                        <img src="/img/articulos/{{ $articulo->image }}">
                    </div>
                    <div class="content">
                        <p>{{ $articulo->name }}</p>
                        <div class="price">${{ $articulo->precio }}</div>
                    </div>
                </a>
            </div>
            @endforeach

            <div class="links_paginacion">
                {{ $articulos->links() }}
            </div>

        </div>
    </div>
</x-app-layout>

<style>
    .links_paginacion{
        width: 80%;
        margin: 30px 0;
    }

    .all_products {
        width: 90%;
        margin: auto;
        min-height: 100vh;
        display: flex;
        flex-wrap: wrap;
        justify-content: center;
        align-items: center;
    }

    .all_products .producto {
        width: 290px !important;
        height: 400px !important;
        border: 1px solid black;
        box-shadow: 0 .5rem 1rem rgba(0, 0, 0, .1);
        margin: 20px;
    }

    .img_product {
        width: 100%;
        height: 77%;
        overflow: hidden;
    }

    .img_product img{
        width: 100%;
        height: 100%;
        object-fit: cover;
        transition: .3s;
    }

    .all_products .producto:hover .img_product img {
        transform: scale(1.1);
    }

    .content {
        padding: 1rem;
        height: 22%;
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
    }

    .content p {
        font-size: 1rem;
        color: #222;
        line-height: 2;
    }

    .content .price {
        font-size: 1rem;
        color: #e84393;
    }

    .content .price span {
        font-size: 0.8rem;
        color: #777;
        text-decoration: line-through;
    }
</style>
