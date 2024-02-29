@extends('layouts.layout')
@section('title', 'Вход')
@section('content')
@include('layouts.header')
<h1>Вход</h1>
<form action="{{ route('signin') }}" method="post" class="form_signup">
        @csrf
        <div>
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
                    <input type="submit" placeholder="Вход">
                </div>
            </form>
        </div>
    </form>
@include('layouts.footer')
@endsection

