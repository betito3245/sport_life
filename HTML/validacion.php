<?php
// Incluir la conexión (que utiliza la variable $conn)
include("conexion.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $correo = trim($_POST['correo']);
    $contrasena = trim($_POST['contrasena']);

    // Consulta preparada en la tabla 'registro'
    $sql = "SELECT * FROM registro WHERE correo = ?";
    $stmt = mysqli_prepare($conn, $sql);
    
    if ($stmt) {
        mysqli_stmt_bind_param($stmt, "s", $correo);
        mysqli_stmt_execute($stmt);
        $resultado = mysqli_stmt_get_result($stmt);

        if ($fila = mysqli_fetch_assoc($resultado)) {
            // Verificamos la contraseña (compatible con 'contrasena' o 'password')
            $pass_registrada = !empty($fila['contrasena']) ? $fila['contrasena'] : $fila['password'];

            if ($contrasena === $pass_registrada) {
                // Inicio de sesión exitoso -> Redirige a tu página principal en HTML
                session_start();
                $_SESSION['correo'] = $correo;
                header("Location: Inicio.html");
                exit();
            } else {
                // Contraseña incorrecta -> Regresa al login con el aviso limpio
                header("Location: iniciars.php?error=contrasena_incorrecta");
                exit();
            }
        } else {
            // Cuenta inexistente -> Regresa al login con el aviso limpio
            header("Location: iniciars.php?error=no_registrado");
            exit();
        }

        mysqli_stmt_close($stmt);
    } else {
        header("Location: iniciars.php?error=error_sistema");
        exit();
    }

    mysqli_close($conn);
} else {
    header("Location: iniciars.php");
    exit();
}
?>