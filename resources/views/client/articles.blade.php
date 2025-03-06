
@extends('layout.client')
@section('content')

    <div class="container mb-5 mt-5">
        <h2 class="mb-5">Listes des Articles</h2>
        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
            @foreach ($articles as $articles)
                @include("client._composants.article",[
                    'article' => $articles
                ])
            @endforeach
        </div>
    </div>

@endsection
