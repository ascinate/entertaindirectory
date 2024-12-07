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
                      <a href="{{ route('listing.details', $user->id) }}" target="blank" class="btn btn-all-profile d-table mx-auto mt-3"> Preview Public Profile</a>
                  </div>

                  <x-usersidebar/>
              </div>
          </div>
          <div class="col-xl-9 col-lg-8">
             <div class="tops-headings mb-4 bg-white">
                 <h2> Event List </h2>
             </div>
             <div class="col-12">
                 <div class="crm-profiles cm-forms-input d-inline-block w-100">
                    <table id="example" class="table table-striped nowrap" style="width:100%">
                        <thead>
                            <tr>
                                <th>Title</th>
                                <th>Image</th>
                                <th>Event Type</th>
                                <th>Date</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach ($event as $event)
                            <tr>
                                <td>{{ $event->event_title}}</td>
                                <td>
                                @php
                                   
                                    $images = explode(',', $event->media_files);
                                @endphp
                                @if (!empty($images[0])) 
                                    <img src="{{ asset('uploads/' . $images[0]) }}" alt="Event Image" class="crm-divs">
                                @else
                                    <span>No Image</span>
                                @endif 
                                </td>
                                <td>{{ $event->event_type}}</td>
                                <td>{{ $event->date}}</td>
                                <td>
                                    <a href="{{ route('edit_event', $event->id) }}" class="btn">
                                        <i class="ri-pencil-line"></i>
                                    </a>
                                    <a href="{{ route('deleteevent', $event->id) }}" class="btn ms-3">
                                        <i class="ri-delete-bin-line"></i>
                                    </a>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                 </div>
                
             </div>
             
             
          </div>
       </div>
   </div>

</main>


<x-footer/>

