@extends('layout-shop')
@section('shop-sidebar')
    <!-- Content -->
    <div class="page-content bg-white">
        <!-- inner page banner -->
        <div class="dlab-bnr-inr overlay-black-middle bg-pt" style="background-image:url(images/banner/bnr5.jpg);">
            <div class="container">
                <div class="dlab-bnr-inr-entry">
                    <h1 class="text-white">Shop Grid 3 Side Bar</h1>
					<!-- Breadcrumb row -->
					<div class="breadcrumb-row">
						<ul class="list-inline">
							<li><a href="index.html">Home</a></li>
							<li>Shop Grid 3 Side Bar</li>
						</ul>
					</div>
					<!-- Breadcrumb row END -->
                </div>
            </div>
        </div>
        <!-- inner page banner END -->
        <!-- contact area -->
        <div class="section-full content-inner">
            <!-- Product -->
            <div class="container">
				<div class="row">
					<div class="col-lg-3 col-md-4 m-b30">
						<aside class="side-bar shop-categories sticky-top">
                            <div class="widget recent-posts-entry">
								<div class="dlab-accordion advanced-search toggle" id="accordion1">
									<div class="panel">
										<div class="acod-head">
											<h5 class="acod-title"> 
												<a data-toggle="collapse" href="#categories">
													Product categories
												</a> 
											</h5>
										</div>
										<div id="categories" class="acod-body collapse show">
											<div class="acod-content">
												<div class="widget widget_services">
													<ul>
														<li><a href="shop-cart.html">School Bag</a></li>
														<li><a href="shop-cart.html">Color Pencils</a></li>
														<li><a href="shop-cart.html">Project Book</a></li>
														<li><a href="shop-cart.html">Calculator</a></li>
														<li><a href="shop-cart.html">Colorful Book</a></li>
													</ul>
												</div>
											</div>
										</div>
									</div>
									<div class="panel">
										<div class="acod-head">
											<h5 class="acod-title">
												<a data-toggle="collapse" href="#price-range">
													Price Range
												</a> 
											</h5>
										</div>
										<div id="price-range" class="acod-body collapse show">
											<div class="acod-content">
												<div class="price-slide-2 range-slider">
													<div class="price">
														<input type="text" id="amount-2" class="amount" readonly="" value="$400 - $4000" />
														<div id="slider-range-2"></div>
													</div>
												 </div>
											</div>
										</div>
									</div>
									<div class="panel">
										<div class="acod-head">
											<h5 class="acod-title"> 
												<a data-toggle="collapse"  href="#color" >
													COLOR
												</a>
											</h5>
										</div>
										<div id="color" class="acod-body collapse show">
											<div class="acod-content">
												<h6>Select the color</h6>
												<div class="btn-group product-item-color" data-toggle="buttons">
													<label class="btn bg-red active">
														<input name="options" id="option1" checked="" type="radio">
													</label>
													<label class="btn bg-pink">
														<input name="options" id="option2" type="radio">
													</label>
													<label class="btn bg-yellow">
														<input name="options" id="option3" type="radio">
													</label>
													<label class="btn bg-blue">
														<input name="options" id="option4" type="radio">
													</label>
													<label class="btn bg-green">
														<input name="options" id="option5" type="radio">
													</label>
												</div>
											</div>
										</div>
									</div>
									<div class="panel">
										<div class="acod-head">
											<h5 class="acod-title"> 
												<a data-toggle="collapse"  href="#size">
													Size
												</a>
											</h5>
										</div>
										<div id="size" class="acod-body collapse show">
											<div class="acod-content">
												<h6>Product Size</h6>
												<div class="btn-group product-item-size" data-toggle="buttons">
													<label class="btn active">
														<input name="options" id="option6" checked="" type="radio">XS
													</label>
													<label class="btn">
														<input name="options" id="option7" type="radio"> LG
													</label>
													<label class="btn">
														<input name="options" id="option8" type="radio"> MD
													</label>
													<label class="btn">
														<input name="options" id="option9" type="radio"> SM
													</label>
													<label class="btn">
														<input name="options" id="option10" type="radio"> Xl
													</label>
												</div>
											</div>
										</div>
									</div>
									<div class="panel">
										<div class="acod-head">
											<h5 class="acod-title"> 
												<a data-toggle="collapse" href="#vendor">
													VENDOR
												</a>
											</h5>
										</div>
										<div id="vendor" class="acod-body collapse show">
											<div class="acod-content">
												<div class="product-brand">
													<div class="search-content">
														<input id="seating1" type="checkbox">
														<label for="seating1"  class="search-content-area">School Bag</label>
													</div>
													<div class="search-content">
														<input id="seating2" type="checkbox">
														<label for="seating2"  class="search-content-area">Color Pencils</label>
													</div>
													<div class="search-content">
														<input id="seating3" type="checkbox">
														<label for="seating3"  class="search-content-area">Project Book</label>
													</div>
													<div class="search-content">
														<input id="seating4" type="checkbox">
														<label for="seating4"  class="search-content-area">Calculator</label>
													</div>
													<div class="search-content">
														<input id="seating5" type="checkbox">
														<label for="seating5"  class="search-content-area">Colorful Book</label>
													</div>
												</div>
											</div>
										</div>
									</div>
									<div class="panel">
										<div class="acod-head">
											<h5 class="acod-title"> 
												<a data-toggle="collapse"  href="#tags" class="collapsed" >
													POPULAR TAGS
												</a>
											</h5>
										</div>
										<div id="tags" class="acod-body collapse">
											<div class="acod-content">
												<div class="widget_tag_cloud radius">
													<div class="tagcloud"> <a href="javascript:void(0);">Design</a> 
													<a href="javascript:void(0);">User interface</a> 
													<a href="javascript:void(0);">SEO</a> 
													<a href="javascript:void(0);">WordPress</a> 
													<a href="javascript:void(0);">Development</a> 
													<a href="javascript:void(0);">Joomla</a> 
													<a href="javascript:void(0);">Design</a> 
													<a href="javascript:void(0);">User interface</a> 
													<a href="javascript:void(0);">SEO</a> 
													<a href="javascript:void(0);">WordPress</a>
													<a href="javascript:void(0);">Development</a> 
													<a href="javascript:void(0);">Joomla</a> 
													<a href="javascript:void(0);">Design</a> 
													<a href="javascript:void(0);">User interface</a> 
													<a href="javascript:void(0);">SEO</a> 
													<a href="javascript:void(0);">WordPress</a> 
													<a href="javascript:void(0);">Development</a> 
													<a href="javascript:void(0);">Joomla</a> </div>
												</div>
											</div>
										</div>
									</div>
									<div class="panel">
										<div class="acod-head">
											<h5 class="acod-title"> 
												<a data-toggle="collapse"  href="#features" class="collapsed" >
													Features
												</a>
											</h5>
										</div>
										<div id="features" class="acod-body collapse">
											<div class="acod-content">
												<div class="item-widgets-box">
													<div class="item-widgets-left">
														<img src="images/product/thumb/item1.jpg" alt="">
													</div>
													<div class="item-widgets-body text-black">
														<h6 class="item-title text-capitalize font-weight-500 m-t0">
															<a href="shop-product-details.html">Color Pencils</a>
														</h6>
														<ul class="item-review text-yellow-light">
															<li><i class="fa fa-star"></i></li>
															<li><i class="fa fa-star"></i></li>
															<li><i class="fa fa-star"></i></li>
															<li><i class="fa fa-star-half-o"></i></li>
															<li><i class="fa fa-star-o"></i></li>
														</ul>
														<h6 class="item-price m-b0">
															<del>$232</del> 
															<span class="text-primary">$192</span>
														</h6>
													</div>
												</div>
												<div class="item-widgets-box">
													<div class="item-widgets-left">
														<img src="images/product/thumb/item2.jpg" alt="">
													</div>
													<div class="item-widgets-body text-black">
														<h6 class="item-title text-capitalize font-weight-500 m-t0">
															<a href="shop-product-details.html">Color Pencils</a>
														</h6>
														<ul class="item-review text-yellow-light">
															<li><i class="fa fa-star"></i></li>
															<li><i class="fa fa-star"></i></li>
															<li><i class="fa fa-star"></i></li>
															<li><i class="fa fa-star-half-o"></i></li>
															<li><i class="fa fa-star-o"></i></li>
														</ul>
														<h6 class="item-price m-b0">
															<del>$232</del> 
															<span class="text-primary">$192</span>
														</h6>
													</div>
												</div>
												<div class="item-widgets-box">
													<div class="item-widgets-left">
														<img src="images/product/thumb/item3.jpg" alt="">
													</div>
													<div class="item-widgets-body text-black">
														<h6 class="item-title text-capitalize font-weight-500 m-t0">
															<a href="shop-product-details.html">Color Pencils</a>
														</h6>
														<ul class="item-review text-yellow-light">
															<li><i class="fa fa-star"></i></li>
															<li><i class="fa fa-star"></i></li>
															<li><i class="fa fa-star"></i></li>
															<li><i class="fa fa-star-half-o"></i></li>
															<li><i class="fa fa-star-o"></i></li>
														</ul>
														<h6 class="item-price m-b0">
															<del>$232</del> 
															<span class="text-primary">$192</span>
														</h6>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
                        </aside>
					</div>
					<div class="col-lg-9 col-md-8 m-b30">
						<div class="row">
							<div class="col-lg-4 col-md-6 col-sm-6">
								<div class="item-box m-b10">
									<div class="item-img">
										<img src="images/product/item1.jpg" alt=""/>
										<div class="item-info-in full">
											<div class="center p-lr40">
												<a href="javascript:void(0);" class="site-button radius-xl m-b10 btn-block"><i class="la la-shopping-cart"></i> Add To Cart</a>
												<a href="javascript:void(0);" class="site-button radius-xl btn-block"><i class="la la-heart-o"></i> Wishlist</a>
											</div>
										</div>
									</div>
									<div class="item-info text-center text-black p-a10">
										<h6 class="item-title font-weight-500"><a href="shop-product-details.html">School Bag</a></h6>
										<ul class="item-review">
											<li><i class="fa fa-star"></i></li>
											<li><i class="fa fa-star"></i></li>
											<li><i class="fa fa-star"></i></li>
											<li><i class="fa fa-star-half-o"></i></li>
											<li><i class="fa fa-star-o"></i></li>
										</ul>
										<h4 class="item-price">
											<del>$232</del> 
											<span class="text-primary">$192</span>
										</h4>
									</div>
								</div>
							</div>
							<div class="col-lg-4 col-md-6 col-sm-6">
								<div class="item-box m-b10 item-style-1">
									<div class="item-img">
										<img src="images/product/item2.jpg" alt=""/>
										<div class="item-info-in full">
									<div class="center p-lr40">
										<a href="javascript:void(0);" class="site-button radius-xl m-b10 btn-block"><i class="la la-shopping-cart"></i> Add To Cart</a>
										<a href="javascript:void(0);" class="site-button radius-xl btn-block"><i class="la la-heart-o"></i> Wishlist</a>
									</div>
								</div>
									</div>
									<div class="item-info text-center text-black p-a10">
										<h6 class="item-title font-weight-500"><a href="shop-product-details.html">Color Pencils</a></h6>
										<ul class="item-review">
											<li><i class="fa fa-star"></i></li>
											<li><i class="fa fa-star"></i></li>
											<li><i class="fa fa-star"></i></li>
											<li><i class="fa fa-star-half-o"></i></li>
											<li><i class="fa fa-star-o"></i></li>
										</ul>
										<h4 class="item-price">
											<del>$232</del> 
											<span class="text-primary">$192</span>
										</h4>
									</div>
								</div>
							</div>
							<div class="col-lg-4 col-md-6 col-sm-6">
								<div class="item-box m-b10">
									<div class="item-img">
										<img src="images/product/item3.jpg" alt=""/>
										<div class="item-info-in full">
									<div class="center p-lr40">
										<a href="javascript:void(0);" class="site-button radius-xl m-b10 btn-block"><i class="la la-shopping-cart"></i> Add To Cart</a>
										<a href="javascript:void(0);" class="site-button radius-xl btn-block"><i class="la la-heart-o"></i> Wishlist</a>
									</div>
								</div>
									</div>
									<div class="item-info text-center text-black p-a10">
										<h6 class="item-title font-weight-500"><a href="shop-product-details.html">Pencils</a></h6>
										<ul class="item-review">
											<li><i class="fa fa-star"></i></li>
											<li><i class="fa fa-star"></i></li>
											<li><i class="fa fa-star"></i></li>
											<li><i class="fa fa-star-half-o"></i></li>
											<li><i class="fa fa-star-o"></i></li>
										</ul>
										<h4 class="item-price">
											<del>$232</del> 
											<span class="text-primary">$192</span>
										</h4>
									</div>
								</div>
							</div>
							<div class="col-lg-4 col-md-6 col-sm-6">
								<div class="item-box m-b10">
									<div class="item-img">
										<img src="images/product/item4.jpg" alt=""/>
										<div class="item-info-in full">
									<div class="center p-lr40">
										<a href="javascript:void(0);" class="site-button radius-xl m-b10 btn-block"><i class="la la-shopping-cart"></i> Add To Cart</a>
										<a href="javascript:void(0);" class="site-button radius-xl btn-block"><i class="la la-heart-o"></i> Wishlist</a>
									</div>
								</div>
									</div>
									<div class="item-info text-center text-black p-a10">
										<h6 class="item-title font-weight-500"><a href="shop-product-details.html">Stapler</a></h6>
										<ul class="item-review">
											<li><i class="fa fa-star"></i></li>
											<li><i class="fa fa-star"></i></li>
											<li><i class="fa fa-star"></i></li>
											<li><i class="fa fa-star-half-o"></i></li>
											<li><i class="fa fa-star-o"></i></li>
										</ul>
										<h4 class="item-price">
											<del>$232</del> 
											<span class="text-primary">$192</span>
										</h4>
									</div>
								</div>
							</div>
							<div class="col-lg-4 col-md-6 col-sm-6">
								<div class="item-box m-b10">
									<div class="item-img">
										<img src="images/product/item5.jpg" alt=""/>
										<div class="item-info-in full">
									<div class="center p-lr40">
										<a href="javascript:void(0);" class="site-button radius-xl m-b10 btn-block"><i class="la la-shopping-cart"></i> Add To Cart</a>
										<a href="javascript:void(0);" class="site-button radius-xl btn-block"><i class="la la-heart-o"></i> Wishlist</a>
									</div>
								</div>
									</div>
									<div class="item-info text-center text-black p-a10">
										<h6 class="item-title font-weight-500"><a href="shop-product-details.html">Project Book</a></h6>
										<ul class="item-review">
											<li><i class="fa fa-star"></i></li>
											<li><i class="fa fa-star"></i></li>
											<li><i class="fa fa-star"></i></li>
											<li><i class="fa fa-star-half-o"></i></li>
											<li><i class="fa fa-star-o"></i></li>
										</ul>
										<h4 class="item-price">
											<del>$232</del> 
											<span class="text-primary">$192</span>
										</h4>
									</div>
								</div>
							</div>
							<div class="col-lg-4 col-md-6 col-sm-6">
								<div class="item-box m-b10 item-style-1">
									<div class="item-img">
										<img src="images/product/item6.jpg" alt=""/>
										<div class="item-info-in full">
									<div class="center p-lr40">
										<a href="javascript:void(0);" class="site-button radius-xl m-b10 btn-block"><i class="la la-shopping-cart"></i> Add To Cart</a>
										<a href="javascript:void(0);" class="site-button radius-xl btn-block"><i class="la la-heart-o"></i> Wishlist</a>
									</div>
								</div>
									</div>
									<div class="item-info text-center text-black p-a10">
										<h6 class="item-title font-weight-500"><a href="shop-product-details.html">Colorful Book</a></h6>
										<ul class="item-review">
											<li><i class="fa fa-star"></i></li>
											<li><i class="fa fa-star"></i></li>
											<li><i class="fa fa-star"></i></li>
											<li><i class="fa fa-star-half-o"></i></li>
											<li><i class="fa fa-star-o"></i></li>
										</ul>
										<h4 class="item-price">
											<del>$232</del> 
											<span class="text-primary">$192</span>
										</h4>
									</div>
								</div>
							</div>
							<div class="col-lg-4 col-md-6 col-sm-6">
								<div class="item-box m-b10">
									<div class="item-img">
										<img src="images/product/item7.jpg" alt=""/>
										<div class="item-info-in full">
									<div class="center p-lr40">
										<a href="javascript:void(0);" class="site-button radius-xl m-b10 btn-block"><i class="la la-shopping-cart"></i> Add To Cart</a>
										<a href="javascript:void(0);" class="site-button radius-xl btn-block"><i class="la la-heart-o"></i> Wishlist</a>
									</div>
								</div>
									</div>
									<div class="item-info text-center text-black p-a10">
										<h6 class="item-title font-weight-500"><a href="shop-product-details.html">Notebook</a></h6>
										<ul class="item-review">
											<li><i class="fa fa-star"></i></li>
											<li><i class="fa fa-star"></i></li>
											<li><i class="fa fa-star"></i></li>
											<li><i class="fa fa-star-half-o"></i></li>
											<li><i class="fa fa-star-o"></i></li>
										</ul>
										<h4 class="item-price">
											<del>$232</del> 
											<span class="text-primary">$192</span>
										</h4>
									</div>
								</div>
							</div>
							<div class="col-lg-4 col-md-6 col-sm-6">
								<div class="item-box m-b10">
									<div class="item-img">
										<img src="images/product/item8.jpg" alt=""/>
										<div class="item-info-in full">
									<div class="center p-lr40">
										<a href="javascript:void(0);" class="site-button radius-xl m-b10 btn-block"><i class="la la-shopping-cart"></i> Add To Cart</a>
										<a href="javascript:void(0);" class="site-button radius-xl btn-block"><i class="la la-heart-o"></i> Wishlist</a>
									</div>
								</div>
									</div>
									<div class="item-info text-center text-black p-a10">
										<h6 class="item-title font-weight-500"><a href="shop-product-details.html">Project file</a></h6>
										<ul class="item-review">
											<li><i class="fa fa-star"></i></li>
											<li><i class="fa fa-star"></i></li>
											<li><i class="fa fa-star"></i></li>
											<li><i class="fa fa-star-half-o"></i></li>
											<li><i class="fa fa-star-o"></i></li>
										</ul>
										<h4 class="item-price">
											<del>$232</del> 
											<span class="text-primary">$192</span>
										</h4>
									</div>
								</div>
							</div>
							<div class="col-lg-4 col-md-6 col-sm-6">
								<div class="item-box m-b10">
									<div class="item-img">
										<img src="images/product/item1.jpg" alt=""/>
										<div class="item-info-in full">
									<div class="center p-lr40">
										<a href="javascript:void(0);" class="site-button radius-xl m-b10 btn-block"><i class="la la-shopping-cart"></i> Add To Cart</a>
										<a href="javascript:void(0);" class="site-button radius-xl btn-block"><i class="la la-heart-o"></i> Wishlist</a>
									</div>
								</div>
									</div>
									<div class="item-info text-center text-black p-a10">
										<h6 class="item-title font-weight-500"><a href="shop-product-details.html">Calculator</a></h6>
										<ul class="item-review">
											<li><i class="fa fa-star"></i></li>
											<li><i class="fa fa-star"></i></li>
											<li><i class="fa fa-star"></i></li>
											<li><i class="fa fa-star-half-o"></i></li>
											<li><i class="fa fa-star-o"></i></li>
										</ul>
										<h4 class="item-price">
											<del>$232</del> 
											<span class="text-primary">$192</span>
										</h4>
									</div>
								</div>
							</div>
							<div class="col-lg-4 col-md-6 col-sm-6">
								<div class="item-box m-b10 item-style-1">
									<div class="item-img">
										<img src="images/product/item2.jpg" alt=""/>
										<div class="item-info-in full">
									<div class="center p-lr40">
										<a href="javascript:void(0);" class="site-button radius-xl m-b10 btn-block"><i class="la la-shopping-cart"></i> Add To Cart</a>
										<a href="javascript:void(0);" class="site-button radius-xl btn-block"><i class="la la-heart-o"></i> Wishlist</a>
									</div>
								</div>
									</div>
									<div class="item-info text-center text-black p-a10">
										<h6 class="item-title font-weight-500"><a href="shop-product-details.html">School Bag</a></h6>
										<ul class="item-review">
											<li><i class="fa fa-star"></i></li>
											<li><i class="fa fa-star"></i></li>
											<li><i class="fa fa-star"></i></li>
											<li><i class="fa fa-star-half-o"></i></li>
											<li><i class="fa fa-star-o"></i></li>
										</ul>
										<h4 class="item-price">
											<del>$232</del> 
											<span class="text-primary">$192</span>
										</h4>
									</div>
								</div>
							</div>
							<div class="col-lg-4 col-md-6 col-sm-6">
								<div class="item-box m-b10">
									<div class="item-img">
										<img src="images/product/item3.jpg" alt=""/>
										<div class="item-info-in full">
									<div class="center p-lr40">
										<a href="javascript:void(0);" class="site-button radius-xl m-b10 btn-block"><i class="la la-shopping-cart"></i> Add To Cart</a>
										<a href="javascript:void(0);" class="site-button radius-xl btn-block"><i class="la la-heart-o"></i> Wishlist</a>
									</div>
								</div>
									</div>
									<div class="item-info text-center text-black p-a10">
										<h6 class="item-title font-weight-500"><a href="shop-product-details.html">Color Pencils</a></h6>
										<ul class="item-review">
											<li><i class="fa fa-star"></i></li>
											<li><i class="fa fa-star"></i></li>
											<li><i class="fa fa-star"></i></li>
											<li><i class="fa fa-star-half-o"></i></li>
											<li><i class="fa fa-star-o"></i></li>
										</ul>
										<h4 class="item-price">
											<del>$232</del> 
											<span class="text-primary">$192</span>
										</h4>
									</div>
								</div>
							</div>
							<div class="col-lg-4 col-md-6 col-sm-6">
								<div class="item-box m-b10">
									<div class="item-img">
										<img src="images/product/item4.jpg" alt=""/>
										<div class="item-info-in full">
									<div class="center p-lr40">
										<a href="javascript:void(0);" class="site-button radius-xl m-b10 btn-block"><i class="la la-shopping-cart"></i> Add To Cart</a>
										<a href="javascript:void(0);" class="site-button radius-xl btn-block"><i class="la la-heart-o"></i> Wishlist</a>
									</div>
								</div>
									</div>
									<div class="item-info text-center text-black p-a10">
										<h6 class="item-title font-weight-500"><a href="shop-product-details.html">Pencils</a></h6>
										<ul class="item-review">
											<li><i class="fa fa-star"></i></li>
											<li><i class="fa fa-star"></i></li>
											<li><i class="fa fa-star"></i></li>
											<li><i class="fa fa-star-half-o"></i></li>
											<li><i class="fa fa-star-o"></i></li>
										</ul>
										<h4 class="item-price">
											<del>$232</del> 
											<span class="text-primary">$192</span>
										</h4>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
            <!-- Product END -->
		</div>
		<!-- Shop Service info -->
		<div class="section-full p-t50 p-b20 bg-secondry text-white">
			<div class="container">
				<div class="row">
					<div class="col-md-4 col-lg-4">
						<div class="icon-bx-wraper left shop-service-info m-b30">
							<div class="icon-md text-black radius"> 
								<a href="javascript:void(0);" class="icon-cell text-white"><i class="fa fa-gift"></i></a> 
							</div>
							<div class="icon-content">
								<h5 class="dlab-tilte">Free shipping on orders $60+</h5>
								<p>Order more than 60$ and you will get free shippining Worldwide. More info.</p>
							</div>
						</div>
					</div>
					<div class="col-md-4 col-lg-4">
						<div class="icon-bx-wraper left shop-service-info m-b30">
							<div class="icon-md text-black radius"> 
								<a href="javascript:void(0);" class="icon-cell text-white"><i class="fa fa-plane"></i></a> 
							</div>
							<div class="icon-content">
								<h5 class="dlab-tilte">Worldwide delivery</h5>
								<p>We deliver to the following countries: USA, Canada, Europe, Australia</p>
							</div>
						</div>
					</div>
					<div class="col-md-4 col-lg-4">
						<div class="icon-bx-wraper left shop-service-info m-b30">
							<div class="icon-md text-black radius"> 
								<a href="javascript:void(0);" class="icon-cell text-white"><i class="fa fa-history"></i></a> 
							</div>
							<div class="icon-content">
								<h5 class="dlab-tilte">60 days money back guranty!</h5>
								<p>Not happy with our product, feel free to return it, we will refund 100% your money!</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- Shop Service info End -->
    </div>
    <!-- Content END-->
    @endsection