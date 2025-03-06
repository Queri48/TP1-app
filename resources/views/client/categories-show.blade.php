@extends('layout.client')
@section('content')
    <div class="container mb-5 mt-5">
        <a href="{{ route('client.categories') }}">Retour</a>
        <h1>Detail de la catégorie</h1>
        <h3>
            {{ $categorie->titre }}
        </h3>
        <p>
            {{ $categorie->description }}
        </p>
        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
            @foreach ($categorie->articles as $article)
                @include('client._composants.article', [
                    'articles' => $article,
                ])
            @endforeach
        </div>
    </div>
@endsection
