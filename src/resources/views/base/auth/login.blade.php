@extends(backpack_view('layouts.plain'))

@section('body')

    <body>
    @endsection
@section('content')
    <div class="account-pages my-5 pt-sm-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8 col-lg-6 col-xl-5">
                    <div class="card overflow-hidden">
                        <div class="bg-primary bg-soft">
                            <div class="row">
                                <div class="col-7">
                                    <div class="text-primary p-4">
                                        <h5 class="text-primary">Welcome Back !</h5>
                                        <p>{{ trans('backpack::base.login') }}</p>
                                    </div>
                                </div>
                                <div class="col-5 align-self-end">
                                    <img src="{{ URL::asset('/assets/images/profile-img.png') }}" alt=""
                                         class="img-fluid">
                                </div>
                            </div>
                        </div>
                        <div class="card-body pt-0">
                            <div class="auth-logo">
                                <a href="#" class="auth-logo-light">
                                    <div class="avatar-md profile-user-wid mb-4">
                                            <span class="avatar-title rounded-circle bg-light">
                                                <img src="{{ URL::asset('/assets/images/logo-light.svg') }}" alt=""
                                                     class="rounded-circle" height="34">
                                            </span>
                                    </div>
                                </a>

                                <a href="#" class="auth-logo-dark">
                                    <div class="avatar-md profile-user-wid mb-4">
                                            <span class="avatar-title rounded-circle bg-light">
                                                <img src="{{ URL::asset('/assets/images/logo.svg') }}" alt=""
                                                     class="rounded-circle" height="34">
                                            </span>
                                    </div>
                                </a>
                            </div>
                            <div class="p-2">
                                <form class="form-horizontal" method="POST" action="{{ route('backpack.auth.login') }}">
                                    @csrf
                                    <div class="mb-3">
                                        <label class="form-label" for="{{ $username }}">{{ config('backpack.base.authentication_column_name') }}</label>
                                        <input type="text" class="form-control{{ $errors->has($username) ? ' is-invalid' : '' }}" name="{{ $username }}" value="{{ old($username) }}" id="{{ $username }}">
                                        @if ($errors->has($username))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first($username) }}</strong>
                                            </span>
                                        @endif
                                    </div>

                                    <div class="mb-3">
                                        <label class="form-label" for="password">{{ trans('backpack::base.password') }}</label>
                                        <div
                                            class="input-group auth-pass-inputgroup {{ $errors->has('password') ? ' is-invalid' : '' }}">
                                            <input type="password" name="password"
                                                   class="form-control  {{ $errors->has('password') ? ' is-invalid' : '' }}"
                                                   id="userpassword"
                                                   aria-label="Password" aria-describedby="password-addon">
                                            <button class="btn btn-light " type="button" id="password-addon"><i
                                                    class="mdi mdi-eye-outline"></i></button>
                                            @if ($errors->has('password'))
                                            <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $errors->first('password') }}</strong>
                                                    </span>
                                            @endif
                                        </div>
                                    </div>

                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" id="remember" name="remember"
                                            {{ old('remember') ? 'checked' : '' }}>
                                        <label class="form-check-label" for="remember">
                                            {{ trans('backpack::base.remember_me') }}
                                        </label>
                                    </div>

                                    <div class="mt-3 d-grid">
                                        <button class="btn btn-primary waves-effect waves-light" type="submit">{{ trans('backpack::base.login') }}</button>
                                    </div>

                                    <div class="mt-4 text-center">
                                    @if (backpack_users_have_email() && config('backpack.base.setup_password_recovery_routes', true))
                                        <a href="{{ route('backpack.auth.password.reset') }}" class="text-muted"><i
                                                    class="mdi mdi-lock me-1"></i> {{ trans('backpack::base.forgot_your_password') }}</a>
                                    @endif
                                    </div>
                                </form>
                            </div>

                        </div>
                    </div>
                    <div class="mt-5 text-center">

                        <div>
                            @if (config('backpack.base.registration_open'))
                            <p>Don't have an account ? <a href="{{ route('backpack.auth.register') }}" class="fw-medium text-primary">
                                    {{ trans('backpack::base.register') }}</a> </p>
                            @endif
                            <p>© <script>
                                    document.write(new Date().getFullYear())

                                </script> Skote. Crafted with <i class="mdi mdi-heart text-danger"></i> by Themesbrand
                            </p>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection
