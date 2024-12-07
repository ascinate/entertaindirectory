<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="author" content="ascinatetech.com" />
    <title>Entertainment - Dashboard </title>
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
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

    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

  </head>

<body class="admin-ds-part">

  

    <header class="float-start listing-subheader w-100 ">
 
        <nav class="navbar navbar-expand-lg navbar-light">
          <div class="container-fluid">

          

            <a class="navbar-brand" href="index.html">
                <i class="ri-home-4-fill"></i> Entertainment
            </a>
          
            
    
            
    
          
    
            <button class="navbar-toggler border-0 p-0 text-white" type="button" id="show-side">
              <i class="fas fa-bars"></i> </a>
            </button>
    
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
             
              <div class="right-linksj ms-auto">
                 <ul class="d-flex align-items-center">
                 
                   <li class="d-flex align-items-center">
                    
                    <a href="{{ URL::to('admin/logout') }}" class="btn lg-outs p-0 ms-5"> <i class="ri-logout-box-r-line"></i> Logout   </a>
    
                     
                   </li>
                 </ul>
              </div>
              
            </div>
          </div>
        </nav>
      </header>


<main class="float-start w-100 listing-main">
  


<x-adminsidebar/>

    <section class="body-part01 right-bd-admin float-end">
        
      

        <div class="features-body min-height">
            <div class="headiering-steps">

                <div class="headings-setps bg-white py-3 d-flex align-items-center justify-content-between">
                    <h3> Dashboard </h3>
                    <a href="#" class="btn btn-suc"> <i class="ri-settings-2-line"></i> Settings </a>
                </div>
               
                
               <div class="righty-divu spo-apce py-4">
                 
                  <div class="accordion row gx-lg-3 justify-content-between mx-lg-0" id="accordionPanelsStayOpenExample">
                     <div class="col-lg-4">
                        <div class="accordion-item p-0">
                            <h2 class="accordion-header">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseOne" aria-expanded="true" aria-controls="panelsStayOpen-collapseOne">
                                At a glance
                            </button>
                            </h2>
                            <div id="panelsStayOpen-collapseOne" class="accordion-collapse collapse show" aria-labelledby="panelsStayOpen-headingOne">
                            <div class="accordion-body">
                                <p> Running on osclass v8.2.1, using <a href="#"> Sigma Osclass Theme </a> for front office and Omega Admin Theme for backoffice. This website is using 0 plugins, 0 are active,
                                    0 are disabled and 0 are not installed.</p>
                            </div>
                            </div>
                        </div>

                        <div class="accordion-item p-0 mt-4">
                            <h2 class="accordion-header">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#parel-01">
                                Listings activity
                            </button>
                            </h2>
                            <div id="parel-01" class="accordion-collapse collapse show">
                                <div class="accordion-body">
                                    <ul>
                                        <li>
                                            Published in last 24 hours: <strong>0</strong>
                                        </li>
                                        <li>
                                            Published in last 7 days: <strong> 1 </strong> 
                                        </li>
                                        <li>
                                           Overall published: <strong> 2 </strong>
                                        </li>
                                    </ul>
                                    <h6 class="my-3"> <strong> Recently published </strong> </h6>
                                    <ul>
                                        <li>
                                            15. Oct, 17:59 <small class="text-success mx-1"> <i class="fas fa-circle"></i> </small> <a href="#"> Web Development </a>
                                            
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item p-0 mt-4">
                            <h2 class="accordion-header">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#parel-02">
                                Users activity
                            </button>
                            </h2>
                            <div id="parel-02" class="accordion-collapse collapse show">
                                <div class="accordion-body">
                                    <ul>
                                        <li>
                                            Registered in last 24 hours: <strong>0</strong>
                                        </li>
                                        <li>
                                            Registered in last 7 days: <strong> 0 </strong> 
                                        </li>
                                        <li>
                                            Overall registered: <strong> 0 </strong>
                                        </li>
                                    </ul>
                                    <h6 class="my-3"> <strong> Recently registered </strong> </h6>
                                    <p class="mt-2"> No users has been found </p>
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item p-0 mt-4">
                            <h2 class="accordion-header">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#parel-03" aria-expanded="true" aria-controls="panelsStayOpen-collapseOne">
                                Listings by category
                            </button>
                            </h2>
                            <div id="parel-03" class="accordion-collapse collapse show">
                                <div class="accordion-body">
                                    
                                    <table class="table">
                                        <thead>
                                          <tr>
                                            <th scope="col"> For sale </th>
                                            <th scope="col">2 Listings</th>
                                          </tr>
                                        </thead>
                                        <tbody>
                                          <tr>
                                            <th scope="row">Animals</th>
                                            <td>1</td>
                                          </tr>
                                          <tr>
                                            <th scope="row">Computers - Hardware</th>
                                            <td>1</td>
                                          </tr>
                                         
                                        </tbody>
                                    </table>

                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="col-lg-8">
                      <div class="accordion-item p-0">
                        <h2 class="accordion-header">
                          <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#parel-04">
                            Listing statistics - last 14 days
                          </button>
                        </h2>
                        <div id="parel-04" class="accordion-collapse collapse show">
                          <div class="accordion-body">
                            <h6> Total number of listings: 2 </h6>
                             <canvas id="myChart"></canvas>
                          </div>
                        </div>
                      </div>


                      <div class="accordion-item p-0 mt-4">
                        <h2 class="accordion-header">
                          <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#parel-06">
                            User statistics - last 14 days
                          </button>
                        </h2>
                        <div id="parel-06" class="accordion-collapse collapse show">
                          <div class="accordion-body">
                            <h6> Total number of users: 0 </h6>
                             <canvas id="myChart2"></canvas>
                          </div>
                        </div>
                      </div>


                    </div>

                  </div>
               

               
               </div>
            </div>
        </div>
        
    </section>

 
</main>









<!-- mobile menu -->

<div class="offcanvas offcanvas-end mobile-menu-div" id="mobile-menu">
  <div class="offcanvas-header">
    
     <button type="button" class="close-menu" data-bs-dismiss="offcanvas">
      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-x-circle-fill" viewBox="0 0 16 16">
        <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM5.354 4.646a.5.5 0 1 0-.708.708L7.293 8l-2.647 2.646a.5.5 0 0 0 .708.708L8 8.707l2.646 2.647a.5.5 0 0 0 .708-.708L8.707 8l2.647-2.646a.5.5 0 0 0-.708-.708L8 7.293 5.354 4.646z"/>
      </svg>
     </button>
  </div>
  
      
    <div class="offcanvas-body">
      
      <div class="head-contact">
         <a href="index.html" class="logo-side">
         <img src="images/logo.png" alt="logo">
         </a>
        
         <div class="serahc-div d-flex mt-5 align-items-center w-100">
          <button name="submit" type="submit" class="btn btn-ser">
              <i class="ri-search-2-line"></i>
          </button>
          <input type="search" name="search" class="form-control" placeholder="Search topics, assignments, speeches..."/>
          
        </div>
        
         <div class="mobile-menu-sec mt-3">
            <ul class="list-unstyled">
              

              

             

              <li>
                <a href="#">University</a>
              </li>

              <li>
                <a href="#">High School </a>
              </li>

              <li>
                <a href="#">Book Notes</a>
              </li>
              <li>
                <a href="blog.html">blog</a>
              </li>
           

             

              

              <li>
                <a data-bs-toggle="modal" data-bs-dismiss="offcanvas" data-bs-target="#loginModal" class="btn login-btn"> 
                  <span>
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
                      <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
                      <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z"/>
                    </svg>
                  </span>
                  Login </a>
               </li>
               <li>
                <a href="signup.html" class="btn signup-btn"> Sign Up </a>
              </li>

            </ul>
         </div>
         
         <ul class="side-media list-unstyled">
            <li> <a href="#"> <i class="fab fa-facebook-f"></i> </a> </li>
            <li> <a href="#"> <i class="fab fa-twitter"></i> </a> </li>
            <li> <a href="#"> <i class="fab fa-google-plus-g"></i> </a> </li>
            <li> <a href="#"> <i class="fab fa-instagram"></i> </a> </li>
         </ul>
      </div>
    </div>
    
 
</div>






<div class="modal fade login-div-modal" id="lostpsModal">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-body">
        <form action="index.html" method="get">
            <div class="com-div-md">
              <h5 class="text-center mb-3"> Forget Your Password? </h5>
              <button type="button" class="close" data-bs-dismiss="modal">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-x" viewBox="0 0 16 16">
                  <path d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z"/>
                </svg>
              </button>
              <div class="login-modal-pn">
              <p> We'll email you a link to reset your password</p>
              <div class="cm-select-login mt-3">
                
                <div class="phone-div">
                  
                    <input type="email" name="email" class="form-control" placeholder="Enter Your Email" required />
                </div>
                
              
              </div>
              
              
              
              <button type="submit" class="btn continue-bn"> Send Me a password reset Link </button>
            </div>

            </div>
        </form>
      </div>
    
    </div>
  </div>
</div>


<script src="{{asset('js/bootstrap.bundle.min.js')}}" ></script>
<script src="{{asset('js/jquery.min.js')}}" ></script>
<script src="{{asset('js/custom.js')}}" ></script>
<script src="{{asset('js/owl.carousel.min.js')}}"></script>
<script src="{{asset('js/jPages.min.js')}}"></script>
<script src="{{asset('js/jquery.mixitup.min.js')}}"></script>
<script src="https://cdn.datatables.net/2.1.5/js/dataTables.js"></script>
<script src="https://cdn.datatables.net/2.1.5/js/dataTables.bootstrap5.js"></script>
<script src="https://cdn.datatables.net/responsive/3.0.3/js/dataTables.responsive.js"></script>



<script>
  new DataTable('#example-datea-t1', {
    responsive: true,
    pageLength: 10,
    searching:false,
    bPaginate: false,
  });
  
</script>

<script>
  $(document).ready(function(){
    $(".btn-typeo").click(function(){
      $(".slider-bar").toggleClass("open-sidebars");
    });
    $(".close-btn").click(function(){
      $(".slider-bar").removeClass("open-sidebars");
    });
    
  });


  (() => {
  const counter = document.querySelectorAll(".counter");
  // covert to array
  const array = Array.from(counter);
  // select array element
  array.map((item) => {
    // data layer
    let counterInnerText = item.textContent;

    let count = 1;
    let speed = item.dataset.speed / counterInnerText;
    function counterUp() {
      item.textContent = count++;
      if (counterInnerText < count) {
        clearInterval(stop);
      }
    }
    const stop = setInterval(() => {
      counterUp();
    }, speed);
  });
})();



  </script>


  <script>
    const ctx = document.getElementById('myChart');
  
    new Chart(ctx, {
      type: 'line',
      data: {
        labels: ['Red', 'Blue', 'Yellow', 'Green', 'Purple', 'Orange'],
        datasets: [{
          label: '# of Votes',
          data: [12, 19, 3, 5, 2, 3],
          borderWidth: 1
        }]
      },
      options: {
        scales: {
          y: {
            beginAtZero: true
          }
        }
      }
    });
  </script>


  <script>
    const ctxv = document.getElementById('myChart2');
  
    new Chart(ctxv, {
      type: 'line',
      data: {
        labels: ['Red', 'Blue', 'Yellow', 'Green', 'Purple', 'Orange'],
        datasets: [{
          label: '# of Votes',
          data: [12, 19, 3, 5, 2, 3],
          borderWidth: 1
        }]
      },
      options: {
        scales: {
          y: {
            beginAtZero: true
          }
        }
      }
    });


    $(document).ready(function(){
      $("#show-side").click(function(){
        $(".admin-ds-part .admins-slider").toggleClass("intro-show");
      });
    });
  </script>



</body>
</html>
