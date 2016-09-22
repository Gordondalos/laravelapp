@extends('layouts.app')

@section('content')

    <div class="container p-t-2">

        <div class="row">
            <div class="col-xs-12">
                <a href="/post">Блог</a> /
                <a href="/posts/{{$post->slug}}">{{$post->title}}</a>
            </div>

        </div>

        <div class="row p-t-2">
            <div class="col-xs-12">
                <h2>{{$post->title}}</h2>
                <small class="text-mutted">
                    Опубликовано {{$post->created_at->format('d.m.Y H:i:s')}}
                </small>
                <div class="clearfix"></div>
                <p>{{ $post->body }}</p>
            </div>
        </div>
    </div>


@stop
