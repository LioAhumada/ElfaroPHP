<?php
include 'clases.php'; // Asegúrate de que este archivo contiene la definición de la clase Articulo
include 'conexion.php'; // Conexión a la base de datos

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Recogiendo datos del formulario
    $titulo = $_POST['titulo'];
    $subtitulo = $_POST['subtitulo'];
    $fecha = $_POST['fecha'];
    $fuente = $_POST['fuente'];
    $descripcion = $_POST['descripcion'];
    $seccion = $_POST['seccion'];

    // Manejo de la imagen
    $imagen = null;
    if (isset($_FILES['imagen']) && $_FILES['imagen']['error'] === UPLOAD_ERR_OK) {
        $imagen = 'imagenes/' . basename($_FILES['imagen']['name']);
        move_uploaded_file($_FILES['imagen']['tmp_name'], $imagen);
    }

    // Creando una instancia de Articulo
    $articulo = new Articulo($titulo, $subtitulo, $descripcion, $fecha, $fuente, $imagen, $seccion);

    // Guardar el artículo en la base de datos
    $sql = "INSERT INTO articulos (titulo, subtitulo, descripcion, fecha, fuente, imagen, seccion) VALUES (?, ?, ?, ?, ?, ?, ?)";
    $stmt = $conexion->prepare($sql);
    
    // Ejecutar la consulta
    if ($stmt->execute([
        $articulo->getTitulo(),
        $articulo->getSubtitulo(),
        $articulo->getDescripcion(),
        $articulo->getFecha(),
        $articulo->getFuente(),
        $articulo->getImagen(),
        $articulo->getSeccion()
    ])) {
        echo "Artículo agregado exitosamente.";
    } else {
        echo "Error al agregar el artículo.";
    }
}
?>
