@extends('layouts.main')
@section('content')
    <div class="mt-5 container">
        <div class="text-center">
            <h2 class="fw-bold d-flex justify-content-center mb-3">КОРЗИНА</h2>
        </div>

        <div class="row">
            <div class="col-12 col-lg-8">
                <div class="d-flex flex-column gap-3">
                    <div class="card">
                        <div class="row g-0 p-3">
                            <div class="col-4">
                                <img src="{{asset('storage/promotions/test-4.jpg')}}" class="img-fluid rounded-start" alt="...">
                            </div>
                            <div class="col-8 ps-3">
                                <div class="card-body ps-0">
                                    <h5 class="card-title">Название товара</h5>
                                    <p class="card-text">описание товара</p>
                                </div>
                                <div class="d-flex align-items-center justify-content-between">
                                    <div class="d-flex align-items-center gap-3">
                                        <button type="button" class="btn btn-success text-black button-background-green border-0">+</button>
                                        <div>1</div>
                                        <button type="button" class="btn btn-success text-black button-background-green border-0">-</button>
                                    </div>
                                    <div>100$</div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="card">
                        <div class="row g-0 p-3">
                            <div class="col-4">
                                <img src="{{asset('storage/promotions/test-4.jpg')}}" class="img-fluid rounded-start" alt="...">
                            </div>
                            <div class="col-8 ps-3 d-grid flex-column">
                                <div class="card-body ps-0">
                                    <h5 class="card-title">Название товара</h5>
                                    <p class="card-text">описание товара</p>
                                </div>
                                <div class="d-flex align-items-center  justify-content-between mt-auto ">
                                    <div class="d-flex align-items-center gap-3">
                                        <button type="button" class="btn btn-success text-black button-background-green border-0">+</button>
                                        <div>1</div>
                                        <button type="button" class="btn btn-success text-black button-background-green border-0">-</button>
                                    </div>
                                    <div>100$</div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

            <div class="col-12 col-lg-4 mt-4 mt-lg-0">
                <div class="card" style="width: 100%;">
                    <div class="card-body">
                        <h5 class="card-title">Общая статистика</h5>
                        <hr class="hr mt-2 mb-2" />

                        <h6 class="card-title">Товары</h6>
                        <div class="d-flex justify-content-between mt-1">
                            <p class="card-text m-0">чебурек</p>
                            <p class="card-text m-0">1 шт</p>
                        </div>
                        <div class="d-flex justify-content-between mt-1">
                            <p class="card-text m-0">чебурек</p>
                            <p class="card-text m-0">1 шт</p>
                        </div>
                        <div class="d-flex justify-content-between mt-1">
                            <p class="card-text m-0">чебурек</p>
                            <p class="card-text m-0">1 шт</p>
                        </div>

                        <hr class="hr mt-2 mb-2" />
                        <div class="d-flex justify-content-between">
                            <p class="card-text m-0">Общая цена</p>
                            <p class="card-text m-0">100$</p>
                        </div>
                        <hr class="hr mt-2 mb-2" />
                        <button type="button" class="btn btn-success text-black button-background-green border-0 w-100">Купить</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
