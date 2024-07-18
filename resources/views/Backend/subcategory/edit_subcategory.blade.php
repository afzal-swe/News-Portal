@extends('Backend.layouts.apps')
@section('content')
<main id="main" class="main">

    <div class="pagetitle">
      <h1>Sub Category Tables</h1>
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
                
              <h5 class="card-title">Sub-Category Update Table</h5>
                    <div class="modal-body">
                        <form action="{{ route('update_subcategory',$edit->id) }}" method="post">
                            @csrf
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Category</label>
                                <select name="category_id" id="" class="form-control">
                                  {{-- <option disabled selected>==Choose One==</option> --}}
          
                                  @foreach ($category as $row)
                                      <option value="{{ $row->id }}" @if ($row->id == $edit->category_id) selected @endif>{{ $row->category_en }}| {{ $row->category_bn }}</option>
                                  @endforeach
                                  
                                </select>
                              </div>
          
                              <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Sub-Category Name Bangla</label>
                                <input type="text" class="form-control" name="subcategory_bn" value="{{ $edit->subcategory_bn }}">
                              </div>
          
                              <div class="mb-3">
                                <label for="exampleInputPassword1" class="form-label">Category Name English</label>
                                <input type="text" class="form-control" name="subcategory_en" value="{{ $edit->subcategory_en }}">
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