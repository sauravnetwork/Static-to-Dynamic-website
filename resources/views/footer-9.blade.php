@extends('layout-f')
@section('footer-9')
    <!-- Content -->
    <div class="page-content bg-white">
        <!-- inner page banner -->
        <div class="dlab-bnr-inr overlay-black-middle bg-pt" style="background-image:url(images/banner/bnr1.jpg);">
            <div class="container">
                <div class="dlab-bnr-inr-entry">
                    <h1 class="text-white">Footer 9</h1>
					<!-- Breadcrumb row -->
					<div class="breadcrumb-row">
						<ul class="list-inline">
							<li><a href="javascript:void(0);">Home</a></li>
							<li>Footer 9</li>
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
					<div class="footer-box">
						<div class="row align-items-center">
							<div class="col-lg-3 col-md-4">
								<img src="images/footer.png" alt=""/>
							</div>
							<div class="col-lg-9 col-md-8">
								<h2 class="title">Check Footer Style 09</h2>
								<p>A wonderful serenity has taken possession of my entire soul, like these sweet mornings of spring which I enjoy with my whole heart. I am alone, and feel the charm.</p>
							</div>
						</div>
					</div>
					<div class="relative">
						<button id="copyButton" class="btn">Copy</button>
<pre class="code-box" id="copyTarget">
&lt;!-- Footer --&gt;
&lt;footer class="site-footer"&gt;
  &lt;div class="footer-top overlay-black-light" style="background-image:url(images/background/bg9.jpg);"&gt;
    &lt;div class="container"&gt;
      &lt;div class="row"&gt;
        &lt;div class="col-md-12 col-xl-5 col-lg-4 col-sm-8 footer-col-4"&gt;
          &lt;div class="widget"&gt;
            &lt;h5 class="m-b30 text-white"&gt;Subscribe To Our Newsletter&lt;/h5&gt;
            &lt;p class="text-capitalize m-b20"&gt;Lorem Ipsum is simply dummy text of the printing and typesetting industry has been the industry's standard dummy text ever since the..&lt;/p&gt;
            &lt;div class="subscribe-form m-b20"&gt;
              &lt;form class="dzSubscribe" action="script/mailchamp.php" method="post"&gt;
                &lt;div class="dzSubscribeMsg"&gt;&lt;/div&gt;
                &lt;div class="input-group"&gt;
                  &lt;input name="dzEmail" required="required" type="email" class="form-control" placeholder="Your Email"/&gt;
                  &lt;span class="input-group-btn"&gt;
                    &lt;button name="submit" value="Submit" type="submit" class="site-button radius-xl"&gt;Subscribe&lt;/button&gt;
                  &lt;/span&gt; 
                &lt;/div&gt;
              &lt;/form&gt;
            &lt;/div&gt;
            &lt;ul class="list-inline m-a0"&gt;
              &lt;li&gt;&lt;a href="javascript:void(0);" class="site-button facebook circle "&gt;&lt;i class="fa fa-facebook"&gt;&lt;/i&gt;&lt;/a&gt;&lt;/li&gt;
              &lt;li&gt;&lt;a href="javascript:void(0);" class="site-button google-plus circle "&gt;&lt;i class="fa fa-google-plus"&gt;&lt;/i&gt;&lt;/a&gt;&lt;/li&gt;
              &lt;li&gt;&lt;a href="javascript:void(0);" class="site-button linkedin circle "&gt;&lt;i class="fa fa-linkedin"&gt;&lt;/i&gt;&lt;/a&gt;&lt;/li&gt;
              &lt;li&gt;&lt;a href="javascript:void(0);" class="site-button instagram circle "&gt;&lt;i class="fa fa-instagram"&gt;&lt;/i&gt;&lt;/a&gt;&lt;/li&gt;
              &lt;li&gt;&lt;a href="javascript:void(0);" class="site-button twitter circle "&gt;&lt;i class="fa fa-twitter"&gt;&lt;/i&gt;&lt;/a&gt;&lt;/li&gt;
            &lt;/ul&gt;
          &lt;/div&gt;
        &lt;/div&gt;
        &lt;div class="col-md-3 col-5 col-xl-2 col-lg-2 col-sm-4 footer-col-4"&gt;
          &lt;div class="widget widget_services border-0"&gt;
            &lt;h5 class="m-b30 text-white"&gt;Company&lt;/h5&gt;
            &lt;ul&gt;
              &lt;li&gt;&lt;a href="javascript:void(0);"&gt;About Us &lt;/a&gt;&lt;/li&gt;
              &lt;li&gt;&lt;a href="javascript:void(0);"&gt;Home &lt;/a&gt;&lt;/li&gt;
              &lt;li&gt;&lt;a href="javascript:void(0);"&gt;Contact Us&lt;/a&gt;&lt;/li&gt;
              &lt;li&gt;&lt;a href="javascript:void(0);"&gt;About Us&lt;/a&gt;&lt;/li&gt;
              &lt;li&gt;&lt;a href="javascript:void(0);"&gt;Our Services&lt;/a&gt;&lt;/li&gt;
            &lt;/ul&gt;
          &lt;/div&gt;
        &lt;/div&gt;
        &lt;div class="col-md-3 col-7 col-xl-2 col-lg-3 col-sm-6 footer-col-4"&gt;
          &lt;div class="widget widget_services border-0"&gt;
            &lt;h5 class="m-b30 text-white"&gt;Useful Link&lt;/h5&gt;
            &lt;ul&gt;
              &lt;li&gt;&lt;a href="javascript:void(0);"&gt;Create Account&lt;/a&gt;&lt;/li&gt;
              &lt;li&gt;&lt;a href="javascript:void(0);"&gt;Company Philosophy &lt;/a&gt;&lt;/li&gt;
              &lt;li&gt;&lt;a href="javascript:void(0);"&gt;Corporate Culture&lt;/a&gt;&lt;/li&gt;
              &lt;li&gt;&lt;a href="javascript:void(0);"&gt;Portfolio&lt;/a&gt;&lt;/li&gt;
              &lt;li&gt;&lt;a href="javascript:void(0);"&gt;Client Management&lt;/a&gt;&lt;/li&gt;
            &lt;/ul&gt;
          &lt;/div&gt;
        &lt;/div&gt;
        &lt;div class="col-md-6 col-xl-3 col-lg-3 col-sm-6 footer-col-4"&gt;
          &lt;div class="widget widget_getintuch"&gt;
            &lt;h5 class="m-b30 text-white "&gt;Contact us&lt;/h5&gt;
            &lt;ul&gt;
              &lt;li&gt;&lt;i class="ti-location-pin"&gt;&lt;/i&gt;&lt;strong&gt;address&lt;/strong&gt; demo address #8901 Marmora Road Chi Minh City, Vietnam &lt;/li&gt;
              &lt;li&gt;&lt;i class="ti-mobile"&gt;&lt;/i&gt;&lt;strong&gt;phone&lt;/strong&gt;0800-123456 (24/7 Support Line)&lt;/li&gt;
              &lt;li&gt;&lt;i class="ti-email"&gt;&lt;/i&gt;&lt;strong&gt;email&lt;/strong&gt;info@example.com&lt;/li&gt;
            &lt;/ul&gt;
          &lt;/div&gt;
        &lt;/div&gt;
      &lt;/div&gt;
    &lt;/div&gt;
  &lt;/div&gt;
  &lt;!-- footer bottom part --&gt;
  &lt;div class="footer-bottom"&gt;
    &lt;div class="container"&gt;
      &lt;div class="row"&gt;
        &lt;div class="col-md-6 col-sm-6 text-left "&gt; &lt;span&gt;Copyright © 2020 DexignZone&lt;/span&gt; &lt;/div&gt;
        &lt;div class="col-md-6 col-sm-6 text-right "&gt; 
          &lt;div class="widget-link "&gt; 
            &lt;ul&gt;
              &lt;li&gt;&lt;a href="javascript:void(0);"&gt; About&lt;/a&gt;&lt;/li&gt; 
              &lt;li&gt;&lt;a href="javascript:void(0);"&gt; Help Desk&lt;/a&gt;&lt;/li&gt; 
              &lt;li&gt;&lt;a href="javascript:void(0);"&gt; Privacy Policy&lt;/a&gt;&lt;/li&gt; 
            &lt;/ul&gt;
          &lt;/div&gt;
        &lt;/div&gt;
      &lt;/div&gt;
    &lt;/div&gt;
  &lt;/div&gt;
&lt;/footer&gt;
&lt;!-- Footer END --&gt;
</pre>
					</div>
				</div>
			</div>
			<!-- Code Box End -->
        </div>
        <!-- contact area END -->
    </div>
    <!-- Content END-->
    <!-- Footer -->
    <footer class="site-footer">
        <div class="footer-top overlay-black-dark" style="background-image:url(images/background/bg17.jpg);">
            <div class="container">
                <div class="row">
					<div class="col-md-12 col-xl-5 col-lg-4 col-sm-8 footer-col-4">
                        <div class="widget">
                            <h5 class="m-b30 text-white">Subscribe To Our Newsletter</h5>
							<p class="text-capitalize m-b20">Lorem Ipsum is simply dummy text of the printing and typesetting industry has been the industry's standard dummy text ever since the..</p>
                            <div class="subscribe-form m-b20">
								<form class="dzSubscribe" action="script/mailchamp.php" method="post">
									<div class="dzSubscribeMsg"></div>
									<div class="input-group">
										<input name="dzEmail" required="required" type="email" class="form-control" placeholder="Your Email"/>
										<span class="input-group-btn">
											<button name="submit" value="Submit" type="submit" class="site-button">Subscribe</button>
										</span> 
									</div>
								</form>
							</div>
							<ul class="list-inline m-a0">
								<li><a href="javascript:void(0);" class="site-button facebook circle "><i class="fa fa-facebook"></i></a></li>
								<li><a href="javascript:void(0);" class="site-button google-plus circle "><i class="fa fa-google-plus"></i></a></li>
								<li><a href="javascript:void(0);" class="site-button linkedin circle "><i class="fa fa-linkedin"></i></a></li>
								<li><a href="javascript:void(0);" class="site-button instagram circle "><i class="fa fa-instagram"></i></a></li>
								<li><a href="javascript:void(0);" class="site-button twitter circle "><i class="fa fa-twitter"></i></a></li>
							</ul>
                        </div>
                    </div>
					<div class="col-md-3 col-5 col-xl-2 col-lg-2 col-sm-4 footer-col-4">
                        <div class="widget widget_services border-0">
                            <h5 class="m-b30 text-white">Company</h5>
                            <ul>
                                <li><a href="javascript:void(0);">About Us </a></li>
                                <li><a href="javascript:void(0);">Home </a></li>
                                <li><a href="javascript:void(0);">Contact Us</a></li>
                                <li><a href="javascript:void(0);">About Us</a></li>
                                <li><a href="javascript:void(0);">Our Services</a></li>
                            </ul>
                        </div>
                    </div>
					<div class="col-md-3 col-7 col-xl-2 col-lg-3 col-sm-6 footer-col-4">
                        <div class="widget widget_services border-0">
                            <h5 class="m-b30 text-white">Useful Link</h5>
                            <ul>
                                <li><a href="javascript:void(0);">Create Account</a></li>
                                <li><a href="javascript:void(0);">Company Philosophy </a></li>
                                <li><a href="javascript:void(0);">Corporate Culture</a></li>
                                <li><a href="javascript:void(0);">Portfolio</a></li>
                                <li><a href="javascript:void(0);">Client Management</a></li>
                            </ul>
                        </div>
                    </div>
					<div class="col-md-6 col-xl-3 col-lg-3 col-sm-6 footer-col-4">
                        <div class="widget widget_getintuch">
                            <h5 class="m-b30 text-white ">Contact us</h5>
                            <ul>
                                <li><i class="ti-location-pin"></i><strong>address</strong> demo address #8901 Marmora Road Chi Minh City, Vietnam </li>
                                <li><i class="ti-mobile"></i><strong>phone</strong>0800-123456 (24/7 Support Line)</li>
								<li><i class="ti-email"></i><strong>email</strong>info@example.com</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- footer bottom part -->
        <div class="footer-bottom">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-sm-6 text-left "> <span>Copyright © 2020 DexignZone</span> </div>
                    <div class="col-md-6 col-sm-6 text-right "> 
						<div class="widget-link "> 
							<ul>
								<li><a href="javascript:void(0);"> About</a></li> 
								<li><a href="javascript:void(0);"> Help Desk</a></li> 
								<li><a href="javascript:void(0);"> Privacy Policy</a></li> 
							</ul>
						</div>
					</div>
                </div>
            </div>
        </div>
    </footer>
    <!-- Footer END -->
    <!-- scroll top button -->
    <button class="scroltop fa fa-chevron-up" ></button>
</div>
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
document.getElementById("copyButton").addEventListener("click", function() {
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
@endsection