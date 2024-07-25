@extends('Backend.layouts.apps')
@section('content')

{{-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script> --}}

<main id="main" class="main">
<section class="section">
    <div class="row">
      <div class="col-lg-12">
        <div class="card">
          <div class="card-body">
            <h5 class="card-title">Post Insert Panel</h5>

            <!-- Floating Labels Form -->
            <form class="row g-3" action="{{ route('post.store') }}" method="POST" enctype="multipart/form-data">

                @csrf
              
              <div class="col-md-6">
                <div class="form-floating">
                  <input type="text" class="form-control @error('title_bn') is-invalid @enderror" name="title_bn" id="floatingEmail" placeholder="Title Bangla">
                  <label for="floatingEmail">Title Bangla <samp class="text-danger">*</samp></label>
                </div>
                @error('title_bn')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
              </div>

              <div class="col-md-6">
                <div class="form-floating">
                  <input type="text" class="form-control @error('title_en') is-invalid @enderror" name="title_en" id="floatingPassword" placeholder="Title English">
                  <label for="floatingPassword">Title English <samp class="text-danger">*</samp></label>
                </div>
                @error('title_en')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
              </div>
            
              {{-- Category and sub-category --}}
              <div class="col-md-6">
                <div class="form-floating mb-3">
                  <select class="form-select @error('cat_id') is-invalid @enderror" name="cat_id" id="cat_id" aria-label="State">
                    <option selected disabled>Select Option <samp class="text-danger">*</samp></option>
                    @foreach ($category as $row)
                        
                    <option value="{{ $row->id }}">{{ $row->category_en }}| {{ $row->category_bn }}</option>
                    @endforeach
                    
                  </select>
                  <label for="floatingSelect">Category</label>
                    @error('cat_id')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                
              </div>
              <div class="col-md-6">
                <div class="form-floating mb-3">
                  <select class="form-select" name="subcat_id" id="subcat_id" aria-label="State">
                    <option selected disabled>Select Option</option>

                    @foreach ($category as $row)
                        
                    <option disabled class="text-info">{{ $row->category_en }}| {{ $row->category_bn }}</option>
                    @foreach ($sub_cat as $row)
                        
                    <option value="{{ $row->id }}">{{ $row->subcategory_en }}| {{ $row->subcategory_bn }}</option>
                    @endforeach
                    @endforeach
                    
                  </select>
                  <label for="floatingSelect">Sub-Category</label>
                </div>
              </div> 

              {{-- District and Divition --}}
              <div class="col-md-6">
                <div class="form-floating mb-3">
                  <select class="form-select @error('dist_id') is-invalid @enderror" name="dist_id" id="dist_id" aria-label="State">
                    <option selected disabled> Select Option <samp class="text-danger">*</samp></option>
                    @foreach ($district as $row)
                        
                    <option value="{{ $row->id }}">{{ $row->district_en }}| {{ $row->district_bn }}</option>
                    @endforeach
                    
                  </select>
                  <label for="floatingSelect">District</label>
                  @error('dist_id')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-floating mb-3">
                  <select class="form-select" name="subdist_id" id="subdist_id" aria-label="State">
                    <option selected disabled>Select Option</option>
                    @foreach ($district as $row)
                        
                    <option disabled class="text-info">{{ $row->district_en }}| {{ $row->district_bn }}</option>
                    @foreach ($sub_dis as $row)
                        
                    <option value="{{ $row->id }}">{{ $row->subdistrict_en }}| {{ $row->subdistrict_bn }}</option>
                    @endforeach
                    @endforeach
                    
                  </select>
                  <label for="floatingSelect">Sub-District</label>
                </div>
              </div>
              {{-- End --}}


              {{-- Tags Section --}}
              <div class="col-md-6">
                <div class="form-floating">
                  <input type="text" class="form-control @error('tags_bn') is-invalid @enderror" name="tags_bn" id="floatingEmail" placeholder="Tags Bangla">
                  <label for="floatingEmail">Tags Bangla <samp class="text-danger">*</samp></label>
                </div>
                @error('tags_bn')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
              </div>

              <div class="col-md-6">
                <div class="form-floating">
                  <input type="text" class="form-control @error('tags_en') is-invalid @enderror" name="tags_en" id="floatingPassword" placeholder="Tags English">
                  <label for="floatingPassword">Tags English <samp class="text-danger">*</samp></label>
                </div>
                @error('tags_en')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
              </div>
              {{-- End --}}

              <div class="col-6">
                <div class="form-floating">
                  <textarea class="form-control @error('details_bn') is-invalid @enderror" name="details_bn" placeholder="Details Bangla" id="floatingTextarea" style="height: 100px;"></textarea>
                  <label for="floatingTextarea">Details Bangla <samp class="text-danger">*</samp></label>
                </div>
                @error('details_bn')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
              </div>

              <div class="col-6">
                <div class="form-floating">
                  <textarea class="form-control @error('details_en') is-invalid @enderror" name="details_en" placeholder="Details English" id="floatingTextarea" style="height: 100px;"></textarea>
                  <label for="floatingTextarea">Details English <samp class="text-danger">*</samp></label>
                </div>
                @error('details_en')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
              </div>

              <div class="col-md-6">
                <div class="form-floating">
                    {{-- <samp class="text-danger">*</samp> --}}
                  <input type="file"  class="form-control @error('image') is-invalid @enderror" name="image" id="floatingPassword" >
                  
                </div>
                @error('image')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
              </div> <br><hr>

              <div class="card">
                <div class="card-body">
                  <h5 class="card-title">Active Section</h5>
    
                  <!-- List group With Checkboxes and radios -->
                  <ul class="list-group">
                    <li class="list-group-item">
                      <input class="form-check-input me-1" type="checkbox" value="1" name="headline" aria-label="...">
                      Headline
                    </li>
                    <li class="list-group-item">
                      <input class="form-check-input me-1" type="checkbox" value="1" name="first_section" aria-label="...">
                      First Section
                    </li>
                    <li class="list-group-item">
                      <input class="form-check-input me-1" type="checkbox" value="1" name="first_section_thumbnail" aria-label="...">
                      First Section Big Thumbnail
                    </li>
                    <li class="list-group-item">
                      <input class="form-check-input me-1" type="checkbox" value="1" name="bigthumbnail" aria-label="...">
                      General Big Thumbnail
                    </li>
                    <li class="list-group-item">
                      <input class="form-check-input me-1" type="checkbox" value="1" name="status" aria-label="...">
                     Status
                    </li>
                  </ul><!-- End List Checkboxes and radios -->
    
                </div>
              </div>


              <div class="text-right">
                <button type="submit" class="btn btn-primary">Submit Post</button>
                
              </div>
            </form><!-- End floating Labels Form -->

          </div>
        </div>

      </div>
    </div>
  </section>
</main>



@endsection