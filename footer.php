<!-- ========== FOOTER COBAT ========== -->
<footer class="cobat-footer">
  <div class="cobat-footer-inner">
    <div>
      <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/logo-cobat.png" alt="COBAT Constructions" class="cobat-footer-logo">
      <span class="cobat-footer-border-top"></span>
      <p class="cobat-footer-desc">Créée en 2001, COBAT Constructions est une entreprise de construction spécialisée en démolition, terrassement, réhabilitation, gros œuvre et entreprise générale.</p>
      <div class="cobat-footer-contact-item">
        <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg>
        1 rue Sainte-Mère Teresa, 60110 Amblainville
      </div>
      <div class="cobat-footer-contact-item">
        <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M22 16.92v3a2 2 0 01-2.18 2 19.79 19.79 0 01-8.63-3.07A19.5 19.5 0 013.07 9.81 19.79 19.79 0 01.02 1.18 2 2 0 012 0h3a2 2 0 012 1.72c.127.96.361 1.903.7 2.81a2 2 0 01-.45 2.11L6.09 7.91a16 16 0 006 6l1.27-1.27a2 2 0 012.11-.45c.907.339 1.85.573 2.81.7A2 2 0 0122 16.92z"/></svg>
        03 44 52 86 47
      </div>
    </div>
    <div>
      <p class="cobat-footer-titre-col">Navigation</p>
      <a href="<?php echo home_url('/'); ?>" class="cobat-footer-lien">Accueil</a>
      <a href="<?php echo home_url('/lentreprise/'); ?>" class="cobat-footer-lien">L'Entreprise</a>
      <a href="<?php echo home_url('/nos-expertises/'); ?>" class="cobat-footer-lien">Nos Expertises</a>
      <a href="<?php echo home_url('/nos-realisations/'); ?>" class="cobat-footer-lien">Nos Réalisations</a>
      <a href="<?php echo home_url('/engagements/'); ?>" class="cobat-footer-lien">Engagements</a>
      <a href="<?php echo home_url('/contact/'); ?>" class="cobat-footer-lien">Contact</a>
    </div>
    <div>
      <p class="cobat-footer-titre-col">Nos Métiers</p>
      <a href="<?php echo home_url('/nos-expertises/#demolition'); ?>" class="cobat-footer-lien">Démolition</a>
      <a href="<?php echo home_url('/nos-expertises/#terrassement'); ?>" class="cobat-footer-lien">Terrassement</a>
      <a href="<?php echo home_url('/nos-expertises/#rehabilitation'); ?>" class="cobat-footer-lien">Réhabilitation</a>
      <a href="<?php echo home_url('/nos-expertises/#construction'); ?>" class="cobat-footer-lien">Construction</a>
      <a href="<?php echo home_url('/nos-expertises/#gros-oeuvre'); ?>" class="cobat-footer-lien">Gros Œuvre</a>
      <a href="<?php echo home_url('/nos-expertises/#entreprise-generale'); ?>" class="cobat-footer-lien">Entreprise Générale</a>
    </div>
    <div>
      <p class="cobat-footer-titre-col">Groupe Povataj</p>
      <a href="#" class="cobat-footer-lien">CCP Environnement</a>
      <a href="#" class="cobat-footer-lien">Corem Promotion</a>
      <a href="#" class="cobat-footer-lien">10 Fers Serrurerie</a>
      <a href="#" class="cobat-footer-lien">Armatures de France</a>
      <a href="#" class="cobat-footer-lien">Povarent</a>
      <a href="#" class="cobat-footer-lien">Povimmo</a>
    </div>
  </div>
  <div class="cobat-footer-bas">
    <span>© 2025 COBAT Constructions — Tous droits réservés</span>
    <span>Certifié QUALIBAT — Qualifications 1111 &amp; 2113</span>
  </div>
</footer>

<script>
function cobatToggleMenu() {
  var nav = document.getElementById('cobatNavMobile');
  nav.classList.toggle('open');
}

// Filtres réalisations
document.addEventListener('DOMContentLoaded', function() {
  var btns = document.querySelectorAll('.cobat-filtre-btn');
  btns.forEach(function(btn) {
    btn.addEventListener('click', function() {
      btns.forEach(function(b) { b.classList.remove('actif'); });
      btn.classList.add('actif');
      var filtre = btn.getAttribute('data-filtre');
      var cards = document.querySelectorAll('.cobat-realisation-card[data-categorie]');
      cards.forEach(function(card) {
        if (filtre === 'tous' || card.getAttribute('data-categorie') === filtre) {
          card.style.display = '';
        } else {
          card.style.display = 'none';
        }
      });
    });
  });
});
</script>

<?php wp_footer(); ?>
</body>
</html>
