<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $nombreProducto }} | TodoComponentes</title>
    <link rel="stylesheet" href="{{ asset('Assets/scss/css/style.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="{{ asset('Assets/js/menu-desplegable.js') }}"></script>
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
        @endif
        <div class="mt-3 ms-3 ms-md-5 me-3 me-md-5">
            <div>
                <a class="AHover" href="/">Home</a> 
                <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#777676">
                    <path d="M504-480 320-664l56-56 240 240-240 240-56-56 184-184Z" />
                </svg> 
                <a class="AHover" href="{{ route('categoria', ['nombreCategoria' => $nombreCategoria])}}">{{ $nombreCategoria }}</a> 
                <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#777676">
                    <path d="M504-480 320-664l56-56 240 240-240 240-56-56 184-184Z" />
                </svg> 
                <a class="AHover" href="{{ route('producto', ['nombreCategoria' => $nombreCategoria, 'nombreProducto' => $nombreProducto])}}">{{ $nombreProducto }}</a>
            </div>
            <div class="d-flex flex-column flex-md-row mt-3">
                <div class="text-center mb-3 mb-md-0">
                    <img src="{{ asset('Assets/img/productos/' . $product->imagenes[0]) }}"
                        alt="{{ $nombreProducto }}" class="img-fluid" style="max-width: 350px;">
                </div>
                <div class="flex-column w-100 w-md-75">
                    <div class="d-flex flex-column flex-md-row">
                        <div class="p-3">
                            <h1>{{ $nombreProducto }}</h1>
                        </div>
                        <div class="p-3 flex-fill d-flex justify-content-md-end align-items-center">
                            <span class="text-end span-custom">{{ $product->precio }}€</span>
                        </div>
                    </div>
                    <div class="border-custom-2 m-3">
                        <div class="d-flex flex-column-reverse p-3">
                            <div class="d-flex justify-content-md-end">
                                <p class="text-color">Envío gratis en pedidos superiores a 50€</p>
                            </div>
                            <div class="d-flex justify-content-md-end">
                                <p class="text-color">Recíbelo entre 3 - 5 días laborales</p>
                            </div>
                        </div>
                        <div class="d-flex flex-column flex-md-row justify-content-end p-3">
                            @auth
                                <form class="m-1" action="{{ route('carrito.add') }}" method="POST">
                                    @csrf
                                    <input type="hidden" name="product_id" value="{{ $product->id }}">
                                    <button type="submit" class="button-custom-2">Añadir al carrito</button>
                                </form>

                                <div class="m-1 button-custom-3">
                                    <a href="{{ route('pago.show') }}" class="color">Comprar ya</a>
                                </div>
                            @else
                                <a href="{{ route('login') }}" class="m-1 p-1 button-custom-2 text-center">Añadir al carrito</a>
                                <a href="{{ route('login') }}" class="m-1 p-1 button-custom-3 text-center">Comprar ya</a>
                            @endauth
                        </div>
                    </div>
                </div>
            </div>
            <div class="border-custom-2 mt-5">
                <div class="p-3">
                    <span class="span-custom">Características</span>
                    <hr>
                </div>
                <div class="p-3 d-flex flex-column">
                    @foreach ($product->caracteristicas as $caracteristica)
                        <span>{{ $caracteristica }}</span>
                    @endforeach
                </div>
            </div>
        </div>
    </main>
    @include('includes.footer')
</body>

</html>
