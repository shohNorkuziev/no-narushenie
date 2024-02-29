@extends('layouts.layout')
@section('title', 'Создание заявки')
@section('content')
@include('layouts.header')
<h1>Создание заявки</h1>
<form action="{{route('state-create')}}" class="form_signup" method="post">
    @csrf
    <div>
        <label for="car_number">Номер Автомобиля</label>
        <input type="text" name="car_number" id="car_number">
    </div>
    <div>
        <label for="description">Описание нарушения</label>
        <textarea name="description"></textarea>
    </div>
    <div>
        <input type="submit" placeholder="Создать">
    </div>
</form>

@include('layouts.footer')
@endsection
