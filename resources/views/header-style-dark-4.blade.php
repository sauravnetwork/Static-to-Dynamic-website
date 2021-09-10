@extends('layout-head')
@section('csshd-4')
<link class="skin" rel="stylesheet" type="text/css" href="css/skin/skin-1.css">
@endsection

@section('div')
<header class="site-header mo-left header-transparent overlay header">
		<!-- main header -->
        <div class="sticky-header main-bar-wraper navbar-expand-lg">
            <div class="main-bar clearfix ">
@endsection
@section('website-logo')
<div class="logo-header mostion logo-white">
<a href="index.html"><img src="images/logo-white.png" alt=""></a>
</div>
@endsection




@section('header-style-dark-4')
    <!-- Content -->
    <div class="page-content">
        <!-- inner page banner -->
        <div class="dlab-bnr-inr dlab-bnr-inr-sm overlay-black-dark banner-content " style="background-image:url(images/banner/bnr1.jpg);">
            <div class="container">
                <div class="dlab-bnr-inr-entry">
                    <h1 class="text-white">Header Style Overlay</h1>
					<!-- Breadcrumb row -->
					<div class="breadcrumb-row">
						<ul class="list-inline">
							<li><a href="javascript:void(0);">Home</a></li>
							<li>Header Style Overlay</li>
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
								<h2 class="title">Check Header Style 04</h2>
								<p>A wonderful serenity has taken possession of my entire soul, like these sweet mornings of spring which I enjoy with my whole heart. I am alone, and feel the charm.</p>
							</div>
						</div>
					</div>
					<div class="relative">
						<button id="copyButton" class="btn">Copy</button>
<pre class="code-box" id="copyTarget">
&lt;!-- header --&gt;
&lt;header class="site-header mo-left header-transparent overlay header"&gt;
	&lt;!-- main header --&gt;
	&lt;div class="sticky-header main-bar-wraper navbar-expand-lg"&gt;
		&lt;div class="main-bar clearfix "&gt;
			&lt;div class="container clearfix"&gt;
				&lt;!-- website logo --&gt;
				&lt;div class="logo-header mostion"&gt;
					&lt;a href="index.html"&gt;&lt;img src="images/logo-white.png" alt=""&gt;&lt;/a&gt;
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
						&lt;a href="index.html"&gt;&lt;img src="images/logo.png" alt=""&gt;&lt;/a&gt;
					&lt;/div&gt;
					&lt;ul class="nav navbar-nav"&gt;	
						&lt;li class="active"&gt;
							&lt;a href="javascript:;"&gt;Home&lt;i class="fa fa-chevron-down"&gt;&lt;/i&gt;&lt;/a&gt;
							&lt;ul class="sub-menu right"&gt;
								&lt;li&gt;&lt;a href="index.html"&gt;Home - University&lt;/a&gt;&lt;/li&gt;
								&lt;li&gt;&lt;a href="index-2.html"&gt;Home - Kindergarten&lt;/a&gt;&lt;/li&gt;
								&lt;li&gt;&lt;a href="index-3.html"&gt;Home - Collage&lt;/a&gt;&lt;/li&gt;
								&lt;li&gt;&lt;a href="index-4.html"&gt;Home - Coaching&lt;/a&gt;&lt;/li&gt;
								&lt;li&gt;&lt;a href="index-5.html"&gt;Home - School&lt;/a&gt;&lt;/li&gt;
							&lt;/ul&gt;
						&lt;/li&gt;
						&lt;li&gt;
							&lt;a href="javascript:;"&gt;Features&lt;i class="fa fa-chevron-down"&gt;&lt;/i&gt;&lt;/a&gt;
							&lt;ul class="sub-menu tab-content"&gt;
								&lt;li&gt;
									&lt;a href="javascript:;"&gt;Header Light &lt;i class="fa fa-angle-right"&gt;&lt;/i&gt;&lt;/a&gt;
									&lt;ul class="sub-menu"&gt;
										&lt;li&gt;&lt;a href="header-style-1.html"&gt;Header 1&lt;/a&gt;&lt;/li&gt;
										&lt;li&gt;&lt;a href="header-style-2.html"&gt;Header 2&lt;/a&gt;&lt;/li&gt;
										&lt;li&gt;&lt;a href="header-style-3.html"&gt;Header 3&lt;/a&gt;&lt;/li&gt;
										&lt;li&gt;&lt;a href="header-style-4.html"&gt;Header 4&lt;/a&gt;&lt;/li&gt;
										&lt;li&gt;&lt;a href="header-style-5.html"&gt;Header 5&lt;/a&gt;&lt;/li&gt;
										&lt;li&gt;&lt;a href="header-style-6.html"&gt;Header 6&lt;/a&gt;&lt;/li&gt;
									&lt;/ul&gt;
								&lt;/li&gt;	
								&lt;li&gt; 
									&lt;a href="javascript:;"&gt;Header Dark &lt;i class="fa fa-angle-right"&gt;&lt;/i&gt;&lt;/a&gt;
									&lt;ul class="sub-menu"&gt;		
										&lt;li&gt;&lt;a href="header-style-dark-1.html"&gt;Header 1&lt;/a&gt;&lt;/li&gt;
										&lt;li&gt;&lt;a href="header-style-dark-2.html"&gt;Header 2&lt;/a&gt;&lt;/li&gt;
										&lt;li&gt;&lt;a href="header-style-dark-3.html"&gt;Header 3&lt;/a&gt;&lt;/li&gt;
										&lt;li&gt;&lt;a href="header-style-dark-4.html"&gt;Header 4&lt;/a&gt;&lt;/li&gt;
										&lt;li&gt;&lt;a href="header-style-dark-5.html"&gt;Header 5&lt;/a&gt;&lt;/li&gt;
										&lt;li&gt;&lt;a href="header-style-dark-6.html"&gt;Header 6&lt;/a&gt;&lt;/li&gt;
									&lt;/ul&gt;
								&lt;/li&gt;
								&lt;li&gt; 
									&lt;a href="javascript:;"&gt;Footer &lt;i class="fa fa-angle-right"&gt;&lt;/i&gt;&lt;/a&gt;
									&lt;ul class="sub-menu"&gt;
										&lt;li&gt;&lt;a href="footer-1.html"&gt;Footer 1 &lt;/a&gt;&lt;/li&gt;
										&lt;li&gt;&lt;a href="footer-2.html"&gt;Footer 2&lt;/a&gt;&lt;/li&gt;
										&lt;li&gt;&lt;a href="footer-3.html"&gt;Footer 3&lt;/a&gt;&lt;/li&gt;
										&lt;li&gt;&lt;a href="footer-4.html"&gt;Footer 4&lt;/a&gt;&lt;/li&gt;
										&lt;li&gt;&lt;a href="footer-5.html"&gt;Footer 5&lt;/a&gt;&lt;/li&gt;
										&lt;li&gt;&lt;a href="footer-6.html"&gt;Footer 6&lt;/a&gt;&lt;/li&gt;
										&lt;li&gt;&lt;a href="footer-7.html"&gt;Footer 7&lt;/a&gt;&lt;/li&gt;
										&lt;li&gt;&lt;a href="footer-8.html"&gt;Footer 8&lt;/a&gt;&lt;/li&gt;
										&lt;li&gt;&lt;a href="footer-9.html"&gt;Footer 9&lt;/a&gt;&lt;/li&gt;
										&lt;li&gt;&lt;a href="footer-10.html"&gt;Footer 10&lt;/a&gt;&lt;/li&gt;
										&lt;li&gt;&lt;a href="footer-11.html"&gt;Footer 11&lt;/a&gt;&lt;/li&gt;
										&lt;li&gt;&lt;a href="footer-12.html"&gt;Footer 12&lt;/a&gt;&lt;/li&gt;
									&lt;/ul&gt;
								&lt;/li&gt;
							&lt;/ul&gt;
						&lt;/li&gt;
						&lt;li class="has-mega-menu"&gt; &lt;a href="javascript:;"&gt;Pages&lt;i class="fa fa-chevron-down"&gt;&lt;/i&gt;&lt;/a&gt;
							&lt;ul class="mega-menu"&gt;
								&lt;li&gt; 
									&lt;a href="javascript:;"&gt;Pages&lt;/a&gt;
									&lt;ul&gt;
										&lt;li&gt;&lt;a href="about-1.html"&gt;About us 1&lt;/a&gt;&lt;/li&gt;
										&lt;li&gt;&lt;a href="about-2.html"&gt;About us 2&lt;/a&gt;&lt;/li&gt;
										&lt;li&gt;&lt;a href="services-1.html"&gt;Services 1&lt;/a&gt;&lt;/li&gt;
										&lt;li&gt;&lt;a href="services-2.html"&gt;Services 2&lt;/a&gt;&lt;/li&gt;
										&lt;li&gt;&lt;a href="faq-1.html"&gt;Faqs &lt;/a&gt;&lt;/li&gt;
									&lt;/ul&gt;
								&lt;/li&gt;
								&lt;li&gt; 
									&lt;a href="javascript:;"&gt;Pages&lt;/a&gt;
									&lt;ul&gt;
										&lt;li&gt;&lt;a href="teacher.html"&gt;Teachers&lt;/a&gt;&lt;/li&gt;
										&lt;li&gt;&lt;a href="teachers-profile.html"&gt;Teachers Profile&lt;/a&gt;&lt;/li&gt;
										&lt;li&gt;&lt;a href="courses.html"&gt;Courses&lt;/a&gt;&lt;/li&gt;
										&lt;li&gt;&lt;a href="courses-details.html"&gt;Courses Details&lt;/a&gt;&lt;/li&gt;
										&lt;li&gt;&lt;a href="event.html"&gt;Events&lt;/a&gt;&lt;/li&gt;
									&lt;/ul&gt;
								&lt;/li&gt;
								&lt;li&gt; 
									&lt;a href="javascript:;"&gt;Pages&lt;/a&gt;
									&lt;ul&gt;
										&lt;li&gt;&lt;a href="event-details.html"&gt;Events Details&lt;/a&gt;&lt;/li&gt;
										&lt;li&gt;&lt;a href="help-desk.html"&gt;Help Desk&lt;/a&gt;&lt;/li&gt;
										&lt;li&gt;&lt;a href="privacy-policy.html"&gt;Privacy Policy&lt;/a&gt;&lt;/li&gt;
										&lt;li&gt;&lt;a href="error-404.html"&gt;Error 404&lt;/a&gt;&lt;/li&gt;
										&lt;li&gt;&lt;a href="error-405.html"&gt;Error 405&lt;/a&gt;&lt;/li&gt;
									&lt;/ul&gt;
								&lt;/li&gt;
								&lt;li&gt; 
									&lt;a href="javascript:;"&gt;Pages&lt;/a&gt;
									&lt;ul&gt;
										&lt;li&gt;&lt;a href="gallery-grid-2.html"&gt;Gallery Grid 2&lt;/a&gt;&lt;/li&gt;
										&lt;li&gt;&lt;a href="gallery-grid-3.html"&gt;Gallery Grid 3&lt;/a&gt;&lt;/li&gt;
										&lt;li&gt;&lt;a href="gallery-grid-4.html"&gt;Gallery Grid 4&lt;/a&gt;&lt;/li&gt;
										&lt;li&gt;&lt;a href="coming-soon-1.html"&gt;Coming Soon 1&lt;/a&gt;&lt;/li&gt;
										&lt;li&gt;&lt;a href="coming-soon-2.html"&gt;Coming Soon 2&lt;/a&gt;&lt;/li&gt;											
									&lt;/ul&gt;
								&lt;/li&gt;
							&lt;/ul&gt;
						&lt;/li&gt;
						&lt;li&gt;
							&lt;a href="javascript:;"&gt;Shop&lt;i class="fa fa-chevron-down"&gt;&lt;/i&gt;&lt;/a&gt;
							&lt;ul class="sub-menu"&gt;
								&lt;li&gt;&lt;a href="shop.html"&gt;Shop&lt;/a&gt;&lt;/li&gt;
								&lt;li&gt;&lt;a href="shop-sidebar.html"&gt;Shop Sidebar&lt;/a&gt;&lt;/li&gt;
								&lt;li&gt;&lt;a href="shop-product-details.html"&gt;Product Details&lt;/a&gt;&lt;/li&gt;
								&lt;li&gt;&lt;a href="shop-cart.html"&gt;Cart&lt;/a&gt;&lt;/li&gt;
								&lt;li&gt;&lt;a href="shop-wishlist.html"&gt;Wishlist&lt;/a&gt;&lt;/li&gt;
								&lt;li&gt;&lt;a href="shop-checkout.html"&gt;Checkout&lt;/a&gt;&lt;/li&gt;
								&lt;li&gt;&lt;a href="shop-login.html"&gt;Login&lt;/a&gt;&lt;/li&gt;
								&lt;li&gt;&lt;a href="shop-register.html"&gt;Register&lt;/a&gt;&lt;/li&gt;
							&lt;/ul&gt;
						&lt;/li&gt;
						&lt;li class="has-mega-menu"&gt; &lt;a href="javascript:;"&gt;Blog&lt;i class="fa fa-chevron-down"&gt;&lt;/i&gt;&lt;/a&gt;
							&lt;ul class="mega-menu"&gt;
								&lt;li&gt; &lt;a href="javascript:;"&gt;Blog&lt;/a&gt;
									&lt;ul&gt;
										&lt;li&gt;&lt;a href="blog-half-img.html"&gt;Half image&lt;/a&gt;&lt;/li&gt;
										&lt;li&gt;&lt;a href="blog-half-img-sidebar.html"&gt;Half image sidebar&lt;/a&gt;&lt;/li&gt;
										&lt;li&gt;&lt;a href="blog-half-img-left-sidebar.html"&gt;Half image sidebar left&lt;/a&gt;&lt;/li&gt;
										&lt;li&gt;&lt;a href="blog-large-img.html"&gt;Large image&lt;/a&gt;&lt;/li&gt;
									&lt;/ul&gt;
								&lt;/li&gt;
								&lt;li&gt; &lt;a href="javascript:;"&gt;Blog&lt;/a&gt;
									&lt;ul&gt;
										&lt;li&gt;&lt;a href="blog-large-img-sidebar.html"&gt;Large image sidebar&lt;/a&gt;&lt;/li&gt;
										&lt;li&gt;&lt;a href="blog-large-img-left-sidebar.html"&gt;Large image sidebar left&lt;/a&gt;&lt;/li&gt;
										&lt;li&gt;&lt;a href="blog-grid-2.html"&gt;Grid 2&lt;/a&gt;&lt;/li&gt;
										&lt;li&gt;&lt;a href="blog-grid-2-sidebar.html"&gt;Grid 2 sidebar&lt;/a&gt;&lt;/li&gt;
									&lt;/ul&gt;
								&lt;/li&gt;
								&lt;li&gt; &lt;a href="javascript:;"&gt;Blog&lt;/a&gt;
									&lt;ul&gt;
										&lt;li&gt;&lt;a href="blog-grid-2-sidebar-left.html"&gt;Grid 2 sidebar left&lt;/a&gt;&lt;/li&gt;
										&lt;li&gt;&lt;a href="blog-grid-3.html"&gt;Grid 3&lt;/a&gt;&lt;/li&gt;
										&lt;li&gt;&lt;a href="blog-grid-3-sidebar.html"&gt;Grid 3 sidebar&lt;/a&gt;&lt;/li&gt;
										&lt;li&gt;&lt;a href="blog-grid-3-sidebar-left.html"&gt;Grid 3 sidebar left&lt;/a&gt;&lt;/li&gt;
									&lt;/ul&gt;
								&lt;/li&gt;
								&lt;li&gt; &lt;a href="javascript:;"&gt;Blog&lt;/a&gt;
									&lt;ul&gt;
										&lt;li&gt;&lt;a href="blog-grid-4.html"&gt;Grid 4&lt;/a&gt;&lt;/li&gt;
										&lt;li&gt;&lt;a href="blog-single.html"&gt;Single&lt;/a&gt;&lt;/li&gt;
										&lt;li&gt;&lt;a href="blog-single-sidebar.html"&gt;Single sidebar&lt;/a&gt;&lt;/li&gt;
										&lt;li&gt;&lt;a href="blog-single-left-sidebar.html"&gt;Single sidebar right&lt;/a&gt;&lt;/li&gt;
									&lt;/ul&gt;
								&lt;/li&gt;
							&lt;/ul&gt;
						&lt;/li&gt;
						&lt;li class="has-mega-menu"&gt; &lt;a href="javascript:;"&gt;Element&lt;i class="fa fa-chevron-down"&gt;&lt;/i&gt;&lt;/a&gt;
							&lt;ul class="mega-menu"&gt;
								&lt;li&gt;&lt;a href="javascript:;"&gt;Element&lt;/a&gt;
									&lt;ul&gt;
										&lt;li&gt;&lt;a href="shortcode-buttons.html"&gt;&lt;i class="ti-mouse"&gt;&lt;/i&gt; Buttons&lt;/a&gt;&lt;/li&gt;
										&lt;li&gt;&lt;a href="shortcode-icon-box-styles.html"&gt;&lt;i class="ti-layout-grid2"&gt;&lt;/i&gt; Icon box styles&lt;/a&gt;&lt;/li&gt;
										&lt;li&gt;&lt;a href="shortcode-pricing-table.html"&gt;&lt;i class="ti-layout-grid2-thumb"&gt;&lt;/i&gt; Pricing table&lt;/a&gt;&lt;/li&gt;
										&lt;li&gt;&lt;a href="shortcode-toggles.html"&gt;&lt;i class="ti-layout-accordion-separated"&gt;&lt;/i&gt; Toggles&lt;/a&gt;&lt;/li&gt;
										&lt;li&gt;&lt;a href="shortcode-team.html"&gt;&lt;i class="ti-user"&gt;&lt;/i&gt; Team&lt;/a&gt;&lt;/li&gt;
										&lt;li&gt;&lt;a href="shortcode-animation-effects.html"&gt;&lt;i class="ti-layers-alt"&gt;&lt;/i&gt; Animation Effects&lt;/a&gt;&lt;/li&gt;
									&lt;/ul&gt;
								&lt;/li&gt;
								&lt;li&gt; &lt;a href="javascript:;"&gt;Element&lt;/a&gt;
									&lt;ul&gt;
										&lt;li&gt;&lt;a href="shortcode-carousel-sliders.html"&gt;&lt;i class="ti-layout-slider"&gt;&lt;/i&gt; Carousel sliders&lt;/a&gt;&lt;/li&gt;
										&lt;li&gt;&lt;a href="shortcode-image-box-content.html"&gt;&lt;i class="ti-image"&gt;&lt;/i&gt; Image box content&lt;/a&gt;&lt;/li&gt;
										&lt;li&gt;&lt;a href="shortcode-tabs.html"&gt;&lt;i class="ti-layout-tab-window"&gt;&lt;/i&gt; Tabs&lt;/a&gt;&lt;/li&gt;
										&lt;li&gt;&lt;a href="shortcode-counters.html"&gt;&lt;i class="ti-timer"&gt;&lt;/i&gt; Counters&lt;/a&gt;&lt;/li&gt;
										&lt;li&gt;&lt;a href="shortcode-shop-widgets.html"&gt;&lt;i class="ti-shopping-cart"&gt;&lt;/i&gt; Shop Widgets&lt;/a&gt;&lt;/li&gt;
										&lt;li&gt;&lt;a href="shortcode-filters.html"&gt;&lt;i class="ti-check-box"&gt;&lt;/i&gt; Gallery Filters&lt;/a&gt;&lt;/li&gt;
									&lt;/ul&gt;
								&lt;/li&gt;
								&lt;li&gt; &lt;a href="javascript:;"&gt;Element&lt;/a&gt;
									&lt;ul&gt;
										&lt;li&gt;&lt;a href="shortcode-accordians.html"&gt;&lt;i class="ti-layout-accordion-list"&gt;&lt;/i&gt; Accordians&lt;/a&gt;&lt;/li&gt;
										&lt;li&gt;&lt;a href="shortcode-dividers.html"&gt;&lt;i class="ti-layout-list-post"&gt;&lt;/i&gt; Dividers&lt;/a&gt;&lt;/li&gt;
										&lt;li&gt;&lt;a href="shortcode-images-effects.html"&gt;&lt;i class="ti-layout-media-overlay"&gt;&lt;/i&gt; Images effects&lt;/a&gt;&lt;/li&gt;
										&lt;li&gt;&lt;a href="shortcode-testimonials.html"&gt;&lt;i class="ti-comments"&gt;&lt;/i&gt; Testimonials&lt;/a&gt;&lt;/li&gt;
										&lt;li&gt;&lt;a href="shortcode-pagination.html"&gt;&lt;i class="ti-more"&gt;&lt;/i&gt; Pagination&lt;/a&gt;&lt;/li&gt;
										&lt;li&gt;&lt;a href="shortcode-alert-box.html"&gt;&lt;i class="ti-alert"&gt;&lt;/i&gt; Alert box&lt;/a&gt;&lt;/li&gt;
									&lt;/ul&gt;
								&lt;/li&gt;
								&lt;li&gt; &lt;a href="javascript:;"&gt;Element&lt;/a&gt;
									&lt;ul&gt;
										&lt;li&gt;&lt;a href="shortcode-icon-box.html"&gt;&lt;i class="ti-layout-media-left-alt"&gt;&lt;/i&gt; Icon Box&lt;/a&gt;&lt;/li&gt;
										&lt;li&gt;&lt;a href="shortcode-list-group.html"&gt;&lt;i class="ti-list"&gt;&lt;/i&gt; List group&lt;/a&gt;&lt;/li&gt;
										&lt;li&gt;&lt;a href="shortcode-title-separators.html"&gt;&lt;i class="ti-layout-line-solid"&gt;&lt;/i&gt; Title Separators&lt;/a&gt;&lt;/li&gt;
										&lt;li&gt;&lt;a href="shortcode-all-widgets.html"&gt;&lt;i class="ti-widgetized"&gt;&lt;/i&gt; Widgets&lt;/a&gt;&lt;/li&gt;
										&lt;li&gt;&lt;a href="shortcode-carousel-sliders.html"&gt;&lt;i class="ti-layout-slider"&gt;&lt;/i&gt; Carousel sliders&lt;/a&gt;&lt;/li&gt;
										&lt;li&gt;&lt;a href="shortcode-image-box-content.html"&gt;&lt;i class="ti-image"&gt;&lt;/i&gt; Image box content&lt;/a&gt;&lt;/li&gt;
									&lt;/ul&gt;
								&lt;/li&gt;
							&lt;/ul&gt;
						&lt;/li&gt;
						&lt;li&gt;
							&lt;a href="javascript:;"&gt;Contact Us&lt;i class="fa fa-chevron-down"&gt;&lt;/i&gt;&lt;/a&gt;
							&lt;ul class="sub-menu right"&gt;
								&lt;li&gt;&lt;a href="contact-1.html"&gt;Contact us 1&lt;/a&gt;&lt;/li&gt;
								&lt;li&gt;&lt;a href="contact-2.html"&gt;Contact us 2&lt;/a&gt;&lt;/li&gt;
								&lt;li&gt;&lt;a href="contact-3.html"&gt;Contact us 3&lt;/a&gt;&lt;/li&gt;
								&lt;li&gt;&lt;a href="contact-4.html"&gt;Contact us 4&lt;/a&gt;&lt;/li&gt;
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
	@include('layout-footer')
   @endsection