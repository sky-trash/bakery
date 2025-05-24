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
            ВСЕ ПОПУЛЯРНЫЕ СТАТЬИ
        </h2>
        <div class="mt-4">
            <table class="table table-striped-columns">
                <thead>
                <tr>
                    <th scope="col">id</th>
                    <th scope="col">Название</th>
                    <th scope="col">Описание</th>
                    <th scope="col">Время</th>
                    <th scope="col">Тип</th>
                    <th scope="col">Кнопка</th>
                </tr>
                </thead>
                <tbody>
                @foreach($articles as $item)
                <tr>
                    <th scope="row">{{$item->id}}</th>
                    <th scope="row">{{$item->title}}</th>
                    <th scope="row">{{$item->description}}</th>
                    <th scope="row">{{$item->time}}</th>
                    <th scope="row">{{$item->typeArticles->type}}</th>
                    <th scope="row">
                        <a href="{{route('admin.articles.edit', $item->id )}}"> <button class="btn btn-success" type="submit">Изменить</button></a>
                        <form action="{{route('admin.articles.destroy', $item->id)}}" method="post" style="display:inline;"
                              onsubmit="return confirm('Удалить статью #{{ $item->id }}?')">
                            @csrf
                            @method('delete')
                        <button class="btn btn-danger mt-1" type="submit">Удалить</button>
                        </form>
                    </th>
                </tr>
                @endforeach
                </tbody>
            </table>
            <div class="d-grid justify-content-center mt-3 mb-3">
                {{$articles->withQueryString()->links()}}
            </div>
        </div>

    </div>
@endsection
