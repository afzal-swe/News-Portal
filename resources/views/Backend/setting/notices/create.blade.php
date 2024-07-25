@extends('Backend.layouts.apps')
@section('content')

{{-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script> --}}

<main id="main" class="main">
<section class="section">
    <div class="row">
      <div class="col-lg-12">
        <div class="card">
          <div class="card-body">
            <h5 class="card-title">Notice Settings Panel</h5>

            <!-- Floating Labels Form -->
            <form class="row g-3" action="{{ route('notice.store') }}" method="POST">

                @csrf
              
              <div class="col-md-6">
                <div class="form-floating">
                  <input type="text" class="form-control" name="notice_bn" id="floatingEmail" placeholder="Notice_bn" required>
                  <label for="floatingEmail">Notice_bn</label>
                </div>
              </div>

              <div class="col-md-6">
                <div class="form-floating">
                  <input type="text" class="form-control" name="notice_en" id="floatingEmail" placeholder="Notice_en" required>
                  <label for="floatingEmail">Notice_en</label>
                </div>
              </div><br><hr>

              
              <div class="card">
                <div class="card-body">
                  <h5 class="card-title">Active Section</h5>
                  <!-- List group With Checkboxes and radios -->
                  <ul class="list-group">
                    <li class="list-group-item">
                      <input class="form-check-input me-1" type="checkbox" value="1" name="status" aria-label="...">
                     Status
                    </li>
                    <small class="text-danger" > Now Notice Deactive</small>
                  </ul><!-- End List Checkboxes and radios -->
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