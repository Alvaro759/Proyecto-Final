<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ Auth::user()->name }} | TodoComponentes</title>
    <link rel="stylesheet" href="{{ asset('Assets/scss/css/style.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
    <script src="{{ asset('Assets/js/menu-desplegable.js') }}"></script>
    <script src="{{ asset('Assets/js/toggle-password.js') }}"></script>
</head>

<body>
    @include('includes.header')
    <main class="mt-3">
        @if (session('status') == 'verification-link-sent')
            <div class="container mt-3 mb-3">
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    Un nuevo enlace de verificación ha sido enviado a tu correo electrónico.
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            </div>
        @elseif (session('status') == 'Perfil actualizado correctamente.')
            <div class="container mt-3 mb-3">
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    Perfil actualizado correctamente!
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            </div>
        @elseif (session('status') == 'Dirección actualizada correctamente.')
            <div class="container mt-3 mb-3">
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    Dirección actualizado correctamente!
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            </div>
        @elseif(session('status') == 'Dirección guardada correctamente.')
        <div class="container mt-3 mb-3">
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                Dirección guardada correctamente!
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        </div>
        @endif

        @if (!Auth::user()->hasVerifiedEmail())
            <div class="container mt-3">
                <div class="alert alert-warning alert-dismissible fade show" role="alert">
                    <strong>Verifica tu correo electrónico!</strong> Por favor, revisa tu correo y sigue las
                    instrucciones para verificar tu dirección de email.
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
                <div>
                    <form action="{{ route('verification.send') }}" method="POST">
                        @csrf
                        <button type="submit" class="btn-1">Reenviar email</button>
                    </form>
                </div>
            </div>
        @endif

        <div class="container border-custom-2 mt-3">
            <div class="p-3">
                <h2 class="span-custom">Perfil</h2>
                <hr>
                <div class="container">
                    <form action="{{ route('perfil.update') }}" method="POST">
                        @csrf
                        <div class="row">
                            <div class="col">
                                <span>Nombre</span>
                                <input type="text" class="form-control" name="name"
                                    value="{{ Auth::user()->name }}">
                            </div>
                            <div class="col">
                                <span>Correo electrónico</span>
                                <input type="email" class="form-control" name="email"
                                    value="{{ Auth::user()->email }}">
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col">
                                <span>Contraseña</span>
                                <div class="input-group">
                                    <input type="password" class="form-control" name="password" id="passwordInput">
                                    <button type="button" class="btn btn-outline-secondary toggle-password"
                                        onclick="togglePassword()">
                                        <svg xmlns="http://www.w3.org/2000/svg" height="20px"
                                            viewBox="0 -960 960 960" width="20px" fill="#000000">
                                            <path
                                                d="m637-425-62-62q4-38-23-65.5T487-576l-62-62q13-5 27-7.5t28-2.5q70 0 119 49t49 119q0 14-2.5 28t-8.5 27Zm133 133-52-52q36-28 65.5-61.5T833-480q-49-101-144.5-158.5T480-696q-26 0-51 3t-49 10l-58-58q38-15 77.5-21t80.5-6q143 0 261.5 77.5T912-480q-22 57-58.5 103.5T770-292Zm-2 202L638-220q-38 14-77.5 21t-80.5 7q-143 0-261.5-77.5T48-480q22-57 58-104t84-85L90-769l51-51 678 679-51 51ZM241-617q-35 28-65 61.5T127-480q49 101 144.5 158.5T480-264q26 0 51-3.5t50-9.5l-45-45q-14 5-28 7.5t-28 2.5q-70 0-119-49t-49-119q0-14 3.5-28t6.5-28l-81-81Zm287 89Zm-96 96Z" />
                                        </svg>
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col">
                                <span>Fecha de registro</span>
                                <input type="text" class="form-control" name="{{ Auth::user()->created_at }}"
                                    value="{{ Auth::user()->created_at }}" disabled>
                            </div>
                            <div class="col">
                                <span>Fecha de actualización</span>
                                <input type="text" class="form-control" name="{{ Auth::user()->updated_at }}"
                                    value="{{ Auth::user()->updated_at }}" disabled>
                            </div>
                        </div>
                        <div class="mt-3">
                            <button class="btn btn-warning" type="submit">Editar</button>
                        </div>
                    </form>
                </div>
                <div class="mt-3">
                    <h2 class="span-custom">Dirección</h2>
                    <hr>
                    <div class="container">
                        @if ($direccion)
                            <form action="{{ route('perfil.updateDireccion') }}" method="post">
                                @csrf
                                <div class="row">
                                    <div class="col">
                                        <span>Calle</span>
                                        <input type="text" class="form-control" name="calle"
                                            value="{{ $direccion->calle }}">
                                    </div>
                                    <div class="col">
                                        <span>Número</span>
                                        <input type="text" class="form-control" name="numero"
                                            value="{{ $direccion->numero }}">
                                    </div>
                                </div>
                                <div class="row mt-3">
                                    <div class="col">
                                        <span>Código Postal</span>
                                        <input type="text" class="form-control" name="codigoPostal"
                                            value="{{ $direccion->codigoPostal }}">
                                    </div>
                                    <div class="col">
                                        <span>Provincia</span>
                                        <input type="text" class="form-control" name="provincia"
                                            value="{{ $direccion->provincia }}">
                                    </div>
                                </div>
                                <div class="mt-3">
                                    <button class="btn btn-warning" type="submit">Editar</button>
                                </div>
                            </form>
                        @else
                            <form action="{{ route('perfil.direccion') }}" method="post">
                                @csrf
                                <div class="row">
                                    <div class="col">
                                        <span>Calle</span>
                                        <input type="text" class="form-control" name="calle">
                                    </div>
                                    <div class="col">
                                        <span>Número</span>
                                        <input type="text" class="form-control" name="numero">
                                    </div>
                                </div>
                                <div class="row mt-3">
                                    <div class="col">
                                        <span>Código Postal</span>
                                        <input type="text" class="form-control" name="codigoPostal">
                                    </div>
                                    <div class="col">
                                        <span>Provincia</span>
                                        <input type="text" class="form-control" name="provincia">
                                    </div>
                                </div>
                                <div class="mt-3">
                                    <button class="btn btn-warning" type="submit">Enviar</button>
                                </div>
                            </form>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </main>
    @include('includes.footer')
</body>

</html>
