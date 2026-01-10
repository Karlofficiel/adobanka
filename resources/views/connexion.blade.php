<!Doctype html>
<html lang="fr">
  <head>
    <meta charset="UTF-8" />
    <link rel="icon" type="image/svg+xml" href="/vite.svg" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Connexion - Adolescence</title>
    <link rel="stylesheet" href="{{ asset('css/connexion.css') }}">
  </head>
  <body>
    <div id="app">
      <!-- Page de connexion -->
      <div id="login-page" class="page active">
        <div class="container">
          <div class="auth-card">
            <div class="logo-container">
              <div class="logo">
                <img src="logo adolescence.jpg" alt="" srcset="bjrhello">
              </div>
            </div>

            <h1 class="title">Connexion</h1>
            <p class="subtitle">Accédez à votre espace Association Excellence & Développement</p>
            <form id="login-form" class="auth-form"  action="{{ route('login.submit') }}" method="POST">
              @csrf
              <!-- messsage d'erreur -->
                  @if ($errors->any())
              <div class="alert alert-danger" style="color:red; margin-bottom:10px;">
                  {{ $errors->first() }}
              </div>
          @endif


              <div class="form-group">
                <label for="login-username">Nom d'utilisateur</label>
                <div class="input-wrapper">
                  <svg class="input-icon" width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M10 10C12.0711 10 13.75 8.32107 13.75 6.25C13.75 4.17893 12.0711 2.5 10 2.5C7.92893 2.5 6.25 4.17893 6.25 6.25C6.25 8.32107 7.92893 10 10 10Z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                    <path d="M17.5 17.5C17.5 14.7386 14.1421 12.5 10 12.5C5.85786 12.5 2.5 14.7386 2.5 17.5" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                  </svg>
                  <input type="text" id="login-username"  name="nom_utilisateur" placeholder="Entrez votre nom d'utilisateur" required>
                </div>
              </div>

              <div class="form-group">
                <label for="login-password">Mot de passe</label>
                <div class="input-wrapper">
                  <svg class="input-icon" width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M15.8333 9.16667H4.16667C3.24619 9.16667 2.5 9.91286 2.5 10.8333V16.6667C2.5 17.5871 3.24619 18.3333 4.16667 18.3333H15.8333C16.7538 18.3333 17.5 17.5871 17.5 16.6667V10.8333C17.5 9.91286 16.7538 9.16667 15.8333 9.16667Z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                    <path d="M5.83333 9.16667V5.83333C5.83333 4.72826 6.27232 3.66846 7.05372 2.88706C7.83512 2.10565 8.89493 1.66667 10 1.66667C11.1051 1.66667 12.1649 2.10565 12.9463 2.88706C13.7277 3.66846 14.1667 4.72826 14.1667 5.83333V9.16667" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                  </svg>
                  <input type="password" id="login-password" name="mot_de_passe" placeholder="Entrez votre mot de passe" required>
                  <button type="button" class="toggle-password" aria-label="Afficher le mot de passe">
                    <svg class="eye-icon" width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <path d="M1.66667 10C1.66667 10 4.16667 4.16667 10 4.16667C15.8333 4.16667 18.3333 10 18.3333 10C18.3333 10 15.8333 15.8333 10 15.8333C4.16667 15.8333 1.66667 10 1.66667 10Z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                      <path d="M10 12.5C11.3807 12.5 12.5 11.3807 12.5 10C12.5 8.61929 11.3807 7.5 10 7.5C8.61929 7.5 7.5 8.61929 7.5 10C7.5 11.3807 8.61929 12.5 10 12.5Z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                  </button>
                </div>
              </div>

              <button type="submit" class="btn btn-primary">
                <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M7.5 2.5H3.33333C2.8731 2.5 2.5 2.8731 2.5 3.33333V16.6667C2.5 17.1269 2.8731 17.5 3.33333 17.5H7.5" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                  <path d="M13.3333 14.1667L17.5 10L13.3333 5.83333" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                  <path d="M17.5 10H7.5" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
                  Se connecter
              </button>

              <button type="button" class="btn btn-secondary" id="continue-visitor" >
               <a href="/index" style="color:green;text-decoration:none"> Continuer en tant que visiteur </a>
              </button>

              <p class="switch-page" >
                Pas encore de compte ? <a href="#" id="show-register">Créer un compte</a>
              </p>
            </form>
          </div>
        </div>
      </div>


      <!-- Page d'inscription -->
<div id="register-page" class="page">
  <div class="container">
    <div class="auth-card">

      <div class="logo-container">
        <div class="logo">
          <img src="logo adolescence.jpg" alt="">
        </div>
      </div>

      <h1 class="title">Créer un compte</h1>
      <p class="subtitle">Rejoignez Association Excellence & Développement</p>

      @if ($errors->any())
        <div style="color:red; margin-bottom:10px;">
          {{ $errors->first() }}
        </div>
      @endif

      <form id="register-form" class="auth-form" action="{{ route('register.submit') }}" method="POST">
        @csrf

        <!-- Nom complet -->
        <div class="form-group">
          <label for="register-fullname">Nom complet</label>
          <div class="input-wrapper">
            <svg class="input-icon" width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M10 10C12.0711 10 13.75 8.32107 13.75 6.25C13.75 4.17893 12.0711 2.5 10 2.5C7.92893 2.5 6.25 4.17893 6.25 6.25C6.25 8.32107 7.92893 10 10 10Z" stroke="currentColor" stroke-width="1.5"/>
              <path d="M17.5 17.5C17.5 14.7386 14.1421 12.5 10 12.5C5.85786 12.5 2.5 14.7386 2.5 17.5" stroke="currentColor" stroke-width="1.5"/>
            </svg>
            <input type="text" id="register-fullname" name="register-fullname" required>
          </div>
        </div>

        <!-- Email -->
        <div class="form-group">
          <label for="register-email">Email</label>
          <div class="input-wrapper">
            <svg class="input-icon" width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M3.33333 5.83333C3.33333 4.91286 4.07952 4.16667 5 4.16667H15C15.9205 4.16667 16.6667 4.91286 16.6667 5.83333V14.1667C16.6667 15.0871 15.9205 15.8333 15 15.8333H5C4.07952 15.8333 3.33333 15.0871 3.33333 14.1667V5.83333Z" stroke="currentColor" stroke-width="1.5"/>
              <path d="M3.33333 5.83333L10 10.8333L16.6667 5.83333" stroke="currentColor" stroke-width="1.5"/>
            </svg>
            <input type="email" id="register-email" name="register-email" required>
          </div>
        </div>

        <!-- Nom utilisateur -->
        <div class="form-group">
          <label for="register-username">Nom d'utilisateur</label>
          <div class="input-wrapper">
            <svg class="input-icon" width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M10 10C12.0711 10 13.75 8.32107 13.75 6.25C13.75 4.17893 12.0711 2.5 10 2.5C7.92893 2.5 6.25 4.17893 6.25 6.25C6.25 8.32107 7.92893 10 10 10Z" stroke="currentColor" stroke-width="1.5"/>
              <path d="M17.5 17.5C17.5 14.7386 14.1421 12.5 10 12.5C5.85786 12.5 2.5 14.7386 2.5 17.5" stroke="currentColor" stroke-width="1.5"/>
            </svg>
            <input type="text" id="register-username" name="register-username" required>
          </div>
        </div>

        <!-- Mot de passe -->
        <div class="form-group">
          <label for="register-password">Mot de passe</label>
          <div class="input-wrapper">
            <svg class="input-icon" width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M15.8333 9.16667H4.16667C3.24619 9.16667 2.5 9.91286 2.5 10.8333V16.6667C2.5 17.5871 3.24619 18.3333 4.16667 18.3333H15.8333C16.7538 18.3333 17.5 17.5871 17.5 16.6667V10.8333Z" stroke="currentColor" stroke-width="1.5"/>
              <path d="M5.83333 9.16667V5.83333C5.83333 4.72826 6.27232 3.66846 7.05372 2.88706C7.83512 2.10565 8.89493 1.66667 10 1.66667C11.1051 1.66667 12.1649 2.10565 12.9463 2.88706C13.7277 3.66846 14.1667 4.72826 14.1667 5.83333V9.16667" stroke="currentColor" stroke-width="1.5"/>
            </svg>
            <input type="password" id="register-password" name="register-password" required>
          </div>
        </div>

        <!-- Confirmation -->
        <div class="form-group">
          <label for="register-confirm-password">Confirmer le mot de passe</label>
          <div class="input-wrapper">
            <svg class="input-icon" width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M15.8333 9.16667H4.16667C3.24619 9.16667 2.5 9.91286 2.5 10.8333V16.6667C2.5 17.5871 3.24619 18.3333 4.16667 18.3333H15.8333C16.7538 18.3333 17.5 17.5871 17.5 16.6667V10.8333Z" stroke="currentColor" stroke-width="1.5"/>
              <path d="M5.83333 9.16667V5.83333C5.83333 4.72826 6.27232 3.66846 7.05372 2.88706C7.83512 2.10565 8.89493 1.66667 10 1.66667C11.1051 1.66667 12.1649 2.10565 12.9463 2.88706C13.7277 3.66846 14.1667 4.72826 14.1667 5.83333V9.16667" stroke="currentColor" stroke-width="1.5"/>
            </svg>
            <input type="password" id="register-confirm-password" name="register-password_confirmation" required>
          </div>
        </div>

        <button type="submit" class="btn btn-primary">
          Créer mon compte
        </button>

        <p class="switch-page">
          Déjà un compte ?
          <a href="" id="show-login-form">Se connecter</a>
        </p>

      </form>
    </div>
  </div>
</div>



      <!-- Bouton d'aide flottant -->
      <button class="help-button" aria-label="Aide">
        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
          <circle cx="12" cy="12" r="10" stroke="white" stroke-width="2"/>
          <path d="M9.09 9C9.3251 8.33167 9.78915 7.76811 10.4 7.40913C11.0108 7.05016 11.7289 6.91894 12.4272 7.03871C13.1255 7.15849 13.7588 7.52152 14.2151 8.06353C14.6713 8.60553 14.9211 9.29152 14.92 10C14.92 12 11.92 13 11.92 13" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
          <circle cx="12" cy="17" r="1" fill="white"/>
        </svg>
      </button>
    </div> 

    <!-- <script>
      document.getElementById('continue-visitor').disabled = true; // Désactiver le bouton
    </script>
     <script src="{{ asset('js/connexion.js') }}"></script> -->

  </body>
</html>
