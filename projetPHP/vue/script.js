// Gestion de la barre de navigation rétractable
const navbar = document.querySelector('.navbar');
const logo = document.querySelector('.navbar .logo');

logo.addEventListener('click', () => {
  navbar.classList.toggle('retracted');
});

// Animation de survol pour les boutons de la barre de navigation
const navLinks = document.querySelectorAll('.nav-links a');

navLinks.forEach(link => {
  link.addEventListener('mouseenter', () => {
    link.style.transform = 'translateX(10px)';
    link.style.transition = 'transform 0.3s ease';
  });

  link.addEventListener('mouseleave', () => {
    link.style.transform = 'translateX(0)';
  });
});

// Animation lors du défilement
window.addEventListener('scroll', () => {
  const content = document.querySelector('.content');
  const scrollPosition = window.scrollY;

  if (scrollPosition > 100) {
    content.style.opacity = '0.9';
    content.style.transform = 'translateY(-20px)';
    content.style.transition = 'all 0.5s ease';
  } else {
    content.style.opacity = '1';
    content.style.transform = 'translateY(0)';
  }
});