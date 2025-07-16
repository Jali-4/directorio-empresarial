<!DOCTYPE html>
<html>
<head>
    <title>Mensaje de contacto</title>
</head>
<body>
    <h1>Mensaje de contacto</h1>
    <p><strong>Nombre:</strong> {{ $details['name'] }}</p>
    <p><strong>Teléfono:</strong> {{ $details['phone'] }}</p>
    <p><strong>Correo electrónico:</strong> {{ $details['email'] }}</p>
    <p><strong>Mensaje:</strong> {{ $details['message'] }}</p>
</body>
</html>