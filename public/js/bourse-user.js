// State management
let currentTab = 'bourses';
let activeSubMenu = null;

// DOM Elements
const hamburgerBtn = document.getElementById('hamburgerBtn');
const sidebar = document.getElementById('sidebar');
const sidebarOverlay = document.getElementById('sidebarOverlay');
const sidebarClose = document.getElementById('sidebarClose');
const contentDiv = document.getElementById('content');
const navTabs = document.querySelectorAll('.nav-tab');
const sidebarItems = document.querySelectorAll('.sidebar-item');

// Initialize
function init() {
    updateHamburgerVisibility();
    setupEventListeners();
}

// Update hamburger button visibility based on active tab
function updateHamburgerVisibility() {
    if (currentTab === 'bourses') {
        hamburgerBtn.classList.add('show');
    } else {
        hamburgerBtn.classList.remove('show');
        closeSidebar();
    }
}

// Setup event listeners
function setupEventListeners() {
    // Hamburger button
    hamburgerBtn.addEventListener('click', toggleSidebar);

    // Sidebar close button
    sidebarClose.addEventListener('click', closeSidebar);

    // Overlay click
    sidebarOverlay.addEventListener('click', closeSidebar);

    // Navigation tabs
    navTabs.forEach(tab => {
        tab.addEventListener('click', () => {
            const tabName = tab.dataset.tab;
            switchTab(tabName);
        });
    });

    // Sidebar items
    sidebarItems.forEach(item => {
        item.addEventListener('click', () => {
            const submenu = item.dataset.submenu;
            switchSubMenu(submenu);
        });
    });
}

// Toggle sidebar
function toggleSidebar() {
    const isActive = sidebar.classList.contains('active');
    if (isActive) {
        closeSidebar();
    } else {
        openSidebar();
    }
}

// Open sidebar
function openSidebar() {
    sidebar.classList.add('active');
    sidebarOverlay.classList.add('active');
    hamburgerBtn.classList.add('active');
    document.body.style.overflow = 'hidden';
}

// Close sidebar
function closeSidebar() {
    sidebar.classList.remove('active');
    sidebarOverlay.classList.remove('active');
    hamburgerBtn.classList.remove('active');
    document.body.style.overflow = '';
}

// Switch main tab
function switchTab(tabName) {
    currentTab = tabName;

    // Update active tab
    navTabs.forEach(tab => {
        if (tab.dataset.tab === tabName) {
            tab.classList.add('active');
        } else {
            tab.classList.remove('active');
        }
    });

    // Update hamburger visibility
    updateHamburgerVisibility();

    // Reset submenu when switching away from bourses
    if (tabName !== 'bourses') {
        activeSubMenu = null;
        updateSidebarItems();
        contentDiv.innerHTML = `
            <div class="content-card">
                <h2 class="section-title">Section ${tabName}</h2>
                <p style="color: var(--gray-600);">Contenu de cette section à venir...</p>
            </div>
        `;
    } else {
        activeSubMenu = null;
        updateSidebarItems();
        renderHomeContent();
    }
}

// Switch submenu
function switchSubMenu(submenu) {
    activeSubMenu = submenu;
    updateSidebarItems();
    renderContent(submenu);
    closeSidebar();
}

// Update active sidebar item
function updateSidebarItems() {
    sidebarItems.forEach(item => {
        if (item.dataset.submenu === activeSubMenu) {
            item.classList.add('active');
        } else {
            item.classList.remove('active');
        }
    });
}

// Render home content
function renderHomeContent() {
    contentDiv.innerHTML = `
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
                        <div class="stat-value">5,000€</div>
                        <div class="stat-label">Montant / an</div>
                    </div>
                    <div class="stat-card">
                        <div class="stat-value">3 ans</div>
                        <div class="stat-label">Durée</div>
                    </div>
                    <div class="stat-card">
                        <div class="stat-value">30 avr.</div>
                        <div class="stat-label">Date limite</div>
                    </div>
                </div>

                <div class="card-actions">
                    <button class="btn btn-primary">Postuler Maintenant</button>
                    <button class="btn btn-secondary">Voir les détails (3)</button>
                </div>
            </div>
        </div>
    `;
}


// Render content based on submenu
function renderContent(submenu) {
    let html = '';

    switch(submenu) {
        case 'programmes':
            html = `
                <div class="home-section">
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
                                <p>Pour les étudiants avec d'excellents résultats académiques</p>
                            </div>
                        </div>

                        <div class="stats-grid">
                            <div class="stat-card">
                                <div class="stat-value">15.000.000</div>
                                <div class="stat-label">Montant / an</div>
                            </div>
                            <div class="stat-card">
                                <div class="stat-value">30 ans</div>
                                <div class="stat-label">Durée</div>
                            </div>
                            <div class="stat-card">
                                <div class="stat-value">31 novembre.</div>
                                <div class="stat-label">Date limite</div>
                            </div>
                        </div>

                        <div class="card-actions">
                            <button class="btn btn-primary">Postuler Maintenant</button>
                            <button class="btn btn-secondary">Voir les détails</button>
                        </div>
                    </div>

                    <div class="scholarship-card blue">
                        <div class="card-header">
                            <div class="card-icon">
                                <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <path d="M22 10v6M2 10l10-5 10 5-10 5z"/>
                                    <path d="M6 12v5c3 3 9 3 12 0v-5"/>
                                </svg>
                            </div>
                            <div>
                                <h2>temoignage des boursiers</h2>
                                <p>Pour les projet</p>
                            </div>
                        </div>

                        <div class="stats-grid">
                            <div class="stat-card">
                                <div class="stat-value">1</div>
                                <div class="stat-label">premiere beneficier de la bourse</div>
                            </div>
                            <div class="stat-card">
                                <div class="stat-value">2</div>
                                <div class="stat-label">diaspora des anciens boursier</div>
                            </div>
                            <div class="stat-card">
                                <div class="stat-value">3</div>
                                <div class="stat-label">mots du major actuel</div>
                            </div>
                        </div>

                        <div class="card-actions">
                            <button class="btn btn-primary">Postuler Maintenant</button>
                            <button class="btn btn-secondary">Voir les détails</button>
                        </div>
                    </div>
                </div>
            `;
            break;

        case 'historique':
            html = `
                <div class="content-card">
                    <h2 class="section-title">
                        <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M3 12a9 9 0 1 0 9-9 9.75 9.75 0 0 0-6.74 2.74L3 8"/>
                            <path d="M3 3v5h5"/>
                            <path d="M12 7v5l4 2"/>
                        </svg>
                        Historique des Bourses
                    </h2>
                    <div style="display: flex; flex-direction: column; gap: 1.5rem;">
                        <div class="timeline-item">
                            <div class="timeline-year">2025</div>
                            <div class="timeline-title">152 bourses attribuées</div>
                            <div class="timeline-desc">Total investi : 680,000€</div>
                        </div>
                        <div class="timeline-item blue">
                            <div class="timeline-year">2000</div>
                            <div class="timeline-title">138 bourses attribuées</div>
                            <div class="timeline-desc">Total investi : 620,000€</div>
                        </div>
                        <div class="timeline-item purple">
                            <div class="timeline-year">1996</div>
                            <div class="timeline-title">125 bourses attribuées</div>
                            <div class="timeline-desc">Total investi : 565,000€</div>
                        </div>
                    </div>
                </div>
            `;
            break;

        case 'galerie':
            html = `
                <div class="content-card">
                    <h2 class="section-title">
                        <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <rect x="3" y="3" width="18" height="18" rx="2" ry="2"/>
                            <circle cx="8.5" cy="8.5" r="1.5"/>
                            <polyline points="21 15 16 10 5 21"/>
                        </svg>
                        Galerie
                    </h2>
                    <div class="gallery-grid" id="gallery-grid">
                            <a href="galerie" class="card">
                                <div class="card__head">
                                    <div class="card__image"></div>
                                    <div class="card__author">
                                        <div class="author">
                                            <img src="{{ asset('img/soiree.JPG') }}" class="author__image">
                                            <div class="author__content">
                                                <p class="author__header">publication 2024</p>
                                                <p class="author__subheader">photos et video </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card__body">
                                    <h2 class="card__headline">EDITION : </h2>
                                    <p class="card__text">revivons ensemble les evenement vecu a la bourse 2024
                                    moment de glore et bon heure partager ensemble .</p>
                                </div>
                                <div class="card__foot">
                                    <span class="card__link">Read more</span>
                                </div>
                                <div class="card__border"></div>
                            </a>

                            <a href="#" class="card">
                                <div class="card__head">
                                    <div class="card__image"></div>
                                    <div class="card__author">
                                        <div class="author">
                                            <img src="{{ asset('img/soiree.JPG') }}" class="author__image">
                                            <div class="author__content">
                                                <p class="author__header">publication 2023</p>
                                                <p class="author__subheader">photos et video </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card__body">
                                    <h2 class="card__headline">EDITION : </h2>
                                    <p class="card__text">revivons ensemble les evenement vecu a la bourse 2023
                                    moment de glore et bon heure partager ensemble .</p>
                                </div>
                                <div class="card__foot">
                                    <span class="card__link">Read more</span>
                                </div>
                                <div class="card__border"></div>
                            </a>
                            <a href="#" class="card">
                                <div class="card__head">
                                    <div class="card__image"></div>
                                    <div class="card__author">
                                        <div class="author">
                                            <img src="{{ asset('img/soiree.JPG') }}" class="author__image">
                                            <div class="author__content">
                                                <p class="author__header">publication 2022</p>
                                                <p class="author__subheader">photos et video </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card__body">
                                    <h2 class="card__headline">EDITION : </h2>
                                    <p class="card__text">revivons ensemble les evenement vecu a la bourse 2022
                                    moment de glore et bon heure partager ensemble .</p>
                                </div>
                                <div class="card__foot">
                                    <span class="card__link">Read more</span>
                                </div>
                                <div class="card__border"></div>
                            </a>
                            <a href="#" class="card">
                                <div class="card__head">
                                    <div class="card__image"></div>
                                    <div class="card__author">
                                        <div class="author">
                                            <img src="{{ asset('img/soiree.JPG') }}" class="author__image">
                                            <div class="author__content">
                                                <p class="author__header">publication 2021</p>
                                                <p class="author__subheader">photos et video </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card__body">
                                    <h2 class="card__headline">EDITION : </h2>
                                    <p class="card__text">revivons ensemble les evenement vecu a la bourse 2021
                                    moment de glore et bon heure partager ensemble .</p>
                                </div>
                                <div class="card__foot">
                                    <span class="card__link">Read more</span>
                                </div>
                                <div class="card__border"></div>
                            </a>
                            <a href="#" class="card">
                                <div class="card__head">
                                    <div class="card__image"></div>
                                    <div class="card__author">
                                        <div class="author">
                                            <img src="{{ asset('img/soiree.JPG') }}" class="author__image">
                                            <div class="author__content">
                                                <p class="author__header">publication 2020</p>
                                                <p class="author__subheader">photos et video </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card__body">
                                    <h2 class="card__headline">EDITION : </h2>
                                    <p class="card__text">revivons ensemble les evenement vecu a la bourse 2020
                                    moment de glore et bon heure partager ensemble .</p>
                                </div>
                                <div class="card__foot">
                                    <span class="card__link">Read more</span>
                                </div>
                                <div class="card__border"></div>
                            </a>
                            <a href="#" class="card">
                                <div class="card__head">
                                    <div class="card__image"></div>
                                    <div class="card__author">
                                        <div class="author">
                                            <img src="/soiree.JPG" class="author__image">
                                            <div class="author__content">
                                                <p class="author__header">publication 2019</p>
                                                <p class="author__subheader">photos et video </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card__body">
                                    <h2 class="card__headline">EDITION : </h2>
                                    <p class="card__text">revivons ensemble les evenement vecu a la bourse 2019
                                    moment de glore et bon heure partager ensemble .</p>
                                </div>
                                <div class="card__foot">
                                    <span class="card__link">Read more</span>
                                </div>
                                <div class="card__border"></div>
                            </a>
                            <a href="#" class="card">
                                <div class="card__head">
                                    <div class="card__image"></div>
                                    <div class="card__author">
                                        <div class="author">
                                            <img src="/soiree.JPG" class="author__image">
                                            <div class="author__content">
                                                <p class="author__header">publication 2018</p>
                                                <p class="author__subheader">photos et video </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card__body">
                                    <h2 class="card__headline">EDITION : </h2>
                                    <p class="card__text">revivons ensemble les evenement vecu a la bourse 2018
                                    moment de glore et bon heure partager ensemble .</p>
                                </div>
                                <div class="card__foot">
                                    <span class="card__link">Read more</span>
                                </div>
                                <div class="card__border"></div>
                            </a>
                            <a href="#" class="card">
                                <div class="card__head">
                                    <div class="card__image"></div>
                                    <div class="card__author">
                                        <div class="author">
                                            <img src="/soiree.JPG" class="author__image">
                                            <div class="author__content">
                                                <p class="author__header">publication 2017</p>
                                                <p class="author__subheader">photos et video </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card__body">
                                    <h2 class="card__headline">EDITION : </h2>
                                    <p class="card__text">revivons ensemble les evenement vecu a la bourse 2017
                                    moment de glore et bon heure partager ensemble .</p>
                                </div>
                                <div class="card__foot">
                                    <span class="card__link">Read more</span>
                                </div>
                                <div class="card__border"></div>
                            </a>
                            <a href="#" class="card">
                                <div class="card__head">
                                    <div class="card__image"></div>
                                    <div class="card__author">
                                        <div class="author">
                                            <img src="/soiree.JPG" class="author__image">
                                            <div class="author__content">
                                                <p class="author__header">publication 2016</p>
                                                <p class="author__subheader">photos et video </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card__body">
                                    <h2 class="card__headline">EDITION : </h2>
                                    <p class="card__text">revivons ensemble les evenement vecu a la bourse 2016
                                    moment de glore et bon heure partager ensemble .</p>
                                </div>
                                <div class="card__foot">
                                    <span class="card__link">Read more</span>
                                </div>
                                <div class="card__border"></div>
                            </a>
                            <a href="#" class="card">
                                <div class="card__head">
                                    <div class="card__image"></div>
                                    <div class="card__author">
                                        <div class="author">
                                            <img src="/soiree.JPG" class="author__image">
                                            <div class="author__content">
                                                <p class="author__header">publication 2015</p>
                                                <p class="author__subheader">photos et video </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card__body">
                                    <h2 class="card__headline">EDITION : </h2>
                                    <p class="card__text">revivons ensemble les evenement vecu a la bourse 2015
                                    moment de glore et bon heure partager ensemble .</p>
                                </div>
                                <div class="card__foot">
                                    <span class="card__link">Read more</span>
                                </div>
                                <div class="card__border"></div>
                            </a>

                            <a href="#" class="card">
                                <div class="card__head">
                                    <div class="card__image"></div>
                                    <div class="card__author">
                                        <div class="author">
                                            <img src="/soiree.JPG" class="author__image">
                                            <div class="author__content">
                                                <p class="author__header">publication 2014</p>
                                                <p class="author__subheader">photos et video </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card__body">
                                    <h2 class="card__headline">EDITION : </h2>
                                    <p class="card__text">revivons ensemble les evenement vecu a la bourse 2014
                                    moment de glore et bon heure partager ensemble .</p>
                                </div>
                                <div class="card__foot">
                                    <span class="card__link">Read more</span>
                                </div>
                                <div class="card__border"></div>
                            </a>

                            <a href="#" class="card">
                                <div class="card__head">
                                    <div class="card__image"></div>
                                    <div class="card__author">
                                        <div class="author">
                                            <img src="/soiree.JPG" class="author__image">
                                            <div class="author__content">
                                                <p class="author__header">publication 2013</p>
                                                <p class="author__subheader">photos et video </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card__body">
                                    <h2 class="card__headline">EDITION : </h2>
                                    <p class="card__text">revivons ensemble les evenement vecu a la bourse 2013
                                    moment de glore et bon heure partager ensemble .</p>
                                </div>
                                <div class="card__foot">
                                    <span class="card__link">Read more</span>
                                </div>
                                <div class="card__border"></div>
                            </a>

                            <a href="#" class="card">
                                <div class="card__head">
                                    <div class="card__image"></div>
                                    <div class="card__author">
                                        <div class="author">
                                            <img src="/soiree.JPG" class="author__image">
                                            <div class="author__content">
                                                <p class="author__header">publication 2012</p>
                                                <p class="author__subheader">photos et video </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card__body">
                                    <h2 class="card__headline">EDITION : </h2>
                                    <p class="card__text">revivons ensemble les evenement vecu a la bourse 2012
                                    moment de glore et bon heure partager ensemble .</p>
                                </div>
                                <div class="card__foot">
                                    <span class="card__link">Read more</span>
                                </div>
                                <div class="card__border"></div>
                            </a>

                            <a href="#" class="card">
                                <div class="card__head">
                                    <div class="card__image"></div>
                                    <div class="card__author">
                                        <div class="author">
                                            <img src="/soiree.JPG" class="author__image">
                                            <div class="author__content">
                                                <p class="author__header">publication 2011</p>
                                                <p class="author__subheader">photos et video </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card__body">
                                    <h2 class="card__headline">EDITION : </h2>
                                    <p class="card__text">revivons ensemble les evenement vecu a la bourse 2011
                                    moment de glore et bon heure partager ensemble .</p>
                                </div>
                                <div class="card__foot">
                                    <span class="card__link">Read more</span>
                                </div>
                                <div class="card__border"></div>
                            </a>

                            <a href="#" class="card">
                                <div class="card__head">
                                    <div class="card__image"></div>
                                    <div class="card__author">
                                        <div class="author">
                                            <img src="/soiree.JPG" class="author__image">
                                            <div class="author__content">
                                                <p class="author__header">publication 2010</p>
                                                <p class="author__subheader">photos et video </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card__body">
                                    <h2 class="card__headline">EDITION : </h2>
                                    <p class="card__text">revivons ensemble les evenement vecu a la bourse 2010
                                    moment de glore et bon heure partager ensemble .</p>
                                </div>
                                <div class="card__foot">
                                    <span class="card__link">Read more</span>
                                </div>
                                <div class="card__border"></div>
                            </a>

                            <a href="#" class="card">
                                <div class="card__head">
                                    <div class="card__image"></div>
                                    <div class="card__author">
                                        <div class="author">
                                            <img src="/soiree.JPG" class="author__image">
                                            <div class="author__content">
                                                <p class="author__header">publication 2009</p>
                                                <p class="author__subheader">photos et video </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card__body">
                                    <h2 class="card__headline">EDITION : </h2>
                                    <p class="card__text">revivons ensemble les evenement vecu a la bourse 2009
                                    moment de glore et bon heure partager ensemble .</p>
                                </div>
                                <div class="card__foot">
                                    <span class="card__link">Read more</span>
                                </div>
                                <div class="card__border"></div>
                            </a>

                            <a href="#" class="card">
                                <div class="card__head">
                                    <div class="card__image"></div>
                                    <div class="card__author">
                                        <div class="author">
                                            <img src="/soiree.JPG" class="author__image">
                                            <div class="author__content">
                                                <p class="author__header">publication 2008</p>
                                                <p class="author__subheader">photos et video </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card__body">
                                    <h2 class="card__headline">EDITION : </h2>
                                    <p class="card__text">revivons ensemble les evenement vecu a la bourse 2008
                                    moment de glore et bon heure partager ensemble .</p>
                                </div>
                                <div class="card__foot">
                                    <span class="card__link">Read more</span>
                                </div>
                                <div class="card__border"></div>
                            </a>

                            <a href="#" class="card">
                                <div class="card__head">
                                    <div class="card__image"></div>
                                    <div class="card__author">
                                        <div class="author">
                                            <img src="/soiree.JPG" class="author__image">
                                            <div class="author__content">
                                                <p class="author__header">publication 2007</p>
                                                <p class="author__subheader">photos et video </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card__body">
                                    <h2 class="card__headline">EDITION : </h2>
                                    <p class="card__text">revivons ensemble les evenement vecu a la bourse 2007
                                    moment de glore et bon heure partager ensemble .</p>
                                </div>
                                <div class="card__foot">
                                    <span class="card__link">Read more</span>
                                </div>
                                <div class="card__border"></div>
                            </a>

                            <a href="#" class="card">
                                <div class="card__head">
                                    <div class="card__image"></div>
                                    <div class="card__author">
                                        <div class="author">
                                            <img src="/soiree.JPG" class="author__image">
                                            <div class="author__content">
                                                <p class="author__header">publication 2006</p>
                                                <p class="author__subheader">photos et video </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card__body">
                                    <h2 class="card__headline">EDITION : </h2>
                                    <p class="card__text">revivons ensemble les evenement vecu a la bourse 2006
                                    moment de glore et bon heure partager ensemble .</p>
                                </div>
                                <div class="card__foot">
                                    <span class="card__link">Read more</span>
                                </div>
                                <div class="card__border"></div>
                            </a>

                            <a href="#" class="card">
                                <div class="card__head">
                                    <div class="card__image"></div>
                                    <div class="card__author">
                                        <div class="author">
                                            <img src="/soiree.JPG" class="author__image">
                                            <div class="author__content">
                                                <p class="author__header">publication 2005</p>
                                                <p class="author__subheader">photos et video </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card__body">
                                    <h2 class="card__headline">EDITION : </h2>
                                    <p class="card__text">revivons ensemble les evenement vecu a la bourse 2005
                                    moment de glore et bon heure partager ensemble .</p>
                                </div>
                                <div class="card__foot">
                                    <span class="card__link">Read more</span>
                                </div>
                                <div class="card__border"></div>
                            </a>

                            <a href="#" class="card">
                                <div class="card__head">
                                    <div class="card__image"></div>
                                    <div class="card__author">
                                        <div class="author">
                                            <img src="/soiree.JPG" class="author__image">
                                            <div class="author__content">
                                                <p class="author__header">publication 2004</p>
                                                <p class="author__subheader">photos et video </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card__body">
                                    <h2 class="card__headline">EDITION : </h2>
                                    <p class="card__text">revivons ensemble les evenement vecu a la bourse 2004
                                    moment de glore et bon heure partager ensemble .</p>
                                </div>
                                <div class="card__foot">
                                    <span class="card__link">Read more</span>
                                </div>
                                <div class="card__border"></div>
                            </a>

                            <a href="#" class="card">
                                <div class="card__head">
                                    <div class="card__image"></div>
                                    <div class="card__author">
                                        <div class="author">
                                            <img src="/soiree.JPG" class="author__image">
                                            <div class="author__content">
                                                <p class="author__header">publication 2003</p>
                                                <p class="author__subheader">photos et video </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card__body">
                                    <h2 class="card__headline">EDITION : </h2>
                                    <p class="card__text">revivons ensemble les evenement vecu a la bourse 2003
                                    moment de glore et bon heure partager ensemble .</p>
                                </div>
                                <div class="card__foot">
                                    <span class="card__link">Read more</span>
                                </div>
                                <div class="card__border"></div>
                            </a>
                            <a href="#" class="card">
                                <div class="card__head">
                                    <div class="card__image"></div>
                                    <div class="card__author">
                                        <div class="author">
                                            <img src="/soiree.JPG" class="author__image">
                                            <div class="author__content">
                                                <p class="author__header">publication 2002</p>
                                                <p class="author__subheader">photos et video </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card__body">
                                    <h2 class="card__headline">EDITION : </h2>
                                    <p class="card__text">revivons ensemble les evenement vecu a la bourse 2002
                                    moment de glore et bon heure partager ensemble .</p>
                                </div>
                                <div class="card__foot">
                                    <span class="card__link">Read more</span>
                                </div>
                                <div class="card__border"></div>
                            </a>

                            <a href="#" class="card">
                                <div class="card__head">
                                    <div class="card__image"></div>
                                    <div class="card__author">
                                        <div class="author">
                                            <img src="/soiree.JPG" class="author__image">
                                            <div class="author__content">
                                                <p class="author__header">publication 2001</p>
                                                <p class="author__subheader">photos et video </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card__body">
                                    <h2 class="card__headline">EDITION : </h2>
                                    <p class="card__text">revivons ensemble les evenement vecu a la bourse 2001
                                    moment de glore et bon heure partager ensemble .</p>
                                </div>
                                <div class="card__foot">
                                    <span class="card__link">Read more</span>
                                </div>
                                <div class="card__border"></div>
                            </a>

                            <a href="#" class="card">
                                <div class="card__head">
                                    <div class="card__image"></div>
                                    <div class="card__author">
                                        <div class="author">
                                            <img src="/soiree.JPG" class="author__image">
                                            <div class="author__content">
                                                <p class="author__header">publication 2000</p>
                                                <p class="author__subheader">photos et video </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card__body">
                                    <h2 class="card__headline">EDITION : </h2>
                                    <p class="card__text">revivons ensemble les evenement vecu a la bourse 2000
                                    moment de glore et bon heure partager ensemble .</p>
                                </div>
                                <div class="card__foot">
                                    <span class="card__link">Read more</span>
                                </div>
                                <div class="card__border"></div>
                            </a>

                            <a href="#" class="card">
                                <div class="card__head">
                                    <div class="card__image"></div>
                                    <div class="card__author">
                                        <div class="author">
                                            <img src="/soiree.JPG" class="author__image">
                                            <div class="author__content">
                                                <p class="author__header">publication 1999</p>
                                                <p class="author__subheader">photos et video </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card__body">
                                    <h2 class="card__headline">EDITION : </h2>
                                    <p class="card__text">revivons ensemble les evenement vecu a la bourse 1999
                                    moment de glore et bon heure partager ensemble .</p>
                                </div>
                                <div class="card__foot">
                                    <span class="card__link">Read more</span>
                                </div>
                                <div class="card__border"></div>
                            </a>

                            <a href="#" class="card">
                                <div class="card__head">
                                    <div class="card__image"></div>
                                    <div class="card__author">
                                        <div class="author">
                                            <img src="/soiree.JPG" class="author__image">
                                            <div class="author__content">
                                                <p class="author__header">publication 1998</p>
                                                <p class="author__subheader">photos et video </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card__body">
                                    <h2 class="card__headline">EDITION : </h2>
                                    <p class="card__text">revivons ensemble les evenement vecu a la bourse 1998
                                    moment de glore et bon heure partager ensemble .</p>
                                </div>
                                <div class="card__foot">
                                    <span class="card__link">Read more</span>
                                </div>
                                <div class="card__border"></div>
                            </a>

                            <a href="#" class="card">
                                <div class="card__head">
                                    <div class="card__image"></div>
                                    <div class="card__author">
                                        <div class="author">
                                            <img src="/soiree.JPG" class="author__image">
                                            <div class="author__content">
                                                <p class="author__header">publication 1997</p>
                                                <p class="author__subheader">photos et video </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card__body">
                                    <h2 class="card__headline">EDITION : </h2>
                                    <p class="card__text">revivons ensemble les evenement vecu a la bourse 1997
                                    moment de glore et bon heure partager ensemble .</p>
                                </div>
                                <div class="card__foot">
                                    <span class="card__link">Read more</span>
                                </div>
                                <div class="card__border"></div>
                            </a>

                            <a href="#" class="card">
                                <div class="card__head">
                                    <div class="card__image"></div>
                                    <div class="card__author">
                                        <div class="author">
                                            <img src="/soiree.JPG" class="author__image">
                                            <div class="author__content">
                                                <p class="author__header">publication 1996</p>
                                                <p class="author__subheader">photos et video </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card__body">
                                    <h2 class="card__headline">EDITION : </h2>
                                    <p class="card__text">revivons ensemble les evenement vecu a la bourse 1996
                                    moment de glore et bon heure partager ensemble .</p>
                                </div>
                                <div class="card__foot">
                                    <span class="card__link">Read more</span>
                                </div>
                                <div class="card__border"></div>
                            </a>
                        </div>
            `;
            break;

        case 'boursiers':
            html = `
                <div class="content-card">
                    <h2 class="section-title">
                        <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2"/>
                            <circle cx="9" cy="7" r="4"/>
                            <path d="M22 21v-2a4 4 0 0 0-3-3.87"/>
                            <path d="M16 3.13a4 4 0 0 1 0 7.75"/>
                        </svg>
                        Liste des Boursiers Actuels
                    </h2>
                    <div class="boursiers-grid">
                        ${[
                            { name: 'Marie Dupont', program: 'Excellence Académique', year: '2025' },
                            { name: 'Jean Martin', program: 'Innovation', year: '2024' },
                            { name: 'Sophie Bernard', program: 'Excellence Académique', year: '2023' },
                            { name: 'Lucas Petit', program: 'Innovation', year: '2022' },
                            { name: 'Emma Durand', program: 'Excellence Académique', year: '2021' },
                            { name: 'Thomas Moreau', program: 'Innovation', year: '2020' },
                            { name: 'Marie Dupont', program: 'Excellence Académique', year: '2019' },
                            { name: 'Jean Martin', program: 'Innovation', year: '2018' },
                            { name: 'Sophie Bernard', program: 'Excellence Académique', year: '2017' },
                            { name: 'Lucas Petit', program: 'Innovation', year: '2016' },
                            { name: 'Emma Durand', program: 'Excellence Académique', year: '2015' },
                            { name: 'Thomas Moreau', program: 'Innovation', year: '2014' },
                            { name: 'Marie Dupont', program: 'Excellence Académique', year: '2013' },
                            { name: 'Jean Martin', program: 'Innovation', year: '2012' },
                            { name: 'Sophie Bernard', program: 'Excellence Académique', year: '2011' },
                            { name: 'Lucas Petit', program: 'Innovation', year: '2010' },
                            { name: 'Emma Durand', program: 'Excellence Académique', year: '2009' },
                            { name: 'Thomas Moreau', program: 'Innovation', year: '2008' },
                            { name: 'Marie Dupont', program: 'Excellence Académique', year: '2007' },
                            { name: 'Jean Martin', program: 'Innovation', year: '2006' },
                            { name: 'Sophie Bernard', program: 'Excellence Académique', year: '2005' },
                            { name: 'Lucas Petit', program: 'Innovation', year: '2004' },
                            { name: 'Emma Durand', program: 'Excellence Académique', year: '2003' },
                            { name: 'Thomas Moreau', program: 'Innovation', year: '2002' },
                            { name: 'Marie Dupont', program: 'Excellence Académique', year: '2001' },
                            { name: 'Jean Martin', program: 'Innovation', year: '2000' },
                            { name: 'Sophie Bernard', program: 'Excellence Académique', year: '1999' },
                            { name: 'Lucas Petit', program: 'Innovation', year: '1998' },
                            { name: 'Emma Durand', program: 'Excellence Académique', year: '1997' },
                            { name: 'Thomas Moreau', program: 'Innovation', year: '1996' }
                        ].map(boursier => `
                            <div class="boursier-card">
                                <div class="boursier-info">
                                    <div class="boursier-avatar">${boursier.name.charAt(0)}</div>
                                    <div>
                                        <div class="boursier-name">${boursier.name}</div>
                                        <div class="boursier-program">${boursier.program}</div>
                                        <div class="boursier-year">Promotion ${boursier.year}</div>
                                    </div>
                                </div>
                            </div>
                        `).join('')}
                    </div>
                </div>
            `;
            break;

        case 'inscription':
            html = `
                <div class="content-card">
                    <h2 class="section-title">
                        <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"/>
                            <polyline points="14 2 14 8 20 8"/>
                            <line x1="16" y1="13" x2="8" y2="13"/>
                            <line x1="16" y1="17" x2="8" y2="17"/>
                            <polyline points="10 9 9 9 8 9"/>
                        </svg>
                        Détails d'Inscription
                    </h2>

                    <div class="info-box emerald" id="quandidate">
                        <h3 class="info-title">Documents requis</h3>
                        <ul class="info-list">
                            <li>
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <polyline points="9 18 15 12 9 6"/>
                                </svg>
                                photocopie d'acte de naissance;
                            </li>
                            <li>
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <polyline points="9 18 15 12 9 6"/>
                                </svg>
                                photocopie du releve de notes du baccalaureat , du GCE advence level ou tout  autres diplome equivalent;
                            </li>
                            <li>
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <polyline points="9 18 15 12 9 6"/>
                                </svg>
                                le transcript pour les candidats du sous-systeme anglephone;
                            </li>
                            <li>
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <polyline points="9 18 15 12 9 6"/>
                                </svg>
                                photocopie du releve de notes du probatroire ou tout autres diplome equivalent;
                            </li>
                            <li>
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <polyline points="9 18 15 12 9 6"/>
                                </svg>
                                photocopie des bulletins(3) de la classe de terminale delivres par un etablissement scolaire situe dans le departement du WOURI
                            </li>
                            <li>
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <polyline points="9 18 15 12 9 6"/>
                                </svg>
                                fiche d'inscription a la bourse ADOLESCENCE  dument remplie;
                            </li>
                            <li>
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <polyline points="9 18 15 12 9 6"/>
                                </svg>
                                Lettre de parrainage d'un parent BANKA resident a douala avec precision de l'adhesion du dit parent a une association  BANKA  de douala
                            </li>
                            <li>
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <polyline points="9 18 15 12 9 6"/>
                                </svg>
                                caution non remboursable de 10.000 FCFA pour les enfants non biologique ADOLESCENCE
                            </li>
                            <li>
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <polyline points="9 18 15 12 9 6"/>
                                </svg>
                                engagement sur l'honneur certifiant la paterniter de l'enfant signe par le president de l'associatio n;
                            </li>
                            <li>
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <polyline points="9 18 15 12 9 6"/>
                                </svg>
                                deux(2) photos 4*4
                            </li>
                            <li>
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <polyline points="9 18 15 12 9 6"/>
                                </svg>
                                photocopies d'actes de deces eventuels du ou des parents decedes;
                            </li>
                            <li>
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <polyline points="9 18 15 12 9 6"/>
                                </svg>
                                une demande de bourse manuscrite adresse au president d'ADOLESCENCE
                            </li>
                        </ul>
                    </div>

                    <div class="info-box blue">
                        <h3 class="info-title">Processus de sélection</h3>
                        <ol class="process-list">
                            <li class="process-item">
                                <span class="process-number">1</span>
                                <span>Soumission du dossier a l'association dans une chemise portant nom et numero</span>
                            </li>
                            <li class="process-item">
                                <span class="process-number">2</span>
                                <span>Examen des dossiers par le comité a la soirer de depoulement </span>
                            </li>
                            <li class="process-item">
                                <span class="process-number">3</span>
                                <span>Entretien avec les candidats présélectionnés</span>
                            </li>
                            <li class="process-item">
                                <span class="process-number">4</span>
                                <span>Annonce des résultats</span>
                            </li>
                        </ol>
                    </div>
                </div>
            `;
            break;

        case 'partenaires':
            html = `
                <div class="content-card">
                    <h2 class="section-title">
                        <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"/>
                            <circle cx="12" cy="7" r="4"/>
                        </svg>
                        Partenaires & Sponsors
                    </h2>
                    <div class="partners-grid">
                        ${['Amicale des Elites BANKA', 'Mutuelle BANKA', 'Mini Amicale', 'Diamantines BANKA', 'Etoiles BANKA', 'INSTITUT UNIVERSITAIRE DU GOLFE DE GUINÉE'
                            , 'COMPLEXE LE BYBLOS', 'SCI DIBAMBA BEACH', 'AAS SANTÉ', 'BERYO INTERNATIONAL', 'IMPRIM SERVICES', 'ARTS ET MÉTIERS', 'VENUS DIFFUSION'
                            , 'NAGOYA MOTORS', 'FME GAZ', 'MEGAPOLE HOTEL', 'GLT', 'APC', 'BEST WAY INSURANCE', 'Mini Amicale', 'CAMITAL TECHNO', 'ENGINEERING'
                            , 'CARO EVENTS', 'ELECT SYSTEM PLOMB', 'FRESHCA', 'GBD', 'PASSERELLE ORAISON', 'HATCH-TECH', 'ELECTRIC', 'HOTEL ROYAL BANKA', 'NORMAL PRINT AND COMMUNICATION SARL'
                            , 'SOPAGAV SARL', 'CCAUO', 'DJANKAM LIMITED', 'TCHAP S GROUPE', 'HORUS INVESTMENT SA', 'KOANA HOTEL', 'SABC', 'UCB'].map(partner => `
                            <div class="partner-card">
                                <div class="partner-logo">${partner.charAt(0)}</div>
                                <div class="partner-name">${partner}</div>
                            </div>
                        `).join('')}
                    </div>
                </div>
            `;
            break;

        default:
            renderHomeContent();
            return;
    }

    contentDiv.innerHTML = html;
}

// Initialize on page load
document.addEventListener('DOMContentLoaded', init);

        const height = (elem) => {
	return elem.getBoundingClientRect().height
}

const distance = (elemA, elemB, prop) => {
	const sizeA = elemA.getBoundingClientRect()[prop]
	const sizeB = elemB.getBoundingClientRect()[prop]
	return sizeB - sizeA
}

const factor = (elemA, elemB, prop) => {
	const sizeA = elemA.getBoundingClientRect()[prop]
	const sizeB = elemB.getBoundingClientRect()[prop]
	return sizeB / sizeA
}

document.querySelectorAll('.card').forEach((elem) => {

	const head = elem.querySelector('.card__head')
	const image = elem.querySelector('.card__image')
	const author = elem.querySelector('.card__author')
	const body = elem.querySelector('.card__body')
	const foot = elem.querySelector('.card__foot')
	elem.onmouseenter = () => {
		elem.classList.add('hover')

		const imageScale = 1 + factor(head, body, 'height')
		image.style.transform = `scale(${ imageScale })`

		const bodyDistance = height(foot) * -1
		body.style.transform = `translateY(${ bodyDistance }px)`

		const authorDistance = distance(head, author, 'height')
		author.style.transform = `translateY(${ authorDistance }px)`
	}
	elem.onmouseleave = () => {
		elem.classList.remove('hover')
		image.style.transform = `none`
		body.style.transform = `none`
		author.style.transform = `none`
	}
})
