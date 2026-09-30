<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>@yield('title', 'Convocations CCF')</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>

<nav class="navbar">

    <div class="navbar-left">

        <a href="{{ route('menu') }}" class="logo">
            Convocations CCF
        </a>

        <ul class="menu">

            <li class="menu-item">
                <a href="{{ route('menu') }}" class="menu-link">
                    Accueil
                </a>
            </li>

            @if(auth()->user()->hasRole('CAND'))

                <li class="menu-item">
                    <a href="{{ route('convocation') }}" class="menu-link">
                        Convocations
                    </a>
                </li>

                <li class="menu-item">
                    <a href="#" class="menu-link">
                        Profil
                    </a>
                </li>

            @endif


            @if(auth()->user()->hasRole('JURY'))

                <li class="menu-item">

                    <a href="#" class="menu-link">
                        Jury ▼
                    </a>

                    <div class="dropdown">
                        <a href="{{ route('jury.planning') }}">
                            Jurys affectés
                        </a>

                        <a href="{{ route('jury.planning') }}">
                            Épreuves
                        </a>

                        <a href="{{ route('jury.candidats') }}">
                            Candidats
                        </a>
                    </div>

                </li>

                <li class="menu-item">
                    <a href="#" class="menu-link">
                        Profil
                    </a>
                </li>

            @endif


            @if(auth()->user()->hasRole('GEST'))

                <li class="menu-item">

                    <a href="#" class="menu-link">
                        Gestion ▼
                    </a>

                    <div class="dropdown">

                        <a href="#">
                            Utilisateurs
                        </a>

                        <a href="#">
                            Gestion des jurys
                        </a>

                        <a href="#">
                            Lieux
                        </a>

                    </div>

                </li>

                <li class="menu-item">

                    <a href="#" class="menu-link">
                        Examens ▼
                    </a>

                    <div class="dropdown">

                        <a href="{{ route('epreuves.index') }}">
                            Épreuves
                        </a>

                        <a href="{{ route('epreuves.index') }}">
                            Affectations
                        </a>

                        <a href="{{ route('epreuves.index') }}">
                            Convocations
                        </a>

                    </div>

                </li>

                <li class="menu-item">
                    <a href="#" class="menu-link">
                        Profil
                    </a>
                </li>

            @endif


            @if(auth()->user()->hasRole('ADMIN'))

                <li class="menu-item">

                    <a href="#" class="menu-link">
                        Administration ▼
                    </a>

                    <div class="dropdown">

                        <a href="{{ route('utilisateurs.index') }}">
                            Comptes utilisateurs
                        </a>

                        <a href="#">
                            Droits d'accès
                        </a>

                        <a href="#">
                            Sessions d'examen
                        </a>

                    </div>

                </li>

                <li class="menu-item">
                    <a href="#" class="menu-link">
                        Profil
                    </a>
                </li>

            @endif

        </ul>

    </div>


    <div class="navbar-right">

        <span class="username">
            {{ auth()->user()->name }}
        </span>

        <form method="POST"
              action="{{ route('logout') }}"
              class="logout-form">

            @csrf

            <button type="submit" class="logout-button">
                Déconnexion
            </button>

        </form>

    </div>

</nav>


<main class="container">

    @yield('content')

</main>

</body>
</html>