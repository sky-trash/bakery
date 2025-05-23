@extends('layouts.admin')

@section('content')
<div class="container mt-3">
    <h2>Редактировать акцию #{{ $promotion->id }}</h2>

    <form action="{{ route('admin.promotions.update', $promotion->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label for="title" class="form-label">Название</label>
            <input type="text" class="form-control" id="title" name="title" value="{{ old('title', $promotion->title) }}" required>
        </div>

        <div class="mb-3">
            <label for="description" class="form-label">Описание</label>
            <textarea class="form-control" id="description" name="description">{{ old('description', $promotion->description) }}</textarea>
        </div>

        <div class="mb-3">
            <label for="date" class="form-label">Дата</label>
            <input type="date" class="form-control" id="date" name="date" value="{{ old('date', $promotion->date ? $promotion->date->format('Y-m-d') : '') }}">
        </div>

        <div class="mb-3">
            <label for="image" class="form-label">Изображение</label>
            @if($promotion->image)
                <div>
                    <img src="{{ asset('storage/' . $promotion->image) }}" alt="image" style="max-width: 200px; margin-bottom: 10px;">
                </div>
            @endif
            <input type="file" class="form-control" id="image" name="image" accept="image/*">
        </div>

        <button type="submit" class="btn btn-primary">Обновить</button>
        <a href="{{ route('admin.promotions.index') }}" class="btn btn-secondary">Отмена</a>
    </form>
</div>
@endsection
