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
            <a href="{{ session('telegram_link') }}">{{ session('telegram_text') }}</a>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif

    <h2 class="fw-bold d-flex justify-content-center mb-3">
        РЕДАКТИРОВАНИЕ ЗАКАЗА
    </h2>

    <div class="mt-4">
        <form action="{{ route('admin.orders.update', $order->id) }}" class="w-50" method="POST">
            @csrf
            @method('PATCH')

            <div class="mb-3">
                <label class="form-label">Статус</label>
                <select class="form-select" name="status">
                    <option value="Ожидает" {{ $order->status == 'pending' ? 'selected' : '' }}>Ожидает</option>
                    <option value="В обработке" {{ $order->status == 'processing' ? 'selected' : '' }}>В обработке</option>
                    <option value="Завершён" {{ $order->status == 'completed' ? 'selected' : '' }}>Завершён</option>
                    <option value="Отменён" {{ $order->status == 'cancelled' ? 'selected' : '' }}>Отменён</option>
                </select>
            </div>

            <button type="submit" class="btn btn-primary">Сохранить</button>
        </form>
    </div>
</div>
@endsection
