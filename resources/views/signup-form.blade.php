@extends('layouts.layout')
@section('title', 'Регистрация')
@section('content')
@include('layouts.header')
<main>
    <form action="{{ route('signup') }}" method="post" class="form_signup">
        @csrf
        <h1 class="title">Регистрация</h1>
        <div>
            <input type="text" name="firstname" id="name" placeholder="Имя">
        </div>
        <div>
            <input type="text" name="lastname" id="name" placeholder="Фамилия">
        </div>
        <div>
            <input type="text" name="patronymic" id="name" placeholder="Отчество">
        </div>
        <div>
            <input type="text" name="phone" id="phone" placeholder="Телефон">
        </div>
        <div>
            <input type="text" name="login" id="login" placeholder="Логин">
        </div>
        <div>
            <input type="email" name="email" id="email" placeholder="Email">
        </div>
        <div>
            <input type="password" name="password" id="password" placeholder="Пароль">
        </div>
        <div>
            <input type="submit" placeholder="Регистрация">
        </div>
    </form>
</main>
@include('layouts.footer')
@endsection
