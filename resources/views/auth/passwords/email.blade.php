<!doctype html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Reset Password | Metalman Auto</title>
<link rel="shortcut icon" href="{{asset('/img/ico/favicon.png')}}">
<link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">
<link href="{{asset('css/bootstrap-reset.css')}}" rel="stylesheet">
<link rel="stylesheet" href="{{asset('/css/swiper.min.css')}}" type="text/css">
<link rel="stylesheet" href="{{asset('/css/slider.css')}}" type="text/css">
<link rel="stylesheet" href="{{asset('/css/custom.css')}}" type="text/css">
</head>

<body class="login-page">
<div id="overlay"> <img src="{{asset('/img/preloader.gif')}}" alt=""> </div>
<body class="login-page">
<div id="metalman">
    <div class="login-page reset-page">
        <div class="row">
            <div class="col-xl-7 col-lg-7 col-md-12">
                <div class="swiper-container">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide" style="background-image:url({{asset('/img/login-slider/slider1.jpg')}}"></div>
                        <div class="swiper-slide" style="background-image:url({{asset('/img/login-slider/slider2.jpg')}}"></div>
                        <div class="swiper-slide" style="background-image:url({{asset('/img/login-slider/slider3.jpg')}}"></div>
                        <div class="swiper-slide" style="background-image:url({{asset('/img/login-slider/slider4.jpg')}}"></div>
                        <div class="swiper-slide" style="background-image:url({{asset('/img/login-slider/slider5.jpg')}}"></div>
                        <div class="swiper-slide" style="background-image:url({{asset('/img/login-slider/slider6.jpg')}}"></div>
                        <div class="swiper-slide" style="background-image:url({{asset('/img/login-slider/slider7.jpg')}}"></div>
                        <div class="swiper-slide" style="background-image:url({{asset('/img/login-slider/slider8.jpg')}}"></div>
                        <div class="swiper-slide" style="background-image:url({{asset('/img/login-slider/slider9.jpg')}}"></div>
                        <div class="swiper-slide" style="background-image:url({{asset('/img/login-slider/slider10.jpg')}}"></div>
                        <div class="swiper-slide" style="background-image:url({{asset('/img/login-slider/slider11.jpg')}}"></div>
                    </div>
                    <!-- Add Pagination -->
                    <div class="swiper-button-next"></div>
                    <div class="swiper-button-prev"></div>
                </div>
            </div>
            <div class="col-xl-5 col-lg-5 col-md-12 login-form">
                <div class="wrapper">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                <div class="title">
                    <div class="logo"><a href="reset.html"><img src="{{asset('img/main-logo.png')}}" alt=""></a></div>
                    <h1>Forgot Your Password?</h1>
                    <form method="POST" action="{{ route('password.email') }}" aria-label="{{ __('Reset Password') }}">
                        @csrf
                       <div class="form-group">
                            <input id="email" type="email" placeholder="Email Address" class="form-control active" name="email" value="{{ old('email') }}" required>
                       </div>
                       <div class="from-group">
                            <input type="submit" value="Reset Password" class="btn btn-default">
                       </div>
                       <div class="form-group">
                         <p>Login to Metalman Auto.</p><a href="{{url('/login')}}">Click Here</a>
                       </div>   
                    </form>
                </div>
            </div>
            </div>
        </div>
    </div>    
</div>
<script src="{{ asset('js/core/jquery-3.2.1.min.js') }}"></script>
    <script src="{{ asset('js/core/popper.js') }}"></script>
    <script src="{{ asset('js/core/bootstrap.min.js') }}"></script>
<script src="{{ asset('js/swiper.min.js') }}"></script>
<script type = 'text/javascript'>
    var Swiper = new Swiper('.swiper-container', {
        nextButton: '.swiper-button-next',
        prevButton: '.swiper-button-prev',
    });

    $(document).ready(function(){
        $('.form-control').click(function() {
            $('.form-control.active').removeClass('active');
            $(this).addClass('active');
        });
    }); 

    setTimeout(function() {
        $('#overlay').fadeOut();
        $('#overlay').delay(150).fadeOut('slow');
      }, 400);
</script>
</body>
</html>