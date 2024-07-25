@extends('Backend.layouts.apps')
@section('content')

{{-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script> --}}

<main id="main" class="main">
<section class="section">
    <div class="row">
      <div class="col-lg-12">
        <div class="card">
          <div class="card-body">
            <h5 class="card-title text-primary">Post Update Panel</h5>

            <!-- Floating Labels Form -->
            <form class="row g-3" action="{{ route('post.update',$edit_post->id) }}" method="POST" enctype="multipart/form-data">

                @csrf
              
              <div class="col-md-6">
                <div class="form-floating">
                  <input type="text" class="form-control " name="title_bn" id="floatingEmail" value="{{ $edit_post->title_bn }}">
                  <label for="floatingEmail">Title Bangla</label>
                </div>
                
              </div>

              <div class="col-md-6">
                <div class="form-floating">
                  <input type="text" class="form-control" name="title_en" id="floatingPassword" value="{{ $edit_post->title_en }}">
                  <label for="floatingPassword">Title English</label>
                </div>
              </div>
            
              {{-- Category and sub-category --}}
              <div class="col-md-6">
                <div class="form-floating mb-3">
                  <select class="form-select" name="cat_id" id="cat_id" aria-label="State">
                    @foreach ($category as $row)
                        
                    <option value="{{ $row->id }}"  @if ($row->id==$edit_post->cat_id) selected @endif>{{ $row->category_en }}| {{ $row->category_bn }}</option>
                    @endforeach
                    
                  </select>
                  <label for="floatingSelect">Category</label>
                    
                </div>
                
              </div>
              <div class="col-md-6">
                <div class="form-floating mb-3">
                  <select class="form-select" name="subcat_id" id="subcat_id" aria-label="State">
                    @foreach ($category as $row)
                        
                    <option disabled class="text-info">{{ $row->category_en }}| {{ $row->category_bn }}</option>
                    @foreach ($sub_cat as $row)
                        
                    <option value="{{ $row->id }}" @if ($row->id==$edit_post->subcat_id) selected @endif>{{ $row->subcategory_en }}| {{ $row->subcategory_bn }}</option>
                    @endforeach
                    @endforeach
                    
                  </select>
                  <label for="floatingSelect">Sub-Category</label>
                </div>
              </div> 

              {{-- District and Divition --}}
              <div class="col-md-6">
                <div class="form-floating mb-3">
                  <select class="form-select" name="dist_id" id="dist_id" aria-label="State">
                    @foreach ($district as $row)
                        
                    <option value="{{ $row->id }}" @if ($row->id==$edit_post->dist_id) selected @endif>{{ $row->district_en }}| {{ $row->district_bn }}</option>
                    @endforeach
                    
                  </select>
                  <label for="floatingSelect">District</label>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-floating mb-3">
                  <select class="form-select" name="subdist_id" id="subdist_id" aria-label="State">
                    <option selected disabled>Select Option</option>
                    @foreach ($district as $row)
                        
                    <option disabled class="text-info">{{ $row->district_en }}| {{ $row->district_bn }}</option>
                    @foreach ($sub_dis as $row)
                        
                    <option value="{{ $row->id }}" @if ($row->id==$edit_post->subdist_id) selected @endif >{{ $row->subdistrict_en }}| {{ $row->subdistrict_bn }}</option>
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
                  <input type="text" class="form-control" name="tags_bn" id="floatingEmail" value="{{ $edit_post->tags_bn }}" >
                  <label for="floatingEmail">Tags Bangla</label>
                </div>
              </div>

              <div class="col-md-6">
                <div class="form-floating">
                  <input type="text" class="form-control" name="tags_en" id="floatingPassword" value="{{ $edit_post->tags_en }}">
                  <label for="floatingPassword">Tags English</label>
                </div>
              </div>
              {{-- End --}}

              <div class="col-6">
                <div class="form-floating">
                  <textarea class="form-control" name="details_bn" placeholder="Details Bangla" id="floatingTextarea" style="height: 100px;">
                    {!! $edit_post->details_bn !!}
                </textarea>
                  <label for="floatingTextarea">Details Bangla</label>
                </div>
              </div>

              <div class="col-6">
                <div class="form-floating">
                  <textarea class="form-control" name="details_en" placeholder="Details English" id="floatingTextarea" style="height: 100px;">
                    {!! $edit_post->details_en !!}
                </textarea>
                  <label for="floatingTextarea">Details English</label>
                </div>
              </div>

                <div class="col-md-6">
                    <div class="form-floating">
                      <input type="file"  class="form-control" name="image" id="floatingPassword" >
                    </div>
                  </div>

                  <div class="col-md-6">
                    <img src="{{ asset($edit_post->image) }}" alt="" style="height: 100px; width:170px;">
                    <input type="hidden" name="oldimage" value="{{ $edit_post->image }}">
                  </div><br>
             
              
               <br><hr>

              <div class="card">
                <div class="card-body">
                  <h5 class="card-title">Active Section</h5>
    
                  <!-- List group With Checkboxes and radios -->
                  <ul class="list-group">
                    <li class="list-group-item">
                      <input class="form-check-input me-1" type="checkbox" value="1" name="headline" @if ($edit_post->headline==1) checked @endif aria-label="...">
                      Headline
                    </li>
                    <li class="list-group-item">
                      <input class="form-check-input me-1" type="checkbox" value="1" name="first_section" @if ($edit_post->first_section==1) checked @endif aria-label="...">
                      First Section
                    </li>
                    <li class="list-group-item">
                      <input class="form-check-input me-1" type="checkbox" value="1" name="first_section_thumbnail" @if ($edit_post->first_section_thumbnail==1) checked @endif aria-label="...">
                      First Section Big Thumbnail
                    </li>
                    <li class="list-group-item">
                      <input class="form-check-input me-1" type="checkbox" value="1" name="bigthumbnail" @if ($edit_post->bigthumbnail==1) checked @endif aria-label="...">
                      General Big Thumbnail
                    </li>
                    <li class="list-group-item">
                      <input class="form-check-input me-1" type="checkbox" value="1" name="status" @if ($edit_post->status==1) checked @endif aria-label="...">
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