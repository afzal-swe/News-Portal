



@extends('Backend.layouts.apps')
@section('content')
    
<main id="main" class="main">

    

    <section class="section">
      <div class="row">
        <div class="col-lg-12">

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Video Gallery Update</h5>

              <!-- General Form Elements -->
              <form action="{{ route('video.update',$edit_video->id) }}" method="POST">
                @csrf
                <div class="row mb-3">
                  <label for="inputText" class="col-sm-2 col-form-label">Title</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="title" value="{{ $edit_video->title }}">
                  </div>
                </div>

                <div class="row mb-3">
                  <label for="inputText" class="col-sm-2 col-form-label">Embed Code</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="embed_code" value="{{ $edit_video->embed_code }}">
                  </div>
                </div>

            
                <div class="row mb-3">
                    <label for="inputText" class="col-sm-2 col-form-label">Type</label>
                    <div class="col-sm-10">

                        <select name="type" id="" class="form-control" >
                          <option selected disabled>==Select Option==</option>
                          <option value="0" @if ($edit_video->type==0) selected @endif>Small Video</option>
                          <option value="1" @if ($edit_video->type==1) selected @endif>Big Video</option>
                        </select>
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