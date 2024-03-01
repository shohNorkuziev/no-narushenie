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
                    <button class="change">Изменить</button>
                    <dialog class="dialog">
                    <form action="{{route('changeStatus')}}" method="post">
                        @csrf
                        @method('PUT')
                        <select name="status" id="">
                            <option selected disabled>выберите статус</option>
                                <option value="Подтверждено">Подтверждено</option>
                                <option value="Отклонено">Отклонено</option>
                            <input type="submit" value="Изменить">
                        </select>
                    </form>
                    <input type="submit" value="Закрыть" class="close">
                    </dialog>
                </div>
            </div>


        @endforeach
    @endauth
    </div>            {{$data->links()}}
</main>
<script>
const change = document.querySelectorAll('.change')
const dialog =  document.querySelector('.dialog')
const close = document.querySelector('.close')
change.addEventListener('click', ()=>{
    console.log('что не так');
    dialog.showModal()
})
close.addEventListener('click',()=>{
    dialog.close()
})
</script>
@include('layouts.footer')
@endsection
