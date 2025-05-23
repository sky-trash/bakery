@extends('layouts.admin')

@section('content')
<div class="mt-3">
    <h2 class="fw-bold mb-3">Добавить новую акцию</h2>

    @if ($errors->any())
        <div class="alert alert-danger ms-5 me-2">
            <ul class="mb-0">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('admin.promotions.store') }}" method="POST" enctype="multipart/form-data" class="ms-5 me-5">
        @csrf

        <div class="mb-3">
            <label for="title" class="form-label">Название</label>
            <input type="text" name="title" id="title" class="form-control" value="{{ old('title') }}" required>
        </div>

        <div class="mb-3">
            <label for="description" class="form-label">Описание</label>
            <textarea name="description" id="description" rows="4" class="form-control" required>{{ old('description') }}</textarea>
        </div>

        <div class="mb-3">
            <label for="date" class="form-label">Дата</label>
            <input type="date" name="date" id="date" class="form-control" value="{{ old('date') }}">
        </div>

        <div class="mb-3">
            <label for="image" class="form-label">Изображение</label>
            <input type="file" name="image" id="image" class="form-control" accept="image/*">
        </div>

        <button type="submit" class="btn btn-primary">Создать</button>
        <a href="{{ route('admin.promotions.index') }}" class="btn btn-secondary ms-2">Отмена</a>
    </form>
</div>
@endsection
