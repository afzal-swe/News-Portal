@extends('Backend.layouts.apps')
@section('content')
    
<main id="main" class="main">

    

    <section class="section">
      <div class="row">
        <div class="col-lg-12">

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Add New Role Parmission</h5>

              <!-- General Form Elements -->
              <form action="{{ route('role.store') }}" method="POST">
                @csrf
                <div class="row mb-3">
                  <label for="inputText" class="col-sm-2 col-form-label">Role Name <samp class="text-danger">*</samp> </label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control @error('role_name') is-invalid @enderror" name="role_name" placeholder="Role Name" required>

                    @error('role_name')
                      <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                  </div>
                </div>

              
                <div class="row">
                  <div class="row mb-3">
                    <label class="col-sm-2 col-form-label">Status</label>
                    <div class="col-sm-10">
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
                </div>

                <div class="row mb-3">
                  <label class="col-sm-2 col-form-label"></label>
                  <div class="col-sm-10">
                    <button type="submit" class="btn btn-primary">Add New Role</button>
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