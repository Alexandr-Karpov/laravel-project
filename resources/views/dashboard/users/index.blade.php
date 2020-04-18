@extends('dashboard.index')
@section('admin-content')
    <div class="d-flex justify-content-between">
        <h2>Таблица: Пользователи</h2>
        <h2>Количество записей: {{$count}}</h2>
    </div>

    <table class="table table-bordered">
        <thead class="thead-dark text-center">
            <tr>
                <th scope="col">#</th>
                <th scope="col">ФИО</th>
                <th scope="col">Email</th>
                <th scope="col">Телефон</th>
                <th scope="col">Место жительства</th>
                <th scope="col">Действия</th>
            </tr>
        </thead>
        <tbody>
        @forelse($users as $user)
            <tr>
                <th scope="row">{{ $user->id }}</th>
                <td>{{ $user->first_name }} {{ $user->middle_name }} {{ $user->last_name }}</td>
                <td>{{ $user->email }}</td>
                <td>{{ $user->phone }}</td>
                <td>{{ $user->location }}</td>
                <td class="d-flex justify-content-around">
                    <a class="btn btn-site" href="{{ route('dashboard.users.edit', $user->id) }}">Изменить</a>
                    <a class="btn btn-danger" href="{{ route('dashboard.users.show', $user->id) }}">Удалить</a>
                </td>
            </tr>
        @empty
        @endforelse
        </tbody>
    </table>

@endsection
