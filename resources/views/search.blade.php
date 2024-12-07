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

                <div class="col-lg-3 filter-divgb ">
                  <form method="GET" action="{{ route('listing') }}">
                    <h2 class="filter-by">Filter by Attribute</h2>

                    <span class="hed-line"></span>

                    <div class="accordion mt-4 list-serach-acd" id="accordionPanelsStayOpenExample">



                      <div class="accordion-item">

                        <h2 class="accordion-header">

                          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#price2">

                              <span> Event Rate  <br/>  

                                  </span>

                          </button>

                        </h2>

                        <div id="price" class="accordion-collapse collapse show">

                          <div class="accordion-body p-0">



                            <div class="range-slider my-4">

                              <span class="rangeValues"></span>
                                @if(request('min_price'))
                                    <input name="min_price" value="{{ request('min_price') }}" min="1000" max="50000" step="500" type="range">
                                @else
                                    <input name="min_price" value="1000" min="1000" max="50000" step="500" type="range">
                                @endif

                                @if(request('max_price'))
                                    <input name="max_price" value="{{ request('max_price') }}" min="1000" max="50000" step="500" type="range">
                                @else
                                    <input name="max_price" value="50000" min="1000" max="50000" step="500" type="range">
                                @endif

                            </div>



                              

                          </div>

                        </div>

                      </div>



                        <div class="accordion-item">

                          <h2 class="accordion-header" id="panelsStayOpen-headingOne">

                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseOne" aria-expanded="true" aria-controls="panelsStayOpen-collapseOne">

                              Genre

                            </button>

                          </h2>

                          <div id="panelsStayOpen-collapseOne" class="accordion-collapse collapse show" aria-labelledby="panelsStayOpen-headingOne">

                            <div class="accordion-body">

                              @foreach($skills as $skill)
                                  <div class="form-check">
                                      <input 
                                          class="form-check-input" 
                                          name="skills[]" 
                                          type="checkbox" 
                                          value="{{ $skill->id }}" 
                                          id="skill{{ $skill->id }}"
                                          @if(is_array(request('skills')) && in_array($skill->id, request('skills'))) 
                                              checked 
                                          @endif>
                                      <label class="form-check-label" for="skill{{ $skill->id }}">{{ $skill->skill_name }}</label>
                                  </div>
                              @endforeach




                            </div>

                          </div>

                        </div>





                        <div class="accordion-item">

                          <h2 class="accordion-header" id="panelsStayOpen-headingOne">

                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseOne2" aria-expanded="true" aria-controls="panelsStayOpen-collapseOne">

                              Artist Type

                            </button>

                          </h2>

                          <div id="panelsStayOpen-collapseOne2" class="accordion-collapse collapse show" aria-labelledby="panelsStayOpen-headingOne">

                            <div class="accordion-body">

                                  <div class="form-check">
                                      <input class="form-check-input" type="checkbox" name="artist_type[]" value="Group" id="group" 
                                          @if(is_array(request('artist_type')) && in_array('Group', request('artist_type'))) 
                                              checked 
                                          @endif>
                                      <label class="form-check-label" for="group">Group</label>
                                  </div>
                                  <div class="form-check">
                                      <input class="form-check-input" type="checkbox" name="artist_type[]" value="Individual" id="individual" 
                                          @if(is_array(request('artist_type')) && in_array('Individual', request('artist_type'))) 
                                              checked 
                                          @endif>
                                      <label class="form-check-label" for="individual">Individual</label>
                                  </div>
                                  <div class="form-check">
                                      <input class="form-check-input" type="checkbox" name="artist_type[]" value="Band" id="band" 
                                          @if(is_array(request('artist_type')) && in_array('Band', request('artist_type'))) 
                                              checked 
                                          @endif>
                                      <label class="form-check-label" for="band">Band</label>
                                  </div>



                            </div>

                          </div>

                        </div>





                        <div class="accordion-item mt-4">

                          <h2 class="accordion-header" id="panelsStayOpen-headingThree">

                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapsefour" aria-expanded="false" aria-controls="panelsStayOpen-collapseThree">

                              Location

                            </button>

                          </h2>

                          <div id="panelsStayOpen-collapsefour" class="accordion-collapse collapse show" aria-labelledby="panelsStayOpen-headingThree">

                            <div class="accordion-body crm-slidce">

                                <div class="form-check radiou">

                                <input class="form-check-input" type="checkbox" name="location[]" value="Maldives" id="maldives" @if(is_array(request('location')) && in_array('Maldives', request('location')))  checked @endif>
                                <label class="form-check-label" for="maldives">Maldives</label>

                                </div>

    

                                <div class="form-check radiou">

                                  <input class="form-check-input" type="checkbox" name="location[]" value="Argentina" id="argentina" @if(is_array(request('location')) && in_array('Argentina', request('location')))  checked @endif>

                                    <label class="form-check-label rt-icon" for="argentina">

                                      Argentina

                                    </label>

                                </div>


                                <div class="form-check radiou">

                                <input class="form-check-input" type="checkbox" name="location[]" value="India" id="india" @if(is_array(request('location')) && in_array('India', request('location')))  checked @endif>


                                  <label class="form-check-label rt-icon" for="india">

                                    India

                                  </label>

                                </div>

                                <div class="form-check radiou">

                                  <input class="form-check-input" type="checkbox" name="location[]" value="Japan" id="japan" @if(is_array(request('location')) && in_array('Japan', request('location')))  checked @endif>

                                  <label class="form-check-label rt-icon" for="japan">

                                    Japan

                                  </label>

                                </div>

                                <div class="form-check radiou">

                                 <input class="form-check-input" type="checkbox" name="location[]" value="France" id="france" @if(is_array(request('location')) && in_array('France', request('location')))  checked @endif>

                                  <label class="form-check-label rt-icon" for="france">

                                    France

                                  </label>

                                </div>

                               

                            </div>

                          </div>

                        </div>



                        

                        <input type="submit" class="btn submit-btn" value="Filter"/>

                    </div>
                  </form>




                </div>

                <div class="col-lg-8">

                    <div class="row mb-5 mt-5 mt-lg-0 justify-content-between align-items-center">

                        <div class="col-lg-9">

                           <h4 class="sub-iti mb-0"> Showing <strong> 50 </strong> results as per your search criteria </h4>

                        </div>

                        <div class="col-lg-3 d-flex justify-content-end">

                            <select class="form-select">

                                <option selected="">Latest</option>

                                <option value="1">Top Listed</option>

                                <option value="2">Lower price first</option>

                                <option value="3">Higher price first</option>

                            </select>

                        </div>

                   </div>

                    <div class="mt-4">

                      @foreach($performers as $performer)

                          <div class="listingst collist w-100 d-inline-block">

                              <div class="row">

                                  <div class="col-md-3 my-auto">

                                      <a href="{{ route('listing.details', $performer->id) }}" class="img-pros cvm-pic">

                                          <img alt="ls" loading="lazy" class="cover-img" 

                                          src="{{  asset('profile_photo/' .$performer->profile_photo) }}" />

                                      </a>

                                  </div>

                                  <div class="col-md-6 my-auto">

                                      <div class="seller-content">

                                          <h5 class="mt-0 mb-2">{{ $performer->skill }}</h5>

                                          <h3 class="mb-2"><a href="{{ route('listing.details', $performer->id) }}">{{ $performer->name }}</a></h3>

                                          <p class="mb-4">Member since {{ $performer->created_at->format('F Y') }}</p>



                                          <ul class="list-inline mb-lg-0">

                                              <li class="list-inline-item">

                                                  <i class="fad fa-users-medical"></i>{{ $performer->user_type == 'performer' ? 'Individual' : 'Group' }}

                                              </li>

                                              <li class="list-inline-item"><i class="fas fa-map-marked-alt"></i> {{ $performer->address ?? 'Unknown' }}</li>

                                          </ul>

                                      </div>

                                  </div>

                                  <div class="col-md-3 my-auto text-center">

                                      <div class="seller-hourly-rate">

                                          <h4><span class="amounts-prc amount"><bdi><span class="currencySymbol"></span>{{ $performer->event_cost }}</bdi>/-</span></h4>

                                          

                                      </div>

                                      <div class="star-rating mx-auto mb-3 mt-1">

                                          <i class="ri-star-s-fill"></i>

                                          <i class="ri-star-s-fill"></i>

                                          <i class="ri-star-s-fill"></i>

                                          <i class="ri-star-s-fill"></i>

                                          <i class="ri-star-s-fill"></i>

                                      </div>

                                      <a href="{{ route('listing.details', $performer->id) }}" class="prolancer-rgb-btn">Message me</a>

                                  </div>

                              </div>

                          </div>

                      @endforeach



                  

                    </div>



                </div>

                

            </div>

          

        </div>

    </div>



</main>

<x-footer/>