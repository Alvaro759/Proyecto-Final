<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Panel de Control | TodoComponentes</title>
    <link rel="stylesheet" href="{{ asset('Assets/css/styleHome.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
    <script src="{{ asset('Assets/js/menu-desplegable.js') }}"></script>
</head>

<body>
    @include('includes.header')

    <main class="mt-3">

        @if (session('success') == 'Modificación realizada')
        <div class="container mt-3 mb-3">
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                Modificación realizada con correctamente.
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        </div>
        @endif
        <div class="container h-100 mt-5">
            <div class="row h-100 justify-content-center align-items-center">
                <div class="col-10 col-md-8 col-lg-6">
                    <h3>Actualizar Producto</h3>
                    <form action="{{ route('panel.update', $product->id) }}" method="post">
                        @csrf
                        @method('PUT')
                        <div class="form-group mt-3">
                            <label for="nombre">Nombre</label>
                            <input type="text" class="form-control" id="nombre" name="nombre"
                                value="{{ $product->nombre }}" required>
                        </div>
                        <div class="form-group mt-3">
                            <label for="descripcion">Caracteristicas</label>
                            <input type="text" class="form-control" id="caracteristicas" name="caracteristicas"
                                value="{{ $product->caracteristicas }}" required>
                        </div>
                        <div class="form-group mt-3">
                            <label for="descripcion">Precio</label>
                            <input type="text" class="form-control" id="precio" name="precio"
                                value="{{ $product->precio }}" required>
                        </div>
                        <div class="form-group mt-3">
                            <label for="descripcion">Imagenes</label>
                            <input type="text" class="form-control" id="imagenes" name="imagenes"
                                value="{{ $product->imagenes }}">
                        </div>
                        <div class="form-group mt-3">
                            <label for="descripcion">Destacado</label>
                            <input type="text" class="form-control" id="destacado" name="destacado"
                                value="{{ $product->destacado }}" required>
                        </div>
                        <div class="form-group mt-3">
                            <label for="descripcion">Id Categoria</label>
                            <input type="text" class="form-control" id="idCategoria" name="idCategoria"
                                value="{{ $product->idCategoria }}" required>
                        </div>
                        <div class="mt-3">
                            <button type="submit" class="btn btn-primary">Actualizar Producto</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </main>

    @include('includes.footer')
</body>

</html>
