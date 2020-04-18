@extends('main.layouts.default')
@section('content')
    @include('main.layouts.blocks.about.tv.index')
    <div class="pricing-header px-3 py-3 pt-md-5 pb-md-4 mx-auto text-center">
        <h1 class="services-header">Тарифы</h1>
    </div>
    @include('main.layouts.blocks.tariffs.index')
@endsection
