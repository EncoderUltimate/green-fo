@extends('layouts.app')

@push('css')
    <link href="{{ asset('assets/css/custom.css') }}" rel="stylesheet">
@endpush

@section('content')

    <!-- Encoder Wrapper -->
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-4">
                <div class="encoder-content">

                    <!-- <div class="brand-col">
                        <div class="headline"> -->
                    <!-- brand-logo start -->
                    <div class="row">
                        <div class="brand-logo">
                            <img src="assets/default/logo.png" alt="Brand logo" class="img-fluid"/>
                            <span>Green Foo</span>
                        </div>
                    </div>
                    <!--Row-->
                    <div class="row">
                        <!-- Encoder-login start -->
                        <div class="encoder-login">
                            <!-- Nav tabs -->

                            <ul class="nav nav-tabs justify-content-center" id="myTab" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" id="home-tab" data-toggle="tab" href="#login" role="tab"
                                       aria-controls="home" aria-selected="true">Already a member</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="profile-tab" data-toggle="tab" href="#signup" role="tab"
                                       aria-controls="profile" aria-selected="false">I am new
                                        here</a>
                                </li>
                            </ul>

                            <div class="tab-content" id="myTabContent">
                                <div class="encoder-panel panel-login tab-pane fade show active" id="login"
                                     role="tabpanel" aria-labelledby="home-tab">
                                    <div class="row">
                                        <div class="col-xs-12 col-sm-12">

                                            <form method="POST" action="{{ route('login')}}" name="loginForm"
                                                  class="loginForm">
                                                @csrf

                                                <div class="form-group wrap-input">

                                                    <input type="email" name="email" id="email"
                                                           class="form-control email @error('email') is-invalid @enderror"
                                                           value="{{ old('email') }}" required autocomplete="email"
                                                           autofocus placeholder="Email address">
                                                    <span class="focus-input"></span>

                                                    @error('email')
                                                    <span class="invalid-feedback" role="alert">
                                                                            <strong>{{ $message }}</strong>
                                                                        </span>
                                                    @enderror
                                                </div>

                                                <div class="form-group wrap-input">

                                                    <div class="pwdMask">

                                                        <input id="password" type="password"
                                                               class="form-control password @error('password') is-invalid @enderror"
                                                               name="password"
                                                               required autocomplete="current-password"
                                                               placeholder="Password">
                                                        <span class="focus-input"></span>
                                                        <span class="fa fa-eye-slash pwd-toggle"></span>
                                                    </div>

                                                    @error('password')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>

                                                <!-- start remember row -->
                                                <div class="remember-row">
                                                    <div class="row">

                                                        <div class="col-xs-6 col-sm-6">
                                                            <div class="custom-control custom-checkbox">

                                                                <input class="custom-control-input" type="checkbox"
                                                                       name="remember" id="customCheck1"
                                                                    {{ old('remember') ? 'checked' : '' }}>

                                                                <label class="label-text custom-control-label"
                                                                       for="customCheck1">Remember me</label>

                                                            </div>
                                                        </div>
                                                        <div class="col-xs-6 col-sm-6">
                                                            <div class="custom-control forgotPwd">

                                                                @if (Route::has('password.request'))
                                                                    <a href="#forgot-pwd" id="forget-lnk"
                                                                       data-toggle="tab">Forgot password</a>
                                                                @endif

                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!--Remember Me-->
                                                <div class="form-group">
                                                    <button class="btn btn-lg btn-primary btn-block"
                                                            type="submit">Login with email
                                                    </button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                    <!---Row-->
                                </div>

                                <div class="encoder-panel panel-signup tab-pane fade" id="signup" role="tabpanel"
                                     aria-labelledby="profile-tab">
                                    <div class="row">
                                        <div class="col-xs-12 col-sm-12">

                                            <form method="POST" action="{{ route('register') }}" name="signupForm"
                                                  class="signupForm">
                                                @csrf

                                                <div class="form-group wrap-input">
                                                    <input id="name" type="text" class="form-control @error('name') is-invalid @enderror"
                                                           name="name" value="{{ old('name') }}" required autocomplete="name" autofocus placeholder="Full Name">
                                                    <span class="focus-input"></span>
                                                    @error('name')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                    @enderror
                                                </div>

                                                <div class="form-group wrap-input">

                                                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email"
                                                           value="{{ old('email') }}" required autocomplete="email" placeholder="Email">

                                                    @error('email')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                    @enderror

                                                    <span class="focus-input"></span>
                                                </div>


                                                <div class="form-group wrap-input">
                                                    <div class="pwdMask">
                                                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror"
                                                               name="password" required autocomplete="new-password" placeholder="Password">
                                                        <span class="focus-input"></span>
                                                        <span class="fa fa-eye-slash pwd-toggle"></span>

                                                        @error('password')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                        @enderror
                                                    </div>
                                                </div>

                                                <div class="form-group wrap-input">
                                                    <div class="pwdMask">
                                                        <input id="password-confirm" type="password" class="form-control" name="password_confirmation"
                                                               required autocomplete="new-password" placeholder="Confirm Password">
                                                    </div>
                                                </div>

                                                <div class="form-group">
                                                    <p class="term-policy text-muted small">Only Teachers can be registered.</p>
                                                </div>
                                                <div class="form-group">
                                                    <button class="btn btn-lg btn-primary btn-block"
                                                            type="submit">Sign up with email
                                                    </button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>

                                <!--Panel Signup-->
                                <!-- panel-forget start-->
                                <div id="forgot-pwd" class="encoder-panel panel-forgot tab-pane fade">
                                    <div class="row justify-content-center">
                                        <div class="col-xs-12">
                                            <div class="encoder-heading">
                                                <h3 class="auth-title">Recover your password</h3>
                                                <p>Fill in your e-mail address below and we will send
                                                    you an email with further instructions.</p>
                                            </div>
                                            <form action="#" method="post" name="forgotForm"
                                                  class="forgotForm">
                                                <div class="form-group wrap-input">
                                                    <input type="email" name="username"
                                                           class="form-control"
                                                           placeholder="Email address">
                                                    <span class="focus-input"></span>
                                                </div>
                                                <div class="form-group">
                                                    <button class="btn btn-lg btn-primary btn-block"
                                                            type="submit">Recover your password
                                                    </button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                    <!--Row-->

                    <!-- </div>
                </div> -->

                </div>
            </div>
        </div>
    </div>

    <!-- /Encoderultimate Wrapper -->
@endsection
@push('script')
    <script src="{{ asset('assets/js/plugin/jquery.min.js') }}"></script>
    <!-- bootstrap JavaScript -->
    <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
    <script src="{{asset('assets/js/login/custom.js')}}"></script>
@endpush
