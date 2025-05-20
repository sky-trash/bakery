@extends('layouts.main')

@section('content')
<div class="container py-5">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h2 class="fw-bold mb-0">Отзывы клиентов</h2>
        @auth
            <a href="{{ route('reviews.create') }}" class="btn btn-primary">
                Оставить отзыв
            </a>
        @endauth
    </div>

    @forelse($reviews as $review)
        <div class="border rounded p-4 mb-4 shadow-sm bg-white">
            <div class="d-flex justify-content-between align-items-center mb-2">
                <h5 class="mb-0">{{ $review->title }}</h5>
                <div class="text-warning" style="font-size: 1.1rem;">
                    @for ($i = 1; $i <= 5; $i++)
                        <span style="color: {{ $i <= $review->rating ? '#ffc107' : '#dee2e6' }};">&#9733;</span>
                    @endfor
                </div>
            </div>

            <p class="mb-3 text-secondary">{{ $review->description }}</p>

            <div class="d-flex justify-content-between text-muted small">
                <div><strong>Автор:</strong> {{ $review->user ? $review->user->name : 'Гость' }}</div>
                <div><strong>Дата:</strong> {{ \Carbon\Carbon::parse($review->date)->format('d.m.Y H:i') }}</div>
            </div>
        </div>
    @empty
        <p class="text-center text-muted">Пока отзывов нет.</p>
    @endforelse
</div>
@endsection
