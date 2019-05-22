<!DOCTYPE html>
<html lang="zxx">


@include('pub_theme::layouts.partials.htmlheader')

<body>
	<!--Header-->
	@include('pub_theme::layouts.partials.headernav')
	@include($view.'.banner');
	@include($view.'.slider');
	<!--/main-->
	<section class="main-content-w3layouts-agileits">
		<div class="container">
			<div class="row">
				<!--left-->
				<div class="col-lg-8 left-blog-info-w3layouts-agileits text-left">
					<div class="blog-grid-top">
						<div class="b-grid-top">
							<div class="blog_info_left_grid">
								<a href="single.html">
									<img src="images/b1.jpg" class="img-fluid" alt="">
								</a>
							</div>
							<div class="blog-info-middle">
								<ul>
									<li>
										<a href="#">
											<i class="far fa-calendar-alt"></i> FEB 15,2018</a>
									</li>
									<li class="mx-2">
										<a href="#">
											<i class="far fa-thumbs-up"></i> 201 Likes</a>
									</li>
									<li>
										<a href="#">
											<i class="far fa-comment"></i> 15 Comments</a>
									</li>
									
								</ul>
							</div>
						</div>

						<h3>
							<a href="single.html">Amet consectetur adipisicing </a>
						</h3>
						<p>Lorem ipsum dolor sit amet consectetur adipisicing elit sedc dnmo eiusmod tempor incididunt ut labore et dolore magna
							aliqua uta enim ad minim ven iam quis nostrud exercitation ullamco labor nisi ut aliquip exea commodo consequat duis
							aute irudre dolor in elit sed uta labore dolore reprehender</p>
						<a href="single.html" class="btn btn-primary read-m">Read More</a>
					</div>
					<!--//silder-->
					<div class="blog-mid-sec">
						<ul id="flexiselDemo2">
							<li>
								<div class="blog-item">
									<img src="images/5.jpg" alt=" " class="img-fluid" />
									<button type="button" class="btn btn-primary play sec" data-toggle="modal" data-target="#exampleModal">
										<i class="fas fa-play"></i>
									</button>
									<div class="floods-text">
										<h3>Lorem ipsum </h3>
									</div>
								</div>
							</li>
							<li>
								<div class="blog-item">
									<img src="images/6.jpg" alt=" " class="img-fluid" />
									<button type="button" class="btn btn-primary play sec" data-toggle="modal" data-target="#exampleModal">
										<i class="fas fa-play"></i>
									</button>
									<div class="floods-text">
										<h3>Lorem ipsum </h3>
									</div>
								</div>
							</li>
							<li>
								<div class="blog-item">
									<img src="images/7.jpg" alt=" " class="img-fluid" />
									<button type="button" class="btn btn-primary play sec" data-toggle="modal" data-target="#exampleModal">
										<i class="fas fa-play"></i>
									</button>
									<div class="floods-text">
										<h3>Lorem ipsum </h3>
									</div>
								</div>
							</li>
							<li>
								<div class="blog-item">
									<img src="images/8.jpg" alt=" " class="img-fluid" />
									<button type="button" class="btn btn-primary play sec" data-toggle="modal" data-target="#exampleModal">
										<i class="fas fa-play"></i>
									</button>
									<div class="floods-text">
										<h3>Lorem ipsum </h3>
									</div>
								</div>
							</li>
						</ul>
					</div>

					<!--//silder-->
					<div class="blog-girds-sec">
						<div class="row">
							<div class="col-md-6 blog-grid-top">
								<div class="b-grid-top">
									<div class="blog_info_left_grid">
										<a href="single.html">
											<img src="images/b2.jpg" class="img-fluid" alt="">
										</a>
									</div>
									<h3>
										<a href="single.html">Amet consectetur </a>
									</h3>
									<p>Lorem ipsum dolor sit amet consectetur adipisicing elit sedc dnmo eiusmod tempor incididunt aliqua uta enim.</p>
								</div>
								<ul class="blog-icons">
									<li>
										<a href="#">
											<i class="far fa-clock"></i> 5 Monts</a>
									</li>
									<li class="mx-2">
										<a href="#">
											<i class="far fa-comment"></i> 21</a>
									</li>
									<li>
										<a href="#">
											<i class="fas fa-eye"></i> 2000</a>
									</li>
									
								</ul>
							</div>
							<div class="col-md-6 blog-grid-top">
								<div class="b-grid-top">
									<div class="blog_info_left_grid">
										<a href="single.html">
											<img src="images/b3.jpg" class="img-fluid" alt="">
										</a>
									</div>
									<h3>
										<a href="single.html">Amet adipisicing </a>
									</h3>
									<p>Lorem ipsum dolor sit amet consectetur adipisicing elit sedc dnmo eiusmod tempor incididunt aliqua uta enim.</p>

								</div>
								<ul class="blog-icons">
									<li>
										<a href="#">
											<i class="far fa-clock"></i> 5 Monts</a>
									</li>
									<li class="mx-2">
										<a href="#">
											<i class="far fa-comment"></i> 21</a>
									</li>
									<li>
										<a href="#">
											<i class="fas fa-eye"></i> 2000</a>
									</li>
									
								</ul>
							</div>
						</div>
					</div>
				</div>
				<!--//left-->
				@include($view.'.right')
			</div>
		</div>
	</section>
	<!--//main-->
	<!--/middle-->
	<section class="middle-sec-agileinfo-w3ls">
		<div class="container">
			<div class="row inner-sec">
				<div class="col-md-4 news-left">
					<ul id="demo1_thumbs" class="list-inline">
						<li>
							<a href="images/m1.jpg">
								<img src="images/m1.jpg" alt="" data-desoslide-caption="<h3>Latest Post 1</h3>">
								<div class="mid-text-info">
									<h4>Maecenas aliqua</h4>
									<p>Integer </p>
									<div class="sub-meta">
										<span>
											<i class="far fa-clock"></i> 20 Feb, 2018</span>
									</div>
								</div>
							</a>
						</li>
						<li>
							<a href="images/m2.jpg">
								<img src="images/m2.jpg" alt="" data-desoslide-caption="<h3>Latest Post 2</h3>">
								<div class="mid-text-info">
									<h4>Maecenas aliqua</h4>
									<p>Integer </p>
									<div class="sub-meta">
										<span>
											<i class="far fa-clock"></i> 20 Feb, 2018</span>
									</div>
								</div>
							</a>
						</li>
						<li>
							<a href="images/m3.jpg">
								<img src="images/m3.jpg" alt="" data-desoslide-caption="<h3>Latest Post 3</h3>">
								<div class="mid-text-info">
									<h4>Maecenas aliqua</h4>
									<p>Integer </p>
									<div class="sub-meta">
										<span>
											<i class="far fa-clock"></i> 20 Feb, 2018</span>
									</div>
								</div>
							</a>
						</li>
						<li>
							<a href="images/m4.jpg">
								<img src="images/m4.jpg" alt="" data-desoslide-caption="<h3>Latest Post 4</h3>">
								<div class="mid-text-info">
									<h4>Maecenas aliqua</h4>
									<p>Integer </p>
									<div class="sub-meta">
										<span>
											<i class="far fa-clock"></i> 20 Feb, 2018</span>
									</div>
								</div>
							</a>
						</li>
					</ul>
				</div>
				<div id="demo1_main_image" class="col-md-8  news-right"></div>
				<div class="clearfix"> </div>
			</div>
		</div>

	</section>
	<!--//middle-->
	<!---->
	<section class="main-content-w3layouts-agileits">
			<div class="container">
				<div class="row">
					<!--left-->
					<div class="col-lg-8 left-blog-info-w3layouts-agileits text-left">
						<div class="blog-grid-top">
							<div class="b-grid-top">
								<div class="blog_info_left_grid">
									<a href="single.html">
										<img src="images/b4.jpg" class="img-fluid" alt="">
									</a>
								</div>
								<div class="blog-info-middle">
									<ul>
										<li>
											<a href="#">
												<i class="far fa-calendar-alt"></i> FEB 15,2018</a>
										</li>
										<li class="mx-2">
											<a href="#">
												<i class="far fa-thumbs-up"></i> 201 Likes</a>
										</li>
										<li>
											<a href="#">
												<i class="far fa-comment"></i> 15 Comments</a>
										</li>
									
									</ul>
								</div>
							</div>
	
							<h3>
								<a href="single.html">Amet consectetur adipisicing </a>
							</h3>
							<p>Lorem ipsum dolor sit amet consectetur adipisicing elit sedc dnmo eiusmod tempor incididunt ut labore et dolore magna
								aliqua uta enim ad minim ven iam quis nostrud exercitation ullamco labor nisi ut aliquip exea commodo consequat duis
								aute irudre dolor in elit sed uta labore dolore reprehender</p>
							<a href="single.html" class="btn btn-primary read-m">Read More</a>
						</div>
						<!--//silder-->
						
	
					</div>
					<!--//left-->
					<!--right-->
					<aside class="col-lg-4 agileits-w3ls-right-blog-con text-left">
						<div class="tech-btm">
							<h4>Recent Posts</h4>
							
							<div class="blog-grids row mb-3">
								<div class="col-md-5 blog-grid-left">
									<a href="single.html">
										<img src="images/5.jpg" class="img-fluid" alt="">
									</a>
								</div>
								<div class="col-md-7 blog-grid-right">

									<h5>
										<a href="single.html">Pellentesque dui, non felis. Maecenas male non felis </a>
									</h5>
									<div class="sub-meta">
										<span>
											<i class="far fa-clock"></i> 20 Jan, 2018</span>
									</div>
								</div>
								
							</div>
							<div class="blog-grids row mb-3">
								<div class="col-md-5 blog-grid-left">
									<a href="single.html">
										<img src="images/6.jpg" class="img-fluid" alt="">
									</a>
								</div>
								<div class="col-md-7 blog-grid-right">

									<h5>
										<a href="single.html">Pellentesque dui, non felis. Maecenas male non felis </a>
									</h5>
									<div class="sub-meta">
										<span>
											<i class="far fa-clock"></i> 20 Jan, 2018</span>
									</div>
								</div>
								
							</div>
							<div class="blog-grids row mb-3">
								<div class="col-md-5 blog-grid-left">
									<a href="single.html">
										<img src="images/7.jpg" class="img-fluid" alt="">
									</a>
								</div>
								<div class="col-md-7 blog-grid-right">
									<h5>
										<a href="single.html">Pellentesque dui, non felis. Maecenas male non felis </a>
									</h5>
									<div class="sub-meta">
										<span>
											<i class="far fa-clock"></i> 20 Feb, 2018</span>
									</div>
								</div>
								
							</div>
							<div class="blog-grids row mb-3">
								<div class="col-md-5 blog-grid-left">
									<a href="single.html">
										<img src="images/8.jpg" class="img-fluid" alt="">
									</a>
								</div>
								<div class="col-md-7 blog-grid-right">

									<h5>
										<a href="single.html">Pellentesque dui, non felis. Maecenas male non felis </a>
									</h5>
									<div class="sub-meta">
										<span>
											<i class="far fa-clock"></i> 20 Jan, 2018</span>
									</div>
								</div>
								
							</div>
							<div class="blog-grids row mb-3">
								<div class="col-md-5 blog-grid-left">
									<a href="single.html">
										<img src="images/4.jpg" class="img-fluid" alt="">
									</a>
								</div>
								<div class="col-md-7 blog-grid-right">

									<h5>
										<a href="single.html">Pellentesque dui, non felis. Maecenas male non felis </a>
									</h5>
									<div class="sub-meta">
										<span>
											<i class="far fa-clock"></i> 20 Jan, 2018</span>
									</div>
								</div>
								
							</div>
							<div class="blog-grids row mb-3">
								<div class="col-md-5 blog-grid-left">
									<a href="single.html">
										<img src="images/6.jpg" class="img-fluid" alt="">
									</a>
								</div>
								<div class="col-md-7 blog-grid-right">
									<h5>
										<a href="single.html">Pellentesque dui, non felis. Maecenas male non felis </a>
									</h5>
									<div class="sub-meta">
										<span>
											<i class="far fa-clock"></i> 20 Feb, 2018</span>
									</div>
								</div>
								
							</div>
						
						</div>
	
					</aside>
					<!--//right-->
				</div>
			</div>
		</section>
		<!--//main-->
	@include('pub_theme::layouts.partials.footer')
	@include('pub_theme::layouts.partials.scripts')
	<a href="#home" class="scroll" id="toTop" style="display: block;">
		<span id="toTopHover" style="opacity: 1;"> </span>
	</a>
</body>

</html>