@extends('layouts.admin')

@php
use Carbon\Carbon;
@endphp

@section('content')
<div class="mt-3">
    @if(session('success'))
        <div class="alert alert-success alert-dismissible fade show ms-5 me-2" role="alert">
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif

    @if(session('error'))
        <div class="alert alert-danger alert-dismissible fade show ms-5 me-2" role="alert">
            {{ session('error') }}
            <a href="{{ session('telegram_link') }}">{{ session('telegram_text') }}</a>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif

    <h2 class="fw-bold d-flex justify-content-center mb-3">ВСЕ ЗАКАЗЫ</h2>

    <div class="mt-4">
        <table class="table table-striped-columns">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">User ID</th>
                    <th scope="col">Номер заказа</th>
                    <th scope="col">Сумма</th>
                    <th scope="col">Дата доставки</th>
                    <th scope="col">Статус</th>
                    <th scope="col">Создан</th>
                    <th scope="col">Обновлен</th>
                    <th scope="col">Действия</th>
                </tr>
            </thead>
            <tbody>
                @foreach($orders as $order)
                <tr>
                    <th scope="row">{{ $order->id }}</th>
                    <td>{{ $order->user_id }}</td>
                    <td>{{ $order->order_number }}</td>
                    <td>{{ $order->total_price }}</td>
                    <td>{{ $order->delivered_at ? Carbon::parse($order->delivered_at)->format('d.m.Y H:i') : '-' }}</td>
                    <td>{{ $order->status }}</td>
                    <td>{{ Carbon::parse($order->created_at)->format('d.m.Y H:i') }}</td>
                    <td>{{ Carbon::parse($order->updated_at)->format('d.m.Y H:i') }}</td>
                    <td>
                        <a href="{{ route('admin.orders.edit', $order->id) }}" class="btn btn-success mb-1">Изменить</a>
                        <form action="{{ route('admin.orders.destroy', $order->id) }}" method="POST" onsubmit="return confirm('Удалить заказ #{{ $order->id }}?')" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Удалить</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>

        <div class="d-grid justify-content-center mt-3 mb-3">
            {{ $orders->withQueryString()->links() }}
        </div>
    </div>
</div>
@endsection
