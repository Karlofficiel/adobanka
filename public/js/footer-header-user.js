document.addEventListener('DOMContentLoaded', () => {
    // --- FORMULAIRE CONTACT ---
    const contactForm = document.getElementById('contact-form');
    const formFeedback = document.getElementById('form-feedback');

    contactForm.addEventListener('submit', function(event) {
        event.preventDefault();
        formFeedback.style.display = 'none';
        formFeedback.className = 'feedback-message';

        if (!this.checkValidity()) {
            formFeedback.classList.add('error');
            formFeedback.textContent = 'Veuillez remplir tous les champs obligatoires correctement.';
            formFeedback.style.display = 'block';
            formFeedback.style.opacity = 0;
            setTimeout(() => { formFeedback.style.opacity = 1; }, 100);
            return;
        }

        // Animation bouton
        const btn = contactForm.querySelector('button[type="submit"]');
        btn.classList.add('sending');
        btn.disabled = true;
        btn.textContent = 'Envoi...';

        // Simuler un envoi AJAX
        setTimeout(() => {
            formFeedback.classList.add('success');
            formFeedback.textContent = 'Votre message a été envoyé avec succès ! Nous vous répondrons dans les 24h.';
            formFeedback.style.display = 'block';
            formFeedback.style.opacity = 0;
            setTimeout(() => { formFeedback.style.opacity = 1; }, 100);
            contactForm.reset();
            btn.classList.remove('sending');
            btn.disabled = false;
            btn.textContent = 'Envoyer';
        }, 1200);
    });

    // --- INTERACTIVE MAP ANIMATION ---
    const mapBlock = document.querySelector('.interactive-map-block');
    if (mapBlock) {
        mapBlock.addEventListener('mouseenter', () => {
            mapBlock.style.boxShadow = '0 8px 24px rgba(76,175,80,0.18)';
            mapBlock.style.transform = 'scale(1.03)';
        });
        mapBlock.addEventListener('mouseleave', () => {
            mapBlock.style.boxShadow = '';
            mapBlock.style.transform = '';
        });
        mapBlock.addEventListener('click', () => {
            mapBlock.classList.add('clicked');
            setTimeout(() => { mapBlock.classList.remove('clicked'); }, 400);
            alert('Simulation de l\'affichage de la Carte Interactive (Google Maps, OpenStreetMap, etc.).');
        });
    }

    // --- ANIMATION SUR LES CARTES MEMBRES ---
    document.querySelectorAll('.member-card').forEach(card => {
        card.addEventListener('mouseenter', () => {
            card.style.boxShadow = '0 8px 24px rgba(76,175,80,0.18)';
            card.style.transform = 'scale(1.04)';
        });
        card.addEventListener('mouseleave', () => {
            card.style.boxShadow = '';
            card.style.transform = '';
        });
    });

    // --- ANIMATION SUR LES COMMENTAIRES ---
    document.querySelectorAll('.comment-item').forEach(item => {
        item.addEventListener('mouseenter', () => {
            item.style.boxShadow = '0 8px 24px rgba(76,175,80,0.13)';
            item.style.transform = 'scale(1.02)';
        });
        item.addEventListener('mouseleave', () => {
            item.style.boxShadow = '';
            item.style.transform = '';
        });
    });

    // --- ANIMATION SUR LES BOUTONS ---
    document.querySelectorAll('.help-button, .comment-button').forEach(btn => {
        btn.addEventListener('mousedown', () => {
            btn.style.transform = 'scale(0.97)';
        });
        btn.addEventListener('mouseup', () => {
            btn.style.transform = '';
        });
        btn.addEventListener('mouseleave', () => {
            btn.style.transform = '';
        });
    });

    // --- FORMULAIRE FLOTTANT COMMENTAIRE ---
    // Ouvre le modal au clic sur les boutons
    function openCommentModal() {
        document.getElementById('comment-modal-bg').classList.add('active');
        const modal = document.getElementById('comment-modal');
        modal.classList.add('active');
        modal.style.display = 'block';
        setTimeout(() => { modal.style.opacity = 1; }, 10);
        document.body.style.overflow = 'hidden';
    }
    function closeCommentModal() {
        document.getElementById('comment-modal-bg').classList.remove('active');
        const modal = document.getElementById('comment-modal');
        modal.classList.remove('active');
        modal.style.opacity = 0;
        setTimeout(() => { modal.style.display = 'none'; }, 300);
        document.body.style.overflow = '';
        // Reset feedback
        document.getElementById('floating-comment-feedback').style.display = 'none';
        document.getElementById('floating-comment-feedback').className = 'feedback-message';
        document.getElementById('floating-comment-form').reset();
    }

    // Clic sur les boutons pour ouvrir
    document.querySelectorAll('.comment-button, .help-button').forEach(btn => {
        btn.addEventListener('click', function(e) {
            e.preventDefault();
            openCommentModal();
        });
    });

    // Clic sur la croix ou le fond pour fermer
    document.getElementById('comment-modal-close').addEventListener('click', closeCommentModal);
    document.getElementById('comment-modal-bg').addEventListener('click', closeCommentModal);

    // Fermeture avec ESC
    document.addEventListener('keydown', function(e) {
        if (e.key === 'Escape') closeCommentModal();
    });

    // Soumission du formulaire flottant
    document.getElementById('floating-comment-form').addEventListener('submit', function(e) {
        e.preventDefault();
        const feedback = document.getElementById('floating-comment-feedback');
        feedback.style.display = 'none';
        feedback.className = 'feedback-message';

        // Validation simple
        if (!this.checkValidity()) {
            feedback.classList.add('error');
            feedback.textContent = 'Veuillez remplir tous les champs obligatoires.';
            feedback.style.display = 'block';
            feedback.style.opacity = 0;
            setTimeout(() => { feedback.style.opacity = 1; }, 100);
            return;
        }

        // Animation bouton
        const btn = this.querySelector('button[type="submit"]');
        btn.disabled = true;
        btn.textContent = 'Envoi...';

        // Simuler l'envoi
        setTimeout(() => {
            feedback.classList.add('success');
            feedback.textContent = 'Votre commentaire a été envoyé avec succès ! Merci pour votre contribution.';
            feedback.style.display = 'block';
            feedback.style.opacity = 0;
            setTimeout(() => { feedback.style.opacity = 1; }, 100);
            btn.disabled = false;
            btn.textContent = 'Envoyer';

            // --- AJOUT DU COMMENTAIRE DANS LA LISTE ---
            const name = document.getElementById('floating-name').value;
            const type = document.getElementById('floating-type').value;
            const message = document.getElementById('floating-message').value;
            const now = new Date();
            const dateStr = now.toLocaleDateString('fr-FR');

            // Déterminer le tag et la couleur
            let tagClass = 'tag-suggestion', tagLabel = 'Suggestion';
            if (type === 'question') { tagClass = 'tag-question'; tagLabel = 'Question'; }
            else if (type === 'avis') { tagClass = 'tag-suggestion'; tagLabel = 'Avis'; }

            // Créer le bloc HTML du commentaire
            const commentHtml = `
            <div class="comment-item">
                <div class="comment-header-row">
                    <div class="user-info">
                        <div class="user-icon">
                            <i class="fas fa-user"></i>
                        </div>
                        <div>
                            <h4 class="user-name">${name}</h4>
                            <div class="comment-meta">
                                <span class="comment-date">${dateStr}</span>
                                <span class="comment-tag ${tagClass}">${tagLabel}</span>
                            </div>
                        </div>
                    </div>
                    <div class="comment-status status-approved">
                        <i class="fas fa-check-circle"></i> Approuvé
                    </div>
                </div>
                <p class="comment-text">${message.replace(/\n/g, '<br>')}</p>
            </div>
            `;

            // Ajout en haut de la liste (dernier commentaire en premier)
            const commentsList = document.querySelector('.comments-list-container');
            if (commentsList) {
                commentsList.insertAdjacentHTML('afterbegin', commentHtml);

                // Animation sur le nouveau commentaire
                const newComment = commentsList.querySelector('.comment-item');
                newComment.style.backgroundColor = '#E8F5E9';
                newComment.style.transition = 'background 1s';
                setTimeout(() => { newComment.style.backgroundColor = 'white'; }, 1200);

                // Ajout des effets hover JS sur le nouveau commentaire
                newComment.addEventListener('mouseenter', () => {
                    newComment.style.boxShadow = '0 8px 24px rgba(76,175,80,0.13)';
                    newComment.style.transform = 'scale(1.02)';
                });
                newComment.addEventListener('mouseleave', () => {
                    newComment.style.boxShadow = '';
                    newComment.style.transform = '';
                });
            }

            this.reset();
            setTimeout(closeCommentModal, 1800);
        }, 1200);
    });

    // -----------------------------------------------------------------
    // 1. Animation des Chiffres Clés (Effet "Compteur")
    // -----------------------------------------------------------------
    const counters = document.querySelectorAll('.chiffre-value');
    
    // Simple fonction d'animation du compteur
    const animateCounter = (counter) => {
        const target = +counter.getAttribute('data-target');
        const increment = target / 200; // Divise le temps d'animation (200ms) par le temps total (2000ms/10ms)
        let count = 0;

        const updateCount = () => {
            if (count < target) {
                count += increment;
                // Arrondi supérieur si on approche de la cible pour éviter les décimales
                counter.innerText = Math.ceil(count) + (target >= 100 ? '+' : '');
                setTimeout(updateCount, 10);
            } else {
                counter.innerText = target + (target >= 100 ? '+' : '');
            }
        };
        updateCount();
    };

    // Observer pour déclencher l'animation uniquement lorsque les chiffres sont visibles
    const options = {
        threshold: 0.8 // Déclenche quand 80% de l'élément est visible
    };

    const observer = new IntersectionObserver((entries, observer) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                animateCounter(entry.target);
                observer.unobserve(entry.target); // Arrête d'observer après le déclenchement
            }
        });
    }, options);

    counters.forEach(counter => {
        observer.observe(counter);
    });

    // -----------------------------------------------------------------
    // 2. Interactions Simples sur les Boutons
    // -----------------------------------------------------------------
    
    const joinBtn = document.getElementById('join-community-btn');
    const learnBtn = document.getElementById('learn-more-btn');

    if (joinBtn) {
        joinBtn.addEventListener('click', (e) => {
            e.preventDefault();
            alert("Merci de votre intérêt ! Cliquez sur 'Nous Écrire' en bas de page pour rejoindre la communauté.");
            // Logique réelle : faire défiler jusqu'à la section contact
            document.getElementById('femme-adolescence-page').scrollIntoView({ behavior: 'smooth', block: 'end' });
        });
    }

    if (learnBtn) {
        learnBtn.addEventListener('click', (e) => {
            e.preventDefault();
            alert("La page 'En Savoir Plus' est en cours de construction. Vous serez redirigé(e) vers les activités.");
            // Logique réelle : faire défiler jusqu'à la section Nos Activités
            document.querySelector('.activites-header').scrollIntoView({ behavior: 'smooth', block: 'start' });
        });
    }

    // -----------------------------------------------------------------
    // 3. Animations Supplémentaires
    // -----------------------------------------------------------------

    // Animation latérale au scroll pour chaque section
    function revealSections() {
        const sections = document.querySelectorAll('.slide-in-left, .slide-in-right');
        let delay = 0;
        sections.forEach((section, idx) => {
            const rect = section.getBoundingClientRect();
            if (rect.top < window.innerHeight - 60 && !section.classList.contains('visible')) {
                setTimeout(() => {
                    section.classList.add('visible');
                }, delay);
                delay += 150; // Décalage progressif pour effet "cascade"
            }
        });
    }
    window.addEventListener('scroll', revealSections);
    revealSections();

    // Animation sur les images galerie au survol
    document.querySelectorAll('.fem-galerie-img').forEach(img => {
        img.addEventListener('mouseenter', () => {
            img.style.boxShadow = '0 12px 32px rgba(76,175,80,0.18)';
            img.style.transform = 'scale(1.08) rotate(-2deg)';
        });
        img.addEventListener('mouseleave', () => {
            img.style.boxShadow = '';
            img.style.transform = '';
        });
    });

    // Animation sur témoignages au survol
    document.querySelectorAll('.temoignage-card').forEach(card => {
        card.addEventListener('mouseenter', () => {
            card.style.boxShadow = '0 12px 32px rgba(76,175,80,0.18)';
            card.style.transform = 'scale(1.06)';
        });
        card.addEventListener('mouseleave', () => {
            card.style.boxShadow = '';
            card.style.transform = '';
        });
    });
});

(function() {
  // Crée le div de transition si absent
  if (!document.querySelector('.page-transition')) {
    const transitionDiv = document.createElement('div');
    transitionDiv.className = 'page-transition';
    transitionDiv.innerHTML = '<div class="page-transition-content">Chargement...</div>';
    document.body.appendChild(transitionDiv);
  }
  const transitionDiv = document.querySelector('.page-transition');

  // Fonction pour lancer la transition
  function startPageTransition(url) {
    // Animation de sortie
    transitionDiv.classList.add('active', 'page-transition-leave');
    setTimeout(() => {
      // Animation d'entrée sur la nouvelle page
      window.location.href = url;
    }, 700); // Durée de l'animation
  }

  // Intercepte les clics sur les liens de navigation
  document.querySelectorAll('.nav-item').forEach(link => {
    link.addEventListener('click', function(e) {
      // Vérifie que le lien est interne
      const href = link.getAttribute('href');
      if (href && !href.startsWith('http') && !href.startsWith('#') && window.location.pathname.indexOf(href) === -1) {
        e.preventDefault();
        startPageTransition(href);
      }
    });
  });

  // Optionnel : intercepte aussi les liens rapides du footer
  document.querySelectorAll('.footer-links a').forEach(link => {
    link.addEventListener('click', function(e) {
      const href = link.getAttribute('href');
      if (href && !href.startsWith('http') && !href.startsWith('#') && window.location.pathname.indexOf(href) === -1) {
        e.preventDefault();
        startPageTransition(href);
      }
    });
  });

  // Animation d'entrée sur la nouvelle page
  window.addEventListener('DOMContentLoaded', () => {
    if (transitionDiv.classList.contains('active')) {
      transitionDiv.classList.remove('page-transition-leave');
      transitionDiv.classList.add('page-transition-enter');
      setTimeout(() => {
        transitionDiv.classList.remove('active', 'page-transition-enter');
      }, 700);
    }
  });

  // Ajoute la classe de fond selon la page
  function setBodyBgClass() {
    const path = window.location.pathname.toLowerCase();
    let pageClass = '';
    if (path.includes('accuille')) pageClass = 'page-accueil';
    else if (path.includes('contact')) pageClass = 'page-contact';
    else if (path.includes('femmeadolescence')) pageClass = 'page-femme';
    else if (path.includes('bource')) pageClass = 'page-bourse';
    else if (path.includes('activiter')) pageClass = 'page-activite';
    else if (path.includes('a propos')) pageClass = 'page-apropos';
    // Ajoute la classe sur le body
    if (pageClass) {
      document.body.classList.add(pageClass);
      // Ajoute aussi la classe sur le menu navigation si besoin
      const nav = document.querySelector('.navigation');
      if (nav) nav.classList.add(pageClass);
    }
  }
  setBodyBgClass();

  // Met à jour la classe active sur le menu selon la page courante
  function setActiveNavItem() {
    const path = window.location.pathname.toLowerCase();
    document.querySelectorAll('.nav-item').forEach(link => {
      // Nettoie toutes les classes actives
      link.classList.remove('active');
      // Ajoute la classe active si le href correspond à la page
      const href = link.getAttribute('href');
      if (href && path.indexOf(href.toLowerCase()) !== -1) {
        link.classList.add('active');
      }
    });
  }
  setActiveNavItem();
})();