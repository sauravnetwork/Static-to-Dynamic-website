@extends('layout-head-social')


@section('header-style-6')
    <!-- Content -->
    <div class="page-content">
        <!-- inner page banner -->
        <div class="dlab-bnr-inr dlab-bnr-inr-sm overlay-black-dark banner-content " style="background-image:url(images/banner/bnr2.jpg);">
            <div class="container">
                <div class="dlab-bnr-inr-entry">
                    <h1 class="text-white">Header Style Transparent Topbar</h1>
					<!-- Breadcrumb row -->
					<div class="breadcrumb-row">
						<ul class="list-inline">
							<li><a href="javascript:void(0);">Home</a></li>
							<li>Header Style Transparent Topbar</li>
						</ul>
					</div>
					<!-- Breadcrumb row END -->
                </div>
            </div>
        </div>
        <!-- inner page banner END -->
        <!-- contact area -->
        <div class="content-block">
            <!-- Code Box -->
			<div class="section-full content-inner bg-white video-section" style="background-image:url('images/background/bg-video.png');">
				<div class="container">
					<div class="header-box">
						<div class="row align-items-center">
							<div class="col-lg-3 col-md-4">
								<img src="images/header.png" alt=""/>
							</div>
							<div class="col-lg-9 col-md-8">
								<h2 class="title">Check Header Style 05</h2>
								<p>A wonderful serenity has taken possession of my entire soul, like these sweet mornings of spring which I enjoy with my whole heart. I am alone, and feel the charm.</p>
							</div>
						</div>
					</div>
					<div class="relative">
						<button id="copyButton" class="btn">Copy</button>
<pre class="code-box" id="copyTarget">
&lt;!-- header --&gt;
&lt;header class="site-header mo-left header-transparent header"&gt;
	&lt;div class="top-bar"&gt;
		&lt;div class="container"&gt;
			&lt;div class="row d-flex justify-content-between align-items-center"&gt;
				&lt;div class="dlab-topbar-left"&gt;
					&lt;ul&gt;
						&lt;li&gt;&lt;a href="javascript:void(0);"&gt;About Us&lt;/a&gt;&lt;/li&gt;
						&lt;li&gt;&lt;a href="javascript:void(0);"&gt;Refund Policy&lt;/a&gt;&lt;/li&gt;
						&lt;li&gt;&lt;a href="javascript:void(0);"&gt;Help Desk&lt;/a&gt;&lt;/li&gt;
					&lt;/ul&gt;
				&lt;/div&gt;
				&lt;div class="dlab-topbar-right"&gt;
					&lt;a href="javascript:void(0);" class="site-button radius-no"&gt;GET A QUOTE&lt;/a&gt;						
				&lt;/div&gt;
			&lt;/div&gt;
		&lt;/div&gt;
	&lt;/div&gt;
	&lt;!-- main header --&gt;
	&lt;div class="sticky-header main-bar-wraper navbar-expand-lg"&gt;
		&lt;div class="main-bar clearfix "&gt;
			&lt;div class="container clearfix"&gt;
				&lt;!-- website logo --&gt;
				&lt;div class="logo-header mostion"&gt;
					&lt;a href="index"&gt;&lt;img src="images/logo-white.png" alt=""&gt;&lt;/a&gt;
				&lt;/div&gt;
				&lt;!-- nav toggle button --&gt;
				&lt;button class="navbar-toggler collapsed navicon justify-content-end" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation"&gt;
					&lt;span&gt;&lt;/span&gt;
					&lt;span&gt;&lt;/span&gt;
					&lt;span&gt;&lt;/span&gt;
				&lt;/button&gt;
				&lt;!-- extra nav --&gt;
				&lt;div class="extra-nav"&gt;
					&lt;div class="extra-cell"&gt;
						&lt;button id="quik-search-btn" type="button" class="site-button-link"&gt;&lt;i class="la la-search"&gt;&lt;/i&gt;&lt;/button&gt;
						&lt;div class="shop-cart navbar-right"&gt;
							&lt;button type="button" class="site-button-link cart-btn"&gt;
								&lt;i class="la la-cart-plus"&gt;&lt;/i&gt;&lt;span class="badge bg-primary"&gt;3&lt;/span&gt;
							&lt;/button&gt;
							&lt;ul class="dropdown-menu cart-list"&gt;
								&lt;li class="cart-item"&gt;
									&lt;div class="media"&gt; 
										&lt;div class="media-left"&gt; 
											&lt;a href="javascript:void(0);"&gt; 
												&lt;img alt="" class="media-object" src="images/product/thumb3.jpg"&gt; 
											&lt;/a&gt; 
										&lt;/div&gt; 
										&lt;div class="media-body"&gt; 
											&lt;h6&gt;&lt;a href="" class="media-heading"&gt;Tshirt Dress&lt;/a&gt;&lt;/h6&gt;
											&lt;span&gt;$19.99&lt;/span&gt;
											&lt;span class="item-close"&gt;X&lt;/span&gt;
										&lt;/div&gt; 
									&lt;/div&gt;
								&lt;/li&gt;
								&lt;li class="cart-item"&gt;
									&lt;div class="media"&gt; 
										&lt;div class="media-left"&gt; 
											&lt;a href="javascript:void(0);"&gt; 
												&lt;img alt="" class="media-object" src="images/product/thumb2.jpg"&gt; 
											&lt;/a&gt; 
										&lt;/div&gt; 
										&lt;div class="media-body"&gt; 
											&lt;h6&gt;&lt;a href="" class="media-heading"&gt;Tshirt Dress&lt;/a&gt;&lt;/h6&gt;
											&lt;span&gt;$19.99&lt;/span&gt;
											&lt;span class="item-close"&gt;X&lt;/span&gt;
										&lt;/div&gt; 
									&lt;/div&gt;
								&lt;/li&gt;
								&lt;li class="cart-item"&gt;
									&lt;div class="media"&gt; 
										&lt;div class="media-left"&gt; 
											&lt;a href="javascript:void(0);"&gt; 
												&lt;img alt="" class="media-object" src="images/product/thumb1.jpg"&gt; 
											&lt;/a&gt; 
										&lt;/div&gt; 
										&lt;div class="media-body"&gt; 
											&lt;h6&gt;&lt;a href="" class="media-heading"&gt;Tshirt Dress&lt;/a&gt;&lt;/h6&gt;
											&lt;span&gt;$19.99&lt;/span&gt;
											&lt;span class="item-close"&gt;X&lt;/span&gt;
										&lt;/div&gt; 
									&lt;/div&gt;
								&lt;/li&gt;
								&lt;li class="cart-item text-center"&gt;
									&lt;h5 class="text-black m-a0"&gt;Totle = $500&lt;/h5&gt;
								&lt;/li&gt;
								&lt;li class="text-center"&gt;
									&lt;button class="site-button radius-xl m-r5"&gt;View Cart&lt;/button&gt;
									&lt;button class="site-button radius-xl outline black"&gt;Checkout&lt;/button&gt;
								&lt;/li&gt;
							&lt;/ul&gt;
						&lt;/div&gt;
					&lt;/div&gt;
				&lt;/div&gt;
				&lt;!-- Quik search --&gt;
				&lt;div class="dlab-quik-search "&gt;
					&lt;form action="#"&gt;
						&lt;input name="search" value="" type="text" class="form-control" placeholder="Type to search"&gt;
						&lt;span id="quik-search-remove"&gt;&lt;i class="ti-close"&gt;&lt;/i&gt;&lt;/span&gt;
					&lt;/form&gt;
				&lt;/div&gt;
				&lt;!-- main nav --&gt;
				&lt;div class="header-nav navbar-collapse collapse justify-content-end" id="navbarNavDropdown"&gt;
					&lt;div class="logo-header d-md-block d-lg-none"&gt;
						&lt;a href="index"&gt;&lt;img src="images/logo.png" alt=""&gt;&lt;/a&gt;
					&lt;/div&gt;
					&lt;ul class="nav navbar-nav"&gt;	
						&lt;li class="active"&gt;
							&lt;a href="javascript:;"&gt;Home&lt;i class="fa fa-chevron-down"&gt;&lt;/i&gt;&lt;/a&gt;
							&lt;ul class="sub-menu right"&gt;
								&lt;li&gt;&lt;a href="index"&gt;Home - University&lt;/a&gt;&lt;/li&gt;
								&lt;li&gt;&lt;a href="index-2"&gt;Home - Kindergarten&lt;/a&gt;&lt;/li&gt;
								&lt;li&gt;&lt;a href="index-3"&gt;Home - Collage&lt;/a&gt;&lt;/li&gt;
								&lt;li&gt;&lt;a href="index-4"&gt;Home - Coaching&lt;/a&gt;&lt;/li&gt;
								&lt;li&gt;&lt;a href="index-5"&gt;Home - School&lt;/a&gt;&lt;/li&gt;
							&lt;/ul&gt;
						&lt;/li&gt;
						&lt;li&gt;
							&lt;a href="javascript:;"&gt;Features&lt;i class="fa fa-chevron-down"&gt;&lt;/i&gt;&lt;/a&gt;
							&lt;ul class="sub-menu tab-content"&gt;
								&lt;li&gt;
									&lt;a href="javascript:;"&gt;Header Light &lt;i class="fa fa-angle-right"&gt;&lt;/i&gt;&lt;/a&gt;
									&lt;ul class="sub-menu"&gt;
										&lt;li&gt;&lt;a href="header-style-1"&gt;Header 1&lt;/a&gt;&lt;/li&gt;
										&lt;li&gt;&lt;a href="header-style-2"&gt;Header 2&lt;/a&gt;&lt;/li&gt;
										&lt;li&gt;&lt;a href="header-style-3"&gt;Header 3&lt;/a&gt;&lt;/li&gt;
										&lt;li&gt;&lt;a href="header-style-4"&gt;Header 4&lt;/a&gt;&lt;/li&gt;
										&lt;li&gt;&lt;a href="header-style-5"&gt;Header 5&lt;/a&gt;&lt;/li&gt;
										&lt;li&gt;&lt;a href="header-style-6"&gt;Header 6&lt;/a&gt;&lt;/li&gt;
									&lt;/ul&gt;
								&lt;/li&gt;	
								&lt;li&gt; 
									&lt;a href="javascript:;"&gt;Header Dark &lt;i class="fa fa-angle-right"&gt;&lt;/i&gt;&lt;/a&gt;
									&lt;ul class="sub-menu"&gt;		
										&lt;li&gt;&lt;a href="header-style-dark-1"&gt;Header 1&lt;/a&gt;&lt;/li&gt;
										&lt;li&gt;&lt;a href="header-style-dark-2"&gt;Header 2&lt;/a&gt;&lt;/li&gt;
										&lt;li&gt;&lt;a href="header-style-dark-3"&gt;Header 3&lt;/a&gt;&lt;/li&gt;
										&lt;li&gt;&lt;a href="header-style-dark-4"&gt;Header 4&lt;/a&gt;&lt;/li&gt;
										&lt;li&gt;&lt;a href="header-style-dark-5"&gt;Header 5&lt;/a&gt;&lt;/li&gt;
										&lt;li&gt;&lt;a href="header-style-dark-6"&gt;Header 6&lt;/a&gt;&lt;/li&gt;
									&lt;/ul&gt;
								&lt;/li&gt;
								&lt;li&gt; 
									&lt;a href="javascript:;"&gt;Footer &lt;i class="fa fa-angle-right"&gt;&lt;/i&gt;&lt;/a&gt;
									&lt;ul class="sub-menu"&gt;
										&lt;li&gt;&lt;a href="footer-1"&gt;Footer 1 &lt;/a&gt;&lt;/li&gt;
										&lt;li&gt;&lt;a href="footer-2"&gt;Footer 2&lt;/a&gt;&lt;/li&gt;
										&lt;li&gt;&lt;a href="footer-3"&gt;Footer 3&lt;/a&gt;&lt;/li&gt;
										&lt;li&gt;&lt;a href="footer-4"&gt;Footer 4&lt;/a&gt;&lt;/li&gt;
										&lt;li&gt;&lt;a href="footer-5"&gt;Footer 5&lt;/a&gt;&lt;/li&gt;
										&lt;li&gt;&lt;a href="footer-6"&gt;Footer 6&lt;/a&gt;&lt;/li&gt;
										&lt;li&gt;&lt;a href="footer-7"&gt;Footer 7&lt;/a&gt;&lt;/li&gt;
										&lt;li&gt;&lt;a href="footer-8"&gt;Footer 8&lt;/a&gt;&lt;/li&gt;
										&lt;li&gt;&lt;a href="footer-9"&gt;Footer 9&lt;/a&gt;&lt;/li&gt;
										&lt;li&gt;&lt;a href="footer-10"&gt;Footer 10&lt;/a&gt;&lt;/li&gt;
										&lt;li&gt;&lt;a href="footer-11"&gt;Footer 11&lt;/a&gt;&lt;/li&gt;
										&lt;li&gt;&lt;a href="footer-12"&gt;Footer 12&lt;/a&gt;&lt;/li&gt;
									&lt;/ul&gt;
								&lt;/li&gt;
							&lt;/ul&gt;
						&lt;/li&gt;
						&lt;li class="has-mega-menu"&gt; &lt;a href="javascript:;"&gt;Pages&lt;i class="fa fa-chevron-down"&gt;&lt;/i&gt;&lt;/a&gt;
							&lt;ul class="mega-menu"&gt;
								&lt;li&gt; 
									&lt;a href="javascript:;"&gt;Pages&lt;/a&gt;
									&lt;ul&gt;
										&lt;li&gt;&lt;a href="about-1"&gt;About us 1&lt;/a&gt;&lt;/li&gt;
										&lt;li&gt;&lt;a href="about-2"&gt;About us 2&lt;/a&gt;&lt;/li&gt;
										&lt;li&gt;&lt;a href="services-1"&gt;Services 1&lt;/a&gt;&lt;/li&gt;
										&lt;li&gt;&lt;a href="services-2"&gt;Services 2&lt;/a&gt;&lt;/li&gt;
										&lt;li&gt;&lt;a href="faq-1"&gt;Faqs &lt;/a&gt;&lt;/li&gt;
									&lt;/ul&gt;
								&lt;/li&gt;
								&lt;li&gt; 
									&lt;a href="javascript:;"&gt;Pages&lt;/a&gt;
									&lt;ul&gt;
										&lt;li&gt;&lt;a href="teacher"&gt;Teachers&lt;/a&gt;&lt;/li&gt;
										&lt;li&gt;&lt;a href="teachers-profile"&gt;Teachers Profile&lt;/a&gt;&lt;/li&gt;
										&lt;li&gt;&lt;a href="courses"&gt;Courses&lt;/a&gt;&lt;/li&gt;
										&lt;li&gt;&lt;a href="courses-details"&gt;Courses Details&lt;/a&gt;&lt;/li&gt;
										&lt;li&gt;&lt;a href="event"&gt;Events&lt;/a&gt;&lt;/li&gt;
									&lt;/ul&gt;
								&lt;/li&gt;
								&lt;li&gt; 
									&lt;a href="javascript:;"&gt;Pages&lt;/a&gt;
									&lt;ul&gt;
										&lt;li&gt;&lt;a href="event-details"&gt;Events Details&lt;/a&gt;&lt;/li&gt;
										&lt;li&gt;&lt;a href="help-desk"&gt;Help Desk&lt;/a&gt;&lt;/li&gt;
										&lt;li&gt;&lt;a href="privacy-policy"&gt;Privacy Policy&lt;/a&gt;&lt;/li&gt;
										&lt;li&gt;&lt;a href="error-404"&gt;Error 404&lt;/a&gt;&lt;/li&gt;
										&lt;li&gt;&lt;a href="error-405"&gt;Error 405&lt;/a&gt;&lt;/li&gt;
									&lt;/ul&gt;
								&lt;/li&gt;
								&lt;li&gt; 
									&lt;a href="javascript:;"&gt;Pages&lt;/a&gt;
									&lt;ul&gt;
										&lt;li&gt;&lt;a href="gallery-grid-2"&gt;Gallery Grid 2&lt;/a&gt;&lt;/li&gt;
										&lt;li&gt;&lt;a href="gallery-grid-3"&gt;Gallery Grid 3&lt;/a&gt;&lt;/li&gt;
										&lt;li&gt;&lt;a href="gallery-grid-4"&gt;Gallery Grid 4&lt;/a&gt;&lt;/li&gt;
										&lt;li&gt;&lt;a href="coming-soon-1"&gt;Coming Soon 1&lt;/a&gt;&lt;/li&gt;
										&lt;li&gt;&lt;a href="coming-soon-2"&gt;Coming Soon 2&lt;/a&gt;&lt;/li&gt;											
									&lt;/ul&gt;
								&lt;/li&gt;
							&lt;/ul&gt;
						&lt;/li&gt;
						&lt;li&gt;
							&lt;a href="javascript:;"&gt;Shop&lt;i class="fa fa-chevron-down"&gt;&lt;/i&gt;&lt;/a&gt;
							&lt;ul class="sub-menu"&gt;
								&lt;li&gt;&lt;a href="shop"&gt;Shop&lt;/a&gt;&lt;/li&gt;
								&lt;li&gt;&lt;a href="shop-sidebar"&gt;Shop Sidebar&lt;/a&gt;&lt;/li&gt;
								&lt;li&gt;&lt;a href="shop-product-details"&gt;Product Details&lt;/a&gt;&lt;/li&gt;
								&lt;li&gt;&lt;a href="shop-cart"&gt;Cart&lt;/a&gt;&lt;/li&gt;
								&lt;li&gt;&lt;a href="shop-wishlist"&gt;Wishlist&lt;/a&gt;&lt;/li&gt;
								&lt;li&gt;&lt;a href="shop-checkout"&gt;Checkout&lt;/a&gt;&lt;/li&gt;
								&lt;li&gt;&lt;a href="shop-login"&gt;Login&lt;/a&gt;&lt;/li&gt;
								&lt;li&gt;&lt;a href="shop-register"&gt;Register&lt;/a&gt;&lt;/li&gt;
							&lt;/ul&gt;
						&lt;/li&gt;
						&lt;li class="has-mega-menu"&gt; &lt;a href="javascript:;"&gt;Blog&lt;i class="fa fa-chevron-down"&gt;&lt;/i&gt;&lt;/a&gt;
							&lt;ul class="mega-menu"&gt;
								&lt;li&gt; &lt;a href="javascript:;"&gt;Blog&lt;/a&gt;
									&lt;ul&gt;
										&lt;li&gt;&lt;a href="blog-half-img"&gt;Half image&lt;/a&gt;&lt;/li&gt;
										&lt;li&gt;&lt;a href="blog-half-img-sidebar"&gt;Half image sidebar&lt;/a&gt;&lt;/li&gt;
										&lt;li&gt;&lt;a href="blog-half-img-left-sidebar"&gt;Half image sidebar left&lt;/a&gt;&lt;/li&gt;
										&lt;li&gt;&lt;a href="blog-large-img"&gt;Large image&lt;/a&gt;&lt;/li&gt;
									&lt;/ul&gt;
								&lt;/li&gt;
								&lt;li&gt; &lt;a href="javascript:;"&gt;Blog&lt;/a&gt;
									&lt;ul&gt;
										&lt;li&gt;&lt;a href="blog-large-img-sidebar"&gt;Large image sidebar&lt;/a&gt;&lt;/li&gt;
										&lt;li&gt;&lt;a href="blog-large-img-left-sidebar"&gt;Large image sidebar left&lt;/a&gt;&lt;/li&gt;
										&lt;li&gt;&lt;a href="blog-grid-2"&gt;Grid 2&lt;/a&gt;&lt;/li&gt;
										&lt;li&gt;&lt;a href="blog-grid-2-sidebar"&gt;Grid 2 sidebar&lt;/a&gt;&lt;/li&gt;
									&lt;/ul&gt;
								&lt;/li&gt;
								&lt;li&gt; &lt;a href="javascript:;"&gt;Blog&lt;/a&gt;
									&lt;ul&gt;
										&lt;li&gt;&lt;a href="blog-grid-2-sidebar-left"&gt;Grid 2 sidebar left&lt;/a&gt;&lt;/li&gt;
										&lt;li&gt;&lt;a href="blog-grid-3"&gt;Grid 3&lt;/a&gt;&lt;/li&gt;
										&lt;li&gt;&lt;a href="blog-grid-3-sidebar"&gt;Grid 3 sidebar&lt;/a&gt;&lt;/li&gt;
										&lt;li&gt;&lt;a href="blog-grid-3-sidebar-left"&gt;Grid 3 sidebar left&lt;/a&gt;&lt;/li&gt;
									&lt;/ul&gt;
								&lt;/li&gt;
								&lt;li&gt; &lt;a href="javascript:;"&gt;Blog&lt;/a&gt;
									&lt;ul&gt;
										&lt;li&gt;&lt;a href="blog-grid-4"&gt;Grid 4&lt;/a&gt;&lt;/li&gt;
										&lt;li&gt;&lt;a href="blog-single"&gt;Single&lt;/a&gt;&lt;/li&gt;
										&lt;li&gt;&lt;a href="blog-single-sidebar"&gt;Single sidebar&lt;/a&gt;&lt;/li&gt;
										&lt;li&gt;&lt;a href="blog-single-left-sidebar"&gt;Single sidebar right&lt;/a&gt;&lt;/li&gt;
									&lt;/ul&gt;
								&lt;/li&gt;
							&lt;/ul&gt;
						&lt;/li&gt;
						&lt;li class="has-mega-menu"&gt; &lt;a href="javascript:;"&gt;Element&lt;i class="fa fa-chevron-down"&gt;&lt;/i&gt;&lt;/a&gt;
							&lt;ul class="mega-menu"&gt;
								&lt;li&gt;&lt;a href="javascript:;"&gt;Element&lt;/a&gt;
									&lt;ul&gt;
										&lt;li&gt;&lt;a href="shortcode-buttons"&gt;&lt;i class="ti-mouse"&gt;&lt;/i&gt; Buttons&lt;/a&gt;&lt;/li&gt;
										&lt;li&gt;&lt;a href="shortcode-icon-box-styles"&gt;&lt;i class="ti-layout-grid2"&gt;&lt;/i&gt; Icon box styles&lt;/a&gt;&lt;/li&gt;
										&lt;li&gt;&lt;a href="shortcode-pricing-table"&gt;&lt;i class="ti-layout-grid2-thumb"&gt;&lt;/i&gt; Pricing table&lt;/a&gt;&lt;/li&gt;
										&lt;li&gt;&lt;a href="shortcode-toggles"&gt;&lt;i class="ti-layout-accordion-separated"&gt;&lt;/i&gt; Toggles&lt;/a&gt;&lt;/li&gt;
										&lt;li&gt;&lt;a href="shortcode-team"&gt;&lt;i class="ti-user"&gt;&lt;/i&gt; Team&lt;/a&gt;&lt;/li&gt;
										&lt;li&gt;&lt;a href="shortcode-animation-effects"&gt;&lt;i class="ti-layers-alt"&gt;&lt;/i&gt; Animation Effects&lt;/a&gt;&lt;/li&gt;
									&lt;/ul&gt;
								&lt;/li&gt;
								&lt;li&gt; &lt;a href="javascript:;"&gt;Element&lt;/a&gt;
									&lt;ul&gt;
										&lt;li&gt;&lt;a href="shortcode-carousel-sliders"&gt;&lt;i class="ti-layout-slider"&gt;&lt;/i&gt; Carousel sliders&lt;/a&gt;&lt;/li&gt;
										&lt;li&gt;&lt;a href="shortcode-image-box-content"&gt;&lt;i class="ti-image"&gt;&lt;/i&gt; Image box content&lt;/a&gt;&lt;/li&gt;
										&lt;li&gt;&lt;a href="shortcode-tabs"&gt;&lt;i class="ti-layout-tab-window"&gt;&lt;/i&gt; Tabs&lt;/a&gt;&lt;/li&gt;
										&lt;li&gt;&lt;a href="shortcode-counters"&gt;&lt;i class="ti-timer"&gt;&lt;/i&gt; Counters&lt;/a&gt;&lt;/li&gt;
										&lt;li&gt;&lt;a href="shortcode-shop-widgets"&gt;&lt;i class="ti-shopping-cart"&gt;&lt;/i&gt; Shop Widgets&lt;/a&gt;&lt;/li&gt;
										&lt;li&gt;&lt;a href="shortcode-filters"&gt;&lt;i class="ti-check-box"&gt;&lt;/i&gt; Gallery Filters&lt;/a&gt;&lt;/li&gt;
									&lt;/ul&gt;
								&lt;/li&gt;
								&lt;li&gt; &lt;a href="javascript:;"&gt;Element&lt;/a&gt;
									&lt;ul&gt;
										&lt;li&gt;&lt;a href="shortcode-accordians"&gt;&lt;i class="ti-layout-accordion-list"&gt;&lt;/i&gt; Accordians&lt;/a&gt;&lt;/li&gt;
										&lt;li&gt;&lt;a href="shortcode-dividers"&gt;&lt;i class="ti-layout-list-post"&gt;&lt;/i&gt; Dividers&lt;/a&gt;&lt;/li&gt;
										&lt;li&gt;&lt;a href="shortcode-images-effects"&gt;&lt;i class="ti-layout-media-overlay"&gt;&lt;/i&gt; Images effects&lt;/a&gt;&lt;/li&gt;
										&lt;li&gt;&lt;a href="shortcode-testimonials"&gt;&lt;i class="ti-comments"&gt;&lt;/i&gt; Testimonials&lt;/a&gt;&lt;/li&gt;
										&lt;li&gt;&lt;a href="shortcode-pagination"&gt;&lt;i class="ti-more"&gt;&lt;/i&gt; Pagination&lt;/a&gt;&lt;/li&gt;
										&lt;li&gt;&lt;a href="shortcode-alert-box"&gt;&lt;i class="ti-alert"&gt;&lt;/i&gt; Alert box&lt;/a&gt;&lt;/li&gt;
									&lt;/ul&gt;
								&lt;/li&gt;
								&lt;li&gt; &lt;a href="javascript:;"&gt;Element&lt;/a&gt;
									&lt;ul&gt;
										&lt;li&gt;&lt;a href="shortcode-icon-box"&gt;&lt;i class="ti-layout-media-left-alt"&gt;&lt;/i&gt; Icon Box&lt;/a&gt;&lt;/li&gt;
										&lt;li&gt;&lt;a href="shortcode-list-group"&gt;&lt;i class="ti-list"&gt;&lt;/i&gt; List group&lt;/a&gt;&lt;/li&gt;
										&lt;li&gt;&lt;a href="shortcode-title-separators"&gt;&lt;i class="ti-layout-line-solid"&gt;&lt;/i&gt; Title Separators&lt;/a&gt;&lt;/li&gt;
										&lt;li&gt;&lt;a href="shortcode-all-widgets"&gt;&lt;i class="ti-widgetized"&gt;&lt;/i&gt; Widgets&lt;/a&gt;&lt;/li&gt;
										&lt;li&gt;&lt;a href="shortcode-carousel-sliders"&gt;&lt;i class="ti-layout-slider"&gt;&lt;/i&gt; Carousel sliders&lt;/a&gt;&lt;/li&gt;
										&lt;li&gt;&lt;a href="shortcode-image-box-content"&gt;&lt;i class="ti-image"&gt;&lt;/i&gt; Image box content&lt;/a&gt;&lt;/li&gt;
									&lt;/ul&gt;
								&lt;/li&gt;
							&lt;/ul&gt;
						&lt;/li&gt;
						&lt;li&gt;
							&lt;a href="javascript:;"&gt;Contact Us&lt;i class="fa fa-chevron-down"&gt;&lt;/i&gt;&lt;/a&gt;
							&lt;ul class="sub-menu right"&gt;
								&lt;li&gt;&lt;a href="contact-1"&gt;Contact us 1&lt;/a&gt;&lt;/li&gt;
								&lt;li&gt;&lt;a href="contact-2"&gt;Contact us 2&lt;/a&gt;&lt;/li&gt;
								&lt;li&gt;&lt;a href="contact-3"&gt;Contact us 3&lt;/a&gt;&lt;/li&gt;
								&lt;li&gt;&lt;a href="contact-4"&gt;Contact us 4&lt;/a&gt;&lt;/li&gt;
							&lt;/ul&gt;
						&lt;/li&gt;
					&lt;/ul&gt;	
				&lt;/div&gt;
			&lt;/div&gt;
		&lt;/div&gt;
	&lt;/div&gt;
	&lt;!-- main header END --&gt;
&lt;/header&gt;
&lt;!-- header END --&gt;
</pre>
					</div>
				</div>
			</div>
			<!-- Code Box End -->
        </div>
        <!-- contact area END -->
    </div>
   
	@endsection