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
            Route::put('/historique-admin/{id}', [EventController::class, 'update'])->name('events.update');
            //Supprimer un historique existant
            Route::delete('/historique-admin/{event}', [EventController::class, 'destroy'])->name('events.destroy'); 

        // Gestion de la deconnexion admin

            // Afficher la vue de déconnexion
            Route::get('/deconnection-admin', [DexController::class, 'indexvue'])->name('logout.view');
            // Traiter la déconnexion
            Route::get('/deconnection-admin/confirm', [DexController::class, 'logoutadmin'])->name('logout.admin');

});





Route::get('/administration', function () {
    return view('administration');
});

Route::get('/contact-admin', function () {
    return view('contact-admin');
});

Route::get('/commentaire-admin', function () {
    return view('commentaire-admin');
});

Route::get('/activites-admin', function () {
    return view('activites-admin');
});



Route::get('/bourse-user', function () {
    return view('bourse-user');
});
Route::get('/contact-user', function () {
    return view('contact-user');
});
Route::get('/galerie', function () {
    return view('galerie');
});
Route::get('/Activiter-user', function () {
    return view('Activiter-user');
});
Route::get('/A propos-user', function () {
    return view('A propos-user');
});
Route::get('/index', function () {
    return view('index');
});
Route::get('/femmeadolescence-user', function () {
    return view('femmeadolescence-user');
});