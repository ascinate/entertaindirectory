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

                  </div>

                  <x-gensidebar/>
              </div>
          </div>
          <div class="col-xl-9 col-lg-8">
             <div class="tops-headings mb-4 bg-white">
                 <h2> Artist Profile </h2>
             </div>
             <form action="{{ route('general.update', ['id' => $user->id]) }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    @if (session('success'))
                        <div class="alert alert-success alert-dismissible fade show mt-3" role="alert">
                            <strong>Success!</strong> {{ session('success') }}
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    @endif
                        <div class="col-md-8">
                        
                                <div class="crm-profiles cm-forms-input d-inline-block w-100">  
                                    <div class="row gy-4">
                                        <div class="col-md-6">
                                            <input type="text" class="form-control" name="first_name" value="{{ old('first_name', $first_name) }}" placeholder="First Name" />
                                        </div>
                                        <div class="col-md-6">
                                            <input type="text" class="form-control" name="last_name" value="{{ old('last_name', $last_name) }}" placeholder="Last Name" />
                                        </div>

                                        <div class="col-md-6">
                                            <input type="email" class="form-control" name="email" value="{{ $user['email'] }}" placeholder="Email" />
                                        </div>
                                        <div class="col-md-6">
                                            <input type="text" class="form-control" name="phone" value="{{ $user['phone'] }}" placeholder="Phone" />
                                        </div>

                                        <div class="col-md-6">
                                            <select class="form-control" id="country" name="country">
                                                <option value="">Select Country</option>
                                                @foreach($countries as $country)
                                                    <option value="{{ $country->id }}">{{ $country->name }}</option>
                                                @endforeach
                                            </select>
                                            <input type="hidden" name="country_name" value="">
                                        </div>

                                        <div class="col-md-6">
                                            <select class="form-control" id="state" name="state">
                                                <option value="">Select State</option>
                                            </select>
                                            <input type="hidden" name="state_name" value="">
                                        </div>

                                        <div class="col-md-6">
                                            <select class="form-control" id="city" name="city">
                                                <option value="">Select City</option>
                                            </select>
                                            <input type="hidden" name="city_name" value="">
                                        </div>
                                        <div class="col-md-12">
                                            <label class="form-label">Upload Your Profile Picture</label>
                                            <div class="avatar-upload">
                                                <div class="avatar-edit">
                                                    <input type="file" id="imageUpload" name="profile_photo" accept=".png, .jpg, .jpeg" />
                                                    <label for="imageUpload"></label>
                                                </div>
                                                <div class="avatar-preview">
                                                    <div class="imagePreview" style="background-image: url('{{ asset('profile_photo/' . $user->profile_photo) }}');">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    
                                    </div>
                                </div>
                        </div>
                        <div class="col-md-4">
                         <form method="POST" action="{{ url('/update-profile/'.$user->id) }}">
                            @csrf
                            <div class="crm-profiles cm-forms-input d-inline-block w-100">
                                <div class="mb-4">
                                    <input type="password" name="password[old_password]" class="form-control" placeholder="Old password" value="{{ $user->password }}" disabled />
                                </div>
                                <div class="mb-4">
                                    <input type="password" name="password[new_password]" class="form-control" placeholder="New password">
                                </div>
                                <div class="mb-0">
                                    <input type="submit" class="btn tbn-all" value="Update Profile" />
                                </div>
                            </div>
                         </form>
                        </div>
                   


                
                </div>
             </form>

          </div>
             
             
          </div>
       </div>
   </div>

</main>


<x-footer/>
<script>
document.getElementById('imageUpload').addEventListener('change', function (event) {
    const input = event.target;
    const preview = document.querySelector('.imagePreview');
    if (input.files && input.files[0]) {
        const reader = new FileReader();
        reader.onload = function (e) {
            preview.style.backgroundImage = `url(${e.target.result})`;
        };
        reader.readAsDataURL(input.files[0]);
    }
});

document.getElementById('imageUploadcover').addEventListener('change', function (event) {
    const input = event.target;
    const preview = document.querySelector('.imagePreview-cover');
    if (input.files && input.files[0]) {
        const reader = new FileReader();
        reader.onload = function (e) {
            preview.style.backgroundImage = `url(${e.target.result})`;
        };
        reader.readAsDataURL(input.files[0]);
    }
});

</script>

