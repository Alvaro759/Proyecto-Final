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
                Producto borrado correctamente.
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        </div>
        @endif
        <div class="container-fluid mt-3">
            <div class="container-sm d-flex align-items-center">
                <table class="table border table-striped">
                    <thead>
                        <tr>
                            <th scope="col">Nombre</th> 
                            <th scope="col"><a class="btn btn-sm btn-success" href={{ route('panel.create') }}>Añadir Productos</a></th>
                            <th scope="col"><a class="btn btn-sm btn-success" href={{ route('users.index') }}>Listar Usuarios</a></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($products as $product)
                            <tr class="">
                                <td scope="row"><a href="{{route('panel.show', $product->id)}}">{{ $product->nombre }}</a></td>
                                <td><a href="{{route('panel.edit', $product->id)}}" class="btn btn-primary btn-sm">Editar Producto</a></td>
                                <td>
                                    <form action="{{route('panel.destroy', $product->id)}}" method="post">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger btn-sm">Borrar Producto</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </main>

    @include('includes.footer')
</body>

</html>
