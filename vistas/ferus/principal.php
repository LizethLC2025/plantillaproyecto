<!-- ventana personal FERUS php -->

<?php require('vistas/header.php'); ?>

       <!--img TITULO-->
        <div class="titulo-container">
        <img src="../ferus/img/nuevoferusletra.webp" alt="Título Ferus" class="titulo-imagen">
        </div>

    
     <!--SOBRE FERUS-->
    <section class="sobre-ferus">
    <article class="descripcion-texto">
        <h2>Sobre Ferus</h2>
        <p>Ferus es una marca personal que explora la creatividad desde el caos, lo onírico y lo intuitivo.</p>
        <p>Con un enfoque experimental, sus proyectos fusionan animación, diseño de personajes y narrativa visual.</p>
    </article>

    <aside class="imagen-ferus">
        <img src="img/Ferret yesyes.webp" alt="Ilustración de Ferus">
    </aside>
    </section>


    <!-- PROYECTOS -->
 <div class="grid-container">
  <div class="card" onclick="abrirModalYT('keSAfvhu1Q8')">
    <img src="../ferus/img/aethas.webp" alt="Proyecto 1">
    <div class="card-title">Diseño de videojuegos</div>
  </div>

  <div class="card" onclick="abrirModalYT('eNy_IGbQ7ZE?si=XM92xBO1wRjpEGoz')">
    <img src="../ferus/img/kahir.webp" alt="Proyecto 2">
    <div class="card-title">Diseño de personajes</div>
  </div>

  <div class="card" onclick="abrirModalYT('Hr7M24w-T30?si=7SCZBHjU1fr_VM1P')">
    <img src="../ferus/img/aura.webp" alt="Proyecto 3">
    <div class="card-title">Animatic</div>
  </div>
</div>



<!-- MODAL DE VIDEOS YOUTUBE -->
<div id="videoModal" class="modal">
  <div class="modal-content">
    <iframe id="modalYT" allowfullscreen allow="autoplay; encrypted-media"></iframe>
  </div>
</div>


<!--CONTROLES DE LOS MODALES-->
<script>
function abrirModalYT(videoID) {
  const modal = document.getElementById("videoModal");
  const iframe = document.getElementById("modalYT");

  iframe.src = `https://www.youtube.com/embed/${videoID}?autoplay=1`;
  modal.style.display = "flex";
}

function cerrarModal() {
  const modal = document.getElementById("videoModal");
  const iframe = document.getElementById("modalYT");

  iframe.src = "";
  modal.style.display = "none";
}

window.onclick = function(event) {
  const modal = document.getElementById("videoModal");
  if (event.target === modal) {
    cerrarModal();
  }
};
</script>


<?php require('vistas/footer.php'); ?>