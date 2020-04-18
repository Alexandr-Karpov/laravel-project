<div class="profile-section">
    <div class="form-group">
        <h2>Контракт № {{$contract->id}}</h2>
    </div>
    <div class="form-group">
        <div class="col-xs-6">
            <label for="status"><h4>Статус</h4></label>
            <select class="custom-select mr-sm-2" id="status" name="status">
                <option value="Неактивен" selected>Неактивен</option>
                <option value="Активен">Активен</option>
            </select>
            @error('status')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>
    </div>
    <div class="form-group">
        <div class="col-xs-6">
            <label for="start_date"><h4>Дата заключения</h4></label>
            <input id="start_date" type="date" class="form-control @error('start_date') is-invalid @enderror" name="start_date" value="{{ $contract->start_date }}">
            @error('start_date')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>
    </div>
    <div class="form-group">
        <div class="col-xs-6">
            <label for="end_date"><h4>Продлён до</h4></label>
            <input id="end_date" type="date" class="form-control @error('end_date') is-invalid @enderror" name="end_date" value="{{ $contract->end_date }}">
            @error('end_date')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>
    </div>
</div>
