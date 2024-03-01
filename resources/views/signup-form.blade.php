@extends('layouts.layout')
@section('title', 'Регистрация')
@section('content')
@include('layouts.header')
<main>
    <form action="{{ route('signup') }}" method="post" class="form_signup">
        @csrf
        <h1 class="title">Регистрация</h1>
        <div>
            <input type="text" name="firstname" id="name" placeholder="Имя" required>
            @error('firstname')
                <p class="error">{{$message}}</p>
            @enderror
        </div>
        <div>
            <input type="text" name="lastname" id="name" placeholder="Фамилия" required>
            @error('lastname')
            <p class="error">{{$message}}</p>
            @enderror
        </div>
        <div>
            <input type="text" name="patronymic" id="name" placeholder="Отчество" required>
            @error('patronymic')
            <p class="error">{{$message}}</p>
            @enderror
        </div>
        <div>
            <input type="text" name="phone" id="phone" placeholder="Телефон +7(XXX)-XXX-XX-XX)" required>
            @error('phone')
            <p class="error">{{$message}}</p>
            @enderror
        </div>
        <div>
            <input type="login" name="login" id="login" placeholder="Логин" required>
            @error('firstname')
            <p class="error">{{$message}}</p>
            @enderror
        </div>
        <div>
            <input type="email" name="email" id="email" placeholder="Email" required>
            @error('email')
            <p class="error">{{$message}}</p>
            @enderror
        </div>
        <div>
            <input type="password" name="password" id="password" placeholder="Пароль" required>
            @error('password')
            <p class="error">{{$message}}</p>
            @enderror
        </div>
        <div>
            <input type="submit" placeholder="Регистрация">
        </div>
    </form>
</main>
@include('layouts.footer')
@endsection
