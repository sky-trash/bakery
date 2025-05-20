@extends('layouts.main')
@section('content')
    <div class="mt-5">
        <div>

        </div>

        <div class="text-center">
            <h2 class="fw-bold d-flex justify-content-center mb-3"
            >
                ПОДРОБНАЯ ИНФОРМАЦИЯ ПО ПРОДУКТУ <br>
                "{{$product->title}}"

            </h2>

            <div class="">

                <div class="card mb-3 p-2" style="margin: 0 auto; ">
                    <img src="{{ asset('storage/products/' . $product->image) }}" class="card-img-top w-25" alt="..."
                         style="margin: 0 auto; min-width: 262px">
                    <div class="card-body" style="max-width: 500px; margin: 0 auto;">
                        <h5 class="card-title">{{$product->title}}</h5>
                        <p class="card-text">{{$product->description}}</p>
                        <form action="{{route('catalogs.store')}}" method="post"
                              class="d-flex text-white
                            align-items-center grid flex-wrap gap-3
                            justify-content-evenly pt-3 pb-3 border-top ">
                            @csrf
                            <input type="hidden" name="product_id" value="{{$product->id}}">
                            <h5 class="card-title text-black">{{$product->price}}₽ </h5>
                            <button type="submit" @if(!$user) disabled @endif
                            class="btn btn-success text-black button-background-green w-50 border-0">В
                                корзину
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
