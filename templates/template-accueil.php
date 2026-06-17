<?php
/**
 * Template Name: Accueil Cobat
 */
get_header();
$img_dir = get_stylesheet_directory_uri() . '/images/';
?>

<!-- ========== HERO ========== -->
<section class="cobat-hero" style="background-image:url('<?php echo $img_dir; ?>grue.jpg');">
  <div class="cobat-hero-content">
    <p class="cobat-hero-eyebrow">Depuis 2001 — Île-de-France &amp; Hauts-de-France</p>
    <h1 class="cobat-hero-titre">Expertise en<br><span>Construction</span></h1>
    <p class="cobat-hero-sous-titre">Le sens de l'engagement</p>
    <div class="cobat-hero-actions">
      <a href="<?php echo home_url('/nos-realisations/'); ?>" class="cobat-btn cobat-btn-bordeaux">
        Nos réalisations
        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
      </a>
      <a href="<?php echo home_url('/contact/'); ?>" class="cobat-btn cobat-btn-outline">Nous contacter</a>
    </div>
  </div>
</section>

<!-- ========== CHIFFRES CLÉS ========== -->
<section class="cobat-chiffres">
  <div class="cobat-chiffres-inner">
    <div class="cobat-chiffre-item"><span class="cobat-chiffre-nombre">380</span><span class="cobat-chiffre-label">Collaborateurs</span></div>
    <div class="cobat-chiffre-item"><span class="cobat-chiffre-nombre">150M€</span><span class="cobat-chiffre-label">Chiffre d'affaires</span></div>
    <div class="cobat-chiffre-item"><span class="cobat-chiffre-nombre">40</span><span class="cobat-chiffre-label">Chantiers en cours</span></div>
    <div class="cobat-chiffre-item"><span class="cobat-chiffre-nombre">36 000</span><span class="cobat-chiffre-label">Logements réalisés</span></div>
    <div class="cobat-chiffre-item"><span class="cobat-chiffre-nombre">40</span><span class="cobat-chiffre-label">Grues à tour</span></div>
    <div class="cobat-chiffre-item"><span class="cobat-chiffre-nombre">8</span><span class="cobat-chiffre-label">Centrales à béton</span></div>
  </div>
</section>

<!-- ========== NOS MÉTIERS ========== -->
<section class="cobat-metiers">
  <div class="cobat-section-header">
    <span class="cobat-titre-section">Nos Métiers</span>
  </div>
  <div class="cobat-metiers-grid">
    <div class="cobat-metier-card">
      <svg class="cobat-metier-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><path d="M3 19h18M5 19V9l7-6 7 6v10M9 19v-5h6v5"/></svg>
      <p class="cobat-metier-nom">Démolition</p>
    </div>
    <div class="cobat-metier-card">
      <svg class="cobat-metier-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><path d="M2 20h20M4 20V10h4v10M10 20V6h4v14M18 20V14h-4"/></svg>
      <p class="cobat-metier-nom">Terrassement</p>
    </div>
    <div class="cobat-metier-card">
      <svg class="cobat-metier-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><path d="M14.7 6.3a1 1 0 000 1.4l1.6 1.6a1 1 0 001.4 0l3.77-3.77a6 6 0 01-7.94 7.94l-6.91 6.91a2.12 2.12 0 01-3-3l6.91-6.91a6 6 0 017.94-7.94l-3.76 3.76z"/></svg>
      <p class="cobat-metier-nom">Réhabilitation</p>
    </div>
    <div class="cobat-metier-card">
      <svg class="cobat-metier-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><rect x="3" y="3" width="18" height="18" rx="2"/><path d="M3 9h18M9 21V9"/></svg>
      <p class="cobat-metier-nom">Construction</p>
    </div>
    <div class="cobat-metier-card">
      <svg class="cobat-metier-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><path d="M2 20h20M4 20V8h16v12M8 8V4h8v4M10 14h4M10 17h4"/></svg>
      <p class="cobat-metier-nom">Gros Œuvre</p>
    </div>
    <div class="cobat-metier-card">
      <svg class="cobat-metier-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><path d="M3 9l9-7 9 7v11a2 2 0 01-2 2H5a2 2 0 01-2-2z"/><polyline points="9 22 9 12 15 12 15 22"/></svg>
      <p class="cobat-metier-nom">Ent. Générale</p>
    </div>
  </div>
</section>

<!-- ========== NOS RÉALISATIONS ========== -->
<section class="cobat-realisations">
  <div class="cobat-realisations-inner">
    <div class="cobat-section-header">
      <span class="cobat-titre-section">Nos Réalisations</span>
    </div>
    <div class="cobat-realisations-grid">
      <div class="cobat-realisation-card">
        <img src="<?php echo $img_dir; ?>pointe_des_arts.jfif" alt="Île Seguin">
        <div class="cobat-realisation-overlay">
          <p class="cobat-realisation-tag">Boulogne-Billancourt</p>
          <p class="cobat-realisation-nom">Pointe des Arts — Île Seguin</p>
        </div>
      </div>
      <div class="cobat-realisation-card">
        <img src="<?php echo $img_dir; ?>hlb-p304-picpus-pcm_rue2-naska-2950x1960-q80.jpg" alt="Picpus Paris 12">
        <div class="cobat-realisation-overlay">
          <p class="cobat-realisation-tag">Paris 12ème</p>
          <p class="cobat-realisation-nom">Chantier Picpus</p>
        </div>
      </div>
      <div class="cobat-realisation-card">
        <img src="<?php echo $img_dir; ?>chantier_aulnays.jfif" alt="Chantier Hauts-de-France">
        <div class="cobat-realisation-overlay">
          <p class="cobat-realisation-tag">Hauts-de-France</p>
          <p class="cobat-realisation-nom">Construction &amp; Gros Œuvre</p>
        </div>
      </div>
    </div>
    <div class="cobat-realisations-cta">
      <a href="<?php echo home_url('/nos-realisations/'); ?>" class="cobat-btn cobat-btn-bordeaux">Voir toutes nos réalisations</a>
    </div>
  </div>
</section>

<!-- ========== ENGAGEMENTS ========== -->
<section class="cobat-engagements">
  <div class="cobat-engagements-inner">
    <div class="cobat-section-header">
      <span class="cobat-titre-section bordeaux">Nos Engagements</span>
    </div>
    <div class="cobat-engagements-grid">
      <div class="cobat-engagement-card">
        <svg class="cobat-engagement-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg>
        <h3 class="cobat-engagement-titre">La Rigueur &amp; la Fluidité</h3>
        <p class="cobat-engagement-texte">Avec leur excellente connaissance de tous les métiers du bâtiment, les équipes pilotent les différentes tâches d'un chantier avec rigueur et fluidité — une garantie de qualité pour nos clients.</p>
      </div>
      <div class="cobat-engagement-card">
        <svg class="cobat-engagement-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><circle cx="12" cy="12" r="10"/><path d="M12 6v6l4 2"/></svg>
        <h3 class="cobat-engagement-titre">La Réduction des Efforts</h3>
        <p class="cobat-engagement-texte">Notre taux d'accidents du travail est de <strong>1,22%</strong> contre 8,1% au niveau national. L'emploi de prémurs réduit considérablement la manutention et les charges lourdes.</p>
      </div>
      <div class="cobat-engagement-card">
        <svg class="cobat-engagement-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><path d="M3 6l3 1m0 0l-3 9a5.002 5.002 0 006.001 0M6 7l3 9M6 7l6-2m6 2l3-1m-3 1l-3 9a5.002 5.002 0 006.001 0M18 7l3 9m-3-9l-6-2m0-2v2m0 16V5m0 16H9m3 0h3"/></svg>
        <h3 class="cobat-engagement-titre">Le Sens de l'Engagement</h3>
        <p class="cobat-engagement-texte">Engagée dans l'économie circulaire avec CCP Environnement depuis 2014, COBAT œuvre pour des chantiers toujours plus propres en valorisant les matières recyclables.</p>
      </div>
    </div>
  </div>
</section>

<!-- ========== CTA CONTACT ========== -->
<section class="cobat-cta" id="contact">
  <h2 class="cobat-cta-titre">Un projet de construction ?</h2>
  <p class="cobat-cta-sous-titre">Nos équipes sont à votre écoute</p>
  <div class="cobat-cta-actions">
    <a href="tel:0344528647" class="cobat-btn cobat-btn-blanc">
      <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M22 16.92v3a2 2 0 01-2.18 2 19.79 19.79 0 01-8.63-3.07A19.5 19.5 0 013.07 9.81 19.79 19.79 0 01.02 1.18 2 2 0 012 0h3a2 2 0 012 1.72c.127.96.361 1.903.7 2.81a2 2 0 01-.45 2.11L6.09 7.91a16 16 0 006 6l1.27-1.27a2 2 0 012.11-.45c.907.339 1.85.573 2.81.7A2 2 0 0122 16.92z"/></svg>
      03 44 52 86 47
    </a>
    <a href="<?php echo home_url('/contact/'); ?>" class="cobat-btn cobat-btn-outline">Nous écrire</a>
  </div>
</section>

<?php get_footer(); ?>
