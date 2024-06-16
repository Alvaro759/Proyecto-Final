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
        <div class="container-fluid mt-3">
            <div class="container-sm d-flex align-items-center">
                <table class="table border table-striped">
                    <thead>
                        <tr>
                            <th scope="col">Id</th>
                            <th scope="col">Nombre</th>
                            <th scope="col">Email</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($usuarios as $usuario)
                            <tr class="">
                                <td scope="row">{{ $usuario->id }}</td>
                                <td scope="row">{{ $usuario->name }}</td>
                                <td scope="row">{{ $usuario->email }}</td>
                                <td><a href="{{ route('users.edit', $usuario->id) }}"
                                        class="btn btn-primary btn-sm">Edit</a></td>
                                <td>
                                    <form action="{{ route('users.destroy', $usuario->id) }}" method="post">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger btn-sm">Delete</button>
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
