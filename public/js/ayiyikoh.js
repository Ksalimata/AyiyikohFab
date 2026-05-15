/* ayiyikoh.js — Scripts du site Ayiyikoh FabLab */

document.addEventListener('DOMContentLoaded', function () {

  /* ── AOS init ── */
  AOS.init({ duration: 650, once: true, offset: 55 });

  /* ── Navbar scroll ── */
  const nav = document.getElementById('navbar');
  if (nav) {
    window.addEventListener('scroll', () =>
      nav.classList.toggle('scrolled', window.scrollY > 40)
    );
  }

  /* ── Hamburger ── */
  const hamburger = document.getElementById('hamburger');
  const navLinks  = document.getElementById('navLinks');
  if (hamburger && navLinks) {
    hamburger.addEventListener('click', () =>
      navLinks.classList.toggle('open')
    );
  }

  /* ── Active nav link au scroll ── */
  const sections = document.querySelectorAll('section[id]');
  const links    = document.querySelectorAll('.nav-links a');
  if (sections.length && links.length) {
    const io = new IntersectionObserver(entries => {
      entries.forEach(e => {
        if (e.isIntersecting) {
          links.forEach(l => l.classList.remove('active'));
          const a = document.querySelector(`.nav-links a[href="#${e.target.id}"]`);
          if (a) a.classList.add('active');
        }
      });
    }, { threshold: 0.4 });
    sections.forEach(s => io.observe(s));
  }

  /* ── Compteurs animés ── */
  function animCount(el, target, ms) {
    ms = ms || 1600;
    let v = 0;
    const step = target / (ms / 16);
    const t = setInterval(() => {
      v += step;
      if (v >= target) { el.textContent = target; clearInterval(t); }
      else el.textContent = Math.floor(v);
    }, 16);
  }

  const statsBlock = document.querySelector('.hero-stats');
  if (statsBlock) {
    const counterTargets = { c1: 320, c2: 48, c3: 150, c4: 22 };
    const statsIO = new IntersectionObserver(entries => {
      if (entries[0].isIntersecting) {
        Object.entries(counterTargets).forEach(([id, val]) => {
          const el = document.getElementById(id);
          if (el) animCount(el, val);
        });
        statsIO.disconnect();
      }
    }, { threshold: 0.5 });
    statsIO.observe(statsBlock);
  }

  /* ── Filtres onglets projets ── */
  document.querySelectorAll('.ftab').forEach(tab => {
    tab.addEventListener('click', () => {
      document.querySelectorAll('.ftab').forEach(t => t.classList.remove('active'));
      tab.classList.add('active');
    });
  });

  /* ── Bouton scroll-to-top ── */
  const scrollTopBtn = document.getElementById('scrollTop');
  if (scrollTopBtn) {
    window.addEventListener('scroll', () =>
      scrollTopBtn.classList.toggle('vis', window.scrollY > 400)
    );
    scrollTopBtn.addEventListener('click', () =>
      window.scrollTo({ top: 0, behavior: 'smooth' })
    );
  }

});
