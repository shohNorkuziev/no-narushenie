@extends('layouts.layout')

@section('title', 'Админка')

@section('content')
@include('layouts.header')
<main>
    @auth
    <div class="container">
            <div class="statement form_signup">
                <div class="car_number">
                    <span>Номер Автомобиля:</span>
                    {{$data->car_number}}
                </div>
                <div class="description">
                    <span>Описание нарушения:</span>
                    {{$data->description}}
                </div>
                <div class="status">
                    <span>Статус:</span>
                    {{$data->status}}
                </div>
                <div class="status">
                    <span>Изменить статус:</span>
                    <form action="{{route('statements.update',['statement' => $data->id])}}" method="post">
                        @csrf
                        @method('put')
                        <select name="status" id="">
                            <option selected disabled>выберите статус</option>
                                <option value="подтверждено">подтверждено</option>
                                <option value="отклонено">отклонено</option>
                            <input type="submit" value="Изменить">
                        </select>
                    </form>
                </div>
            </div>
    @endauth
    </div>
</main>
@include('layouts.footer')
@endsection
