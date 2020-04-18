<nav class="col-md-2 d-none d-md-block bg-dark sidebar position-fixed dashboard-sidebar">
    <div class="sidebar-sticky">
        <ul class="nav flex-column">
            <li class="nav-item mt-2 {{ Request::is('dashboard/users*') ? 'active-db-link' : '' }}">
                <a class="menu-link" href="{{ route('dashboard.users.index') }}">Пользователи</a>
            </li>
            <li class="nav-item mt-2 {{ Request::is('dashboard/tariffs*') ? 'active-db-link' : '' }}">
                <a class="menu-link" href="{{ route('dashboard.tariffs.index') }}">Тарифы</a>
            </li>
            <li class="nav-item mt-2 {{ Request::is('dashboard/contracts*') ? 'active-db-link' : '' }}">
                <a class="menu-link" href="{{ route('dashboard.contracts.index') }}">Контракты</a>
            </li>
            <li class="nav-item mt-2 {{ Request::is('dashboard/payments*') ? 'active-db-link' : '' }}">
                <a class="menu-link" href="{{ route('dashboard.payments.index') }}">Счета уплаты</a>
            </li>
        </ul>
    </div>
</nav>
