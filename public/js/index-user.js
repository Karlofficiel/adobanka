document.addEventListener('DOMContentLoaded', function() {
  const loginPage = document.getElementById('login-page');
  const registerPage = document.getElementById('register-page');
  const showRegisterLink = document.getElementById('show-register');
  const showLoginLink = document.getElementById('show-login');
  const loginForm = document.getElementById('login-form');
  const registerForm = document.getElementById('register-form');
  const continueVisitorBtn = document.getElementById('continue-visitor');
  const adminBtn = document.querySelector('.admin-btn');
  const visitorBtn = document.querySelector('.visitor-btn');

  showRegisterLink.addEventListener('click', function(e) {
    e.preventDefault();
    loginPage.classList.remove('active');
    registerPage.classList.add('active');
  });

  showLoginLink.addEventListener('click', function(e) {
    e.preventDefault();
    registerPage.classList.remove('active');
    loginPage.classList.add('active');
  });

  const togglePasswordButtons = document.querySelectorAll('.toggle-password');
  togglePasswordButtons.forEach(button => {
    button.addEventListener('click', function() {
      const input = this.previousElementSibling;
      if (input.type === 'password') {
        input.type = 'text';
        this.style.color = '#16A34A';
      } else {
        input.type = 'password';
        this.style.color = '#9CA3AF';
      }
    });
  });

  adminBtn.addEventListener('click', function() {
    document.getElementById('login-username').value = 'admin';
    document.getElementById('login-password').value = 'admin123';
    document.getElementById('login-username').focus();
  });

  visitorBtn.addEventListener('click', function() {
    document.getElementById('login-username').value = 'visiteur';
    document.getElementById('login-password').value = 'visiteur';
    document.getElementById('login-username').focus();
  });

  loginForm.addEventListener('submit', function(e) {
    e.preventDefault();

    const username = document.getElementById('login-username').value;
    const password = document.getElementById('login-password').value;

    removeMessages();

    if (!username || !password) {
      showError(loginForm, 'Veuillez remplir tous les champs');
      return;
    }

    const submitButton = loginForm.querySelector('.btn-primary');
    submitButton.disabled = true;
    submitButton.textContent = 'Connexion...';

    setTimeout(() => {
      if ((username === 'admin' && password === 'admin123') ||
          (username === 'visiteur' && password === 'visiteur')) {
        showSuccess(loginForm, 'Connexion réussie ! Redirection...');
        setTimeout(() => {
          console.log('Utilisateur connecté:', username);
        }, 1500);
      } else {
        showError(loginForm, 'Nom d\'utilisateur ou mot de passe incorrect');
        submitButton.disabled = false;
        submitButton.innerHTML = `
          <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M7.5 2.5H3.33333C2.8731 2.5 2.5 2.8731 2.5 3.33333V16.6667C2.5 17.1269 2.8731 17.5 3.33333 17.5H7.5" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
            <path d="M13.3333 14.1667L17.5 10L13.3333 5.83333" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
            <path d="M17.5 10H7.5" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
          </svg>
          Se connecter
        `;
      }
    }, 1000);
  });

  continueVisitorBtn.addEventListener('click', function() {
    removeMessages();
    showSuccess(loginForm, 'Connexion en tant que visiteur... Redirection...');
    setTimeout(() => {
      console.log('Utilisateur connecté en tant que visiteur');
    }, 1500);
  });

  registerForm.addEventListener('submit', function(e) {
    e.preventDefault();

    const fullname = document.getElementById('register-fullname').value;
    const email = document.getElementById('register-email').value;
    const username = document.getElementById('register-username').value;
    const password = document.getElementById('register-password').value;
    const confirmPassword = document.getElementById('register-confirm-password').value;

    removeMessages();

    if (!fullname || !email || !username || !password || !confirmPassword) {
      showError(registerForm, 'Veuillez remplir tous les champs');
      return;
    }

    if (!isValidEmail(email)) {
      showError(registerForm, 'Veuillez entrer une adresse email valide');
      return;
    }

    if (password.length < 6) {
      showError(registerForm, 'Le mot de passe doit contenir au moins 6 caractères');
      return;
    }

    if (password !== confirmPassword) {
      showError(registerForm, 'Les mots de passe ne correspondent pas');
      return;
    }

    const submitButton = registerForm.querySelector('.btn-primary');
    submitButton.disabled = true;
    submitButton.textContent = 'Création du compte...';

    setTimeout(() => {
      showSuccess(registerForm, 'Compte créé avec succès ! Redirection vers la connexion...');
      setTimeout(() => {
        registerPage.classList.remove('active');
        loginPage.classList.add('active');
        registerForm.reset();
        removeMessages();
        submitButton.disabled = false;
        submitButton.innerHTML = `
          <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M10 4.16667V15.8333" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
            <path d="M4.16667 10H15.8333" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
          </svg>
          Créer mon compte
        `;
      }, 1500);
    }, 1000);
  });

  function showError(form, message) {
    const existingError = form.querySelector('.error-message');
    if (existingError) {
      existingError.remove();
    }

    const errorDiv = document.createElement('div');
    errorDiv.className = 'error-message show';
    errorDiv.textContent = message;
    form.insertBefore(errorDiv, form.firstChild);

    setTimeout(() => {
      errorDiv.classList.remove('show');
      setTimeout(() => errorDiv.remove(), 300);
    }, 5000);
  }

  function showSuccess(form, message) {
    const existingSuccess = form.querySelector('.success-message');
    if (existingSuccess) {
      existingSuccess.remove();
    }

    const successDiv = document.createElement('div');
    successDiv.className = 'success-message show';
    successDiv.textContent = message;
    form.insertBefore(successDiv, form.firstChild);
  }

  function removeMessages() {
    document.querySelectorAll('.error-message, .success-message').forEach(msg => {
      msg.remove();
    });
  }

  function isValidEmail(email) {
    const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    return emailRegex.test(email);
  }

  const inputs = document.querySelectorAll('input');
  inputs.forEach(input => {
    input.addEventListener('focus', function() {
      this.parentElement.style.transform = 'scale(1.01)';
    });

    input.addEventListener('blur', function() {
      this.parentElement.style.transform = 'scale(1)';
    });
  });

  const helpButton = document.querySelector('.help-button');
  helpButton.addEventListener('click', function() {
    alert('Pour toute assistance, veuillez contacter le support technique de l\'Association Excellence & Développement.');
  });
});
