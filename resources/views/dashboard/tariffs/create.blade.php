@extends('dashboard.index')
@section('admin-content')
    <div class="user-profile container bootstrap snippet">
        {!! Form::open(['url' => route('dashboard.tariffs.store')]) !!}
        @include('dashboard.tariffs.blocks.form.index')
        <div>
            <div class="form-group">
                {!! Form::submit('Добавить', ['class' => 'btn btn-site']); !!}
            </div>
        </div>
        {!! Form::close() !!}
    </div>
@endsection
