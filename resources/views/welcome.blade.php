@extends('layouts.layout')

@section('title', 'Главная страница')

@section('content')
@include('layouts.header')
<main>
    @auth
        @foreach ($data as $state)
            <div class="statement">
                <div class="car_number">
                    {{$state}}
                </div>
            </div>
        @endforeach
    @endauth

    <h1>Главная страница</h1>
</main>
@include('layouts.footer')
@endsection
