@extends('layouts.guest')

@section('title', 'Connexion - Convocations CCF')

@section('content')

<div class="auth-card">

    <h1 class="auth-title">
        Convocations CCF
    </h1>

    <p class="auth-subtitle">
        Connectez-vous pour accéder à votre espace
    </p>

    @if ($errors->any())
        <div class="error-box">
            {{ $errors->first() }}
        </div>
    @endif

    <form method="POST" action="{{ route('login') }}">

        @csrf

        <div class="form-group">

            <label for="email">
                Adresse e-mail
            </label>

            <input
                class="form-control"
                type="email"
                id="email"
                name="email"
                value="{{ old('email') }}"
                placeholder="exemple@email.fr"
                required
                autofocus
            >

        </div>

        <div class="form-group">

            <label for="password">
                Mot de passe
            </label>

            <input
                class="form-control"
                type="password"
                id="password"
                name="password"
                placeholder="Votre mot de passe"
                required
            >

        </div>

        <button class="btn auth-button" type="submit">
            Se connecter
        </button>

    </form>

</div>

@endsection