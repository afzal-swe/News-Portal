@extends('Backend.layouts.apps')
@section('content')
<main id="main" class="main">

    <div class="pagetitle">
      <h1>Videos Gallery Tables</h1>
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
                <button class="btn btn-info btn-sm mt-3" style="float: right;" data-bs-toggle="modal" data-bs-target="#add_category">Add New</button>
              <h5 class="card-title">Datatables</h5>

              <!-- Table with stripped rows -->
              <table class="table datatable">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Title BN</th>
                    <th scope="col">Title EN</th>
                    <th scope="col">Type</th>
                    <th scope="col">Action</th>
                  </tr>
                </thead>
                <tbody>
                    @if ($video !== null)
                  @foreach ($video as $key=>$row)
                  <tr>
                    <th scope="row">{{ ++$key }}</th>
                    <td>{{ Str::of($row->title_bn ?? "Null")->limit(30) }}</td>
                    <td>{{ Str::of($row->title_en ?? "Null")->limit(30) }}</td>
                    <td>
                        @if ($row->type == 1)
                            <span class="text-success">Big Video</span>
                        @else
                            <span class="text-info">Small Video</span>
                        @endif
                    </td>
                    <td >
                      <a href="{{ route('video.edit',$row->id) }}" class="btn btn-info sm" title="Edit Data"><i class="bi bi-pencil-square"></i></a>
                      <a href="{{ route('video.delete',$row->id) }}" id="delete" class="btn btn-danger sm delete" title="Delete Data"><i class="bi bi-archive"></i></a>
                  </td>
                  </tr>
                  @endforeach
                  @else
                    <h1>Empty Data</h1>
                  @endif
                </tbody>
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
              <h5 class="modal-title text-info">Add New Video</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="{{ route('video.store') }}" method="post">
                    @csrf
                    <div class="mb-3">
                      <label for="exampleInputEmail1" class="form-label">Title BN</label>
                      <input type="text" class="form-control @error('title_bn') is-invalid @enderror" name="title_bn" placeholder="Title BN" required>
                        @error('title_bn')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-3">
                      <label for="exampleInputEmail1" class="form-label">Title EN</label>
                      <input type="text" class="form-control @error('title_en') is-invalid @enderror" name="title_en" placeholder="Title EN" required>
                        @error('title_en')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-3">
                      <label for="exampleInputPassword1" class="form-label">Embed Code</label>
                      <input type="text" class="form-control" name="embed_code" required>
                    </div>

                    <div class="mb-3">
                      <label for="exampleInputPassword1" class="form-label">Type</label>
                      <select name="type" id="" class="form-control" required>
                        <option selected disabled>==Select Option==</option>
                        <option value="0">Small Video</option>
                        <option value="1">Big Video</option>
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