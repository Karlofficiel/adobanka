<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8" />
  <title>Administration – Historique</title>
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <link rel="stylesheet" href="{{ asset('css/dashbord-admin.css') }}">
  <link rel="stylesheet" href="{{ asset('css/historique-admin.css') }}">
</head>
<body>
 <!-- Sidebar -->
    <aside class="sidebar">
        <div class="sidebar-header">
</div>
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
                <span><span style="font-weight:600;">{{$admin->nom}} </span> &nbsp; Admin </span>
            </div>
        </div>
        
  <!-- TOP ACTIONS -->
  <div class="top-actions">
    <div class="page-header">
      <h2>Gestion de l'Historique</h2>
      <div class="stats">{{ $totalEvents }} événements dans la timeline</div>
    </div>
    <div class="actions-right">
      <button class="btn-new" id="openModal"><i class="fa-solid fa-plus"></i> Nouvel Événement</button>
    </div>
  </div>

  <!-- TIMELINE -->
  <div class="timeline">

    <!-- Event 1 -->
    @foreach ($events as $event)
<div class="event">
    <div class="event-icon {{ $event->type }}">
        @if($event->type == 'fondation')
            <i class="fa-solid fa-building"></i>
        @elseif($event->type == 'etape')
            <i class="fa-solid fa-flag-checkered"></i>
        @elseif($event->type == 'expansion')
            <i class="fa-solid fa-chart-line"></i>
        @endif
    </div>

    <div class="event-content">
        <div class="event-header">
            <div style="flex:1">
                <div class="event-year">{{ $event->year }}</div>

                <div class="event-title-row">
                    <h3 class="event-title">
                        {{ ucfirst($event->type) }}
                    </h3>

                    <span class="badge {{ $event->type }}">
                        {{ ucfirst($event->type) }}
                    </span>
                </div>
            </div>

            @if($event->image)
                <img src="{{ asset('storage/' . $event->image) }}"
                     alt="{{ $event->type }}"
                     class="event-image">
            @endif
        </div>

        <p class="event-desc">{{ $event->message }}</p>

        <div class="event-actions">
            <button class="btn-edit" onclick="openEditModal({{ $event->id }})">
                <i class="fa-solid fa-pen"></i> Modifier
            </button>

            
       <!-- Bouton Voir Plus -->
        <button class="btn-edit" onclick="toggleVoirPlus({{ $event->id }})">
            <i class="fa-solid fa-arrow-right"></i> Voir Plus
        </button>

        <p id="voir-plus-{{ $event->id }}" class="event-voir-plus" style="display:none;">
            {{ $event->voir_plus }}
        </p>
       

            <form action="{{ route('events.destroy', $event->id) }}" 
                  method="POST" style="display:inline">
                @csrf
                @method('DELETE')
                <button class="btn-delete" onclick="return confirm('Supprimer ?')">
                    <i class="fa-solid fa-trash"></i> Supprimer
                </button>
            </form>
        </div>

    </div>
</div>
@endforeach


<script>
function toggleVoirPlus(id) {
    const elem = document.getElementById('voir-plus-' + id);
    elem.style.display = (elem.style.display === 'none') ? 'block' : 'none';
}
</script>
   
  <!-- MODAL NOUVEAU -->
  <div class="modal" id="modalNew">
    <div class="backdrop" onclick="closeNewModal()"></div>
    <div class="dialog">
      <header>
        <h3>Nouvel Événement</h3>
        <button class="x" onclick="closeNewModal()"><i class="fa-solid fa-xmark"></i></button>
      </header>

          <form id="formNew" method="POST" action="{{ route('events.store') }}" enctype="multipart/form-data">
          @csrf

          <div class="form-group">
              <label for="newImage">Image</label>
              <div class="input-icon">
                  <i class="fa-solid fa-image"></i>
                  <input type="file" id="newImage" name="image">
              </div>
          </div>

          <div class="form-group">
              <label for="newMessage">Message</label>
              <div class="input-icon">
                  <i class="fa-solid fa-message"></i>
                  <textarea id="newMessage" name="message" placeholder="Description de l'événement…"></textarea>
              </div>
          </div>

          <div class="form-group">
              <label for="newType">Type d'événement</label>
              <div class="input-icon">
                  <i class="fa-solid fa-tag"></i>
                  <select id="newType" name="type">
                      <option value="fondation">Fondation</option>
                      <option value="etape">Étape clé</option>
                      <option value="expansion">Expansion</option>
                      <option value="recompenses">Recompenses</option>
                  </select>
              </div>
          </div>

          <div class="form-group">
              <label for="newYear">Année</label>
              <div class="input-icon">
                  <i class="fa-solid fa-calendar"></i>
                  <input type="number" id="newYear" name="year" placeholder="2024" min="1900" max="2100">
              </div>
          </div>

         <div class="form-group"> 
            <label for="voir_plus">Voir Plus</label>
            <i class="fa-solid fa-arrow-right"></i>
            <input type="text" name="voir_plus" id="voir_plus" placeholder="Lien vers plus d'informations (optionnel)">
        </div>


          <div class="form-actions">
              <button type="button" class="btn-cancel" onclick="closeNewModal()">Annuler</button>
              <button type="submit" class="btn-submit">Créer</button>
          </div>
      </form>

    </div>
  </div>

  <!-- MODAL EDIT -->
  <div class="modal" id="modalEdit">
    <div class="backdrop" onclick="closeEditModal()"></div>
    <div class="dialog">
      <header>
        <h3>Modifier l'Événement</h3>
        <button class="x" onclick="closeEditModal()"><i class="fa-solid fa-xmark"></i></button>
      </header>


@foreach ($events as $event)

<form method="POST"
      action="{{ route('events.update', $event->id) }}"
      enctype="multipart/form-data">

    @csrf
    @method('PUT')

    <div class="form-group">
        <label>Image</label>
        <input type="file" name="image">
    </div>

    <div class="form-group">
        <label>Description</label>
        <textarea name="message">{{ old('message', $event->message) }}</textarea>
    </div>

    <div class="form-group">
        <label>Type</label>
        <select name="type">
            <option value="fondation" {{ $event->type === 'fondation' ? 'selected' : '' }}>Fondation</option>
            <option value="etape" {{ $event->type === 'etape' ? 'selected' : '' }}>Étape clé</option>
            <option value="expansion" {{ $event->type === 'expansion' ? 'selected' : '' }}>Expansion</option>
               <option value="recompenses" {{ $event->type === 'recompenses' ? 'selected' : '' }}>recompenses</option>
        </select>
    </div>

    <div class="form-group">
        <label>Année</label>
        <input type="number" name="year" value="{{ old('year', $event->year) }}">
    </div>

    <div class="form-group">
        <label>Voir plus</label>
        <input type="text" name="voir_plus" value="{{ old('voir_plus', $event->voir_plus) }}">
    </div>

    <button type="submit" class="btn-submit">Modifier</button>

</form>

@endforeach

    </div>
  </div>

            

  <script src="{{ asset('js/historique-admin.js') }}"></script>
 
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
    
</body>
</html>
