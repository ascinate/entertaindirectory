<x-header/>
<main class="float-start accounts-divs-prolfie position-relative w-100">

   <div class="container-fluid bg-gray py-4">
       <div class="row">
          <div class="col-xl-3 col-lg-4">
              <div class="left-sections d-inline-block w-100">
                  <div class="profile-sections d-inline-block w-100">
                  <figure class="user-profiles w-100">
                  @if (Auth::user()->profile_photo)
                    <img alt="user" loading="lazy" class="cover-img" 
                        src="{{ Auth::user()->profile_photo ? asset('profile_photo/' . Auth::user()->profile_photo) : asset('default-profile.png') }}"/>
                        @else
                      <img alt="user" class="cover-img" src="{{ asset('images/avatar.jpg') }}" />
                       @endif
                  </figure>

                      <h2 class="text-center">{{ $user->name }}</h2> 
                      <p class="mt-2 text-center">{{ $user->email }}</p>
                      <a href="{{ route('listing.details', $user->id) }}" class="btn btn-all-profile d-table mx-auto mt-3"> Preview Public Profile</a>
                  </div>

                  <x-usersidebar/>
              </div>
          </div>
          <div class="col-xl-9 col-lg-8">
             <div class="tops-headings mb-4 bg-white">
                 <h2> Artist dashboard </h2>
             </div>
             <div class="row row-cols-1 row-cols-lg-3">
                 <div class="col">
                     <div class="comons-itesms-divg pinks bg-colors text-center">
                         <h2>6
                            <small class="d-block  mt-3">Active Events</small>
                         </h2>
                     </div>
                 </div>
                 <div class="col">
                    <div class="comons-itesms-divg pinks-new bg-colors text-center">
                        <h2>6
                           <small class="d-block mt-3">Ongoing Events</small>
                        </h2>
                    </div>
                 </div>
                 <div class="col">
                    <div class="comons-itesms-divg yellows-div bg-colors text-center">
                        <h2>6
                           <small class="d-block mt-3">Complete Events</small>
                        </h2>
                    </div>
                 </div>
             </div>
             <div class="comon-charts d-inline-block bg-white w-100 mt-5">
                 <h2> Views </h2>
                 <div class="graphrs w-100 mt-4">
                    <img alt="spm" class="cover-img" src="images/gf1.png"/>
                 </div>
             </div>
          </div>
       </div>
   </div>

</main>
<x-footer/>