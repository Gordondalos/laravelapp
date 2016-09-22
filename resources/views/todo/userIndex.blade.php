@extends('layouts.app')

@section('content')

    <div class="container p-t-1">
        <h2>Мои Задачи</h2>
        <div class="row">
            <div class="col-xs-12">
                <ul class="list-unstyled p-l-2">
                    @foreach($todos as $todo)
                        <li>
                             <input type="checkbox" class="form-check-input">
                            <a href="{{ route('todo-show', $todo->id ) }}">{{$todo->title}}</a>
                        </li>
                    @endforeach
                </ul>

            </div>
        </div>
    </div>
@stop
