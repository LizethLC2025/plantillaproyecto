<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <link rel="icon" href="img/icon_gigglioot.webp" type="image/webp">
  <title>Portafolio - Gigglioot</title>
  <link rel="stylesheet" href="public/bootstrap/css/bootstrap.min.css">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
  <link rel="stylesheet" href="css/style.css">
  <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet">



</head>
<body>

  <header class="portafolio-hero text-center py-5">
   <img src="img/icon_gigglioot.webp" alt="Mi Logo" class="hero-logo mb-3">

    <h1 class="hero-title">Mi Portafolio</h1>
    <p class="hero-text">Dale un vistazo a mis trabajos a lo largo de la carrera.</p>
  </header>

 <div class="container portfolio-section py-5">

    <h2 class="subtitle mb-4 text-center">Artwork</h2>
    <div class="row">
      <?php
        $proyectos = [
          ["img/portada_manualcorporativo.webp", "Manual Corporativo", "https://drive.google.com/file/d/1Slzw6qn_qwLlgYJzXd92tePRuqSCdCcA/view?usp=sharing"],
          ["img/portada_storytelling.webp", "Storytelling", "https://drive.google.com/file/d/1TDJHFNyiz-DsG6fEJByaQY7sNRJcrO9G/view?usp=sharing"],
          ["img/portada_ciervo.webp", "Ciervo Blend", "https://drive.google.com/file/d/1jqmk_HSdVufmhUnjR-ung9zFptUx1Kgl/view?usp=sharing"],
          ["img/portada_posterlooktwice.webp", "Look Twice", "https://drive.google.com/file/d/1Cp5Og91kBd5sCsgQuvKP2V0xTumM2HTb/view?usp=sharing"]
        ];

        foreach ($proyectos as $p) {
          echo '
          <div class="col-md-6 col-lg-3 mb-4">
            <div class="card trabajo-card text-center">
              <a href="'.$p[2].'" target="_blank">
                <img src="'.$p[0].'" class="card-img-top" alt="'.$p[1].'">
              </a>
              <div class="card-body">
                <p class="card-usuario">'.$p[1].'</p>
              </div>
            </div>
          </div>';
        }
      ?>
    </div>

    <div class="text-center mt-4">
      <a href="https://instagram.com/gigglioot" target="_blank" class="btn btn-instagram">
        <i class="bi bi-instagram"></i> Instagram
      </a>
    </div>
  </div>

  <footer class="text-center py-4 text-white bg-dark">
    &copy; 2025 Gigglioot. Todos los derechos reservados.
  </footer>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

