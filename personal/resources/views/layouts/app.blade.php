<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

         <!-- Scripts -->
        <script src="{{ asset('public/js/app.js') }}" defer></script>

        <!-- Fonts -->
        <link rel="dns-prefetch" href="//fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

        <!-- Styles -->
        <link href="{{ asset('public/css/app.css') }}" rel="stylesheet">
        <link href="{{ asset('resources/css/app.css') }}" rel="stylesheet">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Be+Vietnam+Pro:wght@900&display=swap" rel="stylesheet">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
        <style>
            * {
                box-sizing: border-box;
            }
            @media only screen and (min-width: 600px) {
                body {
                    font-family: 'Nunito', sans-serif;
                    background-color: dodgerblue;
                }
            }
            @media only screen and (max-width: 600px) {
                body {
                    font-family: 'Nunito', sans-serif;
                    background-color: dodgerblue;
                }
            }
            @media only screen and (min-width: 768px) {
                body {
                    font-family: 'Nunito', sans-serif;
                    background-image: linear-gradient(rgba(0,0,0,0.5), rgba(0,0,0,0.5)), url('public/images/workplaces.jpg');
                    background-size: cover;
                }
            }
            @media only screen and (min-width: 992px) {
                body {
                    font-family: 'Nunito', sans-serif;
                    background-image: linear-gradient(rgba(0,0,0,0.5), rgba(0,0,0,0.5)), url('public/images/workplaces.jpg');
                    background-size: cover;
                }
            }
            @media only screen and (min-width: 1200px) {
                body {
                    font-family: 'Nunito', sans-serif;
                    background-image: linear-gradient(rgba(0,0,0,0.7), rgba(0,0,0,0.7)), url('public/images/workplaces.jpg');
                    background-size: cover;
                }
            }
            .fab {
                color: white;
                font-size: 20px;
                padding: 10px;
            }
            .fas {
                font-size: 30px;
                color: white;
                padding-left: 20px;
            }
        </style>
    </head>
    <body>
        <nav class="navbar navbar-expand-md navbar-transparent">
            <div class="container">
                <a class="navbar-brand" style="color: white;" href="{{ url('/') }}">
                    {{ config('app.name', 'Laravel') }}
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav me-auto">
                        <li class="nav-item">
                            <a class="nav-link" style="color: white;" href="{{ route('welcome') }}">{{ __('Home') }}</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" style="color: white;" href="{{ route('login') }}">{{ __('About Me') }}</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" style="color: white;" href="{{ route('login') }}">{{ __('My Resume') }}</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" style="color: white;" href="{{ route('login') }}">{{ __('Contact Me') }}</a>
                        </li>
                    </ul>
                    {{-- <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ms-auto">
                        <!-- Authentication Links -->
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" style="color: white;" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" style="color: white;" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul> --}}
                </div>
            </div>
        </nav>
        <main class="py-4">
            @yield('content')
        </main>
    </body>
</html>
