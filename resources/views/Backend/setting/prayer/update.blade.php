@extends('Backend.layouts.apps')
@section('content')

{{-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script> --}}

<main id="main" class="main">
<section class="section">
    <div class="row">
      <div class="col-lg-12">
        <div class="card">
          <div class="card-body">
            <h5 class="card-title">Prayers Update Settings Panel</h5>

            <!-- Floating Labels Form -->
            <form class="row g-3" action="{{ route('prayer.update',$prayer->id) }}" method="POST">

                @csrf
              
              <div class="col-md-6">
                <div class="form-floating">
                  <input type="text" class="form-control" name="fajr_bn" id="floatingEmail" value="{{ $prayer->fajr_bn }}">
                  <label for="floatingEmail">Fajr_bn</label>
                </div>
                
              </div>

              <div class="col-md-6">
                <div class="form-floating">
                  <input type="text" class="form-control" name="fajr_en" id="floatingPassword" value="{{ $prayer->fajr_en }}">
                  <label for="floatingPassword">Fajr_en</label>
                </div>
              </div>

              <div class="col-md-6">
                <div class="form-floating">
                  <input type="text" class="form-control" name="dhuhr_bn" id="floatingPassword" value="{{ $prayer->dhuhr_bn }}">
                  <label for="floatingPassword">Dhuhr_bn</label>
                </div>
              </div>

              <div class="col-md-6">
                <div class="form-floating">
                  <input type="text" class="form-control" name="dhuhr_en" id="floatingPassword" value="{{ $prayer->dhuhr_en }}">
                  <label for="floatingPassword">Dhuhr_en</label>
                </div>
              </div>

              <div class="col-md-6">
                <div class="form-floating">
                  <input type="text" class="form-control" name="asr_bn" id="floatingPassword" value="{{ $prayer->asr_bn }}">
                  <label for="floatingPassword">Asr_bn</label>
                </div>
              </div>

              <div class="col-md-6">
                <div class="form-floating">
                  <input type="text" class="form-control" name="asr_en" id="floatingPassword" value="{{ $prayer->asr_en }}">
                  <label for="floatingPassword">Asr_en</label>
                </div>
              </div>

              <div class="col-md-6">
                <div class="form-floating">
                  <input type="text" class="form-control" name="maghrib_bn" id="floatingPassword" value="{{ $prayer->maghrib_bn }}">
                  <label for="floatingPassword">Maghrib_bn</label>
                </div>
              </div>

              <div class="col-md-6">
                <div class="form-floating">
                  <input type="text" class="form-control" name="maghrib_en" id="floatingPassword" value="{{ $prayer->maghrib_en }}">
                  <label for="floatingPassword">Maghrib_en</label>
                </div>
              </div>


              <div class="col-md-6">
                <div class="form-floating">
                  <input type="text" class="form-control" name="isha_bn" id="floatingPassword" value="{{ $prayer->isha_bn }}">
                  <label for="floatingPassword">Isha_bn</label>
                </div>
              </div>

              <div class="col-md-6">
                <div class="form-floating">
                  <input type="text" class="form-control" name="isha_en"end="floatingPassword" value="{{ $prayer->isha_en }}">
                  <label for="floatingPassword">Isha_en</label>
                </div>
              </div>

              <div class="col-md-6">
                <div class="form-floating">
                  <input type="text" class="form-control" name="jummah_bn"end="floatingPassword" value="{{ $prayer->jummah_bn }}">
                  <label for="floatingPassword">Jummah_bn</label>
                </div>
              </div>

              <div class="col-md-6">
                <div class="form-floating">
                  <input type="text" class="form-control" name="jummah_en"end="floatingPassword" value="{{ $prayer->jummah_en }}">
                  <label for="floatingPassword">Jummah_en</label>
                </div>
              </div>
            
            

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