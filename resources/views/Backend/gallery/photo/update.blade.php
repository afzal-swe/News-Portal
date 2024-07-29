@extends('Backend.layouts.apps')
@section('content')
    
<main id="main" class="main">

    

    <section class="section">
      <div class="row">
        <div class="col-lg-12">

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Photo Gallery Update</h5>

              <!-- General Form Elements -->
              <form action="{{ route('photo.update',$edit->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="row mb-3">
                  <label for="inputText" class="col-sm-2 col-form-label">Title BN</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="title_bn" value="{{ $edit->title_bn }}">
                  </div>
                </div>
                <div class="row mb-3">
                  <label for="inputText" class="col-sm-2 col-form-label">Title EN</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="title_en" value="{{ $edit->title_en }}">
                  </div>
                </div>

            
                <div class="row mb-3">
                    <label for="inputText" class="col-sm-2 col-form-label">Type</label>
                    <div class="col-sm-10">

                        <select name="type" id="" class="form-control" required>
                          <option selected disabled>==Select Option==</option>
                          <option value="0" @if ($edit->type==0) selected @endif>Small Photo</option>
                          <option value="1" @if ($edit->type==1) selected @endif>Big Photo</option>
                        </select>
                    </div>
                  </div>

                  <div class="row mb-3">
                    <label for="inputText" class="col-sm-2 col-form-label">Full Name</label>
                    <div class="col-sm-10">
                      <input type="file" class="form-control" name="photo">
                    </div>
                  </div>

                  <div class="row mb-3">
                    <label for="inputText" class="col-sm-2 col-form-label"></label>
                    <div class="col-sm-10">
                        <img src="{{ asset($edit->photo) }}" alt="" style="height: 110px; width:190px;">
                        <input type="hidden" name="oldimage" value="{{ $edit->photo }}">
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