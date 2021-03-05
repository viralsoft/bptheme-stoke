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
                                        <h5 class="text-primary">{{ trans('backpack::base.register') }}</h5>
                                    </div>
                                </div>
                                <div class="col-5 align-self-end">
                                    <img src="{{ URL::asset('/assets/images/profile-img.png') }}" alt=""
                                         class="img-fluid">
                                </div>
                            </div>
                        </div>
                        <div class="card-body pt-0">
                            <div>
                                <a href="#">
                                    <div class="avatar-md profile-user-wid mb-4">
                                            <span class="avatar-title rounded-circle bg-light">
                                                <img src="{{ URL::asset('/assets/images/logo.svg') }}" alt=""
                                                     class="rounded-circle" height="34">
                                            </span>
                                    </div>
                                </a>
                            </div>
                            <div class="p-2">
                                <form method="POST" class="form-horizontal" action="{{ route('backpack.auth.register') }}" enctype="multipart/form-data">
                                    @csrf
                                    <div class="mb-3">
                                        <label for="username" class="form-label">{{ trans('backpack::base.name') }}</label>
                                        <input type="text" class="form-control {{ $errors->has('name') ? ' is-invalid' : '' }}"
                                               value="{{ old('name') }}" id="name" name="name" autofocus required>
                                        @if ($errors->has('name'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('name') }}</strong>
                                            </span>
                                        @endif
                                    </div>

                                    <div class="mb-3">
                                        <label for="{{ backpack_authentication_column() }}" class="form-label">{{ config('backpack.base.authentication_column_name') }}</label>
                                        <input type="{{ backpack_authentication_column()=='email'?'email':'text'}}" class="form-control {{ $errors->has(backpack_authentication_column()) ? ' is-invalid' : '' }}" id="{{ backpack_authentication_column() }}"
                                               value="{{ old(backpack_authentication_column()) }}" name="{{ backpack_authentication_column() }}" autofocus required>
                                        @if ($errors->has(backpack_authentication_column()))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first(backpack_authentication_column()) }}</strong>
                                            </span>
                                        @endif
                                    </div>

                                    <div class="mb-3">
                                        <label for="password" class="form-label">{{ trans('backpack::base.password') }}</label>
                                        <input type="password" class="form-control {{ $errors->has('password') ? ' is-invalid' : '' }}" id="password" name="password"
                                               autofocus required>
                                        @if ($errors->has('password'))
                                        <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $errors->first('name') }}</strong>
                                                </span>
                                        @endif
                                    </div>

                                    <div class="mb-3">
                                        <label for="password_confirmation" class="form-label">{{ trans('backpack::base.confirm_password') }}</label>
                                        <input type="password" class="form-control {{ $errors->has('password_confirmation') ? ' is-invalid' : '' }}" id="password_confirmation" name="password_confirmation"
                                               autofocus required>
                                        @if ($errors->has('password_confirmation'))
                                            <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $errors->first('password_confirmation') }}</strong>
                                                </span>
                                        @endif
                                    </div>

                                    <div class="mt-4 d-grid">
                                        <button class="btn btn-primary waves-effect waves-light"
                                                type="submit">{{ trans('backpack::base.register') }}</button>
                                    </div>
                                    <div class="mt-4 text-center">
                                        <p class="mb-0">By registering you agree to the Skote <a href="#"
                                                                                                 class="text-primary">Terms of Use</a></p>
                                    </div>
                                </form>
                            </div>

                        </div>
                    </div>
                    <div class="mt-5 text-center">

                        <div>
                            <p>Already have an account ? <a href="{{ route('backpack.auth.login') }}" class="fw-medium text-primary">
                                    {{ trans('backpack::base.login') }}</a> </p>
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
