@extends('layouts.main')
@section('content')
    <div class="mt-5 color-green">
        {{--        первый блок--}}
        <div class="d-flex justify-content-around align-items-center flex-wrap"
        >
            <div class="text-center-sm">
                <h1 class="fw-bold display-4">
                    Вкус!
                </h1>
                <p class="">Самая вкусная выпечка в городе ждет вас!</p>
                <button
                    type="button"
                    class="btn rounded-pill fs-5 pt-2 pb-2  ps-4 pe-4 mb-3 button-background-green">
                    Заказ
                </button>
            </div>
            <div>
                <img style="max-width: 300px;
                max-height: 300px;
                width: 100%;
                height: 100%;

                 "
                     class="img-fluid object-fit-cover rounded-circle"
                     src="{{asset('storage/index-one.jpg')}}" alt="">
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
                    <div class="carousel-indicators">
                        <button type="button" data-bs-target="#carouselExampleSlidesOnly" data-bs-slide-to="0"
                                class="active"
                                aria-current="true" aria-label="Slide 1">
                        </button>
                        <button type="button" data-bs-target="#carouselExampleSlidesOnly" data-bs-slide-to="1"
                                aria-label="Slide 2"></button>
                        <button type="button" data-bs-target="#carouselExampleSlidesOnly" data-bs-slide-to="2"
                                aria-label="Slide 3"></button>
                        <button type="button" data-bs-target="#carouselExampleSlidesOnly" data-bs-slide-to="3"
                                aria-label="Slide 4"></button>

                    </div>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <div class="opacity_black d-flex align-items-center justify-content-center"
                            >

                                <div class="d-flex align-items-center justify-content-center"
                                     style="width: 100%; height: 100%;">
                                    <img src="{{ asset('storage/index-one.jpeg') }}"
                                         class="img-fluid "
                                         alt="...">
                                </div>

                                <div class="carousel-caption text-center" style="color: #fff;">
                                    <h5>Сочный сок</h5>
                                    <p>Новый вид булочки (сосиска)</p>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="opacity_black d-flex align-items-center justify-content-center"
                            >

                                <div class="d-flex align-items-center justify-content-center"
                                     style="width: 100%; height: 100%;">
                                    <img src="{{ asset('storage/index-one.jpg') }}"
                                         class="img-fluid"
                                         alt="...">
                                </div>

                                <div class="carousel-caption text-center" style="color: #fff;">
                                    <h5>Сочный сок</h5>
                                    <p>Новый вид булочки (сосиска)</p>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="opacity_black d-flex align-items-center justify-content-center"
                            >

                                <div class="d-flex align-items-center justify-content-center"
                                     style="width: 100%; height: 100%;">
                                    <img src="{{ asset('storage/img.png') }}"
                                         class="img-fluid"
                                         alt="...">
                                </div>

                                <div class="carousel-caption text-center" style="color: #fff;">
                                    <h5>Сочный сок</h5>
                                    <p>Новый вид булочки (сосиска)</p>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="opacity_black d-flex align-items-center justify-content-center"
                                 style="">

                                <div class="d-flex align-items-center justify-content-center"
                                     style="width: 100%; height: 100%;">
                                    <img src="{{ asset('storage/index_test_2.png') }}"
                                         class="img-fluid"
                                         alt="...">
                                </div>

                                <div class="carousel-caption text-center" style="color: #fff;">
                                    <h5>Сочный сок</h5>
                                    <p>Новый вид булочки (сосиска)</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleSlidesOnly"
                            data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleSlidesOnly"
                            data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
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
                <div class="card background-green-card d-flex flex-column p-1" style="width: 18rem;">
                    <div style="height: 200px; overflow: hidden;">
                        <img src="{{ asset('storage/index_test_2.png') }}"
                             class="img-fluid w-100 h-100 rounded-top"
                             style="object-fit: cover;" alt="...">
                    </div>
                    <div class="card-body card-index text-white d-flex flex-column">
                        <p class="card-text mt-1 mb-2">Действует до: 27.02.2006</p>
                        <h5 class="card-title">Общие показатели</h5>
                        <p class="card-text ">Мы добавили новые виды еды, они хорошо сказались на продаже и повысили наш
                            бюджет</p>
                    </div>
                </div>

                <div class="card background-green-card d-flex flex-column p-1" style="width: 18rem;">
                    <div style="height: 200px; overflow: hidden;">
                        <img src="{{ asset('storage/index_test.png') }}"
                             class="img-fluid w-100 h-100 rounded-top"
                             style="object-fit: cover;" alt="...">
                    </div>
                    <div class="card-body card-index text-white d-flex flex-column">
                        <p class="card-text mt-1 mb-2">Действует до: 27.02.2006</p>
                        <h5 class="card-title">Общие показатели</h5>
                        <p class="card-text">Мы добавили новые виды еды, они хорошо сказались на продаже и повысили наш
                            бюджет</p>
                    </div>
                </div>

                <div class="card background-green-card d-flex flex-column p-1" style="width: 18rem;">
                    <div style="height: 200px; overflow: hidden;">
                        <img src="{{ asset('storage/index-one.jpg') }}"
                             class="img-fluid w-100 h-100 rounded-top"
                             style="object-fit: cover;" alt="...">
                    </div>
                    <div class="card-body card-index text-white d-flex flex-column">
                        <p class="card-text mt-1 mb-2">Действует до: 27.02.2006</p>
                        <h5 class="card-title">Общие показатели</h5>
                        <p class="card-text">Мы добавили новые виды еды, они хорошо сказались на продаже и повысили наш
                            бюджет</p>
                    </div>
                </div>

                <div class="card background-green-card d-flex flex-column p-1" style="width: 18rem;">
                    <div style="height: 200px; overflow: hidden;">
                        <img src="{{ asset('storage/img.png') }}"
                             class="img-fluid w-100 h-100 rounded-top"
                             style="object-fit: cover;" alt="...">м
                    </div>
                    <div class="card-body card-index text-white d-flex flex-column" style="">
                        <p class="card-text mt-1 mb-2">Действует до: 27.02.2006</p>
                        <h5 class="card-title">Общие показатели</h5>
                        <p class="card-text">Мы добМы добавили новые виды едыМы добавили новые виды едыМы добавили новые
                            видМы добМы добавили новые виды едыМы добавили новые виды едыМы добавили новые видМы добМы
                            добавили новые виды едыМы добавили новые виды едыМы добавили новые видМы добМы добавили
                            новые виды едыМы добавили новые виды едыМы добавили новые видМы добМы добавили новые виды
                        </p>
                    </div>
                </div>
            </div>
        </div>

        {{--        четвертый блок--}}

        <div class="mt-5 ">
            <div class="text-center">
                <h2 class="fw-bold d-flex justify-content-center "
                >
                    АКЦИИ
                </h2>
                <p style="max-width: 400px; margin: 0 auto;" class="fs-3 fw-normal">
                    АКЦИИ И СКИДКИ
                </p>
            </div>

            <div class="d-flex align-content-start justify-content-center flex-wrap gap-3 align-items-stretch">
                <div class="card background-green-card d-flex flex-column p-1" style="width: 18rem;">
                    <div style="height: 200px; overflow: hidden;">
                        <img src="{{ asset('storage/index_test_2.png') }}"
                             class="img-fluid w-100 h-100 rounded-top"
                             style="object-fit: cover;" alt="...">
                    </div>
                    <div class="card-body card-index text-white d-flex flex-column">
                        <p class="card-text mt-1 mb-2">Действует до:
                            27.02.2006</p>
                        <h5 class="card-title">Общие показатели</h5>
                        <p class="card-text ">На все чебуреки скидка 50%</p>
                    </div>
                </div>

                <div class="card background-green-card d-flex flex-column p-1" style="width: 18rem;">
                    <div style="height: 200px; overflow: hidden;">
                        <img src="{{ asset('storage/index_test.png') }}"
                             class="img-fluid w-100 h-100 rounded-top"
                             style="object-fit: cover;" alt="...">
                    </div>
                    <div class="card-body card-index text-white d-flex flex-column">
                        <p class="card-text mt-1 mb-2">Действует до:
                            27.02.2006</p>
                        <h5 class="card-title">Купи 5 бутербродов</h5>
                        <p class="card-text">При покупке пяти бедрбродов, действует акция, пачка сигарет в подарок</p>
                    </div>
                </div>

                <div class="card background-green-card d-flex flex-column p-1" style="width: 18rem;">
                    <div style="height: 200px; overflow: hidden;">
                        <img src="{{ asset('storage/index-one.jpg') }}"
                             class="img-fluid w-100 h-100 rounded-top"
                             style="object-fit: cover;" alt="...">
                    </div>
                    <div class="card-body card-index text-white d-flex flex-column">
                        <p class="card-text mt-1 mb-2">Действует до:
                            27.02.2006</p>
                        <h5 class="card-title">До конца недлели</h5>
                        <p class="card-text">До конца недели действует акция, купи 100 чебурек и один в подарок</p>
                    </div>
                </div>

                <div class="card background-green-card d-flex flex-column p-1" style="width: 18rem;">
                    <div style="height: 200px; overflow: hidden;">
                        <img src="{{ asset('storage/img.png') }}"
                             class="img-fluid w-100 h-100 rounded-top"
                             style="object-fit: cover;" alt="...">м
                    </div>
                    <div class="card-body card-index text-white d-flex flex-column" style="">
                        <p class="card-text mt-1 mb-2">Действует до: 27.02.2006</p>
                        <h5 class="card-title">Скидка 100р</h5>
                        <p class="card-text">Скидка на товар {йфуцйцуйца}, и все до завтра

                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

<style>
</style>
