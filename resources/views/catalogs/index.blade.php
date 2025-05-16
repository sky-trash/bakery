@extends('layouts.main')
@section('content')
    <div>
        @if(session('error'))
            <div class="alert alert-danger alert-dismissible fade show ms-5 me-2" role="alert">
                {{ session('error') }}
                <a href="{{session('telegram_link')}}">{{session('telegram_text')}}</a>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif
    </div>
    <div class="mt-5 mb-10 color-green">


        <div class="mt-5 ">
            <div class="text-center">
                <h2 class="fw-bold d-flex justify-content-center mb-3"
                >
                    КАТАЛОГ ОТВАРОВ
                </h2>

            </div>

            <div class="mt-5 mb-5">
                <button type="button" class=" border-0 btn btn-success background-green text-white ms-2"
                        data-bs-toggle="modal"
                        data-bs-target="#staticBackdrop">
                    Фильтры
                </button>

                <!-- Modal -->
                <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false"
                     tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5" id="staticBackdropLabel">Фильтры</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                            </div>
                            <form action="{{route('catalogs.index')}}" method="get">
                                <div class="modal-body">
                                    <div class="mb-3 w-50">
                                        <label for="type" class="form-label">Тип</label>
                                        <select class="form-select" name="type" aria-label="Default select example">
                                            <option value="">Выберите тип</option>
                                            <option value="Булки" @selected(request('type') == 'Булки')>Булки</option>
                                            <option value="Сладости" @selected(request('type') == 'Сладости')>Сладости
                                            </option>
                                            <option value="Мясные" @selected(request('type') == 'Мясные')>Мясные
                                            </option>
                                        </select>
                                    </div>
                                    <div class="mb-3 w-50">
                                        <label for="price" class="form-label">Цена</label>
                                        <select class="form-select" name="price" aria-label="Default select example">
                                            <option value="">Выберите цену от</option>
                                            <option value="0-100" @selected(request('price') == '0-100')>0 - 100
                                            </option>
                                            <option value="100-1000" @selected(request('price') == '100-1000')>100 - 1
                                                000
                                            </option>
                                            <option value="1000-10000" @selected(request('price') == '1000-10000')>1 000
                                                - 10 000
                                            </option>
                                            <option value="10000-100000" @selected(request('price') == '10000-100000')>
                                                10 000 - 100 000
                                            </option>
                                        </select>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Отменить
                                    </button>
                                    <a href="{{route('catalogs.index')}}" class="btn btn-secondary">Сбросить
                                    </a>
                                    <button type="submit" class="btn btn-primary">Сохранить</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

            </div>
            <div class="d-grid justify-content-end mt-3 mb-3">
                {{$catalogs->withQueryString()->links()}}
            </div>
            <div class="d-flex align-content-start justify-content-center flex-wrap gap-3 align-items-stretch">

                @foreach($catalogs as $item)
                    <div class="card background-green-card d-flex flex-column p-1"
                         style="width: 18rem;">
                        <div style="height: 200px; overflow: hidden;">
                            <img src="{{ asset('storage/news/' . $item->image) }}"
                                 class="img-fluid w-100 h-100 rounded-top"
                                 style="object-fit: cover;" alt="...">
                        </div>
                        <div class="card-body card-index text-white d-flex flex-column">
                            <p class="card-text ">Тип: {{$item->type}}</p>

                            <h5 class="card-title">{{$item->title}}</h5>
                            <p class="card-text ">{{$item->description}}</p>
                        </div>
                        <form action="{{route('catalogs.store')}}" method="post"
                              class="d-flex text-white
                            align-items-center grid flex-wrap gap-3
                            justify-content-evenly pt-3 pb-3 border-top ">
                            @csrf
                            <input type="hidden" name="product_id" value="{{$item->id}}">
                            <h5 class="card-title ">{{$item->price}}₽ </h5>
                            <button type="submit"
                                    class="btn btn-success text-black button-background-green w-50 border-0">В
                                корзину
                            </button>
                        </form>
                    </div>
                @endforeach

            </div>

            <div class="d-grid justify-content-end mt-3 mb-3">
                {{$catalogs->withQueryString()->links()}}
            </div>

        </div>
    </div>
@endsection
