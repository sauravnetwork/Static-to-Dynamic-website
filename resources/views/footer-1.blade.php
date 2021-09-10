@extends('layout-f')
@section('footer-1')
    <!-- Content -->
    <div class="page-content bg-white">
        <!-- inner page banner -->
        <div class="dlab-bnr-inr overlay-black-middle bg-pt" style="background-image:url(images/banner/bnr1.jpg);">
            <div class="container">
                <div class="dlab-bnr-inr-entry">
                    <h1 class="text-white">Footer 1</h1>
					<!-- Breadcrumb row -->
					<div class="breadcrumb-row">
						<ul class="list-inline">
							<li><a href="javascript:void(0);">Home</a></li>
							<li>Footer 1</li>
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
								<h2 class="title">Check Footer Style 01</h2>
								<p>A wonderful serenity has taken possession of my entire soul, like these sweet mornings of spring which I enjoy with my whole heart. I am alone, and feel the charm.</p>
							</div>
						</div>
					</div>
					<div class="relative">
						<button id="copyButton" class="btn">Copy</button>
<pre class="code-box" id="copyTarget">
&lt;!-- Footer --&gt;
&lt;footer class="site-footer" &gt;
  &lt;div class="p-tb60 text-center bg-black "&gt;
    &lt;div class="container"&gt;
      &lt;div class="row"&gt;
        &lt;div class="col-md-12"&gt;
          &lt;h3 class="font-weight-300"&gt;LET'S CONNECT&lt;/h3&gt;
          &lt;div class="dlab-separator bg-white"&gt;&lt;/div&gt;
          &lt;p class="max-w600 m-auto"&gt;Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard&lt;/p&gt;
          &lt;ul class="list-inline m-t20"&gt;
            &lt;li&gt;&lt;a class="site-button white outline circle"&gt;&lt;i class="fa fa-facebook"&gt;&lt;/i&gt;&lt;/a&gt;&lt;/li&gt;
            &lt;li&gt;&lt;a class="site-button white outline circle"&gt;&lt;i class="fa fa-google-plus"&gt;&lt;/i&gt;&lt;/a&gt;&lt;/li&gt;
            &lt;li&gt;&lt;a class="site-button white outline circle"&gt;&lt;i class="fa fa-linkedin"&gt;&lt;/i&gt;&lt;/a&gt;&lt;/li&gt;
            &lt;li&gt;&lt;a class="site-button white outline circle"&gt;&lt;i class="fa fa-twitter"&gt;&lt;/i&gt;&lt;/a&gt;&lt;/li&gt;
          &lt;/ul&gt;
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
        <div class="p-tb60 text-center bg-black-1" style="background-image:url(images/background/bg2.png); background-size: contain;">
            <div class="container">
                <div class="row">
					<div class="col-md-12">
						<h3 class="font-weight-300">LET'S CONNECT</h3>
						<div class="dlab-separator bg-white"></div>
						<p class="max-w600 m-auto">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard</p>
						<ul class="list-inline m-t20">
							<li><a class="site-button white outline circle"><i class="fa fa-facebook"></i></a></li>
							<li><a class="site-button white outline circle"><i class="fa fa-google-plus"></i></a></li>
							<li><a class="site-button white outline circle"><i class="fa fa-linkedin"></i></a></li>
							<li><a class="site-button white outline circle"><i class="fa fa-twitter"></i></a></li>
						</ul>
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