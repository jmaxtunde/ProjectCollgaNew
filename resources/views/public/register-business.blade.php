<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Collga | Business Registration</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="{{ asset('css/app2.css') }}" rel="stylesheet">
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
                   <a href="{{url('/')}}" class="back1" style="text-decoration:none"> <img src="{{asset('assets/public/back.png')}}"> Back</a>
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
                                <input type="text" class="form-control11" id="formGroupExampleInput" placeholder="   Business RC Number">
                            </div>
                           <div class="form-row">
                                <div class="col">
                                <input type="email" class="form-control11" placeholder="   Email Address">
                                </div>
                                <div class="col">
                                <input type="email" class="form-control11" placeholder="   Confirm Email Address">
                                </div>
                            </div><br/>
                            <div class="form-group">
                                <input type="text" class="form-control11" id="formGroupExampleInput" placeholder="  Mobile Phone">
                            </div>
                            <div class="form-row">
                                <div class="col">
                                <input type="password" class="form-control11" placeholder="   Your Password">
                                </div>
                                <div class="col">
                                <input type="password" class="form-control11" placeholder="   Confirm Password ">
                                </div>
                            </div><br/>
                            <div class="form-inline">
                                <input type="radio" name="imgsel"  class="form-control justify-content" value="" checked="checked" /> &nbsp;&nbsp;&nbsp;I agree to the terms and conditions
                            </div>
                            <div class="form-group">
                                <button type="button" class="form-control btnlogincitizen"><b>Continue</b></button>
                            </div>
                        </form>
                    </div>
            </div> 
        </div>
        <script src="{{ asset('js/app2.js') }}" defer></script>
    </body>
</html>