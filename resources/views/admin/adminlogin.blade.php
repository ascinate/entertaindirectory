<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="author" content="ascinatetech.com" />
    <title>Entertainment- Login </title>
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lexend+Deca:wght@100..900&family=Nunito+Sans:ital,opsz,wght@0,6..12,200..1000;1,6..12,200..1000&display=swap" rel="stylesheet"/>

    <link href="https://cdn.jsdelivr.net/npm/remixicon@4.3.0/fonts/remixicon.css" rel="stylesheet"/>

    <link href="{{asset('css/all.min.css')}}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('css/owl.carousel.min.css')}}" />
    <link rel="stylesheet" href="{{asset('css/owl.theme.default.min.css')}}"/>

    <link rel="stylesheet" href="https://cdn.datatables.net/2.1.5/css/dataTables.bootstrap5.css"/>

    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

  </head>

<body class="admin-ds-part-new1 d-grid justify-content-center align-content-center">

  <div class="fomas-div">
     <div class="forms-admins">
         <a href="#" class="text-center d-block"> <img alt="logo" src="{{asset('images/logo2.png')}}"/> </a>
          <form name="frm" action="{{ URL::to('adminlogin') }}" method="POST" class="pt-3">
           @csrf
            <div class="login-divs">
            @if (session('error'))
                <div class="alert alert-danger">
                    {{ session('error') }}
                </div>
            @endif

                <div class="form-group">
                    <label class="form-label"> Username </label>
                    <input type="email" class="form-control bg-light" name="email" placeholder="Username" required />
                </div>
                <div class="form-group mt-3">
                    <label class="form-label"> Password </label>
                    <input type="password" class="form-control bg-light" name="password" placeholder="Password" required/>
                </div>
                <div class="form-group mt-3">
                
                <input type="submit" class="btn btn-svad w-100" value="Login"/>
                </div>
                <div class="form-group d-sm-flex align-items-center justify-content-between mt-3">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                        <label class="form-check-label" for="flexCheckDefault">
                            Remember me
                        </label>
                    </div>

                    <a href="#" class="btn btn-fogets"> Forgot your password? </a>
                    
                </div>
            </div>
         </form>
     </div>
  </div>


<script src="{{asset('js/bootstrap.bundle.min.js')}}" ></script>
<script src="{{asset('js/jquery.min.js')}}" ></script>
<script src="{{asset('js/custom.js')}}" ></script>



</body>
</html>
