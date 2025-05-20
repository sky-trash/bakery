@extends('layouts.main')

@section('content')
<div class="container position-relative mt-3">
    <!-- Кнопка назад в виде стрелки -->
    <a href="{{ route('reviews.index') }}" class="btn btn-link position-absolute top-0 start-0" style="color: black; font-size: 1.5rem; text-decoration: none;">
        &larr; Назад
    </a>

    <h2 class="text-center">Оставить отзыв</h2>

    <form id="reviewForm" action="{{ route('reviews.store') }}" method="POST" class="mt-4">
        @csrf

        <div class="mb-3">
            <label for="title" class="form-label">Заголовок</label>
            <input type="text" class="form-control" id="title" name="title" required>
        </div>  

        <div class="mb-3">
            <label for="description" class="form-label">Описание</label>
            <textarea class="form-control" id="description" name="description" rows="4" required></textarea>
        </div>

        <div class="mb-3">
            <label class="form-label">Оценка</label>
            <div class="rating">
                @for ($i = 5; $i >= 1; $i--)
                    <input type="radio" name="rating" id="star{{ $i }}" value="{{ $i }}">
                    <label for="star{{ $i }}">&#9733;</label>
                @endfor
            </div>
        </div>

        <button id="submitBtn" type="submit" class="btn btn-primary disabled-btn" disabled>Отправить</button>
    </form>
</div>

<style>
.rating {
    direction: rtl;
    unicode-bidi: bidi-override;
    display: inline-flex;
}

.rating input[type="radio"] {
    display: none;
}

.rating label {
    font-size: 2rem;
    color: #ccc;
    cursor: pointer;
}

.rating input:checked ~ label,
.rating label:hover,
.rating label:hover ~ label {
    color: #ffc107;
}

/* Неактивная кнопка тусклая */
.disabled-btn:disabled {
    background-color: #ccc !important;
    border-color: #bbb !important;
    color: #666 !important;
    cursor: not-allowed;
}
</style>

<script>
    const form = document.getElementById('reviewForm');
    const submitBtn = document.getElementById('submitBtn');

    form.addEventListener('input', () => {
        const title = form.title.value.trim();
        const description = form.description.value.trim();
        const ratingChecked = form.querySelector('input[name="rating"]:checked');

        if (title && description && ratingChecked) {
            submitBtn.disabled = false;
        } else {
            submitBtn.disabled = true;
        }
    });
</script>
@endsection
