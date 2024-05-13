<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    <link rel="stylesheet" href="{{ asset('css/styleLogin.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <main class="container-sm align-center p-5">
        <div class="text-center pb-3">
            <h3>TodoComponentes</h3>
        </div>
        <div class="container bg-custom">
            <form class="p-5" action="{{ route('inicia-sesion') }} " method="post">
                @csrf
                <div class="mb-3">
                    <input type="email" class="form-control" name="email" id="emailInput" placeholder="E-mail*"
                        required>
                </div>
                <div class="mb-3">
                    <input type="password" class="form-control" id="passwordInput" name="password"
                        placeholder="Contraseña*" required>
                </div>
                <div class="pb-3">
                    <a href="#">¿Has olvidado la contraseña?</a>
                </div>
                <div class="d-grid gap-2 pb-3">
                    <button type="submit" class="btn btn-custom">Iniciar sesión</button>
                </div>
                <hr>
                <div class="d-grid gap-2 pt-3">
                    <a href="{{ route('registro') }}" class="btn btn-custom2">Crear Cuenta</a>
                </div>
            </form>
        </div>
    </main>
</body>

</html>
