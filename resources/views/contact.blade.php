@extends('layouts/main')

@section('content')

  <h2>Contact</h2>
  <p>Formulaire d'inscription</p>

  <!-- Success message -->
  @if(Session::has('success'))
            <div>
                {{Session::get('success')}}
            </div>
          @endif

          <h1>Votre demande de contact</h1>
          <form method="POST" action="/contact">
          @csrf
        <div>
            <input type="text" name="name" placeholder="Nom du contact">
        </div>
        <div>
            <textarea name="message" placeholder="message"></textarea>
        </div>
        <div>
        <input type="email" name="email" placeholder="Votre email">
        </div>
        <div>
            <button type="submit">Créer le projet</button>
        </div>
    </form>
@endsection