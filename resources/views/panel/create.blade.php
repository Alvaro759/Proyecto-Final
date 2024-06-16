<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Panel de Control | TodoComponentes</title>
    <link rel="stylesheet" href="{{ asset('Assets/scss/css/style.css') }}">
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
        @if (session('success') == 'Producto creado correctamente.')
        <div class="container mt-3 mb-3">
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                Producto creado correctamente.
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        </div>
        @endif
        <div class="container h-100 mt-5">
            <div class="row h-100 justify-content-center align-items-center">
                <div class="col-10 col-md-8 col-lg-6">
                    <h3>Añadir producto</h3>
                    <form method="post" action="{{ route('panel.store') }}">
                        @csrf
                        <div class="form-group">
                            <label for="nombre">Nombre</label>
                            <input type="text" class="form-control" id="nombre" name="nombre" required>
                        </div>
                        <div class="form-group mt-3">
                            <label for="descripcion">Caracteristicas</label>
                            <input type="text" class="form-control" id="caracteristicas" name="caracteristicas" required>
                        </div>
                        <div class="form-group mt-3">
                            <label for="descripcion">Precio</label>
                            <input type="text" class="form-control" id="precio" name="precio" required>
                        </div>
                        <div class="form-group mt-3">
                            <label for="descripcion">Imagenes</label>
                            <input type="text" class="form-control" id="imagenes" name="imagenes">
                        </div>
                        <div class="form-group mt-3">
                            <label for="descripcion">Destacado</label>
                            <input type="text" class="form-control" id="destacado" name="destacado">
                        </div>
                        <div class="form-group mt-3">
                            <label for="descripcion">Id Categoria</label>
                            <input type="text" class="form-control" id="idCategoria" name="idCategoria" required>
                        </div>
                        <div class="form-group mt-3">
                            <label for="descripcion">Id Almacen</label>
                            <input type="text" class="form-control" id="idAlmacen" name="idAlmacen" required>
                        </div>
                        <div class="mt-3">
                            <button type="submit" class="btn btn-primary">Crear Producto</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </main>

    @include('includes.footer')
</body>

</html>
