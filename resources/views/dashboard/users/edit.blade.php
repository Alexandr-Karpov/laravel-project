@extends('dashboard.index')
@section('admin-content')
    <div class="user-profile container bootstrap snippet">
        {!! Form::open(['method' => 'patch' ,'url' => route('dashboard.users.update', $user->id)]) !!}
        @include('dashboard.users.blocks.form.fields')
        <div>
            <div class="form-group">
                {!! Form::submit('Сохранить изменения', ['class' => 'btn btn-site']); !!}
            </div>
        </div>
        {!! Form::close() !!}
    </div>
@endsection
