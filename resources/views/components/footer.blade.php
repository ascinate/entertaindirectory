<footer class="float-start w-100">
  <div class="container">
     <div class="row row-cols-1 row-cols-sm-2 row-cols-lg-4 gy-4 gy-lg-0">
        <div class="col">
           <a href="{{ URL::to('/') }}">
            <img alt="logo" src="{{asset('images/logo.png')}}">
           </a>
           <ul class="socli mt-5">
             <li>
              <a href="#" class="btn"> <i class="ri-facebook-fill"></i> </a>
              <a href="#" class="btn"> <i class="ri-twitter-x-line"></i> </a>
              <a href="#" class="btn"> <i class="ri-linkedin-fill"></i> </a>
             </li>
           </ul>
        </div>
        <div class="col">
          <div class="comon-ft">
             <h5 class="text-white"> Company </h5>
             <ul class="mt-4">
               <li>
                 <a href="#"> About </a>
               </li>
               <li>
                 <a href="#"> Contact  </a>
               </li>
             </ul>
          </div>
        </div>
        <div class="col">
           <div class="comon-ft">
              <h5 class="text-white"> Products </h5>
              <ul class="mt-4">
                <li>
                  <a href="#"> Night club artist </a>
                </li>
                <li>
                  <a href="#"> Music Band </a>
                </li>
                <li>
                  <a href="#"> Movie Singer </a>
                </li>
                <li>
                  <a href="#"> Solo Artists </a>
                </li>
              </ul>
           </div>
        </div>


        <div class="col">
          <div class="comon-ft">
             <h5 class="text-white"> Contact &amp; Help </h5>
             <ul class="mt-4">
               <li>
                 <a href="#"> Login </a>
               </li>
               <li>
                 <a href="#"> FAQ  </a>
               </li>
               <li>
                <a href="#"> Register  </a>
               </li>

             </ul>
          </div>
        </div>

     </div>
     <hr class="mt-5">
     <div class="row row-cols-2 mt-4">
         <div class="col">
           <p class="text-white"> Copyright © 2024 Velvet. </p>
         </div>
         <div class="col d-grid justify-content-end">
          <ul>
            <li>
              <a href="#" class="text-white">Terms </a>
              <a href="#" class="ms-3 text-white">Privacy Policy </a>
            </li>
          </ul>

         </div>
     </div>
  </div>
</footer>

<div class="offcanvas offcanvas-start mobile-menu-div" id="mobile-menu">
  <div class="offcanvas-body p-0">
    <div class="tops-setions d-flex align-items-center justify-content-between w-100">
      <a href="index.html" class="logo-side">
         <img alt="logo" src="{{asset('images/logo-dark.png')}}"/>
      </a>
      <button type="button" class="close-menu btn" data-bs-dismiss="offcanvas">
          <i class="ri-close-large-line"></i>
      </button>
    </div>
    <div class="head-contact">


       <div class="mobile-menu-sec">
          <ul class="list-unstyled">


            <li>
              <a href="{{ URL::to('/') }}">Home</a>
            </li>
            <li>
              <a href="{{ URL::to('/listing') }}">Artists</a>
            </li>
            <li>
              <a href="{{ URL::to('/adlisting') }}">Ads</a>
            </li>
              @php
              $userLoggedIn = session('user_id') != '';
              @endphp
              @if (!$userLoggedIn)
              <li>
                <a href="{{URL::to('login')}}" class="btn login-btn-01">Login</a>
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


</div>


<script src="{{asset('js/jquery.min.js')}}" ></script>

<script src="{{asset('js/bootstrap.bundle.min.js')}}" ></script>
<script src="{{asset('js/custom.js')}}" ></script>
<script src="{{asset('js/owl.carousel.min.js')}}"></script>
<script src="{{asset('js/jquery.fancybox.min.js')}}"></script>
<script src="https://cdn.datatables.net/2.1.8/js/dataTables.js"></script>
<script src="https://cdn.datatables.net/2.1.8/js/dataTables.bootstrap5.js"></script>
<script src="https://cdn.datatables.net/responsive/3.0.3/js/dataTables.responsive.js"></script>





<script src="js/jquery.fancybox.min.js" ></script>

<!-- <script>
  $(document).ready(function() {
      $('#review-submit').on('submit', function() {
        $("#examplemeg").modal('show');
    });
  });
</script> -->

<script>
  $(document).ready(function() {
      $('#review-submit').click(function(){
        $("#examplemeg").modal('show');
    });
  });
</script>

<script>
  $('[data-fancybox="audio-gallery"]').fancybox({
  afterShow: function (instance, current) {
    $(".fancybox-content iframe").addClass("my-iframe");
  }
});
window.onload = function() {
    var iframe = document.querySelector('my-iframe');

    // Wait for the iframe to load
    iframe.onload = function() {
      // Access the iframe document
      var iframeDocument = iframe.contentDocument || iframe.contentWindow.document;

      // Add a class to the iframe's body
      iframeDocument.body.classList.add('new-class');
    };
  };
</script>

<script>
function readURL(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();
        reader.onload = function(e) {
            $('.imagePreview').css('background-image', 'url('+e.target.result +')');
            $('.imagePreview').hide();
            $('.imagePreview').fadeIn(650);
        }
        reader.readAsDataURL(input.files[0]);
    }
}
$("#imageUpload").change(function() {
    readURL(this);
});


function readupURL(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();
        reader.onload = function(e) {
            $('.imagePreview-cover').css('background-image', 'url('+e.target.result +')');
            $('.imagePreview-cover').hide();
            $('.imagePreview-cover').fadeIn(650);
        }
        reader.readAsDataURL(input.files[0]);
    }
}
$("#imageUploadcover").change(function() {
    readupURL(this);
});

new DataTable('#example2', {
    responsive: true
});
</script>

<script>
function readURL(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();
        reader.onload = function(e) {
            $('.imagePreview').css('background-image', 'url('+e.target.result +')');
            $('.imagePreview').hide();
            $('.imagePreview').fadeIn(650);
        }
        reader.readAsDataURL(input.files[0]);
    }
}
$("#imageUpload").change(function() {
    readURL(this);
});


function readupURL(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();
        reader.onload = function(e) {
            $('.imagePreview-cover').css('background-image', 'url('+e.target.result +')');
            $('.imagePreview-cover').hide();
            $('.imagePreview-cover').fadeIn(650);
        }
        reader.readAsDataURL(input.files[0]);
    }
}
$("#imageUploadcover").change(function() {
    readupURL(this);
});
</script>


<!-- only add portfolio -->

<script>

$(function() {
    $('#fildsets').change(function(){
        $('.fileoptions').hide();
        $('#' + $(this).val()).show();
    });

    $('input[name="urladdress"]').on('change', function() {
		if($('#video-preview').length) {
			$('#video-preview').attr('src', $(this).val());
		} else {
			$(this).after($('<iframe id="video-preview" class="video-filsd" src="' + $(this).val() + '" />'));
		}
	});
});
</script>
<script type="text/javascript">
$(document).ready(function() {
    input.onchange = function(){
  var sound = document.getElementById('sound');
  document.getElementById('shows-name').style.display = 'block';
  var reader = new FileReader();
  reader.onload = function(e) {
    sound.src = this.result;
    sound.controls = true;
    sound.play();
    };
  reader.readAsDataURL(this.files[0]);
}


$(document).ready(function() {
   $('#btn-example-file-reset').on('click', function() {
      $('#input').val('');
      $('#shows-name').hide();
      $('#shows-name').css('display', 'none');
   });
});



});

</script>
<script>
  var loadFile = function(event) {
    var output = document.getElementById('output');
    document.getElementById('shows-img').style.display = 'block';
    output.src = URL.createObjectURL(event.target.files[0]);
    output.onload = function() {
      URL.revokeObjectURL(output.src) // free memory
    }
  };

  $(document).ready(function() {
   $('#sh-off').on('click', function() {
      $('#input-img').val('');
      $('#shows-img').hide();
      $('#shows-img').css('display', 'none');
   });
});

</script>

<script>
    function getVals(){
	// Get slider values
	let parent = this.parentNode;
	let slides = parent.getElementsByTagName("input");
	  let slide1 = parseFloat( slides[0].value );
	  let slide2 = parseFloat( slides[1].value );
	// Neither slider will clip the other, so make sure we determine which is larger
	if( slide1 > slide2 ){ let tmp = slide2; slide2 = slide1; slide1 = tmp; }

	let displayElement = parent.getElementsByClassName("rangeValues")[0];
		displayElement.innerHTML = "$" + slide1 + " - $" + slide2;
  }

  window.onload = function(){
	// Initialize Sliders
	let sliderSections = document.getElementsByClassName("range-slider");
		for( let x = 0; x < sliderSections.length; x++ ){
		  let sliders = sliderSections[x].getElementsByTagName("input");
		  for( let y = 0; y < sliders.length; y++ ){
			if( sliders[y].type ==="range" ){
			  sliders[y].oninput = getVals;
			  // Manually trigger event first time to display values
			  sliders[y].oninput();
			}
		  }
		}
  }
</script>

<script>
    $(document).ready(function () {
        $('#country').on('change', function () {
            var countryId = $(this).val();
            var countryName = $('#country option:selected').text();
            $('input[name="country_name"]').val(countryName);

            $('#state').html('<option value="">Select State</option>');
            $('#city').html('<option value="">Select City</option>');
            if (countryId) {
                $.ajax({
                  url: '/get-states/' + countryId,
                    type: 'GET',
                    success: function (data) {
                        $.each(data.states, function (key, state) {
                            $('#state').append('<option value="' + state.id + '">' + state.name + '</option>');
                        });
                    }
                });
            }
        });

        $('#state').on('change', function () {
            var stateId = $(this).val();
            var stateName = $('#state option:selected').text();
            $('input[name="state_name"]').val(stateName);

            $('#city').html('<option value="">Select City</option>');
            if (stateId) {
                $.ajax({
                  url: '/get-cities/' + stateId,
                    type: 'GET',
                    success: function (data) {
                        $.each(data.cities, function (key, city) {
                            $('#city').append('<option value="' + city.id + '">' + city.name + '</option>');
                        });
                    }
                });
            }
        });

        $('#city').on('change', function () {
            var cityName = $('#city option:selected').text();
            $('input[name="city_name"]').val(cityName);
        });
    });
</script>
