<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Ruta corregida para encontrar el CSS desde la carpeta HTML -->
    <link rel="stylesheet" type="text/css" href="../CSS/iniciars.css">
    <title>Iniciar Sesión - Sport Life</title>
</head>
<body>
<div class="login-container">
    <form action="validacion.php" method="POST">
        <h2>Iniciar Sesión</h2>
        <p class="subtit">Bienvenido de nuevo</p>

        <!-- AVISO LIMPIO DE LA PROPIA PÁGINA (Sin alertas flotantes de JS) -->
        <?php if (isset($_GET['error'])): ?>
            <div class="alerta-error">
                <?php 
                    if ($_GET['error'] == 'no_registrado') {
                        echo "Esta cuenta no existe o no ha sido creada. Debes registrarte antes de poder iniciar sesión.";
                    } elseif ($_GET['error'] == 'contrasena_incorrecta') {
                        echo "La contraseña es incorrecta. Por favor, verifícala.";
                    } else {
                        echo "Ocurrió un error al intentar iniciar sesión. Inténtalo de nuevo.";
                    }
                ?>
            </div>
        <?php endif; ?>

        <div class="grupo-input">
            <label for="correo">Correo electrónico</label>
            <input id="correo" type="email" name="correo" placeholder="ejemplo@correo.com" required>
        </div>

        <div class="grupo-input">
            <label for="password">Contraseña</label>
            <input id="password" type="password" name="contrasena" placeholder="••••••••" required>
        </div>

        <button type="submit" class="btn-submit">Iniciar Sesión</button>
        
        <div class="enlace-registro">
            <a href="registro.php">¿Aún no tienes cuenta? <span>Regístrate aquí</span></a>
        </div>
    </form>
</div>
</body>
</html>