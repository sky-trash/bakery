@extends('layouts.admin')
@section('content')
    <div class="mt-3 ">
        @if(session('success'))
            <div class="alert alert-success alert-dismissible fade show ms-5 me-2" role="alert">
                {{ session('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif

        @if(session('error'))
            <div class="alert alert-danger alert-dismissible fade show ms-5 me-2" role="alert">
                {{ session('error') }}
                <a href="{{session('telegram_link')}}">{{session('telegram_text')}}</a>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif



        <h2 class="fw-bold d-flex justify-content-center mb-3">
            ВСЕ КОНТАКТЫ
        </h2>
        <div class="mt-4">
            <table class="table table-striped-columns">
                <thead>
                <tr>
                    <th scope="col">id</th>
                    <th scope="col">Номер</th>
                    <th scope="col">Адрес</th>
                    <th scope="col">Электронная почта</th>
                    <th scope="col">Кнопка</th>
                </tr>
                </thead>
                <tbody>
                @foreach($contacts as $item)
                    <tr>
                        <th scope="row">{{$item->id}}</th>
                        <th scope="row">{{$item->phone}}</th>
                        <th scope="row">{{$item->adres}}</th>
                        <th scope="row">{{$item->email}}</th>
                        <th scope="row">
                            <a href="{{route('admin.contacts.edit', $item->id )}}"> <button class="btn btn-success" type="submit">Изменить</button></a>
                        </th>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>

    </div>
@endsection
