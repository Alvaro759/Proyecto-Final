<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pagar | TodoComponentes</title>
    <link rel="stylesheet" href="{{ asset('Assets/css/styleHome.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <div class="container mt-5">
        <h2 class="mb-4">Datos de Pago</h2>
        <form action="{{ route('pago.process') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="nombre" class="form-label">Nombre</label>
                <input type="text" class="form-control" id="nombre" name="nombre" required>
            </div>
            <div class="mb-3">
                <label for="numero_tarjeta" class="form-label">Número de Tarjeta</label>
                <input type="text" class="form-control" id="numero_tarjeta" name="numero_tarjeta" required>
            </div>
            <div class="mb-3">
                <label for="expiracion" class="form-label">Fecha de Expiración (MM/YY)</label>
                <input type="text" class="form-control" id="expiracion" name="expiracion" required>
            </div>
            <div class="mb-3">
                <label for="cvv" class="form-label">CVV</label>
                <input type="text" class="form-control" id="cvv" name="cvv" required>
            </div>
            <div class="mb-3">
                <label for="direccion_id" class="form-label">Dirección de Envío</label>
                <select class="form-control" id="direccion_id" name="direccion_id" required>
                    @if ($direcciones && count($direcciones) > 0)
                        @foreach ($direcciones as $direccion)
                            <option value="{{ $direccion->id }}">{{ $direccion->calle }}, {{ $direccion->numero }}, {{ $direccion->codigoPostal }}, {{ $direccion->provincia }}</option>
                        @endforeach
                    @else
                        <option value="">No hay direcciones disponibles</option>
                    @endif
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Pagar</button>
        </form>
    </div> 
</body>

</html>
