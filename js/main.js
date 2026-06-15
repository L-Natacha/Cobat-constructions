// Menu mobile
function toggleMenu() {
  const nav = document.getElementById('navMobile');
  nav.classList.toggle('open');
}

document.querySelectorAll('.nav-mobile a').forEach(link => {
  link.addEventListener('click', () => {
    const nav = document.getElementById('navMobile');
    if (nav) nav.classList.remove('open');
  });
});

// Animation scroll reveal
const observer = new IntersectionObserver((entries) => {
  entries.forEach(entry => {
    if (entry.isIntersecting) {
      entry.target.style.opacity = '1';
      entry.target.style.transform = 'translateY(0)';
    }
  });
}, { threshold: 0.1 });

document.querySelectorAll(
  '.metier-card, .engagement-card, .realisation-card, .chiffre-item, .sf-stat, .filiale-item, .certif-badge'
).forEach(el => {
  el.style.opacity = '0';
  el.style.transform = 'translateY(20px)';
  el.style.transition = 'opacity 0.5s ease, transform 0.5s ease';
  observer.observe(el);
});

// Filtres réalisations (si présents)
document.querySelectorAll('.filtre-btn').forEach(btn => {
  btn.addEventListener('click', () => {
    document.querySelectorAll('.filtre-btn').forEach(b => b.classList.remove('actif'));
    btn.classList.add('actif');
    const cat = btn.dataset.filtre;
    document.querySelectorAll('.realisation-card').forEach(card => {
      if (cat === 'tous' || card.dataset.categorie === cat) {
        card.style.display = '';
      } else {
        card.style.display = 'none';
      }
    });
  });
});
