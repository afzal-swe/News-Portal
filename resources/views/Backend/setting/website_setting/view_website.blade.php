@extends('Backend.layouts.apps')
@section('content')
<main id="main" class="main">

    <div class="pagetitle">
      <h1>Website Tables</h1>
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
                <a href="{{ route('website.create') }}" class="pd-5">
              <h5 class="card-title btn btn-success btn-mt-3">Add New</h5></a>

              <!-- Table with stripped rows -->
              <table class="table datatable">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Website Name BN</th>
                    <th scope="col">Website Name EN</th>
                    <th scope="col">Website Link</th>
                    <th scope="col">Action</th>
                  </tr>
                </thead>
                <tbody>
                    @if ($websites !== null)
                  @foreach ($websites as $key=>$row)
                    
                  <tr>
                    <th scope="row">{{ ++$key }}</th>
                    <td>{{ $row->website_name_bn ?? 'null' }}</td>
                    <td>{{ $row->website_name_en ?? 'null' }}</td>
                    <td>{{ $row->website_link ?? 'null' }}</td>
                    
                    <td >
                      <a href="{{ route('website.edit',$row->id) }}" class="btn btn-info sm" title="Edit Data"><i class="bi bi-pencil-square"></i></a>
                      <a href="{{ route('website.delete',$row->id) }}" id="delete" class="btn btn-danger sm delete" title="Delete Data"><i class="bi bi-archive"></i></a>
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
@endsection