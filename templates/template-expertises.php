<?php
/**
 * Template Name: Nos Expertises Cobat
 */
get_header();
$img_dir = get_stylesheet_directory_uri() . '/images/';
?>

<section class="cobat-page-header" style="background-image:url('<?php echo $img_dir; ?>gros_oeuvres.jfif');">
  <div class="cobat-page-header-content">
    <p class="cobat-breadcrumb"><a href="<?php echo home_url('/'); ?>">Accueil</a><span>/</span>Nos Expertises</p>
    <h1 class="cobat-page-header-titre">Nos Expertises</h1>
    <p class="cobat-page-header-sous-titre">De la démolition à l'entreprise générale, COBAT Constructions maîtrise chaque étape du chantier avec rigueur et fluidité.</p>
  </div>
</section>

<!-- NOS MÉTIERS -->
<section class="cobat-metiers">
  <div class="cobat-section-header"><span class="cobat-titre-section">Nos Métiers</span></div>
  <div class="cobat-metiers-grid">
    <a href="#demolition" class="cobat-metier-card">
      <svg class="cobat-metier-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><path d="M3 19h18M5 19V9l7-6 7 6v10M9 19v-5h6v5"/></svg>
      <p class="cobat-metier-nom">Démolition</p>
    </a>
    <a href="#terrassement" class="cobat-metier-card">
      <svg class="cobat-metier-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><path d="M2 20h20M4 20V10h4v10M10 20V6h4v14M18 20V14h-4"/></svg>
      <p class="cobat-metier-nom">Terrassement</p>
    </a>
    <a href="#rehabilitation" class="cobat-metier-card">
      <svg class="cobat-metier-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><path d="M14.7 6.3a1 1 0 000 1.4l1.6 1.6a1 1 0 001.4 0l3.77-3.77a6 6 0 01-7.94 7.94l-6.91 6.91a2.12 2.12 0 01-3-3l6.91-6.91a6 6 0 017.94-7.94l-3.76 3.76z"/></svg>
      <p class="cobat-metier-nom">Réhabilitation</p>
    </a>
    <a href="#construction" class="cobat-metier-card">
      <svg class="cobat-metier-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><rect x="3" y="3" width="18" height="18" rx="2"/><path d="M3 9h18M9 21V9"/></svg>
      <p class="cobat-metier-nom">Construction</p>
    </a>
    <a href="#gros-oeuvre" class="cobat-metier-card">
      <svg class="cobat-metier-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><path d="M2 20h20M4 20V8h16v12M8 8V4h8v4M10 14h4M10 17h4"/></svg>
      <p class="cobat-metier-nom">Gros Œuvre</p>
    </a>
    <a href="#entreprise-generale" class="cobat-metier-card">
      <svg class="cobat-metier-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><path d="M3 9l9-7 9 7v11a2 2 0 01-2 2H5a2 2 0 01-2-2z"/><polyline points="9 22 9 12 15 12 15 22"/></svg>
      <p class="cobat-metier-nom">Ent. Générale</p>
    </a>
  </div>
</section>

<!-- DÉMOLITION -->
<section class="cobat-contenu-section" id="demolition" style="scroll-margin-top:120px;">
  <div class="cobat-contenu-inner">
    <div class="cobat-contenu-grid">
      <div>
        <p style="font-family:Georgia,serif;font-size:4rem;font-weight:900;color:rgba(139,26,42,0.12);line-height:1;margin-bottom:-10px;">01</p>
        <h2 class="cobat-titre-h2 bordeaux">Démolition</h2>
        <div class="cobat-texte">
          <p>COBAT Constructions intervient sur des chantiers de démolition de toutes tailles, dans le respect strict des normes de sécurité et d'environnement.</p>
          <p>Notre qualification professionnelle <strong>1111 (démolition)</strong> garantit une maîtrise technique reconnue, de la déconstruction sélective au curage complet de structures, en intégrant le tri et la valorisation des matériaux.</p>
        </div>
      </div>
      <img class="cobat-contenu-img" src="<?php echo $img_dir; ?>chantier_aulnays.jfif" alt="Démolition">
    </div>
  </div>
</section>

<!-- TERRASSEMENT -->
<section class="cobat-contenu-section alt" id="terrassement" style="scroll-margin-top:120px;">
  <div class="cobat-contenu-inner">
    <div class="cobat-contenu-grid inverse">
      <img class="cobat-contenu-img" src="<?php echo $img_dir; ?>gros_oeuvres.jfif" alt="Terrassement">
      <div>
        <p style="font-family:Georgia,serif;font-size:4rem;font-weight:900;color:rgba(26,91,168,0.12);line-height:1;margin-bottom:-10px;">02</p>
        <h2 class="cobat-titre-h2">Terrassement</h2>
        <div class="cobat-texte">
          <p>Une équipe équipée et expérimentée pour préparer chaque chantier : fouilles, nivellement, évacuation des terres et préparation des fondations.</p>
          <p>COBAT mobilise un parc de <strong style="color:var(--bleu);">30 pelles de terrassement</strong> pour intervenir efficacement, quelle que soit la configuration du terrain.</p>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- RÉHABILITATION -->
<section class="cobat-contenu-section" id="rehabilitation" style="scroll-margin-top:120px;">
  <div class="cobat-contenu-inner">
    <div class="cobat-contenu-grid">
      <div>
        <p style="font-family:Georgia,serif;font-size:4rem;font-weight:900;color:rgba(139,26,42,0.12);line-height:1;margin-bottom:-10px;">03</p>
        <h2 class="cobat-titre-h2 bordeaux">Réhabilitation</h2>
        <div class="cobat-texte">
          <p>La réhabilitation lourde fait partie de notre ADN depuis la création de l'entreprise. Nos équipes savent intervenir sur des bâtiments existants tout en maîtrisant les contraintes structurelles.</p>
          <p>Le <strong>butonnage</strong> — provisoire, définitif, tubulaire métallique soudé sur mesure ou par rondins de bois — assure la stabilité du bâtiment et des terrains avoisinants pendant toute la durée des travaux.</p>
        </div>
      </div>
      <img class="cobat-contenu-img" src="<?php echo $img_dir; ?>Chambourcy.jfif" alt="Réhabilitation">
    </div>
  </div>
</section>

<!-- CONSTRUCTION -->
<section class="cobat-contenu-section alt" id="construction" style="scroll-margin-top:120px;">
  <div class="cobat-contenu-inner">
    <div class="cobat-contenu-grid inverse">
      <img class="cobat-contenu-img" src="<?php echo $img_dir; ?>pointe_des_arts.jfif" alt="Construction">
      <div>
        <p style="font-family:Georgia,serif;font-size:4rem;font-weight:900;color:rgba(26,91,168,0.12);line-height:1;margin-bottom:-10px;">04</p>
        <h2 class="cobat-titre-h2">Construction</h2>
        <div class="cobat-texte">
          <p>De la construction neuve de logements aux bâtiments tertiaires, COBAT pilote chaque étape du chantier avec une parfaite maîtrise du béton armé.</p>
          <p>Avec <strong style="color:var(--bleu);">36 000 logements réalisés</strong> et 8 centrales à béton, nous garantissons la qualité et les délais sur tous types de projets.</p>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- GROS ŒUVRE -->
<section class="cobat-contenu-section" id="gros-oeuvre" style="scroll-margin-top:120px;">
  <div class="cobat-contenu-inner">
    <div class="cobat-contenu-grid">
      <div>
        <p style="font-family:Georgia,serif;font-size:4rem;font-weight:900;color:rgba(139,26,42,0.12);line-height:1;margin-bottom:-10px;">05</p>
        <h2 class="cobat-titre-h2 bordeaux">Gros Œuvre</h2>
        <div class="cobat-texte">
          <p>Fondations, structures, dalles, voiles béton — le gros œuvre est le cœur historique de notre métier, certifié <strong>QUALIBAT 2113</strong> (technicité supérieure).</p>
          <p>Nous disposons de <strong>15 000 m² de coffrages aluminium</strong> et <strong>12 000 m² d'échafaudages</strong> pour mener plusieurs chantiers d'envergure en simultané.</p>
        </div>
      </div>
      <img class="cobat-contenu-img" src="<?php echo $img_dir; ?>gros_oeuvres.jfif" alt="Gros œuvre">
    </div>
  </div>
</section>

<!-- ENTREPRISE GÉNÉRALE -->
<section class="cobat-contenu-section alt" id="entreprise-generale" style="scroll-margin-top:120px;">
  <div class="cobat-contenu-inner">
    <div class="cobat-contenu-grid inverse">
      <img class="cobat-contenu-img" src="<?php echo $img_dir; ?>hlb-p304-picpus-pcm_rue2-naska-2950x1960-q80.jpg" alt="Entreprise Générale">
      <div>
        <p style="font-family:Georgia,serif;font-size:4rem;font-weight:900;color:rgba(26,91,168,0.12);line-height:1;margin-bottom:-10px;">06</p>
        <h2 class="cobat-titre-h2">Entreprise Générale</h2>
        <div class="cobat-texte">
          <p>Avec leur excellente connaissance de tous les métiers du bâtiment, les équipes de COBAT pilotent les différentes tâches d'un chantier avec rigueur et fluidité.</p>
          <p><strong style="color:var(--bleu);">2 500 logements</strong> ont déjà été construits en Entreprise Générale — une garantie de qualité pour nos clients et un gain de temps précieux.</p>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="cobat-cta">
  <h2 class="cobat-cta-titre">Un projet de construction ?</h2>
  <p class="cobat-cta-sous-titre">Nos équipes sont à votre écoute</p>
  <div class="cobat-cta-actions">
    <a href="tel:0344528647" class="cobat-btn cobat-btn-blanc">03 44 52 86 47</a>
    <a href="<?php echo home_url('/contact/'); ?>" class="cobat-btn cobat-btn-outline">Nous écrire</a>
  </div>
</section>

<?php get_footer(); ?>
