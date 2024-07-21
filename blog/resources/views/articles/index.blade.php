@extends("layouts.app")

@section("content")
    <div class="container" style="max-width: 600px">

        @if(session("info"))
            <div class="alert alert-info">
                {{ session("info") }}
            </div>
        @endif

        {{ $articles->links() }}

        @foreach ($articles as $article)
            <div class="card mb-2">
                <div class="card-body">
                    <h4>{{ $article->title }}</h4>
                    <div class="text-muted mb-2">
                        <b class="text-success">{{ $article->user->name }}</b>,
                        <b>Category:</b> {{ $article->category->name ?? 'Unknown' }},
                        <b>Comments:</b> {{ count($article->comments) }}
                    </div>
                    <div class="mb-2">
                        {{ $article->body }}

                        <a href="{{ url("/articles/detail/$article->id") }}">
                        View Detail
                    </a>
                    </div>
                    <div class="text-muted mt-2">{{ $article->created_at->diffForHumans() }}</div>
                </div>
            </div>
        @endforeach
    </div>
@endsection
