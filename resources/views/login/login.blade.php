<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    <link rel="stylesheet" href="{{ asset('Assets/css/styleLogin.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="{{ asset('Assets/js/toggle-password.js') }}"></script>
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
                <div class="mb-3 input-group">
                    <input type="password" class="form-control" id="passwordInput" name="password"
                        placeholder="Contraseña*" required>
                    <button type="button" class="btn btn-outline-secondary toggle-password" onclick="togglePassword()">
                        <svg xmlns="http://www.w3.org/2000/svg" height="20px" viewBox="0 -960 960 960" width="20px"
                            fill="#000000">
                            <path
                                d="m637-425-62-62q4-38-23-65.5T487-576l-62-62q13-5 27-7.5t28-2.5q70 0 119 49t49 119q0 14-2.5 28t-8.5 27Zm133 133-52-52q36-28 65.5-61.5T833-480q-49-101-144.5-158.5T480-696q-26 0-51 3t-49 10l-58-58q38-15 77.5-21t80.5-6q143 0 261.5 77.5T912-480q-22 57-58.5 103.5T770-292Zm-2 202L638-220q-38 14-77.5 21t-80.5 7q-143 0-261.5-77.5T48-480q22-57 58-104t84-85L90-769l51-51 678 679-51 51ZM241-617q-35 28-65 61.5T127-480q49 101 144.5 158.5T480-264q26 0 51-3.5t50-9.5l-45-45q-14 5-28 7.5t-28 2.5q-70 0-119-49t-49-119q0-14 3.5-28t6.5-28l-81-81Zm287 89Zm-96 96Z" />
                        </svg>
                    </button>
                </div>
                <div class="pb-3">
                    <a href="/forgot-password">¿Has olvidado la contraseña?</a>
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
