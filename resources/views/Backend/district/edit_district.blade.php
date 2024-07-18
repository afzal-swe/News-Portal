@extends('Backend.layouts.apps')
@section('content')
<main id="main" class="main">

    <div class="pagetitle">
      <h1>District Tables</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Home</a></li>
          <li class="breadcrumb-item">Tables</li>
          <li class="breadcrumb-item active">Data</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section">
      <div class="row">
        <div class="col-lg-12">

          <div class="card">
            <div class="card-body">
                
              <h5 class="card-title">District Update Table</h5>
                    <div class="modal-body">
                        <form action="{{ route('district.update',$edit->slug) }}" method="post">
                            @csrf
                            <div class="mb-3">
                              <label for="exampleInputEmail1" class="form-label">District Name Bangla</label>
                              <input type="text" class="form-control" name="district_bn" value="{{ $edit->district_bn }}">
                               
                            </div>
                            <div class="mb-3">
                              <label for="exampleInputPassword1" class="form-label">Category Name English</label>
                              <input type="text" class="form-control " name="district_en" value="{{ $edit->district_en }}">
                              
                            </div>
                            <div class="mb-3 form-check">
                              <input type="checkbox" class="form-check-input" value="1" name="status" @if ($edit->status==1) checked @endif>
                            </div>
                            <button type="submit" class="btn btn-primary">Submit</button>
                          </form>
                    </div>
                
          </div>

        </div>
      </div>
      </div>
    </section>

  </main><!-- End #main -->

@endsection