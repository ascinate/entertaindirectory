<x-header/>

<section class="sub-banner-parts float-start w-100">
    <div class="container">
        <h2 class="text-white">My Events</h2>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb mt-3">
                <li class="breadcrumb-item text-white"><a href="{{ url('/') }}">Home</a></li>
                <li class="breadcrumb-item text-white active">My Events</li>
            </ol>
        </nav>
    </div>
</section>

<main class="float-start main-bodys w-100 pt-0">
    <div class="tiop-listing-div bg-white d-inline-block w-100">
        <div class="container">
            <div class="row g-lg-0 align-items-start justify-content-between">
                <div class="col-lg-12">
                    @if($events->isEmpty())
                        <p>No events to display.</p>
                    @else
                        <div class="row row-cols-1 row-cols-lg-3 gy-4 g-lg-5 mb-5">
                            @foreach($events as $event)
                                <div class="col">
                                <a href="{{ route('event.details', $event->id) }}" class="com-tesr02 com-tesr02-vents position-relative d-inline-block w-100">
                                <div class="blogs-post">
                                            <img src="{{ asset('uploads/' . $event->media_files) }}" alt="event image" loading="lazy">
                                        </div>
                                        <div class="blogs-texr05 p-4">
                                            <h5>{{ $event->event_title }}</h5>
                                            <p>{{ Str::limit($event->description, 100) }}</p>
                                            <div class="monte">Read more</div>
                                        </div>
                                    </a>
                                </div>
                            @endforeach
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</main>

<x-footer/>
