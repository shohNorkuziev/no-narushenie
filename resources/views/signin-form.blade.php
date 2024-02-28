@extends('layouts.layout')
@section('title', 'Вход')
@section('content')
    <form action="{{ route('signin') }}" method="post">
        @csrf
        <div>
            <label for="login">Логин</label>
            <input type="text" name="login" id="login">
        </div>
        <div>
            <label for="password">Пароль</label>
            <input type="password" name="password" id="password">
        </div>
        <div>
            <button type="submit">Вход</button>
        </div>
    </form>
@endsection

