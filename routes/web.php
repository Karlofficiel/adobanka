<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DexController;
use App\Http\Controllers\AnnonceController;
use App\Http\Controllers\PublicationController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\NotificationController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\MediaController;
use App\Http\Controllers\indexController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ContactAdminController;
use App\Http\Controllers\MessageController;
use App\Http\Controllers\activiteruserController;
use App\Http\Controllers\eventsiteController;


// Gestion de la connexion admin

    // Afficher le formulaire de connexion
    Route::get('connexion', [AdminController::class, 'showLoginForm'])->name('login.form');
    // Traiter la soumission du formulaire de connexion
    Route::post('admin/login', [AdminController::class, 'login'])->name('login.submit');
    
    // Route::get('/index-admin', [indexController::class, 'index']);

Route::middleware(['auth.check'])->group(function () {

        // Page d'accueil admin
            Route::get('/index-admin', function () {
                return view('index-admin');
            });

        // Gestion deS médias

            // Afficher la page des médias admin
            Route::get('/media-admin', [MediaController::class, 'index'])->name('medias.index');
            // Enregistrer un nouveau média
            Route::post('/media-admin', [MediaController::class, 'store'])->name('medias.store');

        //Gestion des annonces

            // afficher des annonces
            Route::get('/annonce-admin', [AnnonceController::class, 'index'])->name('annonce.admin');
            // Activer/Désactiver
            Route::patch('/annonce/{id}/toggle', [AnnonceController::class, 'toggleActif'])->name('annonce.toggle');
            // creation annonces
            Route::post('/annonce/store', [AnnonceController::class, 'store'])->name('annonce.store');
            // suppression annonces
            Route::delete('/annonce/{id}', [AnnonceController::class, 'destroy'])->name('annonce.destroy');
    
        //Gestion des publications

            // afficher des publications
            Route::get('/publication-admin', [PublicationController::class, 'index'])->name('publication.admin');
            // creation publications
            Route::post('/publications', [PublicationController::class, 'store'])->name('publications.store');
            // modification publications
            Route::put('/publications/{id}', [PublicationController::class, 'update'])->name('publications.update');
            // suppression publications
            Route::delete('/publications/{id}', [PublicationController::class, 'destroy'])->name('publications.destroy');
            // mise a jour du statut publication
            Route::post('/publications/{id}/statut', [PublicationController::class, 'updateStatut'])->name('publications.updateStatut');

        // Gestion des notifications

            // Afficher la page des notifications admin
            Route::get('/notification-admin', [NotificationController::class, 'index'])->name('notifications.admin');
            // Enregistrer une nouvelle notification
            Route::post('/notification-admin', [NotificationController::class, 'store'])->name('notifications.store');
            //Supprimer une notification existante
            Route::delete('/notifications/{id}', [NotificationController::class, 'destroy'])->name('notifications.destroy');

        // Gestion des historiques

            // Afficher la page des historiques admin
            Route::get('/historique-admin', [EventController::class, 'index'])->name('events.index');
            // Enregistrer un nouvel historique
            Route::post('/historique-admin', [EventController::class, 'store'])->name('events.store');
            // Mettre à jour un historique existant
            Route::put('/historique-admin/{event}', [EventController::class, 'update'])->name('events.update');
            //Supprimer un historique existant
            Route::delete('/historique-admin/{event}', [EventController::class, 'destroy'])->name('events.destroy'); 

        // Gestion de la deconnexion admin

            // Afficher la vue de déconnexion
            Route::get('/deconnection-admin', [DexController::class, 'indexvue'])->name('logout.view');
            // Traiter la déconnexion
            Route::get('/deconnection-admin/confirm', [DexController::class, 'logoutadmin'])->name('logout.admin');

         // Gestion des messages contact admin

            // Afficher la liste des messages contact
            Route::get('/administration', [ContactAdminController::class, 'index'])->name('admin.contacts.index');
            // Supprimer un message contact
            Route::delete('/administration/{id}', [ContactAdminController::class, 'destroy'])->name('admin.contacts.destroy');   
});

// Site utilisateur 

// page Contact Commentaire
Route::get('/contact-user', [ContactController::class, 'index'])->name('contact.user'); 
Route::post('/contact', [ContactController::class, 'store'])->name('contact.store');

// page Contact Commentaire via MessageController    

Route::post('/contact-user', [MessageController::class, 'store'])->name('message.store');


// page activiter user
Route::get('/Activiter-user', [activiteruserController::class, 'index'])
    ->name('activiter.user');

// Historique site public
Route::get('/A propos-user', [eventsiteController::class, 'index'])->name('eventsite.index');








Route::get('/commentaire-admin', function () {
    return view('commentaire-admin');
});

Route::get('/activites-admin', function () {
    return view('activites-admin');
});

Route::get('/contact-admin', function () {
    return view('contact-admin');
});






Route::get('/bourse-user', function () {
    return view('bourse-user');
});

Route::get('/galerie', function () {
    return view('galerie');
});

Route::get('/index', function () {
    return view('index');
});

Route::get('/femmeadolescence-user', function () {
    return view('femmeadolescence-user');
});