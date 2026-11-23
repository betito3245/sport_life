<?php
include 'conexion.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST["nombre"];
    $correo = $_POST["correo"];
    $contrasena = $_POST["contrasena"];

    $sql = "SELECT * FROM registro WHERE correo = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $correo);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        echo "<script> alert('El correo electrónico ya existe, por favor crea una cuenta nueva');
        location.href = 'registro.php';
        </script>";
    } else {
        $sql = "INSERT INTO registro (nombre, correo, contrasena) VALUES (?, ?, ?)";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("sss", $nombre, $correo, $contrasena);

        if ($stmt->execute() === TRUE) {
            echo "<script> alert('Usuario creado exitosamente');
            location.href = 'iniciars.php';
            </script>";
        } else {
            echo "<script> alert('Error al crear el usuario');
            location.href = 'registro.php';
            </script>";
        }
    }

    $stmt->close();
    $conn->close();
}
?>