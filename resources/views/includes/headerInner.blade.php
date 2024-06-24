<div class="header-inner">
				<div class="container">
					<div class="inner">
						<div class="row">
							<div class="col-lg-3 col-md-3 col-12">
								<!-- Start Logo -->
								<div class="logo">
									<a href="index.html"><img src="{{asset('assets/img/logo.png') }}" alt="#"></a>
								</div>
								<!-- End Logo -->
								<!-- Mobile Nav -->
								<div class="mobile-nav"></div>
								<!-- End Mobile Nav -->
							</div>
							<div class="col-lg-7 col-md-9 col-12">
								<!-- Main Menu -->
								<div class="main-menu">
									<nav class="navigation">
										<ul class="nav menu">
											<!-- <li class="active"><a href="#">Home <i class="icofont-rounded-down"></i></a> -->
											<li class="{{Request::is('home')? 'active':''}}"><a href="{{route('home')}}">{{ __('messages.Home') }}  <i class="icofont-rounded-down"></i></a>
											<ul class="dropdown">
													<li><a href="index.html">Home Page 1</a></li>
												</ul>
											</li>
											<li><a href="#">{{ __('messages.Doctors') }} </a></li>
											<li><a href="#">{{ __('messages.Services') }} </a></li>
											<li><a href="#">{{ __('messages.Pages') }} <i class="icofont-rounded-down"></i></a>
												<ul class="dropdown">
													<li><a href="404">{{ __('messages.404_Error') }}</a></li>
												</ul>
											</li>
											<li><a href="#">{{ __('messages.Blogs') }} <i class="icofont-rounded-down"></i></a>
												<ul class="dropdown">
													<li><a href="blog-single.html">{{ __('messages.Blog_Details') }}</a></li>
												</ul>
											</li>
											<li><li class="{{Request::is('contactUs')? 'active':''}}"><a href="{{route('contactUs')}}">{{ __('messages.Contact_us') }} <i class="icofont-rounded-down"></i></a>
											<ul class="dropdown">
												<!-- <a href="contactUs">Contact Us</a></li> -->
										</ul>
									</nav>
								</div>
								<!--/ End Main Menu -->
							</div>
							<div class="col-lg-2 col-12">
								<div class="get-quote">
									<a href="appointment.html" class="btn">{{ __('messages.Book_Appointment') }}</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>