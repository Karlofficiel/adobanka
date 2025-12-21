<!doctype html>
<html lang="fr">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Accueil - Association Adolescence Banka</title>
    <link rel="stylesheet" href=" {{ asset('css/accuille-user.css') }}">
    <link rel="stylesheet" href=" {{ asset('css/footer-header-user.css') }}">
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
            <span class="user-label">Connecté en tant que : <strong class="user-name">user</strong></span>
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

        @foreach($affiche as $index => $annonce)
            <div class="notification" id="notif-{{ $index }}">
                <div class="notif-icon">
                    ❗
                </div>

                <div class="notif-content">
                    <h4>{{ $annonce->type }}</h4>
                    <p>{{ $annonce->message }}</p>
                    <span class="notif-read">Marquer comme lu</span>
                </div>

                <button class="notif-close" onclick="closeNotif($index)">✕</button>
            </div>
        @endforeach



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

      <!-- Hero Section -->
      <section class="hero-section">
        <div class="hero-container">
          <a href="contact-user#carte" style="text-decoration: none;"><div class="location-badge">
            <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M14 6.66667C14 11.3333 8 15.3333 8 15.3333C8 15.3333 2 11.3333 2 6.66667C2 5.07536 2.63214 3.54926 3.75736 2.42404C4.88258 1.29882 6.40869 0.666672 8 0.666672C9.59131 0.666672 11.1174 1.29882 12.2426 2.42404C13.3679 3.54926 14 5.07536 14 6.66667Z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
              <path d="M8 8.66667C9.10457 8.66667 10 7.77124 10 6.66667C10 5.5621 9.10457 4.66667 8 4.66667C6.89543 4.66667 6 5.5621 6 6.66667C6 7.77124 6.89543 8.66667 8 8.66667Z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
            adolescence banka new-bell
          </div></a>

          <h2 class="hero-title">
            Association<br>
            <span class="hero-title-highlight">Adolescence Banka</span>
          </h2>

          <p class="hero-description">
            Depuis 30 ans, nous œuvrons pour l'éducation, le développement et<br>
            l'autonomisation de la jeunesse de Banka et de sa diaspora
          </p>

          <div class="hero-buttons">
            <a href="bource-user.#inscription#quandidate" style="text-decoration: none;"><button class="hero-btn btn-primary">
              <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M16.25 8.75L10 2.5L3.75 8.75" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                <path d="M10 2.5V12.5" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                <path d="M2.5 12.5H17.5V16.25C17.5 16.5815 17.3683 16.8995 17.1339 17.1339C16.8995 17.3683 16.5815 17.5 16.25 17.5H3.75C3.41848 17.5 3.10054 17.3683 2.86612 17.1339C2.6317 16.8995 2.5 16.5815 2.5 16.25V12.5Z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
              </svg>
              Candidater à une bourse
            </button></a>
            <a href="Activiter-user" style="text-decoration: none;"><button class="hero-btn btn-secondary">
              Voir nos projets
            </button></a>
          </div>
        </div>
      </section>

      <!-- Statistics Section -->
      <section class="statistics-section">
        <div class="statistics-container">
          <div class="stat-card">
            <div class="stat-icon blue">
              <svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M26.6667 9.33334L16 4L5.33334 9.33334V21.3333C5.33334 22.0406 5.61429 22.7189 6.11438 23.219C6.61448 23.719 7.29276 24 8.00001 24H24C24.7073 24 25.3855 23.719 25.8856 23.219C26.3857 22.7189 26.6667 22.0406 26.6667 21.3333V9.33334Z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                <path d="M16 10.6667V17.3333L20 19.3333" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
              </svg>
            </div>
            <div class="stat-number">1,200+</div>
            <div class="stat-label">Bourses accordées</div>
          </div>

          <div class="stat-card">
            <div class="stat-icon green">
              <svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M22.6667 28V25.3333C22.6667 23.9188 22.1048 22.5623 21.1046 21.5621C20.1044 20.5619 18.7479 20 17.3333 20H9.33334C7.91885 20 6.56229 20.5619 5.5621 21.5621C4.5619 22.5623 4.00001 23.9188 4.00001 25.3333V28" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                <path d="M13.3333 14.6667C16.2789 14.6667 18.6667 12.2789 18.6667 9.33334C18.6667 6.38782 16.2789 4.00001 13.3333 4.00001C10.3878 4.00001 8.00001 6.38782 8.00001 9.33334C8.00001 12.2789 10.3878 14.6667 13.3333 14.6667Z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                <path d="M28 28V25.3333C27.9992 24.1472 27.5996 23.0001 26.8685 22.0743C26.1374 21.1485 25.1178 20.4977 23.9733 20.2267" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                <path d="M20.6933 4.22668C21.8401 4.49641 22.8623 5.14761 23.5951 6.07486C24.3279 7.00211 24.7282 8.1514 24.7282 9.34001C24.7282 10.5286 24.3279 11.6779 23.5951 12.6052C22.8623 13.5324 21.8401 14.1836 20.6933 14.4533" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
              </svg>
            </div>
            <div class="stat-number">1,200+</div>
            <div class="stat-label">Bénéficiaires</div>
          </div>

          <div class="stat-card">
            <div class="stat-icon purple">
              <svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M16 28C22.6274 28 28 22.6274 28 16C28 9.37258 22.6274 4 16 4C9.37258 4 4 9.37258 4 16C4 22.6274 9.37258 28 16 28Z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                <path d="M16 8V16L21.3333 18.6667" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
              </svg>
            </div>
            <div class="stat-number">30</div>
            <div class="stat-label">Années d'expérience</div>
          </div>

          <div class="stat-card">
            <div class="stat-icon red">
              <svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M27.7867 14.8C27.0134 9.97334 23.0267 6.14667 18.16 5.54667C16.9049 5.41031 15.6355 5.52342 14.4267 5.88C13.9067 6.04 13.4134 6.26667 12.9467 6.52C11.9467 7.06667 11.0667 7.82667 10.3734 8.73334C9.86669 9.41334 9.46669 10.1733 9.20002 11C8.92002 11.8667 8.76002 12.7867 8.76002 13.7333C8.76002 15.0933 9.10669 16.3733 9.70669 17.5067C10.3067 18.64 11.1334 19.6 12.1334 20.3333C13.1334 21.0667 14.2934 21.5467 15.5467 21.72C16.8 21.8933 18.08 21.76 19.2667 21.3333C20.4534 20.9067 21.52 20.2133 22.3867 19.3067C23.2534 18.4 23.8934 17.2933 24.24 16.08" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                <path d="M26.4533 6.66667L24.2933 16.0933L14.8667 13.9333" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
              </svg>
            </div>
            <div class="stat-number">45+</div>
            <div class="stat-label">Partenaires</div>
          </div>
        </div>
      </section>

      <!-- Mission & Vision Section -->
      <section class="mission-vision-section">
        <div class="mission-vision-container">
          <div class="mission-card">
            <div class="card-header blue">
              <div class="card-icon">
                <svg width="28" height="28" viewBox="0 0 28 28" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M14 25.6667C20.4433 25.6667 25.6667 20.4433 25.6667 14C25.6667 7.55672 20.4433 2.33334 14 2.33334C7.55672 2.33334 2.33334 7.55672 2.33334 14C2.33334 20.4433 7.55672 25.6667 14 25.6667Z" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                  <path d="M14 7V14L18.6667 16.3333" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
              </div>
              <h3 class="card-title">Notre Mission</h3>
            </div>
            <p class="card-description">
              Promouvoir l'éducation, la formation et le développement socio-économique des jeunes de Banka et de sa diaspora à travers des programmes de bourses, de formation et d'accompagnement personnalisé.
            </p>
          </div>

          <div class="mission-card">
            <div class="card-header green">
              <div class="card-icon">
                <svg width="28" height="28" viewBox="0 0 28 28" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M14 2.33334L3.5 8.16668V19.8333C3.5 20.4964 3.76339 21.1323 4.23223 21.6011C4.70107 22.0699 5.33696 22.3333 6 22.3333H22C22.663 22.3333 23.2989 22.0699 23.7678 21.6011C24.2366 21.1323 24.5 20.4964 24.5 19.8333V8.16668L14 2.33334Z" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                  <path d="M10.5 12.8333L13.4167 15.75L18.6667 10.5" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
              </div>
              <h3 class="card-title">Notre Vision</h3>
            </div>
            <p class="card-description">
              Être le catalyseur du développement de Banka en formant une jeunesse éduquée, responsable et engagée, capable de contribuer au progrès de sa communauté et du CAMEROUN.
            </p>
          </div>
        </div>
      </section>

      <!-- Quick Access Section -->
      <section class="quick-access-section">
        <div class="quick-access-container">
          <h2 class="section-title">Accès Rapide</h2>
          <p class="section-subtitle">Découvrez rapidement nos programmes et services</p>

          <div class="quick-access-grid">
            <a href="bource-user" class="quick-access-card">
              <div class="quick-icon blue">
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M20 7L10 2L0 7V19C0 19.5304 0.210714 20.0391 0.585786 20.4142C0.960859 20.7893 1.46957 21 2 21H18C18.5304 21 19.0391 20.7893 19.4142 20.4142C19.7893 20.0391 20 19.5304 20 19V7Z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                  <path d="M10 5V14L15 16" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
              </div>
              <h4 class="quick-title">Programmes de Bourses</h4>
              <p class="quick-description">Consultez nos offres de bourses d'études disponibles</p>
            </a>

            <a href="contact-user" class="quick-access-card">
              <div class="quick-icon green">
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M17 21V19C17 17.9391 16.5786 16.9217 15.8284 16.1716C15.0783 15.4214 14.0609 15 13 15H5C3.93913 15 2.92172 15.4214 2.17157 16.1716C1.42143 16.9217 1 17.9391 1 19V21" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                  <path d="M9 11C11.2091 11 13 9.20914 13 7C13 4.79086 11.2091 3 9 3C6.79086 3 5 4.79086 5 7C5 9.20914 6.79086 11 9 11Z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                  <path d="M23 21V19C22.9993 18.1137 22.7044 17.2528 22.1614 16.5523C21.6184 15.8519 20.8581 15.3516 20 15.13" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                  <path d="M16 3.13C16.8604 3.35031 17.623 3.85071 18.1676 4.55232C18.7122 5.25392 19.0078 6.11683 19.0078 7.005C19.0078 7.89318 18.7122 8.75608 18.1676 9.45769C17.623 10.1593 16.8604 10.6597 16 10.88" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
              </div>
              <h4 class="quick-title">Espace Bénéficiaires</h4>
              <p class="quick-description">Accédez à votre espace personnel et suivez votre dossier</p>
            </a>

            <a href="Activiter-user" class="quick-access-card">
              <div class="quick-icon purple">
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <rect x="3" y="4" width="18" height="18" rx="2" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                  <path d="M16 2V6" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                  <path d="M8 2V6" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                  <path d="M3 10H21" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
              </div>
              <h4 class="quick-title">Événements & Activités</h4>
              <p class="quick-description">Découvrez nos prochains événements et activités</p>
            </a>

            <a href="contact-user#contact" class="quick-access-card">
              <div class="quick-icon orange">
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M21 15C21 15.5304 20.7893 16.0391 20.4142 16.4142C20.0391 16.7893 19.5304 17 19 17H7L3 21V5C3 4.46957 3.21071 3.96086 3.58579 3.58579C3.96086 3.21071 4.46957 3 5 3H19C19.5304 3 20.0391 3.21071 20.4142 3.58579C20.7893 3.96086 21 4.46957 21 5V15Z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
              </div>
              <h4 class="quick-title">Nous Contacter</h4>
              <p class="quick-description">Posez vos questions et obtenez de l'aide</p>
            </a>

            <a href="contact-user" class="quick-access-card">
              <div class="quick-icon red">
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M20.84 4.61C19.5 3.28 17.76 2.5 15.91 2.42C14.06 2.34 12.25 2.97 10.84 4.18L12 5.33L10.59 6.74L8.74 4.89C7.53 6.3 6.9 8.11 6.98 9.96C7.06 11.81 7.84 13.55 9.17 14.89L14.89 9.17C13.55 7.84 11.81 7.06 9.96 6.98C8.11 6.9 6.3 7.53 4.89 8.74L6.74 10.59L5.33 12L4.18 10.84C2.97 12.25 2.34 14.06 2.42 15.91C2.5 17.76 3.28 19.5 4.61 20.84C5.94 22.17 7.68 22.95 9.53 23.03C11.38 23.11 13.19 22.48 14.6 21.27L13.45 20.11L14.86 18.7L16.71 20.55C17.92 19.14 18.55 17.33 18.47 15.48C18.39 13.63 17.61 11.89 16.28 10.55L10.55 16.28C11.89 17.61 13.63 18.39 15.48 18.47C17.33 18.55 19.14 17.92 20.55 16.71L18.7 14.86L20.11 13.45L21.27 14.6C22.48 13.19 23.11 11.38 23.03 9.53C22.95 7.68 22.17 5.94 20.84 4.61Z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                  <circle cx="12" cy="12" r="3" stroke="currentColor" stroke-width="2"/>
                </svg>
              </div>
              <h4 class="quick-title">Nos Partenaires</h4>
              <p class="quick-description">Découvrez nos partenaires et collaborateurs</p>
            </a>

            <a href="A propos-user" class="quick-access-card">
              <div class="quick-icon teal">
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M12 20C16.4183 20 20 16.4183 20 12C20 7.58172 16.4183 4 12 4C7.58172 4 4 7.58172 4 12C4 16.4183 7.58172 20 12 20Z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                  <path d="M12 16V12" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                  <circle cx="12" cy="8" r="0.5" fill="currentColor" stroke="currentColor" stroke-width="1.5"/>
                </svg>
              </div>
              <h4 class="quick-title">FAQ & Documentation</h4>
              <p class="quick-description">Trouvez des réponses à vos questions</p>
            </a>
          </div>
        </div>
      </section>

      <!-- Content Area -->
      <main class="main-content">
        <div class="content-container">
          <!-- Future content will go here -->
        </div>
      </main>
    </div>

      <main class="main-content">
      <section class="news-section">
        <h2 class="section-title">Actualités Récentes</h2>
        <p class="section-subtitle">Restez informés de nos dernières nouvelles</p>

        <div class="news-container">
          <article class="news-card">
            <div class="news-header">
              <span class="news-badge urgent">Urgent</span>
              <span class="news-date">20 Janvier 2025</span>
            </div>
            <h3 class="news-title">debut des candidatures Bourse 2025</h3>
            <button class="star-btn" aria-label="Ajouter aux favoris">
              <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M12 2L15.09 8.26L22 9.27L17 14.14L18.18 21.02L12 17.77L5.82 21.02L7 14.14L2 9.27L8.91 8.26L12 2Z" stroke="#FFB800" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
              </svg>
            </button>
          </article>

          <article class="news-card">
            <div class="news-header">
              <span class="news-badge partenariat">Partenariat</span>
              <span class="news-date"> 2025</span>
            </div>
            <h3 class="news-title">renouvellement de partenariat avec l'uversiter de guené</h3>
            <button class="star-btn" aria-label="Ajouter aux favoris">
              <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M12 2L15.09 8.26L22 9.27L17 14.14L18.18 21.02L12 17.77L5.82 21.02L7 14.14L2 9.27L8.91 8.26L12 2Z" stroke="#FFB800" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
              </svg>
            </button>
          </article>

          <article class="news-card">
            <div class="news-header">
              <span class="news-badge evenement">Événement</span>
              <span class="news-date">10 decembre 2024</span>
            </div>
            <h3 class="news-title">soireé des boursiers 2024</h3>
            <button class="star-btn" aria-label="Ajouter aux favoris">
              <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M12 2L15.09 8.26L22 9.27L17 14.14L18.18 21.02L12 17.77L5.82 21.02L7 14.14L2 9.27L8.91 8.26L12 2Z" stroke="#FFB800" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
              </svg>
            </button>
          </article>
        </div>

        <a  style="text-decoration: none;" href="Activiter-user"><button class="view-all-btn">Voir toutes les actualités</button></a>
      </section>

      <section class="cta-section">
        <h2 class="cta-title">Rejoignez Notre Communauté</h2><br/>
        <h2 class="cta-title1">Ensemble, construisons l'avenir de Banka. Votre contribution peut changer la vie d'un jeune et l'avenir de notre communauté.</h2><br/>
        <div class="hero-buttons">
          <a  style="text-decoration: none;" href="contact-user#form"><button class="hero-btn btn-primary">
              <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M16.25 8.75L10 2.5L3.75 8.75" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                <path d="M10 2.5V12.5" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                <path d="M2.5 12.5H17.5V16.25C17.5 16.5815 17.3683 16.8995 17.1339 17.1339C16.8995 17.3683 16.5815 17.5 16.25 17.5H3.75C3.41848 17.5 3.10054 17.3683 2.86612 17.1339C2.6317 16.8995 2.5 16.5815 2.5 16.25V12.5Z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
              </svg>
              Devenir partenaire
            </button></a>
            <a  style="text-decoration: none;" href="contact-user"><button class="hero-btn btn-secondary">
              Laisse un commentaire
            </button></a>
          </div>
      </section>
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

    <script src=" {{ asset('js/accuille-user.js') }}"></script>
    <script src="{{ asset('js/footer-header-user.js') }}"></script>
  </body>
</html>
