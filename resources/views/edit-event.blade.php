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
             
             <form action="{{ route('update_event' , $event->id) }}" method="POST" enctype="multipart/form-data">
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
                                    <input type="text" class="form-control" name="event_title" placeholder="Event Title" value="{{ $event->event_title }}" >
                                </div>
                                <div class="col-md-6">
                                    <select class="form-select" name="event_type">
                                        <option value="" disabled>Select Event Type</option>
                                        <option value="Band" {{ $event->event_type == 'Band' ? 'selected' : '' }}>Band</option>
                                        <option value="Group" {{ $event->event_type == 'Group' ? 'selected' : '' }}>Group</option>
                                        <option value="Individual" {{ $event->event_type == 'Individual' ? 'selected' : '' }}>Individual</option>
                                    </select>
                                </div>
                                <div class="col-md-6">
                                        <label for="validationCustom01" class="form-label">Media Files</label>
                                        <input class="form-control" type="file" id="files" name="media_files[]"  multiple>
                                         @php
                                            $images = explode(',', $event->media_files);
                                        @endphp
                                        @if (!empty($images[0]))
                                            <div class="mt-2">
                                                @foreach ($images as $image)
                                                    <img src="{{ asset('uploads/' . $image) }}" alt="Media File" class="img-thumbnail me-2" style="width: 100px; height: 100px; object-fit: cover;">
                                                @endforeach
                                            </div>
                                        @else
                                            <p class="mt-2">No Media Files Uploaded</p>
                                        @endif
                                </div>
                                <div class="col-md-6">
                                    <select class="form-select" name="location" required>
                                        <option value="" disabled>Select Location</option>
                                        <option value="Australia" {{ $event->location == 'Australia' ? 'selected' : '' }}>Australia</option>
                                        <option value="India" {{ $event->location == 'India' ? 'selected' : '' }}>India</option>
                                        <option value="Pakistan" {{ $event->location == 'Pakistan' ? 'selected' : '' }}>Pakistan</option>
                                        <option value="UAE" {{ $event->location == 'UAE' ? 'selected' : '' }}>UAE</option>
                                        <option value="USA" {{ $event->location == 'USA' ? 'selected' : '' }}>USA</option>
                                    </select>
                                </div>
                                <div class="col-md-12">
                                    <label class="form-label">Date</label>
                                    <input type="date" class="form-control" name="date" value="{{ $event->date }}">
                                </div>
                                <div class="col-md-12">
                                    <label class="form-label">Description</label>
                                    <textarea class="form-control desiri derty2" name="description" required>{{ $event->description }}</textarea>
                                </div>
                                <div class="col-md-12">
                                    <input type="submit" class="btn tbn-all" value="Update Event" />
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
