<nav id="navbar">
  <div class="nav-inner">
    <a href="<?= base_url('/') ?>" class="nav-logo">
      <img src="<?= base_url('img/logo.jpeg') ?>" alt="Logo Ayiyikoh FabLab">
      <div>
        <div class="nav-logo-text">Ayiyikoh</div>
        <div class="nav-logo-sub">Fablab &amp; Incubateur</div>
      </div>
    </a>

    <ul class="nav-links" id="navLinks">
      <li><a href="<?= base_url('/') ?>#hero"        class="active">Accueil</a></li>
      <li><a href="<?= base_url('/') ?>#formations">Formations &amp; Ateliers</a></li>
      <li><a href="<?= base_url('/') ?>#adhesion">Adhésion &amp; Tarifs</a></li>
      <li><a href="<?= base_url('/') ?>#projets">Projets &amp; Tutos</a></li>
      <!-- <li><a href="<?= base_url('/') ?>#entreprises">Offre Entreprises</a></li> -->
      <li><a href="<?= base_url('/') ?>#contact">Contact</a></li>
    </ul>

    <a href="<?= base_url('/') ?>#adhesion" class="btn-teal nav-cta" style="padding:10px 20px;font-size:.84rem;">
      <i class="bi bi-person-plus-fill"></i> Adhérer
    </a>

    <button class="hamburger" id="hamburger" aria-label="Ouvrir le menu">
      <span></span>
      <span></span>
      <span></span>
    </button>
  </div>
</nav>
