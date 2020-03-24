<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Collga | Pre-registration</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="{{ asset('css/app2.css') }}" rel="stylesheet">
        <link href="{{ asset('css/style.css') }}" rel="stylesheet">
        <link rel="stylesheet" href="{{asset('assets/public/font-awesome/css/font-awesome.min.css')}}">
        <meta name="csrf-token" content="{{ csrf_token() }}">

    </head>
    <body>
        <div class="full-width">
            <div class="row">
            
                <div class="col-md-6 bg1">
                    <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img class="d-block w-100" src="{{asset('assets/public/asset/img/landing/preregister-1.jpg')}}" class="bg" alt="First slide">
                            </div>
                            <div class="carousel-item">
                                <img class="d-block w-100" src="{{asset('assets/public/asset/img/landing/preregister-2.jpg')}}" class="bg" alt="Second slide">
                            </div>
                            <div class="carousel-item">
                                <img class="d-block w-100" src="{{asset('assets/public/asset/img/landing/preregister-3.jpg')}}" class="bg" alt="Third slide">
                            </div>
                        </div>
                    </div>
                </div>
                 <div class="col-md-6" style="background: transparent url('{{asset('assets/public/bga.png')}}') 0% 0% no-repeat padding-box;opacity: 0.57; background-size: cover;">
                 <br/><br/>
                    <a href="{{url('/')}}" class="back1" style="text-decoration:none"> <img src="{{asset('assets/public/back.png')}}"> Back</a>
                    <div class="preregistrationlogo justify-content-center">
                        <img src="assets/public/preregistration-logo.png" alt="Logo pre registration" class="img-fluid">
                        
                    </div> 
                     <div class="preregistrationlogo1 justify-content-center">
                        <p class="text2"><b>Let's get you started</b></p>
                        <p class="text3">Register as a citizens or a business owner.</p>
                    </div> 
                    <div class="form-inline option">
                        <div class="op" style="background: transparent url('{{asset('assets/public/myt.png')}}') 0% 0% no-repeat padding-box; background-size: cover; width: 209px;height: 245px;">
                            <a href="{{route('register-citizen')}}" style="text-decoration:none">
                                <center><img src="{{asset('assets/public/ecitizen.png')}}" alt="Logo book" class="img-fluid logo1icon"></center>
                                <p class="text4">e-citizens</p>
                                <p class="text5">This account is for Odeda LG citizens only. <br/>You will need your LGA ID number to register.</p>
                            </a>
                        </div>
                        <div style="background: transparent url('{{asset('assets/public/myt.png')}}') 0% 0% no-repeat padding-box; background-size: cover; width: 209px;height: 245px;">
                            <a href="{{route('register-business')}}" style="text-decoration:none">
                                <center><img src="{{asset('assets/public/ebusiness.png')}}" alt="Logo book" class="img-fluid logo1icon"></center>
                                <p class="text4">e-business</p>
                                <p class="text5">This account is for businesses registered in Odeda LGA. <br/>You will need your business registration number.</p>
                            </a>
                        </div>
                    </div>
                 </div>
            </div> 
        </div>
        <script src="{{ asset('js/app2.js') }}" defer></script>
    </body>
</html>