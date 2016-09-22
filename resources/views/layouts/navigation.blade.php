<section class="section_1 bg-faded">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 p-x-0">
                <nav class="navbar bavbar-light bg-faded">
                    <div class="col-sm-1 col-xs-2 p-x-0">
                        <button class="navbar-toggler hidden-sm-up" type="button" data-toggle="collapse"
                                data-target="#exCollapsingNavbar2" aria-controls="exCollapsingNavbar2" aria-expanded="false"
                                aria-label="Toggle navigation">
                            &#9776;
                        </button>
                    </div>
                    <div class="col-xs-10 col-sm-12">
                        <div class="row">
                            <div class="input-group ">
                                <input ng-model="search" type="text" class="form-control" placeholder="Search for...">
                                <span class="input-group-btn">
                                <button class="btn btn-secondary" type="button"><i class="fa fa-search" aria-hidden="true"></i></button>
                            </span>
                            </div>
                        </div>
                    </div>
                    <div class="collapse navbar-toggleable-xs p-t-1" id="exCollapsingNavbar2">
                        <a class="navbar-brand" href="/">Photo manager</a>
                        <div class="clearfix hidden-sm-up"></div>
                        <ul class="nav navbar-nav">
                            <li class="nav-item">
                                <a class="nav-link" href="/home">home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="/post">Блог</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="/todo">Все задачи</a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link" href="{{route('showmy')}}">Мои Задачи</a>
                            </li>

                            <!-- Authentication Links -->
                            @if (Auth::guest())

                                <li class="nav-item">
                                    <a class="nav-link" href="{{ url('/login') }}">Login</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ url('/register') }}">Register</a>
                                </li>

                            @else
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ url('/logout') }}">{{ Auth::user()->name }}</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ url('/logout') }}">Logout</a>
                                </li>
                            @endif
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
    </div>
</section>