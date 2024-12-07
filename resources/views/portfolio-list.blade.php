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
                                <img alt="user" class="cover-img" src="{{ asset('images/avatar.jpg') }}" />                                @endif
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
                 <h2> Portfolio List </h2>
             </div>
             <div class="col-12">
                 <div class="crm-profiles cm-forms-input d-inline-block w-100">
                    <table id="example2" class="table nowrap cell-border" style="width:100%">
                        <thead>
                            <tr>
                                <th>Title</th>
                                <th>File type</th>
                                <th>Date</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($portfolios as $portfolio)
                                <tr>
                                    <td>{{ $portfolio->title }}</td>
                                    <td>
                                        @if($portfolio->media_type === 'url')
                                        <a data-fancybox="porfolio" class="videos01-div" href="{{ $portfolio->media_files }}">
                                            <iframe class="crm-divs" src="{{ $portfolio->media_files }}" title="Media content" frameborder="0"
                                                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                                    referrerpolicy="strict-origin-when-cross-origin" allowfullscreen>
                                            </iframe>
                                       </a>
                                        @elseif($portfolio->media_type === 'picture')
                                        <a data-fancybox="porfolio" href="{{ asset('uploads/images/' . $portfolio->media_files) }}">
                                            <img class="crm-divs" src="{{ asset('uploads/images/' . $portfolio->media_files) }}" alt="Image" />
                                        </a>
                                        @elseif($portfolio->media_type === 'mp3')
                                        <a data-fancybox="porfolio" data-type="iframe" class="audiofix" href="{{ asset('uploads/audio/' . $portfolio->media_files) }}">
                                        <audio controls>
                                            <source src="{{ asset('uploads/audio/' . $portfolio->media_files) }}" type="audio/mpeg">
                                            Your browser does not support the audio element.
                                        </audio>
                                        </a>
                                        @endif
                                    </td>
                                    <td>{{ $portfolio->post_date}}</td>
                                    <td>
                                        <a href="{{ route('edit_portfolio', $portfolio->id) }}" class="btn">
                                            <i class="ri-pencil-line"></i>
                                        </a>
                                        <a href="{{ route('delete_portfolio', $portfolio->id) }}" class="btn ms-3" onclick="return confirm('Are you sure you want to delete this portfolio?');">
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


</body>
</html>
