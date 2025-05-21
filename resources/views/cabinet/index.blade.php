@extends('layouts.main')

@section('content')
    <div class="mt-5">


        @if(session('success'))
            <div class="alert alert-success alert-dismissible fade show ms-5 me-2 mb-5" role="alert">
                {{ session('success') }} <br>
                Номер вашего заказа: {{ session('number_order') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif

        @if(session('error'))
            <div class="alert alert-danger alert-dismissible fade show ms-5 me-2 mb-5" role="alert">
                {{ session('error') }}
                <a href="{{session('telegram_link')}}">{{session('telegram_text')}}</a>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif

        <div class="text-center">
            <h2 class="fw-bold d-flex justify-content-center mb-3"
            >
ЛИЧНЫЙ КАБИНЕТ
            </h2>

            <h4 class="fw-bold d-flex justify-content-center mb-3"
            >
                ЗАКАЗЫ
            </h4>


        </div>

        <table class="table">
            <thead>
            <tr>
                <th scope="col">Id</th>
                <th scope="col">Номер заказа</th>
                <th scope="col">Общая цена</th>
                <th scope="col">Статус</th>
                <th scope="col">Кнопки</th>
            </tr>
            </thead>
            <tbody>
            @foreach($orders as $item)
                <tr>
                    <th scope="row">{{$item->id}}</th>
                    <td>{{$item->order_number}}</td>
                    <td>{{$item->total_price}}</td>
                    <td>{{$item->status}}</td>
                    <td>
                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#orderModal{{$item->id}}">
                            Подробности
                        </button>

                        <!-- Modal -->
                        <div class="modal fade" id="orderModal{{$item->id}}" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="orderModalLabel{{$item->id}}" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered modal-lg">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h1 class="modal-title fs-5" id="orderModalLabel{{$item->id}}">
                                            Заказ № {{$item->order_number}}
                                        </h1>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Закрыть"></button>
                                    </div>
                                    <div class="modal-body">
                                        <h5>Список продуктов:</h5>
                                            <ul class="list-group">
                                                @foreach($item->order_product as $orderProduct)
                                                    <li class="list-group-item">

                                                        <div>
                                                            <strong>Название:</strong> {{ $orderProduct->product->title }}<br>
                                                            <strong>Описание:</strong> {{ $orderProduct->product->description }}<br>
                                                            <strong>Цена:</strong> {{ $orderProduct->product->price }}<br>
                                                            <strong>Кол-во:</strong> {{ $orderProduct->quantity }}

                                                        </div>
                                                    </li>
                                                @endforeach
                                            </ul>
                                    </div>
                                    <form class="modal-footer" action="{{route('cabinet.store')}}" method="post">
                                        @csrf
                                        <input type="hidden" name="user_id" value="{{$userId}}">
                                        <input type="hidden" name="total_price" value="{{$item->total_price}}">
                                        @foreach($item->order_product as $orderProduct)
                                            <input type="hidden" value="{{$orderProduct->product->id}}" name="product_id[]">
                                            <input type="hidden" value="{{ $orderProduct->quantity }}" name="quantitys[]">
                                        @endforeach
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Закрыть</button>
                                        <button type="submit" class="btn btn-secondary">Повторить заказ</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </td>
                </tr>
            @endforeach

            </tbody>
        </table>
    </div>
@endsection
