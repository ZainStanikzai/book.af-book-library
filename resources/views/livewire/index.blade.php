        <section class="">
           
        <!--************************************
					Home Slider Start
			*************************************-->  
			@include('livewire.layout-parsial-component.slider')
			<!--************************************
					Home Slider End
			*************************************--> 
		    <!--************************************
					Best Selling Start
			*************************************-->
			@livewire('PartialPageComponents.IndexComponents.BestSellingBooks')
			<!--************************************
					Best Selling End
			*************************************-->
			<!--************************************
					Featured Item Start
			*************************************-->
			@livewire('PartialPageComponents.IndexComponents.AddBanner')
			
			<!--************************************
					Featured Item End
			*************************************-->
			<!--************************************
					New Release Start
			*************************************-->
			<section class="tg-sectionspace tg-haslayout">
				<div class="container">
					<div class="row">
						<div class="tg-newrelease">
							<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
								<div class="tg-sectionhead">
									<h2><span>Taste The New Spice</span>New Release Books</h2>
								</div>
								<div class="tg-description">
									<p>Consectetur adipisicing elit sed do eiusmod tempor incididunt labore toloregna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamcoiars nisiuip commodo consequat aute irure dolor in aprehenderit aveli esseati cillum dolor fugiat nulla pariatur cepteur sint occaecat cupidatat.</p>
								</div>
								<div class="tg-btns">
									<a class="tg-btn tg-active" href="javascript:void(0);">View All</a>
									<a class="tg-btn" href="javascript:void(0);">Read More</a>
								</div>
							</div>
							<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
								<div class="row">
									<div class="tg-newreleasebooks">
										<div class="col-xs-4 col-sm-4 col-md-6 col-lg-4">
											<div class="tg-postbook">
												<figure class="tg-featureimg">
													<div class="tg-bookimg">
                                                        <div class="tg-frontcover"><img src="{{ asset('assets/images/books/img-07.jpg') }}" alt="image description"></div>
														<div class="tg-backcover"><img src="{{ asset('assets/images/books/img-07.jpg') }}" alt="image description"></div>
													</div>
													<a class="tg-btnaddtowishlist" href="javascript:void(0);">
														<i class="icon-heart"></i>
														<span>add to wishlist</span>
													</a>
												</figure>
												<div class="tg-postbookcontent">
													<ul class="tg-bookscategories">
														<li><a href="javascript:void(0);">Adventure</a></li>
														<li><a href="javascript:void(0);">Fun</a></li>
													</ul>
													<div class="tg-booktitle">
														<h3><a href="javascript:void(0);">Help Me Find My Stomach</a></h3>
													</div>
													<span class="tg-bookwriter">By: <a href="javascript:void(0);">Kathrine Culbertson</a></span>
													<span class="tg-stars"><span></span></span>
												</div>
											</div>
										</div>
										<div class="col-xs-4 col-sm-4 col-md-6 col-lg-4">
											<div class="tg-postbook">
												<figure class="tg-featureimg">
													<div class="tg-bookimg">
														<div class="tg-frontcover"><img src="{{ asset('assets/images/books/img-08.jpg') }}" alt="image description"></div>
														<div class="tg-backcover"><img src="{{ asset('assets/images/books/img-08.jpg') }}" alt="image description"></div>
													</div>
													<a class="tg-btnaddtowishlist" href="javascript:void(0);">
														<i class="icon-heart"></i>
														<span>add to wishlist</span>
													</a>
												</figure>
												<div class="tg-postbookcontent">
													<ul class="tg-bookscategories">
														<li><a href="javascript:void(0);">Adventure</a></li>
														<li><a href="javascript:void(0);">Fun</a></li>
													</ul>
													<div class="tg-booktitle">
														<h3><a href="javascript:void(0);">Drive Safely, No Bumping</a></h3>
													</div>
													<span class="tg-bookwriter">By: <a href="javascript:void(0);">Sunshine Orlando</a></span>
													<span class="tg-stars"><span></span></span>
												</div>
											</div>
										</div>
										<div class="col-xs-4 col-sm-4 col-md-3 col-lg-4 hidden-md">
											<div class="tg-postbook">
												<figure class="tg-featureimg">
													<div class="tg-bookimg">
														<div class="tg-frontcover"><img src="{{ asset('assets/images/books/img-09.jpg') }}" alt="image description"></div>
														<div class="tg-backcover"><img src="{{ asset('assets/images/books/img-09.jpg') }}" alt="image description"></div>
													</div>
													<a class="tg-btnaddtowishlist" href="javascript:void(0);">
														<i class="icon-heart"></i>
														<span>add to wishlist</span>
													</a>
												</figure>
												<div class="tg-postbookcontent">
													<ul class="tg-bookscategories">
														<li><a href="javascript:void(0);">Adventure</a></li>
														<li><a href="javascript:void(0);">Fun</a></li>
													</ul>
													<div class="tg-booktitle">
														<h3><a href="javascript:void(0);">Let The Good Times Roll Up</a></h3>
													</div>
													<span class="tg-bookwriter">By: <a href="javascript:void(0);">Elisabeth Ronning</a></span>
													<span class="tg-stars"><span></span></span>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>
			<!--************************************
					New Release End
			*************************************-->
			<!--************************************
					Collection Count Start
			*************************************-->
			<section class="bg-danger tg-parallax tg-bgcollectioncount tg-haslayout" data-z-index="-100" data-appear-top-offset="600" data-parallax="scroll" data-image-src="{{ asset('assets/images/parallax/bgparallax-04.jpg') }}">
				<div class="tg-sectionspace tg-collectioncount tg-haslayout">
					<div class="container">
						<div class="row">
							<div id="tg-collectioncounters" class="tg-collectioncounters">
								<div class="tg-collectioncounter tg-drama">
									<div class="tg-collectioncountericon">
										<i class="icon-bubble"></i>
									</div>
									<div class="tg-titlepluscounter">
										<h2>Drama</h2>
										<h3 data-from="0" data-to="6179213" data-speed="8000" data-refresh-interval="50">6,179,213</h3>
									</div>
								</div>
								<div class="tg-collectioncounter tg-horror">
									<div class="tg-collectioncountericon">
										<i class="icon-heart-pulse"></i>
									</div>
									<div class="tg-titlepluscounter">
										<h2>Horror</h2>
										<h3 data-from="0" data-to="3121242" data-speed="8000" data-refresh-interval="50">3,121,242</h3>
									</div>
								</div>
								<div class="tg-collectioncounter tg-romance">
									<div class="tg-collectioncountericon">
										<i class="icon-heart"></i>
									</div>
									<div class="tg-titlepluscounter">
										<h2>Romance</h2>
										<h3 data-from="0" data-to="2101012" data-speed="8000" data-refresh-interval="50">2,101,012</h3>
									</div>
								</div>
								<div class="tg-collectioncounter tg-fashion">
									<div class="tg-collectioncountericon">
										<i class="icon-star"></i>
									</div>
									<div class="tg-titlepluscounter">
										<h2>Fashion</h2>
										<h3 data-from="0" data-to="1158245" data-speed="8000" data-refresh-interval="50">1,158,245</h3>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>
			<!--************************************
					Collection Count End
			*************************************-->
			<!--************************************
					Picked By Author Start
			*************************************-->
			@livewire('PartialPageComponents.IndexComponents.PickupByAuthor')
			<!--************************************
					Picked By Author End
			*************************************-->
			<!--************************************
					Testimonials Start
			*************************************-->
			@livewire('PartialPageComponents.IndexComponents.ClientOpinion')
			<!--************************************
					Testimonials End
			*************************************-->
			<!--************************************
					Authors Start
			*************************************-->
			<section class="tg-sectionspace tg-haslayout">
				<div class="container">
					<div class="row">
						<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
							<div class="tg-sectionhead">
								<h2><span>Strong Minds Behind Us</span>Most Popular Authors</h2>
								<a class="tg-btn" href="javascript:void(0);">View All</a>
							</div>
						</div>
						<div id="tg-authorsslider" class="tg-authors tg-authorsslider owl-carousel">
							<div class="item tg-author">
								<figure><a href="javascript:void(0);"><img src="{{ asset('assets/images/author/imag-03.jpg') }}" alt="image description"></a></figure>
								<div class="tg-authorcontent">
									<h2><a href="javascript:void(0);">Jude Morphew</a></h2>
									<span>21,658 Published Books</span>
									<ul class="tg-socialicons">
										<li class="tg-facebook"><a href="javascript:void(0);"><i class="fa fa-facebook"></i></a></li>
										<li class="tg-twitter"><a href="javascript:void(0);"><i class="fa fa-twitter"></i></a></li>
										<li class="tg-linkedin"><a href="javascript:void(0);"><i class="fa fa-linkedin"></i></a></li>
									</ul>
								</div>
							</div>
							<div class="item tg-author">
								<figure><a href="javascript:void(0);"><img src="{{ asset('assets/images/author/imag-04.jpg') }}" alt="image description"></a></figure>
								<div class="tg-authorcontent">
									<h2><a href="javascript:void(0);">Book Burger</a></h2>
									<span>20,257 Published Books</span>
									<ul class="tg-socialicons">
										<li class="tg-facebook"><a href="javascript:void(0);"><i class="fa fa-facebook"></i></a></li>
										<li class="tg-twitter"><a href="javascript:void(0);"><i class="fa fa-twitter"></i></a></li>
										<li class="tg-linkedin"><a href="javascript:void(0);"><i class="fa fa-linkedin"></i></a></li>
									</ul>
								</div>
							</div>
							<div class="item tg-author">
								<figure><a href="javascript:void(0);"><img src="{{ asset('assets/images/author/imag-05.jpg') }}" alt="image description"></a></figure>
								<div class="tg-authorcontent">
									<h2><a href="javascript:void(0);">Book Ship &amp; Co.</a></h2>
									<span>15,686 Published Books</span>
									<ul class="tg-socialicons">
										<li class="tg-facebook"><a href="javascript:void(0);"><i class="fa fa-facebook"></i></a></li>
										<li class="tg-twitter"><a href="javascript:void(0);"><i class="fa fa-twitter"></i></a></li>
										<li class="tg-linkedin"><a href="javascript:void(0);"><i class="fa fa-linkedin"></i></a></li>
									</ul>
								</div>
							</div>
							<div class="item tg-author">
								<figure><a href="javascript:void(0);"><img src="{{ asset('assets/images/author/imag-06.jpg') }}" alt="image description"></a></figure>
								<div class="tg-authorcontent">
									<h2><a href="javascript:void(0);">Enoch Gallion</a></h2>
									<span>12,435 Published Books</span>
									<ul class="tg-socialicons">
										<li class="tg-facebook"><a href="javascript:void(0);"><i class="fa fa-facebook"></i></a></li>
										<li class="tg-twitter"><a href="javascript:void(0);"><i class="fa fa-twitter"></i></a></li>
										<li class="tg-linkedin"><a href="javascript:void(0);"><i class="fa fa-linkedin"></i></a></li>
									</ul>
								</div>
							</div>
							<div class="item tg-author">
								<figure><a href="javascript:void(0);"><img src="{{ asset('assets/images/author/imag-07.jpg') }}" alt="image description"></a></figure>
								<div class="tg-authorcontent">
									<h2><a href="javascript:void(0);">Book House</a></h2>
									<span>15,953 Published Books</span>
									<ul class="tg-socialicons">
										<li class="tg-facebook"><a href="javascript:void(0);"><i class="fa fa-facebook"></i></a></li>
										<li class="tg-twitter"><a href="javascript:void(0);"><i class="fa fa-twitter"></i></a></li>
										<li class="tg-linkedin"><a href="javascript:void(0);"><i class="fa fa-linkedin"></i></a></li>
									</ul>
								</div>
							</div>
							<div class="item tg-author">
								<figure><a href="javascript:void(0);"><img src="{{ asset('assets/images/author/imag-08.jpg') }}" alt="image description"></a></figure>
								<div class="tg-authorcontent">
									<h2><a href="javascript:void(0);">Linnie Klimek</a></h2>
									<span>65,720 Published Books</span>
									<ul class="tg-socialicons">
										<li class="tg-facebook"><a href="javascript:void(0);"><i class="fa fa-facebook"></i></a></li>
										<li class="tg-twitter"><a href="javascript:void(0);"><i class="fa fa-twitter"></i></a></li>
										<li class="tg-linkedin"><a href="javascript:void(0);"><i class="fa fa-linkedin"></i></a></li>
									</ul>
								</div>
							</div>
							<div class="item tg-author">
								<figure><a href="javascript:void(0);"><img src="{{ asset('assets/images/author/imag-05.jpg') }}" alt="image description"></a></figure>
								<div class="tg-authorcontent">
									<h2><a href="javascript:void(0);">Book Ship &amp; Co.</a></h2>
									<span>15,686 Published Books</span>
									<ul class="tg-socialicons">
										<li class="tg-facebook"><a href="javascript:void(0);"><i class="fa fa-facebook"></i></a></li>
										<li class="tg-twitter"><a href="javascript:void(0);"><i class="fa fa-twitter"></i></a></li>
										<li class="tg-linkedin"><a href="javascript:void(0);"><i class="fa fa-linkedin"></i></a></li>
									</ul>
								</div>
							</div>
							<div class="item tg-author">
								<figure><a href="javascript:void(0);"><img src="{{ asset('assets/images/author/imag-06.jpg') }}" alt="image description"></a></figure>
								<div class="tg-authorcontent">
									<h2><a href="javascript:void(0);">Enoch Gallion</a></h2>
									<span>12,435 Published Books</span>
									<ul class="tg-socialicons">
										<li class="tg-facebook"><a href="javascript:void(0);"><i class="fa fa-facebook"></i></a></li>
										<li class="tg-twitter"><a href="javascript:void(0);"><i class="fa fa-twitter"></i></a></li>
										<li class="tg-linkedin"><a href="javascript:void(0);"><i class="fa fa-linkedin"></i></a></li>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>
			<!--************************************
					Authors End
			*************************************-->
			<!--************************************
					Call to Action Start
			*************************************-->
			<section class="bg-warning tg-parallax tg-bgcalltoaction tg-haslayout" data-z-index="-100" data-appear-top-offset="600" data-parallax="scroll" data-image-src="{{ asset('assets/images/parallax/bgparallax-06.jpg') }}">
				<div class="tg-sectionspace tg-haslayout">
					<div class="container">
						<div class="row">
							<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
								<div class="tg-calltoaction">
									<h2>Open Discount For All</h2>
									<h3>Consectetur adipisicing elit sed do eiusmod tempor incididunt ut labore et dolore.</h3>
									<a class="tg-btn tg-active" href="javascript:void(0);">Read More</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>
			<!--************************************
					Call to Action End
			*************************************-->
			<!--************************************
					Latest News Start
			*************************************-->
			@livewire('PartialPageComponents.IndexComponents.LatestNews')
			<!--************************************
					Latest News End
			*************************************-->
        </section>