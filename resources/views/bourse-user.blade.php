<!doctype html>
<html lang="fr">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>bourse Adolescence Banka</title>
    <link rel="stylesheet" href="{{ asset('css/bource-user.css') }}">
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
      <nav class="navigation" aria-labelledby="idlist">
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

 <!-- Hamburger Menu Button -->
    <button class="hamburger-btn" id="hamburgerBtn" aria-label="Menu">
        <svg class="menu-icon" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
            <line x1="3" y1="12" x2="21" y2="12"/>
            <line x1="3" y1="6" x2="21" y2="6"/>
            <line x1="3" y1="18" x2="21" y2="18"/>
        </svg>
        <svg class="close-icon" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
            <line x1="18" y1="6" x2="6" y2="18"/>
            <line x1="6" y1="6" x2="18" y2="18"/>
        </svg>
    </button>

    <!-- Sidebar Menu -->
    <div class="sidebar-overlay" id="sidebarOverlay"></div>
    <aside class="sidebar" id="sidebar">
        <div class="sidebar-header">
            <h2>Menu Bourses</h2>
            <button class="sidebar-close" id="sidebarClose">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <line x1="18" y1="6" x2="6" y2="18"/>
                    <line x1="6" y1="6" x2="18" y2="18"/>
                </svg>
            </button>
        </div>
        <nav class="sidebar-nav">
            <button class="sidebar-item" data-submenu="programmes">
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <path d="M22 10v6M2 10l10-5 10 5-10 5z"/>
                    <path d="M6 12v5c3 3 9 3 12 0v-5"/>
                </svg>
                <span>Programme de la Bourse</span>
                <svg class="chevron" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <polyline points="9 18 15 12 9 6"/>
                </svg>
            </button>
            <button class="sidebar-item" data-submenu="historique">
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <path d="M3 12a9 9 0 1 0 9-9 9.75 9.75 0 0 0-6.74 2.74L3 8"/>
                    <path d="M3 3v5h5"/>
                    <path d="M12 7v5l4 2"/>
                </svg>
                <span>Historique</span>
                <svg class="chevron" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <polyline points="9 18 15 12 9 6"/>
                </svg>
            </button>
            <button class="sidebar-item" data-submenu="galerie">
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <rect x="3" y="3" width="18" height="18" rx="2" ry="2"/>
                    <circle cx="8.5" cy="8.5" r="1.5"/>
                    <polyline points="21 15 16 10 5 21"/>
                </svg>
                <span>Galerie</span>
                <svg class="chevron" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <polyline points="9 18 15 12 9 6"/>
                </svg>
            </button>
            <button class="sidebar-item" data-submenu="boursiers">
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <path d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2"/>
                    <circle cx="9" cy="7" r="4"/>
                    <path d="M22 21v-2a4 4 0 0 0-3-3.87"/>
                    <path d="M16 3.13a4 4 0 0 1 0 7.75"/>
                </svg>
                <span>Liste des Boursiers Actuels</span>
                <svg class="chevron" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <polyline points="9 18 15 12 9 6"/>
                </svg>
            </button>
            <button class="sidebar-item" data-submenu="inscription" id="inscription">
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"/>
                    <polyline points="14 2 14 8 20 8"/>
                    <line x1="16" y1="13" x2="8" y2="13"/>
                    <line x1="16" y1="17" x2="8" y2="17"/>
                    <polyline points="10 9 9 9 8 9"/>
                </svg>
                <span>Détails d'Inscription</span>
                <svg class="chevron" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <polyline points="9 18 15 12 9 6"/>
                </svg>
            </button>
            <button class="sidebar-item" data-submenu="partenaires">
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"/>
                    <circle cx="12" cy="7" r="4"/>
                </svg>
                <span>Partenaires & Sponsors</span>
                <svg class="chevron" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <polyline points="9 18 15 12 9 6"/>
                </svg>
            </button>
        </nav>
    </aside>

    <!-- Main Content -->
    <main class="main-content">
        <div class="container">
            <div id="content">
                <!-- Default Home Content -->
                <div class="home-section">
                    <div class="home-header">
                        <h1>Programmes de Bourses</h1>
                        <p>Découvrez nos différents programmes de bourses conçus pour soutenir l'excellence académique et l'innovation</p>
                    </div>

                    <div class="scholarship-card emerald">
                        <div class="card-header">
                            <div class="card-icon">
                                <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <path d="M22 10v6M2 10l10-5 10 5-10 5z"/>
                                    <path d="M6 12v5c3 3 9 3 12 0v-5"/>
                                </svg>
                            </div>
                            <div>
                                <h2>Bourse d'Excellence Académique</h2>
                                <p>Bourse destinée aux étudiants avec d'excellents résultats académiques souhaitant poursuivre des études supérieures.</p>
                            </div>
                        </div>

                        <div class="stats-grid">
                            <div class="stat-card">
                                <div class="stat-value">12.000.000 FCFA</div>
                                <div class="stat-label">Montant / an</div>
                            </div>
                            <div class="stat-card">
                                <div class="stat-value">30 ans</div>
                                <div class="stat-label">Durée</div>
                            </div>
                            <div class="stat-card">
                                <div class="stat-value">31 novembre</div>
                                <div class="stat-label">Date limite</div>
                            </div>
                        </div>

                        <div class="card-actions">
                            <button class="btn btn-primary">Postuler Maintenant</button>
                            <button class="btn btn-secondary">Voir les détails (3)</button>
                        </div>
                    </div>
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
        <li><a href="accuille-user">Accueil</a></li>
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

<script src="{{ asset('js/bourse-user.js') }}"></script>
<script src="{{ asset('js/footer-header-user.js') }}"></script>
</body>
</html>

