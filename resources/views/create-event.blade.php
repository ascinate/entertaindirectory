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
                                    <img alt="user" class="cover-img" src="{{ asset('images/avatar.jpg') }}" />
                                    @endif
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
                 <h2> Create A Event </h2>
             </div>
             
             <form action="{{ route('user_event.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    @if (session('success'))
                        <div class="alert alert-success alert-dismissible fade show mt-3" role="alert">
                            <strong>Success!</strong> {{ session('success') }}
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    @endif
                    <div class="col-md-12">
                        <div class="crm-profiles adds-from-po cm-forms-input d-inline-block w-100">
                            <div class="row gy-4">
                                <div class="col-md-6">
                                    <label class="form-label">Event Title</label>
                                    <input type="text" class="form-control" name="event_title" required />
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label">Event Type</label>
                                    <select class="form-select" name="event_type" required>
                                        <option value="" disabled selected>Select</option>
                                        <option value="Band">Band</option>
                                        <option value="Group">Group</option>
                                        <option value="Individual">Individual</option>
                                    </select>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label for="validationCustom01" class="form-label">Media Files</label>
                                        <input class="form-control" type="file" id="files" name="media_files[]"  multiple>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label">Location</label>
                                    <select class="form-select" name="location" required>
                                        <option value="" disabled selected>Select</option>
                                        @foreach ($countries as $country)
                                            <option value="{{ $country->name }}">{{ $country->name }}</option>
                                        @endforeach
                                    </select>
                                </div>

                                <div class="col-md-12">
                                    <label class="form-label">Date</label>
                                    <input type="date" class="form-control" name="date" required />
                                </div>
                                <div class="col-md-12">
                                    <label class="form-label">Description</label>
                                    <textarea class="form-control desiri derty2" name="description" required></textarea>
                                </div>
                                <div class="col-md-12">
                                    <input type="submit" class="btn tbn-all" value="Create Event" />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>

                 
           
             
             
          </div>
       </div>
   </div>

</main>
<x-footer/>
