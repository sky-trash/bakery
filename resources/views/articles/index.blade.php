@extends('layouts.main')
@section('content')
    <!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Иконки Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        .article-card {
            transition: transform 0.3s, box-shadow 0.3s;
            height: 100%;
        }

        .article-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
        }

        .category-badge {
            position: absolute;
            top: 10px;
            right: 10px;
        }

        .bread-bg {
            background-color: #f8f1e7;
        }

        /*.hero-section {*/
        /*    background: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url('https://images.unsplash.com/photo-1608190003443-86a72638d7c3?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80');*/
        /*    background-size: cover;*/
        /*    background-position: center;*/
        /*    color: white;*/
        /*    padding: 100px 0;*/
        /*    margin-bottom: 40px;*/
        /*}*/

        /*!* Стили для пагинации *!*/
        /*.page-link {*/
        /*    transition: all 0.3s ease;*/
        /*    margin: 0 3px;*/
        /*    border-radius: 5px !important;*/
        /*}*/

        /*.page-link:hover {*/
        /*    background-color: #28a745 !important;*/
        /*    color: white !important;*/
        /*    border-color: #28a745 !important;*/
        /*}*/

        /*.page-item.active .page-link {*/
        /*    background-color: #28a745 !important;*/
        /*    border-color: #28a745 !important;*/
        /*}*/

        .page-item.disabled .page-link {
            opacity: 0.6;
        }
    </style>
</head>

<body class="bread-bg">

<!-- Основной контент -->
<div class="container mb-5">
    <!-- Категории -->
    <div class="row mb-4">
        <div class="col-12">
            <div class="d-flex flex-wrap gap-2">
                <a href="{{route('articles.index')}}"
                   class="btn {{ empty(request('type')) || request('type') == 'all' ? 'btn-success' : 'btn-outline-success' }}">
                    Все статьи
                </a>
                <a href="{{route('articles.index', ['type' => 'Хранение'])}}"
                   class="btn {{ request('type') == 'Хранение' ? 'btn-success' : 'btn-outline-success' }}">
                    Хранение
                </a>
                <a href="{{route('articles.index', ['type' => 'Разогрев'])}}"
                   class="btn {{ request('type') == 'Разогрев' ? 'btn-success' : 'btn-outline-success' }}">
                    Разогрев
                </a>
                <a href="{{route('articles.index', ['type' => 'Заморозка'])}}"
                   class="btn {{ request('type') == 'Заморозка' ? 'btn-success' : 'btn-outline-success' }}">
                    Заморозка
                </a>
                <a href="{{route('articles.index', ['type' => 'Советы'])}}"
                   class="btn {{ request('type') == 'Советы' ? 'btn-success' : 'btn-outline-success' }}">
                    Советы
                </a>
            </div>
        </div>
    </div>
    <div class="mt-3 mb-3"style="flex-direction: row;display: flex;justify-content: space-between;">
        @auth
            @php
                $isSubscribed = \App\Models\Subscriber::where('email', auth()->user()->email)->exists();
            @endphp
                <form action="{{ $isSubscribed ? route('unsubscribe') : route('subscribe') }}" method="POST">
                    @csrf
                    <button type="submit" class="btn btn-{{ $isSubscribed ? 'danger' : 'primary' }}">
                        {{ $isSubscribed ? 'Отписаться от рассылки' : 'Подписаться на рассылку' }}
                    </button>
                </form>
        @endauth
        {{$articles->withQueryString()->links()}}
    </div>
    <!-- Статья -->
    <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4">
        @foreach($articles as $item)
            <div class="col">
                <div class="card h-100 border-0 shadow-sm bg-success bg-opacity-10 position-relative">
                    <!-- Добавлено position-relative -->
                    <!-- Бейдж, который вылезает поверх карточки -->
                    <span class="badge bg-success position-absolute"
                          style="top: 10px; right: 15px; z-index: 1; padding: 5px 10px; font-size: 0.75rem;">
                        {{ $item->type }}
                    </span>

                    <div class="ratio ratio-16x9">
                        <img src="{{ asset('storage/news/'.$item->image) }}"
                             class="card-img-top object-fit-cover"
                             alt="{{ $item->title }}"
                             style="border-top-left-radius: .5rem; border-top-right-radius: .5rem;">
                    </div>

                    <div class="card-body d-flex flex-column">
                        <h5 class="card-title text-dark fw-bold">{{ $item->title }}</h5>
                        <p class="card-text text-muted mb-3 flex-grow-1">{{ Str::limit($item->description, 120) }}</p>

                        <div class="d-flex justify-content-between align-items-center mt-auto">
                            <small class="text-success fw-semibold">
                                <i class="far fa-clock me-1"></i>{{ $item->time }}
                            </small>
                            <a href="{{ route('articles.show', $item->id) }}"
                               class="btn btn-success btn-sm px-3 py-1">
                                Читать <i class="fas fa-arrow-right ms-1"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
    <div class="d-grid justify-content-end mt-3 mb-3">
        {{$articles->withQueryString()->links()}}
    </div>
</div>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
@endsection
