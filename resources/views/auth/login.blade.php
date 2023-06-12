{{-- @extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Login') }}</div>

<div class="card-body">
    <form method="POST" action="{{ route('login') }}">
        @csrf

        <div class="row mb-3">
            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

            <div class="col-md-6">
                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
        </div>

        <div class="row mb-3">
            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

            <div class="col-md-6">
                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                @error('password')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
        </div>

        <div class="row mb-3">
            <div class="col-md-6 offset-md-4">
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                    <label class="form-check-label" for="remember">
                        {{ __('Remember Me') }}
                    </label>
                </div>
            </div>
        </div>

        <div class="row mb-0">
            <div class="col-md-8 offset-md-4">
                <button type="submit" class="btn btn-primary">
                    {{ __('Login') }}
                </button>

                @if (Route::has('password.request'))
                <a class="btn btn-link" href="{{ route('password.request') }}">
                    {{ __('Forgot Your Password?') }}
                </a>
                @endif
            </div>
        </div>
    </form>
</div>
</div>
</div>
</div>
</div>
@endsection --}}





<!DOCTYPE html>
<html lang="en">



<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>hello meeting</title>
    <!-- Tab image -->
    <link rel="icon" href="{{ asset('images/metaverse-etp-logo.png') }}" type="image/x-icon">
    <!-- Custom CSS file Lonk -->
    <link rel="stylesheet" href="{{ asset('css/Support&Services-Style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style-slide-swiper.css') }}">
    <link rel="stylesheet" href="{{ asset('css/swiper-bundle.min.css') }}">
    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <!-- Custom JS file Lonk -->
    <link rel="stylesheet" href="{{ asset('vanilla-tilt.js') }}">
    <link rel="stylesheet" href="{{ asset('js folder/style.js') }}">
    <!-- Font Awesome CDN Link  -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/yourcode.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
    <!-- Render All Elements Normally -->
    <link rel="stylesheet" href="{{ asset('css/normalize.css') }}">
    <link rel="stylesheet" href="{{ asset('css/all.min.css') }}">

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Admin Login</title>

    <!-- Custom fonts for this template-->
    <link href="{{ asset('admin-asset/vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="{{ asset('admin-asset/css/sb-admin-2.min.css') }}" rel="stylesheet">

</head>

<body class="bg-gradient-primary">

    <div class="container">

        <!-- Outer Row -->
        <div class="row justify-content-center">

            <div class="col-xl-10 col-lg-12 col-md-9">

                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                        <div class="row" style="justify-content: center;">
                            <video src="{{ asset('video/istock-1028550030_preview.mp4') }}" class="Video-Learning-Style card-video" autoplay loop muted playsinline style="width: 106%;
    opacity: 0.7;
    position: absolute;"></video>
                            <div class="col-lg-6" style="background: #385fced4;
    border-radius: 50px;
    height: 500px;
    margin-top: 20px;
    margin-bottom: 20px;">
                                <div class="p-5">
                                    <div class="text-center">
                                        <h1 class="h4 text-gray-900 mb-4">Welcome Back!</h1>
                                    </div>
                                    <form method="GET" action="{{ route('LoginSup') }}" class="user">
                                        @csrf

                                        <div class="form-group">
                                            <input id="email" type="email" class="form-control form-control-user @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="Enter Email Address...">

                                            @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>

                                        <div class="form-group">
                                            <input id="password" type="password" class="form-control form-control-user @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="Enter The Password">
                                            @error('password')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>


                                        <div class="form-group">
                                            <div class="custom-control custom-checkbox small">
                                                <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                                <label class="form-check-label" for="remember" style="color: aquamarine;">
                                                    {{ __('Remember Me') }}
                                                </label>
                                            </div>
                                        </div>

                                        <button type="submit" class="btn btn-primary btn-user btn-block" style="background-color: aqua;
    color: black;
    font-size: inherit;">
                                            {{ __('Login') }}
                                        </button>

                                        <hr>
                                        {{-- <a href="index.html" class="btn btn-google btn-user btn-block">
                                            <i class="fab fa-google fa-fw"></i> Login with Google
                                        </a>
                                        <a href="index.html" class="btn btn-facebook btn-user btn-block">
                                            <i class="fab fa-facebook-f fa-fw"></i> Login with Facebook
                                        </a> --}}
                                    </form>
                                    <div class="text-center">
                                        @if (Route::has('password.request'))
                                        <a class="btn btn-link" href="{{ route('password.request') }}">
                                            {{ __('Forgot Your Password?') }}
                                        </a>
                                        @endif
                                    </div>
                                    {{-- <div class="text-center">
                                        <a class="small" href="{{ route('register') }}">Create an Account!</a>
                                </div> --}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </div>

    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="{{ asset('admin-asset/vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('admin-asset/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

    <!-- Core plugin JavaScript-->
    <script src="{{ asset('admin-asset/vendor/jquery-easing/jquery.easing.min.js') }}"></script>

    <!-- Custom scripts for all pages-->
    <script src="{{ asset('admin-asset/js/sb-admin-2.min.js') }}"></script>
   <!-- footer section starts  -->
   <section class="footer" id="blogs">

<div class="box-container">

    <div class="box">
        <h3> About </h3>
        <a href="#" class="links"> <i class="fas fa-arrow-right"></i> Hello-Meeting Blog </a>
        <a href="#" class="links"> <i class="fas fa-arrow-right"></i> Customers </a>
        <a href="#" class="links"> <i class="fas fa-arrow-right"></i> Our Team </a>
        <a href="#" class="links"> <i class="fas fa-arrow-right"></i> Career</a>
        <a href="#" class="links"> <i class="fas fa-arrow-right"></i> Integrations </a>
        <a href="#" class="links"> <i class="fas fa-arrow-right"></i> ESG Responsibility </a>
        <a href="#" class="links"> <i class="fas fa-arrow-right"></i> Media Kit </a>

    </div>

    <div class="box">
        <h3>contact info</h3>
        <a href="#" class="links"> <i class="fas fa-phone"></i> +970-595-326217 </a>
        <a href="#" class="links"> <i class="fas fa-phone"></i> +972-594-126281 </a>
        <a href="#" class="links"> <i class="fas fa-envelope"></i> HelloMeeting@gmail.com </a>
        <a href="#" class="links"> <i class="fas fa-map-marker-alt"></i> Palestine, Gaza Strip</a>
    </div>

    <div class="box">
        <h3>Support</h3>
        <a href="#" class="links"> <i class="fas fa-arrow-right"></i> Support Center </a>
        <a href="#" class="links"> <i class="fas fa-arrow-right"></i> Learning Center </a>
        <a href="#" class="links"> <i class="fas fa-arrow-right"></i> Feedback </a>
        <a href="#" class="links"> <i class="fas fa-arrow-right"></i> Accessibility</a>
        <a href="#" class="links"> <i class="fas fa-arrow-right"></i> Privacy, Security, Legal </a>
        <a href="#" class="links"> <i class="fas fa-arrow-right"></i> Policies </a>
    </div>

    <div class="box">
        <form>
            <label class="language" for="2">Language</label>
            <br>
            <br>
            <select class="option" name="">
            <option>English</option>
            <option>Arabic</option>
        </select>
        </form>
        <br>
        <form>
            <label class="language" for="2">Currency</label>
            <br>
            <br>
            <select class="option" name="">
            <option>US Dollars $</option>
            <option>EUR €</option>
            <option>USDT (TRC20)</option>
        </select>
        </form>
        <!-- <p>subscribe for latest updates</p>
<input type="email" placeholder="your email" class="email">
<input type="submit" value="subscribe" class="btn"> -->
        <div class="share">
            <a href="#" class="fab fa-facebook-f"></a>
            <a href="#" class="fab fa-twitter" id="twitter"></a>
            <a href="#" class="fab fa-instagram"></a>
            <a href="#" class="fab fa-linkedin"></a>
            <a href="#" class="fab fa-youtube"></a>
            <a href="#" class="fab fa-wordpress"></a>
        </div>
        <img src="{{ asset('images/payment.png') }}" class="payment-img" alt="">

    </div>

</div>

<div class="credit">
    <p>copyright is reserved <i class="far fa-copyright "></i> 2023 -</p><span>  Hello Meeting Community </span>
</div>

</section>
<!-- footer section ends -->
</body>

</html>