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
        .contact-info-card {
            transition: transform 0.3s;
        }

        .contact-info-card:hover {
            transform: translateY(-5px);
        }

        .map-container {
            height: 400px;
            border-radius: 8px;
            overflow: hidden;
        }

        .contact-card {
            transition: all 0.3s ease;
            border-radius: 15px;
        }

        .contact-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 20px 30px rgba(0, 0, 0, 0.15);
        }

        .social-icons a i {
            transition: all 0.3s ease;
        }

        .social-icons a:hover i {
            transform: scale(1.2);
        }

        .card-title i {
            font-size: 2.5rem;
        }
    </style>
</head>

<body>
    <!-- Основной контент -->
    <div class="container my-5">
        <h1 class="text-center mb-5 display-4">Контакты</h1>

        <div class="row justify-content-center">
            <!-- Контактная информация - увеличенный блок -->
            <div class="col-lg-8">
                <div class="card contact-card h-100 border-0 shadow-lg">
                    <div class="card-body p-5">
                        <h2 class="card-title text-center mb-4 display-5">
                            <i class="fas fa-info-circle text-primary me-3"></i>Контактная информация
                        </h2>
                        <hr class="my-4">
                        <ul class="list-unstyled fs-4">
                            <li class="mb-4 py-3 px-4 bg-light rounded">
                                <i class="fas fa-map-marker-alt text-danger me-3 fa-lg"></i>
                                <strong class="d-block mb-1">Адрес:</strong>
                                <span class="fs-3">{{$contact->adres}}</span>
                            </li>
                            <li class="mb-4 py-3 px-4 bg-light rounded">
                                <i class="fas fa-phone text-success me-3 fa-lg"></i>
                                <strong class="d-block mb-1">Телефон:</strong>
                                <span class="fs-3">{{$contact->adres}}</span>
                            </li>
                            <li class="mb-4 py-3 px-4 bg-light rounded">
                                <i class="fas fa-envelope text-info me-3 fa-lg"></i>
                                <strong class="d-block mb-1">Email:</strong>
                                <span class="fs-3">{{$contact->email}}</span>
                            </li>
                            <li class="mb-4 py-3 px-4 bg-light rounded">
                                <i class="fas fa-clock text-warning me-3 fa-lg"></i>
                                <strong class="d-block mb-1">Часы работы:</strong>
                                <span class="fs-3">Пн-Пт: 10:00 - 20:00<br>Сб: 11:00 - 18:00</span>
                            </li>
                        </ul>
                        <div class="social-icons text-center mt-5">
                            <h3 class="mb-4">Мы в социальных сетях</h3>
                            <a href="https://vk.com/feed" class="text-decoration-none mx-3"><i class="fab fa-vk fa-3x text-primary"></i></a>
                            <a href="https://web.telegram.org" class="text-decoration-none mx-3"><i class="fab fa-telegram fa-3x text-info"></i></a>
                            <a href="https://www.whatsapp.com" class="text-decoration-none mx-3"><i class="fab fa-whatsapp fa-3x text-success"></i></a>
                            <a href="https://www.youtube.com" class="text-decoration-none mx-3"><i class="fab fa-youtube fa-3x text-danger"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Карта -->
    <div class="row mt-5">
        <div class="col-12">
            <h2 class="text-center mb-4">Мы на карте</h2>
            <div class="map-container shadow-sm">
                <!-- Вставьте код карты (Google Maps, Yandex Maps и т.д.) -->
                <iframe src="https://yandex.ru/map-widget/v1/?um=constructor%3A1234567890abcdef&amp;source=constructor"
                    width="100%" height="100%" frameborder="0"></iframe>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
@endsection
