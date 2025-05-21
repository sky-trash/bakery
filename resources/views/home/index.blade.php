@extends('layouts.main')
@section('content')
    <div class="mt-5 mb-10 color-green">
        {{--        первый блок--}}
        <div class="d-flex justify-content-around align-items-center flex-wrap"
        >
            <div class="text-center-sm">
                <h1 class="fw-bold display-4">
                    Вкус!
                </h1>
                <p class="">Самая вкусная выпечка в городе ждет вас!</p>
                <a href="{{ route('catalogs.index')}}"
                   type="button"
                   class="btn rounded-pill fs-5 pt-2 pb-2  ps-4 pe-4 mb-3 button-background-green">
                    Заказ
                </a>
            </div>
            <div>
                <img style="max-width: 300px;
                max-height: 300px;
                width: 100%;
                height: 100%;

                 "
                     class="img-fluid object-fit-cover rounded-circle"
                     src="{{asset('storage/promotions/test-4.jpg')}}" alt="">
            </div>
        </div>

        {{--        второй блок--}}
        <div class="mt-5 ">
            <div class="text-center">
                <h2 class="fw-bold d-flex justify-content-center "
                >
                    АКТУЛЬНЫЕ ПРЕДЛОЖЕНИЯ


                </h2>
                <p style="max-width: 400px; margin: 0 auto;" class="fs-3 fw-normal"> Появились новые хлебобулочные
                    изделия</p>
            </div>
            <div style="height: 350px;">
                <div id="carouselExampleSlidesOnly" class="carousel slide mt-3" data-bs-ride="carousel">
                    {{--                    <div class="carousel-indicators">--}}
                    {{--                        <button type="button" data-bs-target="#carouselExampleSlidesOnly" data-bs-slide-to="0"--}}
                    {{--                                class="active"--}}
                    {{--                                aria-current="true" aria-label="Slide 1">--}}
                    {{--                        </button>--}}
                    {{--                        <button type="button" data-bs-target="#carouselExampleSlidesOnly" data-bs-slide-to="1"--}}
                    {{--                                aria-label="Slide 2"></button>--}}
                    {{--                        <button type="button" data-bs-target="#carouselExampleSlidesOnly" data-bs-slide-to="2"--}}
                    {{--                                aria-label="Slide 3"></button>--}}
                    {{--                        <button type="button" data-bs-target="#carouselExampleSlidesOnly" data-bs-slide-to="3"--}}
                    {{--                                aria-label="Slide 4"></button>--}}

                    {{--                    </div>--}}
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <div class="opacity_black d-flex align-items-center justify-content-center"
                            >

                                <div class="d-flex align-items-center justify-content-center"
                                     style="width: 100%; height: 100%;">
                                    <img src="{{ asset('storage/news/test-1.jpeg') }}"
                                         class="img-fluid "
                                         alt="...">
                                </div>

                                <div class="carousel-caption text-center p-3" style="color: #fff;">
                                    <h5>Появилась новая булка "Сосика в чебуреке"</h5>
                                    <p>Lorem Ipsum - это текст-"рыба", часто используемый в печати и вэб-дизайне. Lorem
                                        Ipsum является стандартной "рыбой" для текстов на латинице с начала XVI века. В
                                        то время некий безымянный печатник создал большую коллекцию размеров и форм
                                        шрифтов, используя Lorem Ipsum для распечатки образцов.</p>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="opacity_black d-flex align-items-center justify-content-center"
                            >

                                <div class="d-flex align-items-center justify-content-center"
                                     style="width: 100%; height: 100%;">
                                    <img src="{{ asset('storage/news/test-2.jpeg') }}"
                                         class="img-fluid"
                                         alt="...">
                                </div>

                                <div class="carousel-caption text-center p-3" style="color: #fff;">
                                    <h5>Нашей компании исполнился один день УРААА!!!!!</h5>
                                    <p>Давно выяснено, что при оценке дизайна и композиции читаемый текст мешает
                                        сосредоточиться. Lorem Ipsum используют потому, что тот обеспечивает более или
                                        менее стандартное заполнение шаблона, а</p>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="opacity_black d-flex align-items-center justify-content-center"
                            >

                                <div class="d-flex align-items-center justify-content-center"
                                     style="width: 100%; height: 100%;">
                                    <img src="{{ asset('storage/news/test-3.jpeg') }}"
                                         class="img-fluid"
                                         alt="...">
                                </div>

                                <div class="carousel-caption text-center p-3" style="color: #fff;">
                                    <h5>В мире выяснили что наши перепечи самые вкусные</h5>
                                    <p>Есть много вариантов Lorem Ipsum, но большинство из них имеет не всегда
                                        приемлемые модификации, например, юмористические вставки или слова, которые даже
                                        отдалённо не напоминают латынь.</p>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="opacity_black d-flex align-items-center justify-content-center"
                                 style="">

                                <div class="d-flex align-items-center justify-content-center"
                                     style="width: 100%; height: 100%;">
                                    <img src="{{ asset('storage/news/test-4.jpeg') }}"
                                         class="img-fluid"
                                         alt="...">
                                </div>

                                <div class="carousel-caption text-center p-3" style="color: #fff;">
                                    <h5>У нас в наличии новая крупа "Сигаретки марно"</h5>
                                    <p>Многие думают, что Lorem Ipsum - взятый с потолка псевдо-латинский набор слов, но
                                        это не совсем так. Его корни уходят в один фрагмент классической латыни 45 года
                                        н.э., то есть более двух тысячелетий назад</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    {{--                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleSlidesOnly"--}}
                    {{--                            data-bs-slide="prev">--}}
                    {{--                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>--}}
                    {{--                        <span class="visually-hidden">Previous</span>--}}
                    {{--                    </button>--}}
                    {{--                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleSlidesOnly"--}}
                    {{--                            data-bs-slide="next">--}}
                    {{--                        <span class="carousel-control-next-icon" aria-hidden="true"></span>--}}
                    {{--                        <span class="visually-hidden">Next</span>--}}
                    {{--                    </button>--}}
                </div>
            </div>
        </div>

        {{--        трей блок--}}
        <div class="mt-5 ">
            <div class="text-center">
                <h2 class="fw-bold d-flex justify-content-center "
                >
                    НОВОСТИ


                </h2>
                <p style="max-width: 400px; margin: 0 auto;" class="fs-3 fw-normal">
                    Актуальные новости
                </p>
            </div>


            <div class="d-flex align-content-start justify-content-center flex-wrap gap-3 align-items-stretch">
                @foreach($news as $item)
                    <div class="card background-green-card d-flex flex-column p-1" style="width: 18rem;">
                        <div style="height: 200px; overflow: hidden;">
                            <img src="{{ asset('storage/news/'. $item->image) }}"
                                 class="img-fluid w-100 h-100 rounded-top"
                                 style="object-fit: cover;" alt="...">
                        </div>
                        <div class="card-body card-index text-white d-flex flex-column">
                            <p class="card-text mt-1 mb-2">
                                Добавлена: {{ \Carbon\Carbon::parse($item->date)->format('d.m.Y') }}
                            </p>
                            <h5 class="card-title">{{$item->title}}</h5>
                            <p class="card-text ">{{$item->description}}</p>
                        </div>
                    </div>
                @endforeach
            </div>
            <div class="d-grid justify-content-center mt-3 mb-3">
                {{$news->withQueryString()->links()}}
            </div>
        </div>

        {{--        четвертый блок--}}
        <div class="mt-5 ">
        <div style="display: flex; justify-content: center; align-items: center; position: relative;">
                <div style="text-align: center;">
                    <h2 class="fw-bold">АКЦИИ</h2>
                    <p style="max-width: 400px; margin: 0 auto;" class="fs-3 fw-normal">
                        АКЦИИ И СКИДКИ
                    </p>
                </div>

                @auth
                    <form action="{{ route('subscribe') }}" method="POST" style="position: absolute; right: 0;">
                        @csrf
                        <button type="submit" class="btn btn-primary">Подписаться на рассылку</button>
                    </form>
                @endauth
            </div>

            <div class="d-flex align-content-start justify-content-center flex-wrap gap-3 align-items-stretch">
                @foreach($promotion as $item)
                    <div class="card background-green-card d-flex flex-column p-1" style="width: 18rem;">
                        <div style="height: 200px; overflow: hidden;">
                            <img src="{{ asset('storage/promotions/'. $item->image) }}"
                                 class="img-fluid w-100 h-100 rounded-top"
                                 style="object-fit: cover;" alt="...">
                        </div>
                        <div class="card-body card-index text-white d-flex flex-column">
                            <p class="card-text mt-1 mb-2">Действует до:
                                {{\Carbon\Carbon::parse($item->date)->format('d.m.Y')}}
                            </p>
                            <h5 class="card-title">{{$item->title}}</h5>
                            <p class="card-text ">{{$item->description}}</p>
                        </div>
                    </div>
                @endforeach

            </div>
            <div class="d-grid justify-content-center mt-3 mb-3">
                {{$promotion->withQueryString()->links()}}
            </div>
        </div>
    </div>
@endsection

<style>
</style>
