<header class="w-full">
    <h1>
        @auth
        @if (Auth::user()->role === 'user')
            <a href="{{route('main')}}">
                Нарушения Нет.
            </a>
        @endif
        @if (Auth::user()->role === 'admin')
            <a href="{{route('mainAdmin')}}">
                Нарушения Нет.
            </a>
        @endif
        @endauth
    </h1>
    @guest
    <div class="signup w-full btn btn-primary">
      <a href="{{ route('signup-form') }}">Регистрация</a>
    </div>
    <div class="signin w-full btn btn-primary">
       <a href="{{ route('signin-form') }}">Вход</a>
    </div>
    @endguest
    @auth
    @if (Auth::user()->role == 'user')
        <div class="state w-full btn btn-primary">
            <a href="{{ route('statement-form') }}">Создать заявку</a>
        </div>
    @endif
    <div class="logout w-full btn btn-primary">
       <a href="{{ route('logout') }}">Выход</a>
    </div>
    @endauth
</header>
