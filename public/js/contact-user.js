document.addEventListener('DOMContentLoaded', () => {

    const floatingForm = document.getElementById('floating-comment-form');
    const floatingFeedback = document.getElementById('floating-comment-feedback');

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
        floatingFeedback.style.display = 'none';
        floatingFeedback.className = 'feedback-message';
        floatingForm.reset();
    }

    document.querySelectorAll('.comment-button, .help-button').forEach(btn => {
        btn.addEventListener('click', e => {
            e.preventDefault();
            openCommentModal();
        });
    });

    document.getElementById('comment-modal-close').addEventListener('click', closeCommentModal);
    document.getElementById('comment-modal-bg').addEventListener('click', closeCommentModal);
    document.addEventListener('keydown', e => { if (e.key === 'Escape') closeCommentModal(); });

    if (floatingForm) {
        floatingForm.addEventListener('submit', function(e) {
            e.preventDefault();

            floatingFeedback.style.display = 'none';
            floatingFeedback.className = 'feedback-message';

            if (!this.checkValidity()) {
                floatingFeedback.classList.add('error');
                floatingFeedback.textContent = 'Veuillez remplir tous les champs obligatoires.';
                floatingFeedback.style.display = 'block';
                return;
            }

            const btn = this.querySelector('button[type="submit"]');
            btn.disabled = true;
            btn.textContent = 'Envoi...';

            // Préparer les données à envoyer
            const formData = new FormData(this);

            fetch(this.action, {
                method: 'POST',
                headers: {
                    'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
                },
                body: formData
            })
            .then(response => response.json())
            .then(data => {
                if (data.success) {
                    floatingFeedback.classList.add('success');
                    floatingFeedback.textContent = 'Votre commentaire a été envoyé avec succès !';
                    floatingFeedback.style.display = 'block';

                    // Ajouter le commentaire dans la liste
                    const name = formData.get('name');
                    const type = formData.get('type');
                    const message = formData.get('message');
                    const now = new Date();
                    const dateStr = now.toLocaleDateString('fr-FR');

                    let tagClass = 'tag-suggestion', tagLabel = 'Suggestion';
                    if (type === 'question') { tagClass = 'tag-question'; tagLabel = 'Question'; }
                    if (type === 'avis') { tagClass = 'tag-avis'; tagLabel = 'Avis'; }

                    const commentHtml = `
                        <div class="comment-item">
                            <div class="comment-header-row">
                                <div class="user-info">
                                    <div class="user-icon"><i class="fas fa-user"></i></div>
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
                    const commentsList = document.querySelector('.comments-list-container');
                    if (commentsList) commentsList.insertAdjacentHTML('afterbegin', commentHtml);

                    btn.disabled = false;
                    btn.textContent = 'Envoyer';
                    floatingForm.reset();
                    setTimeout(closeCommentModal, 1500);
                } else {
                    floatingFeedback.classList.add('error');
                    floatingFeedback.textContent = 'Une erreur est survenue. Veuillez réessayer.';
                    floatingFeedback.style.display = 'block';
                    btn.disabled = false;
                    btn.textContent = 'Envoyer';
                }
            })
            .catch(err => {
                floatingFeedback.classList.add('error');
                floatingFeedback.textContent = 'Erreur réseau. Veuillez réessayer.';
                floatingFeedback.style.display = 'block';
                btn.disabled = false;
                btn.textContent = 'Envoyer';
                console.error(err);
            });
        });
    }
});
