<x-header/>

<section class="sub-banner-parts float-start w-100">
    <div class="container">
        <h2 class="text-white">{{ $event->event_title }}</h2>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb mt-3">
                <li class="breadcrumb-item text-white"><a href="{{ url('/') }}">Home</a></li>
                <li class="breadcrumb-item text-white active">Event Details</li>
            </ol>
        </nav>
    </div>
</section>

<main class="float-start main-bodys w-100 pt-0">
    <section class="ads-details float-start w-100 bg-white">
        <div class="container">
            <div class="row row-cols-1 row-cols-lg-2 gy-4 g-lg-5">
                <div class="col">
                    <a data-fancybox="" href="{{ asset('uploads/' . $event->media_files) }}" class="ads-pic01s">
                        <img src="{{ asset('uploads/' . $event->media_files) }}" alt="Event Image" loading="lazy" class="cover-img">
                    </a>
                </div>
                <div class="col">
                      <h2 class="h2-main">{{ $event->event_title }} </h2>
                      <p class="mt-2"> <i class="ri-map-pin-line"></i>{{ $event->location }}</p>
                      <p class="mt-2"><i class="ri-calendar-line"></i> {{ \Carbon\Carbon::parse($event->date)->format('d M Y') }}</p>
                      <p class="mt-4"> {{ $event->description }}</p>
                      
                      <!-- <a href="#" class="btn btn-buy mt-4 signuop0-btn"> Book Now <i class="ri-arrow-right-up-line"></i> </a> -->
                      
                  </div>
            </div>
        </div>
    </section>
</main>

<x-footer/>



                  