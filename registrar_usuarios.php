<?php
session_start();

require_once 'clases.php';

$filepath = 'usuarios.json';

$nombre = $_POST['nombre'];
$email = $_POST['email'];
$password = $_POST['password'];
$tipoUsuario = $_POST['tipoUsuario'];
$codigoSeguridad = $_POST['codigo_seguridad']; // Obtener el código de seguridad ingresado por el usuario

// Establecer el código de seguridad predefinido para comparación
$codigoSeguridadPredefinido = '1234'; // El código que deseas establecer como correcto

// Si el tipo de usuario es colaborador, verificar el código de seguridad
if ($tipoUsuario === 'colaborador' && $codigoSeguridad !== $codigoSeguridadPredefinido) {
    echo "El código de seguridad es incorrecto. No se puede registrar como colaborador.";
    exit;
}

$usuarios = [];
if (file_exists($filepath)) {
    $data = file_get_contents($filepath);
    $usuarios = json_decode($data, true);
}

// Verificar si el correo ya está registrado
foreach ($usuarios as $usuario) {
    if ($usuario['email'] === $email) {
        echo "El correo ya está registrado.";
        exit;
    }
}

// Crear la instancia del usuario
if ($tipoUsuario === 'lector') {
    $usuario = new Lector($nombre, $email, $password);
} else {
    $usuario = new Colaborador($nombre, $email, $password);
}

// Agregar el nuevo usuario al arreglo
$usuarios[] = [
    'tipoUsuario' => $tipoUsuario,
    'nombre' => $usuario->getNombre(),
    'email' => $usuario->getEmail(),
    'password' => password_hash($password, PASSWORD_DEFAULT), // Almacena la contraseña encriptada
];

// Guardar los datos de usuario en el archivo JSON
file_put_contents($filepath, json_encode($usuarios, JSON_PRETTY_PRINT));

echo "Registro exitoso. Puedes iniciar sesión ahora.";

?>