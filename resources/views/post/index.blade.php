@extends('layouts.app')

@section('content')

    <div class="container p-t-2">
        <div class="row">
            @if($posts->count())
                @foreach ($posts as $post)
                    <article class="col-xs-6">
                        <h2>{{$post->title}}</h2>
                        <p>
                            {{ str_limit($post->body, $limit = 150, $end = '...') }}

                        </p>
                        <a href="{{ route('get-post', $post->slug ) }}">Читать далее...</a>

                    </article>
                @endforeach
            @else
                <h1>Посты не найдены</h1>
            @endif

        </div>
    </div>
@stop
