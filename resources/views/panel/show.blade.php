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
        <div class="container h-100 mt-5">
            <div class="row h-100 justify-content-center align-items-center">
    
                <div class="card">
                    <div class="card-header">
                        <h5 class="card-title">Id: {{ $product->id }}</h5>
                    </div>
                    <div class="card-body">
                        <p class="card-text"><b>Nombre:</b> {{ $product->nombre }}</p>
                    </div>
                    <div class="card-body">
                        <p class="card-text"><b>Caracteristicas:</b> {{ $product->caracteristicas }}</p>
                    </div>
                    <div class="card-footer">
                        <a href="{{route('panel.edit', $product->id)}}" class="btn btn-primary btn-sm mb-2">Edit</a>
                        <form action="{{route('panel.destroy', $product->id)}}" method="post">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </main>

    @include('includes.footer')
</body>

</html>
