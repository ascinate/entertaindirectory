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



    <div class="tiop-listing-div bg-white d-inline-block w-100">

        <div class="container">

          

            <div class="row g-lg-0 align-items-start justify-content-between">

                

                <div class="col-lg-12">

                 
                    <div class="mt-4">

                        <div class="row row-cols-1 row-cols-lg-3">
                         @foreach($results as $result)
                            <div class="col">
                               <a href="{{ route('adlisting.details', $result->id) }}" class="com-tesr02 position-relative d-inline-block w-100">
                                    <div class="blogs-post">
                                        <img src="{{ asset('uploads/' .$result->image) }}" alt="Ad Image" loading="lazy">
                                        <span class="dta btn">Mar 10 ,2024</span>
                                    </div>
                                    <div class="blogs-texr05 p-4">
                                        <h5>{{ $result->ad_title }}</h5>
                                        <h5> Contrary to popular belief, Lorem Ipsum </h5>
                                        <div class="monte"> Read more  </div>
                                    </div>
                                </a> 
                            </div>
                         @endforeach
                        </div>



                       

                    </div>



                </div>

                

            </div>

          

        </div>

    </div>



</main>

<x-footer/>