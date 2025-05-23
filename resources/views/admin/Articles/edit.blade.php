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
            ОБНОВЛЕНИЕ СТАТЕЙ
        </h2>

        <div class="mt-4">
            <form action="{{route('admin.articles.update', $article->id)}}" class="w-50" method="post" enctype="multipart/form-data">
                @csrf
                @method('PATCH')
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Название</label>
                    <input type="text" class="form-control" name="title" id="exampleFormControlInput1" value="{{$article->title}}" placeholder="Название">
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlTextarea1" class="form-label">Описание</label>
                    <textarea class="form-control" name="description" id="exampleFormControlTextarea1" placeholder="Описание" rows="3">{{$article->description}}</textarea>
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Время</label>
                    <input type="text" class="form-control" name="time" id="exampleFormControlInput1" value="{{$article->time}}" placeholder="Время">
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Тип</label>
                    <select class="form-select" name="type_id" aria-label="Default select example">
                        @foreach($type as $item)
                            <option value="{{$item->id}}" {{$item->id == $article->type_id ? 'selected' : ''}}>
                                {{$item->type}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="mb-3">
                    <label for="formFile" class="form-label">Default file input example</label>
                    <input class="form-control" type="file" name="image" id="formFile">
                    <img class="w-50 mt-3" src="{{ asset('storage/article/' . $article->image) }}" alt="">
                </div>

                <button type="submit" class="btn btn-primary">Обновить</button>
            </form>
        </div>

    </div>
@endsection
