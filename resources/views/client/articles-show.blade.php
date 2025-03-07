@extends('layout.client')
@section('content')
<div class="container mb-5 mt-5">
    <a href="{{ route('client.articles') }}">Retour</a>
    <h1>Detail de l'article</h1>
    <h3>
        {{ $article->titre }}
    </h3>
    <p>
        {{ $article->description }}
    </p>
    <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
       {{ $article }}
    </div>
</div>
@endsection
