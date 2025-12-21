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
});
document.addEventListener('DOMContentLoaded', () => {
    
    // 1. Simuler l'ouverture de la carte interactive
    const openMapBtn = document.getElementById('open-map-btn');
    const mapContainer = document.querySelector('.map-interactive-container');

    // Rend la carte interactive cliquable
    if (mapContainer) {
        mapContainer.addEventListener('click', (e) => {
            // Empêche le clic sur les éléments internes de la bulle
            if (e.target !== mapContainer) return; 
            
            alert("Simulation : Ouverture de la carte Google Maps pour les bureaux de Banka et Bamako.");
            // Logique réelle: Afficher un modal avec la carte embarquée
        });
        
        // Ajouter un effet visuel au survol
        mapContainer.addEventListener('mouseover', () => {
            mapContainer.style.cursor = 'pointer';
            mapContainer.style.backgroundColor = '#dff0d8'; // Vert plus foncé au survol
        });
        mapContainer.addEventListener('mouseout', () => {
            mapContainer.style.backgroundColor = 'var(--light-bg)'; // Revenir à la couleur normale
        });
    }

    // 2. Rendre les cartes de membres interactives
    const memberCards = document.querySelectorAll('.member-card');
    
    memberCards.forEach(card => {
        card.addEventListener('click', () => {
            const name = card.querySelector('.member-name').textContent;
            const role = card.querySelector('.member-role').textContent;
            
            alert(`Contact de l'Exécutif : Vous avez cliqué sur ${name}, ${role}. Les liens email et téléphone sont cliquables.`);
        });
        
        // Ajouter un effet visuel au survol
        card.addEventListener('mouseover', () => {
             card.style.boxShadow = '0 6px 15px rgba(0, 0, 0, 0.12)';
             card.style.transform = 'translateY(-3px)';
        });
        card.addEventListener('mouseout', () => {
             card.style.boxShadow = '0 3px 10px rgba(0, 0, 0, 0.05)';
             card.style.transform = 'none';
        });
    });
});