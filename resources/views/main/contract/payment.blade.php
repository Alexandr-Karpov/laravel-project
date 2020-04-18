@extends('main.layouts.default')
@section('content')
    <form>
        <div class="form-group">
            <label for="card">Номер карты</label>
            <input type="text" class="form-control" id="card">
        </div>
        <div class="form-group">
            <label for="amount">Сумма</label>
            <input type="number" class="form-control" id="amount">
        </div>
        <button type="submit" class="btn btn-site">Оплатить</button>
    </form>
@endsection
