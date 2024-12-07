<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <meta name="author" content="ascinatetech.com" />
        <title>Entertainment - Dashboard</title>
        <link rel="shortcut icon" href="{{ asset('favicon.ico') }}" type="image/x-icon">
        <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Lexend+Deca:wght@100..900&family=Nunito+Sans:ital,opsz,wght@0,6..12,200..1000;1,6..12,200..1000&display=swap" rel="stylesheet"/>

        <link href="https://cdn.jsdelivr.net/npm/remixicon@4.3.0/fonts/remixicon.css" rel="stylesheet"/>

        <link href="{{asset('css/all.min.css')}}" rel="stylesheet">
        <link href="{{asset('css/style.css')}}" rel="stylesheet">
        <link rel="stylesheet" href="{{asset('css/owl.carousel.min.css')}}" />
        <link rel="stylesheet" href="{{asset('css/owl.theme.default.min.css')}}"/>
        <link rel="stylesheet" href="https://cdn.datatables.net/2.1.5/css/dataTables.bootstrap5.css"/>

    </head>
    <body class="new-bgc">

        <main class="float-start w-100 listing-main">
            <aside class="slider-bar admins-slider float-start">

            <a href="{{ URL::to('/') }}" class="logo-admins">
                <img alt="user" src="{{asset('images/logo-uni-white.png')}}"/>
            </a>

            <div class="menus-al mt-5">
                <h5 class="mt-0"> Menu </h5>
                <hr class="mb-0"/>
                <a href="{{ URL::to('dashboard') }}" class="d-block cm-menu active-menu"> <span> <i class="ri-home-smile-fill"></i> </span> <span> Dashborad </span> </a>
                <a href="{{ URL::to('lists') }}" class="d-block cm-menu"> <span> <i class="ri-archive-drawer-fill"></i> </span> <span> My listings </span> </a>


                <a href="{{ URL::to('favorite-lists') }}" class="d-block cm-menu"> <span> <i class="ri-file-paper-2-fill"></i> </span> <span> Favorite Lists </span> </a>
                <a href="{{ URL::to('user/contact') }}" class="d-block cm-menu"> <span> <i class="ri-user-3-fill"></i> </span> <span> My Account </span> </a>
                <a href="{{ URL::to('notification') }}" class="d-block cm-menu"> <span> <i class="ri-question-answer-fill"></i> </span> <span> Notification </span> </a>
                <a href="{{ URL::to('contact') }}" class="d-block cm-menu"> <span> <i class="ri-question-fill"></i> </span> <span> Help </span> </a>





            </div>

            </aside>
            <section class="body-part01 right-bd-admin float-end">
                <header class="float-start listing-subheader w-100 px-lg-4">

                    <nav class="navbar navbar-expand-lg navbar-light">
                    <div class="container-fluid">
                        <a class="navbar-brand d-lg-none" href="index.html">
                        <img alt="logo" src="images/logo-uni.png"/>
                        </a>







                        <button class="navbar-toggler border-0 p-0 " type="button" data-bs-toggle="offcanvas" data-bs-target="#mobile-menu">
                        <span class="navbar-toggler-icon"></span>
                        </button>

                        <div class="collapse navbar-collapse" id="navbarSupportedContent">

                        <div class="right-linksj ms-auto">
                            <ul class="d-flex align-items-center">

                            <li class="d-flex align-items-center">


                                <a href="#" class="btn notific-btn pt-2 mx-4">
                                    <img alt="sn" src="{{asset('images/notification-3-line.png')}}"/>
                                </a>


                                <div class="dropdown dropd-wnals">
                                <button class="d-flex align-items-center dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                    <span class="pic-user">
                                        <img alt="uer" class="cover-img" src="{{asset('images/manages-st4.jpg')}}"/>
                                    </span>
                                    <span class="namesd ms-2"> {{ session('user_name') }} </span>
                                </button>
                                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                    <li><a class="dropdown-item" href="{{ URL::to('dashboard') }}">Dashboard</a></li>
                                    <li><a class="dropdown-item" href="{{ URL::to('logout') }}">Logout</a></li>
                                </ul>
                                </div>


                                <a href="{{ URL::to('addpost') }}" class="btn add-btn ms-5"> Post a Add listing <i class="ri-add-fill"></i>  </a>


                            </li>
                            </ul>
                        </div>

                        </div>
                    </div>
                    </nav>
                </header>
