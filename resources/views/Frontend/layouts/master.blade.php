@extends('Frontend.layouts.apps')
@section('content')


@php
	$socials = DB::table('socials')->first();
	$website = DB::table('websites')->get();
@endphp


@php
    function bn_date($str){
        $en = array(1,2,3,4,5,6,7,8,9,0);
        $bn = array('১','২','৩','৪','৫','৬','৭','৮','৯','০');
        $str = str_replace($en,$bn,$str);

        $en = array('January','February','March','April','May','June','July','August','September','Octobar','November','December');
        $en_short = array('Jan','Feb','Mar','Apr','May','Jun','July','Aug','Sep','Oct','Nov','Dec');
        $bn = array('জানুয়ারি','ফেব্রুয়ারি','মার্চ','এপ্রিল','মে','জুন','জুলাই','আগস্ট','সেপ্টেম্বর','অক্টোবর','নভেম্বর','ডিসেম্বর');
        $str = str_replace($en,$bn,$str);
        $str = str_replace($en_short,$bn,$str);

        $en = array('Satuarday','Sunday','Monday','Tuesday','Wednesday','thursday','Friday');
        $en_short = array('Sat','Sun','Mon','Tue','Wed','thu','Fri');
        $bn_short = array('শনি','রবি','সোম','মঙ্গল','বুধ','বৃহ','শুক্র');
        $bn = array('শনিবার','রবিবার','সোমবার','মঙ্গলবার','বুধবার','বৃহস্পতিবার','শুক্রবার');
        $str = str_replace($en,$bn,$str);
        $str = str_replace($en_short,$bn_short,$str);

        $en = array('am','pm');
        $bn = array('পূর্বাহন','অপরাহন');
        $str = str_replace($en,$bn,$str);
        $str = str_replace($en_short,$bn_short,$str);

        $en = array('১২','২৪');
        $en = array('৬','১২');
        $str = str_replace($en,$bn,$str);
        return $str;
    }
@endphp



    <!-- header-start -->
    <section class="hdr_section">
        <div class="container-fluid">			
            <div class="row">
                <div class="col-xs-6 col-md-2 col-sm-4">
                    <div class="header_logo">
                        <a href=""><img src="{{ asset ('Frontend/assets/img/demo_logo.png')}}"></a> 
                    </div>
                </div>              
                <div class="col-xs-6 col-md-8 col-sm-8">
                    <div id="menu-area" class="menu_area">
                        <div class="menu_bottom">
                            <nav role="navigation" class="navbar navbar-default mainmenu">
                        <!-- Brand and toggle get grouped for better mobile display -->
                                <div class="navbar-header">
                                    <button type="button" data-target="#navbarCollapse" data-toggle="collapse" class="navbar-toggle">
                                        <span class="sr-only">Toggle navigation</span>
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                    </button>
                                </div>


								@php
									$category= DB::table('categories')->orderBy('id', 'DESC')->get();
								@endphp

                                <!-- Collection of nav links and other content for toggling -->
                                <div id="navbarCollapse" class="collapse navbar-collapse">
                                    <ul class="nav navbar-nav">
                                        
										@foreach ($category as $row)
											
										@php
											$sub_cat = DB::table('subcategory')->where('category_id', $row->id)->get();
										@endphp

                                            <li class="dropdown">
                                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
													@if (session()->get('lang') == 'english')
													{{ $row->category_en }} 
													@else
													{{ $row->category_bn }} 
													@endif
													
												</a>
                                            <ul class="dropdown-menu">
												@foreach ($sub_cat as $row)
												<li>
													<a href="#">
														@if (session()->get('lang') == 'english')
														{{ $row->subcategory_en }}
														@else
														{{ $row->subcategory_bn }}
														@endif
														
													</a>
												</li>
                                                
												@endforeach
                                                
                                            </ul>
                                            </li>
											@endforeach
                                        
                                    </ul>
                                </div>
                            </nav>											
                        </div>
                    </div>					
                </div> 
                <div class="col-xs-12 col-md-2 col-sm-12">
                    <div class="header-icon">
                        <ul>
                           
							@if (session()->get('lang')=="bangla")
							<li class="version"><a href="{{ route('lang.english') }}">English</a></li>
							@else
							<li class="version"><a href="{{ route('lang.bangla') }}">বাংলা</a></li>
							@endif
                            
                            
                            <!-- search-start -->
                            <li><div class="search-large-divice">
                                <div class="search-icon-holder"> <a href="#" class="search-icon" data-toggle="modal" data-target=".bd-example-modal-lg"><i class="fa fa-search" aria-hidden="true"></i></a>
                                    <div class="modal fade bd-example-modal-lg"  tabindex="-1" role="dialog" aria-hidden="true" style="display: none;">
                                    {{-- <div class="modal fade bd-example-modal-lg" action="<?php echo home_url( '/' ); ?>" tabindex="-1" role="dialog" aria-hidden="true" style="display: none;"> --}}
                                        <div class="modal-dialog modal-lg">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"> <i class="fa fa-times-circle" aria-hidden="true"></i> </button>
                                                </div>
                                                <div class="modal-body">
                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <div class="custom-search-input">
                                                                <form>
                                                                    <div class="input-group">
                                                                        <input class="search form-control input-lg" placeholder="search" value="Type Here.." type="text">
                                                                        <span class="input-group-btn">
                                                                        <button class="btn btn-lg" type="button"> <i class="fa fa-search" aria-hidden="true"></i> </button>
                                                                    </span> </div>
                                                                </form>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div></li>
                            <!-- social-start -->
                            <li>
                                <div class="dropdown">
                                  <button class="dropbtn-02"><i class="fa fa-thumbs-up" aria-hidden="true"></i></button>
                                  <div class="dropdown-content">
                                    <a href="{{ $socials->facebook }}"><i class="fa fa-facebook" aria-hidden="true"></i> Facebook</a>
                                    <a href="{{ $socials->twitter }}"><i class="fa fa-twitter" aria-hidden="true"></i> Twitter</a>
                                    <a href="{{ $socials->youtube }}"><i class="fa fa-youtube-play" aria-hidden="true"></i> Youtube</a>
                                    <a href="{{ $socials->instagram }}"><i class="fa fa-instagram" aria-hidden="true"></i> Instagram</a>
                                    <a href="{{ $socials->linkedin }}"><i class="fa fa-linkedin" aria-hidden="true"></i> linkedin</a>

                                  </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
	<!-- /.header-close -->
	
    <!-- top-add-start -->
    <section>
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-8 col-md-offset-2 col-sm-8 col-sm-offset-2">
                    <div class="top-add"><img src="{{ asset ('Frontend/assets/img/top_ad.jpg')}}" alt="" /></div>
					{{-- <img src="{{ asset ('Frontend/assets/img/add_01.jpg')}}" alt="" /> --}}
                </div>
            </div>
        </div>
    </section>
	 <!-- /.top-add-close -->
	
	<!-- date-start -->
    <section>
    	<div class="container-fluid">
    		<div class="row">
    			<div class="col-md-12 col-sm-12">
					<div class="date">
						<ul>
							<script type="text/javascript" src="http://bangladate.appspot.com/index2.php"></script>
							<li><i class="fa fa-map-marker" aria-hidden="true"></i> 
                                @if (session()->get('lang')=='bangla')
                                ঢাকা
                                @else
                                Dhaka
                                @endif
                                </li>
							<li><i class="fa fa-calendar" aria-hidden="true"></i> 

                                @if (session()->get('lang')=='english')
								{{ (date('d M Y, l, h:i:s a')) }}
                                @else
                                {{ bn_date(date('d M Y, l, h:i:s a')) }}
                                @endif
                            </li>

							<li><i class="fa fa-clock-o" aria-hidden="true"></i>
                                @if (session()->get('lang')=='bangla')
                                আপডেট ৫ মিনিট আগে
                                @else
                                Updated 5 minutes ago
                                @endif
                            </li>
						</ul>
						
					</div>
				</div>
    		</div>
    	</div>
    </section><!-- /.date-close -->  

	<!-- notice-start -->
	 

	@php
		$headline = DB::table('posts')
		->join('categories','posts.cat_id', 'categories.id')
		->join('subcategory','posts.subcat_id','subcategory.id')
		->select('posts.*','categories.category_bn','subcategory.subcategory_bn')
		->where('posts.headline',1)
		->orderBy('id','DESC')
		->get();

		$notices = DB::table('notices')->first();
	@endphp

    <section>
    	<div class="container-fluid">
			<div class="row scroll">
				<div class="col-md-2 col-sm-3 scroll_01 ">
					@if (session()->get('lang')=='english')
						Headline :
					@else
						শিরোনাম :
					@endif
					
				</div>
				<div class="col-md-10 col-sm-9 scroll_02">
					<marquee>
						@foreach ($headline as $row)
							@if (session()->get('lang')=='english')
								* {{ $row->title_en }}
							@else
								* {{ $row->title_bn }}
							@endif
						@endforeach
					</marquee>
				</div>
			</div>
    	</div>
    </section> 

	@if ($notices->status==1)
    <section>
    	<div class="container-fluid">
			<div class="row scroll">
				<div class="col-md-2 col-sm-3 scroll_01 " style="background-color:green;">
					@if (session()->get('lang')=='english')
						Notice :
					@else
						নোটিশ :
					@endif
					
				</div>
				<div class="col-md-10 col-sm-9 scroll_02" style="background-color:rgb(113, 119, 113);">
					<marquee>
						
							@if (session()->get('lang')=='english')
								* {{ $notices->notice_en }}
							@else
								* {{ $notices->notice_bn }}
							@endif
						
					</marquee>
				</div>
			</div>
    	</div>
    </section> 
	@endif    




	@php
		$firstsection_big = DB::table('posts')->where('first_section_thumbnail', 1)->orderBy('id', 'DESC')->first();
		$firstsection_small = DB::table('posts')->where('first_section', 1)->orderBy('id', 'DESC')->limit(8)->get();
	@endphp



	<!-- 1st-news-section-start -->	
	<section class="news-section">
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-9 col-sm-8">
					<div class="row">
						<div class="col-md-1 col-sm-1 col-lg-1"></div>
						<div class="col-md-10 col-sm-10">
							<div class="lead-news">
								<div class="service-img"><a href="#"><img src="{{ asset ($firstsection_big->image)}}" alt="Notebook"></a></div>
								<div class="content">
								<h4 class="lead-heading-01">
									<a href="#">
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
									<a href="#"><img src="{{ asset ($row->image)}}" alt="Notebook"></a>
										<h4 class="heading-02" style="height: 80px;">
											<a href="#">
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


	<!-- top-footer-start -->
	<section>
		<div class="container-fluid">
			<div class="top-footer">
				<div class="row">
					<div class="col-md-3 col-sm-4">
						<div class="foot-logo">
							<img src="{{ asset ('Frontend/assets/img/demo_logo.png')}}" style="height: 50px;" />
						</div>
					</div>
					<div class="col-md-6 col-sm-4">
						 <div class="social">
                            <ul>
                                <li><a href="{{ $socials->facebook }}" target="_blank" class="facebook"> <i class="fa fa-facebook"></i></a></li>
                                <li><a href="{{ $socials->twitter }}" target="_blank" class="twitter"> <i class="fa fa-twitter"></i></a></li>
                                <li><a href="{{ $socials->instagram }}" target="_blank" class="instagram"> <i class="fa fa-instagram"></i></a></li>
                                <li><a href="{{ $socials->linkedin }}" target="_blank" class="linkedin"> <i class="fa fa-linkedin"></i></a></li>
                                <li><a href="{{ $socials->youtube }}" target="_blank" class="youtube"> <i class="fa fa-youtube"></i></a></li>
                            </ul>
                        </div>
					</div>
					<div class="col-md-3 col-sm-4">
						<div class="apps-img">
							<ul>
								<li><a href="#"><img src="{{ asset ('Frontend/assets/img/apps-01.png')}}" alt="" /></a></li>
								<li><a href="#"><img src="{{ asset ('Frontend/assets/img/apps-02.png')}}" alt="" /></a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section><!-- /.top-footer-close -->
	
	<!-- middle-footer-start -->	
	<section class="middle-footer">
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-4 col-sm-4">
					<div class="editor-one">
						Lorem ipsum, or lipsum as it is sometimes known, is dummy text used in laying out print, graphic or web designs. The passage is attributed to an unknown typesetter in the 15th century who is 
					</div>
				</div>
				<div class="col-md-4 col-sm-4">
					<div class="editor-two">
					Lorem ipsum, or lipsum as it is sometimes known, is dummy text used in laying out print, graphic or web designs. The passage is attributed to an unknown typesetter in the 15th century who is 
					</div>
				</div>
				<div class="col-md-4 col-sm-4">
					<div class="editor-three">
						Lorem ipsum, or lipsum as it is sometimes known, is dummy text used in laying out print, graphic or web designs. The passage is attributed to an unknown typesetter in the 15th century who is 
					</div>
				</div>
			</div>
		</div>
	</section><!-- /.middle-footer-close -->
	
	<!-- bottom-footer-start -->	
	<section class="bottom-footer">
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-6 col-sm-6">
					<div class="copyright">						
						All rights reserved © 2020 LearnHunter
					</div>
				</div>
				<div class="col-md-6 col-sm-6">
					<div class="btm-foot-menu">
						<ul>
							<li><a href="#">About US</a></li>
							<li><a href="#">Contact US</a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</section>
@endsection