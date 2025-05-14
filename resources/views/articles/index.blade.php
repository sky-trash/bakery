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

        .hero-section {
            background: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url('https://images.unsplash.com/photo-1608190003443-86a72638d7c3?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80');
            background-size: cover;
            background-position: center;
            color: white;
            padding: 100px 0;
            margin-bottom: 40px;
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
                    <a href="#" class="btn btn-primary">Все статьи</a>
                    <a href="#" class="btn btn-outline-primary">Хранение</a>
                    <a href="#" class="btn btn-outline-primary">Разогрев</a>
                    <a href="#" class="btn btn-outline-primary">Заморозка</a>
                    <a href="#" class="btn btn-outline-primary">Советы</a>
                </div>
            </div>
        </div>

        <!-- Статьи -->
        <div class="row g-4">
            <!-- Статья 1 -->
            @foreach($news as $item)
            <div class="col-md-6 col-lg-4">
                <div class="card article-card">
                    <span class="badge bg-success category-badge">{{ &item->type }}</span>
                    <img src="{{ asset('storage/news/'. $item->image) }}" class="card-img-top" alt="Хлеб в упаковке">
                    <div class="card-body">
                        <h5 class="card-title">{{ &item->title }}</h5>
                        <p class="card-text">{{ &item->description }}</p>
                        <div class="d-flex justify-content-between align-items-center">
                            <small class="text-muted"><i class="far fa-clock me-1"></i>{{ &item->time }}</small>
                            <a href="#" class="btn btn-sm btn-outline-primary">Читать</a>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach

            <!-- Статья 2
            <div class="col-md-6 col-lg-4">
                <div class="card article-card">
                    <span class="badge bg-warning text-dark category-badge">Разогрев</span>
                    <img src="https://images.unsplash.com/photo-1608190003443-86a72638d7c3?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80" class="card-img-top" alt="Разогрев хлеба">
                    <div class="card-body">
                        <h5 class="card-title">5 способов восстановить свежесть хлеба</h5>
                        <p class="card-text">Как вернуть хлебу свежесть после хранения. Методы разогрева в духовке, микроволновке и другие лайфхаки.</p>
                        <div class="d-flex justify-content-between align-items-center">
                            <small class="text-muted"><i class="far fa-clock me-1"></i>7 мин чтения</small>
                            <a href="#" class="btn btn-sm btn-outline-primary">Читать</a>
                        </div>
                    </div>
                </div>
            </div>

            Статья 3
            <div class="col-md-6 col-lg-4">
                <div class="card article-card">
                    <span class="badge bg-info category-badge">Заморозка</span>
                    <img src="https://images.unsplash.com/photo-1608198093002-ad4e005484ec?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80" class="card-img-top" alt="Заморозка хлеба">
                    <div class="card-body">
                        <h5 class="card-title">Замораживание выпечки: полное руководство</h5>
                        <p class="card-text">Как правильно замораживать хлеб, булочки и пироги, чтобы сохранить их вкус и текстуру после разморозки.</p>
                        <div class="d-flex justify-content-between align-items-center">
                            <small class="text-muted"><i class="far fa-clock me-1"></i>8 мин чтения</small>
                            <a href="#" class="btn btn-sm btn-outline-primary">Читать</a>
                        </div>
                    </div>
                </div>
            </div>

            Статья 4
            <div class="col-md-6 col-lg-4">
                <div class="card article-card">
                    <span class="badge bg-secondary category-badge">Советы</span>
                    <img src="https://images.unsplash.com/photo-1546069901-ba9599a7e63c?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80" class="card-img-top" alt="Использование черствого хлеба">
                    <div class="card-body">
                        <h5 class="card-title">10 способов использовать черствый хлеб</h5>
                        <p class="card-text">Не выбрасывайте черствый хлеб! Идеи для приготовления гренок, панировки, пудингов и других блюд.</p>
                        <div class="d-flex justify-content-between align-items-center">
                            <small class="text-muted"><i class="far fa-clock me-1"></i>6 мин чтения</small>
                            <a href="#" class="btn btn-sm btn-outline-primary">Читать</a>
                        </div>
                    </div>
                </div>
            </div>

            Статья 5
            <div class="col-md-6 col-lg-4">
                <div class="card article-card">
                    <span class="badge bg-success category-badge">Хранение</span>
                    <img src="https://images.unsplash.com/photo-1608190003443-86a72638d7c3?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80" class="card-img-top" alt="Хранение тортов">
                    <div class="card-body">
                        <h5 class="card-title">Как хранить торты и пирожные</h5>
                        <p class="card-text">Особенности хранения различных видов тортов: бисквитных, песочных, с кремом и безе.</p>
                        <div class="d-flex justify-content-between align-items-center">
                            <small class="text-muted"><i class="far fa-clock me-1"></i>9 мин чтения</small>
                            <a href="#" class="btn btn-sm btn-outline-primary">Читать</a>
                        </div>
                    </div>
                </div>
            </div>

            Статья 6
            <div class="col-md-6 col-lg-4">
                <div class="card article-card">
                    <span class="badge bg-warning text-dark category-badge">Разогрев</span>
                    <img src="https://images.unsplash.com/photo-1509440159596-0249088772ff?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80" class="card-img-top" alt="Разогрев пирогов">
                    <div class="card-body">
                        <h5 class="card-title">Как правильно разогревать пироги</h5>
                        <p class="card-text">Методы разогрева различных видов пирогов, чтобы сохранить хрустящую корочку и сочную начинку.</p>
                        <div class="d-flex justify-content-between align-items-center">
                            <small class="text-muted"><i class="far fa-clock me-1"></i>5 мин чтения</small>
                            <a href="#" class="btn btn-sm btn-outline-primary">Читать</a>
                        </div>
                    </div>
                </div>
            </div> -->
        </div>

        <!-- Пагинация -->
        <nav class="mt-5">
            <ul class="pagination justify-content-center">
                <li class="page-item disabled">
                    <a class="page-link" href="#" tabindex="-1">Назад</a>
                </li>
                <li class="page-item active"><a class="page-link" href="#">1</a></li>
                <li class="page-item"><a class="page-link" href="#">2</a></li>
                <li class="page-item"><a class="page-link" href="#">3</a></li>
                <li class="page-item">
                    <a class="page-link" href="#">Вперед</a>
                </li>
            </ul>
        </nav>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
@endsection
