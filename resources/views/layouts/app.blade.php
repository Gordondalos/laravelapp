<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title>Laravelapp</title>
    <link rel="shortcut icon" href="{{ asset('build/img/favicon/favicon.ico') }}" type="image/x-icon">

    <link rel="stylesheet" href="{{ asset('build/css/blueimp-gallery.min.css') }}">
    <link rel="stylesheet" href="{{ asset('build/css/jquery.fileupload.css') }}">
    <link rel="stylesheet" href="{{ asset('build/css/jquery.fileupload-ui.css') }}">

    <link rel="stylesheet" href="{{ asset('build/css/main.css') }}">

</head>
<body ng-app="myApp">

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





    @yield('content')

    <!-- JavaScripts -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.3/jquery.min.js" integrity="sha384-I6F5OKECLVtK/BL+8iSLDEHowSAfUo76ZL9+kGAgTRdiByINKJaqTPH/QVNS1VDb" crossorigin="anonymous"></script>
    {{--<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>--}}
    {{-- <script src="{{ elixir('js/app.js') }}"></script> --}}



<!--[if lt IE 9]>
    <script src="{{asset('build/libs/html5shiv/es5-shim.min.js')}}"></script>
    <script src="{{asset('build/libs/html5shiv/html5shiv.min.js')}}"></script>
    <script src="{{asset('build/libs/html5shiv/html5shiv-printshiv.min.js')}}"></script>
    <script src="{{asset('build/libs/respond/respond.min.js')}}"></script>
    <![endif]-->


    <script src="{{asset('build/libs/modernizr/modernizr.js')}}"></script>
    <script src="{{asset('build/libs/jquery/jquery-1.11.2.min.js')}}"></script>
    <script src="{{asset('build/libs/waypoints/waypoints.min.js')}}"></script>
    <script src="{{asset('build/libs/animate/animate-css.js')}}"></script>
    <script src="{{asset('build/libs/plugins-scroll/plugins-scroll.js')}}"></script>



    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- The jQuery UI widget factory, can be omitted if jQuery UI is already included -->
    <script src="{{asset('build/js/vendor/jquery.ui.widget.js')}}"></script>
    <!-- The Templates plugin is included to render the upload/download listings -->
    <script src="//blueimp.github.io/JavaScript-Templates/js/tmpl.min.js"></script>
    <!-- The Load Image plugin is included for the preview images and image resizing functionality -->
    <script src="//blueimp.github.io/JavaScript-Load-Image/js/load-image.all.min.js"></script>
    <!-- The Canvas to Blob plugin is included for image resizing functionality -->
    <script src="//blueimp.github.io/JavaScript-Canvas-to-Blob/js/canvas-to-blob.min.js"></script>
    <!-- Bootstrap JS is not required, but included for the responsive demo navigation -->
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
    <!-- blueimp Gallery script -->
    <script src="//blueimp.github.io/Gallery/js/jquery.blueimp-gallery.min.js"></script>
    <!-- The Iframe Transport is required for browsers without support for XHR file uploads -->
    <script src="{{asset('build/js/vendor/jquery.iframe-transport.js')}}"></script>
    <!-- The basic File Upload plugin -->
    <script src="{{asset('build/js/vendor/jquery.fileupload.js')}}"></script>
    <!-- The File Upload processing plugin -->
    <script src="{{asset('build/js/vendor/jquery.fileupload-process.js')}}"></script>
    <!-- The File Upload image preview & resize plugin -->
    <script src="{{asset('build/js/vendor/jquery.fileupload-image.js')}}"></script>
    <!-- The File Upload audio preview plugin -->
    <script src="{{asset('build/js/vendor/jquery.fileupload-audio.js')}}"></script>

    <!-- The File Upload validation plugin -->
    <script src="{{asset('build/js/vendor/jquery.fileupload-validate.js')}}"></script>
    <!-- The File Upload user interface plugin -->
    <script src="{{asset('build/js/vendor/jquery.fileupload-ui.js')}}"></script>



    <script src="{{asset('build/js/common.js')}}"></script>





</body>
</html>
