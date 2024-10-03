<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EL Faro</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <script>
        function manejarBotones() {
            const tipoUsuario = localStorage.getItem('tipoUsuario');
            const botonAgregar = document.getElementById('btnAgregarArticulo');
            const botonContacto = document.getElementById('btnContacto');

            if (tipoUsuario === 'colaborador') {
                botonAgregar.style.display = 'inline-block'; // Muestra el botón de agregar para colaboradores
                botonContacto.style.display = 'none'; // Oculta el botón de contacto para colaboradores
            } else if (tipoUsuario === 'lector') {
                botonAgregar.style.display = 'none'; // Oculta el botón de agregar para lectores
                botonContacto.style.display = 'inline-block'; // Muestra el botón de contacto para lectores
            } else {
                botonAgregar.style.display = 'none'; // Oculta ambos si no hay tipo de usuario
                botonContacto.style.display = 'none';
            }
        }

        function mostrarUsuarioActual() {
        const usuarioNav = document.getElementById('usuarioActual');
        const usuarioActual = localStorage.getItem('usuarioActual') || 'No ha iniciado sesión';
        console.log('Recuperando Usuario Actual:', usuarioActual); // Para verificar la recuperación
        usuarioNav.innerText = `Bienvenido  ${usuarioActual}`;
    }
    function updateDateTime() {
            const now = new Date();
            const options = { weekday: 'long', year: 'numeric', month: 'long', day: 'numeric' };
            const formattedDate = now.toLocaleDateString('es-CL', options);
            const formattedTime = now.toLocaleTimeString('es-CL', { hour12: false });
            document.getElementById('date-time').textContent = `${formattedDate}, ${formattedTime}`;
        }

        

    window.onload = function() {
        manejarBotones();
        mostrarUsuarioActual();
        setInterval(updateDateTime, 1000);
        updateDateTime();
    };
    </script>
</head>
<body>
<header class="text-white p-3">
    <nav class="navbar navbar-expand-lg navbar-dark">
        <div class="container-fluid d-flex justify-content-between align-items-center">
            <a class="navbar-brand" href="#"><h1 style="color: red;">El Faro</h1></a>
            <div id="date-time" class="text-end me-3"></div>
            <div class="d-flex justify-content-center flex-grow-1">
                <div id="usuarioActual" class="text-center me-3" style="color: white;"></div> <!-- Aquí se mostrará el usuario actual -->
            </div>
            <button id="btnAgregarArticulo" type="button" class="btn btn-primary" style="display:none;" data-bs-toggle="modal" data-bs-target="#agregarArticuloModal">
                Agregar Artículo
            </button>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link" href="noticias_generales.php">Noticias</a></li>
                    <li class="nav-item"><a class="nav-link" href="deportes.php">Deportes</a></li>
                    <li class="nav-item"><a class="nav-link" href="negocios.php">Negocios</a></li>
                    <li class="nav-item">
                        <a class="btn btn-danger ms-3" href="index.php" role="button">Cerrar Sesión</a>
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
                <strong>Aviso 1:</strong> Este es el primer aviso importante. ¡No te lo pierdas!
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
          <!-- Contenido Principal -->
          <div class="col-md-9">
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
                          <div class="card">
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
          <div class="col-md-3" style="background-color: #ff6a00; color: white; padding: 15px;">
              <h4>Artículos Destacados</h4>
              <ul>
                  <li>
                      <div class="card-body">
                          <h5 class="card-title">Título del Artículo</h5>
                          <p class="card-text">Breve descripción del artículo destacado.</p>
                          <a href="#" class="btn btn-primary">Leer más</a>
                      </div>
                  </li>
                  <li>
                      <div class="card-body">
                          <h5 class="card-title">Título del Artículo</h5>
                          <p class="card-text">Breve descripción del artículo destacado.</p>
                          <a href="#" class="btn btn-primary">Leer más</a>
                      </div>
                  </li>
                  <li>
                      <div class="card-body">
                          <h5 class="card-title">Título del Artículo</h5>
                          <p class="card-text">Breve descripción del artículo destacado.</p>
                          <a href="#" class="btn btn-primary">Leer más</a>
                      </div>
                  </li>
              </ul>
          </div>
      </div>
  </div>

  <footer>
      <div class="container-fluid bg-secondary text-white p-5">
          <div class="row">
              <div class="col-6 text-center">
                  <div class="ms-auto">Nuestras redes sociales</div>
                  <div>
                      <a href="https://www.facebook.com" target="_blank" class="text-white me-3"><i class="fab fa-facebook fa-2x"></i></a>
                      <a href="https://www.twitter.com" target="_blank" class="text-white me-3"><i class="fab fa-twitter fa-2x"></i></a>
                      <a href="https://www.instagram.com" target="_blank" class="text-white me-3"><i class="fab fa-instagram fa-2x"></i></a>
                      <a href="https://www.linkedin.com" target="_blank" class="text-white"><i class="fab fa-linkedin fa-2x"></i></a>
                  </div>
                  <div class="mt-3"><p>&copy; 2024 El Faro. Todos los derechos reservados.</p></div>
              </div>
              <div class="col-6 text-center">
                  <div class="ms-auto">Más sobre nosotros</div>
                  <div>
                      <a href="#" style="color: aliceblue;">Nuestra misión</a><br>
                      <a href="#" style="color: aliceblue;">Trabaja con nosotros</a><br>
                      <a href="#" style="color: aliceblue;">Preguntas frecuentes</a><br>
                      <a href="#" style="color: aliceblue;">Políticas</a>
                  </div><br>
                  <button id='btnContacto' type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#contactModal">
        Contacto
    </button>
              </div>
          </div>
      </div>
  </footer>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
  <script src="script.js"></script>
  <!-- Modal de Agregar Artículo -->
<!-- Modal de Agregar Artículo -->
<div class="modal fade" id="agregarArticuloModal" tabindex="-1" aria-labelledby="agregarArticuloModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="agregarArticuloModalLabel">Agregar Artículo</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
            <form id="agregarArticuloForm" enctype="multipart/form-data">
    <div class="mb-3">
        <label for="titulo" class="form-label">Título</label>
        <input type="text" class="form-control" id="titulo" name="titulo" required>
    </div>
    <div class="mb-3">
        <label for="subtitulo" class="form-label">Subtítulo</label>
        <input type="text" class="form-control" id="subtitulo" name="subtitulo" required>
    </div>
    <div class="mb-3">
        <label for="descripcion" class="form-label">Descripción</label>
        <textarea class="form-control" id="descripcion" name="descripcion" rows="3" required></textarea>
    </div>
    <div class="mb-3">
        <label for="fuente" class="form-label">Fuente</label>
        <input type="text" class="form-control" id="fuente" name="fuente" required>
    </div>
    <div class="mb-3">
        <label for="imagen" class="form-label">Imagen (opcional)</label>
        <input type="file" class="form-control" id="imagen" name="imagen">
    </div>
    <div class="mb-3">
        <label for="seccion" class="form-label">Sección</label>
        <select class="form-select" id="seccion" name="seccion" required>
            <option value="">Seleccione una sección</option>
            <option value="deportes">Deportes</option>
            <option value="negocios">Negocios</option>
            <option value="noticias generales">Noticias Generales</option>
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
</body>
</html>
