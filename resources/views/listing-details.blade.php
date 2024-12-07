<x-header/>
@php
$userId = auth()->id();
$countevent = \DB::table('events')
         ->where('artistid', $userId)
          ->count();
@endphp
<section class="post-banners position-relative float-start w-100">
<figure class="bg-picou w-100 d-inline-block">
    <img
        alt="Cover Picture"
        loading="lazy"
        src="{{ isset($user->cover_photo) && file_exists('cover_photo/' . $user->cover_photo) ? asset('cover_photo/' . $user->cover_photo) : asset('images/pexels-rdne-6173832.jpg') }}"
        class="cover-img"/>
</figure>


</section>

<main class="float-start accounts-divs position-relative w-100">

    <section class="user-deatils float-start w-100">

        <div class="container">
          <div class="top-details-divs bg-white seller-profile">
            <div class="row">
              <div class="col-xl-3 my-auto">
                <a href="#" class="profiles-pic d-inline-block">

                  @if ($user->profile_photo)
                    <img alt="user" class="cover-img" src="{{ asset('profile_photo/' . $user->profile_photo) }}" />
                    @else
                    <img alt="user" class="cover-img" src="{{ asset('images/avatar.jpg') }}" />
                    @endif
                </a>
              </div>
              <div class="col-xl-9 my-auto details-post">
                  <div class="row">
                  <div class="col-xl-7 my-auto">

                    <h3 class="mb-0">{{ $user->name }}</h3>

                                <ul class="list-inline mt-2 mb-2 badges">
                                        <li class="list-inline-item"><img src="{{asset('images/level3.png')}}" title="New member" alt="badge"></li>
                                </ul>
                          <h6 class="mb-0 mt-2">{{ $user->skills }}</h6>
                        <p>Member since {{ \Carbon\Carbon::parse($user->created_at)->format('M Y') }}</p>
                        @if ($user->country)
                        <div class="locations d-flex align-items-center w-100 mt-2">
                            <span class="maps-icons"><i class="ri-map-pin-line"></i></span>
                            <ul class="d-flex align-items-center ms-2">
                            <li>
                            {{ $user->country }}
                            </li>
                            <li>
                            {{ $user->state }}
                            </li>
                            <li>
                            {{ $user->city }}
                            </li>
                            </ul>
                        </div>
                        @endif
                        <div class="stats-list mt-4">
                        <div class="stats">
                            <a href="{{ route('eventlist', $user->id) }}"><span>{{ $countevent }}</span> All Event</a>
                        </div>
                        </div>
                    </div>
                    @if ($user->event_cost)
                    <div class="col-xl-2 text-center  d-xl-block">
                        <h2 class="rate-amounts" style="font-size: 17px;">${{ $user->event_cost }}
                          <small class="d-block">(Per Event Rate)</small>
                        </h2>
                    </div>
                    @endif
                    <div class="col-xl-3">
                      <ul class="list-unstyled mid-meta">
                          <li>
                            <a href="#" class="follow-button follow-seller"><span>Contact me</span></a>
                          </li>
                          <!--<li>
                              <a href="#" class="message-button">
                                <i class="ri-mail-line"></i>
                                  <span>Message</span>
                              </a>
                          </li>-->
                      </ul>
                      <div class="text-center">
                          <div class="star-rating">
                              <span> <i class="ri-star-s-fill"></i> <i class="ri-star-s-fill"></i>
                                <i class="ri-star-s-fill"></i>
                                <i class="ri-star-s-fill"></i>
                                <i class="ri-star-s-fill"></i>
                              </span>
                          </div>
                          <small>(0 Ratings)</small>
                      </div>
                    </div>
                  </div>
              </div>
            </div>
          </div>
           <div class="row justify-content-center nmesd mt-5">
               <div class="col-xl-8">
                <div class="white-padding">
                  <ul class="nav nav-tabs mb-3">
                      <li class="nav-item">
                          <a class="nav-link active" data-bs-toggle="tab" data-bs-target="#about-me" role="tab" aria-selected="true">About Me</a>
                      </li>
                      <li class="nav-item">
                          <a class="nav-link" data-bs-toggle="tab" data-bs-target="#portfolio" role="tab" aria-selected="false"> Portfolio</a>
                      </li>
                      <li class="nav-item">
                          <a class="nav-link" data-bs-toggle="tab" data-bs-target="#reviews" role="tab" aria-selected="false">Reviews</a>
                      </li>
                  </ul>
                  <div class="tab-content">
                      <div class="tab-pane fade show active" id="about-me" role="tabpanel">

                        <p>{{ $user->about_me }} </p>

                      </div>

                      <div class="tab-pane fade" id="portfolio" role="tabpanel">

                          <div class="row row-cols-1 row-cols-lg-2 gy-4 gx-lg-5 mt-0">
                              @foreach ($portfolio as $item)

                                  <div class="col">
                                      <div class="ivisw">
                                        @if($item->media_type === 'url')
                                          <a data-fancybox="porfolio" href="{{ $item->media_files }}">
                                          <iframe  src="{{ $item->media_files }}" title="Media content" frameborder="0"
                                                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                                    referrerpolicy="strict-origin-when-cross-origin" allowfullscreen>
                                            </iframe>
                                          </a>
                                        @elseif($item->media_type === 'picture')
                                        <a data-fancybox="porfolio" href="{{ asset('uploads/images/' . $item->media_files) }}">
                                        <img src="{{ asset('uploads/images/' . $item->media_files) }}" alt="Image" />
                                        </a>
                                        @elseif($item->media_type === 'mp3')
                                        <a data-fancybox="audio-gallery" data-type="iframe" class="audiofix" data-src="{{ asset('uploads/audio/' . $item->media_files) }}" href="javascript:;" rel="fancybox">
                                         <img src="{{ asset('images/audio-placeholder.png') }}" alt="Audio File" style="width: 100%; max-width: 300px; height: auto;">

                                        </a>
                                        @endif
                                      </div>
                                  </div>
                              @endforeach


                          </div>

                      </div>


                      <div class="tab-pane fade" id="reviews" role="tabpanel">
                          <div class="review">
                              <!-- Display Reviews -->
                              @if(isset($reviews) && $reviews->count() > 0)
                                  <h4>Reviews:</h4>
                                  @foreach($reviews as $review)
                                      <div class="review-item">
                                          <p><strong>{{ $review->name }}</strong> ({{ $review->email }})</p>
                                          <div class="rating-group">
                                              @for($i = 1; $i <= 5; $i++)
                                                  <i class="rating__icon rating__icon--star fa {{ $i <= $review->rating ? 'fa-star' : 'fa-star-o' }}"></i>
                                              @endfor
                                          </div>
                                          <p>{{ $review->review }}</p>
                                          <hr>
                                      </div>
                                  @endforeach
                              @else
                                  <p>No reviews yet.</p>
                              @endif

                              <!-- Leave a Review (General Users Only) -->
                              <div class="leave-sec-part mt-4">

                                  @if($isGeneralUser)
                                  <h2>Leave a Review</h2>
                                      <form action="{{ route('submit.review') }}" method="POST">
                                          @csrf
                                          <input type="hidden" name="performer_id" value="{{ $user->id }}">

                                          <div class="row">
                                              <div class="col-lg-10">
                                                  <div id="full-stars-example-two">
                                                      <div class="rating-group">
                                                      <input disabled="" checked="" class="rating__input rating__input--none" name="rating" id="rating3-none" value="0" type="radio">
                                                          <label for="rating3-1" class="rating__label" title="1 stars"><i class="rating__icon rating__icon--star fa fa-star"></i></label>
                                                          <input class="rating__input" id="rating3-1" name="rating" value="1" type="radio" required>
                                                          <label for="rating3-2" class="rating__label" title="2 stars"><i class="rating__icon rating__icon--star fa fa-star"></i></label>
                                                          <input class="rating__input" id="rating3-2" name="rating" value="2" type="radio">
                                                          <label for="rating3-3" class="rating__label" title="3 stars"><i class="rating__icon rating__icon--star fa fa-star"></i></label>
                                                          <input class="rating__input" id="rating3-3" name="rating" value="3" type="radio">
                                                          <label for="rating3-4" class="rating__label" title="4 stars"><i class="rating__icon rating__icon--star fa fa-star"></i></label>
                                                          <input class="rating__input" id="rating3-4" name="rating" value="4" type="radio">
                                                          <label for="rating3-5" class="rating__label" title="5 star"><i class="rating__icon rating__icon--star fa fa-star"></i></label>
                                                          <input class="rating__input" id="rating3-5" name="rating" value="5" type="radio">
                                                      </div>
                                                  </div>
                                              </div>

                                              <div class="col-lg-6">
                                                  <div class="form-group">
                                                      <input type="text" class="form-control" name="name" placeholder="Full Name" required>
                                                  </div>
                                              </div>
                                              <div class="col-lg-6">
                                                  <div class="form-group">
                                                      <input type="email" class="form-control" name="email" placeholder="Email" required>
                                                  </div>
                                              </div>
                                              <div class="col-lg-12">
                                                  <div class="form-group">
                                                      <textarea class="form-control" name="review" placeholder="Message" rows="4" required></textarea>
                                                  </div>
                                              </div>
                                              <div class="mb-0">
                                                  <input type="submit" class="btn tbn-all" id="review-submit" value="Submit Review " />
                                              </div>
                                          </div>
                                      </form>

                                  @endif
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
               </div>
               <div class="col-xl-4 position-relative single-sellers">
                <aside id="secondary" class="widget-area">
                  <div id="prolancer_seller_details-1" class="widget widget_prolancer_seller_details">
                      <h4 class="widget-title">About Me</h4>
                      <div class="seller-detail d-flex">
                        <i class="ri-men-line"></i>
                          <div>
                              <h5>Gender</h5>

                              <p>{{ $user->gender }}</p>

                          </div>
                      </div>



                      <div class="seller-detail d-flex mt-4">
                        <i class="ri-global-fill"></i>
                          <div>
                              <h5>Genre</h5>

                              <p>{{ $user->skills }}</p>

                          </div>
                      </div>




                  </div>
                  <div class="stpd-wp-block stpd-wp-block-1">
                      <div style="margin: 10px 0; text-align: left; display: block; clear: both;">
                          <a target="_blank" href="#" referrerpolicy="origin-when-cross-origin"><img src="{{ asset('images/right-slidebar.png') }}"></a>
                      </div>
                  </div>
                </aside>
               </div>
           </div>

           <div class="related-profiles d-inline-block w-100 mt-5">

                   <h3 class="text-white"> Recommended Artists </h3>
                   @if ($recommendedArtists->isEmpty())
                          <p class="text-white text-center mt-4">No recommended artist found.</p>
                    @else
                   <div class="offers owl-carousel owl-theme mt-5">
                     @foreach ($recommendedArtists as $artist)
                      <div class="prolancer-seller-item style-1 text-center">
                        <div class="seller-item-images">
                            <a href="{{ route('listing.details', $artist->id) }}">
                            @if ($artist->profile_photo)
                              <img alt="user" class="cover-img" src="{{ asset('profile_photo/' . $artist->profile_photo) }}" />
                              @else
                              <img alt="user" class="cover-img" src="{{ asset('images/avatar.jpg') }}" />
                              @endif
                            </a>
                        </div>
                          <div class="seller-content">
                            <h2 class="mb-2">{{ $artist->name }}</h2>
                            <div class="seller-hourly-rate">
                                <h4>Hourly rate: <span class="woocommerce-Price-amount amount"><bdi><span class="woocommerce-Price-currencySymbol">$</span>{{ $artist->event_cost }}</bdi></span></h4>
                            </div>
                                        <div class="star-rating">
                                        </div>
                                        <ul class="list-inline mt-4">
                                                    <li class="list-inline-item"><i class="fas fa-user-shield"></i><span>{{ $artist->artist_type }}</span></li>

                                        </ul>
                          </div>
                      </div>
                    @endforeach
                   @endif

                  </div>

           </div>



        </div>
    </section>

</main>

<div class="modal fade reviews" id="examplemeg" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <h5>Review submitted successfully!</h5>
      </div>

    </div>
  </div>
</div>


<x-footer/>
