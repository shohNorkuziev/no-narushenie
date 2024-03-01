@extends('layouts.layout')

@section('title', 'Админка')

@section('content')
@include('layouts.header')
<main>
    @auth
    <h1 class="title">Все заявки</h1>
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
                <div class="status">
                    <span>Изменить статус:</span>
                    <a href="{{ route('statements.edit',['statement'=> $state->id])}}">
                        Изменить
                    </a>
                </div>
            </div>
        @endforeach
    @endauth
    </div>            {{$data->links()}}
</main>
@include('layouts.footer')
@endsection
