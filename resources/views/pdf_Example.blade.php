<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>PDF de Ejemplo</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 40px;
        }
        .header {
            text-align: center;
            margin-bottom: 30px;
        }
        .content {
            margin-top: 20px;
        }
        .date {
            text-align: right;
            margin-bottom: 20px;
        }
    </style>
</head>
<body>
    <div class="header">
        <h1>Documento PDF de Ejemplo</h1>
    </div>

    <div class="date">
        Fecha: {{ $date }}
    </div>

    <div class="content">
        <h2>Bienvenido/a {{ $name }}</h2>
        <p>Este es un ejemplo de PDF generado con Laravel y DomPDF.</p>
    </div>
</body>
</html>
