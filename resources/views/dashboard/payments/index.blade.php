@extends('dashboard.index')
@section('admin-content')
    <div class="d-flex justify-content-between">
        <h2>Таблица: Оплата</h2>
        <h2>Количество записей: {{$count}}</h2>
    </div>
    <table class="table table-bordered">
        <thead class="thead-dark text-center">
        <tr>
            <th scope="col">#</th>
            <th scope="col">Номер договора</th>
            <th scope="col">Сумма оплаты</th>
            <th scope="col">Дата оплаты</th>
            <th scope="col">Действия</th>
        </tr>
        </thead>
        <tbody>
        @forelse($payments as $payment)
            <tr>
                <th scope="row">{{ $payment->id }}</th>
                <td>{{ $payment->contract }}</td>
                <td>{{ $payment->amount }}</td>
                <td>{{ $payment->created_at }}</td>
                <td class="d-flex justify-content-around">
                    <a class="btn btn-danger" href="{{ route('dashboard.payments.show', $payment->id) }}">Удалить</a>
                </td>
            </tr>
        @empty
        @endforelse
        </tbody>
    </table>

@endsection
