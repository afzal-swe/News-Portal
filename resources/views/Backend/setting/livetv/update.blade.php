@extends('Backend.layouts.apps')
@section('content')

{{-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script> --}}

<main id="main" class="main">
<section class="section">
    <div class="row">
      <div class="col-lg-12">
        <div class="card">
          <div class="card-body">
            <h5 class="card-title">Live TV Update Settings Panel</h5>

            <!-- Floating Labels Form -->
            <form class="row g-3" action="{{ route('livetv.update',$livetv->id) }}" method="POST">

                @csrf
              
              <div class="col-md-12">
                <div class="form-floating">
                  <input type="text" class="form-control" name="embed_code" id="floatingEmail" value="{{ $livetv->embed_code }}">
                  <label for="floatingEmail">Embed_code</label>
                </div>
              </div><br><hr>

              
              <div class="card">
                <div class="card-body">
                  <h5 class="card-title">Active Section</h5>
                  <!-- List group With Checkboxes and radios -->
                  <ul class="list-group">
                    <li class="list-group-item">
                      <input class="form-check-input me-1" type="checkbox" value="1" name="status" @if ($livetv->status==1) checked @endif aria-label="...">
                     Status
                    </li>
                    @if ($livetv->status==1)
                    <small class="text-success" > Now Live TV Active</small>
                    @else
                    <small class="text-danger" > Now Live TV Deactive</small>
                    @endif
                    
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