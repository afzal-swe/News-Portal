@extends('Backend.layouts.apps')
@section('content')

{{-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script> --}}

<main id="main" class="main">
<section class="section">
    <div class="row">
      <div class="col-lg-12">
        <div class="card">
          <div class="card-body">
            <h5 class="card-title">Social Settings Panel</h5>

            <!-- Floating Labels Form -->
            <form class="row g-3" action="{{ route('social.add') }}" method="POST">

                @csrf
              
              <div class="col-md-12">
                <div class="form-floating">
                  <input type="text" class="form-control" name="facebook" id="floatingEmail" placeholder="Facebook">
                  <label for="floatingEmail">Facebook</label>
                </div>
                
              </div>

              <div class="col-md-12">
                <div class="form-floating">
                  <input type="text" class="form-control" name="twitter" id="floatingPassword" placeholder="Twitter">
                  <label for="floatingPassword">Twitter</label>
                </div>
              </div>

              <div class="col-md-12">
                <div class="form-floating">
                  <input type="text" class="form-control" name="youtube" id="floatingPassword" placeholder="Youtube">
                  <label for="floatingPassword">Youtube</label>
                </div>
              </div>

              <div class="col-md-12">
                <div class="form-floating">
                  <input type="text" class="form-control" name="instagram" id="floatingPassword" placeholder="Instagram">
                  <label for="floatingPassword">Instagram</label>
                </div>
              </div>

              <div class="col-md-12">
                <div class="form-floating">
                  <input type="text" class="form-control" name="linkedin" id="floatingPassword" placeholder="Linkedin">
                  <label for="floatingPassword">Linkedin</label>
                </div>
              </div>
            
            

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