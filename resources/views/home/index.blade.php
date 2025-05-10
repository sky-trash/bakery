<style>
    .opacity_black {
        position: relative;
        display: block;
        overflow: hidden;
    }

    .opacity_black::before {
        content: "";
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background-color: rgba(0, 0, 0, 0.6);
        z-index: 1;
    }

    .opacity_black .carousel-caption {
        position: absolute;
        z-index: 2;
        bottom: 10px;
        left: 50%;
        transform: translateX(-50%);
        text-align: center;
        width: 100%;
        pointer-events: none;
    }

    @media (max-width: 768px) {
        .text-center-sm {
            text-align: center;
        }
    }
</style>
@extends('layout.main')
@section('content')
    <div class="mt-5" style="color: #313802;">
        {{--        <h2  class="fw-bold d-flex justify-content-center" style="color: #313802;">АКТУЛЬНЫЕ ПРЕДЛОЖЕНИЯ</h2>--}}

        <div class="d-flex justify-content-around align-items-center flex-wrap"
        >
            <div class="text-center-sm">
                <h1 class="fw-bold display-4">
                    Вкус!
                </h1>
                <p class="">Самая вкусная выпечка в городе ждет вас!</p>
                <button type="button" class="btn rounded-pill fs-5 pt-2 pb-2  ps-4 pe-4 mb-3"
                        style="background: #d4e09b;">Заказ
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
        <div class="mt-5 ">
            <div class="text-center">
                <h2 class="fw-bold d-flex justify-content-center "
                >
                    АКТУЛЬНЫЕ ПРЕДЛОЖЕНИЯ


                </h2>
                <p style="max-width: 400px; margin: 0 auto;" class="fs-3 fw-normal"> Появились новые хлебобулочные
                    изделия</p>
            </div>
            <div id="carouselExampleSlidesOnly" class="carousel slide mt-3" data-bs-ride="carousel">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselExampleSlidesOnly" data-bs-slide-to="0" class="active"
                            aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselExampleSlidesOnly" data-bs-slide-to="1"
                            aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#carouselExampleSlidesOnly" data-bs-slide-to="2"
                            aria-label="Slide 3"></button>
                </div>
                <div class="carousel-inner ">
                    <div class="carousel-item active">
                        <div class="opacity_black"
                             style="max-width: 500px; width: 100%; max-height: 350px; margin: 0 auto;">
                            <img src="{{asset('storage/index-one.jpg')}}" class="d-block w-100 h-auto" alt="...">
                            <div class="carousel-caption" style="color: #fff;">
                                <h5>Булка рил имба</h5>
                                <p>ССосиска самый раз</p>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="opacity_black"
                             style="max-width: 500px; width: 100%; max-height: 350px; margin: 0 auto;">
                            <img src="{{asset('storage/index-one.jpg')}}" class="d-block w-100 h-auto" alt="...">
                            <div class="carousel-caption" style="color: #fff;">
                                <h5>Четкая булочка</h5>
                                <p>Капитан вкусно (сок имьа)</p>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="opacity_black"
                             style="max-width: 500px; width: 100%; max-height: 350px; margin: 0 auto;">
                            <img src="{{asset('storage/index-one.jpg')}}" class="d-block w-100 h-auto" alt="...">
                            <div class="carousel-caption" style="color: #fff;">
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
@endsection
