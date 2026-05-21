<nav id="navbar">
  <div class="nav-inner">
    <a href="<?= base_url('/') ?>" class="nav-logo">
      <img src="<?= base_url('img/logo.png') ?>" alt="Logo Ayiyikoh FabLab">
    </a>

    <ul class="nav-links" id="navLinks">
      <li><a href="<?= base_url('/') ?>#hero"  class="active">Accueil</a></li>
      <li><a href="<?= base_url('/') ?>#about">Qui sommes-nous</a></li>
      <!-- <li><a href="<?= base_url('/') ?>#contact">Contact</a></li> -->
      <!-- <li><a href="<?= base_url('/') ?>#formations">Formations &amp; Ateliers</a></li> -->
      <!-- <li><a href="<?= base_url('/') ?>#adhesion">Adhésion &amp; Tarifs</a></li> -->
      <!-- <li><a href="<?= base_url('/') ?>#projets">Projets &amp; Tutos</a></li> -->
    </ul>

    <a href="<?= base_url('/') ?>#contact" class="btn-teal nav-cta" style="padding:10px 20px;font-size:.84rem;">
      <i class="bi bi-envelope-fill"></i> Nous contacter
    </a>

    <button class="hamburger" id="hamburger" aria-label="Ouvrir le menu">
      <span></span>
      <span></span>
      <span></span>
    </button>
  </div>
</nav>
