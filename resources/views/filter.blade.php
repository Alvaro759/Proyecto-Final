<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $nombreCategoria }} | TodoComponentes</title>
    <link rel="stylesheet" href="{{ asset('Assets/css/styleHome.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="{{ asset('Assets/js/menu-desplegable.js') }}"></script>
</head>

<body>
    @include('includes.header')
    <main class="mt-3">
        <div class="mt-3 ms-3 ms-md-5">
            <div>
                <a class="AHover" href="{{route('home')}}">Home</a> 
                <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#777676">
                    <path d="M504-480 320-664l56-56 240 240-240 240-56-56 184-184Z" />
                </svg> 
                <a class="AHover" href="{{ route('categoria', ['nombreCategoria' => $nombreCategoria])}}">{{ $nombreCategoria }}</a>
            </div>
            <div class="d-flex flex-column flex-md-row mt-3">
                <div class="m-3 w-50 w-md-25">
                    <div class="d-grid gap-2">
                        <a class="button-custom-2 text-center" href="{{ route('categoria', ['nombreCategoria' => $nombreCategoria])}}">Borrar filtros</a>
                    </div>
                    <form action="{{ route('categoria.filtrar', ['nombreCategoria' => $nombreCategoria]) }}" method="get">
                        <div class="border-custom-2 mt-3">
                            <div>
                                <h4 class="text-center color bg-0"> Filtros</h4>
                            </div>
                            <div class="p-3">
                                <h4 class="border-bottom">Marcas</h4>
                                @foreach ($subcategories as $subcategory)
                                    <div class="m-2">
                                        <input class="checkbox" type="checkbox" name="subcategorias[]" value="{{ $subcategory->id }}">
                                        <label class="ms-3" for="subcategorias">{{ $subcategory->nombre }}</label>
                                    </div>
                                @endforeach
                            </div>
                            <div class="p-3">
                                <button type="submit" class="button-custom-3">Aplicar filtros</button>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="w-100 w-md-75">
                    @foreach ($products as $product)
                        <div class="container-custom m-3">
                            <a class="d-flex flex-column flex-md-row" href="{{route('producto', ['nombreCategoria' => $nombreCategoria, 'nombreProducto' => $product->nombre])}}">
                                <img src="{{ asset('Assets/img/productos/' . $product->primerImagen) }}" class="rounded p-3" alt="{{ $product->nombre }}" width="200px" height="200px">
                                <div class="p-3">
                                    <p><b>{{ $product->nombre }}</b></p>
                                    <p class="text-color">Envío gratis</p>
                                    <p class="text-color">Recíbelo entre 3 - 5 días laborales</p>
                                </div>
                                <div class="p-3 flex-fill text-end">
                                    <h2><b>{{ $product->precio }}€</b></h2>
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
