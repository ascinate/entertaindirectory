<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="author" content="marhansolutions.com" />
    <title>Entertainment directory | Login</title>
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  
    <link href="https://cdn.jsdelivr.net/npm/remixicon@4.3.0/fonts/remixicon.css" rel="stylesheet"/>

    <link href="css/all.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <link rel="stylesheet" href="css/owl.carousel.min.css" />
    <link rel="stylesheet" href="css/owl.theme.default.min.css"/>
    
  </head>

<body>

<div class="logins-divus">
    <div class="container position-relative logings">
        <div class="row justify-content-between  align-items-center">
            <div class="col-lg-7 text-center pe-lg-5">
                <a href="{{ URL::to('/') }}"> <img alt="logo" loading="lazy" src="images/logo.png"/> </a>
                <h2 class="elementor-heading-title elementor-size-default mt-5 text-white l-heading">Welcome to Velvet</h2>
                <h5 class="mt-5 text-white"> There are many variations of passages of Lorem Ipsum available, but the majority have suffered alterat </h5>
            </div>
            <div class="col-lg-5 ">
                <div class="login-and-register">
                   
                    <nav class="mb-3">
                        <div class="nav nav-tabs" id="nav-tab" role="tablist">
                            <div class="nav-link active" data-bs-toggle="tab" data-bs-target="#login" aria-controls="nav-home" aria-selected="true">Login</div>
                            <div class="nav-link" data-bs-toggle="tab" data-bs-target="#register" aria-controls="nav-profile" aria-selected="false">Register</div>
                        </div>
                    </nav>
                    <div class="tab-content" id="nav-tabContent">
                        <div class="tab-pane fade show active" id="login" role="tabpanel">
                        <form action="{{ route('login') }}" method="POST" id="login-form">
                            @csrf
                            @if (session('error'))
                                <div class="alert alert-danger">
                                    {{ session('error') }}
                                </div>
                            @endif

                            @if ($errors->any())
                                    <div class="alert alert-danger">
                                        <ul>
                                            @foreach ($errors->all() as $error)
                                                <li>{{ $error }}</li>
                                            @endforeach
                                        </ul>
                                    </div>
                                @endif
                            <input type="text" name="email" placeholder="Username" required>
                            <input type="password" name="password" placeholder="Password" required>
                            <button type="submit" class="prolancer-btn">Login</button>
                        </form>

                            <a href="#" class="mt-4 pt-2 d-block lost-password" alt="Lost password">
                                              Lost password               </a>
                        </div>
                        <div class="tab-pane fade" id="register" role="tabpanel">
                            <form  action="{{ URL::to('/register') }}" method="post">
                                @csrf
                                
                                <div class="row">
                                    <div class="col-md-6">
                                        <input type="text" name="firstname" placeholder="First name">
                                    </div>
                                    <div class="col-md-6">
                                        <input type="text" name="lastname" placeholder="Last name">
                                    </div>
                                </div>
                                <input type="email" name="email" placeholder="Email">
                                <input type="password" name="password" placeholder="Password">
                                <div class="d-flex align-items-center mb-3">
                                    <h6 class="text-dark m-0 me-3">Register as</h6>
                                    <div class="form-check newradio m-0 mt-2">
                                        <input class="form-check-input" type="radio" name="user_type" id="flexRadioDefault1" value="Performer">
                                        <label class="form-check-label" for="flexRadioDefault1">
                                            Performer 
                                        </label>
                                    </div>
                                    <div class="form-check newradio m-0 ms-3 mt-2">
                                        <input class="form-check-input" type="radio" name="user_type" id="flexRadioDefault2" value="General">
                                        <label class="form-check-label" for="flexRadioDefault2">
                                            General
                                        </label>
                                    </div>
                                </div>
                                <button type="submit" id="register-submit" class="prolancer-btn">Register</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="elementor-background-overlay"></div>
    <div class="elementor-shape elementor-shape-bottom" >
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1000 100" preserveAspectRatio="none">
<path class="elementor-shape-fill" opacity="0.33" d="M473,67.3c-203.9,88.3-263.1-34-320.3,0C66,119.1,0,59.7,0,59.7V0h1000v59.7 c0,0-62.1,26.1-94.9,29.3c-32.8,3.3-62.8-12.3-75.8-22.1C806,49.6,745.3,8.7,694.9,4.7S492.4,59,473,67.3z"></path>
<path class="elementor-shape-fill" opacity="0.66" d="M734,67.3c-45.5,0-77.2-23.2-129.1-39.1c-28.6-8.7-150.3-10.1-254,39.1 s-91.7-34.4-149.2,0C115.7,118.3,0,39.8,0,39.8V0h1000v36.5c0,0-28.2-18.5-92.1-18.5C810.2,18.1,775.7,67.3,734,67.3z"></path>
<path class="elementor-shape-fill" d="M766.1,28.9c-200-57.5-266,65.5-395.1,19.5C242,1.8,242,5.4,184.8,20.6C128,35.8,132.3,44.9,89.9,52.5C28.6,63.7,0,0,0,0 h1000c0,0-9.9,40.9-83.6,48.1S829.6,47,766.1,28.9z"></path>
</svg>		
    </div>
</div>









<script src="js/bootstrap.bundle.min.js" ></script>
<script src="js/jquery.min.js" ></script>
<script src="js/custom.js" ></script>
<script src="js/owl.carousel.min.js"></script>
<script src="js/owl.carousel.min.js"></script>



</body>
</html>
