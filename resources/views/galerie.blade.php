<!doctype html>
<html lang="fr">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Accueil - Association Adolescence Banka</title>
    <link rel="stylesheet" href="{{ asset('css/galerie.css') }}">
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

      <a href="/bource-user#gallery-grid"><button class="navBtn">⬅️</button></a>

      <section class="card-pri">
    <div class="card-row" id="triggerImage">
        <div class="card">
            <img class="card-image" src="{{ asset('img/bourse1.JPG') }}" alt="bourse">
            <div class="card-footer">
                <p class="card-text">CONFERENCE DEBAT</p>
                <h3 class="card-title">conference sous le theme :</h3>
                <span class="card-author">inteligence arftificiel</span>
            </div>
        </div>
    </div>

        <div class="card-row" id="triggerImage1">
        <div class="card">
            <img class="card-image" src="{{ asset('img/activiter.JPG') }}" alt="">
            <div class="card-footer">
                <p class="card-text">DEPOUILLEMENT</p>
                <h3 class="card-title">Discover the world</h3>
                <span class="card-author">- John Doe</span>
            </div>
        </div>
    </div>

        <div class="card-row" id="triggerImage2">
        <div class="card">
            <img class="card-image" src="{{ asset('img/photo groupe.jpg') }}" alt="">
            <div class="card-footer">
                <p class="card-text">MARCHE</p>
                <h3 class="card-title">Discover the world</h3>
                <span class="card-author">- John Doe</span>
            </div>
        </div>
    </div>

        <div class="card-row" id="triggerImage3">
        <div class="card">
            <img class="card-image" src="{{ asset('img/img3.JPG') }}" alt="">
            <div class="card-footer">
                <p class="card-text">SOIREER GALA</p>
                <h3 class="card-title">Discover the world</h3>
                <span class="card-author">- John Doe</span>
            </div>
        </div>
    </div>
    </section>

<!-- OVERLAY -->
<div id="overlay"></div>

<!-- MENU FLOTTANT -->
<div id="floatingMenu">
    <h2 style="color: white; margin-bottom: 15px;">Galerie d’Images</h2>

    <img id="menuImage" src="{{ asset('img/bourse.JPG') }}" alt="">



    <div>
        <button class="navBtn" onclick="prevImage()">⬅️</button>
        <button class="navBtn" onclick="nextImage()">➡️</button>
    </div>

    <button id="closeBtn" class="navBtn" onclick="closeMenu()">Fermer</button>
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
        <li><a href="accuille-user">Accueil</a></li>
        <li><a href="A propos-user">À propos</a></li>
        <li><a href="Activiter-user">Activités</a></li>
        <li><a href="bource-user">Bourse adolescence</a></li>
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

    <script src="{{ asset('js/galerie.js') }}"></script>
    <script src="{{ asset('js/footer-header-user.js') }}"></script>
  </body>
</html>
