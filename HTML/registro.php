<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../CSS/registro.css">
    <title>Registro</title>
</head>
<body>
    <!-- Aquí se crea un formulario con un identificador único llamado "registro" -->
    <form action="guardar.php" method="POST">
        <!-- Etiqueta para el campo de texto "nombre" -->
        <label for="nombre">Nombre:</label>
        <!-- Campo de texto para ingresar el nombre -->
        <input id="nombre" type="text" name="nombre" required><br><br>
        
        <!-- Etiqueta para el campo de correo electrónico -->
        <label for="email">Correo:</label>
        <!-- Campo de texto para ingresar el correo electrónico -->
        <input id="email" type="email" name="correo" required><br><br>
        
        <!-- Etiqueta para el campo de contraseña -->
        <label for="contrasena">Contraseña:</label>
        <!-- Campo de texto para ingresar la contraseña -->
        <input id="contrasena" type="password" name="contrasena" required><br><br>
        
        <!-- Botón para enviar el formulario -->
        <button type="submit">Registrarme</button>
    </form>
</body>
</html>
