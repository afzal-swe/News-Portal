 @php
    $socials = DB::table('socials')->first();
    $horizontal_ads = DB::table('ads')->where('type',2)->first();
    $vartical_ads = DB::table('ads')->where('type',1)->first();
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
                            {{-- @dd($category) --}}

                            <!-- Collection of nav links and other content for toggling -->
                            <div id="navbarCollapse" class="collapse navbar-collapse">
                                <ul class="nav navbar-nav">
                                    
                                    @foreach ($category as $row)
                                        
                                    @php
                                        $sub_cat = DB::table('subcategory')->where('category_id', $row->id)->get();
                                        
                                    @endphp
                                    

                                        <li class="dropdown">
                                            <a href="{{ route('subcategory_view',$row->id) }}" class="dropdown-toggle" data-toggle="dropdown">
                                                @if (session()->get('lang') == 'english')
                                                {{ $row->category_en }} 
                                                @else
                                                {{ $row->category_bn }} 
                                                @endif
                                                
                                            </a>
                                        <ul class="dropdown-menu">
                                            @foreach ($sub_cat as $row)
                                            {{-- @dd($row); --}}

                                            <li>
                                                <a href="{{ route('subcategory_view',$row->id) }}">
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

	
    <!-- top-add-start -->
    <section>
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-8 col-md-offset-2 col-sm-8 col-sm-offset-2">
                    @if ($horizontal_ads==Null)
                        
                    @else
                    <a href="{{ $horizontal_ads->link }}">
                        <div class="top-add"><img src="{{ asset ($horizontal_ads->image)}}" alt="" /></div>
                    </a>
                    
                    @endif
                    
					
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
