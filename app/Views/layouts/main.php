<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?= $title ?? 'Ayiyikoh FabLab & Incubateur' ?> — Abidjan, Côte d'Ivoire</title>
  <meta name="description" content="<?= $meta_description ?? 'Ayiyikoh FabLab & Incubateur — Espace de fabrication numérique et d\'innovation ouvert à tous à Abidjan.' ?>">

  <!-- Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:ital,opsz,wght@0,9..40,300;0,9..40,400;0,9..40,500;0,9..40,600;0,9..40,700;0,9..40,800;1,9..40,400&family=Syne:wght@400;500;600;700;800&display=swap" rel="stylesheet">

  <!-- Bootstrap 5.3 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

  <!-- AOS Animations -->
  <link href="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.css" rel="stylesheet">

  <!-- Bootstrap Icons -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

  <!-- CSS Ayiyikoh -->
  <link rel="stylesheet" href="<?= base_url('css/ayiyikoh.css') ?>">

  <?= $this->renderSection('head_extra') ?>
</head>
<body>

  <?= view('partials/_navbar') ?>

  <main>
    <?= $this->renderSection('content') ?>
  </main>

  <?= view('partials/_footer') ?>

  <button id="scrollTop" aria-label="Retour en haut">
    <i class="bi bi-arrow-up"></i>
  </button>

  <!-- Bootstrap JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

  <!-- AOS -->
  <script src="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.js"></script>

  <!-- JS Ayiyikoh -->
  <script src="<?= base_url('js/ayiyikoh.js') ?>"></script>

  <?= $this->renderSection('scripts') ?>
</body>
</html>
