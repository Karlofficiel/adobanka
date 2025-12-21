document.addEventListener('DOMContentLoaded', function() {
  const logoutBtn = document.getElementById('logout-btn');
  const navItems = document.querySelectorAll('.nav-item');

  logoutBtn.addEventListener('click', function() {
    const confirmLogout = confirm('Êtes-vous sûr de vouloir vous déconnecter ?');
    if (confirmLogout) {
      window.location.href = '/index.html';
    }
  });

  navItems.forEach(item => {
    item.addEventListener('click', function(e) {
      if (this.getAttribute('href') === '#') {
        e.preventDefault();
      }

      navItems.forEach(nav => nav.classList.remove('active'));
      this.classList.add('active');
    });
  });

  const heroButtons = document.querySelectorAll('.hero-btn');
  heroButtons.forEach(button => {
    button.addEventListener('click', function() {
      const buttonText = this.textContent.trim();
      console.log('Button clicked:', buttonText);

      if (buttonText.includes('Candidater')) {
        alert('Fonctionnalité de candidature à venir...');
      } else if (buttonText.includes('projets')) {
        alert('Page des projets à venir...');
      }
    });
  });

  let lastScrollTop = 0;
  const navigation = document.querySelector('.navigation');

  window.addEventListener('scroll', function() {
    const scrollTop = window.pageYOffset || document.documentElement.scrollTop;

    if (scrollTop > lastScrollTop && scrollTop > 100) {
      navigation.style.transform = 'translateY(-100%)';
    } else {
      navigation.style.transform = 'translateY(0)';
    }

    lastScrollTop = scrollTop <= 0 ? 0 : scrollTop;
  }, false);

  const observerOptions = {
    threshold: 0.1,
    rootMargin: '0px 0px -50px 0px'
  };

  const observer = new IntersectionObserver(function(entries) {
    entries.forEach(entry => {
      if (entry.isIntersecting) {
        entry.target.style.opacity = '1';
        entry.target.style.transform = 'translateY(0)';
      }
    });
  }, observerOptions);

  const animatedElements = document.querySelectorAll('.hero-container > *');
  animatedElements.forEach(el => {
    observer.observe(el);
  });
});
import './style.css'

document.addEventListener('DOMContentLoaded', () => {
  const starButtons = document.querySelectorAll('.star-btn');

  starButtons.forEach(button => {
    button.addEventListener('click', (e) => {
      const svg = button.querySelector('svg path');
      const isFilled = svg.getAttribute('fill') !== 'none';

      if (isFilled) {
        svg.setAttribute('fill', 'none');
        svg.setAttribute('stroke', '#FFB800');
      } else {
        svg.setAttribute('fill', '#FFB800');
        svg.setAttribute('stroke', '#FFB800');
      }
    });
  });

  const logoutBtn = document.querySelector('.logout-btn');
  if (logoutBtn) {
    logoutBtn.addEventListener('click', () => {
      alert('Déconnexion en cours...');
    });
  }

  const viewAllBtn = document.querySelector('.view-all-btn');
  if (viewAllBtn) {
    viewAllBtn.addEventListener('click', () => {
      alert('Affichage de toutes les actualités...');
    });
  }
});


// Fermer la notification
function closeNotif(index) {
    document.getElementById("notif-" + index).style.display = "none";
}


// Afficher au chargement
window.onload = function() {
    document.getElementById("notif").style.display = "flex";
};
