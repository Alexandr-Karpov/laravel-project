<div class="row">
    <div class="col-md-3 profile-section">
        <div class="form-group">
            <div class="col-xs-6">
                <label for="first_name"><h3>Имя</h3></label>
                <input id="first_name" type="text" class="form-control @error('first_name') is-invalid @enderror" name="first_name" value="{{ $user->first_name }}" required>

                @error('first_name')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
        </div>
        <div class="form-group">
            <div class="col-xs-6">
                <label for="last_name"><h3>Фамилия</h3></label>
                <input id="last_name" type="text" class="form-control @error('last_name') is-invalid @enderror" name="last_name" value="{{ $user->last_name }}" required>

                @error('last_name')
                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                @enderror
            </div>
        </div>
        <div class="form-group">
            <div class="col-xs-6">
                <label for="middle_name"><h3>Отчество</h3></label>
                <input id="middle_name" type="text" class="form-control @error('middle_name') is-invalid @enderror" name="middle_name" value="{{ $user->middle_name }}" required>

                @error('middle_name')
                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                @enderror
            </div>
        </div>
    </div>
    <div class="col-md-8 profile-section">
        <div>
            <div>
                <div>
                    <div class="form-group">
                        <div class="col-xs-6">
                            <label for="phone"><h4>Мобильный телефон (+38 000 00 00 000)</h4></label>
                            <input id="phone" type="tel" class="form-control @error('phone') is-invalid @enderror" name="phone" value="{{ $user->phone }}">
                            @error('phone')
                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-xs-6">
                            <label for="email"><h4>Email</h4></label>
                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ $user->email }}" required>
                            @error('email')
                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-xs-6">
                            <label for="location"><h4>Место проживания</h4></label>
                            <input id="location" type="text" class="form-control @error('location') is-invalid @enderror" name="location" value="{{ $user->location }}">
                            @error('location')
                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-xs-6">
                            <label for="password"><h4>Новый пароль</h4></label>
                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" autocomplete="new-password">
                            @error('password')
                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-xs-6">
                            <label for="password-confirm"><h4>Подвердите пароль</h4></label>
                            <input id="password-confirm" type="password" class="form-control" name="password_confirmation" autocomplete="new-password">
                        </div>
                    </div>
                </div>
            </div><!--/tab-pane-->
        </div><!--/tab-content-->
    </div><!--/col-9-->
</div>
