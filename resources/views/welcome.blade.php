<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Collga | Home</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="{{ asset('css/app2.css') }}" rel="stylesheet">
        <link href="{{ asset('css/style.css') }}" rel="stylesheet">
        <link rel="stylesheet" href="{{asset('assets/public/font-awesome/css/font-awesome.min.css')}}">
        <meta name="csrf-token" content="{{ csrf_token() }}">

    </head>
    <body>
        <div class="full-width">
            <nav class="navbar navbar-expand-md navbar-fixed-top navbar-dark bg-dark main-nav">
                <ul class="nav navbar-nav mx-auto">
                    <li class="nav-item"><a class="nav-link text-white" href="#">Overview |</a></li>
                    <li class="nav-item"><a class="nav-link text-white" href="#">Type of Input |</a></li>
                    <li class="nav-item"><a class="nav-link text-white" href="#">Media |</a></li>
                     <li class="nav-item"><a class="nav-link text-white" href="#">Contact </a></li>
                </ul>
            </nav>            
            <nav class="navbar navbar-expand-lg navbar-light bg-white">
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="container">
                        <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
                            <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                                <li class="nav-item active">
                                    <a class="nav-link textnavbar2" href="#">E-Governement  |<span class="sr-only">(current)</span></a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link textnavbar2" href="#">Document  |</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link textnavbar2" href="#"> Register and acts</a>
                                </li>
                            </ul>
                            <form class="form-inline my-2 my-lg-0">
                                <a href="{{route('preregister')}}" class="btn  my-2 my-sm-0 btnregister">REGISTER</a>
                                <a href="{{route('login')}}" class="btn  my-2 my-sm-0 btnlogin">LOGIN</a>
                            </form>
                        </div>
                     </div>
            </nav>
            <div class="container-image">
                <img src="{{asset('assets/public/asset/img/landing/landing.jpg')}}" class="bg" alt="Responsive image">
                <div class="centered">
                <form class="in-line">
                    <label class="labgov">Empowering modern digital government</label>
                    <input type="text" name="search" placeholder="   Search" class=" form-control searchinput">
                    <button type="submit" class="searchbtn"><i class="fa fa-search"></i></button>
                    
                 </form>                    
                </div>
                 <div class="top-centered ">
                    <img src="{{asset('assets/public/icon-logo.png')}}" alt="Logo Collga" class="img-fluid logoproperty">
                 </div>
            </div>
            <div class="footer justify-content-center form-inline">
                <p class="text-white txt"> In order to use all services from </p>
                <img src="assets/public/logo-white.png" alt="Logo Collga white" class="img-fluid logowhite">
                <p class="text-white textleft txt"> you have to login into your account </p>
            </div>
                        <!--Carousel Wrapper-->
            <div class="container">
            <div id="multi-item-example" class="carousel slide carousel-multi-item" data-ride="carousel">

            <!--Controls-->
            <div class="controls-top">
            <br/>
                <a class="btn-floating" href="#multi-item-example" data-slide="prev"><i class="fas fa-chevron-left"></i></a>
                <button class="btn btn-success"> E-SERVICES</button>
                <a class="btn-floating" href="#multi-item-example" data-slide="next"><i
                    class="fas fa-chevron-right"></i></a>
                    
            </div>
            <br/>
            <!--/.Controls-->

            <!--Indicators-->
           

            <!--Slides-->
            <div class="carousel-inner" role="listbox">

                 <!--First slide-->
                <div class="carousel-item active">
                <div class="row">
                <div class="col-md-3">
                    <div class="card bg-light mb-2">
                    <div class="card-body">
                        <div class="btn-icon">
                            <img src="{{asset('assets/public/allservices.png')}}" alt="Logo book" class="img-fluid logoicon">
                        </div>
                        <h4 class="cardtitle">All Services</h4>
                        <p class="cardtext">List of all e-services integrated into the portal.<br/><br/></p>

                    </div>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="card bg-light mb-2">
                    <div class="card-body">
                        <div class="btn-icon">
                            <img src="{{asset('assets/public/epayment.png')}}" alt="Logo book" class="img-fluid logoicon">
                        </div>
                        <h4 class="cardtitle">E-Payment</h4>
                        <p class="cardtext">List of all grouped e-services on e-payments.<br/><br/></p>

                    </div>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="card bg-light mb-2">
                    <div class="card-body">
                        <div class="btn-icon">
                            <img src="{{asset('assets/public/business.png')}}" alt="Logo book" class="img-fluid logoicon">
                        </div>
                        <h4 class="cardtitle">Business Registration</h4>
                        <p class="cardtext">List of all e-services integrated into the portal.</p>

                    </div>
                    </div>
                </div>
                
                <div class="col-md-3">
                    <div class="card bg-light mb-2">
                    <div class="card-body">
                        <div class="btn-icon">
                            <img src="{{asset('assets/public/banking.png')}}" alt="Logo book" class="img-fluid logoicon">
                        </div>
                        <h4 class="cardtitle">Banking and Insurance</h4>
                        <p class="cardtext">List of all grouped e-services on banking and insurance.</p>

                    </div>
                    </div>
                </div>
                
                <div class="col-md-3">
                    <div class="card bg-light mb-2">
                    <div class="card-body">
                        <div class="btn-icon">
                            <img src="{{asset('assets/public/life.png')}}" alt="Logo book" class="img-fluid logoicon">
                        </div>
                        <h4 class="cardtitle">Grant & Special Permit</h4>
                        <p class="cardtext">List of all grouped e-services for granting license.<br/><br/></p>

                    </div>
                    </div>
                </div>
                
                <div class="col-md-3">
                    <div class="card bg-light mb-2">
                    <div class="card-body">
                        <div class="btn-icon">
                            <img src="{{asset('assets/public/life.png')}}" alt="Logo book" class="img-fluid logoicon">
                        </div>
                        <h4 class="cardtitle">Executives Authorities</h4>
                        <p class="cardtext">List of all e-services integrated into the portal by local executives authorities.</p>

                    </div>
                    </div>
                </div>
                
                <div class="col-md-3">
                    <div class="card bg-light mb-2">
                    <div class="card-body">
                        <div class="btn-icon">
                            <img src="{{asset('assets/public/appeals.png')}}" alt="Logo book" class="img-fluid logoicon">
                        </div>
                        <h4 class="cardtitle">Appeals</h4>
                        <p class="cardtext">List of all grouped e-services on appeals to bodies.<br/><br/></p>

                    </div>
                    </div>
                </div>
                
                <div class="col-md-3">
                    <div class="card bg-light mb-2">
                    <div class="card-body">
                        <div class="btn-icon">
                            <img src="{{asset('assets/public/reference.png')}}" alt="Logo book" class="img-fluid logoicon">
                        </div>
                        <h4 class="cardtitle">Reference Documents</h4>
                        <p class="cardtext">List of all grouped e-services on - electronic reference.</p>

                    </div>
                    </div>
                </div>
            </div>
                </div>
                <!--second slide-->
                <div class="carousel-item">
                <div class="row">
                <div class="col-md-3">
                    <div class="card bg-light mb-2">
                    <div class="card-body">
                        <div class="btn-icon">
                            <img src="{{asset('assets/public/healthcare.png')}}" alt="Logo book" class="img-fluid logoicon">
                        </div>
                        <h4 class="cardtitle">Healthcare</h4>
                        <p class="cardtext">Apply for a hygienic certificate to domestic and imported products.</p>

                    </div>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="card bg-light mb-2">
                    <div class="card-body">
                        <div class="btn-icon">
                            <img src="{{asset('assets/public/education.png')}}" alt="Logo book" class="img-fluid logoicon">
                        </div>
                        <h4 class="cardtitle">Education</h4>
                        <p class="cardtext">Applications submitted for admi- ssion, search of ID number of bachelors'.</p>

                    </div>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="card bg-light mb-2">
                    <div class="card-body">
                        <div class="btn-icon">
                            <img src="{{asset('assets/public/socialwalfare.png')}}" alt="Logo book" class="img-fluid logoicon">
                        </div>
                        <h4 class="cardtitle">Social Welfare</h4>
                        <p class="cardtext">Account schedule on temporary disability, maternity allowance.<br/><br/></p>

                    </div>
                    </div>
                </div>
                
                <div class="col-md-3">
                    <div class="card bg-light mb-2">
                    <div class="card-body">
                        <div class="btn-icon">
                            <img src="{{asset('assets/public/communication.png')}}" alt="Logo book" class="img-fluid logoicon">
                        </div>
                        <h4 class="cardtitle">Communication Services</h4>
                        <p class="cardtext">Disclosure of ongoing call, apply for mobile authentication.</p>

                    </div>
                    </div>
                </div>
                
                <div class="col-md-3">
                    <div class="card bg-light mb-2">
                    <div class="card-body">
                        <div class="btn-icon">
                            <img src="{{asset('assets/public/payment.png')}}" alt="Logo book" class="img-fluid logoicon">
                        </div>
                        <h4 class="cardtitle">Online Payment</h4>
                        <p class="cardtext">Payment of electricity bills via the Internet, Payment of taxes.<br/><br/></p>

                    </div>
                    </div>
                </div>
                
                <div class="col-md-3">
                    <div class="card bg-light mb-2">
                    <div class="card-body">
                        <div class="btn-icon">
                            <img src="{{asset('assets/public/taxes.png')}}" alt="Logo tax" class="img-fluid logoicon">
                        </div>
                        <h4 class="cardtitle">Taxes</h4>
                        <p class="cardtext">Online registration of commercial legal entities, Apply for recon- ciliation acts</p>

                    </div>
                    </div>
                </div>
                
                <div class="col-md-3">
                    <div class="card bg-light mb-2">
                    <div class="card-body">
                        <div class="btn-icon">
                            <img src="{{asset('assets/public/legal.png')}}" alt="Logo book" class="img-fluid logoicon">
                        </div>
                        <h4 class="cardtitle">Legal Services</h4>
                        <p class="cardtext">Booking an appointment with judicial authorities and notaries.<br/><br/></p>

                    </div>
                    </div>
                </div>
                
                <div class="col-md-3">
                    <div class="card bg-light mb-2">
                    <div class="card-body">
                        <div class="btn-icon">
                            <img src="{{asset('assets/public/issuance.png')}}" alt="Logo book" class="img-fluid logoicon">
                        </div>
                        <h4 class="cardtitle">Issuance Special Permit</h4>
                        <p class="cardtext">Issuance of a special permit (license) to some types of activity.</p>

                    </div>
                    </div>
                </div>
            </div>
                </div>
                 <!--Second slide-->

               
                
                <!--/.Third slide-->

            </div>
            <!--/.Slides-->

            </div>
            <!--/.Carousel Wrapper-->
           </div>
           <div class="logos">
                <div class="container justify-content-center form-inline">
                    <img src="{{asset('assets/public/ogun-logo.png')}}" alt="Logo book" class="img-fluid logoicon1">
                    <img src="{{asset('assets/public/collga-logo.png')}}" alt="Logo book" class="img-fluid">
                </div>
           </div>
           <div class="footer1 justify-content-center form-inline">
                <p class=" text-footer1 text-center">OGUN STATE GOVERNMENT, NIGERIA</p>
                <p class="social">
                    <a href=""><i class="fa fa-facebook text-white sizesocial"></i></a>
                    <a href=""><i class="fa fa-twitter text-white" ></i></a>
                    <a href=""><i class="fa fa-instagram text-white"></i></a>
                </p>
            </div>
            
        </div>
        <script src="{{ asset('js/app2.js') }}" defer></script>
        
    </body>
</html>
