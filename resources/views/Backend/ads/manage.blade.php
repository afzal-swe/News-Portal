@extends('Backend.layouts.apps')
@section('content')
<main id="main" class="main">

    <div class="pagetitle">
      <h1>Ads Tables</h1>
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
                <button class="btn btn-info btn-sm mt-3" style="float: right;" data-bs-toggle="modal" data-bs-target="#add_category">Create New Ads</button>
              <h5 class="card-title">Datatables</h5>

              <!-- Table with stripped rows -->
              <table class="table datatable">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Ads</th>
                    <th scope="col">Type</th>
                    <th scope="col">Action</th>
                  </tr>
                </thead>
                <tbody>
                   
                  @foreach ($ads_horizontal as $key=>$row)
                 
                    
                    <th scope="row">{{ ++$key }}</th>
                    @if ($row->type==2)
                      <td><img src="{{ asset($row->image) }}" alt="" style="height: 70px; width:300px;"></td>
                    @else
                      <td><img src="{{ asset($row->image) }}" alt="" style="height: 110px; width:20;"></td>
                    @endif
                    
                    
                    <td>
                        @if ($row->type==2)
                            <p class="text-success">Horizontal</p>
                        @else
                        <p class="text-danger">Vertical</p>
                        @endif
                    </td>
                    
                    <td >
                      <a href="#" class="btn btn-info sm" title="Edit Data"><i class="fa fa-edit"></i></a>
                      <a href="{{ route('ads.delete',$row->id) }}" id="delete" class="btn btn-danger sm delete" title="Delete Data"><i class="fa fa-trash"></i></a>
                  </td>
                  </tr>
                  @endforeach
                 
              </table>
              <!-- End Table with stripped rows -->

            </div>
          </div>

        </div>
      </div>
    </section>

  </main><!-- End #main -->


  {{-- category added modal --}}
  <div class="card">
    <div class="card-body">
      <!-- Disabled Backdrop Modal -->
      
      <div class="modal fade" id="add_category" tabindex="-1" data-bs-backdrop="false">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title">Create A New Ads</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="{{ route('store.ads') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                      <label for="exampleInputEmail1" class="form-label">Ads Link</label>
                      <input type="text" class="form-control @error('link') is-invalid @enderror" name="link" placeholder=" Ads Link">
                        @error('link')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-3">
                      <label for="exampleInputPassword1" class="form-label">Ads</label>
                      <input type="file" class="form-control @error('image') is-invalid @enderror" name="image">
                      @error('image')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Types</label>
                        <select name="type" class="form-control" required>
                            <option selected disabled>==Choose Option==</option>
                            <option value="2">Horizontal</option>
                            <option value="1">Vertical</option>
                        </select>
                    </div>


                    <button type="submit" class="btn btn-primary">Submit</button>
                  </form>
            
          </div>
        </div>
      </div><!-- End Disabled Backdrop Modal-->

    </div>
  </div>
@endsection