<!DOCTYPE html>
<html lang="fr">
<head>
    @php use Illuminate\Support\Str; @endphp
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Administrateur - Association Excellence & Développement</title>
    <link rel="stylesheet" href="{{ asset('css/contact-admin.css') }}">
    <link rel="stylesheet" href="{{ asset('css/administration.css') }}">
    <link rel="stylesheet" href="{{ asset('css/dashbord-admin.css') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
</head>
<body>
    <!-- Sidebar -->
    <aside class="sidebar">
        <div class="sidebar-header"></div>
        <nav class="sidebar-nav">
            <a href="index-admin" class="active"><i class="fa fa-home"></i> Home</a>
            <a href="annonce-admin"><i class="fa fa-bullhorn"></i> Annonces</a>
            <a href="publication-admin"><i class="fa fa-file"></i> Publications</a>
            <a href="historique-admin"><i class="fa fa-clock"></i> Historique</a>
            <a href="media-admin"><i class="fa fa-image"></i> Médias</a>
            <a href="commentaire-admin"><i class="fa fa-comments"></i> Commentaires</a>
            <a href="notification-admin"><i class="fa fa-bell"></i> Notifications</a>
            <!-- <a href="femmes-admin"><i class="fa fa-bell"></i> femme adolescence</a> -->
            <a href="activites-admin"><i class="fa fa-bell"></i> activites</a>
            <!-- <a href="bourse-admin"><i class="fa fa-bell"></i> bourse</a> -->
            <a href="contact-admin"><i class="fa fa-bell"></i> contact</a>
            <a href="{{ route('logout.view') }}"><i class="fa fa-sign-out"></i> Quitter</a>
        </nav>
        <div class="sidebar-footer">
            <a href="administration" style="text-decoration: none;"><div class="support-img">
                <img src="https://cdn-icons-png.flaticon.com/512/3135/3135715.png" alt="Support" style="width:40px;">
                <span style="margin-left:8px; color: black;">Administration</span>
            </div></a>
        </div>
    </aside>
    <!-- Main Dashboard -->
    <main class="main-dashboard">
        <div class="dashboard-header fade-in">
            <div>
                <div class="dashboard-title">Dashboard Administrateur</div>
                <div style="color:#6b7280;font-size:15px;">Bienvenue sur l'espace de gestion de l'association adolescence banka</div>
            </div>
            <div class="dashboard-user">
                <img src="https://randomuser.me/api/portraits/men/32.jpg" alt="Admin">
                <span><span style="font-weight:600;font-size:32px;">{{$admin->nom}} </span> &nbsp; Admin </span>
            </div>
        </div>

                <!-- TOP ACTIONS -->
        <div class="top-actions">
            <div class="page-header">
            <h2>Gestion des profils utilisateurs du site</h2>
            <div class="stats"><b>{{ $totalContacts }}</b> <b>Contacts deja enregistrer</b></div>
            </div>
        </div>

        <div class="container mt-4">
    <h3 class="mb-3"></h3>

   @if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif

<table class="table table-bordered table-striped">
    <thead class="table-success">
        <tr>
            <th>Nom Complet</th>
            <th>E-mail</th>
            <th>Téléphone</th>
            <th>Motif</th>
            <th>Sujet</th>
            <th>Message</th>
            <th>Action</th>
        </tr>
    </thead>

    <tbody>
        @forelse($contacts as $contact)
            <tr>
                <td>{{ $contact->full_name }}</td>
                <td>{{ $contact->email }}</td>
                <td>{{ $contact->phone ?? '-' }}</td>
                <td>{{ ucfirst($contact->motif) }}</td>
                <td>{{ $contact->subject }}</td>
                <td>{{ Str::limit($contact->message, 50) }}</td>
                <td>
                    <form action="{{ route('admin.contacts.destroy', $contact->id) }}"
                          method="POST"
                          onsubmit="return confirm('Supprimer ce message ?')">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger btn-sm">
                            Supprimer
                        </button>
                    </form>
                </td>
            </tr>
        @empty
            <tr>
                <td colspan="7" class="text-center">
                    Aucun message trouvé
                </td>
            </tr>
        @endforelse
    </tbody>
</table>
 <div class="pagination-simple">
    @if ($contacts->onFirstPage())
        <span>Précédent</span>
    @else
        <a href="{{ $contacts->previousPageUrl() }}">Précédent</a>
    @endif

    @if ($contacts->hasMorePages())
        <a href="{{ $contacts->nextPageUrl() }}">Suivant</a>
    @else
        <span>Suivant</span>
    @endif
  </div>

</div>
 <br>
        <section class="dashboard-overview fade-in">
            <div class="overview-card">
                <div style="font-weight:600;margin-bottom:8px;">Overview</div>
                <ul class="overview-list">
                    <li>Member Profit <span>+1345</span></li>
                    <li>Member Profit <span>-1241</span></li>
                    <li>Member Profit <span>+2341</span></li>
                    <li>Member Profit <span>-2341</span></li>
                </ul>
            </div>
            <div class="overview-card total-sale">
                <div style="font-weight:600;margin-bottom:8px;">Total Sale</div>
                <div class="circle-progress">70%</div>
                <span class="view-all-btn" onclick="alert('Voir tous les détails')">View All</span>
            </div>
            <div class="activity-card">
                <div style="font-weight:600;margin-bottom:8px;">Activity</div>
                <ul class="activity-list">
                    <li><span class="activity-dot"></span> Lorem ipsum activity, lorem ipsum dolor sit amet.</li>
                    <li><span class="activity-dot"></span> Lorem ipsum activity, lorem ipsum dolor sit amet.</li>
                    <li><span class="activity-dot"></span> Lorem ipsum activity, lorem ipsum dolor sit amet.</li>
                </ul>
                <span class="view-all-btn" onclick="alert('Voir toutes les activités')">View All</span>
            </div>
        </section>
    </main>
    <script src="{{ asset('js/dashbord-admin.js') }}"></script>
    <script src="{{ asset('js/contact-admin.js') }}"></script>
</body>
</html>