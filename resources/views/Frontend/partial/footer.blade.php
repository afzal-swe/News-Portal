
@php
$socials = DB::table('socials')->first();
$setting = DB::table('settings')->first();
@endphp
    <!-- top-footer-start -->
	<section>
		<div class="container-fluid">
			<div class="top-footer">
				<div class="row">
					<div class="col-md-3 col-sm-4">
						<div class="foot-logo">
							<img src="{{ asset ($setting->logo)}}" style="height: 50px;" />
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
						@if (session()->get('lang')=='english')
						Address : {{ $setting->address_en }}
						@else
						ঠিকানা : {{ $setting->address_bn }}
						@endif
						
					</div>
				</div>
				<div class="col-md-4 col-sm-4">
					<div class="editor-two">
					
					</div>
				</div>
				<div class="col-md-4 col-sm-4">
					<div class="editor-three">
						@if (session()->get('lang')=='english')
							Phone : {{ $setting->phone_en }} <br>
							E-mail: {{ $setting->email }}
						@else
							ফোন  : {{ $setting->phone_bn }} <br>
							ইমেইল : {{ $setting->email }}
						@endif
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
						All rights reserved © 2020 CodeArtist.IT
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