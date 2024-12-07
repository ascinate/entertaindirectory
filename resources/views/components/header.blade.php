<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="author" content="marhansolutions.com" />
    <title>Entertainment directory | Home</title>
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  
    <link href="https://cdn.jsdelivr.net/npm/remixicon@4.3.0/fonts/remixicon.css" rel="stylesheet"/>

    <link href="{{asset('css/all.min.css')}}" rel="stylesheet">
    <link href="{{asset('css/style.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('css/owl.carousel.min.css')}}" />
    <link rel="stylesheet" href="{{asset('css/owl.theme.default.min.css')}}"/>
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/2.1.8/css/dataTables.bootstrap5.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/jquery.fancybox.min.css') }}">
  </head>

<body>

  <header class="float-start w-100">
 
    <nav class="navbar navbar-expand-lg navbar-light">
      <div class="container">
        <a class="navbar-brand me-5" href="{{ URL::to('/') }}">
          <img alt="logo" src="{{asset('images/logo.png')}}"/>
        </a>
        <button data-bs-toggle="offcanvas" data-bs-target="#mobile-menu" class="navbar-toggler text-white" type="button">
          <i class="ri-bar-chart-horizontal-line"></i>
       </button>
       
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav ms-auto ms-lg-0 me-lg-auto mb-2 mb-lg-0">
           
            <li class="nav-item">
              <a class="nav-link" href="{{ URL::to('/') }}"> Home </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ URL::to('/listing') }}"> Artists </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ URL::to('/adlisting') }}"> Ads </a>
            </li>
            
           
            <!-- <li class="nav-item">
              <a class="nav-link" href="{{ URL::to('/news-details') }}">News</a>
            </li> -->
           
  
          </ul>

          <div class="rights-menus">
            <ul class="d-flex align-items-center">
              @php
              $userLoggedIn = session('user_id') != ''; 
              @endphp
              @if (!$userLoggedIn)
              <li>
                <a href="{{URL::to('login')}}" class="btn login-btn">Login</a>
              </li>
              @endif

              @if ($userLoggedIn)
              <li class="nav-item dropdown ms-3 d-flex justify-content-end userli">
                  <a class="nav-link user-uiy d-flex align-items-center dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  <figure class="user-profiles w-100">
                  @if (Auth::user()->profile_photo)
                    <img alt="user" loading="lazy" class="cover-img" 
                        src="{{ Auth::user()->profile_photo ? asset('profile_photo/' . Auth::user()->profile_photo) : asset('default-profile.png') }}"/>
                        @else
                      <img alt="user" class="cover-img" src="{{ asset('images/avatar.jpg') }}" />
                  @endif
                  </figure>
                  <span class="users_name">{{ Auth::user()->name }}</span>
                  </a>
                  <ul class="dropdown-menu menus-drps" aria-labelledby="navbarDropdown">
                    
                    <li><a class="dropdown-item" href="{{ Auth::check() && Auth::user()->user_type === 'General' ? route('general', ['id' => Auth::user()->id]) : route('profile', ['id' => Auth::user()->id]) }}">
                          My Account
                      </a></li>
                    
                    <li><a class="dropdown-item" href="{{ URL::to('logout') }}">Logout</a></li>
  
                  </ul>
              </li>
              @endif
            </ul>
          </div>
          
          
        </div>
      </div>
    </nav>
  </header>
