<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="keywords" content="" />
	<meta name="author" content="" />
	<meta name="robots" content="" />
	<meta name="description" content="EduZone - Education Collage & School HTML5 Template" />
	<meta property="og:title" content="EduZone - Education Collage & School HTML5 Template" />
	<meta property="og:description" content="EduZone - Education Collage & School HTML5 Template" />
	<meta property="og:image" content="" />
	<meta name="format-detection" content="telephone=no">
	
	<!-- FAVICONS ICON -->
	<link rel="icon" href="images/favicon.ico" type="image/x-icon" />
	<link rel="shortcut icon" type="image/x-icon" href="images/favicon.png" />
	
	<!-- PAGE TITLE HERE -->
	<title>EduZone - Education Collage & School HTML5 Template</title>
	
	<!-- MOBILE SPECIFIC -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
	<!--[if lt IE 9]>
	<script src="js/html5shiv.min.js"></script>
	<script src="js/respond.min.js"></script>
	<![endif]-->
	
		<!-- STYLESHEETS -->
	<link rel="stylesheet" type="text/css" href="css/plugins.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link class="skin" rel="stylesheet" type="text/css" href="css/skin/skin-1.css">
	<link rel="stylesheet" type="text/css" href="css/templete.css">
	<!-- Google Font -->
	<style>
	@import url('https://fonts.googleapis.com/css2?family=Merriweather:ital,wght@0,300;0,400;0,700;0,900;1,300;1,400;1,700;1,900&family=Poppins:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap');
	</style>
</head>
<body id="bg">
<div class="page-wraper">
<div id="loading-area"></div>
    <!-- header -->
    <header class="site-header mo-left header ext-header">
		<div class="top-bar">
			<div class="container">
				<div class="row d-flex justify-content-between align-items-center">
					<div class="dlab-topbar-left">
						<ul>
							<li><i class="la la-phone-volume"></i> +00 888 6668811</li>
							<li><i class="las la-map-marker"></i> 1073 W Stephen Ave, Clawson</li>
						</ul>
					</div>
					<div class="dlab-topbar-right">
						<ul>
							<li><i class="la la-clock"></i>  Mon - Sat 8.00 - 18.00</li>
							<li><i class="las la-envelope-open"></i> info@example.com</li>
						</ul>				
					</div>
				</div>
			</div>
		</div>
		<div class="middle-bar bg-white">
			<div class="container">
				<!-- website logo  -->
				<div class="middle-area">
					<div class="logo-header logo-dark">
						<a href="index"><img src="images/logo.png" alt=""></a>
					</div>
					<div class="service-list">
						<ul>
							<li>
								<i class="la la-envelope-open"></i>
								<h4 class="title">(+00)888.666.88</h4>
								<span>Free Call</span>
							</li>
							<li>
								<i class="la la-clock-o"></i>
								<h4 class="title">08:00 AM - 06:00 PM</h4>
								<span>Monday - Friday</span>
							</li>
							<li>
								<i class="la la-map"></i>
								<h4 class="title">183 Donato Parkways</h4>
								<span>CA, United State</span>
							</li>
						</ul>
					</div>
				</div>
				
			</div>
		</div>	
		<!-- main header -->
        <div class="sticky-header main-bar-wraper navbar-expand-lg">
            <div class="main-bar clearfix ">
                <div class="container clearfix">
                    <!-- website logo -->
                    <div class="logo-header mostion logo-dark">
						<a href="index"><img src="images/logo.png" alt=""></a>
					</div>
                    <!-- nav toggle button -->
                    <button class="navbar-toggler collapsed navicon justify-content-end" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
						<span></span>
						<span></span>
						<span></span>
					</button>
                    <!-- extra nav -->
                    <div class="extra-nav">
                        <div class="extra-cell">
                            <button id="quik-search-btn" type="button" class="site-button-link"><i class="la la-search"></i></button>
							@yield('extra')
						</div>
                    </div>
                    <!-- Quik search -->
                    <div class="dlab-quik-search">
                        <form action="#">
                            <input name="search" value="" type="text" class="form-control" placeholder="Type to search">
                            <span id="quik-search-remove"><i class="ti-close"></i></span>
                        </form>
                    </div>
                    <!-- main nav -->
                    <div class="header-nav navbar-collapse collapse justify-content-start" id="navbarNavDropdown">
						<div class="logo-header d-md-block d-lg-none">
							<a href="index"><img src="images/logo.png" alt=""></a>
						</div>
                        <ul class="nav navbar-nav">	
							<li class="active">
								<a href="javascript:;">Home<i class="fa fa-chevron-down"></i></a>
								<ul class="sub-menu right">
									<li><a href="index">Home - University</a></li>
									<li><a href="index-2">Home - Kindergarten</a></li>
									<li><a href="index-3">Home - Collage</a></li>
									<li><a href="index-4">Home - Coaching</a></li>
									<li><a href="index-5">Home - School</a></li>
									<li><a href="index-6">Home - Online Courese</a></li>
									<li><a href="index-7">Home - Language School</a></li>
									<li><a href="index-8">Home - Kids School</a></li>
								</ul>
							</li>
							<li>
								<a href="javascript:;">Features<i class="fa fa-chevron-down"></i></a>
								<ul class="sub-menu tab-content">
									<li>
										<a href="javascript:;">Header Light <i class="fa fa-angle-right"></i></a>
										<ul class="sub-menu">
											<li><a href="header-style-1">Header 1</a></li>
											<li><a href="header-style-2">Header 2</a></li>
											<li><a href="header-style-3">Header 3</a></li>
											<li><a href="header-style-4">Header 4</a></li>
											<li><a href="header-style-5">Header 5</a></li>
											<li><a href="header-style-6">Header 6</a></li>
										</ul>
									</li>	
									<li> 
										<a href="javascript:;">Header Dark <i class="fa fa-angle-right"></i></a>
										<ul class="sub-menu">		
											<li><a href="header-style-dark-1">Header 1</a></li>
											<li><a href="header-style-dark-2">Header 2</a></li>
											<li><a href="header-style-dark-3">Header 3</a></li>
											<li><a href="header-style-dark-4">Header 4</a></li>
											<li><a href="header-style-dark-5">Header 5</a></li>
											<li><a href="header-style-dark-6">Header 6</a></li>
										</ul>
									</li>
									<li> 
										<a href="javascript:;">Footer <i class="fa fa-angle-right"></i></a>
										<ul class="sub-menu">
											<li><a href="footer-1">Footer 1 </a></li>
											<li><a href="footer-2">Footer 2</a></li>
											<li><a href="footer-3">Footer 3</a></li>
											<li><a href="footer-4">Footer 4</a></li>
											<li><a href="footer-5">Footer 5</a></li>
											<li><a href="footer-6">Footer 6</a></li>
											<li><a href="footer-7">Footer 7</a></li>
											<li><a href="footer-8">Footer 8</a></li>
											<li><a href="footer-9">Footer 9</a></li>
											<li><a href="footer-10">Footer 10</a></li>
											<li><a href="footer-11">Footer 11</a></li>
											<li><a href="footer-12">Footer 12</a></li>
										</ul>
									</li>
								</ul>
							</li>
							<li class="has-mega-menu"> <a href="javascript:;">Pages<i class="fa fa-chevron-down"></i></a>
								<ul class="mega-menu">
									<li> 
										<a href="javascript:;">Pages</a>
										<ul>
											<li><a href="about-1">About us 1</a></li>
											<li><a href="about-2">About us 2</a></li>
											<li><a href="services-1">Services 1</a></li>
											<li><a href="services-2">Services 2</a></li>
											<li><a href="faq-1">Faqs </a></li>
										</ul>
									</li>
									<li> 
										<a href="javascript:;">Pages</a>
										<ul>
											<li><a href="teacher">Teachers</a></li>
											<li><a href="teachers-profile">Teachers Profile</a></li>
											<li><a href="courses">Courses</a></li>
											<li><a href="courses-details">Courses Details</a></li>
											<li><a href="event">Events</a></li>
										</ul>
									</li>
									<li> 
										<a href="javascript:;">Pages</a>
										<ul>
											<li><a href="event-details">Events Details</a></li>
											<li><a href="help-desk">Help Desk</a></li>
											<li><a href="privacy-policy">Privacy Policy</a></li>
											<li><a href="error-404">Error 404</a></li>
											<li><a href="error-405">Error 405</a></li>
										</ul>
									</li>
									<li> 
										<a href="javascript:;">Pages</a>
										<ul>
											<li><a href="gallery-grid-2">Gallery Grid 2</a></li>
											<li><a href="gallery-grid-3">Gallery Grid 3</a></li>
											<li><a href="gallery-grid-4">Gallery Grid 4</a></li>
											<li><a href="coming-soon-1">Coming Soon 1</a></li>
											<li><a href="coming-soon-2">Coming Soon 2</a></li>											
										</ul>
									</li>
								</ul>
							</li>
							<li>
								<a href="javascript:;">Shop<i class="fa fa-chevron-down"></i></a>
								<ul class="sub-menu">
									<li><a href="shop">Shop</a></li>
									<li><a href="shop-sidebar">Shop Sidebar</a></li>
									<li><a href="shop-product-details">Product Details</a></li>
									<li><a href="shop-cart">Cart</a></li>
									<li><a href="shop-wishlist">Wishlist</a></li>
									<li><a href="shop-checkout">Checkout</a></li>
									<li><a href="shop-login">Login</a></li>
									<li><a href="shop-register">Register</a></li>
								</ul>
							</li>
							<li class="has-mega-menu"> <a href="javascript:;">Blog<i class="fa fa-chevron-down"></i></a>
								<ul class="mega-menu">
									<li> <a href="javascript:;">Blog</a>
										<ul>
											<li><a href="blog-half-img">Half image</a></li>
											<li><a href="blog-half-img-sidebar">Half image sidebar</a></li>
											<li><a href="blog-half-img-left-sidebar">Half image sidebar left</a></li>
											<li><a href="blog-large-img">Large image</a></li>
										</ul>
									</li>
									<li> <a href="javascript:;">Blog</a>
										<ul>
											<li><a href="blog-large-img-sidebar">Large image sidebar</a></li>
											<li><a href="blog-large-img-left-sidebar">Large image sidebar left</a></li>
											<li><a href="blog-grid-2">Grid 2</a></li>
											<li><a href="blog-grid-2-sidebar">Grid 2 sidebar</a></li>
										</ul>
									</li>
									<li> <a href="javascript:;">Blog</a>
										<ul>
											<li><a href="blog-grid-2-sidebar-left">Grid 2 sidebar left</a></li>
											<li><a href="blog-grid-3">Grid 3</a></li>
											<li><a href="blog-grid-3-sidebar">Grid 3 sidebar</a></li>
											<li><a href="blog-grid-3-sidebar-left">Grid 3 sidebar left</a></li>
										</ul>
									</li>
									<li> <a href="javascript:;">Blog</a>
										<ul>
											<li><a href="blog-grid-4">Grid 4</a></li>
											<li><a href="blog-single">Single</a></li>
											<li><a href="blog-single-sidebar">Single sidebar</a></li>
											<li><a href="blog-single-left-sidebar">Single sidebar right</a></li>
										</ul>
									</li>
								</ul>
							</li>
							<li class="has-mega-menu"> <a href="javascript:;">Element<i class="fa fa-chevron-down"></i></a>
								<ul class="mega-menu">
									<li><a href="javascript:;">Element</a>
										<ul>
											<li><a href="shortcode-buttons"><i class="ti-mouse"></i> Buttons</a></li>
											<li><a href="shortcode-icon-box-styles"><i class="ti-layout-grid2"></i> Icon box styles</a></li>
											<li><a href="shortcode-pricing-table"><i class="ti-layout-grid2-thumb"></i> Pricing table</a></li>
											<li><a href="shortcode-toggles"><i class="ti-layout-accordion-separated"></i> Toggles</a></li>
											<li><a href="shortcode-team"><i class="ti-user"></i> Team</a></li>
											<li><a href="shortcode-animation-effects"><i class="ti-layers-alt"></i> Animation Effects</a></li>
										</ul>
									</li>
									<li> <a href="javascript:;">Element</a>
										<ul>
											<li><a href="shortcode-carousel-sliders"><i class="ti-layout-slider"></i> Carousel sliders</a></li>
											<li><a href="shortcode-image-box-content"><i class="ti-image"></i> Image box content</a></li>
											<li><a href="shortcode-tabs"><i class="ti-layout-tab-window"></i> Tabs</a></li>
											<li><a href="shortcode-counters"><i class="ti-timer"></i> Counters</a></li>
											<li><a href="shortcode-shop-widgets"><i class="ti-shopping-cart"></i> Shop Widgets</a></li>
											<li><a href="shortcode-filters"><i class="ti-check-box"></i> Gallery Filters</a></li>
										</ul>
									</li>
									<li> <a href="javascript:;">Element</a>
										<ul>
											<li><a href="shortcode-accordians"><i class="ti-layout-accordion-list"></i> Accordians</a></li>
											<li><a href="shortcode-dividers"><i class="ti-layout-list-post"></i> Dividers</a></li>
											<li><a href="shortcode-images-effects"><i class="ti-layout-media-overlay"></i> Images effects</a></li>
											<li><a href="shortcode-testimonials"><i class="ti-comments"></i> Testimonials</a></li>
											<li><a href="shortcode-pagination"><i class="ti-more"></i> Pagination</a></li>
											<li><a href="shortcode-alert-box"><i class="ti-alert"></i> Alert box</a></li>
										</ul>
									</li>
									<li> <a href="javascript:;">Element</a>
										<ul>
											<li><a href="shortcode-icon-box"><i class="ti-layout-media-left-alt"></i> Icon Box</a></li>
											<li><a href="shortcode-list-group"><i class="ti-list"></i> List group</a></li>
											<li><a href="shortcode-title-separators"><i class="ti-layout-line-solid"></i> Title Separators</a></li>
											<li><a href="shortcode-all-widgets"><i class="ti-widgetized"></i> Widgets</a></li>
											<li><a href="shortcode-carousel-sliders"><i class="ti-layout-slider"></i> Carousel sliders</a></li>
											<li><a href="shortcode-image-box-content"><i class="ti-image"></i> Image box content</a></li>
										</ul>
									</li>
								</ul>
							</li>
							<li>
								<a href="javascript:;">Contact Us<i class="fa fa-chevron-down"></i></a>
								<ul class="sub-menu right">
									<li><a href="contact-1">Contact us 1</a></li>
									<li><a href="contact-2">Contact us 2</a></li>
									<li><a href="contact-3">Contact us 3</a></li>
									<li><a href="contact-4">Contact us 4</a></li>
								</ul>
							</li>
						</ul>
						<div class="dlab-social-icon">
							<ul>
								<li><a class="site-button circle fa fa-facebook" href="javascript:void(0);"></a></li>
								<li><a class="site-button  circle fa fa-twitter" href="javascript:void(0);"></a></li>
								<li><a class="site-button circle fa fa-linkedin" href="javascript:void(0);"></a></li>
								<li><a class="site-button circle fa fa-instagram" href="javascript:void(0);"></a></li>
							</ul>
						</div>	
                    </div>
                </div>
            </div>
        </div>
        <!-- main header END -->
    </header>
    <!-- header END -->
    
    @yield('header-style-1')
    @yield('header-style-dark-1')
 @include('layout-footer')
<!-- JAVASCRIPT FILES ========================================= -->
<script src="js/jquery.min.js"></script><!-- JQUERY.MIN JS -->
<script src="plugins/wow/wow.js"></script><!-- WOW JS -->
<script src="plugins/bootstrap/js/popper.min.js"></script><!-- BOOTSTRAP.MIN JS -->
<script src="plugins/bootstrap/js/bootstrap.min.js"></script><!-- BOOTSTRAP.MIN JS -->
<script src="plugins/bootstrap-select/bootstrap-select.min.js"></script><!-- FORM JS -->
<script src="plugins/bootstrap-touchspin/jquery.bootstrap-touchspin.js"></script><!-- FORM JS -->
<script src="plugins/magnific-popup/magnific-popup.js"></script><!-- MAGNIFIC POPUP JS -->
<script src="plugins/counter/waypoints-min.js"></script><!-- WAYPOINTS JS -->
<script src="plugins/counter/counterup.min.js"></script><!-- COUNTERUP JS -->
<script src="plugins/imagesloaded/imagesloaded.js"></script><!-- IMAGESLOADED -->
<script src="plugins/masonry/masonry-3.1.4.js"></script><!-- MASONRY -->
<script src="plugins/masonry/masonry.filter.js"></script><!-- MASONRY -->
<script src="plugins/owl-carousel/owl.carousel.js"></script><!-- OWL SLIDER -->
<script src="plugins/lightgallery/js/lightgallery-all.min.js"></script><!-- Lightgallery -->
<script src="js/custom.js"></script><!-- CUSTOM FUCTIONS  -->
<script src="js/dz.carousel.min.js"></script><!-- SORTCODE FUCTIONS  -->
<script src="plugins/countdown/jquery.countdown.js"></script><!-- COUNTDOWN FUCTIONS  -->
<script src="js/dz.ajax.js"></script><!-- CONTACT JS  -->
<script src="plugins/rangeslider/rangeslider.js" ></script><!-- Rangeslider -->
 
<script>
/*
$('#copyButton').on('click',function(e){
	e.preventDefault;
	$('#copyButton').addClass('active').text('Copied');
    $('#copyTarget').addClass('active');
	copyToClipboard('#copyTarget');
});*/

document.getElementById("copyButton").addEventListener("click", function(e) {
	e.preventDefault;
    $('#copyButton').addClass('active').text('Copied');
    $('#copyTarget').addClass('active');
	copyToClipboard(document.getElementById("copyTarget"));
});
function copyToClipboard(elem) {
	  // create hidden text element, if it doesn't already exist
    var targetId = "_hiddenCopyText_";
    var isInput = elem.tagName === "INPUT" || elem.tagName === "TEXTAREA";
    var origSelectionStart, origSelectionEnd;
    if (isInput) {
        // can just use the original source element for the selection and copy
        target = elem;
        origSelectionStart = elem.selectionStart;
        origSelectionEnd = elem.selectionEnd;
    } else {
        // must use a temporary form element for the selection and copy
        target = document.getElementById(targetId);
        if (!target) {
            var target = document.createElement("textarea");
            target.style.position = "absolute";
            target.style.left = "-9999px";
            target.style.top = "0";
            target.id = targetId;
            document.body.appendChild(target);
        }
        target.textContent = elem.textContent;
    }
    // select the content
    var currentFocus = document.activeElement;
    target.focus();
    target.setSelectionRange(0, target.value.length);
    
    // copy the selection
    var succeed;
    try {
    	  succeed = document.execCommand("copy");
    } catch(e) {
        succeed = false;
    }
    // restore original focus
    if (currentFocus && typeof currentFocus.focus === "function") {
        currentFocus.focus();
    }
    if (isInput) {
        // restore prior selection
        elem.setSelectionRange(origSelectionStart, origSelectionEnd);
    } else {
        // clear temporary content
        target.textContent = "";
    }
    return succeed;
}
</script>
</body>
</html>
