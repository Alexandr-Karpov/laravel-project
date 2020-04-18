<div class="container">
    <div class="card-deck mb-3 text-center">
        @forelse($tariffs as $tariff)
            <div class="card mb-4 box-shadow">
                <div class="card-header">
                    <h4 class="my-0 font-weight-normal">{{$tariff->name}}</h4>
                </div>
                <div class="card-body">
                    <h1 class="card-title pricing-card-title">{{$tariff->price}} грн. <small class="text-muted">/ в месяц</small></h1>
                    <ul class="list-unstyled mt-3 mb-4 text-center tariff-info">
                        <li class="font-weight-bold">{{$tariff->general_feature}}</li>
                        <li>{{$tariff->feature}}</li>
                    </ul>
                    <button type="button" class="tariff-btn">Оформить</button>
                </div>
            </div>
        @empty
            <h3>Нет тарифов</h3>
        @endforelse
    </div>
</div>
