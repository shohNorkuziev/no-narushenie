<header class="w-full">
    <h1>
        Нарушения Нет.
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
    <div class="logout w-full btn btn-primary">
       <a href="{{ route('logout') }}">Выход</a>
    </div>
    @endauth
</header>
