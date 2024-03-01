@extends('layouts.layout')
@section('title', 'Вход')
@section('content')
@include('layouts.header')
<main>
<form action="{{ route('signin') }}" method="post" class="form_signup">
        @csrf
        <h1 class="title">Вход</h1>
                @csrf
                <div>
                    <input type="text" name="login" id="login" placeholder="Логин">
                </div>
                <div>
                    <input type="password" name="password" id="password" placeholder="Пароль">
                </div>
                <div>
                    <input type="submit" placeholder="Вход">
                </div>
    </form>
</main>
@include('layouts.footer')
@endsection

