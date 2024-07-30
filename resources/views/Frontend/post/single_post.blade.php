@extends('Frontend.layouts.apps')
@section('content')

<meta property="og:type" content="Website">
<meta property="og:title" content="{{ $post->title_en }}">
<meta property="og:title" content="{{ $post->title_bn }}">
<meta property="og:description" content="{{ $post->details_en }}">
<meta property="og:description" content="{{ $post->details_bn }}">

<section class="single-page">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <ol class="breadcrumb">   
                   <li><a href="{{ route('home_page') }}"><i class="fa fa-home"></i></a></li>					   
                    <li>
                        <a href="#">
                            @if (session()->get('lang')=='english')
                                {{ $post->category_en }}
                            @else
                                {{ $post->category_bn }}
                            @endif  
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            @if (session()->get('lang')=='english')
                                {{$post->subcategory_en ?? ""}}
                            @else
                                {{$post->subcategory_bn ?? ""}}
                            @endif
                        </a>
                    </li>
                </ol>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12 col-sm-12"> 											
                <header class="headline-header margin-bottom-10">
                   <h1 class="headline">
                        @if (session()->get('lang')=='english')
                            {{$post->title_en}}
                        @else
                            {{$post->title_bn}}
                        @endif
                    </h1>
                </header>
     
     
             <div class="article-info margin-bottom-20">
              <div class="row">
                    <div class="col-md-6 col-sm-6"> 
                     <ul class="list-inline">
                     
                     
                        <li>{{ $post->name }} </li>     <li><i class="fa fa-clock-o"></i> {{ $post->post_date }}</li>
                     </ul>
                     
                    
                    </div>
                    {{-- <div class="col-md-6 col-sm-6 pull-right"> 						
                        <ul class="social-nav">
                            <li><a href="" onclick="window.open('https://www.facebook.com/sharer/sharer.php?u='+encodeURIComponent('#'),'facebook-share-dialog','width=626,height=436'); return false;" target="_blank" title="Facebook" rel="nofollow" class="facebook"><i class="fa fa-facebook"></i></a></li>
                            <li><a target="_blank" href="" onclick="javascript:window.open('https://twitter.com/share?text=‘#'); return false;" title="Twitter" rel="nofollow" class="twitter"><i class="fa fa-twitter"></i></a></li>
                            <li><a target="_blank" href="" onclick="window.open('https://plus.google.com/share?url=#'); return false;" title="Google plus" rel="nofollow" class="google"><i class="fa fa-google-plus"></i></a></li>
                            <li><a href="#" target="_blank" title="Print" rel="nofollow" class="print"><i class="fa fa-print"></i></a></li>
                    
                        </ul>						   
                    </div>						 --}}
                </div>				 
             </div>				
        </div>
      </div>
      <!-- ******** -->
      <div class="row">
        <div class="col-md-8 col-sm-8">
            <div class="single-news">
                <div class="sharethis-inline-share-buttons"></div><br>
                <img src="{{ asset ($post->image)}}" alt="" />
                <h4 class="caption">
                    @if (session()->get('lang')=='english')
                        {{$post->title_en}}
                    @else
                        {{$post->title_bn}}
                    @endif
                </h4>
                <p>
                    @if (session()->get('lang')=='english')
                        {!! $post->details_en !!}
                    @else
                    {!! $post->details_bn !!}
                    @endif
              </p>
            </div>
            <!-- ********* -->

            @php
                $more = DB::table('posts')->where('cat_id',$post->cat_id)->orderBy('id','DESC')->limit(6)->get();
            @endphp
            <div class="row">

                <div class="col-md-12">
                    <h2 class="heading">
                        @if (session()->get('lang')=='english')
                            More News
                        @else
                            আরো সংবাদ
                        @endif
                        
                    </h2>
                </div>
                @foreach ($more as $row)
                <div class="col-md-4 col-sm-4">
                    <div class="top-news sng-border-btm">
                        <a href="{{ route('single.post',$row->slug) }}"><img src="{{ asset($row->image) }}" alt="Notebook"></a>
                        <h4 class="heading-02" style="height: 70px;">
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


                
        </div>
        <div class="col-md-4 col-sm-4">
            <!-- add-start -->	
                <div class="row">
                    <div class="col-md-12 col-sm-12">
                        <div class="sidebar-add"><img src="{{ asset('frontend/assets/img/add_01.jpg') }}" alt="" /></div>
                    </div>
                </div><!-- /.add-close -->



                @php
					$latest = DB::table('posts')->orderBy('id','DESC')->limit(8)->get();
					$Favourite = DB::table('posts')->orderBy('id','DESC')->inRandomOrder()->limit(8)->get();
					$Highest = DB::table('posts')->orderBy('id','ASC')->inRandomOrder()->limit(8)->get();
				@endphp


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
            <!-- add-start -->	
                <div class="row">
                    <div class="col-md-12 col-sm-12">
                        <div class="sidebar-add"><img src="{{ asset ('frontend/assets/img/add_01.jpg')}}" alt="" /></div>
                    </div>
                </div><!-- /.add-close -->
        </div>
      </div>
    </div>
</section>

<script type="text/javascript" src="https://platform-api.sharethis.com/js/sharethis.js#property=66a83a51566923001d52f0c4&product=inline-share-buttons&source=platform" async="async"></script>

@endsection