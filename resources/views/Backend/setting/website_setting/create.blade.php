@extends('Backend.layouts.apps')
@section('content')

{{-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script> --}}

<main id="main" class="main">
<section class="section">
    <div class="row">
      <div class="col-lg-12">
        <div class="card">
          <div class="card-body">
            <h5 class="card-title">Website Create Panel</h5>

            <!-- Floating Labels Form -->
            <form class="row g-3" action="{{ route('website.store') }}" method="POST">

                @csrf
              
              <div class="col-md-6">
                <div class="form-floating">
                  <input type="text" class="form-control" name="website_name_bn" id="floatingEmail" placeholder="Website Name BN" required>
                  <label for="floatingEmail">Website Name BN</label>
                </div>
              </div>

              <div class="col-md-6">
                <div class="form-floating">
                  <input type="text" class="form-control" name="website_name_en" id="floatingEmail" placeholder="Website Name EN">
                  <label for="floatingEmail">Website Name EN</label>
                </div>
              </div>

              <div class="col-md-6">
                <div class="form-floating">
                  <input type="text" class="form-control" name="website_link" id="floatingEmail" placeholder="Website Link">
                  <label for="floatingEmail">Website Link</label>
                </div>
              </div><br><hr>

              
              

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