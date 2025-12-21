<!doctype html>
<html lang="fr">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>contact Adolescence Banka</title>
    <link rel="stylesheet" href="{{ asset('css/contact-user.css') }}">
    <link rel="stylesheet" href="{{ asset('css/footer-header-user.css') }}">
  </head>
  <body>
    <div id="app">
      <!-- Header -->
      <header class="header">
        <div class="header-container">
          <div class="logo-section">
            <div class="logo-icon">
              <img src="{{ asset('img/logo adolescence.jpg') }}" alt="" srcset="">
            </div>
            <div class="logo-text">
              <h1 class="logo-title">Association Adolescence Banka</h1>
              <p class="logo-subtitle">Depuis 30 ans, nous œuvrons pour l'éducation et le développement de la jeunesse Banka</p>
            </div>
          </div>
          <div class="user-section">
            <span class="user-label">Connecté en tant que : <strong class="user-name">Visiteur</strong></span>
            <button class="logout-btn" id="logout-btn">
              <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M6.75 2.25H3C2.58579 2.25 2.25 2.58579 2.25 3V15C2.25 15.4142 2.58579 15.75 3 15.75H6.75" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                <path d="M12 12.75L15.75 9L12 5.25" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                <path d="M15.75 9H6.75" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
              </svg>
              Déconnexion
            </button>
          </div>
        </div>
      </header>



      <!-- Navigation -->
      <nav class="navigation">
        <div class="nav-container">
          <a href="index" class="nav-item active">
            <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M2.5 7.5L10 2.5L17.5 7.5V16.25C17.5 16.5815 17.3683 16.8995 17.1339 17.1339C16.8995 17.3683 16.5815 17.5 16.25 17.5H3.75C3.41848 17.5 3.10054 17.3683 2.86612 17.1339C2.6317 16.8995 2.5 16.5815 2.5 16.25V7.5Z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
              <path d="M7.5 17.5V10H12.5V17.5" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
            Accueil
          </a>
          <a href="A propos-user" class="nav-item">
            <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M10 17.5C14.1421 17.5 17.5 14.1421 17.5 10C17.5 5.85786 14.1421 2.5 10 2.5C5.85786 2.5 2.5 5.85786 2.5 10C2.5 14.1421 5.85786 17.5 10 17.5Z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
              <path d="M10 6.25V10L12.5 11.25" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
            A propos
          </a>
          <a href="Activiter-user" class="nav-item">
            <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
              <rect x="3.75" y="5" width="12.5" height="12.5" rx="1.5" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
              <path d="M13.75 2.5V7.5" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
              <path d="M6.25 2.5V7.5" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
              <path d="M3.75 10H16.25" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
            Activités
          </a>
          <a href="bourse-user" class="nav-item">
            <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M16.25 8.75L10 2.5L3.75 8.75" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
              <path d="M10 2.5V12.5" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
              <path d="M2.5 12.5H17.5V16.25C17.5 16.5815 17.3683 16.8995 17.1339 17.1339C16.8995 17.3683 16.5815 17.5 16.25 17.5H3.75C3.41848 17.5 3.10054 17.3683 2.86612 17.1339C2.6317 16.8995 2.5 16.5815 2.5 16.25V12.5Z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
            Bourses
          </a>
          <a href="femmeadolescence-user" class="nav-item">
            <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M14.1667 17.5V15.8333C14.1667 14.9493 13.8155 14.1014 13.1904 13.4763C12.5652 12.8512 11.7174 12.5 10.8333 12.5H4.16667C3.28261 12.5 2.43476 12.8512 1.80964 13.4763C1.18452 14.1014 0.833336 14.9493 0.833336 15.8333V17.5" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
              <path d="M7.50001 9.16667C9.34096 9.16667 10.8333 7.67428 10.8333 5.83333C10.8333 3.99238 9.34096 2.5 7.50001 2.5C5.65906 2.5 4.16667 3.99238 4.16667 5.83333C4.16667 7.67428 5.65906 9.16667 7.50001 9.16667Z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
              <path d="M19.1667 17.5V15.8333C19.1661 15.0948 18.9204 14.3773 18.4679 13.7936C18.0154 13.2099 17.3819 12.793 16.6667 12.6083" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
              <path d="M13.3333 2.60834C14.0503 2.79192 14.6858 3.20892 15.1396 3.79359C15.5935 4.37827 15.8398 5.09736 15.8398 5.8375C15.8398 6.57765 15.5935 7.29674 15.1396 7.88141C14.6858 8.46609 14.0503 8.88309 13.3333 9.06667" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
            Section Femmes
          </a>
          <a href="contact-user" class="nav-item">
            <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M17.5 14.1667C17.5 14.6087 17.3244 15.0326 17.0118 15.3452C16.6993 15.6577 16.2754 15.8333 15.8333 15.8333H5.83333L2.5 19.1667V4.16667C2.5 3.72464 2.67559 3.30072 2.98816 2.98816C3.30072 2.67559 3.72464 2.5 4.16667 2.5H15.8333C16.2754 2.5 16.6993 2.67559 17.0118 2.98816C17.3244 3.30072 17.5 3.72464 17.5 4.16667V14.1667Z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
            Contact
          </a>
        </div>
      </nav>


      <section id="contact-page">
    <div class="contact-header">
        <h2>Contactez-Nous</h2>
        <p>Nous sommes à votre écoute ! Que vous souhaitiez obtenir des informations sur nos programmes, postuler pour une bourse, ou simplement nous faire part de vos suggestions, n'hésitez pas à nous contacter.</p>
    </div>

    <div class="contact-content">
        <div class="contact-form-card">
            <div class="card-header">
                <i class="fas fa-paper-plane"></i>
                <h3>Envoyez-nous un message</h3>
            </div>
            <form id="contact-form" action="votre_script_backend.php" method="POST" id="from">
                <div class="form-row">
                    <div class="form-group">
                        <label for="full_name">Nom complet *</label>
                        <input type="text" id="full_name" name="full_name" placeholder="Votre nom complet" required>
                    </div>
                    <div class="form-group">
                        <label for="email">Email *</label>
                        <input type="email" id="email" name="email" placeholder="votre.email@lrexemple.com" required>
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group">
                        <label for="phone">Téléphone</label>
                        <input type="tel" id="phone" name="phone" placeholder="+237 XX XX XX XX">
                    </div>
                    <div class="form-group">
                        <label for="motif">Motif de contact</label>
                        <select id="motif" name="motif">
                            <option value="general">Question générale</option>
                            <option value="bourse">Demande d'information Bourse</option>
                            <option value="partenariat">Partenariat</option>
                            <option value="suggerence">Suggestion</option>
                        </select>
                    </div>
                </div>
                <div class="form-group full-width">
                    <label for="subject">Sujet *</label>
                    <input type="text" id="subject" name="subject" placeholder="Objet de votre message" required>
                </div>
                <div class="form-group full-width">
                    <label for="message">Message *</label>
                    <textarea id="message" name="message" rows="5" placeholder="Écrivez votre message ici..." required></textarea>
                </div>
                <button type="submit">Envoyer</button>
                <p id="form-feedback" class="feedback-message"></p>
            </form>
        </div>

        <div class="contact-info-card">
    <div class="card-header">
        <h3>Informations de Contact</h3>
    </div>

    <div class="info-item">
        <i class="fas fa-map-marker-alt"></i>
        <div>
            <h4>Adresse</h4>
            <p>Siège social : new-bell </p>
            <p>Région du littoral</p>
            <p>Bureau : immeuble adolescence banka </p>
        </div>
    </div>

    <div class="info-item">
        <i class="fas fa-phone-alt"></i>
        <div>
            <h4>Téléphone</h4>
            <p>+237 76 12 34 56 (Bureau executif)</p>
            <p>+237 70 98 76 54 (Bureau general)</p>
            <p>+237 65 43 21 09 (Urgences)</p>
        </div>
    </div>

    <div class="info-item">
        <i class="fas fa-envelope"></i>
        <div>
            <h4>Email</h4>
            <p>contact@adolescencebanka.org</p>
            <p>bourses@adolescencebanka.org</p>
            <p>femmes@adolescencebanka.org</p>
        </div>
    </div>

    <div class="info-item social-section">
        <i class="fas fa-share-alt"></i>
        <div>
            <h4>Réseaux Sociaux</h4>
            <p>Facebook: Association Adolescence Banka</p>
            <p>WhatsApp: +237 76 12 34 56</p>
            <p>instagram: @AdolescenceBanka</p>
        </div>
    </div>
</div>

<div class="contact-footer">
    <div class="opening-hours-card">
        <div class="card-header-hours">
            <i class="far fa-clock"></i>
            <h3>Heures d'Ouverture</h3>
        </div>

        <div class="hour-item">
            <div class="hour-label">
                <h4>Dimanche</h4>
                <p class="detail-label">Bureau new-bell</p>
            </div>
            <div class="hour-time time-open">
                08h00 - 17h00
            </div>
        </div>

        <div class="hour-item">
            <div class="hour-label">
                <h4>Samedi</h4>
                <p class="detail-label">Bureau new-bell</p>
            </div>
            <div class="hour-time time-open">
                08h00 - 13h00
            </div>
        </div>

        <div class="hour-item">
            <div class="hour-label">
                <h4>Lundi - Vendredi</h4>
                <p class="detail-label">Tous bureaux</p>
            </div>
            <div class="hour-time time-closed">
                Fermé
            </div>
        </div>

        <div class="hour-item permanance-item">
            <div class="hour-label">
                <h4>Permanence Banka</h4>
                <p class="detail-label">Bureau administratif</p>
            </div>
            <div class="hour-time time-appointment">
                Sur rendez-vous
            </div>
        </div>
    </div>
</div>
<section id="contact-management-page">

    <div class="management-section">
        <h2 class="section-title-icon">
            <i class="fas fa-users-crown"> Bureau Exécutif</i>
        </h2>

        <div class="bureau-grid">

            <div class="member-card">
                <div class="member-icon-circle">
                    <i class="fas fa-users-crown"><img src="{{ asset('img/presi social.jpg') }}" alt=""></i>
                </div>
                <h3 class="member-name">NSIEBETCHEU MAURICE </h3>
                <p class="member-role">Président social</p>
                <div class="member-contact-info">
                    <div class="contact-line">
                        <i class="fas fa-phone-alt phone-icon"></i>
                        <a href="tel:+22376123456">+237 76 12 34 56</a>
                    </div>
                    <div class="contact-line">
                        <i class="fas fa-envelope email-icon"></i>
                        <a href="mailto:president@adolescencebanka.org">nsiebetcheumaurice@gmail.com</a>
                    </div>
                </div>
            </div>

            <div class="member-card">
                <div class="member-icon-circle">
                    <i class="fas fa-users-crown"><img src="{{ asset('img/presi bourse.JPG') }}" alt=""></i>
                </div>
                <h3 class="member-name">jules brice</h3>
                <p class="member-role">president de la bourse</p>
                <div class="member-contact-info">
                    <div class="contact-line">
                        <i class="fas fa-phone-alt phone-icon"></i>
                        <a href="tel:+22370987654">+237 51 14 25 80</a>
                    </div>
                    <div class="contact-line">
                        <i class="fas fa-envelope email-icon"></i>
                        <a href="mailto:secretaire@adolescencebanka.org">julesbrice@gmail.com</a>
                    </div>
                </div>
            </div>
            <div class="member-card">
                <div class="member-icon-circle">
                    <i class="fas fa-users-crown"><img src="{{ asset('img/presi finance.jpg') }}" alt=""></i>
                </div>
                <h3 class="member-name">MONKAM FOSSIPE JUSTICE </h3>
                <p class="member-role">president financier</p>
                <div class="member-contact-info">
                    <div class="contact-line">
                        <i class="fas fa-phone-alt phone-icon"></i>
                        <a href="tel:+2370987654">+237 51 14 25 80</a>
                    </div>
                    <div class="contact-line">
                        <i class="fas fa-envelope email-icon"></i>
                        <a href="mailto:secretaire@adolescencebanka.org">nakamfossipe@gmail.com</a>
                    </div>
                </div>
            </div>

            <div class="member-card">
                <div class="member-icon-circle">
                    <i class="fas fa-users-crown"><img src="{{ asset('img/presi executif.jpg') }}" alt=""></i>
                </div>
                <h3 class="member-name">KEUNI SÉBASTIEN </h3>
                <p class="member-role">president executif</p>
                <div class="member-contact-info">
                    <div class="contact-line">
                        <i class="fas fa-phone-alt phone-icon"></i>
                        <a href="tel:+237365432109">+237 65 43 21 09</a>
                    </div>
                    <div class="contact-line">
                        <i class="fas fa-envelope email-icon"></i>
                        <a href="mailto:tresorier@adolescencebanka.org">keinisebastien@gmail.com
                        </a>
                    </div>
                </div>
            </div>

            <div class="member-card">
                <div class="member-icon-circle">
                    <i class="fas fa-users-crown"><img src="{{ asset('img/femme adogroup.jpg') }} " alt=""></i>
                </div>
                <h3 class="member-name">Mariam DIARRA</h3>
                <p class="member-role">Présidente Section Femmes</p>
                <div class="member-contact-info">
                    <div class="contact-line">
                        <i class="fas fa-phone-alt phone-icon"></i>
                        <a href="tel:+22378654321">+237 78 65 43 21</a>
                    </div>
                    <div class="contact-line">
                        <i class="fas fa-envelope email-icon"></i>
                        <a href="mailto:femmes@adolescencebanka.org">mariam diarra@gmail.com</a>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <div class="offices-section" id="contact">
        <h2 class="section-title-icon">
            <i class="fas fa-map-marker-alt"></i> Nos Bureaux
        </h2>

        <div class="offices-info-container">

            <div class="office-card office-banka">
                <h3 class="office-title">Bureau Principal - adolescence</h3>
                <div class="office-details-grid">
                    <p><strong>Adresse :</strong> new-bell , sacre-coeur</p>
                    <p><strong>Cercle :</strong> Banka, de douala</p>
                    <p><strong>Contact :</strong> +237 76 12 34 56</p>
                    <p><strong>Responsable :</strong> sabastien keuni </p>
                </div>
            </div>

            <div class="office-card office-bamako">
                <h3 class="office-title">Bureau de Liaison - femme adolescence</h3>
                <div class="office-details-grid">
                    <p><strong>Adresse :</strong> Quartier </p>
                    <p><strong>Ville :</strong> douala </p>
                    <p><strong>Contact :</strong> +237 70 98 76 54</p>
                    <p><strong>Responsable :</strong> Fatoumata TRAORÉ</p>
                </div>
            </div>

        </div>

        <div class="map-interactive-container" id="carte">
            <div class="map-pin-icon">
                <i class="fas fa-map-marker-alt"></i>
            </div>
            <p class="map-title">Carte interactive</p>
            <p class="map-subtitle">Localisation de nos bureaux</p>
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1114.6704622513294!2d9.706279240330762!3d4.030231219917991!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x106112bde4b304af%3A0x4621a14c30dba452!2zU2FjcsOpIGPFk3Vy!5e1!3m2!1sfr!2scm!4v1761768866210!5m2!1sfr!2scm" width="100%" height="700" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
    </div>

</section>

<div class="comments-and-suggestions-container">

    <div class="quick-help-block">
        <div class="help-icon-circle">
            <i class="far fa-comment-dots"></i>
        </div>

        <h3>Besoin d'aide rapide ?</h3>
        <p>Consultez notre section commentaires pour voir les questions fréquemment posées ou laissez votre propre question à la communauté.</p>

        <a href="URL_DE_VOTRE_SECTION_FAQ" class="help-button">
            <i class="fas fa-comments"></i> Accéder aux commentaires
        </a>
    </div>

    <div class="suggestions-section-header">
        <h2 class="suggestions-title">Commentaires & Suggestions</h2>
        <p class="suggestions-subtitle">Partagez vos idées, posez vos questions ou donnez-nous votre avis pour nous aider à améliorer nos services</p>

        <a href="URL_DU_FORMULAIRE_DE_COMMENTAIRE" class="comment-button">
            <i class="fas fa-edit"></i> Laisser un commentaire
        </a>
    </div>

    </div>

    <div class="comments-list-container">

    <div class="comment-item">
        <div class="comment-header-row">
            <div class="user-info">
                <div class="user-icon">
                    <i class="fas fa-user"></i>
                </div>
                <div>
                    <h4 class="user-name">Amadou Banika</h4>
                    <div class="comment-meta">
                        <span class="comment-date">20/01/2023</span>
                        <span class="comment-tag tag-suggestion">Suggestion</span>
                    </div>
                </div>
            </div>
            <div class="comment-status status-approved">
                <i class="fas fa-check-circle"></i> Approuvé
            </div>
        </div>

        <p class="comment-text">Excellent travail ! Les bourses ont permis à mes enfants de poursuivre leurs études. Je suggère d'ajouter plus de formations pratiques.</p>

        <div class="team-response-block">
            <p class="response-header">Réponse de l'équipe : 21/01/2025</p>
            <p class="response-text">Merci Amadou pour ce retour positif ! Nous prenons note de votre suggestion et travaillons sur de nouvelles formations pratiques pour 2025.</p>
        </div>
    </div>

    <div class="comment-item">
        <div class="comment-header-row">
            <div class="user-info">
                <div class="user-icon">
                    <i class="fas fa-user"></i>
                </div>
                <div>
                    <h4 class="user-name">Fatoumata Traoré</h4>
                    <div class="comment-meta">
                        <span class="comment-date">19/01/2023</span>
                        <span class="comment-tag tag-question">Question</span>
                    </div>
                </div>
            </div>
            <div class="comment-status status-approved">
                <i class="fas fa-check-circle"></i> Approuvé
            </div>
        </div>

        <p class="comment-text">Comment puis-je postuler pour ma fille qui étudie à Bamako ? Les critères pour les étudiants à l'extérieur ne sont pas clairs.</p>

        <div class="team-response-block">
            <p class="response-header">Réponse de l'équipe : 19/01/2025</p>
            <p class="response-text">Bonjour Fatoumata, nous avons ajouté une section dédiée aux étudiants extérieurs. Contactez-nous à <a href="mailto:Adobanka@yahoo.fr">Adobanka@yahoo.fr</a> pour plus d'informations.</p>
        </div>
    </div>

</div>


 <!-- Footer -->
<footer>
  <div class="footer-container">
    <!-- Bloc logo + description -->
    <div class="footer-about">
      <div class="footer-logo">
        <img src="{{ asset('img/logo adolescence.jpg') }}" alt="" srcset="">
        <span>Association Excellence & Développement</span>
      </div>
      <p>
        Depuis 1996, nous nous engageons pour l'excellence éducative et le développement
        communautaire à travers nos programmes de bourses, nos activités et notre réseau
        de femmes leaders.
      </p><br/><hr/><br/>
      <p>&copy; 2025 Association Excellence & Développement. Tous droits réservés.</p>
    </div>

    <!-- Liens rapides -->
    <div class="footer-links">
      <h4>Liens Rapides</h4>
      <ul>
        <li><a href="index">Accueil</a></li>
        <li><a href="A propos-user">À propos</a></li>
        <li><a href="Activiter-user">Activités</a></li>
        <li><a href="bourse-user">Bourse adolescence</a></li>
        <li><a href="femmeadolescence-user">section femme adolescence</a></li>
        <li><a href="contact-user">contact</a></li>
      </ul>
    </div>

    <!-- Contact -->
    <div class="footer-contact">
      <h4>Contact</h4>
      <p>Adobanka@yahoo.fr</p>
      <p>+237 699 972 351 / +237 699 901 558</p>
      <p>immeuble adolescence sis face  sacre-coeur<br>new-bell</p>
    </div>
  </div>

  <!-- Copyright -->
  <div class="footer-bottom">
    <p>&copy; 2025 desing by ngounou joel | +237 672-633-092</p>
  </div>
</footer>

<!-- FORMULAIRE FLOTTANT COMMENTAIRE -->
<div id="comment-modal-bg" class="comment-modal-bg"></div>
<div id="comment-modal" class="comment-modal">
  <div class="comment-modal-content">
    <button id="comment-modal-close" class="comment-modal-close" title="Fermer">&times;</button>
    <h3>Laisser un commentaire</h3>
    <form id="floating-comment-form">
      <div class="form-group">
        <label for="floating-name">Nom complet *</label>
        <input type="text" id="floating-name" name="name" required placeholder="Votre nom complet">
      </div>
      <div class="form-group">
        <label for="floating-email">Email *</label>
        <input type="email" id="floating-email" name="email" required placeholder="votre.email@exemple.com">
      </div>
      <div class="form-group">
        <label for="floating-type">Type de commentaire *</label>
        <select id="floating-type" name="type" required>
          <option value="">Choisissez...</option>
          <option value="suggestion">Suggestion</option>
          <option value="question">Question</option>
          <option value="avis">Avis</option>
        </select>
      </div>
      <div class="form-group">
        <label for="floating-message">Message *</label>
        <textarea id="floating-message" name="message" required placeholder="Votre commentaire..." rows="4"></textarea>
      </div>
      <button type="submit" class="comment-modal-submit">Envoyer</button>
      <div id="floating-comment-feedback" class="feedback-message"></div>
    </form>
  </div>
</div>

<script src="{{ asset('jd/footer-header-user.js') }}"></script>
<script src="{{ asset('js/contact-user.js') }}"></script>
</body>
</html>
