@extends('dashboard.layouts.default')
@section('content')
    <div class="container-fluid full-height">
        <div class="row full-height">
            @include('dashboard.layouts.blocks.sidebar.nav.index')
            <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
                <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                    <h1 class="h2">Панель администратора</h1>
                    <div class="mb-2 mb-md-0">
                        <div class="mr-2">
                            @include('notifications.alert')
                        </div>
                    </div>
                </div>
                @yield('admin-content')
            </main>
        </div>
    </div>
@endsection

