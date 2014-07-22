@extends('layouts.master')


@section('content')


			<div role="main" class="main">
				<!-- CAROUSEL SLIDER START -->
				<div class="container">
					<div class="row">
						<div class="col-md-12">
							<div class="nivo-slider">
								<div class="slider-wrapper theme-default">
									<!-- IMAGE DIMENSIONS 1140 X 430 -->
									<div id="nivoSlider" class="nivoSlider">
										<img src="/img/slides/slide-3.jpg" data-thumb="/img/slides/slide-3.jpg" alt="" />
										<img src="/img/slides/slide-4.jpg" data-thumb="/img/slides/slide-4.jpg" alt="" />
									</div>
									<div id="htmlcaption" class="nivo-html-caption"></div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- END CAROUSEL SLIDER -->

				<!-- CATEGORIES SECTION START -->
				<div class="container">

					<div class="row">
						<div class="col-md-12">
							<h2><strong>Categories</strong></h2>
							<div class="row">
								<div class="col-md-4">
									<div class="feature-box">
										<div class="feature-box-icon">
											<i><img src="/img/icons/icon-beauty-16.png"></i>
										</div>
										<div class="feature-box-info">
											<h4 class="shorter"><a href='/category/Beauty/'>Beauty</a></h4>
											<p class="tall">Hair, Nails, Skin Care, Tattoos, &amp More.</p>
										</div>
									</div>
									<div class="feature-box">
										<div class="feature-box-icon">
											<i class="icon icon-plus"></i>
										</div>
										<div class="feature-box-info">
											<h4 class="shorter"><a href='/category/Health/'>Health</a></h4>
											<p class="tall">Doctors, Dentist, Alt-Medicine &amp More.</p>
										</div>
									</div>
									<div class="feature-box">
										<div class="feature-box-icon">
											<i class="icon icon-home"></i>
										</div>
										<div class="feature-box-info">
											<h4 class="shorter"><a href='/category/Home20%&20%Garden/'>Home &amp Garden</a></h4>
											<p class="tall">Handymen, Carpenters, Electricians &amp More.</p>
										</div>
									</div>
								</div>
								<i class="fa fa-road"></i>
								<div class="col-md-4">
									<div class="feature-box">
										<div class="feature-box-icon">
											<i class="icon icon-road"></i>
										</div>
										<div class="feature-box-info">
											<h4 class="shorter"><a href='/category/Auto/'>Auto</a></h4>
											<p class="tall">Mechanics, Tire Shops, Wreckers &amp More.</p>
										</div>
									</div>
									<div class="feature-box">
										<div class="feature-box-icon">
											<i><img src='/img/icons/icon-dog-16.png'></i>
										</div>
										<div class="feature-box-info">
											<h4 class="shorter"><a href='/category/Pets/'>Pets</a></h4>
											<p class="tall">Vets, Groomers, Sitters &amp More.</p>
										</div>
									</div>
									<div class="feature-box">
										<div class="feature-box-icon">
											<i class="icon icon-calendar-o"></i>
										</div>
										<div class="feature-box-info">
											<h4 class="shorter"><a href='/category/Events/'>Events</a></h4>
											<p class="tall">Party Rentals, Planners, Caterers, Entertainers &amp More</p>
										</div>
									</div>
								</div>
								<div class="col-md-4">
									<div class="feature-box">
										<div class="feature-box-icon">
											<i><img src='/img/icons/icon-bicycle-18.png'></i>
										</div>
										<div class="feature-box-info">
											<h4 class="shorter"><a href='/category/Recreation/'>Recreation</a></h4>
											<p class="tall">Cycling, Extreme, River Rats &amp More.</p>
										</div>
									</div>
								</div>
								<div class="col-md-4">
									<div class="feature-box">
										<div class="feature-box-icon">
											<i><img src='/img/icons/icon-computer-18.png'></i>
										</div>
										<div class="feature-box-info">
											<h4 class="shorter"><a href='/category/Computer%20&20%Tech/'>Computer &amp Tech</a></h4>
											<p class="tall">Computer Repair, Developer, Designer, Specialist &amp More.</p>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- END CATEGORIES SECTION -->


@stop