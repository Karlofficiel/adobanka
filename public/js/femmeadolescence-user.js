document.addEventListener('DOMContentLoaded', () => {
    
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