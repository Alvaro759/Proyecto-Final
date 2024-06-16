<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pagar | TodoComponentes</title>
    <link rel="stylesheet" href="{{ asset('Assets/scss/css/style.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <div class="container mt-5">
        <div class="border-custom p-3">
            <h1 class="mb-4">Datos de Pago</h1>
            <div class="p-3">
                <form action="{{ route('pago.process') }}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label for="numero_tarjeta" class="form-label">Número de Tarjeta</label>
                        <input type="text" class="form-control" id="numero_tarjeta" name="numero_tarjeta"
                            placeholder="Número de Tarjeta*" required>
                    </div>
                    <div class="row">
                        <div class="mb-3 col">
                            <label for="nombre" class="form-label">Nombre</label>
                            <input type="text" class="form-control" id="nombre" name="nombre"
                                placeholder="Nombre*" required>
                        </div>
                        <div class="mb-3 col">
                            <label for="expiracion" class="form-label">Fecha de Expiración</label>
                            <input type="text" class="form-control" id="expiracion" name="expiracion"
                                placeholder="MM/YY" required>
                        </div>

                        <div class="mb-3 col">
                            <label for="cvv" class="form-label">CVV</label>
                            <input type="text" class="form-control" id="cvv" name="cvv" placeholder="CVV"
                                required>
                        </div>
                    </div>
                    
                    <div class="mb-3">
                        <label for="direccion_id" class="form-label">Dirección de Envío</label>
                        <select class="form-control" id="direccion_id" name="direccion_id" required>
                            @if ($direcciones && count($direcciones) > 0)
                                @foreach ($direcciones as $direccion)
                                    <option value="{{ $direccion->id }}" default>{{ $direccion->calle }},
                                        {{ $direccion->numero }}, {{ $direccion->codigoPostal }},
                                        {{ $direccion->provincia }}</option>
                                @endforeach
                            @else
                                <option value="" default>No hay direcciones disponibles</option>
                            @endif
                        </select>
                    </div>
                    <button type="submit" class="btn btn-componentes">Pagar</button>
                </form>
            </div>
        </div>
    </div>
</body>

</html>
