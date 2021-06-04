<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">

        <title>Blog Website</title>

        <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,800" rel="stylesheet" /> <!-- https://fonts.google.com/specimen/Open+Sans?selection.family=Open+Sans -->
        <link href="{{url('template/css/all.min.css')}}" rel="stylesheet" /> <!-- https://fontawesome.com/ -->
        <link href="{{url('template/slick/slick.css')}}" rel="stylesheet" /> <!-- https://kenwheeler.github.io/slick/ -->
        <link href="{{url('template/slick/slick-theme.css')}}" rel="stylesheet" />
        <link href="{{url('template/css/bootstrap.min.css')}}" rel="stylesheet" /> <!-- https://getbootstrap.com -->
        <link href="{{url('template/css/templatemo-new-vision.css')}}" rel="stylesheet" />
        <link rel="stylesheet" href="http://cdn.bootcss.com/toastr.js/latest/css/toastr.min.css"> 
        <!--
        
        New Vision Template
        
        https://templatemo.com/tm-542-new-vision
        
        -->
    </head>
    <body>
        <!-- Page Header -->
        <div class="container-fluid">
            <div class="tm-site-header">
                <div class="row">
                    <div class="col-12 tm-site-header-col">
                        <div class="tm-site-header-left">
                            <i class="far fa-2x fa-eye tm-site-icon"></i>
                            <h1 class="tm-site-name">New Vision</h1>
                        </div>
                        <div class="tm-site-header-right tm-menu-container-outer">

                            <!--Navbar-->
                            <nav class="navbar navbar-expand-lg">

                                <!-- Collapse button -->
                                <button class="navbar-toggler toggler-example" type="button" data-toggle="collapse" data-target="#navbarSupportedContent1"
                                        aria-controls="navbarSupportedContent1" aria-expanded="false" aria-label="Toggle navigation"><span class="dark-blue-text"><i
                                            class="fas fa-bars fa-1x"></i></span></button>

                                <!-- Collapsible content -->
                                <div class="collapse navbar-collapse tm-nav" id="navbarSupportedContent1">

                                    <!-- Links -->
                                    <ul class="navbar-nav mr-auto">
                                        <li class="nav-item
                                            @if(Request::path() == '/')
                                            {{'active'}}
                                            @endif
                                            ">
                                            <a class="nav-link tm-nav-link" href="{{url('/')}}">Home <span class="sr-only">(current)</span></a>
                                        </li>
                                        <li class="nav-item 
                                            @if(Request::path() == 'ourCompany')
                                            {{'active'}}
                                            @endif">
                                            <a class="nav-link tm-nav-link" href="{{url('/ourCompany')}}">Our Company</a>
                                        </li>
                                        <li class="nav-item
                                            @if(Request::path() == 'services')
                                            {{'active'}}
                                            @endif">
                                            <a class="nav-link tm-nav-link" href="{{url('/services')}}">Services</a>
                                        </li>
                                        <li class="nav-item
                                            @if(Request::path() == 'contact')
                                            {{'active'}}
                                            @endif">
                                            <a class="nav-link tm-nav-link" href="{{url('/contact')}}">Contact</a>
                                        </li>
                                    </ul>
                                    <!-- Links -->

                                </div>
                                <!-- Collapsible content -->

                            </nav>
                            <!--/.Navbar-->
                        </div>
                    </div>
                </div>
            </div>

            @yield('content')
        </div>
        <script src="{{url('template/js/jquery-3.4.1.min.js')}}"></script>
        <script src="{{url('template/slick/slick.min.js')}}"></script>
        <script src="{{url('template/js/bootstrap.min.js')}}"></script>
        <script src="{{url('template/js/templatemo-script.js')}}"></script>
        <script src="http://cdn.bootcss.com/toastr.js/latest/js/toastr.min.js"></script>
        {!! Toastr::message() !!}

    </body>
</html>