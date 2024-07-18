@extends('Backend.layouts.apps')
@section('content')
<main id="main" class="main">

    <div class="pagetitle">
      <h1>Sub-District Tables</h1>
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
                    <th scope="col">District Name</th>
                    <th scope="col">Sub-District BN</th>
                    <th scope="col">Sub-District EN</th>
                    <th scope="col">Status</th>
                    <th scope="col">Action</th>
                  </tr>
                </thead>
                <tbody>
                    @if ($sub_district !== null)
                  @foreach ($sub_district as $key=>$row)
                    {{-- @dd($sub_district); --}}
                  <tr>
                    <th scope="row">{{ ++$key }}</th>
                    <td>{{ $row->district_bn ?? 'null' }}</td>
                    <td>{{ $row->subdistrict_bn ?? 'null' }}</td>
                    <td>{{ $row->subdistrict_en ?? 'null' }}</td>
                    <td>
                        @if ($row->status==1)
                            <p class="text-success">Active</p>
                        @else
                        <p class="text-danger">Deactive</p>
                        @endif
                    </td>
                    <td >
                      <a href="{{ route('sub_district.edit',$row->slug) }}" class="btn btn-info sm" title="Edit Data"><i class="fa fa-edit"></i></a>
                      <a href="{{ route('sub_district.delete',$row->slug) }}" id="delete" class="btn btn-danger sm delete" title="Delete Data"><i class="fa fa-trash"></i></a>
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
              <h5 class="modal-title">Add New Sub-District</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="{{ route('add_sub_district') }}" method="post">
                    @csrf

                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">District</label>
                        <select name="district_id" id="" class="form-control">
                          <option disabled selected>==Choose One==</option>
  
                          @foreach ($district as $row)
                          {{-- @dd($district); --}}
                              <option value="{{ $row->id }}">{{ $row->district_en }}| {{ $row->district_bn }}</option>
                          @endforeach
                          
                        </select>
                      </div>

                    <div class="mb-3">
                      <label for="exampleInputEmail1" class="form-label">Sub-District Name Bangla</label>
                      <input type="text" class="form-control @error('subdistrict_bn') is-invalid @enderror" name="subdistrict_bn" placeholder="Subdistrict Name Bangla">
                        @error('subdistrict_bn')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-3">
                      <label for="exampleInputPassword1" class="form-label">Sub-District Name English</label>
                      <input type="text" class="form-control @error('subdistrict_en') is-invalid @enderror" name="subdistrict_en" placeholder="Subdistrict Name English">
                      @error('subdistrict_en')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-3 form-check">
                      <input type="checkbox" class="form-check-input" value="1" name="status">
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                  </form>
            
          </div>
        </div>
      </div><!-- End Disabled Backdrop Modal-->

    </div>
  </div>
@endsection