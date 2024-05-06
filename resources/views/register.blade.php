<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Registro</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <main class="container-sm align-center p-5">
        <div class="text-center pb-3">
            <h3>TodoComponentes</h3>
        </div>
        <div class="container bg-custom">
            <form class="p-5" action="{{ route('validar-registro') }} " method="post">
                @csrf
                <div class="mb-3">
                    <input type="text" class="form-control" id="userInput" name="name" required required placeholder="Nombre*"
                        autocomplete="disabled">
                </div>
                <div class="mb-3">
                    <input type="email" class="form-control" name="email" id="emailInput" required placeholder="Email*"
                        autocomplete="disabled">
                </div>
                <div class="mb-3">
                    <input type="password" class="form-control" id="passwordInput" name="password" required placeholder="Contraseña*">
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                    <label class="form-check-label" for="flexCheckDefault">
                      He leído y acepto la política de privacidad
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                    <label class="form-check-label" for="flexCheckDefault">
                      Acepto recibir correos con descuentos y novedades
                    </label>
                  </div>
                <div class="d-grid gap-2 pt-3">
                    <button type="submit" class="btn btn-custom2">Crear cuenta</button>
                </div>
            </form>
        </div>
    </main>
</body>

</html>
