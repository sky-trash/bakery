@extends('layouts.main')
@section('content')
    <div class="container">
        @if(session('success'))
            <div class="alert alert-success alert-dismissible fade show ms-5 me-2" role="alert">
                {{ session('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif

            @if(session('error'))
                <div class="alert alert-danger alert-dismissible fade show ms-5 me-2" role="alert">
                    {{ session('error') }}
                    <a href="{{session('telegram_link')}}">{{session('telegram_text')}}</a>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif
    </div>

    <div class="mt-5 container">

        <div class="text-center">
            <h2 class="fw-bold d-flex justify-content-center mb-3">КОРЗИНА</h2>
        </div>

        <div class="row">
            <div class="col-12 col-lg-8">
                <div class="d-flex flex-column gap-3">

                    @foreach($basket as $item)
                        <div class="card">
                            <div class="row g-0 p-3">
                                <div class="col-4">
                                    <img src="{{asset('storage/products/' . $item->product->image)}}"
                                         class="img-fluid rounded-start"
                                         alt="...">
                                </div>
                                <div class="col-8 ps-3">
                                    <form action="{{route('basket.destroy',$item->id) }}" method="post" class="m-0 p-0">
                                        @csrf
                                        @method('delete')
                                        <button type="submit" class="btn-close  close-button"
                                                aria-label="Close"></button>
                                    </form>
                                    <div class="card-body ps-0">
                                        <h5 class="card-title">{{$item->product->title}}</h5>
                                        <p class="card-text">{{$item->product->description}}</p>
                                    </div>
                                    <div class="d-flex align-items-center justify-content-between">
                                        <form action="{{route('basket.update', $item->id )}}" method="post"
                                              class="d-flex align-items-center gap-3">
                                            @csrf
                                            @method('put')
                                            <input type="hidden" name="quantity" value="{{ $item->quantity }}">
                                            <button type="submit" name="action" value="plus"
                                                    class="btn btn-success text-black button-background-green border-0">
                                                +
                                            </button>
                                            <div>{{$item->quantity}}</div>
                                            <button type="submit" name="action" value="minus"
                                                    class="btn btn-success text-black button-background-green border-0">
                                                -
                                            </button>
                                        </form>
                                        <div>{{$item->product->price}} P за штуку</div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    @endforeach

                </div>
            </div>

            <div class="col-12 col-lg-4 mt-4 mt-lg-0">
                <div class="card" style="width: 100%;">
                    <div class="card-body">
                        <h5 class="card-title">Общая статистика</h5>
                        <hr class="hr mt-2 mb-2"/>

                        <h6 class="card-title">Товары</h6>
                        @foreach($basket as $item)
                            <hr class="hr-dashed">
                            <div class="d-flex justify-content-between mt-1">
                                <p class="card-text m-0">{{$item->product->title}}</p>
                                <p class="card-text m-0">{{$item->quantity}} шт</p>
                            </div>

                        @endforeach
                        <hr class="hr mt-2 mb-2"/>
                        <div class="d-flex justify-content-between">
                            <p class="card-text m-0">Общая цена</p>
                            <p class="card-text m-0">{{$price}} р</p>
                        </div>
                        <hr class="hr mt-2 mb-2"/>
                        <form action="{{route('basket.store')}}" method="post">
                            @csrf
                            <input type="hidden" value="{{$userId}}" name="user_id">
                            <input type="hidden" value="{{$price}} " name="total_price">
                            @foreach($basket as $item)
                                <input type="hidden" value="{{ $item->product->id }}" name="product_id[]">
                                <input type="hidden" value="{{ $item->quantity }}" name="quantitys[]">
                            @endforeach
                            <button type="submit"
                                    class="btn btn-success text-black button-background-green border-0 w-100"
                                    @if($basket->isEmpty()) disabled @endif>
                                Купить
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

