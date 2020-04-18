@extends('dashboard.index')
@section('admin-content')
    <div class="d-flex justify-content-between">
        <h2>Таблица: Тарифы</h2>
        <h2>Количество записей: {{$count}}</h2>
    </div>
    <a class="btn btn-outline-success mt-2 mb-2" href="{{ route('dashboard.tariffs.create') }}">Добавить запись</a>
    <table class="table table-bordered">
        <thead class="thead-dark text-center">
        <tr>
            <th scope="col">#</th>
            <th scope="col">Название</th>
            <th scope="col">Услуга</th>
            <th scope="col">Стоимость</th>
            <th scope="col">Характеристика</th>
            <th scope="col">Действия</th>
        </tr>
        </thead>
        <tbody>
        @forelse($tariffs as $tariff)
            <tr>
                <th scope="row">{{ $tariff->id }}</th>
                <td>{{ $tariff->name }}</td>
                <td>{{ $tariff->service }}</td>
                <td>{{ $tariff->price }}</td>
                <td>{{ $tariff->general_feature }} {{ $tariff->feature }}</td>
                <td class="d-flex justify-content-around">
                    <a class="btn btn-site" href="{{ route('dashboard.tariffs.edit', $tariff->id) }}">Изменить</a>
                    <a class="btn btn-danger" href="{{ route('dashboard.tariffs.show', $tariff->id) }}">Удалить</a>
                </td>
            </tr>
        @empty
        @endforelse
        </tbody>
    </table>

@endsection
