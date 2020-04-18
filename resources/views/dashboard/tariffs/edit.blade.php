@extends('dashboard.index')
@section('admin-content')
    <div class="user-profile container bootstrap snippet">
        {!! Form::open(['method' => 'patch' ,'url' => route('dashboard.tariffs.update', $tariff->id)]) !!}
        @include('dashboard.tariffs.blocks.form.fields')
        <div>
            <div class="form-group">
                {!! Form::submit('Сохранить изменения', ['class' => 'btn btn-site ml-3']); !!}
            </div>
        </div>
        {!! Form::close() !!}
    </div>
@endsection
