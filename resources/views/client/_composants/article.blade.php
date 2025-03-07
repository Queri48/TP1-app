<div class="col">
    <div class="card shadow-sm">
        <svg class="bd-placeholder-img card-img-top" width="100%" height="225" xmlns="http://www.w3.org/2000/svg"
            role="img" aria-label="Espace réservé&nbsp;: miniature" preserveAspectRatio="xMidYMid slice"
            focusable="false">
            <title>Placeholder</title>
            <rect width="100%" height="100%" fill="#55595c"></rect><text x="50%" y="50%" fill="#eceeef"
                dy=".3em">Thumbnail</text>
        </svg>
        <div class="card-body">
            <h3>{{ $articles->titre }}</h3>
            <p class="card-text">
                <font style="vertical-align: inherit;">
                    <font style="vertical-align: inherit;">Il s'agit d'une carte plus large avec un texte
                        d'accompagnement en dessous comme introduction naturelle à un contenu supplémentaire. Ce contenu
                        est un peu plus long.</font>
                </font>
            </p>
            <div class="d-flex justify-content-between align-items-center">
                <a href="{{ route('client.articles.detail', ['slug' => $article->slug]) }}" type="button"
                    class="btn btn-sm btn-outline-secondary">
                    <font style="vertical-align: inherit;">
                        <font style="vertical-align: inherit;">Plus de détail</font>
                    </font>
                </a>
                <small class="text-body-secondary">
                    <font style="vertical-align: inherit;">
                        <font style="vertical-align: inherit;">9 minutes</font>
                    </font>
                </small>
            </div>
        </div>
    </div>
</div>
