@extends('main.layouts.default')
@section('content')
    @include('main.layouts.blocks.about.company.index')
    <div class="pricing-header px-3 py-3 pt-md-5 pb-md-4 mx-auto text-center">
        <h1 class="services-header">Услуги</h1>
    </div>

    <div class="container">
        <div class="d-flex flex-row justify-content-around align-items-center flex-wrap services">
            <a class="m-3" href="{{ url('/internet') }}">
                <span class="service-link d-flex flex-column align-items-center justify-content-center">
                    <img src="{{asset('img/internet-logo.png')}}" alt="internet">
                    <span>Домашний интернет</span>
                </span>
            </a>
            <a class="m-3" href="{{ url('/tv') }}">
                <span class="service-link d-flex flex-column align-items-center justify-content-center">
                    <img src="{{asset('img/tv-logo.png')}}" alt="internet">
                    <span>Телевидение</span>
                </span>
            </a>
        </div>
    </div>
@endsection
