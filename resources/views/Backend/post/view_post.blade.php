@extends('Backend.layouts.apps')
@section('content')
<main id="main" class="main">

    <div class="pagetitle">
      <h1>Post Tables</h1>
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
                
              <h5 class="card-title">Datatables</h5>

              <!-- Table with stripped rows -->
              <table class="table datatable">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Image</th>
                    <th scope="col">Category</th>
                    <th scope="col">Sub-Category</th>
                    <th scope="col">Title</th>
                    <th scope="col">Date</th>
                    <th scope="col">Status</th>
                    <th scope="col">Action</th>
                  </tr>
                </thead>
                <tbody>
                
                  @foreach ($post as $key=>$row)
                    {{-- @dd($post); --}}
                  <tr>
                    <th scope="row">{{ ++$key }}</th>
                    <td><img src="{{ asset($row->image) }}" alt="" style="height: 80px; width:120px;"></td>
                    <td>{{ $row->category_bn ?? 'null' }}</td>
                    <td>{{ $row->subcategory_bn ?? 'null' }}</td>
                    <td>{{ $row->title_bn ?? 'null' }}</td>
                    <td>{{ $row->post_date ?? 'null' }}</td>
                    <td>
                        @if ($row->status==1)
                            <p class="text-success">Active</p>
                        @else
                        <p class="text-danger">Deactive</p>
                        @endif
                    </td>
                    <td >
                      <a href="{{ route('post.edit',$row->id) }}" class="btn btn-info sm" title="Edit Data"><i class="fa fa-edit"></i></a>
                      <a href="{{ route('post.delete',$row->id) }}" id="delete" class="btn btn-danger sm delete" title="Delete Data"><i class="fa fa-trash"></i></a>
                  </td>
                  </tr>
                  @endforeach
                  
                </tbody>
              </table>
              <!-- End Table with stripped rows -->

            </div>
          </div>

        </div>
      </div>
    </section>

  </main><!-- End #main -->

@endsection