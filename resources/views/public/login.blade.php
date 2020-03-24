<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Collga | Login</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <link href="{{ asset('css/style.css') }}" rel="stylesheet">
        <link rel="stylesheet" href="{{asset('assets/public/font-awesome/css/font-awesome.min.css')}}">
        <meta name="csrf-token" content="{{ csrf_token() }}">

    </head>
    <body>
        <div class="full-width">
            <div class="row">
            
                <div class="col-md-7 bg1">
                    <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img class="d-block w-100" src="{{asset('assets/public/asset/img/landing/login-business-1.jpg')}}" class="bg" alt="First slide">
                            </div>
                            <div class="carousel-item">
                                <img class="d-block w-100" src="{{asset('assets/public/asset/img/landing/login-business-2.jpg')}}" class="bg" alt="Second slide">
                            </div>
                            <div class="carousel-item">
                                <img class="d-block w-100" src="{{asset('assets/public/asset/img/landing/login-business-3.jpg')}}" class="bg" alt="Third slide">
                            </div>
                        </div>
                    </div>
                </div>
                 <div class="col-md-5" style="background: transparent url('{{asset('assets/public/bga.png')}}') 0% 0% no-repeat padding-box;opacity: 0.57; background-size: cover;">
                 <br/><br/>
                    <a href="{{url('/')}}" class="back1"> <i class="fas fa-chevron-left"></i> Back</a>
                    <div class="citizen-login-logo justify-content-center">
                        <img src="assets/public/icon-logo.png" alt="Logo collga" class="img-fluid">
                        
                    </div> 
                     <div class="citizen-login-logo1">
                        <p class="">
                            <p class="text22"><b>Business Account</b></p>
                            <p class="text33 justify-content-center">For Odeda LGA business with RC Number</p>
                        </p>
                    </div>
                    <div class="optionlc"> 
                        <form>
                            <div class="form-group">
                                 <input type="email" class="form-control11" placeholder="   Email Address">
                            </div>
                            <div class="form-group">
                                 <input type="password" class="form-control11" placeholder="   Your Password">
                            </div>
                        </form>
                    </div>
            </div> 
        </div>
        <script src="{{ asset('js/app.js') }}" defer></script>
    </body>
</html>