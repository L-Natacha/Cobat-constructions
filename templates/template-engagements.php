<?php
/**
 * Template Name: Engagements Cobat
 */
get_header();
$img_dir = get_stylesheet_directory_uri() . '/images/';
?>

<section class="cobat-page-header" style="background-image:url('<?php echo $img_dir; ?>chantier_aulnays.jfif');">
  <div class="cobat-page-header-content">
    <p class="cobat-breadcrumb"><a href="<?php echo home_url('/'); ?>">Accueil</a><span>/</span>Engagements</p>
    <h1 class="cobat-page-header-titre">Le Sens de l'Engagement</h1>
    <p class="cobat-page-header-sous-titre">Réduire les exigences physiques des métiers de la construction, diminuer les risques et la pénibilité sur le terrain : c'est notre vision.</p>
  </div>
</section>

<!-- 3 ENGAGEMENTS -->
<section class="cobat-engagements" style="padding-bottom:56px;">
  <div class="cobat-engagements-inner">
    <div class="cobat-section-header"><span class="cobat-titre-section bordeaux">Nos Engagements</span></div>
    <div class="cobat-engagements-grid">
      <div class="cobat-engagement-card">
        <svg class="cobat-engagement-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg>
        <h3 class="cobat-engagement-titre">La Rigueur &amp; la Fluidité</h3>
        <p class="cobat-engagement-texte">A sa création, l'entreprise s'est exclusivement consacrée aux chantiers de gros œuvre et de réhabilitation pour asseoir un savoir-faire aujourd'hui largement reconnu.</p>
        <p class="cobat-engagement-texte" style="margin-top:10px;">Avec leur excellente connaissance de tous les métiers du bâtiment, les équipes pilotent les différentes tâches d'un chantier avec rigueur et fluidité.</p>
      </div>
      <div class="cobat-engagement-card">
        <svg class="cobat-engagement-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><circle cx="12" cy="12" r="10"/><path d="M12 6v6l4 2"/></svg>
        <h3 class="cobat-engagement-titre">La Réduction des Efforts Inutiles</h3>
        <p class="cobat-engagement-texte">Réduire les exigences physiques des métiers de la construction est notre vision. COBAT cherche constamment à en diminuer les risques et la pénibilité sur le terrain.</p>
        <p class="cobat-engagement-texte" style="margin-top:10px;">L'emploi de prémurs réduit considérablement la manutention et les charges lourdes.</p>
      </div>
      <div class="cobat-engagement-card">
        <svg class="cobat-engagement-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><path d="M3 6l3 1m0 0l-3 9a5.002 5.002 0 006.001 0M6 7l3 9M6 7l6-2m6 2l3-1m-3 1l-3 9a5.002 5.002 0 006.001 0M18 7l3 9m-3-9l-6-2m0-2v2m0 16V5m0 16H9m3 0h3"/></svg>
        <h3 class="cobat-engagement-titre">Le Sens de l'Engagement</h3>
        <p class="cobat-engagement-texte">Cobat Constructions s'est engagée dans l'économie circulaire avec la création de <strong style="color:var(--bordeaux);">CCP Environnement</strong> depuis 2014.</p>
      </div>
    </div>
  </div>
</section>

<!-- SÉCURITÉ -->
<section class="cobat-contenu-section">
  <div class="cobat-contenu-inner">
    <div class="cobat-contenu-grid">
      <div>
        <span class="cobat-bordure-haut-bordeaux"></span>
        <h2 class="cobat-titre-h2 bordeaux">La Sécurité avant tout</h2>
        <div class="cobat-texte">
          <p>La propreté permanente des chantiers et l'encombrement minimum des lieux favorisent le bon enchaînement des étapes et minimisent les risques d'accidents.</p>
          <p>L'emploi de prémurs permet de réduire considérablement la manutention et les charges lourdes. Dans les faits, notre taux d'accidents du travail est de <strong>1,22 %</strong> contre <strong>8,1 %</strong> au niveau national.</p>
        </div>
      </div>
      <div style="display:flex;flex-direction:column;gap:20px;">
        <div style="background:var(--gris-clair);padding:28px 24px;border-left:4px solid var(--bordeaux);">
          <span style="font-family:Georgia,serif;font-size:2.4rem;font-weight:700;color:var(--bordeaux);display:block;line-height:1;">1,22%</span>
          <span style="font-size:0.7rem;font-weight:700;text-transform:uppercase;letter-spacing:0.1em;color:#777;">Taux d'accidents COBAT</span>
        </div>
        <div style="background:var(--gris-clair);padding:28px 24px;border-left:4px solid #999;">
          <span style="font-family:Georgia,serif;font-size:2.4rem;font-weight:700;color:#999;display:block;line-height:1;">8,1%</span>
          <span style="font-size:0.7rem;font-weight:700;text-transform:uppercase;letter-spacing:0.1em;color:#777;">Moyenne nationale du secteur</span>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- CCP ENVIRONNEMENT -->
<section class="cobat-contenu-section alt">
  <div class="cobat-contenu-inner">
    <div class="cobat-contenu-grid inverse">
      <img class="cobat-contenu-img" src="<?php echo $img_dir; ?>gros_oeuvres.jfif" alt="CCP Environnement">
      <div>
        <span class="cobat-bordure-haut-bleu"></span>
        <h2 class="cobat-titre-h2">CCP Environnement</h2>
        <div class="cobat-texte">
          <p>Cobat Constructions s'est engagée dans l'économie circulaire avec la création d'une filiale de Groupe Povataj, spécialisée dans le tri, le recyclage des déchets de chantiers et le nettoyage de bâtiments.</p>
          <p>Depuis <strong style="color:var(--bleu);">2014</strong>, CCP Environnement œuvre à rendre nos chantiers toujours plus propres en réduisant le volume de déchets ultimes et en valorisant les matières recyclables.</p>
        </div>
        <ul class="cobat-liste">
          <li>Tri sélectif sur chantier</li>
          <li>Recyclage des métaux, cartons, verre et plâtre</li>
          <li>Nettoyage de bâtiments</li>
          <li>Réduction du volume de déchets ultimes</li>
        </ul>
      </div>
    </div>
  </div>
</section>

<!-- CHIFFRES -->
<section class="cobat-chiffres">
  <div class="cobat-chiffres-inner cols-4">
    <div class="cobat-chiffre-item"><span class="cobat-chiffre-nombre">1,22%</span><span class="cobat-chiffre-label">Taux d'accidents du travail</span></div>
    <div class="cobat-chiffre-item"><span class="cobat-chiffre-nombre">400</span><span class="cobat-chiffre-label">Bases-vie</span></div>
    <div class="cobat-chiffre-item"><span class="cobat-chiffre-nombre">2014</span><span class="cobat-chiffre-label">Création de CCP Environnement</span></div>
    <div class="cobat-chiffre-item"><span class="cobat-chiffre-nombre">100%</span><span class="cobat-chiffre-label">Chantiers triés &amp; valorisés</span></div>
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
