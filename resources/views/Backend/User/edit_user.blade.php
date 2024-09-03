@extends('Backend.layouts.apps')
@section('content')
    
<main id="main" class="main">

    

    <section class="section">
      <div class="row">
        <div class="col-lg-12">

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Update User Table</h5>

              <!-- General Form Elements -->
              <form action="{{ route('user.update') }}" method="POST">
                @csrf
                <input type="hidden" name="id" value="{{ $user_edit->id }}">
                <div class="row mb-3">
                  <label for="inputText" class="col-sm-2 col-form-label">Full Name</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="name" value="{{ $user_edit->name }}">

                  </div>
                </div>

                <div class="row mb-3">
                  <label for="inputText" class="col-sm-2 col-form-label">User Name</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="user_name" value="{{ $user_edit->user_name ?? '' }}">
                  </div>
                </div>

                
                <div class="row mb-3">
                    <label for="inputEmail" class="col-sm-2 col-form-label">Email</label>
                    <div class="col-sm-10">
                      <input type="email" class="form-control" value="{{ $user_edit->email }}" disabled>
                    </div>
                  </div>

                <div class="row mb-3">
                  <label for="inputText" class="col-sm-2 col-form-label">Number</label>
                  <div class="col-sm-10">
                    <input type="number" class="form-control" name="phone" value="{{ $user_edit->phone }}">
                  </div>
                </div>

                <div class="row mb-3">
                  <label for="inputPassword" class="col-sm-2 col-form-label">Address</label>
                  <div class="col-sm-10">
                    <textarea class="form-control" name="address" style="height: 100px">
                        {!! $user_edit->address ?? '' !!}
                    </textarea>
                  </div>
                </div>

           

                {{-- <div class="row">
                  
                </div> --}}

                  <div class="row mb-3">
                    <label class="col-sm-2 col-form-label">Status</label>
                    <div class="col-sm-4">
                      <select class="form-select" name="status" aria-label="Default select example">
                        <option value="1" @if ($user_edit->status == '1') selected @endif>Active</option>
                        <option value="0" @if ($user_edit->status == '0') selected @endif>Deactive</option>
                      </select>

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