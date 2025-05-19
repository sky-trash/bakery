<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite(["resources/css/home/index.css"])
    @vite(["resources/css/basket/index.css"])
    @vite(["resources/sass/app.scss", "resources/js/app.js"])
    @vite(["resources/css/generalStyles.css"])

    <title>Document</title>
</head>
<body >
<div class="container">
    <nav class="navbar navbar-expand-lg text-white background-green">
        <div class="container-fluid ">
            <a class="navbar-brand text-white fw-bold" href="{{route('home.index')}}">ХЛЕБКА</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active text-white" aria-current="page"
                           href="{{route('home.index')}}">Главная</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active text-white" aria-current="page" href="{{route('about.index')}}">О
                            нас</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active text-white" aria-current="page" href="{{route('catalogs.index')}}">Каталог</a>
                    </li>
                    @auth()
                    <li class="nav-item">
                        <a class="nav-link active text-white" aria-current="page"
                           href="{{route('basket.index')}}">Корзина</a>
                    </li>
                    @endauth
                    <li class="nav-item">
                        <a class="nav-link active text-white" aria-current="page" href="{{route('contact.index')}}">Контакты</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active text-white" aria-current="page" href="{{route('articles.index')}}">Полезные
                            статьи</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active text-white" aria-current="page" href="{{route('reviews.index')}}">Отзывы</a>
                    </li>


                    @can('view-admin', auth()->user())
                        <li class="nav-item">
                            <a class="nav-link active text-white" aria-current="page" href="{{route('admin.user.index')}}">Админ
                                панель</a>
                        </li>
                    @endcan

                    @auth()
                        <li class="nav-item">
                            <a class="nav-link active text-white" aria-current="page"
                               href="{{route('cabinet.index')}}">Кабинет</a>
                        </li>

                        <li class="nav-item">

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="p-0 m-0">
                                @csrf

                                <button class=" nav-link active text-white">Выход</button>
                            </form>
                        </li>
                    @endauth

                    @guest()
                        <li class="nav-item">
                            <a class="nav-link active text-white" aria-current="page" href="{{route('login')}}">Вход</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active text-white" aria-current="page" href="{{route('register')}}">Регистрация</a>
                        </li>
                    @endguest

                </ul>
            </div>
        </div>
    </nav>
    <div style="background: #e8edd5; height: auto;" class=" pb-5">
        <div class="p-2" >
            @yield('content')
        </div>
    </div>
</div>
</body>
</html>


