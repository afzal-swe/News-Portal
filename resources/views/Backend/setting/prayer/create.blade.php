@extends('Backend.layouts.apps')
@section('content')

{{-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script> --}}

<main id="main" class="main">
<section class="section">
    <div class="row">
      <div class="col-lg-12">
        <div class="card">
          <div class="card-body">
            <h5 class="card-title">Prayers Settings Panel</h5>

            <!-- Floating Labels Form -->
            <form class="row g-3" action="{{ route('prayer.store') }}" method="POST">

                @csrf
              
              <div class="col-md-6">
                <div class="form-floating">
                  <input type="text" class="form-control" name="fajr_bn" id="floatingEmail" placeholder="Fajr_bn">
                  <label for="floatingEmail">Fajr_bn</label>
                </div>
                
              </div>

              <div class="col-md-6">
                <div class="form-floating">
                  <input type="text" class="form-control" name="fajr_en" id="floatingPassword" placeholder="Fajr_en">
                  <label for="floatingPassword">Fajr_en</label>
                </div>
              </div>

              <div class="col-md-6">
                <div class="form-floating">
                  <input type="text" class="form-control" name="dhuhr_bn" id="floatingPassword" placeholder="Dhuhr_bn">
                  <label for="floatingPassword">Dhuhr_bn</label>
                </div>
              </div>

              <div class="col-md-6">
                <div class="form-floating">
                  <input type="text" class="form-control" name="dhuhr_en" id="floatingPassword" placeholder="Dhuhr_en">
                  <label for="floatingPassword">Dhuhr_en</label>
                </div>
              </div>

              <div class="col-md-6">
                <div class="form-floating">
                  <input type="text" class="form-control" name="asr_bn" id="floatingPassword" placeholder="Asr_bn">
                  <label for="floatingPassword">Asr_bn</label>
                </div>
              </div>

              <div class="col-md-6">
                <div class="form-floating">
                  <input type="text" class="form-control" name="asr_en" id="floatingPassword" placeholder="Asr_en">
                  <label for="floatingPassword">Asr_en</label>
                </div>
              </div>

              <div class="col-md-6">
                <div class="form-floating">
                  <input type="text" class="form-control" name="maghrib_bn" id="floatingPassword" placeholder="Maghrib_bn">
                  <label for="floatingPassword">Maghrib_bn</label>
                </div>
              </div>

              <div class="col-md-6">
                <div class="form-floating">
                  <input type="text" class="form-control" name="maghrib_en" id="floatingPassword" placeholder="Maghrib_en">
                  <label for="floatingPassword">Maghrib_en</label>
                </div>
              </div>


              <div class="col-md-6">
                <div class="form-floating">
                  <input type="text" class="form-control" name="isha_bn" id="floatingPassword" placeholder="Isha_bn">
                  <label for="floatingPassword">Isha_bn</label>
                </div>
              </div>

              <div class="col-md-6">
                <div class="form-floating">
                  <input type="text" class="form-control" name="isha_en"end="floatingPassword" placeholder="Isha_en">
                  <label for="floatingPassword">Isha_en</label>
                </div>
              </div>

              <div class="col-md-6">
                <div class="form-floating">
                  <input type="text" class="form-control" name="jummah_bn"end="floatingPassword" placeholder="Jummah_bn">
                  <label for="floatingPassword">Jummah_bn</label>
                </div>
              </div>

              <div class="col-md-6">
                <div class="form-floating">
                  <input type="text" class="form-control" name="jummah_en"end="floatingPassword" placeholder="Jummah_en">
                  <label for="floatingPassword">Jummah_en</label>
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