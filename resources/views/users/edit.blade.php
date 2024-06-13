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
                Usuario modificado correctamente.
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        </div>
        @endif
        <div class="container h-100 mt-5">
            <div class="row h-100 justify-content-center align-items-center">
                <div class="col-10 col-md-8 col-lg-6">
                    <h3>Actualizar Usuario</h3>
                    <form action="{{ route('users.update', $usuario->id) }}" method="post">
                        @csrf
                        @method('PUT')
                        <div class="form-group mt-3">
                            <label for="id">id</label>
                            <input type="text" class="form-control" id="id" name="id" value="{{ $usuario->id }}" disabled>
                        </div>
                        <div class="form-group mt-3">
                            <label for="name">Nombre</label>
                            <input type="text" class="form-control" id="name" name="name" value="{{ $usuario->name }}" disabled>
                        </div>
                        <div class="form-group mt-3">
                            <label for="email">Email</label>
                            <input type="text" class="form-control" id="email" name="email" value="{{ $usuario->email }}" disabled>
                        </div>
                        <div class="form-group mt-3">
                            <label for="password">Admin</label>
                            <input type="text" class="form-control" id="admin" name="admin" value="{{ $usuario->admin }}">
                        </div>
                        <div class="mt-3">
                            <button type="submit" class="btn btn-primary">Actualizar Usuario</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </main>

    @include('includes.footer')
</body>

</html>
