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
</head>

<body>
    <header class="mt-3">
        <div class="d-flex justify-content-evenly">
            <div class="d-flex align-items-center">
                <h1><a href="/">TodoComponentes</a></h1>
            </div>
            <div class="d-flex border-custom">
                <div class="d-flex align-items-center">
                    <div class="border-custom-unique">
                        <button class="button-custom-unique" id="abrir"><svg xmlns="http://www.w3.org/2000/svg"
                                height="40px" viewBox="0 -960 960 960" width="30px" fill="#777676">
                                <path
                                    d="M120-240v-66.67h720V-240H120Zm0-206.67v-66.66h720v66.66H120Zm0-206.66V-720h720v66.67H120Z" />
                            </svg></button>
                    </div>
                    <div class="nav-custom-unique" id="nav-custom">
                        <button id="cerrar" class="button-custom-unique"><svg xmlns="http://www.w3.org/2000/svg"
                                height="24px" viewBox="0 -960 960 960" width="24px" fill="#777676">
                                <path
                                    d="m256-200-56-56 224-224-224-224 56-56 224 224 224-224 56 56-224 224 224 224-56 56-224-224-224 224Z" />
                            </svg></button>
                        <ul>
                            @foreach ($categories as $category)
                                <li><a class="AHover" href="/{{ $category->nombre }}">{{ $category->nombre }}</a></li>
                            @endforeach
                        </ul>
                    </div>
                </div>
                <div class="border-custom-unique" id="border-custom">
                    <input type="text" placeholder="Buscar">
                    <button class="button-custom-unique"><span><svg xmlns="http://www.w3.org/2000/svg" height="37px"
                                viewBox="0 -960 960 960" width="24px" fill="#000000">
                                <path
                                    d="M792-120.67 532.67-380q-30 25.33-69.64 39.67Q423.39-326 378.67-326q-108.44 0-183.56-75.17Q120-476.33 120-583.33t75.17-182.17q75.16-75.17 182.5-75.17 107.33 0 182.16 75.17 74.84 75.17 74.84 182.27 0 43.23-14 82.9-14 39.66-40.67 73l260 258.66-48 48Zm-414-272q79.17 0 134.58-55.83Q568-504.33 568-583.33q0-79-55.42-134.84Q457.17-774 378-774q-79.72 0-135.53 55.83-55.8 55.84-55.8 134.84t55.8 134.83q55.81 55.83 135.53 55.83Z" />
                            </svg></span></button>
                </div>
            </div>
            <div class="d-flex align-items-center">
                @if (Auth::check())
                    <div class="btn-group">
                        <a class="d-flex AHover" type="button" data-bs-toggle="dropdown" data-bs-auto-close="true"
                            aria-expanded="false">
                            <svg xmlns="http://www.w3.org/2000/svg" height="40px" viewBox="0 -960 960 960"
                                width="40px" fill="#000000">
                                <path
                                    d="M226-262q59-42.33 121.33-65.5 62.34-23.17 132.67-23.17 70.33 0 133 23.17T734.67-262q41-49.67 59.83-103.67T813.33-480q0-141-96.16-237.17Q621-813.33 480-813.33t-237.17 96.16Q146.67-621 146.67-480q0 60.33 19.16 114.33Q185-311.67 226-262Zm253.88-184.67q-58.21 0-98.05-39.95Q342-526.58 342-584.79t39.96-98.04q39.95-39.84 98.16-39.84 58.21 0 98.05 39.96Q618-642.75 618-584.54t-39.96 98.04q-39.95 39.83-98.16 39.83ZM480.31-80q-82.64 0-155.64-31.5-73-31.5-127.34-85.83Q143-251.67 111.5-324.51T80-480.18q0-82.82 31.5-155.49 31.5-72.66 85.83-127Q251.67-817 324.51-848.5T480.18-880q82.82 0 155.49 31.5 72.66 31.5 127 85.83Q817-708.33 848.5-635.65 880-562.96 880-480.31q0 82.64-31.5 155.64-31.5 73-85.83 127.34Q708.33-143 635.65-111.5 562.96-80 480.31-80Zm-.31-66.67q54.33 0 105-15.83t97.67-52.17q-47-33.66-98-51.5Q533.67-284 480-284t-104.67 17.83q-51 17.84-98 51.5 47 36.34 97.67 52.17 50.67 15.83 105 15.83Zm0-366.66q31.33 0 51.33-20t20-51.34q0-31.33-20-51.33T480-656q-31.33 0-51.33 20t-20 51.33q0 31.34 20 51.34 20 20 51.33 20Zm0-71.34Zm0 369.34Z" />
                            </svg>
                            <div class="d-flex align-items-center span">
                                <span class="none">{{ Auth::user()->name }}</span>
                            </div>
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="/perfil">Perfil</a></li>
                            <li><a class="dropdown-item" href="/logout">Salir</a></li>
                        </ul>
                    </div>
                @else
                    <a class="d-flex AHover" href="/login">
                        <svg xmlns="http://www.w3.org/2000/svg" height="40px" viewBox="0 -960 960 960" width="40px"
                            fill="#000000">
                            <path
                                d="M226-262q59-42.33 121.33-65.5 62.34-23.17 132.67-23.17 70.33 0 133 23.17T734.67-262q41-49.67 59.83-103.67T813.33-480q0-141-96.16-237.17Q621-813.33 480-813.33t-237.17 96.16Q146.67-621 146.67-480q0 60.33 19.16 114.33Q185-311.67 226-262Zm253.88-184.67q-58.21 0-98.05-39.95Q342-526.58 342-584.79t39.96-98.04q39.95-39.84 98.16-39.84 58.21 0 98.05 39.96Q618-642.75 618-584.54t-39.96 98.04q-39.95 39.83-98.16 39.83ZM480.31-80q-82.64 0-155.64-31.5-73-31.5-127.34-85.83Q143-251.67 111.5-324.51T80-480.18q0-82.82 31.5-155.49 31.5-72.66 85.83-127Q251.67-817 324.51-848.5T480.18-880q82.82 0 155.49 31.5 72.66 31.5 127 85.83Q817-708.33 848.5-635.65 880-562.96 880-480.31q0 82.64-31.5 155.64-31.5 73-85.83 127.34Q708.33-143 635.65-111.5 562.96-80 480.31-80Zm-.31-66.67q54.33 0 105-15.83t97.67-52.17q-47-33.66-98-51.5Q533.67-284 480-284t-104.67 17.83q-51 17.84-98 51.5 47 36.34 97.67 52.17 50.67 15.83 105 15.83Zm0-366.66q31.33 0 51.33-20t20-51.34q0-31.33-20-51.33T480-656q-31.33 0-51.33 20t-20 51.33q0 31.34 20 51.34 20 20 51.33 20Zm0-71.34Zm0 369.34Z" />
                        </svg>
                        <div class="d-flex align-items-center span">
                            <span class="none">Cuenta</span>
                        </div>
                    </a>
                @endif
            </div>
            <div class="d-flex align-items-center">
                <a class="d-flex AHover" href="/carrito">
                    <svg xmlns="http://www.w3.org/2000/svg" height="40px" viewBox="0 -960 960 960" width="40px"
                        fill="#000000">
                        <path
                            d="M284.53-80.67q-30.86 0-52.7-21.97Q210-124.62 210-155.47q0-30.86 21.98-52.7Q253.95-230 284.81-230t52.69 21.98q21.83 21.97 21.83 52.83t-21.97 52.69q-21.98 21.83-52.83 21.83Zm400 0q-30.86 0-52.7-21.97Q610-124.62 610-155.47q0-30.86 21.98-52.7Q653.95-230 684.81-230t52.69 21.98q21.83 21.97 21.83 52.83t-21.97 52.69q-21.98 21.83-52.83 21.83ZM238.67-734 344-515.33h285.33l120-218.67H238.67ZM206-800.67h589.38q22.98 0 34.97 20.84 11.98 20.83.32 41.83L693.33-490.67q-11 19.34-28.87 30.67-17.87 11.33-39.13 11.33H324l-52 96h487.33V-286H278q-43 0-63-31.83-20-31.84-.33-68.17l60.66-111.33-149.33-316H47.33V-880h121.34L206-800.67Zm138 285.34h285.33H344Z" />
                    </svg>
                    <div class="d-flex align-items-center">
                        <span class="none">Carrito</span>
                    </div>
                </a>
            </div>
            @if (Auth::check() && Auth::user()->admin)
                <div class="d-flex align-items-center">
                    <a class="d-flex AHover" href="/panel-de-control">
                        <svg xmlns="http://www.w3.org/2000/svg" height="40px" viewBox="0 -960 960 960" width="40px"
                            fill="#000000">
                            <path
                                d="M672-288q30 0 51-21t21-51q0-30-21-51t-51-21q-30 0-51 21t-21 51q0 30 21 51t51 21Zm0 144q38 0 70.5-19.15T795-214q-28-18-58.77-28-30.77-10-64-10Q639-252 608-242q-31 10-59 28 20 31.7 52.5 50.85Q634-144 672-144ZM480-96q-133-30-222.5-150.5T168-515v-229l312-120 312 120v221q-22-10-39-16t-33-8v-148l-240-92-240 92v180q0 49 12.5 96t36.5 88.5q24 41.5 58.5 76T425-194q8 23 25.5 48.5T489-98l-4.5 1-4.5 1Zm191.77 0Q592-96 536-152.23q-56-56.22-56-136Q480-368 536.23-424q56.22-56 136-56Q752-480 808-423.77q56 56.22 56 136Q864-208 807.77-152q-56.22 56-136 56ZM480-480Z" />
                        </svg>
                        <div class="d-flex align-items-center">
                            <span class="none">Panel de Control</span>
                        </div>
                    </a>
                </div>
            @endif
        </div>
    </header>
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
        <div class="d-flex mt-3 ms-5 me-5">
            <div class="w-25">
                <div class="border-custom-2">
                    <div class="mt-2 text-center">
                        <span class="span-custom-2">Resumen</span>
                    </div>
                    <div class="txt-color p-3">
                        <div>
                            Subtotal······················· {{ $totalCarrito }}€
                        </div>
                        <div>
                            Gasto de envío················· @if ($totalCarrito == 0)
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

                        </div>
                        <hr>
                        <div>
                            Total························ @if ($finalTotal == 0)
                                {{ $totalCarrito }}€
                            @else
                                {{ $finalTotal }}€
                            @endif
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
                        <img src="{{ asset('Assets/img/pagosaceptados.webp') }}" alt="Pagos aceptados" width="200px"
                            height="150px">
                    </div>

                </div>
            </div>
            <div class="border-custom-2 w-75 ms-3">
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
                                <div class="d-flex align-articulos-center mb-3">
                                    <div class="d-flex flex-fill">
                                        <div>
                                            <img src="{{ asset("Assets/img/productos/$articulo->imagen") }}"
                                                alt="{{ $articulo->product->nombre }}" width="150px"
                                                height="150px">
                                        </div>
                                        <div class="d-flex-column p-3">
                                            <h5>{{ $articulo->product->nombre }}</h5>
                                            <p>Cantidad: {{ $articulo->Cantidad }}</p>
                                            <p>Precio: {{ $articulo->product->precio * $articulo->Cantidad }}€</p>
                                        </div>
                                        <div class="p-3 flex-fill">
                                            <form action="{{ route('carrito.remove') }}" class="justify-content-end"
                                                method="post">
                                                @csrf
                                                <input type="hidden" name="product_id"
                                                    value="{{ $articulo->idProducto }}">
                                                <button type="submit" class="btn btn-danger"><svg
                                                        xmlns="http://www.w3.org/2000/svg" height="20px"
                                                        viewBox="0 -960 960 960" width="20px" fill="#FFFFFF">
                                                        <path
                                                            d="M312-144q-29.7 0-50.85-21.15Q240-186.3 240-216v-480h-48v-72h192v-48h192v48h192v72h-48v479.57Q720-186 698.85-165T648-144H312Zm336-552H312v480h336v-480ZM384-288h72v-336h-72v336Zm120 0h72v-336h-72v336ZM312-696v480-480Z" />
                                                    </svg></button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        @endif
                    </div>
                </div>

            </div>
        </div>
    </main>
    <footer class="footer mt-5">
        <div class="d-flex justify-content-evenly">
            <div class="box m-3">
                <div class="p-3">
                    <h4 class="bold">Contactar</h4>
                    <div class="d-flex flex-column">
                        <a class="AHover" href="">Contacto</a>
                        <a class="AHover" href="">Centro de soporte</a>
                        <a class="AHover" href="">Dirección</a>
                    </div>
                </div>
            </div>
            <div class="box m-3">
                <div class="p-3">
                    <h4 class="bold">Comunidad</h4>
                    <div class="d-flex flex-column">
                        <a class="AHover" href="">Instagram</a>
                        <a class="AHover" href="">Twitter</a>
                        <a class="AHover" href="">Youtube</a>
                        <a class="AHover" href="">Twitch</a>
                    </div>
                </div>
            </div>
            <div class="box m-3">
                <div class="p-3">
                    <h4 class="bold">Quiénes somos</h4>
                    <div class="d-flex flex-column">
                        <a class="AHover" href="">Quiénes somos</a>
                        <a class="AHover" href="">Aviso Legal</a>
                        <a class="AHover" href="">Afiliados</a>
                        <a class="AHover" href="">Privacidad</a>
                    </div>
                </div>
            </div>
            <div class="box m-3">
                <div class="p-3">
                    <h4 class="bold">Camapañas</h4>
                    <div class="d-flex flex-column">
                        <a class="AHover" href="">Black Friday</a>
                        <a class="AHover" href="">Ciber Monday</a>
                        <a class="AHover" href="">Single's Day 11.11</a>
                    </div>
                </div>
            </div>
        </div>
    </footer>
</body>

</html>
