@extends('layouts.admin')
@section('content')
    <div class="mt-3">
        <h2 class="fw-bold d-flex justify-content-center mb-3">
            СТАТИСТИКА
        </h2>
        <div class="mt-4">
            <div class="">
                <h4 class="fw-bold d-flex justify-content-center mb-3">
                    СТАТИСТИКА ПРОДАЖ
                </h4>
                <div class="card">
                    <div class="card-body" style="font-size: 20px">
                        Всего продано: {{$sold}} заказа<br>
                        <p class="card-subtitle mb-2 text-body-secondary">Подсчет ведется по количествам заказов</p>
                    </div>
                </div>
            </div>

            <div class="mt-4">
                <h4 class="fw-bold d-flex justify-content-center mb-3">
                    СТАТИСТИКА ПОЛЬЗОВАТЕЛЕЙ (ОНЛАЙН)
                </h4>
                <div class="card">
                    <div class="card-body" style="font-size: 20px">
                        Онлайн: {{$userOnline}} пользователей
                        <p class="card-subtitle mb-2 text-body-secondary">Админ тоже считается</p>
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection
