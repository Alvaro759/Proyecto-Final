<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Reseteo Contraseña | TodoComponentes</title>
    <link rel="stylesheet" href="{{ asset('Assets/scss/css/styleLogin.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <main class="container-sm align-center p-5">
        <div class="text-center pb-3">
            <h3>TodoComponentes</h3>
        </div>
        @if ($errors->any())
        <div>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
        <div class="container bg-custom">
            <form class="p-5" action="{{ route('password.update') }} " method="post">
                @csrf
                <div class="mb-3">
                    <input type="hidden" class="form-control" name="token" value="{{ $token }}">
                </div>
                <div class="mb-3">
                    <input type="email" class="form-control" name="email" id="emailInput" placeholder="E-mail*"
                        required>
                </div>
                <div class="mb-3">
                    <input type="password" class="form-control" id="passwordInput" name="password"
                        placeholder="Nueva contraseña*" required>
                </div>
                <div class="mb-3">
                    <input type="password" class="form-control" id="passwordInput_confirmation" name="password_confirmation"
                        placeholder="Confirmar nueva contraseña*" required>
                </div>
                <div class="d-grid gap-2 pb-3">
                    <button type="submit" class="btn btn-custom">Resetear contraseña</button>
                </div>
            </form>
        </div>
    </main>
</body>

</html>
