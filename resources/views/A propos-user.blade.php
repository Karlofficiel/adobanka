<!doctype html>
<html lang="fr">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>historique Adolescence Banka</title>
    <link rel="stylesheet" href="{{ asset('css/A propos-user.css') }}">
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

       <div class="timeline">
        <div class="timeline-item">
          <div class="timeline-marker"></div>
          <div class="timeline-content left">
            <div class="timeline-card">
              <div class="card-header">
                <div class="card-icon">
                  <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <rect x="3" y="4" width="18" height="18" rx="2" stroke="white" stroke-width="2"/>
                    <line x1="3" y1="9" x2="21" y2="9" stroke="white" stroke-width="2"/>
                    <line x1="8" y1="1" x2="8" y2="5" stroke="white" stroke-width="2" stroke-linecap="round"/>
                    <line x1="16" y1="1" x2="16" y2="5" stroke="white" stroke-width="2" stroke-linecap="round"/>
                  </svg>
                </div>
                <div class="card-year-label">
                  <span class="year-number">1995</span>
                  <span class="year-badge">Fondation</span>
                </div>
              </div>

              <h3 class="card-title">Fondation de l'Association Adolescence Banka</h3>

              <p class="card-description">
                Création de l'association par un groupe de ressortissants de Banka déterminés à soutenir l'éducation des jeunes de leur communauté.
              </p>

              <div class="card-footer">
                <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <rect x="2" y="3" width="12" height="12" rx="1.5" stroke="currentColor" stroke-width="1.5"/>
                  <line x1="2" y1="6" x2="14" y2="6" stroke="currentColor" stroke-width="1.5"/>
                  <line x1="5" y1="1" x2="5" y2="4" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"/>
                  <line x1="11" y1="1" x2="11" y2="4" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"/>
                </svg>
                 <STRong><span class="card-date">Année 1995</span><p><a href="#" style="text-decoration: none; color:green;"> VOIR PLUS.........</a></p></STRong>
              </div>
            </div>
            <div class="timeline-year-bg">1995</div>
          </div>
        </div>

        <div class="timeline-item">
          <div class="timeline-marker"></div>
          <div class="timeline-content right">
            <div class="timeline-card">
              <div class="card-header">
                <div class="card-icon">
                  <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M12 2L15.09 8.26L22 9.27L17 14.14L18.18 21.02L12 17.77L5.82 21.02L7 14.14L2 9.27L8.91 8.26L12 2Z" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                  </svg>
                </div>
                <div class="card-year-label">
                  <span class="year-number">1998</span>
                  <span class="year-badge">Étape clé</span>
                </div>
              </div>

              <h3 class="card-title">Première Bourse Adolescence Banka</h3>

              <p class="card-description">
                Lancement du premier programme de bourses d'études pour soutenir les élèves méritants de la communauté Banka dans leur parcours académique.
              </p>

              <div class="card-footer">
                <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <rect x="2" y="3" width="12" height="12" rx="1.5" stroke="currentColor" stroke-width="1.5"/>
                  <line x1="2" y1="6" x2="14" y2="6" stroke="currentColor" stroke-width="1.5"/>
                  <line x1="5" y1="1" x2="5" y2="4" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"/>
                  <line x1="11" y1="1" x2="11" y2="4" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"/>
                </svg>
                <STRong><span class="card-date">Année 1998</span><p><a href="#" style="text-decoration: none; color:green;">VOIR PLUS.........</a></p></STRong>
              </div>
            </div>
            <div class="timeline-year-bg">1998</div>
          </div>
        </div>

        <div class="timeline-item">
          <div class="timeline-marker"></div>
          <div class="timeline-content left">
            <div class="timeline-card">
              <div class="card-header">
                <div class="card-icon">
                  <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M19 21H5C4.46957 21 3.96086 20.7893 3.58579 20.4142C3.21071 20.0391 3 19.5304 3 19V5C3 4.46957 3.21071 3.96086 3.58579 3.58579C3.96086 3.21071 4.46957 3 5 3H19C19.5304 3 20.0391 3.21071 20.4142 3.58579C20.7893 3.96086 21 4.46957 21 5V19C21 19.5304 20.7893 20.0391 20.4142 20.4142C20.0391 20.7893 19.5304 21 19 21Z" stroke="white" stroke-width="2"/>
                    <path d="M12 7V17M7 12H17" stroke="white" stroke-width="2" stroke-linecap="round"/>
                  </svg>
                </div>
                <div class="card-year-label">
                  <span class="year-number">2005</span>
                  <span class="year-badge">Développement</span>
                </div>
              </div>

              <h3 class="card-title">Extension des Programmes</h3>

              <p class="card-description">
                Expansion des activités avec l'ajout de programmes de mentorat et de soutien scolaire pour accompagner les jeunes tout au long de leur scolarité.
              </p>

              <div class="card-footer">
                <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <rect x="2" y="3" width="12" height="12" rx="1.5" stroke="currentColor" stroke-width="1.5"/>
                  <line x1="2" y1="6" x2="14" y2="6" stroke="currentColor" stroke-width="1.5"/>
                  <line x1="5" y1="1" x2="5" y2="4" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"/>
                  <line x1="11" y1="1" x2="11" y2="4" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"/>
                </svg>
                <STRong><span class="card-date">Année 2005</span><p><a href="#" style="text-decoration: none; color:green;">VOIR PLUS.........</a></p></STRong>
              </div>
            </div>
            <div class="timeline-year-bg">2005</div>
          </div>
        </div>

        <div class="timeline-item">
          <div class="timeline-marker"></div>
          <div class="timeline-content right">
            <div class="timeline-card">
              <div class="card-header">
                <div class="card-icon">
                  <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <circle cx="12" cy="12" r="10" stroke="white" stroke-width="2"/>
                    <path d="M12 6V12L16 14" stroke="white" stroke-width="2" stroke-linecap="round"/>
                  </svg>
                </div>
                <div class="card-year-label">
                  <span class="year-number">2015</span>
                  <span class="year-badge">Croissance</span>
                </div>
              </div>

              <h3 class="card-title">100 Bourses Attribuées</h3>

              <p class="card-description">
                Franchissement d'un cap important avec plus de 100 bourses d'études attribuées depuis la création de l'association, impactant positivement des centaines de familles.
              </p>

              <div class="card-footer">
                <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <rect x="2" y="3" width="12" height="12" rx="1.5" stroke="currentColor" stroke-width="1.5"/>
                  <line x1="2" y1="6" x2="14" y2="6" stroke="currentColor" stroke-width="1.5"/>
                  <line x1="5" y1="1" x2="5" y2="4" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"/>
                  <line x1="11" y1="1" x2="11" y2="4" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"/>
                </svg>
                <STRong><span class="card-date">Année 2015</span><p><a href="#" style="text-decoration: none; color:green;">VOIR PLUS.........</a></p></STRong>
              </div>
            </div>
            <div class="timeline-year-bg">2015</div>
          </div>
        </div>

        <div class="timeline-item">
          <div class="timeline-marker active"></div>
          <div class="timeline-content left">
            <div class="timeline-card">
              <div class="card-header">
                <div class="card-icon">
                  <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M21 12C21 16.9706 16.9706 21 12 21C7.02944 21 3 16.9706 3 12C3 7.02944 7.02944 3 12 3C16.9706 3 21 7.02944 21 12Z" stroke="white" stroke-width="2"/>
                    <path d="M9 12L11 14L15 10" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                  </svg>
                </div>
                <div class="card-year-label">
                  <span class="year-number">2025</span>
                  <span class="year-badge">Aujourd'hui</span>
                </div>
              </div>

              <h3 class="card-title">30 Ans d'Engagement</h3>

              <p class="card-description">
                Célébration de trois décennies d'engagement pour l'éducation et le développement de la jeunesse Banka, avec des centaines de jeunes accompagnés vers la réussite.
              </p>

              <div class="card-footer">
                <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <rect x="2" y="3" width="12" height="12" rx="1.5" stroke="currentColor" stroke-width="1.5"/>
                  <line x1="2" y1="6" x2="14" y2="6" stroke="currentColor" stroke-width="1.5"/>
                  <line x1="5" y1="1" x2="5" y2="4" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"/>
                  <line x1="11" y1="1" x2="11" y2="4" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"/>
                </svg>
                <STRong><span class="card-date">Année 2025</span><p><a href="#" style="text-decoration: none; color:green;">VOIRE PLUS.........</a></p></STRong>
              </div>
            </div>
            <div class="timeline-year-bg">2025</div>
          </div>
        </div>
      </div>
    </main>
        <main class="stats-container">
      <div class="stats-grid">
        <div class="stat-card">
          <div class="stat-icon">
            <svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
              <rect x="6" y="8" width="20" height="20" rx="2" stroke="white" stroke-width="2.5"/>
              <line x1="6" y1="13" x2="26" y2="13" stroke="white" stroke-width="2.5"/>
              <line x1="11" y1="4" x2="11" y2="10" stroke="white" stroke-width="2.5" stroke-linecap="round"/>
              <line x1="21" y1="4" x2="21" y2="10" stroke="white" stroke-width="2.5" stroke-linecap="round"/>
            </svg>
          </div>
          <div class="stat-number">1</div>
          <div class="stat-label">Fondations</div>
        </div>

        <div class="stat-card">
          <div class="stat-icon">
            <svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
              <rect x="6" y="8" width="20" height="20" rx="2" stroke="white" stroke-width="2.5"/>
              <line x1="6" y1="13" x2="26" y2="13" stroke="white" stroke-width="2.5"/>
              <line x1="11" y1="4" x2="11" y2="10" stroke="white" stroke-width="2.5" stroke-linecap="round"/>
              <line x1="21" y1="4" x2="21" y2="10" stroke="white" stroke-width="2.5" stroke-linecap="round"/>
            </svg>
          </div>
          <div class="stat-number">2</div>
          <div class="stat-label">Expansions</div>
        </div>

        <div class="stat-card">
          <div class="stat-icon">
            <svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M16 4L18.472 11.528L26 14L18.472 16.472L16 24L13.528 16.472L6 14L13.528 11.528L16 4Z" stroke="white" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
          </div>
          <div class="stat-number">2</div>
          <div class="stat-label">Récompenses</div>
        </div>

        <div class="stat-card">
          <div class="stat-icon">
            <svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
              <circle cx="16" cy="12" r="5" stroke="white" stroke-width="2.5"/>
              <path d="M8 26C8 22.6863 10.6863 20 14 20H18C21.3137 20 24 22.6863 24 26" stroke="white" stroke-width="2.5" stroke-linecap="round"/>
            </svg>
          </div>
          <div class="stat-number">4</div>
          <div class="stat-label">Étape clés</div>
        </div>
      </div>
    </main>

 <!-- Footer -->
<footer>
  <div class="footer-container">
    <!-- Bloc logo + description -->
    <div class="footer-about">
      <div class="footer-logo">
        <img src="{{ asset('logo adolescence.jpg') }}" alt="" srcset="">
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

<script src="{{ asset('js/a propos-user.js') }}"></script>
<script src="{{ asset('js/footer-header-user.js') }}"></script>
</body>
</html>
