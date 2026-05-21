<section id="hero">
  <div class="shape-blob shape-teal"  style="width:500px;height:500px;top:-150px;left:-150px;"></div>
  <div class="shape-blob shape-green" style="width:400px;height:400px;bottom:-100px;right:-80px;"></div>

  <div class="hero-inner">

    <!-- Colonne gauche : texte + stats -->
    <div style="position:relative;z-index:1;">
      <div class="hero-eyebrow" data-aos="fade-up">
        <span class="chip chip-teal"><i class="bi bi-geo-alt-fill"></i> Abidjan, Côte d'Ivoire</span>
        <span class="chip chip-green"><i class="bi bi-patch-check-fill"></i> Fab Foundation</span>
      </div>

      <h1 class="hero-title" data-aos="fade-up" data-aos-delay="80">
        Fabriquer,<br>
        <span class="accent-teal">Innover</span>,<br>
        <span class="accent-green">Partager.</span>
      </h1>

      <p class="hero-desc" data-aos="fade-up" data-aos-delay="160">
        Ayiyikoh est le premier FabLab &amp; Incubateur d'Abidjan. Un espace ouvert où
        créateurs, étudiants et entrepreneurs se retrouvent pour prototyper,
        apprendre et bâtir l'Afrique de demain.
      </p>

      <!-- <div class="hero-actions" data-aos="fade-up" data-aos-delay="240">
        <a href="#formations" class="btn-teal">
          Explorer les formations <i class="bi bi-arrow-right"></i>
        </a>
        <a href="#projets" class="btn-outline">
          Voir les projets <i class="bi bi-play-circle"></i>
        </a>
      </div> -->

      <div class="hero-actions" data-aos="fade-up" data-aos-delay="240">
        <a href="#about" class="btn-teal">
          Découvrir notre vision <i class="bi bi-arrow-right"></i>
        </a>
        <a href="#contact" class="btn-outline">
          Nous contacter <i class="bi bi-envelope"></i>
        </a>
      </div>
      
      <!-- Stats animées
      <div class="hero-stats" data-aos="fade-up" data-aos-delay="320">
        <div class="hero-stat">
          <div class="hero-stat-num"><span id="c1">0</span><span class="plus">+</span></div>
          <div class="hero-stat-label">Membres actifs</div>
        </div>
        <div class="hero-stat">
          <div class="hero-stat-num"><span id="c2">0</span></div>
          <div class="hero-stat-label">Formations / an</div>
        </div>
        <div class="hero-stat">
          <div class="hero-stat-num"><span id="c3">0</span><span class="plus">+</span></div>
          <div class="hero-stat-label">Projets réalisés</div>
        </div>
        <div class="hero-stat">
          <div class="hero-stat-num"><span id="c4">0</span></div>
          <div class="hero-stat-label">Machines dispo</div>
        </div>
      </div>
      -->
    </div>

    <!-- Colonne droite : card événements -->
    <div class="hero-visual" data-aos="fade-left" data-aos-delay="200">
      <div class="hero-logo-bg"></div>

      <div class="float-pill fp1">
        <div class="float-dot dot-teal"></div>
        <span>Open Lab actif</span>
      </div>

      <div class="hero-card-main">
        <div class="hero-card-top">
          <div style="display:flex;align-items:center;gap:10px;margin-bottom:14px;">
            <img src="<?= base_url('img/logo.png') ?>" alt="Logo Ayiyikoh"
                 style="height:40px;width:auto;max-width:120px;border-radius:6px;border:2px solid rgba(255,255,255,.5);object-fit:contain;">
            <div>
              <div style="font-family:var(--font-display);font-weight:800;font-size:1rem;">Ayiyikoh FabLab</div>
              <div style="font-size:.72rem;opacity:.82;">Prochains événements</div>
            </div>
          </div>
          <div style="display:flex;gap:8px;position:relative;z-index:1;">
            <span style="background:rgba(255,255,255,.2);color:#fff;font-size:.7rem;font-weight:700;padding:3px 10px;border-radius:999px;">Juin 2025</span>
            <span style="background:rgba(255,255,255,.1);color:rgba(255,255,255,.8);font-size:.7rem;font-weight:600;padding:3px 10px;border-radius:999px;">3 événements</span>
          </div>
        </div>
        <div class="hero-card-body">
          <div class="hc-event-row">
            <div class="hc-date"><div class="hc-date-d">14</div><div class="hc-date-m">Juin</div></div>
            <div><div class="hc-event-title">Hackathon Agriculture</div><div class="hc-event-sub">48h · 8 places restantes</div></div>
          </div>
          <div class="hc-event-row">
            <div class="hc-date"><div class="hc-date-d">21</div><div class="hc-date-m">Juin</div></div>
            <div><div class="hc-event-title">Atelier Soudure</div><div class="hc-event-sub">8h · débutants bienvenus</div></div>
          </div>
          <div class="hc-event-row">
            <div class="hc-date" style="background:var(--green-light);">
              <div class="hc-date-d" style="color:var(--green);">28</div>
              <div class="hc-date-m">Juin</div>
            </div>
            <div><div class="hc-event-title">Open Lab libre</div><div class="hc-event-sub">Ouvert à tous les membres</div></div>
          </div>
          <a href="#contact" class="btn-teal" style="width:100%;justify-content:center;margin-top:16px;">
            S'inscrire <i class="bi bi-arrow-right"></i>
          </a>
        </div>
      </div>

      <!-- <div class="float-pill fp2">
        <div class="float-dot dot-green"></div>
        <span>12 makers connectés</span>
      </div> -->
    </div>

  </div>
</section>
