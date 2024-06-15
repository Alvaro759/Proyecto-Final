<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Carrito | TodoComponentes</title>
    <link rel="stylesheet" href="{{ asset('Assets/css/styleHome.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
    <script src="{{ asset('Assets/js/menu-desplegable.js') }}"></script>
    <style>
        .subtotal, .gasto-envio, .total {
            display: flex;
            justify-content: space-between;
        }
    </style>
</head>

<body>
    @include('includes.header')
    <main class="mt-3">
        @if (session('success') == 'Producto eliminado del carrito.')
            <div class="alert-wrapper mt-3">
                <div class="alert alert-success alert-dismissible fade show session-alert small-alert" role="alert">
                    Producto eliminado correctamente.
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            </div>
        @elseif(session('error') == 'El producto no se encuentra en el carrito.')
            <div class="alert-wrapper mt-3">
                <div class="alert alert-danger session-alert small-alert" role="danger">
                    El Producto no se encuentra en el carrito.
                    <button type="button" class="btn-close" aria-label="Close"></button>
                </div>
            </div>
        @endif
        <div class="container mt-3">
            <div class="row">
                <div class="col-12 col-md-4 mb-3">
                    <div class="border-custom-2">
                        <div class="mt-2 text-center">
                            <span class="span-custom-2">Resumen</span>
                        </div>
                        <div class="txt-color p-3">
                            <div class="subtotal">
                                <span>Subtotal</span>
                                <span>{{ $totalCarrito }}€</span>
                            </div>
                            <div class="gasto-envio">
                                <span>Gasto de envío</span>
                                <span>
                                    @if ($totalCarrito == 0)
                                        0€
                                    @elseif($totalCarrito < 50)
                                        @php
                                            $gastoEnvio = 5;
                                            $finalTotal = $totalCarrito + $gastoEnvio;
                                        @endphp
                                        {{ $gastoEnvio }}€
                                    @else
                                        Gratis
                                    @endif
                                </span>
                            </div>
                            <hr>
                            <div class="total">
                                <span>Total</span>
                                <span>
                                    @if ($finalTotal == 0)
                                        {{ $totalCarrito }}€
                                    @else
                                        {{ $finalTotal }}€
                                    @endif
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="d-grid gap-2 mt-3">
                        <a href="{{ route('pago.show') }}" class="button-custom-3 text-center" type="button">Hacer pedido</a>
                    </div>
                    <div class="mt-3 text-center">
                        <div class="bg-1">
                            <span>Pagos aceptados</span>
                        </div>
                        <div>
                            <img src="{{ asset('Assets/img/pagosaceptados.webp') }}" alt="Pagos aceptados" class="img-fluid" style="max-width: 200px;">
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-8">
                    <div class="border-custom-2">
                        <div class="p-3">
                            <span class="span-custom">Artículos</span>
                            <hr>
                            <div class="mt-3">
                                @if ($articulos->isEmpty())
                                    <div class="text-center">
                                        <p>No se han encontrado artículos actualmente.</p>
                                    </div>
                                @else
                                    @foreach ($articulos as $articulo)
                                        <div class="d-flex flex-column flex-md-row align-items-center mb-3">
                                            <div class="flex-shrink-0 mb-3 mb-md-0 me-md-3">
                                                <img src="{{ asset("Assets/img/productos/$articulo->imagen") }}"
                                                    alt="{{ $articulo->product->nombre }}" class="img-fluid" style="max-width: 150px;">
                                            </div>
                                            <div class="flex-grow-1">
                                                <h5>{{ $articulo->product->nombre }}</h5>
                                                <p>Cantidad: {{ $articulo->Cantidad }}</p>
                                                <p>Precio: {{ $articulo->product->precio * $articulo->Cantidad }}€</p>
                                            </div>
                                            <div class="flex-shrink-0">
                                                <form action="{{ route('carrito.remove') }}" method="post">
                                                    @csrf
                                                    <input type="hidden" name="product_id" value="{{ $articulo->idProducto }}">
                                                    <button type="submit" class="btn btn-danger">
                                                        <svg xmlns="http://www.w3.org/2000/svg" height="20px" viewBox="0 -960 960 960" width="20px" fill="#FFFFFF">
                                                            <path d="M312-144q-29.7 0-50.85-21.15Q240-186.3 240-216v-480h-48v-72h192v-48h192v48h192v72h-48v479.57Q720-186 698.85-165T648-144H312Zm336-552H312v480h336v-480ZM384-288h72v-336h-72v336Zm120 0h72v-336h-72v336ZM312-696v480-480Z" />
                                                        </svg>
                                                    </button>
                                                </form>
                                            </div>
                                        </div>
                                    @endforeach
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
    @include('includes.footer')
</body>

</html>
