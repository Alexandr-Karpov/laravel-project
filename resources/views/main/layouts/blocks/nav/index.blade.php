{{--<div class="d-flex flex-column flex-md-row align-items-center px-md-4 bg-nav">--}}
{{--    <a class="navbar-brand" href="{{ url('/') }}">--}}
{{--        <img class="logo" src="{{asset('img/logo.png')}}" alt="InterProv">--}}
{{--    </a>--}}
{{--    <nav class="my-2 my-md-0 mr-md-auto">--}}
{{--        <a class="pl-3 pr-3 menu-link {{ Request::is('internet') ? 'active-link' : '' }}" href="{{ url('/internet') }}">Домашний интернет</a>--}}
{{--        <a class="pl-3 pr-3 menu-link {{ Request::is('tv') ? 'active-link' : '' }}" href="{{ url('/tv') }}">Телевидение</a>--}}
{{--    </nav>--}}
{{--    @if (Route::has('login'))--}}
{{--        <div class="top-right links">--}}
{{--            @auth--}}
{{--                <a class="p-3 menu-link" href="{{ url('/home') }}">Home</a>--}}
{{--            @else--}}
{{--                <a class="p-3 menu-link" href="{{ route('login') }}">Войти</a>--}}

{{--                @if (Route::has('register'))--}}
{{--                    <a class="p-3 menu-link" href="{{ route('register') }}">Зарегистрироваться</a>--}}
{{--                @endif--}}
{{--            @endauth--}}
{{--        </div>--}}
{{--    @endif--}}
{{--</div>--}}

<nav class="navbar navbar-expand-md navbar-light shadow-sm nav-site">
    <a class="navbar-brand" href="{{ url('/') }}">
        <img class="logo" src="{{asset('img/logo.png')}}" alt="InterProv">
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <!-- Left Side Of Navbar -->
        <div class="my-2 my-md-0 mr-md-auto">
            <a class="pl-2 pr-2 menu-link {{ Request::is('internet') ? 'active-link' : '' }}" href="{{ url('/internet') }}">Домашний интернет</a>
            <a class="pl-2 pr-2 menu-link {{ Request::is('tv') ? 'active-link' : '' }}" href="{{ url('/tv') }}">Телевидение</a>
        </div>

        <!-- Right Side Of Navbar -->
        <ul class="navbar-nav ml-auto">
            <!-- Authentication Links -->
            @guest
                <li class="nav-item">
                    <a class="pl-2 pr-2 menu-link {{ Request::is('login') ? 'active-link' : '' }}" href="{{ route('login') }}">{{ __('Войти') }}</a>
                </li>
                @if (Route::has('register'))
                    <li class="nav-item">
                        <a class="pl-2 pr-2 menu-link {{ Request::is('register') ? 'active-link' : '' }}" href="{{ route('register') }}">{{ __('Зарегистрироваться') }}</a>
                    </li>
                @endif
            @else
                <li class="nav-item dropdown pl-2 pr-2 menu-link">
                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                        {{ Auth::user()->first_name }}  {{ Auth::user()->last_name }} <span class="caret"></span>
                    </a>

                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                        @if (Auth::user()->role_id == 1)
                            <a class="dropdown-item" href="{{ url('/dashboard') }}">
                                {{ __('Админ панель') }}
                            </a>
                        @endif
                        <a class="dropdown-item" href="{{ url('/profile') }}">
                            {{ __('Профиль') }}
                        </a>
                        <a class="dropdown-item" href="{{ route('logout') }}"
                           onclick="event.preventDefault();
                                                 document.getElementById('logout-form').submit();">
                            {{ __('Выйти') }}
                        </a>


                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    </div>
                </li>
            @endguest
        </ul>
    </div>
</nav>
