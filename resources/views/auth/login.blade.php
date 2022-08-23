@include('layouts.partials.head')
    <body class="sidebar-dark">
    <div class="main-wrapper">
        <div class="page-wrapper full-page">
            <div class="page-content d-flex align-items-center justify-content-center">

                <div class="row w-100 mx-0 auth-page">
                    <div class="col-md-8 col-xl-6 mx-auto">
                        <div class="card">
                            <div class="row">
                                <div class="col-md-4 pr-md-0">
                                    <div class="auth-left-wrapper">
                                        {{--                                    <img src="{{ asset('../images/benched.jpg') }}" width="236" height="577" alt="user">--}}
                                    </div>
                                </div>
                                <div class="col-md-8 pl-md-0">
                                    <div class="auth-form-wrapper px-4 py-5">
                                        <a href="#" class="noble-ui-logo d-block mb-2"> Benched <span> io </span></a>
                                        <h5 class="text-muted font-weight-normal mb-4">Welcome back! Log in to your
                                            account. {{ __('Login') }}</h5>

                                        @if(session('status'))
                                            <div class="alert alert-success" role="alert">
                                                {{ session('status') }}
                                            </div>
                                        @endif

                                        <form class="forms-sample" method="POST" action="{{ route('login') }}">
                                            @csrf
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">{{ __('Email Address') }}</label>
                                                <input id="email" type="email" id="exampleInputEmail1"
                                                       class="form-control @error('email') is-invalid @enderror"
                                                       name="email" value="{{ old('email') }}" required
                                                       autocomplete="email"
                                                       autofocus placeholder="{{ trans('Email') }}" value="{{ old('email', null) }}">

                                                @error('email')
                                                <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                                @enderror
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleInputPassword1">{{ __('Password') }}</label>
                                                <input id="password" type="password" id="exampleInputPassword1"
                                                       class="form-control @error('password') is-invalid @enderror"
                                                       name="password" required autocomplete="current-password"
                                                       placeholder="Password">

                                                @error('password')
                                                <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                                @enderror
                                            </div>
                                            <div class="form-check form-check-flat form-check-primary">
                                                <label class="form-check-label">
                                                    <input class="form-check-input" type="checkbox" name="remember"
                                                           id="remember" {{ old('remember') ? 'checked' : '' }}>
                                                    Remember me
                                                </label>
                                            </div>

                                            {!! app('captcha')->render() !!}

                                            <div class="mt-3">
                                                <button type="submit"
                                                        class="btn btn-primary mr-2 mb-2 mb-md-0 text-white">
                                                    {{ __('Login') }}
                                                </button>
                                            </div>
                                            @if (Route::has('password.request'))
                                                <a class="d-block mt-3 text-muted"
                                                   href="{{ route('password.request') }}">
                                                    {{ __('Forgot Your Password?') }}
                                                </a>
                                            @endif
                                            @if (Route::has('register'))
                                                <a class="d-block mt-3 text-muted"
                                                   href="{{ route('register') }}">{{ __('Not a user? Sign up') }}</a>
                                            @endif
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    @include('layouts.partials.scripts')
    </body>
    </html>

