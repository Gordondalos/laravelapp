@extends('layouts.app')

@section('content')

    <div class="container p-t-1">
        <div class="row">

            @foreach($errors->all() as $error)
                <div class="errors">{{$error}}</div>
            @endforeach

            <div class="col-xs-12">
                <h2 class="display-inline pull-left"><input type="checkbox" @if($todo->finish) checked @endif > {{$todo->title}} </h2>
                <small class="text-muted pull-right">{{$todo->created_at}}</small>
                <div class="clearfix"></div>
                <p>{{$todo->body}}</p>
                {{--<form method="post" action="{{ route('close_task') }}">--}}
                    {!! Form::open(array('route' => 'close_task', 'method'=>'Post'))!!}
                    <input type="hidden" name="id" value="{{$todo->id}}">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <input type="submit" class="btn btn-primary pull-right" value="Завершить">
                    {!! Form::close()!!}
                {{--</form>--}}

            </div>
        </div>
    </div>


@stop
