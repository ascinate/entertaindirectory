<x-header/>

<main class="float-start accounts-divs-prolfie position-relative w-100">
    <div class="container-fluid bg-gray py-4">
        <div class="row">
            <!-- Left Sidebar -->
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
                        <h2 class="text-center">{{ Auth::user()->name }}</h2>
                        <p class="mt-2 text-center">{{ Auth::user()->email }}</p>
                        <a href="{{ route('listing.details', $user->id) }}" target="blank" class="btn btn-all-profile d-table mx-auto mt-3">Preview Public Profile</a>
                    </div>
                    <x-usersidebar/>
                </div>
            </div>

            <div class="col-xl-9 col-lg-8">
                <div class="tops-headings mb-4 bg-white">
                    <h2>Add Your Portfolio</h2>
                </div>

                @if (session('success'))
                        <div class="alert alert-success alert-dismissible fade show mt-3" role="alert">
                            <strong>Success!</strong> {{ session('success') }}
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                @endif
                <form action="{{ route('userportfolio.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-md-12">
                            <div class="crm-profiles adds-from-po cm-forms-input d-inline-block w-100">
                                <div class="row gy-4">
                                   
                                    <div class="col-md-6">
                                        <input type="text" class="form-control" name="title" placeholder="Portfolio Title" value="{{ old('title') }}" required>
                                    </div>

                                    <div class="col-md-6">
                                        <select class="form-select" id="media_type" name="media_type" required>
                                            <option value="" disabled selected>Select file type</option>
                                            <option value="url">Video</option>
                                            <option value="picture">Images</option>
                                            <option value="mp3">Audio</option>
                                        </select>
                                    </div>

                                    <div class="col-lg-12">
                                        <div id="url_input" class="fileoptions" style="display: none;">
                                            <input type="text" name="urladdress" class="form-control" placeholder=".e.g. https://www.youtube.com/embed/KAca7KQ9p-A">
                                        </div>
                                        <div id="picture_input" class="fileoptions" style="display: none;">
                                            <input type="file" name="photo_files" class="form-control pt-3" accept="image/*">
                                        </div>
                                        <div id="mp3_input" class="fileoptions" style="display: none;">
                                            <input type="file" name="media_files" class="form-control pt-3" accept="audio/mp3">
                                        </div>
                                    </div>

                                    <div class="col-md-12">
                                        <label class="form-label">Description</label>
                                        <textarea class="form-control desiri" name="description">{{ old('description') }}</textarea>
                                    </div>

                                    <div class="col-md-12">
                                        <input type="submit" class="btn tbn-all" value="Add Portfolio">
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

<script>
    // Show/Hide file input based on media type
    document.getElementById('media_type').addEventListener('change', function () {
        const type = this.value;
        document.querySelectorAll('.fileoptions').forEach(option => option.style.display = 'none');
        if (type === 'url') document.getElementById('url_input').style.display = 'block';
        if (type === 'mp3') document.getElementById('mp3_input').style.display = 'block';
        if (type === 'picture') document.getElementById('picture_input').style.display = 'block';
    });
</script>
