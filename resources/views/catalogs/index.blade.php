@extends('layouts.main')
@section('content')
    <div class="mt-5 mb-10 color-green">
        <div class="mt-5 ">
            <div class="text-center">
                <h2 class="fw-bold d-flex justify-content-center mb-3"
                >
                    КАТАЛОГ ОТВАРОВ
                </h2>

            </div>

            <div class="mt-5 mb-5">
                <button type="button" class="btn btn-secondary ms-2" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
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
                            <form action="" method="POST">
                                <div class="modal-body">
                                    <div class="mb-3 w-50">
                                        <label for="type" class="form-label">Тип</label>
                                        <select class="form-select" name="type" aria-label="Default select example">
                                            <option selected>Выберите тип</option>
                                            <option value="1">Булки</option>
                                            <option value="2">Сладости</option>
                                            <option value="3">Мясные</option>
                                        </select>
                                    </div>
                                    <div class="mb-3 w-50">
                                        <label for="price" class="form-label">Цена</label>
                                        <select class="form-select" name="price" aria-label="Default select example">
                                            <option selected>Выберите цену от</option>
                                            <option value="1">0 - 100</option>
                                            <option value="2">101 - 1 000</option>
                                            <option value="3">1 001 - 10 001</option>
                                            <option value="4">10 001 - 100 001</option>
                                        </select>
                                    </div>
                                    <div class="mb-3 w-50">
                                        <label for="freshness" class="form-label">Свежесть</label>
                                        <select class="form-select" name="freshness"
                                                aria-label="Default select example">
                                            <option selected>Выберите свежесть</option>
                                            <option value="1">Новая</option>
                                            <option value="2">Средняя</option>
                                            <option value="3">Старая</option>
                                        </select>
                                    </div>

                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Отменить
                                    </button>
                                    <button type="submit" class="btn btn-primary">Сохранить</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

            </div>
            <div class="d-flex align-content-start justify-content-center flex-wrap gap-3 align-items-stretch">
                <div class="card background-green-card d-flex flex-column p-1" style="width: 18rem;">
                    <div style="height: 200px; overflow: hidden;">
                        <img src="{{ asset('storage/news/test-1.jpeg') }}"
                             class="img-fluid w-100 h-100 rounded-top"
                             style="object-fit: cover;" alt="...">
                    </div>
                    <div class="card-body card-index text-white d-flex flex-column">
                        <p class="card-text mt-1 mb-2">
                            Добавлена: 123123
                        </p>
                        <h5 class="card-title">123</h5>
                        <p class="card-text ">{1123</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
