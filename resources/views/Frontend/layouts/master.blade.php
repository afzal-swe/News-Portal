@extends('Frontend.layouts.apps')
@section('content')


@php
	$website = DB::table('websites')->get();
@endphp



	@php
		$firstsection_big = DB::table('posts')->where('first_section_thumbnail', 1)->orderBy('id', 'DESC')->first();
		$firstsection_small = DB::table('posts')->where('first_section', 1)->orderBy('id', 'DESC')->limit(8)->get();
	@endphp
	{{-- @dd($firstsection_big); --}}



	<!-- 1st-news-section-start -->	
	<section class="news-section">
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-9 col-sm-8">
					<div class="row">
						<div class="col-md-1 col-sm-1 col-lg-1"></div>
						<div class="col-md-10 col-sm-10">
							<div class="lead-news">
								<div class="service-img"><a href="{{ route('single.post',$firstsection_big->slug) }}"><img src="{{ asset ($firstsection_big->image)}}" alt="Notebook"></a></div>
								<div class="content">
								<h4 class="lead-heading-01">
									<a href="{{ route('single.post',$firstsection_big->slug) }}">
										@if (session()->get('lang')=='english')
											{{ $firstsection_big->title_en }}
										@else
											{{ $firstsection_big->title_bn }}
										@endif
									</a>
								</h4>
								</div>
							</div>
						</div>
						
					</div>
						<div class="row">
							@foreach ($firstsection_small as $row)
								
							
							<div class="col-md-3 col-sm-3">
								<div class="top-news">
									<a href="{{ route('single.post',$row->slug) }}"><img src="{{ asset ($row->image)}}" alt="Notebook"></a>
										<h4 class="heading-02" style="height: 80px;">
											<a href="{{ route('single.post',$row->slug) }}">
											@if (session()->get('lang')=='english')
												{{ $row->title_en }}
											@else
												{{ $row->title_bn }}
											@endif
											</a>
										</h4>
								</div>
							</div>
							
							@endforeach
						</div>
								
					
					<!-- add-start -->	
					<div class="row">
						<div class="col-md-12 col-sm-12">
							<div class="add"><img src="{{ asset ('Frontend/assets/img/top-ad.jpg')}}" alt="" /></div>
						</div>
					</div><!-- /.add-close -->	
					
					@php
						$first_cate = DB::table('categories')->first();
						$firstcatpostbig = DB::table('posts')->where('cat_id', $first_cate->id)->where('bigthumbnail',1)->orderBy('id', 'DESC')->first();
						$firstcatpostsmall = DB::table('posts')->where('cat_id', $first_cate->id)->where('bigthumbnail',null)->limit(3)->orderBy('id', 'DESC')->get();
						// @dd($first_cate)
					@endphp
					<!-- news-start -->
					<div class="row">
						<div class="col-md-6 col-sm-6">
							<div class="bg-one">
								<div class="cetagory-title">
									@if (session()->get('lang')=='english')
										{{ $first_cate->category_en }}
									@else
										{{ $first_cate->category_bn }}
									@endif
									<a href="{{ route('category_post',$first_cate->id) }}">
										
										<span>
											@if (session()->get('lang')=='english')
											More
										@else
											আরও
										@endif
										<i class="fa fa-angle-double-right" aria-hidden="true"></i>
										</span>
									</a>
								</div>
								<div class="row">
									<div class="col-md-6 col-sm-6">
										<div class="top-news">
											<a href="#"><img src="{{ asset($firstcatpostbig->image) }}" alt="Notebook"></a>
											<h4 class="heading-02">
												<a href="#">
													@if (session()->get('lang')=='english')
														{{ $firstcatpostbig->title_en }}
													@else
														{{ $firstcatpostbig->title_bn }}
													@endif
												</a> 
											</h4>
										</div>
									</div>
									<div class="col-md-6 col-sm-6">
										@foreach ($firstcatpostsmall as $row)
										<div class="image-title">
											<a href="#"><img src="{{ asset ($row->image)}}" alt="Notebook"></a>
											<h4 class="heading-03">
												<a href="#">
													@if (session()->get('lang')=='english')
														{{ $row->title_en }}
													@else
														{{ $row->title_bn }}
													@endif
												</a> </h4>
										</div>
										@endforeach
										
									</div>
								</div>
							</div>
						</div>



						@php
						$second_cate = DB::table('categories')->skip(1)->first();
						$second_catpostbig = DB::table('posts')->where('cat_id', $second_cate->id)->where('bigthumbnail',1)->orderBy('id', 'DESC')->first();
						$second_catpostsmall = DB::table('posts')->where('cat_id', $second_cate->id)->where('bigthumbnail',null)->limit(3)->orderBy('id', 'DESC')->get();
					@endphp
						<div class="col-md-6 col-sm-6">
							<div class="bg-one">
								<div class="cetagory-title"><a href="#">
									@if (session()->get('lang')=='english')
										{{ $second_cate->category_en }}
									@else
										{{ $second_cate->category_bn }}
									@endif
									 <span>
										<a href="{{ route('category_post',$second_cate->id) }}">
											<span>
												@if (session()->get('lang')=='english')
												More
											@else
												আরও
											@endif
											<i class="fa fa-angle-double-right" aria-hidden="true"></i>
											</span>
										</a>
									</span></a></div>
								<div class="row">
									<div class="col-md-6 col-sm-6">
										<div class="top-news">
											<a href="#"><img src="{{ asset($second_catpostbig->image) }}" alt="Notebook"></a>
											<h4 class="heading-02">
												<a href="#">
													@if (session()->get('lang')=='english')
														{{ $second_catpostbig->title_en }}
													@else
														{{ $second_catpostbig->title_bn }}
													@endif
												</a> 
											</h4>
										</div>
									</div>
									<div class="col-md-6 col-sm-6">
										<div class="image-title">
											@foreach ($second_catpostsmall as $row)
										<div class="image-title">
											<a href="#"><img src="{{ asset ($row->image)}}" alt="Notebook"></a>
											<h4 class="heading-03">
												<a href="#">
													@if (session()->get('lang')=='english')
														{{ $row->title_en }}
													@else
														{{ $row->title_bn }}
													@endif
												</a> </h4>
										</div>
										@endforeach
										</div>
										
									</div>
								</div>
							</div>
						</div>
					</div>					
				</div>
				<div class="col-md-3 col-sm-3">
					<!-- add-start -->	
					<div class="row">
						<div class="col-md-12 col-sm-12">
							<div class="sidebar-add"><img src="{{ asset ('Frontend/assets/img/add_01.jpg')}}" alt="" /></div>
						</div>
					</div><!-- /.add-close -->	
					

					@php
						$live_tv = DB::table('livetv')->first();
					@endphp
					@if ($live_tv->status == 1)
						<!-- youtube-live-start -->	
						@if (session()->get('lang') == 'english')
						<div class="cetagory-title-04"> Live TV </div>
						@else
						<div class="cetagory-title-03">লাইভ টিভি </div>
						@endif
						
						<div class="photo">
							<div class="embed-responsive embed-responsive-16by9 embed-responsive-item" style="margin-bottom:5px;">
								{!! $live_tv->embed_code !!}
							</div>
						</div><!-- /.youtube-live-close -->	
					@endif
					
					
					<!-- facebook-page-start -->
					<div class="cetagory-title-03">ফেসবুকে আমরা</div>
					<div class="fb-root">
						facebook page here
					</div><!-- /.facebook-page-close -->	
					
					<!-- add-start -->	
					<div class="row">
						<div class="col-md-12 col-sm-12">
							<div class="sidebar-add">
								<img src="{{ asset ('Frontend/assets/img/add_01.jpg')}}" alt="" />
							</div>
						</div>
					</div><!-- /.add-close -->	
				</div>
			</div>
		</div>
	</section><!-- /.1st-news-section-close -->

	@php
		$thard__cate = DB::table('categories')->skip(2)->first();
		$thard_catpostbig = DB::table('posts')->where('cat_id', $thard__cate->id)->where('bigthumbnail',1)->orderBy('id', 'DESC')->first();
		$thard_catpostsmall = DB::table('posts')->where('cat_id', $thard__cate->id)->where('bigthumbnail',null)->limit(3)->orderBy('id', 'DESC')->get();
	@endphp
	<!-- 2nd-news-section-start -->	
	<section class="news-section">
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-6 col-sm-6">
					<div class="bg-one">
						<div class="cetagory-title-02">
							<a href="#">
								@if (session()->get('lang')=='english')
									{{ $thard__cate->category_en }}
								@else
									{{ $thard__cate->category_bn }}
								@endif
								<i class="fa fa-angle-right" aria-hidden="true"></i>
								<span>
									<i class="fa fa-plus" aria-hidden="true"></i> 
									@if (session()->get('lang')=='english')
									All News
									@else
									সব খবর
									@endif
								</span>
							</a>
						</div>
						<div class="row">
							<div class="col-md-6 col-sm-6">
								<div class="top-news">
									<a href="#"><img src="{{ asset ($thard_catpostbig->image)}}" alt="Notebook"></a>
									<h4 class="heading-02">
										<a href="#">
											@if (session()->get('lang')=='english')
												{{ $thard_catpostbig->title_en }}
											@else
												{{ $thard_catpostbig->title_bn }}
											@endif
										</a>
									 </h4>
								</div>
							</div>
							<div class="col-md-6 col-sm-6">
								@foreach ($thard_catpostsmall as $row)
									
								
								<div class="image-title">
									<a href="#"><img src="{{ asset ($row->image)}}" alt="Notebook"></a>
									<h4 class="heading-03">
										<a href="#">
											@if (session()->get('lang')=='english')
												{{ $row->title_en }}
											@else
												{{ $row->title_bn }}
											@endif
										</a> 
									</h4>
								</div>
								@endforeach
								
							</div>
						</div>
					</div>
				</div>

				@php
					$forth_catpostbig_cat = DB::table('categories')->skip(3)->first();
					$forth_catpostbig = DB::table('posts')->where('cat_id', $forth_catpostbig_cat->id)->where('bigthumbnail',1)->orderBy('id', 'DESC')->first();
					$forth_catpostsmall = DB::table('posts')->where('cat_id', $forth_catpostbig_cat->id)->where('bigthumbnail',null)->limit(3)->orderBy('id', 'DESC')->get();
				@endphp
				<div class="col-md-6 col-sm-6">
					<div class="bg-one">
						<div class="cetagory-title-02">
							<a href="#">
								@if (session()->get('lang')=='english')
									{{ $forth_catpostbig_cat->category_en }}
								@else
									{{ $forth_catpostbig_cat->category_bn }}
								@endif
								<i class="fa fa-angle-right" aria-hidden="true"></i>
								<span>
									<i class="fa fa-plus" aria-hidden="true"></i> 
									@if (session()->get('lang')=='english')
									All News
									@else
									সব খবর
									@endif
								</span>
							</a>
						</div>
						<div class="row">
							<div class="col-md-6 col-sm-6">
								<div class="top-news">
									<a href="#"><img src="{{ asset ($forth_catpostbig->image)}}" alt="Notebook"></a>
										<h4 class="heading-02">
											<a href="#">
												@if (session()->get('lang')=='english')
													{{ $forth_catpostbig->title_en }}
												@else
													{{ $forth_catpostbig->title_bn }}
												@endif
											</a> 
										</h4>
								</div>
							</div>
							<div class="col-md-6 col-sm-6">
								@foreach ($forth_catpostsmall as $row)
									
								
								<div class="image-title">
									<a href="#"><img src="{{ asset ($row->image)}}" alt="Notebook"></a>
									<h4 class="heading-03">
										<a href="#">
											@if (session()->get('lang')=='english')
												{{ $row->title_en }}
											@else
												{{ $row->title_bn }}
											@endif
										</a>
									 </h4>
								</div>
								@endforeach
								
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- ******* -->

			@php
				$five_catpostbig_cat = DB::table('categories')->skip(4)->first();
				$five_catpostbig = DB::table('posts')->where('cat_id', $five_catpostbig_cat->id)->where('bigthumbnail',1)->orderBy('id', 'DESC')->first();
				$five_catpostsmall = DB::table('posts')->where('cat_id', $five_catpostbig_cat->id)->where('bigthumbnail',null)->limit(3)->orderBy('id', 'DESC')->get();
			@endphp
			<div class="row">
				<div class="col-md-6 col-sm-6">
					<div class="bg-one">
						<div class="cetagory-title-02">
							<a href="#">
								@if (session()->get('lang')=='english')
									{{ $five_catpostbig_cat->category_en }}
								@else
									{{ $five_catpostbig_cat->category_bn }}
								@endif
								<i class="fa fa-angle-right" aria-hidden="true"></i>
								<span>
									<i class="fa fa-plus" aria-hidden="true"></i> 
									@if (session()->get('lang')=='english')
									All News
									@else
									সব খবর
									@endif
								</span>
							</a>
						</div>
						<div class="row">
							<div class="col-md-6 col-sm-6">
								<div class="top-news">
									<a href="#"><img src="{{ asset ($five_catpostbig->image)}}" alt="Notebook"></a>
									<h4 class="heading-02">
										<a href="#">
											@if (session()->get('lang')=='english')
												{{ $five_catpostbig->title_en }}
											@else
												{{ $five_catpostbig->title_bn }}
											@endif
										</a>
									</h4>
								</div>
							</div>
							<div class="col-md-6 col-sm-6">
								@foreach ($five_catpostsmall as $row)
									
								
								<div class="image-title">
									<a href="#"><img src="{{ asset ($row->image)}}" alt="Notebook"></a>
									<h4 class="heading-03">
										<a href="#">
											@if (session()->get('lang')=='english')
												{{ $row->title_en }}
											@else
												{{ $row->title_bn }}
											@endif
										</a>
									</h4>
								</div>
								@endforeach
								
							</div>
						</div>
					</div>
				</div>


				{{-- Six Section  Start --}}
				@php
					$six_catpostbig_cat = DB::table('categories')->skip(5)->first();
					$six_catpostbig = DB::table('posts')->where('cat_id', $six_catpostbig_cat->id)->where('bigthumbnail',1)->orderBy('id', 'DESC')->first();
					$six_catpostsmall = DB::table('posts')->where('cat_id', $six_catpostbig_cat->id)->where('bigthumbnail',null)->limit(3)->orderBy('id', 'DESC')->get();
				@endphp
				<div class="col-md-6 col-sm-6">
					<div class="bg-one">
						<div class="cetagory-title-02">
							<a href="#">
								@if (session()->get('lang')=='english')
									{{ $six_catpostbig_cat->category_en }}
								@else
									{{ $six_catpostbig_cat->category_bn }}
								@endif
								<i class="fa fa-angle-right" aria-hidden="true"></i>
								<span>
									<i class="fa fa-plus" aria-hidden="true"></i> 
									@if (session()->get('lang')=='english')
									All News
									@else
									সব খবর
									@endif
								</span>
							</a>
						</div>
						<div class="row">
							<div class="col-md-6 col-sm-6">
								<div class="top-news">
									<a href="#"><img src="{{ asset ($six_catpostbig->image)}}" alt="Notebook"></a>
									<h4 class="heading-02">
										<a href="#">
											@if (session()->get('lang')=='english')
												{{ $six_catpostbig->title_en }}
											@else
												{{ $six_catpostbig->title_bn }}
											@endif
										</a>
									</h4>
								</div>
							</div>
							<div class="col-md-6 col-sm-6">
								@foreach ($six_catpostsmall as $row)
									
								
								<div class="image-title">
									<a href="#"><img src="{{ asset ($row->image)}}" alt="Notebook"></a>
									<h4 class="heading-03">
										<a href="#">
											@if (session()->get('lang')=='english')
												{{ $row->title_en }}
											@else
												{{ $row->title_bn }}
											@endif
										</a>
									</h4>
								</div>
								@endforeach
								
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- add-start -->	
			<div class="row">
				<div class="col-md-6 col-sm-6">
					<div class="add"><img src="{{ asset ('Frontend/assets/img/top-ad.jpg')}}" alt="" /></div>
				</div>
				<div class="col-md-6 col-sm-6">
					<div class="add"><img src="{{ asset ('Frontend/assets/img/top-ad.jpg')}}" alt="" /></div>
				</div>
			</div><!-- /.add-close -->	
			
		</div>
	</section><!-- /.2nd-news-section-close -->



	@php
		$country_big_post = DB::table('posts')->whereNotNull('dist_id')->orderBy('id','DESC')->first();
		$countryFirst = DB::table('posts')->whereNotNull('dist_id')->skip(1)->orderBy('id','DESC')->limit(3)->get();
		$countrySecound = DB::table('posts')->whereNotNull('dist_id')->skip(4)->orderBy('id','DESC')->limit(3)->get();
	@endphp
	<!-- 3rd-news-section-start -->	
	<section class="news-section">
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-9 col-sm-9">
					<div class="cetagory-title-02">
						<a href="#">
							@if (session()->get('lang')=='english')
							Country
							@else
							সারাদেশে  
							@endif
						
						<i class="fa fa-angle-right" aria-hidden="true"></i> 
						<span>
							<i class="fa fa-plus" aria-hidden="true"></i>
							@if (session()->get('lang')=='english')
							All News
							@else
							সব খবর
							@endif 
						</span>
						</a>
					</div>
					
					<div class="row">
						<div class="col-md-4 col-sm-4">
							<div class="top-news">
								<a href="#"><img src="{{ asset ($country_big_post->image)}}" alt="Notebook"></a>
								<h4 class="heading-02">
									<a href="#">
										@if (session()->get('lang')=='english')
											{{ $country_big_post->title_en }}
										@else
											{{ $country_big_post->title_bn }}
										@endif
									</a>
								</h4>
							</div>
						</div>
						<div class="col-md-4 col-sm-4">
							@foreach ($countryFirst as $row)
							<div class="image-title">
								<a href="#"><img src="{{ asset ($row->image)}}" alt="Notebook"></a>
								<h4 class="heading-03">
									<a href="#">
										@if (session()->get('lang')=='english')
											{{ $row->title_en }}
										@else
											{{ $row->title_bn }}
										@endif
									</a>
								</h4>
							</div>
							@endforeach
						</div>

						<div class="col-md-4 col-sm-4">
							@foreach ($countrySecound as $row)
							<div class="image-title">
								<a href="#"><img src="{{ asset ($row->image)}}" alt="Notebook"></a>
								<h4 class="heading-03">
									<a href="#">
										@if (session()->get('lang')=='english')
											{{ $row->title_en }}
										@else
											{{ $row->title_bn }}
										@endif
									</a>
								</h4>
							</div>
							@endforeach
						</div>
					</div>
					<!-- ******* -->
					<br />


					@php
						$seven_cate = DB::table('categories')->skip(6)->first();
						$seven_catpostbig = DB::table('posts')->where('cat_id', $seven_cate->id)->where('bigthumbnail',1)->orderBy('id', 'DESC')->first();
						$seven_catpostsmall = DB::table('posts')->where('cat_id', $seven_cate->id)->where('bigthumbnail',null)->limit(3)->orderBy('id', 'DESC')->get();
					@endphp
					<div class="row">
						
						<div class="col-md-6 col-sm-6">
							<div class="bg-one">
								<div class="cetagory-title">
									@if (session()->get('lang')=='english')
										{{ $seven_cate->category_en }}
									@else
										{{ $seven_cate->category_bn }}
									@endif
									<a href="#">
										<span>
											@if (session()->get('lang')=='english')
											More
										@else
											আরও
										@endif
										<i class="fa fa-angle-double-right" aria-hidden="true"></i>
										</span>
									</a>
								</div>
								<div class="row">
									<div class="col-md-6 col-sm-6">
										<div class="top-news">
											<a href="#"><img src="{{ asset($seven_catpostbig->image) }}" alt="Notebook"></a>
											<h4 class="heading-02">
												<a href="#">
													@if (session()->get('lang')=='english')
														{{ $seven_catpostbig->title_en }}
													@else
														{{ $seven_catpostbig->title_bn }}
													@endif
												</a> 
											</h4>
										</div>
									</div>
									<div class="col-md-6 col-sm-6">
										@foreach ($seven_catpostsmall as $row)
										<div class="image-title">
											<a href="#"><img src="{{ asset ($row->image)}}" alt="Notebook"></a>
											<h4 class="heading-03">
												<a href="#">
													@if (session()->get('lang')=='english')
														{{ $row->title_en }}
													@else
														{{ $row->title_bn }}
													@endif
												</a> </h4>
										</div>
										@endforeach
										
									</div>
								</div>
							</div>
						</div>



						@php
						$eight_cate = DB::table('categories')->skip(7)->first();
						$eight_catpostbig = DB::table('posts')->where('cat_id', $eight_cate->id)->where('bigthumbnail',1)->orderBy('id', 'DESC')->first();
						$eight_catpostsmall = DB::table('posts')->where('cat_id', $eight_cate->id)->where('bigthumbnail',null)->limit(3)->orderBy('id', 'DESC')->get();
					@endphp
						<div class="col-md-6 col-sm-6">
							<div class="bg-one">
								<div class="cetagory-title"><a href="#">
									@if (session()->get('lang')=='english')
										{{ $eight_cate->category_en }}
									@else
										{{ $eight_cate->category_bn }}
									@endif
									 <span>
										<a href="#">
											<span>
												@if (session()->get('lang')=='english')
												More
											@else
												আরও
											@endif
											<i class="fa fa-angle-double-right" aria-hidden="true"></i>
											</span>
										</a>
									</span></a></div>
								<div class="row">
									<div class="col-md-6 col-sm-6">
										<div class="top-news">
											<a href="#"><img src="{{ asset($eight_catpostbig->image) }}" alt="Notebook"></a>
											<h4 class="heading-02">
												<a href="#">
													@if (session()->get('lang')=='english')
														{{ $eight_catpostbig->title_en }}
													@else
														{{ $eight_catpostbig->title_bn }}
													@endif
												</a> 
											</h4>
										</div>
									</div>
									<div class="col-md-6 col-sm-6">
										<div class="image-title">
											@foreach ($eight_catpostsmall as $row)
										<div class="image-title">
											<a href="#"><img src="{{ asset ($row->image)}}" alt="Notebook"></a>
											<h4 class="heading-03">
												<a href="#">
													@if (session()->get('lang')=='english')
														{{ $row->title_en }}
													@else
														{{ $row->title_bn }}
													@endif
												</a> </h4>
										</div>
										@endforeach
										</div>
										
									</div>
								</div>
							</div>
						</div>
						
					</div>
					
					<div class="row">
						<div class="col-md-12 col-sm-12">
							<div class="sidebar-add">
								<img src="{{ asset ('Frontend/assets/img/top-ad.jpg')}}" alt="" />
							</div>
						</div>
					</div><!-- /.add-close -->	
				</div>






				@php
					$latest = DB::table('posts')->orderBy('id','DESC')->limit(8)->get();
					$Favourite = DB::table('posts')->orderBy('id','DESC')->inRandomOrder()->limit(8)->get();
					$Highest = DB::table('posts')->orderBy('id','ASC')->inRandomOrder()->limit(8)->get();
				@endphp
				<div class="col-md-3 col-sm-3">
					<div class="tab-header">
						<!-- Nav tabs -->
						<ul class="nav nav-tabs nav-justified" role="tablist">
							<li role="presentation" class="active">
								<a href="#tab21" aria-controls="tab21" role="tab" data-toggle="tab" aria-expanded="false">
									@if (session()->get('lang')=='english')
										Latest News
									@else
										সর্বশেষ
									@endif
									
								</a>
							</li>
							<li role="presentation" >
								<a href="#tab22" aria-controls="tab22" role="tab" data-toggle="tab" aria-expanded="true">
									@if (session()->get('lang')=='english')
										Favourite
									@else
										জনপ্রিয়
									@endif
									
								</a>
							</li>
							<li role="presentation" >
								<a href="#tab23" aria-controls="tab23" role="tab" data-toggle="tab" aria-expanded="true">
									@if (session()->get('lang')=='english')
										Highest Read
									@else
										গঠিত
									@endif
								</a>
							</li>
						</ul>

						<!-- Tab panes -->
						<div class="tab-content ">
							<div role="tabpanel" class="tab-pane in active" id="tab21">
								<div class="news-titletab">
									@foreach ($latest as $row)
									<div class="news-title-02">
										<h4 class="heading-03">
											<a href="#">
												@if (session()->get('lang')=='english')
													{{ Str::of($row->title_en)->limit(30) }}
												@else
													{{ Str::of($row->title_bn)->limit(36) }}
												@endif
											</a> 
										</h4>
									</div>
									@endforeach
									
								</div>
							</div>
							<div role="tabpanel" class="tab-pane fade" id="tab22">
								<div class="news-titletab">

									@foreach ($Favourite as $row)
									<div class="news-title-02">
										<h4 class="heading-03">
											<a href="#">
												@if (session()->get('lang')=='english')
													{{ Str::of($row->title_en)->limit(30) }}
												@else
													{{ Str::of($row->title_bn)->limit(36) }}
												@endif
											</a> 
										</h4>
									</div>
									@endforeach
									
								</div>                                          
							</div>
							<div role="tabpanel" class="tab-pane fade" id="tab23">	
								<div class="news-titletab">

									@foreach ($Highest as $row)
									<div class="news-title-02">
										<h4 class="heading-03">
											<a href="#">
												@if (session()->get('lang')=='english')
													{{ Str::of($row->title_en)->limit(30) }}
												@else
													{{ Str::of($row->title_bn)->limit(36) }}
												@endif
											</a> 
										</h4>
									</div>
									@endforeach
									
								</div>						                                          
							</div>
						</div>
					</div>
					<!-- Namaj Times -->
					<div class="cetagory-title-03">নামাজের সময়সূচি </div>
					
					<!-- Namaj Times -->
					@php
						$prayers = DB::table('prayers')->first();
					@endphp
                        @if (session()->get('lang')=='english')
                            Prayer Times
                        @else
                        নামাজের সময়সূচি 
                        @endif
                        <!-- Namaj Times -->
                        <table class="table">
                            <tr>
                                <th>
                                    @if (session()->get('lang')=='english')
                                    Fajr
                                    <th>{{ $prayers->fajr_en }}</th>
                                    @else
                                    ফজর
                                    <th>{{ $prayers->fajr_bn }}</th>
                                    @endif
                                </th>
                            </tr>
                            <tr>
                                <th>
                                    @if (session()->get('lang')=='english')
                                    Johuhr
                                    <th>{{ $prayers->dhuhr_en }}</th>
                                    @else
                                    জোহুর
                                    <th>{{ $prayers->dhuhr_bn }}</th>
                                    @endif
                                </th>
                                
                            </tr>
                            <tr>
                                <th>
                                    @if (session()->get('lang')=='english')
                                    asr
                                    <th>{{ $prayers->asr_en }}</th>
                                    @else
                                    আসর
                                    <th>{{ $prayers->asr_bn }}</th>
                                    @endif
                                </th>
                                
                            </tr>
                            <tr>
                                <th>
                                    @if (session()->get('lang')=='english')
                                    maghrib
                                    <th>{{ $prayers->maghrib_en }}</th>
                                    @else
                                    মাগরিব
                                    <th>{{ $prayers->maghrib_bn }}</th>
                                    @endif
                                </th>
                                
                            </tr>
                            <tr>
                                <th>
                                    @if (session()->get('lang')=='english')
                                    isha
                                    <th>{{ $prayers->isha_en }}</th>
                                    @else
                                    ইশা
                                    <th>{{ $prayers->isha_bn }}</th>
                                    @endif
                                </th>
                                
                            </tr>
                            <tr>
                                <th>
                                    @if (session()->get('lang')=='english')
                                    jummah
                                    <th>{{ $prayers->jummah_en }}</th>
                                    @else
                                    জুম্মাহ
                                    <th>{{ $prayers->jummah_bn }}</th>
                                    @endif
                                </th>
                                
                            </tr>
                        </table>
					<div class="cetagory-title-03">পুরানো সংবাদ  </div>
					<form action="" method="post">
						<div class="old-news-date">
						   <input type="text" name="from" placeholder="From Date" required="">
						   <input type="text" name="" placeholder="To Date">			
						</div>
						<div class="old-date-button">
							<input type="submit" value="খুজুন ">
						</div>
				   </form>
				   <!-- news -->
				   <br><br><br><br><br>

				   @if (session()->get('lang') == 'english')
				   <div class="cetagory-title-04"> Importent Website </div>
				   @else
				   <div class="cetagory-title-04"> গুরুত্বপূর্ণ ওয়েবসাইট </div>
				   @endif
				   
				   <div class="">
					@foreach ($website as $row )
				   	<div class="news-title-02">
						@if (session()->get('lang') == 'english')
							<h4 class="heading-03"><a href="{{ $row->website_link }}"><i class="fa fa-check" aria-hidden="true"></i> {{ $row->website_name_en }}  </a> </h4>
						@else
							<h4 class="heading-03"><a href="{{ $row->website_link }}"><i class="fa fa-check" aria-hidden="true"></i> {{ $row->website_name_bn }}  </a> </h4>
						@endif
				   	</div>
					   @endforeach
				   </div>
				</div>
			</div>
		</div>
	</section><!-- /.3rd-news-section-close -->
	

	<!-- gallery-section-start -->	
	<section class="news-section">
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-8 col-sm-7">
					<div class="gallery_cetagory-title">
						@if (session()->get('lang')=='english')
							Photo Gallery 
						@else
							ফটো গ্যালারি
						@endif
					</div>


					@php
						$photo_big = DB::table('photos')->where('type',1)->orderBy('id','DESC')->first();
						$photo_small = DB::table('photos')->where('type',0)->orderBy('id','DESC')->limit(5)->get();
					@endphp
					<div class="row">
	                    <div class="col-md-8 col-sm-8">
	                        <div class="photo_screen">
	                            <div class="myPhotos" style="width:100%">
                                      <img src="{{ asset ($photo_big->photo)}}"  alt="Avatar">
	                            </div>
	                        </div>
	                    </div>
	                    <div class="col-md-4 col-sm-4">
	                        <div class="photo_list_bg">
	                            @foreach ($photo_small as $row)
									
								
	                            <div class="photo_img photo_border active">
	                                <img src="{{ asset ($row->photo)}}" alt="image" onclick="currentDiv(1)">
	                                <div class="heading-03">
	                                    @if (session()->get('lang')=='english')
											{{ $row->title_en }}
										@else
											{{ $row->title_bn }}
										@endif
	                                </div>
	                            </div>
								@endforeach

	                        </div>
	                    </div>
	                </div>

	                <!--=======================================
                    Video Gallery clickable jquary  start
                ========================================-->

                            <script>
                                    var slideIndex = 1;
                                    showDivs(slideIndex);

                                    function plusDivs(n) {
                                      showDivs(slideIndex += n);
                                    }

                                    function currentDiv(n) {
                                      showDivs(slideIndex = n);
                                    }

                                    function showDivs(n) {
                                      var i;
                                      var x = document.getElementsByClassName("myPhotos");
                                      var dots = document.getElementsByClassName("demo");
                                      if (n > x.length) {slideIndex = 1}
                                      if (n < 1) {slideIndex = x.length}
                                      for (i = 0; i < x.length; i++) {
                                         x[i].style.display = "none";
                                      }
                                      for (i = 0; i < dots.length; i++) {
                                         dots[i].className = dots[i].className.replace(" w3-opacity-off", "");
                                      }
                                      x[slideIndex-1].style.display = "block";
                                      dots[slideIndex-1].className += " w3-opacity-off";
                                    }
                                </script>

                <!--=======================================
                    Video Gallery clickable  jquary  close
                =========================================-->

				</div>
				<div class="col-md-4 col-sm-5">
					<div class="gallery_cetagory-title">
						@if (session()->get('lang')=='english')
							Video Gallery 
						@else
							ভিডিও গ্যালারি
						@endif
						
					</div>

					@php
						$video_big = DB::table('videos')->where('type',1)->orderBy('id','DESC')->first();
						$video_small = DB::table('videos')->where('type',0)->orderBy('id','DESC')->limit(5)->get();
					@endphp

					<div class="row">
                        <div class="col-md-12 col-sm-12">
                            <div class="video_screen">
                                <div class="myVideos" style="width:100%">
                                    <div class="embed-responsive embed-responsive-16by9 embed-responsive-item">
                                    <iframe width="853" height="480" src="https://www.youtube.com/embed/{{ $video_big->embed_code }}" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-12">
                        
                            <div class="gallery_sec owl-carousel">

								@foreach ($video_small as $row)
									
								

                                <div class="video_image" style="width:100%" onclick="currentDivs(1)">
									<div class="embed-responsive embed-responsive-16by9 embed-responsive-item">
										<div class="embed-responsive embed-responsive-16by9 embed-responsive-item">
											<iframe width="200" height="140" src="https://www.youtube.com/embed/{{ $row->embed_code }}" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
										</div>
									</div>
                                </div>
								@endforeach


                            </div>
                        </div>
                    </div>


                    <script>
                        var slideIndex = 1;
                        showDivss(slideIndex);

                        function plusDivs(n) {
                          showDivss(slideIndex += n);
                        }

                        function currentDivs(n) {
                          showDivss(slideIndex = n);
                        }

                        function showDivss(n) {
                          var i;
                          var x = document.getElementsByClassName("myVideos");
                          var dots = document.getElementsByClassName("demo");
                          if (n > x.length) {slideIndex = 1}
                          if (n < 1) {slideIndex = x.length}
                          for (i = 0; i < x.length; i++) {
                             x[i].style.display = "none";
                          }
                          for (i = 0; i < dots.length; i++) {
                             dots[i].className = dots[i].className.replace(" w3-opacity-off", "");
                          }
                          x[slideIndex-1].style.display = "block";
                          dots[slideIndex-1].className += " w3-opacity-off";
                        }
                    </script>

				</div>
			</div>
		</div>
	</section><!-- /.gallery-section-close -->


@endsection