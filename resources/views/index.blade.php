<x-header/>
<section class="banner-section float-start w-100">
    <div class="container position-relative">
      <div class="col-lg-7">
                           
            <div class="banner-set">
              <h6 class="como-text"> Welcome to Velvet</h6>
               <h2 class="mt-4 text-white"> Book artists & promote events.
                </h2>
              <p class="text-white mt-4"> Velvet makes it easy to book live music for bars, 
                private parties, colleges, weddings & more.</p>
                <form action="{{ URL::to('search') }}" name="frmsearch" method="get">
                  <div class="search-divu-banner w-100 d-flex align-items-center mt-4">
                    <div class="lefts-se bg-white d-flex align-items-center">
                      <i class="ri-search-line"></i>
                      <input type="search" name="query" class="form-control" placeholder="Artist name, Song type and location"/>
                    </div>
                  
                    <button type="submit" class="btn btn-booking"> search now <i class="ri-arrow-right-fill"></i> </button>
                  </div>
               </form>
            </div>
        
         
      </div>

     
    </div>
    <div class="video-sec">
      <div class="video-bg"></div>
      
        <video src="images/7086284-hd_1366_720_25fps.mp4" muted autoplay loop playsinline></video>

    </div>
</section>


<main class="float-start main-bodys w-100">
  
  <section class="float-start w-100">
      <div class="container">
        <div class="d-flex align-items-center justify-content-between w-100">
          <h2 class="text-white h2-main">
            <small class="d-block">Shows
  
            </small> Amazing Artists / Most Popular </h2>

            <a href="{{ URL::to('/listing') }}" class="btn btn-alls"> See All <i class="ri-arrow-right-fill"></i> </a>
        </div>
        @php
         $performers=\DB::table('users')->where('user_type', 'performer')->get();
        @endphp
        <div class="products-slider owl-carousel owl-theme my-5">
          @foreach ($performers as $performer)
            <a href="{{ route('listing.details', $performer->id) }}">
              <div class="items-filters d-inline-block w-100 position-relative">
                  <i class="ri-heart-line"></i>
                  
                  <figure class="m-0">
                      @if($performer->profile_photo)
                          <img class="cover-img" loading="lazy" 
                              alt="{{ $performer->name }}" 
                              src="{{ asset('profile_photo/' . $performer->profile_photo) }}">
                      @else
                          <img class="cover-img" loading="lazy" 
                              alt="default avatar" 
                              src="{{ asset('images/avatar.jpg') }}">
                      @endif
                  </figure>


                  <div class="img-boxs">
                      
                      <h5 class="text-white mt-2">{{ $performer->name }}</h5>
                      <p class="mt-1">
                          <i class="ri-star-fill"></i> <i class="ri-star-fill"></i>
                          <i class="ri-star-fill"></i> <i class="ri-star-fill"></i> <i class="ri-star-half-line"></i>
                          <span>(4.5)</span>
                      </p>
                  </div>
              </div>
            </a>
          @endforeach
      </div>

         
      </div>
  </section>

  <section class="float-start w-100">
     <div class="container">
        <div class="d-flex align-items-center justify-content-between w-100">
          <h2 class="text-white h2-main">
            <small class="d-block">PERFORMERS

            </small> Whats new browse? </h2>

            
        </div>
        <div class="row row-cols-1 row-cols-lg-3 gy-4 gx-lg-5 mt-4">
          <div class="col">
             <a href="#" class="comon-ctas-01 position-relative d-inline-block w-100">
               <figure>
                <img alt="anme" loading="lazy" src="images/pexels-photo-2091383.webp"/>
               </figure>
               <div class="img-boxs">
                <h3 class="text-white"> Venues </h3>
                <p class="text-white"> For bars, nightclubs, restaurants, breweries, & vineyards </p>
                <span class="btn btn-btn-als mt-2"> <i class="ri-arrow-right-up-line"></i> </span>
              </div>
               
             </a>
          </div>

          <div class="col">
            <a href="#" class="comon-ctas-01 position-relative d-inline-block w-100">
              <figure>
               <img alt="anme" loading="lazy" src="images/pexels-photo-2034851.jpeg"/>
              </figure>
              <div class="img-boxs">
               <h3 class="text-white"> Colleges </h3>
               <p class="text-white"> For greek organizations & university program boards </p>
               <span class="btn btn-btn-als mt-2"> <i class="ri-arrow-right-up-line"></i> </span>
             </div>
              
            </a>
          </div>

          <div class="col">
            <a href="#" class="comon-ctas-01 position-relative d-inline-block w-100">
              <figure>
               <img alt="anme" loading="lazy" src="images/singer.webp"/>
              </figure>
              <div class="img-boxs">
               <h3 class="text-white"> Artists </h3>
               <p class="text-white"> For artists, managers, & agents </p>
               <span class="btn btn-btn-als mt-2"> <i class="ri-arrow-right-up-line"></i> </span>
             </div>
              
            </a>
          </div>


        </div>
     </div>
  </section>
  <section class="bhn-div-main float-start w-100 mb-5">
    <div class="container position-relative">
           <div class="row align-items-center">
              <div class="col-lg-7">
                
                 <h3 class="text-white"> The easiest way to book  </h3>
                 <p class="text-white mt-2"> Lorem Ipsum is simply dummy text of the printing and
                   typesetting industry. Lorem Ipsum has been the industry's standard..</p>
                  <a href="#" class="btn btn-booking mt-3"> Booking now </a>
              </div>
              <div class="col-lg-5">
                 <figure class="m-0">
                    <img alt="ser" src="images/ur-sing.png"/>
                 </figure>
              </div>
           </div>
    </div>
  </section>

  <section class="ads-spaces float-start w-100 mb-5">
    <div class="container position-relative">
           
        <a target="_blank" href="#" class="m-0">
          <img alt="ser" src="{{ asset('images/ads-space-01.png') }}"/>
        </a>
    </div>
  </section>

  <section class="float-start w-100 blogs-sections">
      <div class="container">
        <div class="d-flex align-items-center justify-content-between w-100">
          <h2 class="text-white h2-main">
            <small class="d-block"> News and Blogs 
  
            </small>  Guides for everything   </h2>
            <a href="#" class="btn btn-alls"> See All <i class="ri-arrow-right-fill"></i> </a>
        </div>
          
          <div class="blogs owl-carousel owl-theme mt-5">
            <a href="#" class="com-tesr02 position-relative d-inline-block w-100">
              <div class="blogs-post">
                 <img alt="sly" loading="lazy" src="images/blog1.webp">
                 <span class="dta btn">Mar 10 ,2024</span>
              </div>
              <div class="blogs-texr05 p-4">
                 <ul>
                   <li class="ms-0">
                     - Admin
                   </li>
                   <li>
                   - Singer
                   </li>
                 </ul>
                 <h5> Contrary to popular belief, Lorem Ipsum </h5>
                 <div class="monte"> Read more  </div>
              </div>
             </a>

             <a href="#" class="com-tesr02 position-relative d-inline-block w-100">
              <div class="blogs-post">
                 <img alt="sly" loading="lazy" src="images/blog2.webp">
                 <span class="dta btn">Mar 10 ,2024</span>
              </div>
              <div class="blogs-texr05 p-4">
                 <ul>
                   <li class="ms-0">
                     - Admin
                   </li>
                   <li>
                   - Singer
                   </li>
                 </ul>
                 <h5> Contrary to popular belief, Lorem Ipsum </h5>
                 <div class="monte"> Read more  </div>
              </div>
             </a>

             <a href="#" class="com-tesr02 position-relative d-inline-block w-100">
              <div class="blogs-post">
                 <img alt="sly" loading="lazy" src="images/blog3.webp">
                 <span class="dta btn">Mar 10 ,2024</span>
              </div>
              <div class="blogs-texr05 p-4">
                 <ul>
                   <li class="ms-0">
                     - Admin
                   </li>
                   <li>
                   - Singer
                   </li>
                 </ul>
                 <h5> Contrary to popular belief, Lorem Ipsum </h5>
                 <div class="monte"> Read more  </div>
              </div>
             </a>

          </div>
      </div>
  </section>

  <section class="testimonials-reviews float-start w-100">
    <div class="container">
      
      <h2 class="text-white h2-main">
        <small class="d-block"> Tesimonial

        </small> Our Customer Reviews </h2>
      <div class="occurs-filters2 owl-carousel owl-theme mt-5">
        <div class="comon-testi d-inline-block w-100">
          <p> Singer me ace my writing assignments every time. I would recommend their services to everyone. </p>
          <div class="d-flex align-items-center justify-content-between mt-4">
              <div class="user-div d-flex align-items-center">
                <figure class="m-0">
                 <img alt="ser" src="images/manages-st2.jpg">
                </figure>
                <h5 class="ms-3"> Smith Danis 
                  <span class="d-block"> CEO, GD pvt.ltd </span>
                </h5>
              </div>
              <span class="qoute-icou">
                <i class="ri-double-quotes-r"></i>
              </span>
          </div>
        </div>

        <div class="comon-testi d-inline-block w-100">
          <p> Established fact me ace my writing assignments every time. I would recommend their services to everyone. </p>
          <div class="d-flex align-items-center justify-content-between mt-4">
              <div class="user-div d-flex align-items-center">
                <figure class="m-0">
                 <img alt="ser" src="images/manages-st4.jpg">
                </figure>
                <h5 class="ms-3"> James Dan 
                  <span class="d-block"> Jb Investor, Japan </span>
                </h5>
              </div>
              <span class="qoute-icou">
                <i class="ri-double-quotes-r"></i>
              </span>
          </div>
        </div>

       
      </div>


      
    </div>
  </section>

</main>
<x-footer/>

