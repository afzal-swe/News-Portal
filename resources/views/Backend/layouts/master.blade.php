@extends('Backend.layouts.apps')
@section('content')
<main id="main" class="main">

@php
  $user = DB::table('users')->get();
  $user_role = DB::table('role')->get();
  $category = DB::table('categories')->get();
  $sub_category = DB::table('subcategory')->get();
  $ads = DB::table('ads')->get();
  $post = DB::table('posts')->get();
@endphp

    <div class="pagetitle">
      <h1>Dashboard</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Home</a></li>
          <li class="breadcrumb-item active">Dashboard</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section dashboard">
      <div class="row">

        <!-- Left side columns -->
        <div class="col-lg-12">
          <div class="row">

            <!-- Sales Card -->
            <div class="col-xxl-4 col-md-4">
              <div class="card info-card sales-card">
                <div class="card-body">
                  <a href="{{ route('Category_View') }}">
                  <h5 class="card-title">All Categoris <span></span></h5>
                </a>
                  <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                      <i class="bi bi-cart"></i>
                    </div>
                    <div class="ps-3">
                      <h6>{{ count($category) }}</h6>
                    </div>
                  </div>
                </div>
              </div>
            </div><!-- End Sales Card -->

            <div class="col-xxl-4 col-md-4">
              <div class="card info-card sales-card">
                <div class="card-body">
                  <a href="{{ route('Subategory_View') }}">
                  <h5 class="card-title">All Sub-Category <span></span></h5>
                </a>
                  <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                      <i class="bi bi-cart"></i>
                    </div>
                    <div class="ps-3">
                      <h6>{{ count($sub_category) }}</h6>
                    </div>
                  </div>
                </div>
              </div>
            </div><!-- End Sales Card -->

            
            <div class="col-xxl-4 col-md-4">
              <div class="card info-card sales-card">
                <div class="card-body">
                  <a href="{{ route('post.view') }}">
                  <h5 class="card-title">All Post <span></span></h5>
                </a>
                  <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                      <i class="bi bi-cart"></i>
                    </div>
                    <div class="ps-3">
                      <h6>{{ count($post)}}</h6>
                    </div>
                  </div>
                </div>
              </div>
            </div><!-- End Sales Card -->

            <div class="col-xxl-4 col-md-4">
              <div class="card info-card sales-card">
                <div class="card-body">
                  <a href="{{ route('manage.ads') }}">
                  <h5 class="card-title">All Ads <span></span></h5>
                </a>
                  <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                      <i class="bi bi-cart"></i>
                    </div>
                    <div class="ps-3">
                      <h6>{{ count($ads) }}</h6>
                    </div>
                  </div>
                </div>
              </div>
            </div><!-- End Sales Card -->
            
            <div class="col-xxl-4 col-md-4">
              <div class="card info-card sales-card">
                <div class="card-body">
                  <a href="{{ route('view_user') }}">
                  <h5 class="card-title">User <span></span></h5>
                </a>
                  <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                      <i class="bi bi-cart"></i>
                    </div>
                    <div class="ps-3">
                      <h6>{{ count($user) }}</h6>
                    </div>
                  </div>
                </div>
              </div>
            </div><!-- End Sales Card -->

            

            <div class="col-xxl-4 col-md-4">
              <div class="card info-card sales-card">
                <div class="card-body">
                  <a href="{{ route('role.view') }}">
                  <h5 class="card-title">User Role <span></span></h5>
                </a>
                  <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                      <i class="bi bi-cart"></i>
                    </div>
                    <div class="ps-3">
                      <h6>{{ count($user_role) }}</h6>
                    </div>
                  </div>
                </div>
              </div>
            </div><!-- End Sales Card -->
            
          </div>
        </div><!-- End Left side columns -->

      </div>
    </section>

  </main><!-- End #main -->
@endsection