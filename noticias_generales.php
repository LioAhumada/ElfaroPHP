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
                      <li class="nav-item"><a class="nav-link" href="pagina_principal.php">Inicio</a></li>
                      <li class="nav-item"><a class="nav-link" href="deportes.php">Deportes</a></li>
                      <li class="nav-item"><a class="nav-link" href="negocios.php">Negocios</a></li>
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
    
    <main>
        <h1>Sección de Noticias Generales</h1>
        <!-- Aquí puedes incluir el contenido de la sección de deportes -->
        <div class="container">
            <div class="row">
                <!-- Artículos de deportes -->
                <div class="col-md-4">
                    
                </div>
                <!-- Repite para más artículos -->
            </div>
        </div>
    </main>

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
                
                
            </div>
            
        </div>
    </div>
</footer>


   


  


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
</body>
</html>

