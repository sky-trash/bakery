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
            ОТЗЫВЫ
        </h2>
        <div class="mt-4">
            <table class="table table-striped-columns">
                <thead>
                <tr>
                    <th scope="col">id</th>
                    <th scope="col">Почта пользователя</th>
                    <th scope="col">Звезды</th>
                    <th scope="col">Название</th>
                    <th scope="col">Описание</th>
                    <th scope="col">Время</th>
                    <th scope="col">Кнопка</th>
                </tr>
                </thead>
                <tbody>
                @foreach($reviews as $item)
                    <tr>
                        <th scope="row">{{$item->id}}</th>
                        <th scope="row">{{$item->user->email}}</th>
                        <th scope="row">{{$item->rating}}</th>
                        <th scope="row">{{$item->title}}</th>
                        <th scope="row">{{$item->description}}</th>
                        <th scope="row">{{$item->date}}</th>

                        <th scope="row">
                            <form action="{{route('admin.reviews.destroy', $item->id)}}" method="post"
                                  style="display:inline;" onsubmit="return confirm('Удалить отзыв #{{ $item->id }}?')">
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
                {{$reviews->withQueryString()->links()}}
            </div>
        </div>

    </div>
@endsection
