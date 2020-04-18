@extends('dashboard.index')
@section('admin-content')
    <div>
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Подвердите действие</h5>
                </div>
                <div class="modal-body">
                    <p>Вы действительно хотите удалить данный счет?</p>
                    <p>Счет №{{ $payment->id }}</p>
                </div>
                <div class="modal-footer">
                    <form id="destroy-form" action="{{ route('dashboard.payments.destroy', $payment->id) }}" method="POST">
                        @csrf
                        @method('delete')
                        <button class="btn btn-danger" type="submit">Да</button>
                    </form>
                    <a class="btn btn-site" href="{{ route('dashboard.payments.index') }}">Нет</a>
                </div>
            </div>
        </div>
    </div>
@endsection
