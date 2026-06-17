<?php
/**
 * Template Name: Contact Cobat
 */
get_header();
$img_dir = get_stylesheet_directory_uri() . '/images/';
?>

<section class="cobat-page-header" style="background-image:url('<?php echo $img_dir; ?>grue.jpg');">
  <div class="cobat-page-header-content">
    <p class="cobat-breadcrumb"><a href="<?php echo home_url('/'); ?>">Accueil</a><span>/</span>Contact</p>
    <h1 class="cobat-page-header-titre">Contactez-Nous</h1>
    <p class="cobat-page-header-sous-titre">Un projet de construction ? Nos équipes sont à votre écoute pour vous accompagner de la conception à la finalisation.</p>
  </div>
</section>

<section class="cobat-contenu-section">
  <div class="cobat-contenu-inner">
    <span class="cobat-bordure-haut-bordeaux"></span>
    <h2 class="cobat-titre-h2 bordeaux">Nos Coordonnées</h2>

    <div class="cobat-contact-infos">
      <div class="cobat-contact-info-item">
        <div class="cobat-contact-info-icon">
          <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg>
        </div>
        <div>
          <p class="cobat-contact-info-titre">Adresse</p>
          <p class="cobat-contact-info-texte">1 rue Sainte-Mère Teresa<br>60110 Amblainville, France</p>
        </div>
      </div>
      <div class="cobat-contact-info-item">
        <div class="cobat-contact-info-icon">
          <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M22 16.92v3a2 2 0 01-2.18 2 19.79 19.79 0 01-8.63-3.07A19.5 19.5 0 013.07 9.81 19.79 19.79 0 01.02 1.18 2 2 0 012 0h3a2 2 0 012 1.72c.127.96.361 1.903.7 2.81a2 2 0 01-.45 2.11L6.09 7.91a16 16 0 006 6l1.27-1.27a2 2 0 012.11-.45c.907.339 1.85.573 2.81.7A2 2 0 0122 16.92z"/></svg>
        </div>
        <div>
          <p class="cobat-contact-info-titre">Téléphone</p>
          <p class="cobat-contact-info-texte"><a href="tel:0344528647">03 44 52 86 47</a></p>
        </div>
      </div>
      <div class="cobat-contact-info-item">
        <div class="cobat-contact-info-icon">
          <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,13 2,6"/></svg>
        </div>
        <div>
          <p class="cobat-contact-info-titre">E-mail</p>
          <p class="cobat-contact-info-texte"><a href="mailto:contact@cobatconstructions.com">contact@cobatconstructions.com</a></p>
        </div>
      </div>
      <div class="cobat-contact-info-item">
        <div class="cobat-contact-info-icon">
          <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><path d="M12 6v6l4 2"/></svg>
        </div>
        <div>
          <p class="cobat-contact-info-titre">Horaires</p>
          <p class="cobat-contact-info-texte">Lundi — Vendredi : 8h00 - 18h00</p>
        </div>
      </div>
    </div>

    <!-- Formulaire de contact (utilise Contact Form 7 si disponible) -->
    <div style="margin-top:48px; max-width:760px;">
      <span class="cobat-bordure-haut-bleu"></span>
      <h2 class="cobat-titre-h2" style="margin-bottom:24px;">Envoyez-nous un message</h2>
      <?php
        // Si Contact Form 7 est installé, affiche le formulaire ID 1
        // Sinon affiche un formulaire HTML basique
        if (function_exists('wpcf7_contact_form')) {
          echo do_shortcode('[contact-form-7 id="1" title="Contact"]');
        } else {
      ?>
      <p style="font-size:0.9rem; color:var(--texte); margin-bottom:20px;">Installez le plugin <strong>Contact Form 7</strong> et remplacez ce message par le shortcode <code>[contact-form-7 id="1"]</code></p>
      <?php } ?>
    </div>

    <iframe class="cobat-contact-map"
      src="https://www.google.com/maps?q=1+rue+Sainte-M%C3%A8re+Teresa,+60110+Amblainville,+France&output=embed"
      loading="lazy" referrerpolicy="no-referrer-when-downgrade">
    </iframe>
  </div>
</section>

<?php get_footer(); ?>
