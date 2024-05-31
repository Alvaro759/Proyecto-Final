<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $nombreProducto }} | TodoComponentes</title>
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
        </div>
    </header>
    <main class="mt-3">
        <div class="mt-3 ms-5 me-5">
            <div><a class="AHover" href="/">Home</a> <svg xmlns="http://www.w3.org/2000/svg" height="24px"
                    viewBox="0 -960 960 960" width="24px" fill="#777676">
                    <path d="M504-480 320-664l56-56 240 240-240 240-56-56 184-184Z" />
                </svg> <a class="AHover" href="/{{ $nombreCategoria }}">{{ $nombreCategoria }}</a> <svg
                    xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px"
                    fill="#777676">
                    <path d="M504-480 320-664l56-56 240 240-240 240-56-56 184-184Z" />
                </svg> <a class="AHover"
                    href="/{{ $nombreCategoria }}/{{ $nombreProducto }}">{{ $nombreProducto }}</a>
            </div>
            <div class="d-flex mt-3">
                <div>
                    <img src="{{ asset('Assets/img/productos/' . $product->imagenes[0]) }}"
                        alt="{{ $nombreProducto }}" width="350px" height="350px">
                </div>
                <div class="flex-column w-75">
                    <div class="d-flex">
                        <div class="p-3">
                            <h1>{{ $nombreProducto }}</h1>
                        </div>
                        <div class="p-3 flex-fill d-flex justify-content-end align-items-center">
                            <span class="text-end span-custom">{{ $product->precio }}€</span>
                        </div>
                    </div>
                    <div class="border-custom-2">
                        <div>
                            
                        </div>
                    </div>
                    <div class="d-flex justify-content-end p-3">
                        @if (Auth::check())
                            <form class="m-1" action="{{ route('wishlist.add') }}" method="POST"
                                class="mt-2">
                                @csrf
                                <input type="hidden" name="product_id" value="{{ $product->id }}">
                                <button type="submit" class="button-custom-2"><svg
                                        xmlns="http://www.w3.org/2000/svg" height="22px" viewBox="0 -960 960 960"
                                        width="24px" fill="#000000">
                                        <path
                                            d="m480-120-58-52q-101-91-167-157T150-447.5Q111-500 95.5-544T80-634q0-94 63-157t157-63q52 0 99 22t81 62q34-40 81-62t99-22q94 0 157 63t63 157q0 46-15.5 90T810-447.5Q771-395 705-329T538-172l-58 52Zm0-108q96-86 158-147.5t98-107q36-45.5 50-81t14-70.5q0-60-40-100t-100-40q-47 0-87 26.5T518-680h-76q-15-41-55-67.5T300-774q-60 0-100 40t-40 100q0 35 14 70.5t50 81q36 45.5 98 107T480-228Zm0-273Z" />
                                    </svg></button>
                            </form>

                            <form class="m-1" action="{{ route('cart.add') }}" method="POST" class="mt-2">
                                @csrf
                                <input type="hidden" name="product_id" value="{{ $product->id }}">
                                <button type="submit" class="button-custom-2">Añadir al carrito</button>
                            </form>

                            <form class="m-1" action="{{ route('order.buyNow') }}" method="POST">
                                @csrf
                                <input type="hidden" name="product_id" value="{{ $product->id }}">
                                <button type="submit" class="button-custom-3">Comprar ya</button>
                            </form>
                        @else
                            <a href="{{ route('login') }}" class="m-1 p-1 button-custom-2"><svg
                                    xmlns="http://www.w3.org/2000/svg" height="22px" viewBox="0 -960 960 960"
                                    width="24px" fill="#000000">
                                    <path
                                        d="m480-120-58-52q-101-91-167-157T150-447.5Q111-500 95.5-544T80-634q0-94 63-157t157-63q52 0 99 22t81 62q34-40 81-62t99-22q94 0 157 63t63 157q0 46-15.5 90T810-447.5Q771-395 705-329T538-172l-58 52Zm0-108q96-86 158-147.5t98-107q36-45.5 50-81t14-70.5q0-60-40-100t-100-40q-47 0-87 26.5T518-680h-76q-15-41-55-67.5T300-774q-60 0-100 40t-40 100q0 35 14 70.5t50 81q36 45.5 98 107T480-228Zm0-273Z" />
                                </svg></a>
                            <a href="{{ route('login') }}" class="m-1 p-1 button-custom-2">Añadir al carrito</a>
                            <a href="{{ route('login') }}" class="m-1 p-1 button-custom-3">Comprar ya</a>
                        @endif
                    </div>
                </div>
            </div>
            <div class="border-custom-2 mt-5">
                <div class="p-2">
                    <span class="span-custom">Características</span>
                    <hr>
                </div>
                <div class="p-2">
                    <span>{{ $product->caracteristicas }}</span>
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
