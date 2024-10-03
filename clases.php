<?php
class Lector {
    private $nombre;
    private $email;
    private $password;

    public function __construct($nombre, $email, $password) {
        $this->nombre = $nombre;
        $this->email = $email;
        $this->password = password_hash($password, PASSWORD_DEFAULT);
    }

    public function getNombre() {
        return $this->nombre;
    }

    public function getEmail() {
        return $this->email;
    }

    public function verificarPassword($password) {
        return password_verify($password, $this->password);
    }

    public function verArticulos() {
        // Lógica para ver artículos
    }
}
class Colaborador {
    private $nombre;
    private $email;
    private $password;

    public function __construct($nombre, $email, $password) {
        $this->nombre = $nombre;
        $this->email = $email;
        $this->password = password_hash($password, PASSWORD_DEFAULT);
    }

    public function getNombre() {
        return $this->nombre;
    }

    public function getEmail() {
        return $this->email;
    }

    public function verificarPassword($password) {
        return password_verify($password, $this->password);
    }

    public function agregarArticulo($articulo) {
        // Lógica para agregar artículo
    }

    public function editarArticulo($articulo) {
        // Lógica para editar artículo
    }
}

// Definición de la clase Articulo
class Articulo {
    private $titulo;
    private $subtitulo;
    private $descripcion;
    private $fecha;
    private $fuente;
    private $imagen;
    private $seccion;

    // Constructor
    public function __construct($titulo,$subtitulo, $descripcion, $fecha, $fuente, $imagen, $seccion) {
        $this->titulo = $titulo;
        $this->subtitulo = $subtitulo;
        $this->descripcion = $descripcion;
        $this->fecha = $fecha;
        $this->fuente = $fuente;
        $this->imagen = $imagen;
        $this->seccion = $seccion;
    }

    // Métodos Getter
    public function getTitulo() {
        return $this->titulo;
    }
    public function getSubtitulo() {
        return $this->subtitulo;
    }

    public function getDescripcion() {
        return $this->descripcion;
    }

    public function getFecha() {
        return $this->fecha;
    }

    public function getFuente() {
        return $this->fuente;
    }

    public function getImagen() {
        return $this->imagen;
    }

    public function getSeccion() {
        return $this->seccion;
    }

    // Otros métodos, como guardar artículo, actualizar, etc., pueden ser añadidos aquí.
}

class Contacto {
    private $nombre;
    private $email;
    private $mensaje;

    // Constructor
    public function __construct($nombre, $email, $mensaje) {
        $this->nombre = htmlspecialchars($nombre);
        $this->email = htmlspecialchars($email);
        $this->mensaje = htmlspecialchars($mensaje);
    }

    // Método para enviar el correo
    public function enviarCorreo() {
        $to = "tucorreo@ejemplo.com"; // Cambia a tu correo
        $subject = "Nuevo mensaje de contacto";
        $body = "Nombre: {$this->nombre}\nCorreo: {$this->email}\nMensaje: {$this->mensaje}";
        $headers = "From: no-reply@tusitio.com";

        if (mail($to, $subject, $body, $headers)) {
            return true; // Enviado correctamente
        } else {
            return false; // Error al enviar
        }
    }
}
?>