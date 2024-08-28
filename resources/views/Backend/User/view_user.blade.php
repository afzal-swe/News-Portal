@extends('Backend.layouts.apps')
@section('content')
<main id="main" class="main">

    <div class="pagetitle">
      <h1>User Tables</h1>
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
                    <th scope="col">Name</th>
                    {{-- <th scope="col">User Name</th> --}}
                    <th scope="col">Phone</th>
                    {{-- <th scope="col">Address</th> --}}
                    <th scope="col">E-mail</th>
                    <th scope="col">Parmission</th>
                    <th scope="col">Status</th>
                    <th scope="col">Action</th>
                  </tr>
                </thead>
                <tbody>
                    @if ($all_user !== null)
                  @foreach ($all_user as $key=>$row)
                    
                  <tr>
                    <th scope="row">{{ ++$key }}</th>
                    <td>{{ $row->name ?? 'null' }}</td>
                    {{-- <td>{{ $row->user_name ?? 'null' }}</td> --}}
                    <td>{{ $row->phone ?? 'null' }}</td>
                    {{-- <td>{{ $row->address ?? 'null' }}</td> --}}
                    <td>{{ $row->email ?? 'null' }}</td>
                    <td>
                        @if ($row->parmission==1)
                            <p class="text-success">Supper Admin</p>
                        @elseif ($row->parmission==2)
                        <p class="text-danger">Admin</p>
                        @else
                        <p class="text-danger">Editor</p>
                        @endif
                    </td>
                    <td>
                        @if ($row->status==1)
                            <p class="text-success">Active</p>
                        @else
                        <p class="text-danger">Deactive</p>
                        @endif
                    </td>
                    <td >
                      <a href="#" class="btn btn-info sm" title="Edit Data"><i class="bi bi-pencil-square"></i></a>
                      <a href="#" id="delete" class="btn btn-danger sm delete" title="Delete Data"><i class="bi bi-archive"></i></a>
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