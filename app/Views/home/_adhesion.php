<section id="adhesion" class="section-wrap">
  <div class="container-fab">

    <div class="section-header centered" data-aos="fade-up">
      <span class="chip chip-teal mb-3">Adhésion &amp; Tarifs</span>
      <h2 class="section-title">Un espace, <span class="hl-teal">plusieurs niveaux.</span></h2>
      <p class="section-lead">Choisissez la formule qui correspond à votre usage. Tous les membres bénéficient de la communauté.</p>
    </div>

    <div class="pricing-grid">

      <div class="card-fab pricing-card" data-aos="fade-up">
        <div class="p-name">Découverte</div>
        <div class="p-price">0 <sup>FCFA</sup></div>
        <div class="p-period">Pour toujours</div>
        <div class="p-div"></div>
        <ul class="p-features">
          <li><i class="bi bi-check-circle-fill ok"></i> Accès aux événements publics</li>
          <li><i class="bi bi-check-circle-fill ok"></i> Newsletter &amp; Actualités</li>
          <li><i class="bi bi-check-circle-fill ok"></i> Forum communautaire</li>
          <li class="dim"><i class="bi bi-x-circle-fill off"></i> Accès machines</li>
          <li class="dim"><i class="bi bi-x-circle-fill off"></i> Open Lab</li>
        </ul>
        <a href="#contact" class="btn-outline btn-plan" data-plan="Découverte (gratuit)" style="width:100%;justify-content:center;text-decoration:none;">S'inscrire gratuitement</a>
      </div>

      <div class="card-fab pricing-card popular" data-aos="fade-up" data-aos-delay="80">
        <div class="pop-badge">⭐ Plus populaire</div>
        <div class="p-name">Maker</div>
        <div class="p-price">30 000 <sup>FCFA</sup></div>
        <div class="p-period">par ans · sans engagement</div>
        <div class="p-div"></div>
        <ul class="p-features">
          <li><i class="bi bi-check-circle-fill ok"></i> Tout Découverte inclus</li>
          <li><i class="bi bi-check-circle-fill ok"></i> Accès Open Lab (20h/mois)</li>
          <li><i class="bi bi-check-circle-fill ok"></i> −20% sur formations</li>
          <li class="dim"><i class="bi bi-x-circle-fill off"></i> Espace de stockage projet</li>
        </ul>
        <a href="#contact" class="btn-teal btn-plan" data-plan="Maker (30 000 FCFA/an)" style="width:100%;justify-content:center;text-decoration:none;">
          Devenir Maker <i class="bi bi-arrow-right"></i>
        </a>
      </div>

      <div class="card-fab pricing-card" data-aos="fade-up" data-aos-delay="160">
        <div class="p-name">Pro</div>
        <div class="p-price">50 000 <sup>FCFA</sup></div>
        <div class="p-period">par ans · avec engagement </div>
        <div class="p-div"></div>
        <ul class="p-features">
          <li><i class="bi bi-check-circle-fill ok"></i> Tout Maker inclus</li>
          <li><i class="bi bi-check-circle-fill ok"></i> Accès Open Lab illimité</li>
          <li><i class="bi bi-check-circle-fill ok"></i> Espace de stockage </li>
          <li><i class="bi bi-check-circle-fill ok"></i> Formations gratuites</li>
          <li><i class="bi bi-check-circle-fill ok"></i> Mentorat mensuel</li>
        </ul>
        <a href="#contact" class="btn-green btn-plan" data-plan="Pro (50 000 FCFA/an)" style="width:100%;justify-content:center;text-decoration:none;">Passer en Pro</a>
      </div>

    </div>

    <!-- Équipements -->
    <!-- <div style="margin-top:64px;" data-aos="fade-up">
      <span class="chip chip-green mb-3">Équipements</span>
      <h3 class="section-title" style="font-size:1.8rem;margin-top:10px;">Nos machines à votre disposition</h3>
      <div class="equip-grid">
        <div class="equip-card"><div class="equip-icon">🖨️</div><div class="equip-name">Imprimante 3D FDM</div><div class="equip-sub">Creality Ender × 3</div></div>
        <div class="equip-card"><div class="equip-icon">✂️</div><div class="equip-name">Découpe Laser</div><div class="equip-sub">60W CO₂</div></div>
        <div class="equip-card"><div class="equip-icon">⚡</div><div class="equip-name">Découpe Vinyle</div><div class="equip-sub">Silhouette Cameo</div></div>
        <div class="equip-card"><div class="equip-icon">🔌</div><div class="equip-name">Station Soudure</div><div class="equip-sub">Hakko × 6 postes</div></div>
        <div class="equip-card"><div class="equip-icon">💻</div><div class="equip-name">Postes CAO</div><div class="equip-sub">Fusion360 / Inkscape</div></div>
        <div class="equip-card"><div class="equip-icon">📡</div><div class="equip-name">IoT Lab</div><div class="equip-sub">ESP32, LoRa, capteurs</div></div>
        <div class="equip-card"><div class="equip-icon">🛠️</div><div class="equip-name">CNC Fraiseuse</div><div class="equip-sub">Atelier bois</div></div>
        <div class="equip-card"><div class="equip-icon">🔊</div><div class="equip-name">Électronique</div><div class="equip-sub">Arduino, RPi, composants</div></div>
      </div>
    </div> -->

  </div>
</section>

<script>
  document.querySelectorAll('.btn-plan').forEach(function(btn) {
    btn.addEventListener('click', function() {
      var plan = this.dataset.plan;
      var sujet = document.getElementById('sujet');
      var message = document.getElementById('message');
      if (sujet) sujet.value = 'adhesion';
      if (message && !message.value) {
        message.value = "Bonjour, je souhaite adhérer à l'offre " + plan + ". Merci de me contacter pour la suite.";
      }
    });
  });
</script>
