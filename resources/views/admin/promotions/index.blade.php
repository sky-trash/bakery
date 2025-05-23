@extends('layouts.admin')

@php
use Carbon\Carbon;
@endphp

@section('content')
<div class="mt-3">
    @if(session('success'))
        <div class="alert alert-success alert-dismissible fade show ms-5 me-2" role="alert">
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif

    @if(session('error'))
        <div class="alert alert-danger alert-dismissible fade show ms-5 me-2" role="alert">
            {{ session('error') }}
            <a href="{{ session('telegram_link') }}">{{ session('telegram_text') }}</a>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif

    <div class="d-flex justify-content-between align-items-center mb-3">
        <h2 class="fw-bold">ВСЕ АКЦИИ</h2>
        <a href="{{ route('admin.promotions.create') }}" class="btn btn-primary">Добавить акцию</a>
    </div>

    <table class="table table-striped-columns">
        <thead>
            <tr>
                <th>ID</th>
                <th>Название</th>
                <th>Описание</th>
                <th>Дата</th>
                <th>Изображение</th>
                <th>Создано</th>
                <th>Обновлено</th>
                <th>Действия</th>
            </tr>
        </thead>
        <tbody>
            @foreach($promotions as $promotion)
            <tr>
                <td>{{ $promotion->id }}</td>
                <td>{{ $promotion->title }}</td>
                <td>{{ $promotion->description }}</td>
                <td>{{ $promotion->date ? Carbon::parse($promotion->date)->format('d.m.Y') : '-' }}</td>
                <td>
                    @if($promotion->image)
                        <img src="{{ asset('storage/' . $promotion->image) }}" alt="image" style="max-width: 100px; height:auto;">
                    @else
                        Нет изображения
                    @endif
                </td>
                <td>{{ Carbon::parse($promotion->created_at)->format('d.m.Y H:i') }}</td>
                <td>{{ Carbon::parse($promotion->updated_at)->format('d.m.Y H:i') }}</td>
                <td>
                    <a href="{{ route('admin.promotions.update', $promotion->id) }}" class="btn btn-success mb-1">Изменить</a>
                    <form action="{{ route('admin.promotions.destroy', $promotion->id) }}" method="POST" style="display:inline;" onsubmit="return confirm('Удалить акцию #{{ $promotion->id }}?')">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger" type="submit">Удалить</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>

    <div class="d-grid justify-content-center mt-3 mb-3">
        {{ $promotions->withQueryString()->links() }}
    </div>
</div>
@endsection
