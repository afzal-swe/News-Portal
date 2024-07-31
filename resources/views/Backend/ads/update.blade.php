@extends('Backend.layouts.apps')
@section('content')
    
<main id="main" class="main">

    

    <section class="section">
      <div class="row">
        <div class="col-lg-12">

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Ads Update Section</h5>

              <!-- General Form Elements -->
              <form action="{{ route('ads.update',$edit_ads->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="row mb-3">
                  <label for="inputText" class="col-sm-2 col-form-label">Ads Link</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="link" value="{{ $edit_ads->link }}">
                  </div>
                </div>

               
                

                <div class="row mb-3">
                    <label for="inputText" class="col-sm-2 col-form-label">Type</label>
                    <div class="col-sm-10">

                        <select name="type" id="" class="form-control">
                          <option selected disabled>==Select Option==</option>
                          <option value="1" @if ($edit_ads->type==1) selected @endif>Vertical</option>
                          <option value="2" @if ($edit_ads->type==2) selected @endif>Horizontal</option>
                        </select>
                    </div>
                  </div>

                  <div class="row mb-3">
                    <label for="inputText" class="col-sm-2 col-form-label">Image</label>
                    <div class="col-sm-10">
                      <input type="file" class="form-control" name="image">
                    </div>
                  </div>

                  <div class="row mb-3">
                    <label for="inputText" class="col-sm-2 col-form-label"></label>
                    <div class="col-sm-10">
                        @if ($edit_ads->type==2)
                            <img src="{{ asset($edit_ads->image) }}" alt="" style="height: 70px; width:300px;">
                        @else
                            <img src="{{ asset($edit_ads->image) }}" alt="" style="height: 110px; width:20;">
                        @endif
                        
                        <input type="hidden" name="oldimage" value="{{ $edit_ads->image }}">
                    </div>
                  </div>
                  
                </div>

                

                

                <div class="row mb-3">
                  <label class="col-sm-2 col-form-label"></label>
                  <div class="col-sm-10">
                    <button type="submit" class="btn btn-primary">Update</button>
                  </div>
                </div>

              </form><!-- End General Form Elements -->

            </div>
          </div>

        </div>

        
      </div>
    </section>

  </main><!-- End #main -->



@endsection