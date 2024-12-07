<x-header/>

<main class="float-start accounts-divs-prolfie position-relative w-100">

   <div class="container-fluid bg-gray py-4">
       <div class="row">
          <div class="col-xl-3 col-lg-4">
              <div class="left-sections d-inline-block w-100">
                  <div class="profile-sections d-inline-block w-100">
                      <figure class="user-profiles w-100">
                        <div class="avatar-upload">
                           
                        <div class="avatar-preview">
                            <div class="imagePreview">
                                <span class="pic-user">
                                    @if (Auth::user()->profile_photo)
                                    <img alt="user" class="cover-img" src="{{ asset('profile_photo/' . Auth::user()->profile_photo) }}" />
                                    @else
                                    <img alt="user" class="cover-img" src="{{ asset('images/avatar.jpg') }}" />                                    @endif
                                </span>
                            </div>
                        </div>
                        </div>
                      </figure>
                      <h2 class="text-center">{{ $user->name }}</h2> 
                      <p class="mt-2 text-center">{{ $user->email }}</p>
                      <a href="{{ route('listing.details', $user->id) }}" target="blank"  class="btn btn-all-profile d-table mx-auto mt-3"> Preview Public Profile</a>
                  </div>

                  @if(Auth::check() && Auth::user()->user_type === 'Performer')
                    <x-usersidebar />
                  @elseif(Auth::check() && Auth::user()->user_type === 'General')
                    <x-gensidebar />
                  @endif
              </div>
          </div>
          <div class="col-xl-9 col-lg-8">
             <div class="tops-headings mb-4 bg-white">
                 <h2> Message </h2>
             </div>
             <div class="col-12">
                 <div class="crm-profiles cm-forms-input d-inline-block w-100">
                    <div class="cm-mesg">
                        <p> <i class="ri-information-2-line"></i> Enter your business name as you would like it to appear in ads. Generally, the shorter the better.
                            For example, “Smith’s Flowers” is better than “Smith’s Flower Emporium, Inc.</p>
                        <h5 class="mt-3"><i class="ri-calendar-2-line"></i> 10/10/2024, James Danis </h5>
                    </div>

                    <div class="cm-mesg">
                        <p> <i class="ri-information-2-line"></i> Entering your business location

                            Enter the address of your company’s physical location. This address is used by Smart Targeter for targeting walk-in customers to your store (if enabled). It is also used as the center-point for Smart Targeter location campaigns. For example, if you set Smart Targeter to advertise to people within five miles of your location, 
                            it will advertise to people within five miles of this. </p>
                        <h5 class="mt-3"><i class="ri-calendar-2-line"></i> 08/10/2024, James Danis </h5>
                    </div>

                 </div>
                
             </div>
             
             
          </div>
       </div>
   </div>

</main>

<x-footer/>