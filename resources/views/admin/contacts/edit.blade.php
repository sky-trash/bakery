@extends('layouts.admin')
@section('content')
    <div class="mt-3 mb-3">
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
            ОБНОВЛЕНИЕ КОНТАКТОВ
        </h2>

        <div class="mt-4">
            <form action="{{route('admin.contacts.update', $contact->id)}}" class="w-50" method="post" >
                @csrf
                @method('PATCH')
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Телефон</label>
                    <input type="text" class="form-control" name="phone" id="exampleFormControlInput1" value="{{$contact->phone}}" placeholder="Название">
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Адрес</label>
                    <input type="text" class="form-control" name="adres" id="exampleFormControlInput1" value="{{$contact->adres}}" placeholder="Цена">
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Почта</label>
                    <input type="email" class="form-control" name="email" id="exampleFormControlInput1" value="{{$contact->email}}" placeholder="Цена">
                </div>

                <button type="submit" class="btn btn-primary">Обновить</button>
            </form>
        </div>

    </div>
@endsection
