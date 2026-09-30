@extends('layouts.app')

@section('title', 'Accueil - Convocations CCF')

@section('content')

<div class="page-box">

    <h1 class="page-title">
        Bonjour {{ auth()->user()->name }}
    </h1>

    <div class="separator"></div>

    <p class="page-subtitle">
        Bienvenue sur l'application de gestion des convocations
        aux épreuves informatiques en CCF.
    </p>

    <div class="cards">

        @if(auth()->user()->hasRole('CAND'))

            <div class="card">
                <h3>Mes convocations</h3>

                <p>
                    Consultez vos dates, horaires et lieux de passage
                    pour vos différentes épreuves.
                </p>

                <a href="{{ route('convocation') }}">
                    Voir mes convocations →
                </a>
            </div>

        @endif


        @if(auth()->user()->hasRole('JURY'))

            <div class="card">
                <h3>Mon planning</h3>

                <p>
                    Retrouvez les épreuves auxquelles vous êtes affecté
                    en tant que membre de jury.
                </p>

                <a href="{{ route('jury.planning') }}">
                    Voir mon planning →
                </a>
            </div>

            <div class="card">
                <h3>Mes candidats</h3>

                <p>
                    Consultez la liste des candidats que vous devez évaluer.
                </p>

                <a href="{{ route('jury.candidats') }}">
                    Voir les candidats →
                </a>
            </div>

        @endif


        @if(auth()->user()->hasRole('GEST'))

            <div class="card">
                <h3>Épreuves</h3>

                <p>
                    Créez et gérez les différentes sessions
                    d'épreuves informatiques.
                </p>

                <a href="{{ route('epreuves.index') }}">
                    Gérer les épreuves →
                </a>
            </div>

            <div class="card">
                <h3>Affectations</h3>

                <p>
                    Organisez l'affectation des jurys aux différentes sessions.
                </p>

                <a href="{{ route('epreuves.index') }}">
                    Gérer les affectations →
                </a>
            </div>

        @endif


        @if(auth()->user()->hasRole('ADMIN'))

            <div class="card">
                <h3>Utilisateurs</h3>

                <p>
                    Consultez, ajoutez et gérez les comptes utilisateurs
                    de l'application.
                </p>

                <a href="{{ route('utilisateurs.index') }}">
                    Gérer les utilisateurs →
                </a>
            </div>

            <div class="card">
                <h3>Paramétrage</h3>

                <p>
                    Gérez les rôles, statuts et paramètres
                    de l'application.
                </p>

                <a href="{{ route('parametrage.index') }}">
                    Accéder au paramétrage →
                </a>
            </div>

        @endif

    </div>

    <div class="dashboard-info">

        <h3>Gestion des convocations CCF</h3>

        <p>
            Utilisez le menu en haut de la page pour accéder
            aux fonctionnalités disponibles selon votre rôle.
        </p>

    </div>

</div>

@endsection