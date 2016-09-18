@extends('layouts.app')

@section('content')
    <div ng-controller="PhotoController">
        <section class="section_2">
            <div class="container">
                <div class="row p-y-1" ng-repeat="q in qr| filter:search" ng-class="$odd ? 'odd' : 'even'">
                    <div class="col-xs-8">
                        <ul class="list-unstyled">
                            <li><span>Магазин</span> <b>@{{ q.shop }}</b></li>
                            <li><span>Клиент</span> <b>@{{ q.client }}</b></li>
                            <li><span>Номер посылки</span> <b>@{{ q.number }}</b></li>
                            <li><span>Партнер</span> <b>@{{ q.partner }}</b></li>
                        </ul>
                    </div>
                    <div class="col-xs-4 text-xs-center">
                        <a href="photo_add.html?q=@{{ q.number }}" class="add_button btn btn-primary m-t-2"><i class="fa fa-camera" aria-hidden="true"></i> add</a>
                    </div>
                </div>
            </div>

        </section>

    </div>
@endsection
