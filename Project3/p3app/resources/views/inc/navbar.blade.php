<!DOCTYPE html>
<html lang="en">

<head>
    <title>Brainster</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css"
        integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
    <link href="/css/custom.css" rel="stylesheet">
    <link rel="stylesheet" href="/css/app.css">

</head>
    <body>
      <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
        <div class="container-fluid">
            <a class="navbar-brand" href="{{ url('/') }}">
                <img src="/pictures/logo.png" alt="">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <!-- Left Side Of Navbar -->
                <ul class="navbar-nav mr-auto">

                </ul>
                <ul class="nav navbar-nav links">
                  <li><a href="/">Академии</a></li>
                  <li><a href="/">Вебинари</li></a>
                  <li><a href="/">Тест за кариера</a></li>
                  <li><a href="/">Блог</a></li>

                </ul>

                <!-- Right Side Of Navbar -->
                <ul class="navbar-nav ml-auto">
                    <!-- Authentication Links -->
                    @guest
                    <li><a type="button" class="btn btn-primary " data-toggle="modal" data-target=".bs-example-modal-sm" href="">Пријави се</a></li>
                    {{-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target=".bs-example-modal-sm">Пријави се</button> --}}

                        <div class="modal fade bs-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel">
                        <div class="modal-dialog modal-sm" role="document">
                            <div class="modal-content">
                                Внесете ја вашата email адреса
                                <input type="email" placeholder="example@mail.com" name="" id="">
                                <span class="btn btn-success">Пријави се</span>
                            </div>
                        </div>
                        </div>
                        {{-- <li class="nav-item">
                            <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                        </li> --}}
                        @if (Route::has('register'))
                            {{-- <li class="nav-item">
                                <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                            </li> --}}
                        @endif
                    @else
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ Auth::user()->name }}
                            </a>

                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="/home">Админ панел</a>
                                <a class="dropdown-item" href="{{ route('logout') }}"
                                   onclick="event.preventDefault();
                                                 document.getElementById('logout-form').submit();">
                                    Одјави се
                                </a>
                                    
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf a
                                </form>
                            </div>
                        </li>
                    @endguest
                </ul>
            </div>
        </div>
    </nav>


        
    </body>
</html>