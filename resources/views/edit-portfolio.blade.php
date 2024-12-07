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
                        <h2 class="text-center">{{ $user->name }}</h2>
                        <p class="mt-2 text-center">{{ $user->email }}</p>
                        <a href="{{ route('listing.details', $user->id) }}" target="blank" class="btn btn-all-profile d-table mx-auto mt-3">Preview Public Profile</a>
                    </div>
                    <x-usersidebar/>
                </div>
            </div>
            <div class="col-xl-9 col-lg-8">
                <div class="tops-headings mb-4 bg-white">
                    <h2>Update Your Portfolio</h2>
                </div>
                @if (session('success'))
                        <div class="alert alert-success alert-dismissible fade show mt-3" role="alert">
                            <strong>Success!</strong> {{ session('success') }}
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                @endif
                <form action="{{ route('update_portfolio', $portfolio->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-md-12">
                            <div class="crm-profiles adds-from-po cm-forms-input d-inline-block w-100">
                                <div class="row gy-4">
                          
                                    <div class="col-md-6">
                                        <input type="text" class="form-control" name="title" placeholder="Portfolio Title" value="{{ old('title', $portfolio->title) }}" required>
                                    </div>

                            
                                    <div class="col-md-6">
                                        <select class="form-select" id="media_type" name="media_type" required>
                                            <option value="" disabled>Select file type</option>
                                            <option value="url" {{ $portfolio->media_type == 'url' ? 'selected' : '' }}>Video</option>
                                            <option value="picture" {{ $portfolio->media_type == 'picture' ? 'selected' : '' }}>Images</option>
                                        </select>
                                    </div>

                                    <div class="col-lg-12">
                                       
                                        <div id="url_input" class="fileoptions" style="display: {{ $portfolio->media_type == 'url' ? 'block' : 'none' }}">
                                            <input type="text" name="urladdress" class="form-control" placeholder=".e.g. https://www.youtube.com/embed/KAca7KQ9p-A" value="{{ old('urladdress', $portfolio->media_files) }}">
                                        </div>

                                        <div id="picture_input" class="fileoptions" style="display: {{ $portfolio->media_type == 'picture' ? 'block' : 'none' }}">
                                            <input type="file" id="image_file" name="photo_files" class="form-control pt-3" accept="image/*" onchange="loadFile(event)">
                                            @if ($portfolio->media_type == 'picture' && $portfolio->media_files)
                                                <div class="mt-3">
                                                    <img id="output" src="{{ asset('uploads/images/' . $portfolio->media_files) }}" class="img-thumbnail" style="max-width: 200px;">
                                                </div>
                                            @endif
                                        </div>
                                    </div>

                                    <div class="col-md-12">
                                        <label class="form-label">Description</label>
                                        <textarea class="form-control desiri" name="description">{{ old('description', $portfolio->description) }}</textarea>
                                    </div>

                                    <div class="col-md-12">
                                        <input type="submit" class="btn tbn-all" value="Update Portfolio">
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
    // Show/Hide file inputs based on media type
    document.getElementById('media_type').addEventListener('change', function () {
        const type = this.value;
        document.querySelectorAll('.fileoptions').forEach(option => option.style.display = 'none');
        if (type === 'url') document.getElementById('url_input').style.display = 'block';
        if (type === 'mp3') document.getElementById('mp3_input').style.display = 'block';
        if (type === 'picture') document.getElementById('picture_input').style.display = 'block';
    });
</script>
