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



<section class="ads-details float-start w-100 bg-white">
        @if (session('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ session('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif
        <div class="container">
            <div class="row row-cols-1 row-cols-lg-2 gy-4 g-lg-5">
                
                   <div class="comon-ads-forms float-start w-100">
                     <form action="{{ route('adlistingform.store') }}" method="post" enctype="multipart/form-data">
                      @csrf
                        <input type="hidden" name="ad_id" value="{{ $ad->id }}">
                        <input type="hidden" name="amount" value="{{ $ad->ad_price }}">
                        <input type="hidden" name="ad_size" value="{{ $ad->ad_size }}">
                            <div class="container">
                            <div class="inside-forms-sctions d-block col-lg-8 mx-auto">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label class="form-label">Start Date</label>
                                            <input type="date" class="form-control" name="start_date"/>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label class="form-label">End Date</label>
                                            <input type="date" class="form-control" name="end_date"/>
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                            <label class="form-label">Upload ad picture</label>
                                            <div class="avatar-upload">
                                                <div class="avatar-edit">
                                                    <input type="file" id="imageUpload" name="ad_image" accept=".png, .jpg, .jpeg" />
                                                    <label for="imageUpload"></label>
                                                </div>
                                                <div class="avatar-preview">
                                                    <div class="imagePreview" style="background-image: url('{{ asset('uploads/' . $ad->image) }}');">
                                                    </div>
                                                </div>
                                            </div>
                                    </div>
                                    <div class="col-lg-12">
                                            <input type="text" class="form-control" name="ad_url"  placeholder="AD URL">
                                    </div>

                                    <button class="btn btn-buy mt-4 signuop0-btn"> Submit <i class="ri-arrow-right-up-line"></i> </button>
                                   
                                </div>
                            </div>
                           
                         </div>
                     </form>
                   </div>
               
            </div>
        </div>
    </section>



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
</script>