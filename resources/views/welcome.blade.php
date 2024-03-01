@extends('layouts.layout')

@section('title', 'Главная страница')

@section('content')
@include('layouts.header')
<main>
    @auth
    <h1 class="title">Ваши заявки</h1>
    <div class="container">
        @foreach ($data as $state)
            <div class="statement form_signup">
                <div class="car_number">
                    <span>Номер Автомобиля:</span>
                    {{$state->car_number}}
                </div>
                <div class="description">
                    <span>Описание нарушения:</span>
                    {{$state->description}}
                </div>
                <div class="status">
                    <span>Статус:</span>
                    {{$state->status}}
                </div>
            </div>
        @endforeach
    @endauth
    </div>            {{$data->links()}}
</main>
@include('layouts.footer')
@endsection
