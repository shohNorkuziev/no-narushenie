@extends('layouts.layout')
@section('title', 'Создание заявки')
@section('content')
@include('layouts.header')

<main>
    <form action="{{route('state-create')}}" class="form_signup" method="post">
        <h1 class="title">Создание заявки</h1>
        @csrf
        <div>
            <input type="text" name="car_number" id="car_number" placeholder="Номер Автомобиля">
        </div>
        <div>
            <textarea name="description" placeholder="Описание нарушения"></textarea>
        </div>
        <div>
            <input type="submit" placeholder="Создать">
        </div>
    </form>
</main>
@include('layouts.footer')
@endsection
