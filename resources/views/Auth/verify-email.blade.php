<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Verificar Correo Electrónico</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .verification-container {
            background-color: #fff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }

        h2 {
            text-align: center;
            margin-bottom: 20px;
        }

        p {
            text-align: center;
            margin-bottom: 20px;
        }

        .verification-button {
            display: block;
            margin: 0 auto;
            padding: 10px 20px;
            background-color: #007bff;
            color: #fff;
            text-decoration: none;
            border-radius: 5px;
            transition: background-color 0.3s ease;
        }

        .verification-button:hover {
            background-color: #0056b3;
        }
    </style>
</head>

<body>
    <form action="{{ route('verification.send') }}" method="post">
        @csrf
        <div class="verification-container">
            <h2>Verificar Correo Electrónico</h2>
            <p>Haz clic en el botón de abajo para verificar tu correo electrónico.</p>
            <button type="submit" class="verification-button">Enviar Correo Electrónico</button>
        </div>
    </form>
</body>

</html>