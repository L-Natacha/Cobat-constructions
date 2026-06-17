<?php
/**
 * Template Name: Nos Réalisations Cobat
 */
get_header();
$img_dir = get_stylesheet_directory_uri() . '/images/';
?>

<section class="cobat-page-header" style="background-image:url('<?php echo $img_dir; ?>pointe_des_arts.jfif');">
  <div class="cobat-page-header-content">
    <p class="cobat-breadcrumb"><a href="<?php echo home_url('/'); ?>">Accueil</a><span>/</span>Nos Réalisations</p>
    <h1 class="cobat-page-header-titre">Des Défis de Taille</h1>
    <p class="cobat-page-header-sous-titre">Les projets Picpus et Île Seguin, des chantiers aux dimensions hors normes, prouvent notre savoir-faire connu et reconnu depuis plus de 20 ans.</p>
  </div>
</section>

<section class="cobat-realisations" style="padding-top:0;">
  <div class="cobat-realisations-inner">
    <div class="cobat-section-header">
      <span class="cobat-titre-section">Nos Réalisations</span>
    </div>

    <!-- Filtres -->
    <div class="cobat-filtres">
      <button class="cobat-filtre-btn actif" data-filtre="tous">Tous</button>
      <button class="cobat-filtre-btn" data-filtre="demolition">Démolition</button>
      <button class="cobat-filtre-btn" data-filtre="rehabilitation">Réhabilitation</button>
      <button class="cobat-filtre-btn" data-filtre="construction">Construction</button>
      <button class="cobat-filtre-btn" data-filtre="gros-oeuvre">Gros Œuvre</button>
    </div>

    <div class="cobat-realisations-grid uniforme">
      <div class="cobat-realisation-card" data-categorie="construction">
        <img src="<?php echo $img_dir; ?>pointe_des_arts.jfif" alt="Pointe des Arts — Île Seguin">
        <div class="cobat-realisation-overlay">
          <p class="cobat-realisation-tag">Boulogne-Billancourt — Construction</p>
          <p class="cobat-realisation-nom">Pointe des Arts — Île Seguin</p>
        </div>
      </div>
      <div class="cobat-realisation-card" data-categorie="gros-oeuvre">
        <img src="<?php echo $img_dir; ?>hlb-p304-picpus-pcm_rue2-naska-2950x1960-q80.jpg" alt="Picpus Paris 12">
        <div class="cobat-realisation-overlay">
          <p class="cobat-realisation-tag">Paris 12ème — Gros Œuvre</p>
          <p class="cobat-realisation-nom">Chantier Picpus</p>
        </div>
      </div>
      <div class="cobat-realisation-card" data-categorie="construction">
        <img src="<?php echo $img_dir; ?>chantier_aulnays.jfif" alt="Chantier Hauts-de-France">
        <div class="cobat-realisation-overlay">
          <p class="cobat-realisation-tag">Hauts-de-France — Construction</p>
          <p class="cobat-realisation-nom">Construction &amp; Gros Œuvre</p>
        </div>
      </div>
      <div class="cobat-realisation-card" data-categorie="demolition">
        <img src="<?php echo $img_dir; ?>Chambourcy.jfif" alt="Déconstruction sélective">
        <div class="cobat-realisation-overlay">
          <p class="cobat-realisation-tag">Île-de-France — Démolition</p>
          <p class="cobat-realisation-nom">Déconstruction sélective</p>
        </div>
      </div>
      <div class="cobat-realisation-card" data-categorie="rehabilitation">
        <img src="<?php echo $img_dir; ?>Chambourcy.jfif" alt="Réhabilitation lourde">
        <div class="cobat-realisation-overlay">
          <p class="cobat-realisation-tag">Hauts-de-France — Réhabilitation</p>
          <p class="cobat-realisation-nom">Réhabilitation lourde</p>
        </div>
      </div>
      <div class="cobat-realisation-card" data-categorie="gros-oeuvre">
        <img src="<?php echo $img_dir; ?>gros_oeuvres.jfif" alt="Logements collectifs">
        <div class="cobat-realisation-overlay">
          <p class="cobat-realisation-tag">Île-de-France — Gros Œuvre</p>
          <p class="cobat-realisation-nom">Logements collectifs</p>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- FOCUS PROJETS -->
<section class="cobat-contenu-section alt">
  <div class="cobat-contenu-inner">
    <div class="cobat-contenu-grid">
      <img class="cobat-contenu-img" src="<?php echo $img_dir; ?>pointe_des_arts.jfif" alt="Pointe des Arts">
      <div>
        <span class="cobat-bordure-haut-bleu"></span>
        <h2 class="cobat-titre-h2">Pointe des Arts — Île Seguin</h2>
        <p style="color:var(--bleu); font-size:0.72rem; font-weight:700; text-transform:uppercase; letter-spacing:0.12em; margin-bottom:14px;">Boulogne-Billancourt</p>
        <div class="cobat-texte">
          <p>Forts de leurs capacités à relever tous les défis, les talents qui œuvrent chaque jour au sein de Cobat Constructions ne reculent devant aucun chantier, quelle que soit sa taille.</p>
          <p>Le projet de l'Île Seguin, un chantier aux dimensions hors normes, illustre notre savoir-faire connu et reconnu dans la construction depuis plus de 20 ans.</p>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="cobat-contenu-section">
  <div class="cobat-contenu-inner">
    <div class="cobat-contenu-grid inverse">
      <div>
        <span class="cobat-bordure-haut-bordeaux"></span>
        <h2 class="cobat-titre-h2 bordeaux">Chantier Picpus</h2>
        <p style="color:var(--bordeaux); font-size:0.72rem; font-weight:700; text-transform:uppercase; letter-spacing:0.12em; margin-bottom:14px;">Paris 12ème arrondissement</p>
        <div class="cobat-texte">
          <p>Le projet Picpus, situé dans le 12ème arrondissement de Paris, est un autre exemple emblématique des chantiers d'envergure menés par COBAT Constructions.</p>
          <p>Ces réalisations témoignent de notre capacité à intervenir en milieu urbain dense, dans le respect des délais et des contraintes techniques propres aux grandes métropoles.</p>
        </div>
      </div>
      <img class="cobat-contenu-img" src="<?php echo $img_dir; ?>hlb-p304-picpus-pcm_rue2-naska-2950x1960-q80.jpg" alt="Chantier Picpus">
    </div>
  </div>
</section>

<!-- CHIFFRES -->
<section class="cobat-chiffres">
  <div class="cobat-chiffres-inner">
    <div class="cobat-chiffre-item"><span class="cobat-chiffre-nombre">36 000</span><span class="cobat-chiffre-label">Logements réalisés</span></div>
    <div class="cobat-chiffre-item"><span class="cobat-chiffre-nombre">2 500</span><span class="cobat-chiffre-label">Logements en Ent. Générale</span></div>
    <div class="cobat-chiffre-item"><span class="cobat-chiffre-nombre">40</span><span class="cobat-chiffre-label">Chantiers en cours</span></div>
    <div class="cobat-chiffre-item"><span class="cobat-chiffre-nombre">150M€</span><span class="cobat-chiffre-label">Chiffre d'affaires (2024)</span></div>
    <div class="cobat-chiffre-item"><span class="cobat-chiffre-nombre">380</span><span class="cobat-chiffre-label">Collaborateurs</span></div>
    <div class="cobat-chiffre-item"><span class="cobat-chiffre-nombre">20+</span><span class="cobat-chiffre-label">Ans d'expertise</span></div>
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
