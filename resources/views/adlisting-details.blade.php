<x-header/>

<section class="sub-banner-parts float-start w-100">

     <div class="container">

        <h2 class="text-white"> Singer </h2>

        <nav aria-label="breadcrumb">

          <ol class="breadcrumb mt-3">

            <li class="breadcrumb-item text-white"><a href="#">Home</a></li>

            <li class="breadcrumb-item text-white active">Singer</li>

          </ol>

        </nav>

     </div>

  </section>







<main class="float-start main-bodys w-100 pt-0 ">



  <section class="ads-details float-start w-100 bg-white">
          <div class="container">
              <div class="row row-cols-1 row-cols-lg-2 gy-4 g-lg-5">
                
                  <div class="col">
                      <a data-fancybox="" href="images/types-of-google-ads.jpg" class="ads-pic01s">
                      <img src="{{ asset('uploads/' .$results->image) }}" alt="Ad Image" loading="lazy" class="cover-img">
                      </a>
                  </div>
                  <div class="col">
                      <h2 class="h2-main">{{ $results->ad_title }} </h2>
                      <p class="mt-4"> There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need
                          to be sure there isn't.  </p>
                      <h1 class="price-tags mt-3">${{ $results->ad_price }}</h1>
                      <h5 class="mt-3 mb-1 sub-txy">Advertisment Size</h5>
                      <p class="mt-2"> <i class="ri-ruler-2-line"></i>{{ $results->ad_size }}</p>
                      <div class="row row-cols-1 row-cols-lg-2 mt-3">
                          <div class="col">
                              <h5 class="mt-2 mb-3 sub-txy">Available Advertisment periods</h5>
                              <p class="mt-2">{{ $results->ad_duration }}</p>
                                  
                          </div>
                          <div class="col">
                              <h5 class="mt-2 mb-3 sub-txy">Available Advertisment Position</h5>
                              <p class="mt-2">{{ $results->ad_position }}</p>
                          </div>
                          
                      </div>
                      <a href="{{ route('adlisting.form', ['id' => $results->id]) }}" class="btn btn-buy mt-4 signuop0-btn"> Buy Now <i class="ri-arrow-right-up-line"></i> </a>
                      
                  </div>
                
              </div>
          </div>
  </section>



</main>



<x-footer/>