@extends('layouts.layout')
@section('title', 'Регистрация')
@section('content')
@include('layouts.header')
<h1>Регистрация</h1>
    <form action="{{ route('signup') }}" method="post" class="form_signup">
        @csrf
        <div>
            <label for="firstname">Имя</label>
            <input type="text" name="firstname" id="name">
        </div>
        <div>
            <label for="lastname">Фамилия</label>
            <input type="text" name="lastname" id="name">
        </div>
        <div>
            <label for="patronymic">Отчество</label>
            <input type="text" name="patronymic" id="name">
        </div>
        <div>
            <label for="phone">Телефон</label>
            <input type="text" name="phone" id="phone">
        </div>
        <div>
            <label for="login">Логин</label>
            <input type="text" name="login" id="login">
        </div>
        <div>
            <label for="email">Email</label>
            <input type="email" name="email" id="email">
        </div>
        <div>
            <label for="password">Пароль</label>
            <input type="password" name="password" id="password">
        </div>
        <div>
            <input type="submit" placeholder="Регистрация">
</div>
    </form>
@include('layouts.footer')
@endsection
