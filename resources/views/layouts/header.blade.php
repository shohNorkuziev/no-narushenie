<header class="w-full">
    <h1>
        <a href="{{route('home')}}">
            Нарушения Нет.
        </a>
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
    <div class="state w-full btn btn-primary">
        <a href="{{ route('statement-form') }}">Создать заявку</a>
     </div>
    <div class="logout w-full btn btn-primary">
       <a href="{{ route('logout') }}">Выход</a>
    </div>
    @endauth
</header>
