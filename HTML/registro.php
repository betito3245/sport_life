<?php
$mensaje = "";
if (isset($_GET['sesion']) && $_GET['sesion'] === 'cerrada') {
    $mensaje = "Cerraste sesión exitosamente";
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../CSS/registro.css">
    <title>Registro</title>
    <style>
        .aviso-exito {
            background-color: #d4edda;
            color: #155724;
            border: 1px solid #c3e6cb;
            padding: 12px 16px;
            border-radius: 6px;
            margin-bottom: 16px;
            font-family: Arial, Helvetica, sans-serif;
            font-size: 15px;
            font-weight: bold;
        }
    </style>
</head>
<body>
    <?php if ($mensaje !== ""): ?>
        <div class="aviso-exito">
            <?php echo $mensaje; ?>
        </div>
    <?php endif; ?>

    <form action="guardar.php" method="POST">
        <label for="nombre">Nombre:</label>
        <input id="nombre" type="text" name="nombre" required><br><br>
        
        <label for="email">Correo:</label>
        <input id="email" type="email" name="correo" required><br><br>
        
        <label for="contrasena">Contraseña:</label>
        <input id="contrasena" type="password" name="contrasena" required><br><br>
        
        <button type="submit">Registrarme</button>
    </form>
</body>
</html>