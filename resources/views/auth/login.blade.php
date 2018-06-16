@extends('layouts.app')
<title>Login | Metalman Auto</title>

@section('content')

<div id="overlay"> <img src="{{asset('img/preloader.gif')}}" alt=""> </div>
<div id="metalman">
    <div class="login-page">
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
                <div class="title">
                    <div class="logo"><a href="index.html"><img src="{{asset('img/main-logo.png')}}" alt=""></a></div>
                    <h1>Welcome! <br> Login to Metalman Auto</h1>
                    <form method="POST" action="{{ route('login') }}">
                    	@csrf
                       <div class="form-group">
                         <input type="text" placeholder="Email Address" name="email" class="form-control border-bottom-0 active" required>
                         @if ($errors->has('email'))
                            <span class="invalid-feedback">
                                <strong>{{ $errors->first('email') }}</strong>
                            </span>
                        @endif
                       </div>
                       <div class="form-group">
                        <input type="password" placeholder="Password"  name="password" class="form-control" required>
                       		@if ($errors->has('password'))
                                <span class="invalid-feedback">
                                    <strong>{{ $errors->first('password') }}</strong>
                                </span>
                            @endif
                       </div>
                       <div class="form-group">
                        	<a href="{{ route('password.request') }}">
                                Forgot Password?
                            </a>
                       </div>
                       <div class="from-group">
                       		<button type="submit" class="btn btn-btn-default">
                                {{ __('Login') }}
                            </button>
                            <!-- <input type="submit" value="Login" class="btn btn-default"> -->
                       </div>   
                    </form>
                </div>
            </div>
            </div>
        </div>
    </div>
</div>
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
@endsection