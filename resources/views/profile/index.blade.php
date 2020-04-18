@extends('profile.layouts.default')
@section('content')
    <div class="user-profile container bootstrap snippet">
        {!! Form::open(['method' => 'patch' ,'url' => route('profile.update', $user->id)]) !!}
            @include('profile.layouts.blocks.form.fields')
            <div class="d-flex justify-content-between">
                <div class="form-group">
                    {!! Form::submit('Сохранить изменения', ['class' => 'btn btn-site']); !!}
                </div>
                @include('notifications.alert')
            </div>
        {!! Form::close() !!}
    </div>
@endsection
