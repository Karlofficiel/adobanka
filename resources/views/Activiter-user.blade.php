<!doctype html>
<html lang="fr">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Activiter Adolescence Banka</title>
    <link rel="stylesheet" href="{{ asset('css/activiter-user.css') }}">
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

<main class="activites-container">
      <header class="activites-header">
        <h1 class="activites-title">Actualités & Activités</h1>
        <p class="activites-subtitle">Restez informés de nos dernières publications et découvrez nos activités en cours</p>
      </header>

      <div class="tabs-container">
        <div class="tabs">
          <button class="tab-btn active" data-tab="publications">
            <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M6 2H14C15.1046 2 16 2.89543 16 4V18L10 15L4 18V4C4 2.89543 4.89543 2 6 2Z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
            Publications Récentes
          </button>
          <button class="tab-btn" data-tab="activites">
            <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
              <rect x="3" y="4" width="14" height="14" rx="2" stroke="currentColor" stroke-width="2"/>
              <line x1="3" y1="8" x2="17" y2="8" stroke="currentColor" stroke-width="2"/>
              <line x1="7" y1="1" x2="7" y2="5" stroke="currentColor" stroke-width="2" stroke-linecap="round"/>
              <line x1="13" y1="1" x2="13" y2="5" stroke="currentColor" stroke-width="2" stroke-linecap="round"/>
            </svg>
            Activités en Cours
          </button>
        </div>
      </div>

      <div class="content-container">
        <div class="tab-content active" id="publications">
          <div class="publications-list">
            <article class="publication-card">
              <div class="card-left">
                <div class="card-icon announcement">
                  <svg width="28" height="28" viewBox="0 0 28 28" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M22 8L18 12L22 16V8Z" stroke="white" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"/>
                    <path d="M18 8H8C6.89543 8 6 8.89543 6 10V14C6 15.1046 6.89543 16 8 16H18V8Z" stroke="white" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"/>
                    <path d="M10 16V19C10 19.5523 10.4477 20 11 20H12" stroke="white" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"/>
                  </svg>
                </div>
                <div class="card-content">
                  <div class="card-header-info">
                    <h3 class="card-title">Lancement du Programme de Mentorat des bourse  Jeunes Banka 2025</h3>
                    <span class="card-badge">Annonce</span>
                  </div>
                  <div class="card-meta">
                    <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <rect x="2" y="3" width="12" height="12" rx="1.5" stroke="currentColor" stroke-width="1.5"/>
                      <line x1="2" y1="6" x2="14" y2="6" stroke="currentColor" stroke-width="1.5"/>
                      <line x1="5" y1="1" x2="5" y2="4" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"/>
                      <line x1="11" y1="1" x2="11" y2="4" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"/>
                    </svg>
                    <span class="card-date">15 janvier 2025</span>
                    <span class="card-separator">•</span>
                    <span class="card-author">Par Commission Jeunesse</span>
                  </div>
                  <p class="card-description">
                      Nous sommes fiers d'annoncer le lancement de notre nouveau programme de mentorat qui connectera nos anciens boursiers avec les nouveaux candidats de la communauté Banka. Ce programme vise à créer un réseau de soutien durable pour notre jeunesse.
                  </p>
                  <div class="card-tags">
                    <span class="tag">#mentorat</span>
                    <span class="tag">#jeunesse</span>
                    <span class="tag">#banka</span>
                    <span class="tag">#2025</span>
                  </div>
                </div>
              </div>
              <div class="card-image">
                <img src="{{ asset('img/photo groupe.jpg') }}" alt="Programme de mentorat">
              </div>
            </article>

            <article class="publication-card">
              <div class="card-left">
                <div class="card-icon event">
                  <svg width="28" height="28" viewBox="0 0 28 28" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <rect x="5" y="6" width="18" height="18" rx="2" stroke="white" stroke-width="2.5"/>
                    <line x1="5" y1="11" x2="23" y2="11" stroke="white" stroke-width="2.5"/>
                    <line x1="10" y1="3" x2="10" y2="8" stroke="white" stroke-width="2.5" stroke-linecap="round"/>
                    <line x1="18" y1="3" x2="18" y2="8" stroke="white" stroke-width="2.5" stroke-linecap="round"/>
                    <circle cx="10" cy="16" r="1.5" fill="white"/>
                    <circle cx="14" cy="16" r="1.5" fill="white"/>
                    <circle cx="18" cy="16" r="1.5" fill="white"/>
                  </svg>
                </div>
                <div class="card-content">
                  <div class="card-header-info">
                    <h3 class="card-title">Assemblée Générale 2022 - "Unité et Développement"</h3>
                    <span class="card-badge event-badge">Événement</span>
                  </div>
                  <div class="card-meta">
                    <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <rect x="2" y="3" width="12" height="12" rx="1.5" stroke="currentColor" stroke-width="1.5"/>
                      <line x1="2" y1="6" x2="14" y2="6" stroke="currentColor" stroke-width="1.5"/>
                      <line x1="5" y1="1" x2="5" y2="4" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"/>
                      <line x1="11" y1="1" x2="11" y2="4" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"/>
                    </svg>
                    <span class="card-date">10 janvier 2025</span>
                    <span class="card-separator">•</span>
                    <span class="card-author">Par Bureau Exécutif</span>
                  </div>
                  <p class="card-description">
                    Notre assemblée générale annuelle aura lieu le 15 mars 2025 à Banka. Rejoignez-nous pour faire le bilan de nos actions et définir ensemble l'avenir de notre association et de notre communauté.
                  </p>
                  <div class="card-tags">
                    <span class="tag">#assemblée</span>
                    <span class="tag">#banka</span>
                    <span class="tag">#développement</span>
                  </div>
                </div>
              </div>
              <div class="card-image">
                <img src="{{ asset('img/img3.JPG') }}" alt="Assemblée générale">
              </div>
            </article>

            <article class="publication-card">
              <div class="card-left">
                <div class="card-icon success">
                  <svg width="28" height="28" viewBox="0 0 28 28" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M14 3L16.5 8.5L23 9.5L18.5 13.5L19.5 20L14 17L8.5 20L9.5 13.5L5 9.5L11.5 8.5L14 3Z" stroke="white" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"/>
                  </svg>
                </div>
                <div class="card-content">
                  <div class="card-header-info">
                    <h3 class="card-title">Cérémonie de Remise des Bourses 2024</h3>
                    <span class="card-badge success-badge">Succès</span>
                  </div>
                  <div class="card-meta">
                    <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <rect x="2" y="3" width="12" height="12" rx="1.5" stroke="currentColor" stroke-width="1.5"/>
                      <line x1="2" y1="6" x2="14" y2="6" stroke="currentColor" stroke-width="1.5"/>
                      <line x1="5" y1="1" x2="5" y2="4" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"/>
                      <line x1="11" y1="1" x2="11" y2="4" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"/>
                    </svg>
                    <span class="card-date">28 décembre 2024</span>
                    <span class="card-separator">•</span>
                    <span class="card-author">Par Commission Bourses</span>
                  </div>
                  <p class="card-description">
                    Grande réussite pour notre cérémonie annuelle de remise des bourses avec 25 nouveaux bénéficiaires. Un moment émouvant qui témoigne de l'engagement continu de notre association envers l'éducation.
                  </p>
                  <div class="card-tags">
                    <span class="tag">#bourses</span>
                    <span class="tag">#éducation</span>
                    <span class="tag">#cérémonie</span>
                    <span class="tag">#2024</span>
                  </div>
                </div>
              </div>
              <div class="card-image">
                <img src="{{ asset('img/bourse.JPG') }}" alt="Cérémonie de remise">
              </div>
            </article>
          </div>
        </div>

        <div class="tab-content" id="activites">
          <div class="publications-list">
            <article class="publication-card">
              <div class="card-left">
                <div class="card-icon progress">
                  <svg width="28" height="28" viewBox="0 0 28 28" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <circle cx="14" cy="14" r="10" stroke="white" stroke-width="2.5"/>
                    <path d="M14 6V14L18 16" stroke="white" stroke-width="2.5" stroke-linecap="round"/>
                  </svg>
                </div>
                <div class="card-content">
                  <div class="card-header-info">
                    <h3 class="card-title">Campagne de Collecte de Fonds 2025</h3>
                    <span class="card-badge progress-badge">En Cours</span>
                  </div>
                  <div class="card-meta">
                    <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <rect x="2" y="3" width="12" height="12" rx="1.5" stroke="currentColor" stroke-width="1.5"/>
                      <line x1="2" y1="6" x2="14" y2="6" stroke="currentColor" stroke-width="1.5"/>
                      <line x1="5" y1="1" x2="5" y2="4" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"/>
                      <line x1="11" y1="1" x2="11" y2="4" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"/>
                    </svg>
                    <span class="card-date">septembre - novembre 2025</span>
                    <span class="card-separator">•</span>
                    <span class="card-author">Par Commission Finances</span>
                  </div>
                  <p class="card-description">
                    Notre campagne annuelle de collecte est en cours pour financer les bourses d'études de 2025. Objectif: 15.000.000 pour soutenir pluas de 70 nouveaux étudiants. Chaque contribution compte!
                  </p>
                  <div class="progress-bar-container">
                    <div class="progress-bar">
                      <div class="progress-fill" style="width: 65%"></div>
                    </div>
                    <div class="progress-info">
                      <span class="progress-label">65% atteint</span>
                      <span class="progress-amount">7.000.000 / 15.000.000</span>
                    </div>
                  </div>
                  <div class="card-tags">
                    <span class="tag">#collecte</span>
                    <span class="tag">#solidarité</span>
                    <span class="tag">#bourses</span>
                  </div>
                </div>
              </div>
              <div class="card-image">
                <img src="{{ asset('img/collecte.JPG') }}" alt="Collecte de fonds">
              </div>
            </article>

            <article class="publication-card">
              <div class="card-left">
                <div class="card-icon progress">
                  <svg width="28" height="28" viewBox="0 0 28 28" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M9 18L3 12L9 6M19 6L25 12L19 18M16 3L12 25" stroke="white" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"/>
                  </svg>
                </div>
                <div class="card-content">
                  <div class="card-header-info">
                    <h3 class="card-title">Ateliers de Formation culturelle</h3>
                    <span class="card-badge progress-badge">En Cours</span>
                  </div>
                  <div class="card-meta">
                    <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <rect x="2" y="3" width="12" height="12" rx="1.5" stroke="currentColor" stroke-width="1.5"/>
                      <line x1="2" y1="6" x2="14" y2="6" stroke="currentColor" stroke-width="1.5"/>
                      <line x1="5" y1="1" x2="5" y2="4" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"/>
                      <line x1="11" y1="1" x2="11" y2="4" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"/>
                    </svg>
                    <span class="card-date">Février - Juin 2025</span>
                    <span class="card-separator">•</span>
                    <span class="card-author">Par Commission Formation</span>
                  </div>
                  <p class="card-description">
                    Série d'ateliers pratiques pour développer les compétences culturelle et traditionnelle de nos jeunes, 15 participants inscrits.
                  </p>
                  <div class="card-tags">
                    <span class="tag">#formation culturelle</span>
                    <span class="tag">#formation traditionnelle</span>
                    <span class="tag">#compétences</span>
                  </div>
                </div>
              </div>
              <div class="card-image">
                <img src="{{ asset('img/activiter.JPG') }}" alt="" srcset="">
              </div>
            </article>
          </div>
        </div>
      </div>
    </main>


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
<script src="{{ asset('js/activiter-user.js') }}"></script>
</body>
</html>
