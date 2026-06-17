<?php
/**
 * Template Name: L'Entreprise Cobat
 */
get_header();
$img_dir = get_stylesheet_directory_uri() . '/images/';
?>

<section class="cobat-page-header" style="background-image:url('<?php echo $img_dir; ?>siege_povataj.jfif');">
  <div class="cobat-page-header-content">
    <p class="cobat-breadcrumb"><a href="<?php echo home_url('/'); ?>">Accueil</a><span>/</span>L'Entreprise</p>
    <h1 class="cobat-page-header-titre">L'Entreprise</h1>
    <p class="cobat-page-header-sous-titre">Depuis 2001, COBAT Constructions construit son savoir-faire au sein du Groupe POVATAJ — une histoire de famille, de rigueur et de transmission.</p>
  </div>
</section>

<!-- HISTOIRE -->
<section class="cobat-contenu-section">
  <div class="cobat-contenu-inner">
    <div class="cobat-contenu-grid">
      <div>
        <span class="cobat-bordure-haut-bordeaux"></span>
        <h2 class="cobat-titre-h2 bordeaux">Notre Histoire</h2>
        <div class="cobat-texte">
          <p><strong>Cobat Constructions</strong> est créée le 18 juillet 2001 par Kreshnik (Pascal) Povataj. Il sera rejoint par la suite par Kushtrim, Vlorijan &amp; Ibish. Forte d'une expérience acquise autour de nombreux projets ambitieux, la société s'est peu à peu dotée de partenaires de confiance et a donné naissance en 2012 à <strong style="color:var(--bleu);">Groupe POVATAJ</strong>.</p>
          <p>Le groupe est aujourd'hui le résultat d'une expertise construite autour de professionnels et de spécialistes qui excellent dans différents secteurs de la construction.</p>
          <p>Avec un capital détenu par 12 membres de la famille Povataj, le groupe est porté par de fortes valeurs, avec une nouvelle génération prête à prendre la relève !</p>
        </div>
      </div>
      <img class="cobat-contenu-img" src="<?php echo $img_dir; ?>equipe_povataj.jfif" alt="Équipe COBAT Constructions">
    </div>
  </div>
</section>

<!-- SIÈGE -->
<section class="cobat-contenu-section alt">
  <div class="cobat-contenu-inner">
    <div class="cobat-contenu-grid inverse">
      <img class="cobat-contenu-img" src="<?php echo $img_dir; ?>siege_povataj.jfif" alt="Siège du Groupe POVATAJ">
      <div>
        <span class="cobat-bordure-haut-bleu"></span>
        <h2 class="cobat-titre-h2">Le Siège du Groupe</h2>
        <div class="cobat-texte">
          <p>Les équipes de <strong style="color:var(--bleu);">Cobat Constructions</strong> ont participé activement à la conception et la construction du siège emblématique de Groupe POVATAJ.</p>
          <p>Situé au 1 rue Sainte-Mère Teresa à Amblainville, le siège est la vitrine par excellence du savoir-faire d'exception de tous les collaborateurs du groupe et de la parfaite maîtrise du béton de Cobat Constructions.</p>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- CERTIFICATIONS -->
<section class="cobat-contenu-section">
  <div class="cobat-contenu-inner">
    <span class="cobat-bordure-haut-bleu"></span>
    <h2 class="cobat-titre-h2">Nos Certifications</h2>
    <div class="cobat-texte" style="max-width:760px;">
      <p>Certifié <strong style="color:var(--bleu);">QUALIBAT</strong>, Cobat Constructions possède également les qualifications professionnelles suivantes : 1111 (démolition), 2113 (maçonnerie et béton armé technicité supérieure).</p>
    </div>
    <div class="cobat-certifs-grid">
      <div class="cobat-certif-badge">
        <svg class="cobat-certif-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><path d="M12 2l8 4v6c0 5-3.5 8-8 10-4.5-2-8-5-8-10V6l8-4z"/><path d="M9 12l2 2 4-4"/></svg>
        <div><p class="cobat-certif-titre">Certifié QUALIBAT</p><p class="cobat-certif-sous">Label de qualité reconnu</p></div>
      </div>
      <div class="cobat-certif-badge">
        <svg class="cobat-certif-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><path d="M3 21h18M5 21V9l7-6 7 6v12M9 21v-6h6v6"/></svg>
        <div><p class="cobat-certif-titre">Qualification 1111</p><p class="cobat-certif-sous">Démolition</p></div>
      </div>
      <div class="cobat-certif-badge">
        <svg class="cobat-certif-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><rect x="3" y="3" width="18" height="18" rx="2"/><path d="M3 9h18M9 21V9"/></svg>
        <div><p class="cobat-certif-titre">Qualification 2113</p><p class="cobat-certif-sous">Maçonnerie &amp; béton armé — technicité supérieure</p></div>
      </div>
    </div>
  </div>
</section>

<!-- GROUPE POVATAJ -->
<section class="cobat-engagements" style="padding-bottom:56px;">
  <div class="cobat-section-header">
    <span class="cobat-titre-section bordeaux">Groupe Povataj — Notre Force</span>
  </div>
  <div style="max-width:1280px; margin:0 auto; text-align:center; padding:0 24px;">
    <p style="font-size:0.92rem; line-height:1.8; color:var(--texte); margin-bottom:28px;">Cobat Constructions fait partie du <strong style="color:var(--bleu);">Groupe Povataj</strong>, un ensemble de filiales complémentaires et spécialistes qui œuvrent chaque jour pour rendre le groupe toujours plus incontournable.</p>
    <a href="https://groupepovataj.fr" target="_blank" rel="noopener" class="cobat-btn cobat-btn-bleu">
      Découvrir le Groupe Povataj
      <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
    </a>
  </div>
</section>

<!-- CTA -->
<section class="cobat-cta">
  <h2 class="cobat-cta-titre">Un projet de construction ?</h2>
  <p class="cobat-cta-sous-titre">Nos équipes sont à votre écoute</p>
  <div class="cobat-cta-actions">
    <a href="tel:0344528647" class="cobat-btn cobat-btn-blanc">03 44 52 86 47</a>
    <a href="<?php echo home_url('/contact/'); ?>" class="cobat-btn cobat-btn-outline">Nous écrire</a>
  </div>
</section>

<?php get_footer(); ?>
