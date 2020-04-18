<div class="profile-section">
    <div class="form-group">
        <div class="col-xs-6">
            <label for="name"><h4>Название тарифа</h4></label>
            <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name">
            @error('name')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>
    </div>
    <div class="form-group">
        <div class="col-xs-6">
            <label for="service"><h4>Услуга</h4></label>
            <select class="custom-select mr-sm-2" id="service" name="service_id">
                <option value="1" selected>Домашний интернет</option>
                <option value="2">Телевидение</option>
            </select>
            @error('service_id')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>
    </div>
    <div class="form-group">
        <div class="col-xs-6">
            <label for="price"><h4>Стоимость</h4></label>
            <input id="price" type="number" class="form-control @error('number') is-invalid @enderror" name="price">
            @error('price')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>
    </div>
    <div class="form-group">
        <div class="col-xs-6">
            <label for="feature"><h4>Характеристика</h4></label>
            <input id="feature" type="text" class="form-control @error('feature') is-invalid @enderror" name="feature">
            @error('feature')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>
    </div>
</div>
