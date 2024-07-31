@extends('Backend.layouts.apps')
@section('content')

{{-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script> --}}

<main id="main" class="main">
<section class="section">
    <div class="row">
      <div class="col-lg-12">
        <div class="card">
          <div class="card-body">
            <h5 class="card-title">Website Info Panel</h5>

            <!-- Floating Labels Form -->
            <form class="row g-3" action="{{ route('website_info.store') }}" method="POST" enctype="multipart/form-data">

                @csrf
              
              <div class="col-md-6">
                <div class="form-floating">
                  <input type="text" class="form-control @error('wname_bn') is-invalid @enderror" name="wname_bn" id="floatingEmail" placeholder="Website Name BN" value="{{ old('wname_bn') }}">
                  <label for="floatingEmail">Website Name BN <samp class="text-danger">*</samp></label>
                </div>
                @error('wname_bn')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
              </div>

              <div class="col-md-6">
                <div class="form-floating">
                  <input type="text" class="form-control @error('wname_en') is-invalid @enderror" name="wname_en" id="floatingEmail" placeholder="Website Name EN" value="{{ old('wname_en') }}">
                  <label for="floatingEmail">Website Name EN <samp class="text-danger">*</samp></label>
                </div>
                @error('wname_en')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
              </div>

              <div class="col-md-6">
                <div class="form-floating">
                  <input type="text" class="form-control @error('address_bn') is-invalid @enderror" name="address_bn" id="floatingEmail" placeholder="Address BN" value="{{ old('address_bn') }}">
                  <label for="floatingEmail">Address BN <samp class="text-danger">*</samp></label>
                </div>
                @error('address_bn')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
              </div>

              <div class="col-md-6">
                <div class="form-floating">
                  <input type="text" class="form-control @error('address_en') is-invalid @enderror" name="address_en" id="floatingEmail" placeholder="Address EN" value="{{ old('address_en') }}">
                  <label for="floatingEmail">Address EN <samp class="text-danger">*</samp></label>
                </div>
                @error('address_en')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
              </div>

              <div class="col-md-6">
                <div class="form-floating">
                  <input type="text" class="form-control @error('phone_bn') is-invalid @enderror" name="phone_bn" id="floatingEmail" placeholder="Phone BN" value="{{ old('phone_bn') }}">
                  <label for="floatingEmail">Phone BN <samp class="text-danger">*</samp></label>
                </div>
                @error('phone_bn')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
              </div>

              <div class="col-md-6">
                <div class="form-floating">
                  <input type="text" class="form-control @error('phone_en') is-invalid @enderror" name="phone_en" id="floatingEmail" placeholder="Phone EN" value="{{ old('phone_en') }}">
                  <label for="floatingEmail">Phone EN <samp class="text-danger">*</samp></label>
                </div>
                @error('phone_en')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
              </div>

              <div class="col-md-6">
                <div class="form-floating">
                  <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" id="floatingEmail" placeholder="E-mail" value="{{ old('email') }}">
                  <label for="floatingEmail">E-mail <samp class="text-danger">*</samp></label>
                </div>
                @error('email')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
              </div>


              <div class="col-md-6">
                <div class="form-floating">
                    {{-- <samp class="text-danger">*</samp> --}}
                  <input type="file"  class="form-control @error('logo') is-invalid @enderror" name="logo" id="floatingPassword" >
                  
                </div>
                @error('logo')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
              </div> <br><hr>

       


              <div class="text-right">
                <button type="submit" class="btn btn-primary">Submit</button>
                
              </div>
            </form><!-- End floating Labels Form -->

          </div>
        </div>

      </div>
    </div>
  </section>
</main>



@endsection