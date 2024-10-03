<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EL Faro</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
  
</head>
<body>
  <header class="text-white p-3">
  <nav class="navbar navbar-expand-lg navbar-dark">
    <div class="container-fluid">
        <a class="navbar-brand" href="#"><h1>El Faro</h1></a>
        <div id="date-time" class="text-end me-3"></div>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item"><a class="nav-link" href="">Noticias</a></li>
                <li class="nav-item"><a class="nav-link" href="">Deportes</a></li>
                <li class="nav-item"><a class="nav-link" href="">Negocios</a></li>
                <li class="nav-item">
    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#authModal">
        Iniciar Sesión / Registrar
    </button>
</li>

                
            </ul>
        </div>
    </div>
</nav>
  </header>
   <!-- Sección de Avisos con Carrusel -->
   <div id="avisoCarrusel" class="carousel slide mb-3" data-bs-ride="carousel">
    <div class="carousel-inner">
        <div class="carousel-item active">
            <div class="alert alert-info text-center mb-0" role="alert">
                <strong>Aviso 1:</strong> Recuerda registrarte e iniciar sesion para acceder a nuestras secciones. ¡No te lo pierdas!
            </div>
        </div>
        <div class="carousel-item">
            <div class="alert alert-warning text-center mb-0" role="alert">
                <strong>Aviso 2:</strong> Este es un aviso importante sobre la seguridad. ¡Infórmate!
            </div>
        </div>
        <div class="carousel-item">
            <div class="alert alert-danger text-center mb-0" role="alert">
                <strong>Aviso 3:</strong> No olvides participar en nuestra encuesta. ¡Tu opinión cuenta!
            </div>
        </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#avisoCarrusel" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Anterior</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#avisoCarrusel" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Siguiente</span>
    </button>
</div>

  <div class="container-fluid">
    <div class="row">
        <!-- Contenido principal a la izquierda -->
        <div class="col-md-9">
            <div class="d-flex mb-3"> <!-- Contenedor flex para alinear botones -->
            
            

            </div>
            <h2>Contenido Principal</h2>
            <p>Aquí irán los artículos principales...</p>
            <div class="container my-5">
                <h2 class="mb-4">Artículos Recientes</h2>
                <div class="row">
                    <!-- Primer artículo -->
                    <div class="col-md-4">
                        <div class="card">
                            <img src="https://via.placeholder.com/300x200" class="card-img-top" alt="Imagen del artículo">
                            <div class="card-body">
                                <h5 class="card-title">Título del Artículo 1</h5>
                                <p class="card-text">Breve descripción del artículo reciente.</p>
                                <a href="#" class="btn btn-primary">Leer más</a>
                            </div>
                        </div>
                    </div>
        
                    <!-- Segundo artículo -->
                    <div class="col-md-4">
                        <div class="card">
                            <img src="https://via.placeholder.com/300x200" class="card-img-top" alt="Imagen del artículo">
                            <div class="card-body">
                                <h5 class="card-title">Título del Artículo 2</h5>
                                <p class="card-text">Breve descripción del artículo reciente.</p>
                                <a href="#" class="btn btn-primary">Leer más</a>
                            </div>
                        </div>
                    </div>
        
                    <!-- Tercer artículo -->
                    <div class="col-md-4">
                        <div class="card ">
                            <img src="https://via.placeholder.com/300x200" class="card-img-top" alt="Imagen del artículo">
                            <div class="card-body">
                                <h5 class="card-title">Título del Artículo 3</h5>
                                <p class="card-text">Breve descripción del artículo reciente.</p>
                                <a href="#" class="btn btn-primary">Leer más</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Barra lateral a la derecha -->
        <div class="col sidebar col-md-12 col-lg 3" style="background-color: #ff6a00df; height: 100vh; color: white; padding:auto;">
            <h4>Artículos Destacados</h4>
            <ul>
                <li> <div class="card-body">
                    <h5 class="card-title">Título del Artículo</h5>
                    <p class="card-text">Breve descripción del artículo destacado.</p>
                    <a href="#" class="btn btn-primary">Leer más</a>
                </div></li>
                <li><div class="card-body" >
                    <h5 class="card-title">Título del Artículo</h5>
                    <p class="card-text">Breve descripción del artículo destacado.</p>
                    <a href="#" class="btn btn-primary">Leer más</a>
                </div></li>
                <li><div class="card-body col-12 ">
                    <h5 class="card-title">Título del Artículo
                    </h5>
                    <p class="card-text">Breve descripción del artículo destacado.</p>
                    <a href="#" class="btn btn-primary">Leer más</a>
                </div></li>
            </ul>
        </div>
      </div>
  </div>
  <footer>
    <div class="container-fluid bg-secondary text-white p-5 ">
        <div class="row">
            <div class="col-6 text-center">
                <!-- Contenido columna 2 -->
                <div class="ms-auto">Nuestras redes sociales</div>
                <div>
                    <a href="https://www.facebook.com" target="_blank" class="text-white me-3"><i class="fab fa-facebook fa-2x"></i></a>
                    <a href="https://www.twitter.com" target="_blank" class="text-white me-3"><i class="fab fa-twitter fa-2x"></i></a>
                    <a href="https://www.instagram.com" target="_blank" class="text-white me-3"><i class="fab fa-instagram fa-2x"></i></a>
                    <a href="https://www.linkedin.com" target="_blank" class="text-white"><i class="fab fa-linkedin fa-2x"></i></a>
                </div>
                <div class="mt-3"><p> &copy; 2024 El Faro. Todos los derechos reservados.</p></div>
                

            </div>
            <div class="col-6 text-center">
                <!-- Contenido columna 1 -->
                <div class="ms-auto">Mas sobre nosotros</div>
                <div>
                    <a href="#" style="color: aliceblue;">Nuestra mision</a><br>
                    <a href="#" style="color: aliceblue;">Trabaja con nostros</a><br>
                    <a href="#" style="color: aliceblue;">Preguntas frecuentes</a><br>
                    <a href="#" style="color: aliceblue;">Polticas</a> </div><br>
                    <!-- Botón para abrir el modal -->
 <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#contactModal">
        Contacto
    </button>
             

                
            </div>
            
</footer>
<!-- Formulario para agregar artículo -->
<div class="modal fade" id="agregarArticuloModal" tabindex="-1" aria-labelledby="agregarArticuloModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="agregarArticuloModalLabel">Agregar Artículo</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form id="agregarArticuloForm" action="procesar_articulo.php" method="POST" enctype="multipart/form-data">
                    <div class="mb-3">
                        <label for="titulo" class="form-label">Título</label>
                        <input type="text" class="form-control" id="titulo" name="titulo" required>
                    </div>
                    <div class="mb-3">
                        <label for="subtitulo" class="form-label">Subtítulo</label>
                        <input type="text" class="form-control" id="subtitulo" name="subtitulo" required>
                    </div>
                    <div class="mb-3">
                        <label for="fecha" class="form-label">Fecha</label>
                        <input type="date" class="form-control" id="fecha" name="fecha" required>
                    </div>
                    <div class="mb-3">
                        <label for="fuente" class="form-label">Fuente</label>
                        <input type="text" class="form-control" id="fuente" name="fuente" required>
                    </div>
                    <div class="mb-3">
                        <label for="descripcion" class="form-label">Descripción</label>
                        <textarea class="form-control" id="descripcion" name="descripcion" rows="3" required></textarea>
                    </div>
                    <div class="mb-3">
                        <label for="imagen" class="form-label">Imagen (opcional)</label>
                        <input type="file" class="form-control" id="imagen" name="imagen" accept="image/*">
                    </div>
                    <div class="mb-3">
                        <label for="seccion" class="form-label">Sección</label>
                        <select class="form-select" id="seccion" name="seccion" required>
                            <option value="">Seleccione una sección</option>
                            <option value="noticias">Noticias</option>
                            <option value="deportes">Deportes</option>
                            <option value="negocios">Negocios</option>
                        </select>
                    </div>
                    <button type="submit" class="btn btn-primary">Agregar Artículo</button>
                </form>
            </div>
        </div>
    </div>
</div>
<!--logica formulario de contacto-->


    <!-- Modal -->
    <div class="modal fade" id="contactModal" tabindex="-1" aria-labelledby="contactModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="contactModalLabel">Formulario de Contacto</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form id="contactForm" action="procesar_contacto.php" method="POST">
                        <div class="mb-3">
                            <label for="nombre" class="form-label">Nombre</label>
                            <input type="text" class="form-control" id="nombre" name="nombre" required>
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label">Correo Electrónico</label>
                            <input type="email" class="form-control" id="email" name="email" required>
                        </div>
                        <div class="mb-3">
                            <label for="mensaje" class="form-label">Mensaje</label>
                            <textarea class="form-control" id="mensaje" name="mensaje" rows="3" required></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary">Enviar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>



   


  


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        // Función para mostrar la fecha y la hora
        function updateDateTime() {
            const now = new Date();
            const options = { weekday: 'long', year: 'numeric', month: 'long', day: 'numeric' };
            const formattedDate = now.toLocaleDateString('es-CL', options);
            const formattedTime = now.toLocaleTimeString('es-CL', { hour12: false });
            document.getElementById('date-time').textContent = `${formattedDate}, ${formattedTime}`;
        }

        setInterval(updateDateTime, 1000);
        updateDateTime();
    </script>
   <script>
    function cambiarCampoSeguridad() {
        const tipoUsuario = document.getElementById("tipoUsuario").value;
        const verificacionSeguridad = document.getElementById("verificacion-seguridad");

        if (tipoUsuario === "colaborador") {
            verificacionSeguridad.classList.remove("d-none"); // Mostrar el campo
            document.getElementById("codigo_seguridad").required = true; // Hacer que el campo sea obligatorio
        } else {
            verificacionSeguridad.classList.add("d-none"); // Ocultar el campo
            document.getElementById("codigo_seguridad").required = false; // No obligatorio
            document.getElementById("codigo_seguridad").value = ''; // Limpiar el valor
        }
    }
</script>
   


    <!-- Modal para Registro e Iniciar Sesión -->
<!-- Modal para Registro e Iniciar Sesión -->
<div class="modal fade" id="authModal" tabindex="-1" aria-labelledby="authModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <ul class="nav nav-tabs" id="myTab" role="tablist">
                    <li class="nav-item" role="presentation">
                        <a class="nav-link active" id="registro-tab" data-bs-toggle="tab" href="#registro" role="tab" aria-controls="registro" aria-selected="true">Registrar</a>
                    </li>
                    <li class="nav-item" role="presentation">
                        <a class="nav-link" id="iniciar-sesion-tab" data-bs-toggle="tab" href="#iniciar-sesion" role="tab" aria-controls="iniciar-sesion" aria-selected="false">Iniciar Sesión</a>
                    </li>
                </ul>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="tab-content" id="myTabContent">
                    <!-- Formulario de Registro -->
                    <div class="tab-pane fade show active" id="registro" role="tabpanel" aria-labelledby="registro-tab">
                        <form action="registrar_usuarios.php" method="post">
                            <div class="mb-3">
                                <label for="nombre" class="form-label">Nombre</label>
                                <input type="text" class="form-control" id="nombre" name="nombre" required>
                            </div>
                            <div class="mb-3">
                                <label for="email" class="form-label">Correo</label>
                                <input type="email" class="form-control" id="email" name="email" required>
                            </div>
                            <div class="mb-3">
                                <label for="tipoUsuario" class="form-label">Tipo de Usuario</label>
                                <select class="form-control" id="tipoUsuario" name="tipoUsuario" onchange="cambiarCampoSeguridad()" required>
                                    <option value="" disabled selected>Selecciona un tipo de usuario</option>
                                    <option value="colaborador">Colaborador</option>
                                    <option value="lector">Lector</option>
                                    
                                </select>
                            </div>
                            <div class="mb-3 d-none" id="verificacion-seguridad">
                                <label for="codigo_seguridad" class="form-label">Código de Seguridad</label>
                                <input type="text" class="form-control" id="codigo_seguridad" name="codigo_seguridad">
                            </div>
                            <div class="mb-3">
                                <label for="password" class="form-label">Contraseña</label>
                                <input type="password" class="form-control" id="password" name="password" required>
                            </div>
                            <button type="submit" class="btn btn-primary">Registrar</button>
                        </form>
                    </div>

                    <!-- Formulario de Iniciar Sesión -->
                    <div class="tab-pane fade" id="iniciar-sesion" role="tabpanel" aria-labelledby="iniciar-sesion-tab">
                        <form action="inicio_sesion.php" method="post">
                            <div class="mb-3">
                                <label for="email-login" class="form-label">Correo</label>
                                <input type="email" class="form-control" id="email-login" name="email" required>
                            </div>
                            <div class="mb-3">
                                <label for="password-login" class="form-label">Contraseña</label>
                                <input type="password" class="form-control" id="password-login" name="password" required>
                            </div>
                            <button type="submit" class="btn btn-primary">Iniciar Sesión</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>





</body>
</html>
