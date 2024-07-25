@extends('Backend.layouts.apps')
@section('content')

{{-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script> --}}

<main id="main" class="main">
<section class="section">
    <div class="row">
      <div class="col-lg-12">
        <div class="card">
          <div class="card-body">
            <h5 class="card-title">Seo Settings Panel</h5>

            <!-- Floating Labels Form -->
            <form class="row g-3" action="{{ route('seo.store') }}" method="POST">

                @csrf
              
              <div class="col-md-12">
                <div class="form-floating">
                  <input type="text" class="form-control" name="meta_author" id="floatingEmail" placeholder="meta_author">
                  <label for="floatingEmail">meta_author</label>
                </div>
                
              </div>

              <div class="col-md-12">
                <div class="form-floating">
                  <input type="text" class="form-control" name="meta_title" id="floatingPassword" placeholder="meta_title">
                  <label for="floatingPassword">meta_title</label>
                </div>
              </div>

              <div class="col-md-12">
                <div class="form-floating">
                  <input type="text" class="form-control" name="meta_keyword" id="floatingPassword" placeholder="meta_keyword">
                  <label for="floatingPassword">meta_keyword</label>
                </div>
              </div>

              <div class="col-md-12">
                <div class="form-floating">
                  <input type="text" class="form-control" name="meta_description" id="floatingPassword" placeholder="meta_description">
                  <label for="floatingPassword">meta_description</label>
                </div>
              </div>

              <div class="col-md-12">
                <div class="form-floating">
                  <input type="text" class="form-control" name="google_analytics" id="floatingPassword" placeholder="google_analytics">
                  <label for="floatingPassword">google_analytics</label>
                </div>
              </div>

              <div class="col-md-12">
                <div class="form-floating">
                  <input type="text" class="form-control" name="google_verification" id="floatingPassword" placeholder="google_verification">
                  <label for="floatingPassword">google_verification</label>
                </div>
              </div>

              <div class="col-md-12">
                <div class="form-floating">
                  <input type="text" class="form-control" name="alexa_analytics" id="floatingPassword" placeholder="alexa_analytics">
                  <label for="floatingPassword">alexa_analytics</label>
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