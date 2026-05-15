<section id="contact" class="section-wrap">
  <div class="container-fab">

    <div class="section-header" data-aos="fade-up">
      <span class="chip chip-teal mb-3">Contact</span>
      <h2 class="section-title">Venez nous <span class="hl-teal">voir.</span></h2>
      <p class="section-lead">On est ouverts du lundi au samedi. Pas besoin de rendez-vous pour la visite découverte.</p>
    </div>

    <div class="contact-grid">

      <!-- Infos -->
      <div data-aos="fade-right">
        <div class="ci-item">
          <div class="ci-icon"><i class="bi bi-geo-alt-fill"></i></div>
          <div><h5>Adresse</h5><p>Abidjan, Côte d'Ivoire</p></div>
        </div>
        <div class="ci-item">
          <div class="ci-icon"><i class="bi bi-clock-fill"></i></div>
          <div><h5>Horaires</h5><p>Lun – Ven : 8h00 – 20h00 · Sam : 9h – 17h</p></div>
        </div>
        <div class="ci-item">
          <div class="ci-icon"><i class="bi bi-telephone-fill"></i></div>
          <div><h5>Téléphone / WhatsApp</h5><p>+225 00 00 00 00 00</p></div>
        </div>
        <div class="ci-item">
          <div class="ci-icon"><i class="bi bi-envelope-fill"></i></div>
          <div><h5>Email</h5><p>bonjour@ayiyikoh-fab.ci</p></div>
        </div>

        <div class="social-row">
          <a href="#" class="soc-btn" aria-label="Facebook"><i class="bi bi-facebook"></i></a>
          <a href="#" class="soc-btn" aria-label="Instagram"><i class="bi bi-instagram"></i></a>
          <a href="#" class="soc-btn" aria-label="Twitter/X"><i class="bi bi-twitter-x"></i></a>
          <a href="#" class="soc-btn" aria-label="YouTube"><i class="bi bi-youtube"></i></a>
          <a href="#" class="soc-btn" aria-label="WhatsApp"><i class="bi bi-whatsapp"></i></a>
        </div>

        <div class="map-block">
          <div class="map-pin">📍</div>
          <div style="font-weight:700;color:var(--teal-dark);">Ayiyikoh FabLab</div>
          <div style="font-size:.82rem;">Abidjan, Côte d'Ivoire</div>
          <a href="https://maps.google.com" target="_blank" rel="noopener"
             class="chip chip-teal" style="margin-top:8px;">
            Google Maps <i class="bi bi-box-arrow-up-right ms-1"></i>
          </a>
        </div>
      </div><!-- /infos -->

      <!-- Formulaire -->
      <div data-aos="fade-left" data-aos-delay="100">
        <div class="card-fab contact-form-card">
          <h3 style="font-family:var(--font-display);font-size:1.3rem;font-weight:800;margin-bottom:5px;">
            Envoyer un message
          </h3>
          <p style="font-size:.875rem;color:var(--text-muted);margin-bottom:26px;">On vous répond en moins de 24h.</p>

          <!-- Flash messages CI4 -->
          <?php if (session()->getFlashdata('success')): ?>
            <div class="alert-fab alert-success">
              <i class="bi bi-check-circle-fill"></i>
              <?= session()->getFlashdata('success') ?>
            </div>
          <?php endif; ?>
          <?php if (session()->getFlashdata('error')): ?>
            <div class="alert-fab alert-error">
              <i class="bi bi-exclamation-circle-fill"></i>
              <?= session()->getFlashdata('error') ?>
            </div>
          <?php endif; ?>

          <form action="<?= base_url('contact/send') ?>" method="POST">
            <?= csrf_field() ?>

            <div class="form-row">
              <div>
                <label class="form-label-fab" for="prenom">Prénom</label>
                <input type="text" id="prenom" name="prenom" class="form-ctrl"
                       placeholder="Komi" value="<?= old('prenom') ?>" required>
              </div>
              <div>
                <label class="form-label-fab" for="nom">Nom</label>
                <input type="text" id="nom" name="nom" class="form-ctrl"
                       placeholder="Agbodjan" value="<?= old('nom') ?>" required>
              </div>
            </div>

            <label class="form-label-fab" for="email">Email</label>
            <input type="email" id="email" name="email" class="form-ctrl"
                   placeholder="komi@example.com" value="<?= old('email') ?>" required>

            <label class="form-label-fab" for="sujet">Sujet</label>
            <select id="sujet" name="sujet" class="form-ctrl" required>
              <option value="">Choisir un sujet...</option>
              <option value="adhesion"    <?= old('sujet') === 'adhesion'    ? 'selected' : '' ?>>Demande d'adhésion</option>
              <option value="formation"   <?= old('sujet') === 'formation'   ? 'selected' : '' ?>>Renseignement formation</option>
              <option value="entreprises" <?= old('sujet') === 'entreprises' ? 'selected' : '' ?>>Offre entreprises</option>
              <option value="partenariat" <?= old('sujet') === 'partenariat' ? 'selected' : '' ?>>Partenariat</option>
              <option value="autre"       <?= old('sujet') === 'autre'       ? 'selected' : '' ?>>Autre</option>
            </select>

            <label class="form-label-fab" for="message">Message</label>
            <textarea id="message" name="message" class="form-ctrl"
                      placeholder="Bonjour, je voudrais..." required><?= old('message') ?></textarea>

            <button type="submit" class="btn-teal" style="width:100%;justify-content:center;">
              Envoyer le message <i class="bi bi-send"></i>
            </button>
            <p style="font-size:.76rem;color:var(--text-muted);text-align:center;margin-top:10px;">
              <i class="bi bi-shield-check" style="color:var(--green);"></i>
              Vos données restent confidentielles.
            </p>
          </form>
        </div>
      </div><!-- /formulaire -->

    </div>
  </div>
</section>
