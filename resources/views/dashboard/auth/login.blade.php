<!doctype html>
<html lang="en">

@include('dashboard.auth.authHead')

<body class="light ">
    <div class="wrapper vh-100">
        <div class="row align-items-center h-100">

            <form class="col-lg-3 col-md-4 col-10 mx-auto text-center" action="{{ route('admin.login') }}" method="POST">
                @csrf

                {{-- LOGO --}}
                <a class="navbar-brand mx-auto mt-2 flex-fill text-center" href="./index.html">
                    <svg version="1.1" id="logo" class="navbar-brand-img brand-md"
                        xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                        viewBox="0 0 120 120" xml:space="preserve">
                        <g>
                            <polygon class="st0" points="78,105 15,105 24,87 87,87 	" />
                            <polygon class="st0" points="96,69 33,69 42,51 105,51 	" />
                            <polygon class="st0" points="78,33 15,33 24,15 87,15 	" />
                        </g>
                    </svg>
                </a>

                <h1 class="h6 mb-4">{{ __('lang.login_quote') }}</h1>

                <!-- Session Status -->
                <x-auth-session-status class="mb-3" :status="session('status')" />

                <!-- Validation Errors -->
                <x-auth-validation-errors class="mb-3" :errors="$errors" />

                <div class="form-group">
                    <label for="inputEmail" class="sr-only">{{ __('lang.email') }}</label>
                    <input type="email" id="inputEmail" class="form-control form-control-lg"
                        placeholder="{{ __('lang.email') }}" required="" autofocus="" name="email"
                        value="{{ old('email') }}">
                </div>

                <div class="form-group">
                    <label for="inputPassword" class="sr-only">{{ __('lang.password') }}</label>
                    <input type="password" id="inputPassword" class="form-control form-control-lg"
                        placeholder="{{ __('lang.password') }}" name="password" required>
                </div>

                <div class="checkbox mb-3">
                    <label>
                        <input type="checkbox" id="remember-check" name="remember"> {{ __('lang.remember_me') }}
                    </label>
                </div>

                <button class="btn btn-lg btn-primary btn-block" type="submit">{{ __('lang.login_btn') }}</button>

                {{-- Copyright --}}
                <p class="mt-5 mb-3 text-muted">@include('dashboard.partials.copyright')</p>

            </form>

        </div>
    </div>

    @include('dashboard.auth.authScripts')
</body>

</html>











{{-- 

<!doctype html>
<html lang="{{ LaravelLocalization::getCurrentLocale() }}" dir="{{LaravelLocalization::getCurrentLocaleDirection()}}">

    

    <body class="auth-body-bg">
        <div>
            <div class="container-fluid p-0">
                <div class="row g-0">
                    <div class="col-xl-8">
                        @include('dashboard.auth.authImage')
                    </div>

                    <div class="col-xl-4">
                        <div class="auth-full-page-content p-md-5 p-4">
                            <div class="w-100">
                                
                                <div class="d-flex flex-column h-100">
                                    <div class="my-auto">
                                        <div class="text-center">
                                            @include('dashboard.partials.language')
                                        </div>

                                        <div>
                                            <h5 class="text-primary">{{ __('lang.welcome_back') }}</h5>
                                            <p class="text-muted">{{ __('lang.login_quote') }}</p>
                                        </div>
            
                                        <!-- Session Status -->
                                        <x-auth-session-status class="mb-3" :status="session('status')" />

                                        <!-- Validation Errors -->
                                        <x-auth-validation-errors class="mb-3" :errors="$errors" />
                                        
                                        <div class="mt-4">
                                            <form action="{{ route('admin.login') }}" method="POST">
                                                @csrf

                                                <div class="mb-3">
                                                    <label for="email" class="form-label">{{ __('lang.email') }}</label>
                                                    <input type="text" class="form-control" name="email" placeholder="{{ __('lang.please_enter') }} {{ __('lang.email') }}" value="{{ old('email') }}">
                                                </div>

                                                <div class="mb-3">
                                                    <label class="form-label">{{ __('lang.password') }}</label>
                                                    <div class="input-group auth-pass-inputgroup">
                                                        <input type="password" class="form-control" placeholder="{{ __('lang.please_enter') }} {{ __('lang.password') }}" aria-label="Password" aria-describedby="password-addon" name="password">
                                                        <button class="btn btn-light " type="button" id="password-addon"><i class="mdi mdi-eye-outline"></i></button>
                                                    </div>
                                                </div>
                        
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" id="remember-check" name="remember">
                                                    <label class="form-check-label" for="remember-check">
                                                        {{ __('lang.remember_me') }}
                                                    </label>
                                                </div>
                                                
                                                <div class="mt-3 d-grid">
                                                    <button class="btn btn-primary waves-effect waves-light" type="submit">{{ __('lang.login_btn') }}</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>

                                    <div class="mt-4 mt-md-5 text-center">
                                        @include('dashboard.partials.copyright')
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end row -->
            </div>
            <!-- end container-fluid -->
        </div>

        

    </body>
</html> --}}
