<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="author" content="ascinatetech.com" />
    <title>Entertainment Directory - Add Advertisment </title>
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
    <link rel="stylesheet" href="https://cdn.datatables.net/2.1.8/css/dataTables.dataTables.css"/>
    <link rel="stylesheet" href="https://cdn.datatables.net/fixedcolumns/5.0.3/css/fixedColumns.dataTables.css"/>
    <link rel="stylesheet" href="https://cdn.datatables.net/select/2.1.0/css/select.dataTables.css"/>

    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

  </head>

<body class="admin-ds-part">

  

    <header class="float-start listing-subheader w-100 ">
 
        <nav class="navbar navbar-expand-lg navbar-light">
          <div class="container-fluid">
            <a class="navbar-brand" href="index.html">
                <i class="ri-home-4-fill"></i> Entertainment Directory
            </a>
          
            <button class="navbar-toggler border-0 p-0 text-white" type="button" id="show-side">
              <i class="fas fa-bars"></i> </a>
            </button>
    
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
             
              <div class="right-linksj ms-auto">
                 <ul class="d-flex align-items-center">
                 
                   <li class="d-flex align-items-center">
                    
                    <a href="add-post.html" class="btn lg-outs p-0 ms-5"> <i class="ri-logout-box-r-line"></i> Logout   </a>
    
                     
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
                    <h3> Ad Sample </h3>
                </div>
                
               
                <form name="frmadd" action="{{ route('ad.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="righty-divu spo-apce py-4">
                        <div class="d-flex align-items-center">
                            <h3 class="ms-sub"> Add Sample </h3>
                        </div>
                        @if (session('success'))
                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                                {{ session('success') }}
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>
                        @endif

                        <div class="tansb froms-inputs comiut-tabs crm-tables mt-4">
                            <div class="row gy-4">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label for="adTitle">Ad Title</label>
                                        <input type="text" class="form-control" id="ad_title" name="ad_title" required>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label for="adSize">Ad Size</label>
                                        <select class="form-control" id="ad_size" name="ad_size" required>
                                            <option value="">Ad Size</option>
                                            <option value="1243 X 250 PX">1243 X 250 PX</option>
                                            <option value="300 X 265 PX">300 X 265 PX</option>
                                            <option value="344 X 307 PX">344 X 307 PX</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label for="adPosition">Ad Position</label>
                                        <select class="form-control" id="ad_position" name="ad_position" required>
                                            <option value="">Ad Position</option>
                                            <option value="Before Blogpost">Before Blogpost</option>
                                            <option value="After Filter">After Filter</option>
                                            <option value="After Sidebar">After Sidebar</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label for="adPage">Ad Page</label>
                                        <select class="form-control" id="ad_page" name="ad_page" required>
                                            <option value="">Ad Page</option>
                                            <option value="Home">Home</option>
                                            <option value="Performer Listing">Performer Listing</option>
                                            <option value="Performer Details">Performer Details</option>
                                            <option value="Ads">Ads</option>
                                            <option value="Blog">Blog</option>
                                            <option value="Contact">Contact</option>
                                            <option value="FAQ">FAQ</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label for="image">Ad Placeholder</label>
                                        <input type="file" class="form-control" id="image" name="image" accept="image/*">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label for="adPrice">Ad Price</label>
                                        <input type="text" class="form-control" id="ad_price" name="ad_price" required>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label for="asDuration">Ad Duration</label>
                                        <input type="text" class="form-control" id="ad_duration" name="ad_duration" required>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label for="adText">Ad Description</label>
                                        <textarea class="form-control" id="description" name="description" rows="4"></textarea>
                                    </div>
                                </div>
                            </div>

                            <button class="btn btn-submits btn-primary my-5"> Add Sample </button>
                        </div>
                    </div>
                </form>


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

<script src="https://cdn.datatables.net/2.1.8/js/dataTables.js"></script>

<script src="https://cdn.datatables.net/fixedcolumns/5.0.3/js/dataTables.fixedColumns.js"></script>
<script src="https://cdn.datatables.net/fixedcolumns/5.0.3/js/fixedColumns.dataTables.js"></script>
<script src="https://cdn.datatables.net/select/2.1.0/js/dataTables.select.js"></script>
<script src="https://cdn.datatables.net/select/2.1.0/js/select.dataTables.js"></script>

<script src="https://cdn.datatables.net/responsive/3.0.3/js/dataTables.responsive.js"></script>


<script>
  new DataTable('#example-datea-t1', {
    columnDefs: [
        {
            orderable: true,
            render: DataTable.render.select(),
            targets: 0
        }
    ],
    fixedColumns: {
        start: 2
    },
    order: [[1, 'asc']],
    paging: true,
    scrollCollapse: true,
    scrollX: false,
    scrollY: 300,
    select: {
        style: 'os',
        selector: 'td:first-child'
    }
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

  $(document).ready(function(){
      $("#show-side").click(function(){
        $(".admins-slider").toggleClass("intro-show");
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

  
  </script>


<script type="text/javascript">
jQuery(document).ready(function($) {
    'use strict';

    const selected = $(".selected");
    const optionsContainer = $(".options-container");
    const hiddenInput = $("#selected_parent_cat_id");

    selected.on('click', function(event) {
        optionsContainer.toggleClass("active");
        event.stopPropagation();
    });

    optionsContainer.on('click', '.option', function(event) {
        event.stopPropagation();
        
        const labelContent = $(this).find("label").html();
        const selectedValue = $(this).find("input").val();

        selected.html(labelContent);
        hiddenInput.val(selectedValue);

        optionsContainer.removeClass("active");
    });

    $(document).on('click', function() {
        optionsContainer.removeClass("active");
    });
});
</script>




</body>
</html>