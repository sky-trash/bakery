@extends('layouts.admin')
@section('content')
    <div class="mt-3 mb-3">
        @if(session('error'))
            <div class="alert alert-danger alert-dismissible fade show ms-5 me-2" role="alert">
                {{ session('error') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif

        <h2 class="fw-bold d-flex justify-content-center mb-3">
            ДОБАВЛЕНИЕ ПРОДУКТОВ
        </h2>

        <div class="mt-4">
            <form action="{{route('admin.products.store')}}" class="w-50" method="post" enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Название</label>
                    <input type="text" class="form-control" name="title" id="exampleFormControlInput1" placeholder="Название">
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlTextarea1" class="form-label">Описание</label>
                    <textarea class="form-control" name="description" id="exampleFormControlTextarea1" placeholder="Описание" rows="3"></textarea>
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Цена</label>
                    <input type="text" class="form-control" name="price" id="exampleFormControlInput1" placeholder="Цена">
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Тип</label>
                    <input type="text" class="form-control" name="type" id="exampleFormControlInput1" placeholder="Тип">
                </div>
                <div class="mb-3">
                    <label for="formFile" class="form-label">Default file input example</label>
                    <input class="form-control" type="file" name="image" id="formFile">
                </div>

                <button type="submit" class="btn btn-primary">Добавить</button>
            </form>
        </div>

    </div>
@endsection
