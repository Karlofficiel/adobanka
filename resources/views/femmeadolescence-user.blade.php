<!doctype html>
<html lang="fr">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>femme adolescence banka</title>
    <link rel="stylesheet" href="{{ asset('css/femmeadolescence-user.css') }}">
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

 <section id="femme-adolescence-page">
    <div class="femme-header">
        <h2 class="femme-title"><i class="fas fa-crown"></i> Section Femmes Adolescence <i class="fas fa-crown"></i></h2>
        <p class="femme-subtitle">Une section dédiée à l'autonomisation des femmes Banka et à la promotion du leadership féminin dans notre communauté. Nous œuvrons pour l'émancipation économique, sociale et culturelle des femmes de Banka.</p>
    </div>

    <div class="femme-main-block">
        <div class="main-block-content">
            <span class="main-tag"><i class="fas fa-bolt"></i> Leadership Féminin</span>
            <h3>Ensemble vers l'Excellence</h3>
            <p>Notre section féminine est un espace dédié à l'autonomisation des femmes, où nous cultivons le leadership, favorisons les échanges et construisons un réseau fort de femmes inspirantes.</p>
            <div class="main-block-actions">
                <a href="#" class="btn-primary-femme" id="join-community-btn"><i class="fas fa-users"></i> Rejoindre la Communauté</a>
                <a href="#" class="btn-secondary-femme" id="learn-more-btn">En Savoir Plus</a>
            </div>
        </div>
        <div class="main-block-image">
            <div class="crown-circle">
                <i class="fas fa-crown"></i>
            </div>
            <i class="fas fa-star star-deco"></i>
        </div>
    </div>

    <div class="activites-header">
        <h2 class="section-title">Nos Activités</h2>
    </div>

    <div class="activites-grid">
        <div class="activite-card">
            <div class="activite-icon"><i class="fas fa-heart"></i></div>
            <h4>Ateliers de formation en entrepreneuriat</h4>
            <p>Une opportunité unique de grandir, d'apprendre et de créer des liens durables avec d'autres femmes inspirantes.</p>
        </div>
        <div class="activite-card">
            <div class="activite-icon"><i class="fas fa-heart"></i></div>
            <h4>Microfinance et accompagnement économique</h4>
            <p>Une opportunité unique de grandir, d'apprendre et de créer des liens durables avec d'autres femmes inspirantes.</p>
        </div>
        <div class="activite-card">
            <div class="activite-icon"><i class="fas fa-heart"></i></div>
            <h4>Sensibilisation santé reproductive</h4>
            <p>Une opportunité unique de grandir, d'apprendre et de créer des liens durables avec d'autres femmes inspirantes.</p>
        </div>
        <div class="activite-card">
            <div class="activite-icon"><i class="fas fa-heart"></i></div>
            <h4>Formation en leadership féminin</h4>
            <p>Une opportunité unique de grandir, d'apprendre et de créer des liens durables avec d'autres femmes inspirantes.</p>
        </div>
        <div class="activite-card">
            <div class="activite-icon"><i class="fas fa-heart"></i></div>
            <h4>Solidarité et entraide entre femmes Banka</h4>
            <p>Une opportunité unique de grandir, d'apprendre et de créer des liens durables avec d'autres femmes inspirantes.</p>
        </div>
        <div class="activite-card">
            <div class="activite-icon"><i class="fas fa-heart"></i></div>
            <h4>Préservation des traditions et culture Banka</h4>
            <p>Une opportunité unique de grandir, d'apprendre et de créer des liens durables avec d'autres femmes inspirantes.</p>
        </div>
    </div>

    <div class="contact-chiffres-section">

        <div class="restons-contact-block">
            <div class="contact-icon-mail">
                <i class="far fa-envelope"></i>
            </div>
            <h4>Restons en Contact</h4>
            <p>Vous souhaitez rejoindre notre communauté de femmes leaders ? N'hésitez pas à nous contacter pour plus d'informations.</p>
            <div class="contact-action-row">
                <span class="contact-email">femmes@adolescencebanka.org</span>
                <a href="mailto:femmes@adolescencebanka.org" class="btn-write-us">Nous Écrire</a>
            </div>
        </div>

        <div class="chiffres-cles-grid">
            <div class="chiffre-card">
                <div class="chiffre-icon icon-users">
                    <i class="fas fa-users"></i>
                </div>
                <div class="chiffre-value" data-target="250">0</div>
                <div class="chiffre-label">Membres Actives</div>
            </div>
            <div class="chiffre-card">
                <div class="chiffre-icon icon-calendar">
                    <i class="fas fa-calendar-alt"></i>
                </div>
                <div class="chiffre-value" data-target="24">0</div>
                <div class="chiffre-label">Événements Annuels</div>
            </div>
            <div class="chiffre-card">
                <div class="chiffre-icon icon-crown">
                    <i class="fas fa-crown"></i>
                </div>
                <div class="chiffre-value" data-target="15">0</div>
                <div class="chiffre-label">Années d'Excellence</div>
            </div>
        </div>
    </div>
</section>

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

<script src="{{ asset('js/footer-header-user.js') }}"></script>
<script src="{{ asset('js/femmeadolescence-user.js') }}"></script>
</body>
</html>
