@extends('Backend.layouts.apps')
@section('content')
    
<main id="main" class="main">

    

    <section class="section">
      <div class="row">
        <div class="col-lg-12">

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Add New User</h5>

              <!-- General Form Elements -->
              <form action="{{ route('store_user') }}" method="POST">
                @csrf
                <div class="row mb-3">
                  <label for="inputText" class="col-sm-2 col-form-label">Full Name</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" placeholder="Full Name">

                    @error('name')
                      <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                  </div>
                </div>

                <div class="row mb-3">
                  <label for="inputText" class="col-sm-2 col-form-label">User Name</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control @error('user_name') is-invalid @enderror" name="user_name" placeholder="User Name">

                    @error('user_name')
                      <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                  </div>
                </div>

                <div class="row mb-3">
                  <label for="inputText" class="col-sm-2 col-form-label">Number</label>
                  <div class="col-sm-10">
                    <input type="number" class="form-control" name="phone" placeholder="01XXXXXXXXX">
                  </div>
                </div>

                <div class="row mb-3">
                  <label for="inputPassword" class="col-sm-2 col-form-label">Address</label>
                  <div class="col-sm-10">
                    <textarea class="form-control" name="address" style="height: 100px" placeholder="Enter your address"></textarea>
                  </div>
                </div>

                <div class="row mb-3">
                  <label for="inputEmail" class="col-sm-2 col-form-label">Email</label>
                  <div class="col-sm-10">
                    <input type="email" class="form-control @error('email') is-invalide @enderror" name="email" placeholder="example@gmail.com">

                    @error('email')
                      <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                  </div>
                </div>
                <div class="row mb-3">
                  <label for="inputPassword" class="col-sm-2 col-form-label">Password</label>
                  <div class="col-sm-10">
                    <input type="password" class="form-control @error('password') is-invalide @enderror" name="password">

                    @error('password')
                      <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                  </div>
                </div>
                

                <div class="row mb-3">
                  <label for="inputNumber" class="col-sm-2 col-form-label">Parmission <samp class="text-danger" >*</samp> </label>
                  <div class="col-sm-10">
                    <select name="parmission" id="" class="form-control">
                      <option disabled selected>==Choose Parmission==</option>
  
                      @foreach ($parmission as $row)
                          <option value="{{ $row->id }}">{{ $row->role_name }}</option>
                      @endforeach
                      
                    </select>
                  </div>
                  
                </div>

                {{-- <div class="row">
                  
                </div> --}}

                  <div class="row mb-3">
                    <label class="col-sm-2 col-form-label">Status</label>
                    <div class="col-sm-4">
                      <select class="form-select @error('status') is-invalide @enderror" name="status" aria-label="Default select example">
                        <option selected disabled>-- Select Status --</option>
                        <option value="1">Active</option>
                        <option value="0">Deactive</option>
                      </select>

                      @error('status')
                        <div class="alert alert-danger">{{ $message }}</div>
                      @enderror
                    </div>
                  </div>

                

                <div class="row mb-3">
                  <label class="col-sm-2 col-form-label"></label>
                  <div class="col-sm-10">
                    <button type="submit" class="btn btn-primary">Add User</button>
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