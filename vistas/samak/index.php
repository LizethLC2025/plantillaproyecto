<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mi Portafolio - Samak</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@700&display=swap" rel="stylesheet">
    <link rel="icon" href="imagenes/samaklogo.webp" type="image/webp">
</head>
<body>

    <?php include 'includes/header.php'; ?>

    <main class="projects-container">
        <div class="project-card" onclick="location.href='https://drive.google.com/file/d/17FIzWSXPuZcnSpoeNwuVp4OnQAc1qNex/view?usp=sharing'">
            <img src="imagenes/kuroki.webp" alt="Diseño de Personaje Kuroki">
            <div class="project-description">
                <h3>KUROKI</h3>
                <h4>Diseño de Personaje</h4>
                <p>Explora la personalidad y detalles de Kuroki, un diseño de personaje único.</p>
            </div>
        </div>

        <div class="project-card" onclick="location.href='https://drive.google.com/file/d/1i-2jR-7j6AddjKt-6FNi8GqGV5nAJXcb/view?usp=sharing'">
            <img src="imagenes/lamagiadelanoche.webp" alt="Corto Animado 3D La Magia de la Noche">
            <div class="project-description">
                <h3>LA MAGIA DE LA NOCHE</h3>
                <h4>Corto Animado 3D</h4>
                <p>Un viaje visual cautivador a través de la animación 3D y su encanto.</p>
            </div>
        </div>

        <div class="project-card" onclick="location.href='https://drive.google.com/file/d/1VrycwTqP5PVR_YcV6jMnRBWQP5gj1Wcf/view?usp=sharing'">
            <img src="imagenes/penumbra.webp" alt="Corto IA Penumbra">
            <div class="project-description">
                <h3>PENUMBRA</h3>
                <h4>Corto IA</h4>
                <p>Descubre un universo narrativo creado con la innovación de la inteligencia artificial.</p>
            </div>
        </div>
    </main>

    <div class="button-container">
        <a href="" class="btn-more-projects">Volver a casa</a>
    </div>
    <?php include 'includes/footer.php'; ?>

</body>
</html>

