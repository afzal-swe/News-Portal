@extends('Backend.layouts.apps')
@section('content')

{{-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script> --}}

<main id="main" class="main">
<section class="section">
    <div class="row">
      <div class="col-lg-12">
        <div class="card">
          <div class="card-body">
            <h5 class="card-title">Website Info Update Panel</h5>

            <!-- Floating Labels Form -->
            <form class="row g-3" action="{{ route('website_info.update',$website_update->id) }}" method="POST" enctype="multipart/form-data">

                @csrf
              
              <div class="col-md-6">
                <div class="form-floating">
                  <input type="text" class="form-control" name="wname_bn" id="floatingEmail" value="{{ $website_update->wname_bn }}">
                  <label for="floatingEmail">Website Name BN</label>
                </div>
              </div>

              <div class="col-md-6">
                <div class="form-floating">
                  <input type="text" class="form-control" name="wname_en" id="floatingEmail" value="{{ $website_update->wname_en }}">
                  <label for="floatingEmail">Website Name EN</label>
                </div>
              </div>

              <div class="col-md-6">
                <div class="form-floating">
                  <input type="text" class="form-control" name="address_bn" id="floatingEmail" value="{{ $website_update->address_bn }}">
                  <label for="floatingEmail">Address BN</label>
                </div>
               
              </div>

              <div class="col-md-6">
                <div class="form-floating">
                  <input type="text" class="form-control" name="address_en" id="floatingEmail" value="{{ $website_update->address_en }}">
                  <label for="floatingEmail">Address EN</label>
                </div>
              </div>

              <div class="col-md-6">
                <div class="form-floating">
                  <input type="text" class="form-control" name="phone_bn" id="floatingEmail" value="{{ $website_update->phone_bn }}">
                  <label for="floatingEmail">Phone BN</label>
                </div>
              </div>

              <div class="col-md-6">
                <div class="form-floating">
                  <input type="text" class="form-control" name="phone_en" id="floatingEmail" value="{{ $website_update->phone_en }}">
                  <label for="floatingEmail">Phone EN</label>
                </div>
              </div>

              <div class="col-md-6">
                <div class="form-floating">
                  <input type="email" class="form-control" name="email" id="floatingEmail" value="{{ $website_update->email }}">
                  <label for="floatingEmail">E-mail</label>
                </div>
              </div>


              <div class="col-md-6">
                <div class="form-floating">
                    {{-- <samp class="text-danger">*</samp> --}}
                  <input type="file"  class="form-control" name="logo" id="floatingPassword" >
                </div>
              </div><hr>

              <div class="col-md-6">
                <label for="inputText" class="col-sm-2 col-form-label"></label>
                <div class="col-sm-10">
                    <img src="{{ asset($website_update->logo) }}" alt="" style="height: 180px; width:290px;">
                    
                </div>
              </div><br>

       


              <div class="text-right">
                <button type="submit" class="btn btn-primary">Update</button>
                
              </div>
            </form><!-- End floating Labels Form -->

          </div>
        </div>

      </div>
    </div>
  </section>
</main>



@endsection