<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<!-- ========== HEADER COBAT ========== -->
<header class="cobat-header">
  <div class="cobat-header-inner">
    <a href="<?php echo home_url('/'); ?>">
      <?php
        $logo = get_theme_mod('custom_logo');
        if ($logo) {
          $logo_url = wp_get_attachment_image_url($logo, 'full');
          echo '<img src="' . esc_url($logo_url) . '" alt="COBAT Constructions" class="cobat-logo">';
        } else {
          echo '<img src="' . get_stylesheet_directory_uri() . '/images/logo-cobat.png" alt="COBAT Constructions" class="cobat-logo">';
        }
      ?>
    </a>

    <nav class="cobat-nav">
      <a href="<?php echo home_url('/'); ?>" class="cobat-nav-item <?php echo is_front_page() ? 'actif' : ''; ?>">Accueil</a>
      <a href="<?php echo home_url('/lentreprise/'); ?>" class="cobat-nav-item <?php echo is_page('lentreprise') ? 'actif' : ''; ?>">L'Entreprise</a>
      <a href="<?php echo home_url('/nos-realisations/'); ?>" class="cobat-nav-item <?php echo is_page('nos-realisations') ? 'actif' : ''; ?>">Nos Réalisations</a>
      <a href="<?php echo home_url('/nos-expertises/'); ?>" class="cobat-nav-item <?php echo is_page('nos-expertises') ? 'actif' : ''; ?>">Nos Expertises</a>
      <a href="<?php echo home_url('/engagements/'); ?>" class="cobat-nav-item <?php echo is_page('engagements') ? 'actif' : ''; ?>">Engagements</a>
      <a href="<?php echo home_url('/contact/'); ?>" class="cobat-nav-cta">Contact</a>
    </nav>

    <button class="cobat-hamburger" onclick="cobatToggleMenu()" aria-label="Menu">
      <span></span><span></span><span></span>
    </button>
  </div>

  <nav class="cobat-nav-mobile" id="cobatNavMobile">
    <a href="<?php echo home_url('/'); ?>">Accueil</a>
    <a href="<?php echo home_url('/lentreprise/'); ?>">L'Entreprise</a>
    <a href="<?php echo home_url('/nos-realisations/'); ?>">Nos Réalisations</a>
    <a href="<?php echo home_url('/nos-expertises/'); ?>">Nos Expertises</a>
    <a href="<?php echo home_url('/engagements/'); ?>">Engagements</a>
    <a href="<?php echo home_url('/contact/'); ?>" style="color:var(--bordeaux);font-weight:700;">Contact</a>
  </nav>
</header>
