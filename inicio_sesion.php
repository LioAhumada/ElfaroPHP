<?php
session_start();

require_once 'clases.php';

$filepath = 'usuarios.json';

if (!file_exists($filepath)) {
    echo "No hay usuarios registrados.";
    exit;
}

$data = file_get_contents($filepath);
$usuarios = json_decode($data, true);

$email = $_POST['email'];
$password = $_POST['password'];

foreach ($usuarios as $usuarioData) {
    if ($usuarioData['email'] === $email) {
        if (password_verify($password, $usuarioData['password'])) { 
            if ($usuarioData['tipoUsuario'] === 'lector') {
                $usuario = new Lector($usuarioData['nombre'], $usuarioData['email'], $usuarioData['password']);
            } elseif ($usuarioData['tipoUsuario'] === 'colaborador') {
                $usuario = new Colaborador($usuarioData['nombre'], $usuarioData['email'], $usuarioData['password']);
            }

            $_SESSION['usuario'] = [
                'nombre' => $usuario->getNombre(),
                'email' => $usuario->getEmail(),
                'tipoUsuario' => $usuarioData['tipoUsuario']
            ];

            // Agregar un console.log para verificar que se almacena correctamente
            echo "<script>
                    localStorage.setItem('tipoUsuario', '{$usuarioData['tipoUsuario']}');
                    localStorage.setItem('usuarioActual', '{$usuario->getNombre()}');
                    console.log('Usuario Actual:', '{$usuario->getNombre()}');
                    window.location.href = 'pagina_principal.php'; 
                  </script>";
            exit;
        } else {
            echo "Credenciales incorrectas.";
            exit;
        }
    }
}

echo "Credenciales incorrectas.";
?>


