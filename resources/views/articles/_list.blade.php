@if($articles->count())
    @foreach ($articles as $article)
        <article>
            <h2>
                <a href="/articles/{{ $article->id }}">{{ $article->title }}</a>
                {{--<a href="{{ action('ArticlesController@show', [$article->id]) }}">{{ $article->title }}</a>--}}
                {{--<a href="{{ url('/articles',$article->id) }}">{{ $article->title }}</a>--}}
            </h2>

            <div class="body">
                {{ $article->body }}
            </div>

            <div>
                @include('users._link', ['user' => $article->user])
            </div>

            <div>
                @include('users._subscribe', ['user' => $article->user])
            </div>
            </article>
    @endforeach
@else
    Here is nothing :(
@endif