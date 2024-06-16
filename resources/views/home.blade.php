<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>TodoComponentes</title>
    <link rel="stylesheet" href="{{ asset('Assets/scss/css/style.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
    <script src="{{ asset('Assets/js/menu-desplegable.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiffy-slider@1.6.0/dist/js/swiffy-slider.min.js" crossorigin="anonymous"
        defer></script>
    <link href="https://cdn.jsdelivr.net/npm/swiffy-slider@1.6.0/dist/css/swiffy-slider.min.css" rel="stylesheet"
        crossorigin="anonymous">
</head>

<body>
    @include('includes.header')
    <main class="mt-3">
        @if (session('success') == 'Producto añadido al carrito')
            <div class="alert-wrapper mt-3">
                <div class="alert alert-success alert-dismissible fade show session-alert small-alert" role="alert">
                    Producto añadido al carrito correctamente.
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            </div>
        @elseif(session('error') == 'Producto no encontrado.')
            <div class="alert-wrapper mt-3">
                <div class="alert alert-danger session-alert small-alert" role="danger">
                    No se pudo agregar el producto al carrito.
                    <button type="button" class="btn-close" aria-label="Close"></button>
                </div>
            </div>
        @elseif(session('success') == 'Pedido realizado correctamente.')
            <div class="alert-wrapper mt-3">
                <div class="alert alert-success alert-dismissible fade show session-alert small-alert" role="alert">
                    Pedido realizado correctamente.
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            </div>
        @endif
        <div class="container mt-5">
            <div class="swiffy-slider">
                <ul class="slider-container">
                    <li><img class="border-custom rounded-5" src="{{ asset('Assets/img/portada.webp') }}"
                            style="max-width: 100%;height: auto;"></li>
                    <li><img class="border-custom rounded-5" src="{{ asset('Assets/img/portadaApple.webp') }}"
                            style="max-width: 100%;height: auto;">
                    </li>
                    <li><img class="border-custom rounded-5" src="{{ asset('Assets/img/portadaAMD.webp') }}"
                            style="max-width: 100%;height: auto;"></li>
                </ul>

                <button type="button" class="slider-nav"></button>
                <button type="button" class="slider-nav slider-nav-next"></button>

                <div class="slider-indicators">
                    <button class="active"></button>
                    <button></button>
                    <button></button>
                </div>
            </div>
        </div>
        <div class="mt-5">
            <div class="text-center">
                <h2>DESTACADO</h2>
            </div>
            <div class="container mt-3">
                <div class="row row-cols-1 row-cols-md-3 g-4">

                    @foreach ($products as $product)
                        <div class="col">
                            <a
                                href="{{ route('producto', ['nombreCategoria' => $product->nombreCategoria, 'nombreProducto' => $product->nombre]) }}">
                                <div class="card card-custom h-100">
                                    <img src="{{ asset('Assets/img/productos/' . $product->primerImagen) }}"
                                        class="card-img-top" alt="{{ $product->nombre }}">
                                    <div class="card-body">
                                        <h5 class="card-title">{{ $product->nombre }}</h5>
                                        <p class="card-text">{{ $product->precio }}€</p>
                                        <div class="mt-2 d-flex justify-content-end">
                                            @if (Auth::check())
                                                <form class="me-1" action="{{ route('carrito.add') }}" method="POST"
                                                    class="mt-2">
                                                    @csrf
                                                    <input type="hidden" name="product_id"
                                                        value="{{ $product->id }}">
                                                    <button type="submit" class="button-custom-2">Añadir al
                                                        carrito</button>
                                                </form>

                                                <a href="{{ route('pago.show') }}" class="button-custom-3">Comprar
                                                    ya</a>
                                            @else
                                                <a href="{{ route('login') }}" class="me-1 p-1 button-custom-2">Añadir
                                                    al
                                                    carrito</a>
                                                <a href="{{ route('login') }}"
                                                    class="me-1 p-1 button-custom-3">Comprar
                                                    ya</a>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </main>

    @include('includes.footer')
</body>

</html>
