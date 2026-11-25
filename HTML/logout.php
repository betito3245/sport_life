<?php
session_start();
$_SESSION = array();

if (ini_get("session.use_cookies")) {
    $params = session_get_cookie_params();
    setcookie(
        session_name(),
        '',
        time() - 42000,
        $params["path"],
        $params["domain"],
        $params["secure"],
        $params["httponly"]
    );
}

session_destroy();
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cerrando sesión</title>
    <style>
        body {
            font-family: Arial, Helvetica, sans-serif;
            background-color: #8588ee;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        .aviso-box {
            background-color: #ffffff;
            color: #155724;
            border: 2px solid #28a745;
            padding: 25px 35px;
            border-radius: 8px;
            text-align: center;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.25);
        }
        .aviso-box p {
            font-size: 20px;
            font-weight: bold;
            margin: 0;
        }
    </style>
</head>
<body>
    <div class="aviso-box">
        <p>Cerraste sesión exitosamente</p>
    </div>

    <script>
        setTimeout(function () {
            window.location.href = "registro.php?sesion=cerrada";
        }, 1500);
    </script>
</body>
</html>