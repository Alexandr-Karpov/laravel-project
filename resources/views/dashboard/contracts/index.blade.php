@extends('dashboard.index')
@section('admin-content')
    <div class="d-flex justify-content-between">
        <h2>Таблица: Тарифы</h2>
        <h2>Количество записей: {{$count}}</h2>
    </div>
    <table class="table table-bordered">
        <thead class="thead-dark text-center">
        <tr>
            <th scope="col">#</th>
            <th scope="col">Email клиента</th>
            <th scope="col">Тариф</th>
            <th scope="col">Дата заключения</th>
            <th scope="col">Продлён до</th>
            <th scope="col">Статус</th>
            <th scope="col">Действия</th>
        </tr>
        </thead>
        <tbody>
        @forelse($contracts as $contract)
            <tr>
                <th scope="row">{{ $contract->id }}</th>
                <td>{{ $contract->email }}</td>
                <td>{{ $contract->name }}</td>
                <td>{{ $contract->start_date }}</td>
                <td>{{ $contract->end_date }}</td>
                <td>{{ $contract->status }}</td>
                <td class="d-flex justify-content-around">
                    <a class="btn btn-site" href="{{ route('dashboard.contracts.edit', $contract->id) }}">Изменить</a>
                    <a class="btn btn-danger" href="{{ route('dashboard.contracts.show', $contract->id) }}">Удалить</a>
                </td>
            </tr>
        @empty
        @endforelse
        </tbody>
    </table>

@endsection
